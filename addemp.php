<!-- Title Page-->
<title>Add Employee | Employee Tracking System</title>
<link rel="stylesheet" type="text/css" href="styleemplogin.css">
    <link rel="stylesheet" type="text/css" href="home.css">
<body>
    <header>
    <?php include('empNav.php')?>
    </header>
    <div class="divider"></div>

    <div class="page-wrapper bg-blue p-t-100 p-b-100 font-robo">
        <div class="wrapper wrapper--w680">
            <div class="card card-1">
                <div class="card-heading"></div>
                <div class="card-body">
                    <br><br>
                    <h2 class="headingone">Registration Information</h2>
                    <br>
                    <br>
                    <form action="process/addempprocess.php" method="POST" enctype="multipart/form-data">
                        <div class="row row-space">
                        <br>
                            <div class="col-2">
                                <div class="input-group">
                                    <input class="input--style-1" type="text" placeholder="First Name" name="firstName"
                                        required="required">
                                </div>
                            </div>
                            <br>
                            <div class="col-2">
                                <div class="input-group">
                                    <input class="input--style-1" type="text" placeholder="Last Name" name="lastName"
                                        required="required">
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="input-group">
                            <input class="input--style-1" type="email" placeholder="Email" name="email"
                                required="required">
                        </div>
                        <br>
                        <div class="input-group">
                            <input class="input--style-1" type="password" placeholder="Password" name="password"
                                required="required">
                        </div>
                        <br>

                        <p>Birthday</p>
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <input class="input--style-1" type="date" placeholder="BIRTHDATE" name="birthday"
                                        required="required">

                                </div>
                            </div>
                            <br>
                            <div class="col-2">
                                <div class="input-group">
                                    <div class="rs-select2 js-select-simple select--no-search">
                                        <select name="gender">
                                            <option disabled="disabled" selected="selected">GENDER</option>
                                            <option value="Male">Male</option>
                                            <option value="Female">Female</option>
                                            <option value="Other">Other</option>
                                        </select>
                                        <div class="select-dropdown"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <p>Joining Date</p>
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <input class="input--style-1" type="date" placeholder="Joining Date" name="joining_date"
                                        required="required">
                                </div>
                            </div>
                            <br>
                            <div class="col-2">
                                <div class="input-group">
                                    <div class="rs-select2 js-select-simple select--no-search">
                                        <select name="merital_status">
                                            <option disabled="disabled" selected="selected">Marital Status</option>
                                            <option value="Single">Single</option>
                                            <option value="Married">Married</option>
                                        </select>
                                        <div class="select-dropdown"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
<br>
                        <div class="input-group">
                            <input class="input--style-1" type="number" placeholder="Contact Number" name="contact"
                                required="required">
                        </div>
<br>
                        <div class="input-group">
                            <input class="input--style-1" type="text" placeholder="Address" name="address"
                                required="required">
                        </div>
<br>
                        <div class="input-group">
                            <input class="input--style-1" type="text" placeholder="Occupation" name="occupation"
                                required="required">
                        </div>
<br>
                        <div class="input-group">
                            <input class="input--style-1" type="text" placeholder="Nationality" name="nationality"
                                required="required">
                        </div>
                        <br>
                            <!-- to be changed in database -->
                        <div class="input-group">
                            <input class="input--style-1" type="text" placeholder="Emergency Contact" name="emergency_contact"
                                required="required">
                        </div>
                        <br>
                        <!-- Profile Image -->
                        <div class="input-group">
                            <input class="input--style-1" type="file" placeholder="file" name="file">
                        </div>


                        <div class="p-t-20">
                            <button class="btn btn--radius btn--green" type="submit">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <?php include('footer.php');?> 
    <!-- Jquery JS-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <!-- Vendor JS-->
    <script src="vendor/select2/select2.min.js"></script>
    <script src="vendor/datepicker/moment.min.js"></script>
    <script src="vendor/datepicker/daterangepicker.js"></script>

    <!-- Main JS-->
    <script src="js/global.js"></script>

</body>

</html>
<!-- end document-->