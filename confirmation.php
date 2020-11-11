<?php

// Error Reporting Turned On
ini_set('display_errors', 1);
error_reporting(E_ALL);

$page_title = "Thank you";
include("includes/header.html");
?>

<body>
    <div class="container-fluid padding">
        <?php
        $fname = $_POST['fname'];
        echo "<h2>" . "Thank you! " . $fname . " for your request. We'll be in touch soon!</h2>";
        echo "<p>" . "You can " . '<a href="https://safal.greenriverdev.com/outreach/#resources">click here </a>' . "to see the 
                other resources provided!" . "</p>";
        ?>
    </div>
</body>

<?php
include("includes/footer.html");
?>
