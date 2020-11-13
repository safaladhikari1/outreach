<?php
// Error Reporting Turned On
ini_set('display_errors', 1);
error_reporting(E_ALL);

$page_title = "Outreach Ministry-Test";
include('includes/header.html');
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
            <img src="images/assistance3.jpg">
            <div class="carousel-caption">
                <h1 class="display-2">Outreach Ministry</h1>
                <h3>Here to help those in need.</h3>
            </div>
        </div>

        <div class="carousel-item">
            <img src="images/assistance2.jpg">
        </div>

        <div class="carousel-item">
            <img src="images/thriftshop2.jpg">
        </div>
    </div>
</div>

<!--- Jumbotron -->
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

<!--- Welcome Section -->
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

<!--- Three Column Section -->
<div class="container">

    <p>You can fill out online form below during our business hours or call 253-852-4100</p>

    <p>Appointments are made first come first served. Online form is only accessible during business hours.
        If you cannot access form it is either outside of business hours or we have filled our appointments for the
        week.
        Please try again next Monday beginning at 1 PM PST.</p>

    <hr class="my-4">

    <div class="col-12 text-center">
        <h2>Application Form</h2>
    </div>

    <form id="guestForm" method="post" action="confirmation.php">

        <div class="form-check">
            <input class="form-check-input" type="checkbox" name="homeless[]" id="homeless" value="homeless">
            <label class="form-check-label" for="homeless"><strong>I am currently without residence.</strong></label>
        </div>

        <!-- Row 1 Start -->
        <div class="row">
            <div class="col-md-6 col-lg-6">
                <fieldset class="form-group">
                    <legend>Contact Info</legend>
                    <div class="form-group">
                        <label for="firstname">First Name</label>
                        <span class="required">*</span>
                        <input class="form-control" type="text" id="firstname" name="fname"
                               aria-describedby="required-firstname">
                        <span class="d-none text-danger" id="errorFname">Please enter a first name</span>
                    </div>

                    <div class="form-group">
                        <label for="lastname">Last Name</label>
                        <span class="required">*</span>
                        <input class="form-control" type="text" id="lastname" aria-describedby="required-lastname" name="lname">
                        <span class="d-none text-danger" id="errorLname">Please enter a last name</span>
                    </div>

                    <div class="form-group">
                        <label for="email">Email Address</label>
                        <span class="required">*</span>
                        <span class="d-none required" id="emailAsterisk">*</span>
                        <input class="form-control" type="email" id="email" name="email">
                        <span class="d-none text-danger" id="noEmail">Please enter your email address</span>
                        <span class="d-none text-danger" id="invalidEmail">Please enter a valid email address.</span>
                    </div>

                    <div class="form-group">
                        <label for="phone">Phone Number</label>
                        <span class="required">*</span>
                        <input class="form-control" type="text" id="phone" name="phone">
                        <span class="d-none text-danger" id="invalidPhone">Please enter a valid phone number</span>
                    </div>

                    <div class="form-group" id="addressDisplay">
                        <label for="address">Address</label>
                        <span class="required">*</span>
                        <input class="form-control" type="text" id="address" name="address">
                        <span class="d-none text-danger" id="errorAddress">Please enter your address</span>
                    </div>

                    <div class="form-group" id="zipCodeDisplay">
                        <label for="zipCode">Zip Code</label>
                        <span class="required">*</span>
                        <input class="form-control" type="text" id="zipCode" name="zipcode">
                        <span class="d-none text-danger" id="noZipCode">Please enter your zip code</span>
                        <span class="d-none text-danger" id="invalidZipCode">Please enter a valid zip code</span>
                    </div>
                </fieldset>
            </div>

            <div class="col-md-6 col-lg-6">
                <fieldset class="form-group">
                    <legend>What assistance are you seeking? <br>(Check all that apply)</legend>

                    <div class="form-check mb-2">
                        <input class="form-check-input"
                               type="checkbox" name="services[]"
                               id="utilities" value="Utilities">
                        <label class="form-check-label"
                               for="utilities">Utilities (electricity/water)
                        </label>
                        <div id="utilDocs" class="d-none">
                            <span class="text-danger">
                                * You will need a copy of your current bill showing Name/Address; Urgent/Final notice and Account#
                            </span>
                        </div>
                    </div>

                    <div class="form-check mb-2">
                        <input class="form-check-input"
                               type="checkbox" name="services[]"
                               id="rent" value="Rent">
                        <label class='form-check-label'
                               for="rent">Rent
                        </label>
                        <div id="rentDocs" class="d-none">
                            <span class="text-danger">
                                * You will need your eviction notice.
                            </span>
                        </div>
                    </div>

                    <div class="form-check mb-2">
                        <input class="form-check-input"
                               type="checkbox" name="services[]"
                               id="gas" value="Gas">
                        <label class="form-check-label"
                               for="gas">Gas
                        </label>
                        <div id="gasDocs" class="d-none">
                            <span class="text-danger">
                                * You will need your valid Driver's License.
                            </span>
                        </div>
                    </div>

                    <div class="form-check mb-2">
                        <input class="form-check-input"
                               type="checkbox" name="services[]"
                               id="household" value="Clothing and Household">
                        <label class="form-check-label"
                               for="household">Clothing and Household items
                        </label>
                    </div>

                    <div class="form-check mb-2">
                        <input class="form-check-input"
                               type="checkbox" name="services[]"
                               id="license" value="Driver License">
                        <label class="form-check-label"
                               for="license">ID or Driver's License
                        </label>
                    </div>

                    <div class="form-check mb-2">
                        <input class="form-check-input"
                               type="checkbox" name="services[]"
                               id="food" value="Food">
                        <label class="form-check-label"
                               for="food">Food
                        </label>
                    </div>

                    <div class="form-check mb-2">
                        <input class="form-check-input"
                               type="checkbox" name="services[]"
                               id="other" value="Other">
                        <label class="form-check-label"
                               for="other">Other
                        </label>

                        <div class="form-group d-none mb-2" id="showOther">
                            <label for="otherService">Please enter your needs below:</label>
                            <textarea class="form-control" id="otherService" name="otherService" rows="3"></textarea>
                        </div>
                    </div>

                </fieldset>
            </div>
        </div>
        <!-- Row 1 End -->

        <!-- Row 2 End -->
        <input class="btn btn-primary" type="submit" value="Submit">
        <br>
        <small><span class="required">* </span>Required Field</small>
    </form>

    <hr class="my-4">
</div>

<!--- Two Column Section -->
<div class="container-fluid padding" id="resources">

    <div class="row welcome text-center">

        <div class="col-12">
            <h1 class="display-5">Other Resources Available</h1>
        </div>

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

<!--- Meet the team -->
<div class="container-fluid padding" id="services">
    <div class="row welcome text-center">
        <div class="col-12">
            <h1 class="display-4">Services We Provide</h1>
        </div>
        <hr>
    </div>
</div>

<!--- Cards -->
<div class="container-fluid padding">
    <div class="row padding">

        <div class="col-md-3">
            <div class="card">
                <img class="card-img-top" src="images/thriftshop.jpg">
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
                <img class="card-img-top" src="images/food1.jpg">
                <div class="card-body">
                    <h4 class="card-title">Emergency Food and Toiletries</h4>
                    <p class="card-text">Once per month</p>
                </div>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card">
                <img class="card-img-top" src="images/assistance1.jpg">
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
                <img class="card-img-top" src="images/Gas-Pump.jpg">
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

<!--- Connect -->

<div class="container-fluid padding" id="connect">
    <div class="row padding">
        <div class="col-md-8 col-lg-8">
            <h1 class="display-5">Get Involved</h1>

            <ul class="lead list-unstyled">Volunteer</ul>
            <li>Thrift Shop volunteers: Email: <a href="mailto:jacinta@stjameskent.org">jacinta@stjameskent.org</a> for
                more information.
            </li>
            <li>Outreach office phone volunteers: Email: <a href="mailto:postrander@stjameskent.org">postrander@stjameskent.org</a>
                for more information.
            </li>
            <br>

            <ul class="lead list-unstyled">Seasonal opportunities</ul>
            <li>Winter drive (gloves, socks, hand-warmers)</li>
            <li>Back-to school drive (backpacks and school supplies)</li>
            <li>Angel tree (Christmas gifts)</li>
            <br>

            <ul class="lead list-unstyled">Donations</ul>
            <li>Canned goods, non-perishables, diapers, personal/feminine hygiene items</li>

            <br>
            <span class="lead">Make a financial donation by clicking here </span><a
                    href="https://www.paypal.com/donate/?cmd=_s-xclick&hosted_button_id=H9ERUZQAKHFUA"
                    class="btn btn-primary">Make Donation</a>
        </div>

        <div class="col-md-4 col-lg-4">
            <img src="images/thriftshop4.jpg" class="img-fluid">
        </div>
    </div>
</div>


<?php
include('includes/footer.html');
?>
