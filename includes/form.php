<?php
    ini_set('display_errors', 1);
    error_reporting(E_ALL);

    //var_dump($_POST);
?>

<section>
    <div class="col-12 text-center">
        <h2>Application Form</h2>
    </div>

    <form id="guestForm" method="post" action="confirmation.php">

        <div class="form-check">
            <input class="form-check-input" type="checkbox" name="homeless[]" id="homeless" value="homeless">
            <label class="form-check-label" for="homeless"><strong>I am currently without residence.</strong></label>
        </div>

        <div class="row">
            <div class="col-md-6 col-lg-6">
                <fieldset class="form-group">
                    <legend>Contact Info</legend>
                    <div class="form-group">
                        <label for="firstname">First Name</label>
                        <span class="required">*</span>
                        <input class="form-control" type="text" id="firstname" name="fname">
                        <span class="d-none text-danger" id="errorFname">Please enter a first name</span>
                    </div>

                    <div class="form-group">
                        <label for="lastname">Last Name</label>
                        <span class="required">*</span>
                        <input class="form-control" type="text" id="lastname" name="lname">
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
                <span class="d-none text-danger" id="noServicesSelected">Please select at least one service</span>
            </div>
        </div>

        <input class="btn btn-primary" type="submit" value="Submit">
        <br>
        <small><span class="required">* </span>Required Field</small>
    </form>

</section>
