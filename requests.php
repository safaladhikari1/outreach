<?php
// Error Reporting Turned On
ini_set('display_errors', 1);
error_reporting(E_ALL);

session_start();

if(!isset($_SESSION['loggedin']))
{
    // Store the page that I'm currently on in the session
    $_SESSION['page'] = $_SERVER['REQUEST_URI'];

    // Redirect to login
    header("location: login.php");
}

$page_title = "Requests";
//var_dump($_POST);
include ("includes/header.html");
require ($_SERVER['HOME'].'/someFolder/dbcreds.php');
?>

<body>
<div class="container-fluid padding">

    <form method="post" action="#" class="form-inline">

        <?php
            if(isset($_POST['formCheck']))
            {
                $sqlUpdateState = "UPDATE formcheck SET `state` = !`state`";
                mysqli_query($cnxn, $sqlUpdateState);
            }

            $sqlGetState = "SELECT * FROM formcheck";
            $result = mysqli_query($cnxn, $sqlGetState);

            //Get the state value
            foreach ($result as $row) {
                $formState = $row['state'];
            }

            echo "<strong>Form Control:</strong>&nbsp";

            echo "<button type='submit' class='btn btn-secondary btn-sm btn-outline-success' name='formCheck'>Enable</button>&nbsp&nbsp";
            echo "<button type='submit' class='btn btn-secondary btn-sm btn-outline-danger' name='formCheck'>Disable</button>&nbsp&nbsp";

            echo "<strong>Form Status:</strong>&nbsp";

            if($formState == "1")
            {
                echo"<div class='alert alert-success' role='alert'>";
                echo"Form is enabled";
                echo"</div>";
            }
            else if($formState == "0")
            {
                echo"<div class='alert alert-danger' role='alert'>";
                echo"Form is disabled.";
                echo"</div>";
            }

            echo "&nbsp&nbsp<a type='button' class='btn btn-secondary btn-sm' href='logout.php'>Log Out</a>";
        ?>
    </form>

    <h2 class="text-center">Requests</h2>

    <table id="applicants" class="display cell-border compact stripe" style="width: 100%">
        <thead>
            <tr>
                <td>Applicant ID</td>
                <td>Submission Time</td>
                <td>Name</td>
                <td>Zip Code</td>
                <td>Email Address</td>
                <td>Phone Number</td>
                <td>Services Requested</td>
            </tr>
        </thead>

        <tbody>
        <?php
        $sql = "SELECT * FROM applicants";
        $result = mysqli_query($cnxn, $sql);

        foreach($result as $row)
        {
            $applicant_id = $row['applicant_id'];
            $submission_time = date("M d, Y g:i a", strtotime($row['application_date']));
            $name = $row['first_name'] . " " . $row['last_name'];
            $zip_code = $row['zip_code'];
            $email = $row['email'];
            $phone = $row['phone'];
            $services = $row['services'];

            echo "<tr>";
            echo "<td>$applicant_id</td>";
            echo "<td>$submission_time</td>";
            echo "<td>$name</td>";
            echo "<td>$zip_code</td>";
            echo "<td>$email</td>";
            echo "<td>$phone</td>";
            echo "<td>$services</td>";
            echo "</tr>";
        }
        ?>
        </tbody>
    </table>
</div>

<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="https://use.fontawesome.com/releases/v5.15.1/js/all.js"></script>
<script src="//cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
<script src="js/scripts.js"></script>
<script>

    $('#applicants').DataTable( {
        "order": [[ 0, "desc" ]]
    } );

</script>
</body>
</html>