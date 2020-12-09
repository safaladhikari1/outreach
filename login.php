<?php

// Error Reporting
ini_set('display_errors', 1);
error_reporting(E_ALL);

session_start();

$err = false;
$username = "";

// If the form has been submitted
if($_SERVER['REQUEST_METHOD'] == 'POST')
{
    // Get the username and password
    $username = strtolower(trim($_POST['username']));
    $password = trim($_POST['password']);

    // If they are correct
    // Actual username and password are stored in a separate file
    // Should be moved to home directory ABOVE public_html
    require ('login-creds.php');

    if($username == $adminUser && $password == $adminPassword)
    {
        $_SESSION['loggedin'] = true;

        // Redirect to page the user was on, or index page
        if(!isset($_SESSION['page']))
        {
            $_SESSION['page'] = 'requests.php';
        }

        header("location: " . $_SESSION['page']);
    }

    // Set an error flag
    $err = true;
}

// include will keep running, even if the file is not found.
$page_title = "Login Page";
include ('includes/header.html');
?>

<div class="container">
    <h1 class="display-4" style="margin-top: 2rem">Sign in</h1>
    <form action="#" method="post">

        <div class="form-group">
            <label for="username">Username</label>
            <input type="text" class="form-control" id="username" name="username"
                <?php echo "value='$username' "?>
            >
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" class="form-control" id="password" name="password">
        </div>

        <?php
        if($err)
        {
            echo "<span class='required'>Incorrect login</span><br>";
        }
        ?>

        <button type="submit" class="btn btn-primary">Login</button>
    </form>
</div>

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




