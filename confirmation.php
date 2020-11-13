<?php

// Error Reporting Turned On
ini_set('display_errors', 1);
error_reporting(E_ALL);

if(empty($_POST))
{
    header("location:index.php");
}

$page_title = "Thank you";
include("includes/header.html");
require ("includes/database-credentials.php");
?>

<body>
    <div class="container-fluid padding">
        <?php
            $fname = $_POST['fname'];
            echo "<h2>" . "Thank you! " . $fname . " for your application. We'll be in touch soon!</h2>";
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

<?php
include("includes/footer.html");
?>
