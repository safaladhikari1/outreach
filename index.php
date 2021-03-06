<?php
// Error Reporting Turned On
ini_set('display_errors', 1);
error_reporting(E_ALL);

$page_title = "Outreach Ministry-Test";
include('includes/header.html');
require ($_SERVER['HOME'].'/someFolder/dbcreds.php');
?>

<!--- Image Slider -->
<div id="slides" class="carousel slide" data-ride="carousel">
    <ul class="carousel-indicators">
        <li data-target="#slides" data-slide-to="0" class="active"></li>
        <li data-target="#slides" data-slide-to="1"></li>
        <li data-target="#slides" data-slide-to="2"></li>
    </ul>

    <div class="carousel-inner">

        <div class="carousel-item active">
            <img src="images/assistance3.jpg" alt="assistance3">
            <div class="carousel-caption">
                <h1 class="display-2">Outreach Ministry</h1>
                <h3>Here to help those in need.</h3>
            </div>
        </div>

        <div class="carousel-item">
            <img src="images/assistance2.jpg" alt="assistance2">
        </div>

        <div class="carousel-item">
            <img src="images/thriftshop2.jpg" alt="thriftshop">
        </div>
    </div>
</div>

<!--- About Us -->
<div class="container-fluid" id="about">
    <div class="row jumbotron">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
            <p class="lead">The Outreach Ministry provides low-income Kent residents and the homeless with food, water,
                clothing, utility shut-off assistance, drivers licenses and IDs, referral information, and prayer
                always.
                We also provide school supplies and household furnishings, when they are available. Those seeking help
                must live within the Kent school district, be disabled, have children living with them,
                or are senior citizens. We always help the homeless.</p>
        </div>

    </div>
</div>

<!--- Seeking help -->
<div class="container-fluid padding">
    <div class="row welcome text-center">
        <div class="col-12">
            <h1 class="display-4">Are you seeking help?</h1>
        </div>
        <hr>
        <div class="col-12">
            <p class="lead">Minimum Qualifications: </p>
            <p class="lead">1. Must reside within Kent school zip code boundary (98030, 98031, 98032, 98042, 98058)</p>
            <p class="lead">2. We support all those who are currently without permanent shelter</p>
        </div>
    </div>

</div>

<!--- Form - 1row - divided 6 columns/each -->
<div class="container">

    <?php
        $sqlGetState = "SELECT * FROM formcheck";
        $result = mysqli_query($cnxn, $sqlGetState);

        //Get the state value
        foreach ($result as $row) {
            $formState = $row['state'];
        }

        if($formState)
        {
            echo "<p>You can fill out online form below during our business hours or call 253-852-4100</p>";
            include ("includes/form.php");
        }

        else
        {
            echo "<p>Appointments are made first come first served. Online form is only accessible during business hours.
                     If you cannot access form it is either outside of business hours or we have filled our appointments for the
                     week. Please try again next Monday beginning at 1 PM PST.</p>";
        }
    ?>

</div>
<hr class="my-4">

<!--- Other Resources -->
<div class="container-fluid padding" id="resources">

    <div class="row welcome text-center">

        <div class="col-12">
            <h1 class="display-4">Other Resources Available</h1>
        </div>
        <hr>

        <div class="col-6">
            <i class="fas fa-phone-square"></i>
            <a href="https://www.211.org" style="text-decoration: none; color: #563d7c;"><h3>211</h3></a>
            <p>211 is the most comprehensive source of locally curated social services information in the U.S. and most
                of Canada.</p>
        </div>

        <div class="col-6">
            <i class="fas fa-church"></i>
            <a href="https://kentmethodist.com/assistance" style="text-decoration: none; color: #2163af;"><h3>Kent
                    United Methodist Church</h3></a>
            <p>A welcoming and affirming place</p>
        </div>
    </div>
</div>

<hr class="my-4">

<!-- Services we provide -->
<div class="container-fluid padding" id="services">
    <div class="row welcome text-center">
        <div class="col-12">
            <h1 class="display-4">Services We Provide</h1>
        </div>
        <hr>
    </div>
</div>

<div class="container-fluid padding">
    <div class="row padding">

        <div class="col-md-3">
            <div class="card">
                <img class="card-img-top" src="images/thriftshop.jpg" alt="thriftshop">
                <div class="card-body">
                    <h4 class="card-title">A Thrift Store Voucher</h4>
                    <p class="card-text">Every six months</p>
                    <p class="card-text">Good for clothing items and small household items</p>
                    <p class="card-text">Thrift Store Hours: TBA</p>
                </div>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card">
                <img class="card-img-top" src="images/food1.jpg" alt="food">
                <div class="card-body">
                    <h4 class="card-title">Emergency Food and Toiletries</h4>
                    <p class="card-text">Once per month</p>
                </div>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card">
                <img class="card-img-top" src="images/assistance1.jpg" alt="assistance1">
                <div class="card-body">
                    <h4 class="card-title">Rent and Utilities</h4>
                    <p class="card-text">Once per calendar year</p>
                    <p class="card-text">Person seeking help must also be the name on bill</p>
                    <p class="card-text">Must have urgent or shut-off notice</p>
                </div>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card">
                <img class="card-img-top" src="images/Gas-Pump.jpg" alt="gaspump">
                <div class="card-body">
                    <h4 class="card-title">Gas Voucher</h4>
                    <p class="card-text">Every six months</p>
                    <p class="card-text">Must have a valid/current Driver's license (not an ID Card)</p>
                </div>
            </div>
        </div>

    </div>
    <hr class="my-4">
</div>

<!--- Get Involved -->

<div class="container-fluid padding" id="connect">
    <div class="row padding">
        <div class="col-12">
            <h1 class="display-4 text-center">Get Involved</h1>
        </div>

        <div class="col-md-8 col-lg-8">

            <p class="lead list-unstyled">Volunteer</p>
            <ul>
                <li>Thrift Shop volunteers: Email: <a href="mailto:jacinta@stjameskent.org">jacinta@stjameskent.org</a> for
                    more information.
                </li>
                <li>Outreach office phone volunteers: Email: <a href="mailto:postrander@stjameskent.org">postrander@stjameskent.org</a>
                    for more information.
                </li>
            </ul>
            <br>

            <p class="lead list-unstyled">Seasonal opportunities</p>
            <ul>
                <li>Winter drive (gloves, socks, hand-warmers)</li>
                <li>Back-to school drive (backpacks and school supplies)</li>
                <li>Angel tree (Christmas gifts)</li>
            </ul>
            <br>

            <p class="lead list-unstyled">Donations</p>
            <ul>
                <li>Canned goods, non-perishables, diapers, personal/feminine hygiene items</li>
            </ul>
            <br>

            <a href="https://www.paypal.com/donate/?cmd=_s-xclick&hosted_button_id=H9ERUZQAKHFUA" class="btn btn-primary btn-lg">Donate Online</a>
        </div>

        <div class="col-md-4 col-lg-4">
            <img src="images/thriftshop4.jpg" class="img-fluid" alt="thriftshop">
        </div>
    </div>
</div>

<?php
include('includes/footer.html');
?>
