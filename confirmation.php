<?php

// Error Reporting Turned On
ini_set('display_errors', 1);
error_reporting(E_ALL);

if(empty($_POST))
{
    header("location: index.php");
}

$page_title = "Thank you";
include("includes/header.html");
require ($_SERVER['HOME'].'/someFolder/dbcreds.php');
require("includes/form-functions.php");
?>

<body>
    <div class="container-fluid padding">
        <?php
            // Validate data
            $isValid = true;

            if(validName($_POST['fname']))
            {
                $fname = $_POST['fname'];
            }
            else
            {
                echo "<p>Invalid first name</p>";
                $isValid = false;
            }

            if(validName($_POST['lname']))
            {
                $lname = $_POST['lname'];
            }
            else
            {
                echo "<p>Invalid last name</p>";
                $isValid = false;
            }

            if(validContactInfo($_POST['email'], $_POST['phone']))
            {
                if (!empty($_POST['email']))
                {
                    $email = $_POST['email'];
                }
                else
                {
                    $email = "";
                }

                if (!empty($_POST['phone']))
                {
                    $phone = $_POST['phone'];
                }
                else
                {
                    $phone = "";
                }

                if(empty($email) AND empty($phone))
                {
                    echo "<p>Invalid contact information (email or phone)</p>";
                    $isValid = false;
                }
            }
            else
            {
                echo "<p>Missing contact information (email or phone)</p>";
            }

            if(!isset($_POST['homeless']))
            {
                if(validAddress($_POST['address']))
                {
                    $address = $_POST['address'];
                }
                else
                {
                    echo "<p>Invalid address</p>";
                    $isValid = false;
                }

                if(validZipcode($_POST['zipcode']))
                {
                    $zipcode = $_POST['zipcode'];
                }
                else
                {
                    echo "<p>Invalid zipcode</p>";
                    $isValid = false;
                }
            }
            else
            {
                $address = "Homeless";
                $zipcode = "";
            }

            if (!empty($_POST['services']))
            {
                $services = $_POST['services'];

                if (!validServices($services))
                {
                    echo "<p>Since you've been caught, make a donation to the Outreach Center!</p>";
                    $isValid = false;
                }
                else
                {
                    $services = implode("<br>", $services);

                    if (selectedOtherService($_POST['services']))
                    {
                        if (validOtherServiceText($_POST['otherService']))
                        {
                            $services .= ": " . $_POST['otherService'];
                        }
                        else
                        {
                            $isValid = false;
                        }
                    }
                }
            }
            else
            {
                echo "<p>No services selected</p>";
                $isValid = false;
            }

            if(!$isValid)
            {
                echo "<p><strong>Return to the form and correct your information.<br>
                        (Click the back arrow on the top left of your screen.)</strong></p>";
                return;
            }

            $fname = $_POST['fname'];
            echo "<h2 style='margin-top: 2rem'>" . "Thank you! " . $fname . " for your application. We'll be in touch soon!</h2>";
            echo "<p>" . "You can " . '<a href="https://safal.greenriverdev.com/outreach/#resources">click here </a>' . "to see the 
                    other resources provided!" . "</p>";

            $fname = $_POST['fname'];
            $lname = $_POST['lname'];

            $fromName = $fname . " " . $lname;
            $fromEmail = "sadhikari5@mail.greenriver.edu";

            $email = $_POST['email'];
            $phone = $_POST['phone'];
            $address = $_POST['address'];
            $zipcode = $_POST['zipcode'];
            $services = implode(". ", $_POST['services']);

            if (!empty($_POST['otherService']))
            {
                $services .= ": " . $_POST['otherService'];
            }

            //Save order to database

            $sql = "INSERT INTO applicants
            (`first_name`, `last_name`, `email`, `phone`, `address`, `zip_code`, `services`)
        
            VALUES
            (
                '$fname',
                '$lname',
                '$email',
                '$phone',
                '$address',
                '$zipcode',
                '$services'
            )";

            $success = mysqli_query($cnxn, $sql);

            if(!$success)
            {
                echo "<p>Sorry..something went wrong.</p>";
                return;
            }

            $to = "sadhikari5@mail.greenriver.edu";
            $subject = "Outreach Ministry Form Submission";
            $message = "Form submitted from $fname $lname\r\n";
            $message .= "Services Requested: $services\r\n";
            $message .= "Contact Information: (phone) $phone , (email) $email\r\n";
            $headers = "Name: $fromName <$fromEmail>";

            //Send email
            $success = mail($to, $subject, $message, $headers);

        ?>
    </div>
</body>

<!-- Footer -->
<footer class="fixed-bottom">
    <div class="container-fluid padding">
        <div class="row text-center">
            <div class="col-12">
                <h5>Made with <i class="fas fa-heart"></i> by Green River College students.</h5>
            </div>
        </div>
    </div>
</footer>

<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="https://use.fontawesome.com/releases/v5.15.1/js/all.js"></script>
<script src="js/scripts.js"></script>
</body>
</html>
