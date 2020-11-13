<?php
// Error Reporting Turned On
ini_set('display_errors', 1);
error_reporting(E_ALL);

$page_title = "Requests";

include ("includes/header.html");
require ("includes/database-credentials.php");
?>

<body>
<div class="container-fluid padding">
    <h1>Requests</h1>
    <table id="applicants" class="display cell-border compact stripe" style="width: 100%">
        <thead>
            <tr>
                <td>Applicant ID</td>
                <td>Submission Time</td>
                <td>Name</td>
                <td>Email Address</td>
                <td>Phone Number</td>
                <td>Address</td>
                <td>Zip Code</td>
                <td>Services</td>
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
            $email = $row['email'];
            $phone = $row['phone'];
            $address = $row['address'];
            $zip_code = $row['zip_code'];
            $services = $row['services'];

            echo "<tr>";
            echo "<td>$applicant_id</td>";
            echo "<td>$submission_time</td>";
            echo "<td>$name</td>";
            echo "<td>$email</td>";
            echo "<td>$phone</td>";
            echo "<td>$address</td>";
            echo "<td>$zip_code</td>";
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