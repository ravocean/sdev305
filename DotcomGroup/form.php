<!--
Ben Chadwick
Jessica Sestak
Husrav Homidov
Tiffany Welo

Team Dotcom
11/1/20
This website is the homepage for St. James Outreach
-->

<?php

// Include header file
include ('includes/head.html');

?>

<body class="container">

<!--NAV BAR-->
<div class="w3-top mb-4">
    <div class="w3-bar  w3-black w3-card w3-content band shadow-lg bg-white rounded">
        <a
                class="w3-bar-item w3-button w3-padding-large w3-hide-medium w3-hide-large w3-right"
                href="javascript:void(0)"
                onclick="myFunction()"
                title="Toggle Navigation Menu"
        ><i class="fa fa-bars"></i
        ></a>
        <a href="index.php" class="w3-bar-item w3-button w3-padding-large">HOME</a>

        <div class="w3-dropdown-hover w3-hide-small ">
            <button class="w3-padding-large w3-button" title="More">
                OTHER RESOURCES <i class="fa fa-caret-down"></i>
            </button>
            <div class="w3-dropdown-content w3-bar-block w3-card-4">
                <a
                        href="https://www.211.org/"
                        target="_blank"
                        rel="noopener noreferrer"
                        class="w3-bar-item w3-button"
                >211.ORG</a
                >
                <a
                        href="http://kentmethodist.com/assistance"
                        target="_blank"
                        rel="noopener noreferrer"
                        class="w3-bar-item w3-button"
                >Kent Methodist</a
                >
            </div>
        </div>
    </div>
</div>

<!-- This is the title, and the description of the form -->
<div class="w3-black w3-container w3-content w3-center w3-padding-64 band shadow-lg p-3 mb-5 bg-white rounded">
    <h2 class="w3-wide w3-center">St. JAMES RESOURCE APPLICATION FORM</h2>
    <p class="w3-opacity w3-center">
        <i>This form will be collected and added to our assistance registry so that we may
            contact you as soon as we are able to help</i>
    </p>
</div>

<!-- The Application Form Section -->
<div class="w3-white band shadow-lg p-3 mb-5 bg-white rounded" id="form">
    <div class="w3-container w3-content w3-padding-64" id="applicationContainer">
        <!-- Creation of user information form -->
        <form id="application" method="post" action="confirmation.php">

            <!-- Creation of checklist with all the assistance options available -->
            <fieldset class="form-group border p-2">
                <legend>How can we assist you?</legend>
                <div class="w3-row-padding  w3-margin-top">
                    <!--Name and Contact-->
                    <div class="w3-half">
                        <div class="form-group col-md-6">
                            <label for="fname">First name</label>
                            <input type="text" class="form-control" id="fname" name="fname" placeholder="John"/>
                            <span id="error-fname" class="hidden">* required</span>
                        </div>
                        <!-- Last Name -->
                        <div class="form-group col-md-6">
                            <label for="lname">Last name</label>
                            <input type="text" class="form-control" id="lname" name="lname" placeholder="Smith"/>

                            <span id="error-lname" class="hidden">* required</span>
                        </div>
                        <!-- Phone Number -->
                        <div class="form-group col-md-6">
                            <label for="phone">Phone number</label>
                            <input type="tel" class="form-control" id="phone" name="phone"
                                   pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}"
                                   placeholder="xxx-xxx-xxxx">
                        </div>
                        <!-- Email -->
                        <div class="form-group col-md-6">
                            <label for="inputEmail">Email</label>
                            <input name="emailFrom" type="email" class="form-control" id="inputEmail" placeholder="name@example.com"/>
                        </div>
                    </div>

                    <!--Assistance Checkboxes-->
                    <div class="w3-half">
                        <div class='form-check'>
                            <input class='form-check-input'
                                   type='checkbox' name='assistance[]'
                                   id='utilities' value='utilities' onclick="utility()">
                            <label class='form-check-label'
                                   for='utilities'>Utilities (electricity or water)</label><br>
                            <label class="w3-small" for='utilities'>Assisted once per year</label>
                            <p id="util-info" style="display:none">*If able, attach a photo of the bill below showing
                                name
                                submitted.</p>
                        </div>
                        <div class='form-check'>
                            <input class='form-check-input'
                                   type='checkbox' name='assistance[]'
                                   id='rent' value='rent' onclick='rentInfo()'>
                            <label class='form-check-label'
                                   for='rent'>Rent</label><br>
                            <label class="w3-small" for='rent'>Assisted once per year</label>
                            <p id="rent-info" style="display:none">*If able, attach a photo of the bill below showing
                                name
                                submitted (must be urgent or shut-off notice)</p>
                        </div>
                        <div class='form-check'>
                            <input class='form-check-input'
                                   type='checkbox' name='assistance[]'
                                   id='gas' value='gas' onclick='gasInfo()'>
                            <label class='form-check-label'
                                   for='gas'>Gas Voucher</label><br>
                            <label class="w3-small" for='gas'>Assisted once per every six months</label>
                            <p id="gas-info" style="display:none">*Please attach a valid Driver's License with name
                                submitted
                                shown</p>
                        </div>
                        <div class='form-check'>
                            <input class='form-check-input'
                                   type='checkbox' name='assistance[]'
                                   id='thrift' value='thrift' onclick='thriftInfo()'>
                            <label class='form-check-label'
                                   for='thrift'>Thrift Store Voucher</label><br>
                            <label class="w3-small" for='thrift'>Assisted once per every six months</label>
                            <p id="thrift-info" style="display:none">*Thrift store hours will be set by appointment</p>
                        </div>
                        <div class='form-check'>
                            <input class='form-check-input'
                                   type='checkbox' name='assistance[]'
                                   id='driver' value='driver' onclick='driverInfo()'>
                            <label class='form-check-label'
                                   for='driver'>Seeking Driver's License or ID Card</label><br>
                            <label class="w3-small" for='driver'>Assisted by appointment</label>
                            <p id="id-info" style="display:none">*Please check DSHS to apply for a voucher, voucher's
                                will be
                                covered dependant on our resources</p>

                        </div>
                        <div class='form-check'>
                            <input class='form-check-input'
                                   type='checkbox' name='assistance[]'
                                   id='food' value='food'>
                            <label class='form-check-label'
                                   for='food'>Food</label><br>
                            <label class="w3-small" for='food'>Assisted once per month</label>
                        </div>
                        <div class='form-check'>
                            <input class='form-check-input'
                                   type='checkbox' name='assistance[]'
                                   id='other' value='other' onclick='otherChecked()'>
                            <label class='form-check-label'
                                   for='other'>Other</label><br>
                        </div>
                        <label for="otherTextInput" id="otherText" style="display:none">What assistance are you looking for?</label>
                        <input type="text" id="otherTextInput" name="otherTextInput" style="display:none"/>
                        <span id="error-other" class="hidden">* required</span>
                        <span class="hidden" id="error-assistance">*Please select assistance</span>
                    </div>

                </div>
            </fieldset>
            <!-- End of checklist portion of form -->

            <!--Address Form-->
            <div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="inputAddress">Address</label>
                        <input name="address" type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputAddress2">Address 2</label>
                        <input name = "addressTwo" type="text" class="form-control" id="inputAddress2"
                               placeholder="Apartment, studio, or floor">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="inputCity">City</label>
                        <input name = "city" type="text" class="form-control" id="inputCity">
                    </div>

                    <div class="form-group col-md-2">
                        <label for="inputZip">Zip</label>
                        <input name="zip" type="text" class="form-control" id="inputZip">
                    </div>
                </div>
            </div>

            <!-- Creation of comment and attachment box -->
            <div class="form-row">
                <div>
                    <div class="form-group">
                        <label for="commentBox">Optional comments and attachments</label>
                        <textarea name= "inComment" id="commentBox" style="height: 100px; width: 100%"></textarea>
                        <div>
                            <label for="myfile"></label>
                            <input type="file" id="myfile" name="myfile" multiple><br><br>
                        </div>
                    </div>
                </div>

                <img class="w3-hide-medium w3-hide-small" src="images/logo.png" alt="St. James logo"
                     style="width: 25%; height: 25%; padding-top: 30px; margin-left: 60px">
            </div>
            <!-- Creation of terms agreement -->
            <div class="form-group col-md-6">
                <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="gridCheck"/>
                    <label class="form-check-label" for="gridCheck">I agree all the information above is
                        valid</label>
                    <span id="error-check" class="hidden">* required</span>
                </div>
            </div>

            <!-- End of form submit button -->
            <button class="btn btn-info w3-button w3-blue w3-padding-large" type="submit">Submit</button>
            <br>
            <span id="error-contact" class="hidden">*Please give contact method (preferably email)</span>
        </form>
        <!-- End of user information form-->

    </div>

</div>

<!-- Creation of a lower footer noting the next steps on behalf of the Outreach program -->
<div class="w3-black w3-container w3-content w3-center w3-padding-16" style="height: 120px;">
    <h3 class="w3-center">
        Once submitted, we will contact you as soon as we can
    </h3>
    <p class="w3-content w3-center w3-hide-small" style="width: 600px;">
        To ensure we can give the resources needed, please make sure the information above is accurate.
        Additionally please note our hours of operation at the bottom of the page.
    </p>
</div>


<!-- Creation of Contact Info -->
<div class="w3-container w3-content w3-center w3-padding-64" id="contact">
    <!--Contact Left Side-->
    <div class="w3-col m6 w3-large w3-margin-bottom">
        <i class="fa fa-map-marker" id="google"></i>
        <!-- Insertion of Google Map -->
        <a
                href="https://goo.gl/maps/UEuiGpguDtXozPjN7"
                target="_blank"
                rel="noopener noreferrer"
        >
            24447 94th Ave S, Kent, WA, 98030 </a
        ><br/>
        <i class="fa fa-phone" style="width: 30px"></i> Phone:
        253-852-4100<br/>
        <i class="fa fa-envelope" style="width: 30px"> </i> Email:
        mail@mail.com<br/>
    </div>

    <!--Contact Right Side-->
    <div class="w3-col m6 w3-large w3-margin-bottom">
        <i class="fa fa-calendar" style="width: 30px"> </i>
        Monday: 1:00pm to 4:00pm <br/>
        Tuesday: 9:00am to 12:00 noon <br/>
        Wednesday: 1:00pm to 4:00pm<br/>
    </div>
</div>


<!-- All the scripts used for this document -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
        integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV"
        crossorigin="anonymous"></script>
<script src="scripts/form.js"></script>


</body>
</html>