<?php require_once '../../../script/pdocrud.php'; ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta content="Form Builder, DB Forms, PHP Form generator, Generate forms from Database, Contact Forms , Bootstrap Forms, forms, PDO Forms, Responsive forms, Insert Forms, Export form data, Email form data, Popup form" name="keywords" />
        <meta content="Formoid is advance PHP database form builder that generates the form directly from the database tables by writing 2-3 lines of codes only. It automatically creates form fields on the basis of the field type and field name as defined in the database table." name="description" />
        <!-- Page specific CSS to improve design of the form. This script is not about writing css to create beautiful forms, it is generating the form from
        database directly with minimal lines of code.-->



        <style type="text/css">
            ul{ list-style: none;}
            .form-content{background: #ddd}
            .checkbox label, .radio label{
                float: left;
            }
        </style>

        <link href='https://fonts.googleapis.com/css?family=Josefin+Sans' rel='stylesheet' type='text/css'>

        <title>PDOCrud - Car Booking form</title>

    </head>
    <body>
        <header>
            <div class="heading">
                <a href="#" class="PDOCrud-logo"> <h3> PDOCrud - Car Booking form demo </h3></a>
            </div>
            <div class="nav form-buttons">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <button type="button" class="btn btn-shadow btn-primary" data-toggle="modal" data-target="#code">
                            View Code
                        </button>
                    </li>                   
                </ul>
            </div>
        </header>
        <div class="top-content">
            <div class="inner-bg">
                <div class="container">
                    <div class="row main-form">
                        <div class="col-sm-12">
                            <div class="col-sm-8 col-sm-offset-2 form-box">
                                <div class="form-head">
                                    <div class="form-head-left">
                                        <h3>Car Booking form demo</h3>
                                        <p>Rent a Car</p>
                                    </div>
                                    <div class="form-head-right">
                                        <i class="fa fa-pencil"></i>
                                    </div> 
                                </div>
                                <div class="form-content">
                                    <?php
                                    $pdocrud = new PDOCrud();

                                    $pdocrud->FormSteps(array("pick_up_location", "pick_up_date", "pick_up_time", "drop_off_location", "drop_off_date", "drop_off_time", "car_type"), "Car Info.");
                                    $pdocrud->FormSteps(array("first_name", "last_name", "email", "phone"), "Personal Info.");
                                    $pdocrud->FormSteps(array("car_with", "additional_request"), "Extra Info.");

                                    $pdocrud->fieldAttributes("first_name", array("placeholder" => "First name")); //add placeholder attribute
                                    $pdocrud->fieldAttributes("last_name", array("placeholder" => "Last name")); //add placeholder attribute
                                    $pdocrud->fieldAttributes("email", array("placeholder" => "Email")); //add placeholder attribute
                                    $pdocrud->fieldAttributes("phone", array("placeholder" => "Contact Number")); //add placeholder attribute
                                    $pdocrud->fieldAttributes("zip/pin_code", array("placeholder" => "Zip/Pin Code")); //add placeholder attribute
                                    $pdocrud->fieldAttributes("comments", array("placeholder" => "Message")); //add placeholder attribute

                                    $pdocrud->fieldTypes("gender", "radio"); //change donation amount to radio button
                                    $pdocrud->fieldDataBinding("gender", array("Male", "Female"), "", "", "array"); //add data for radio button

                                    $pdocrud->fieldTypes("city", "select"); //change type to select
                                    $pdocrud->fieldDataBinding("city", "city", "city_id", "city_name", "db"); //add data using another table name city

                                    $pdocrud->fieldTypes("state", "select"); //change type to select
                                    $pdocrud->fieldDataBinding("state", "state", "state_id", "state_name", "db"); //add data using another table name country

                                    $pdocrud->fieldTypes("country", "select"); //change type to select
                                    $pdocrud->fieldDataBinding("country", "country", "country_id", "country_name", "db"); //add data using another table name country

                                    $pdocrud->fieldGroups("pick_up", array("pick_up_date", "pick_up_time"));
                                    $pdocrud->fieldGroups("drop_off", array("drop_off_date", "drop_off_time"));
                                    $pdocrud->fieldGroups("name", array("first_name", "last_name"));
                                    $pdocrud->fieldGroups("contact", array("email", "phone"));

                                    $pdocrud->fieldTypes("car_type", "radio"); //change donation amount to radio button
                                    $pdocrud->fieldDataBinding("car_type", array("Standart Cars", "Convertibles", "Luxury Cars", "Vans", "SUVs"), "", "", "array"); //add data for radio button

                                    $pdocrud->fieldTypes("car_with", "radio"); //change donation amount to radio button
                                    $pdocrud->fieldDataBinding("car_with", array("GPS Navigation system", "Booster", "Child Safety Seat", "Additinal Driver"), "", "", "array"); //add data for radio button
                                    
                                    $pdocrud->FormSteps(array("pick_up_location", "pick_up_date", "pick_up_time", "drop_off_location", "drop_off_date", "drop_off_time", "car_type", "car_type"), "Car Info.");

                                    $pdocrud->fieldHideLable("first_name"); // Hide label
                                    $pdocrud->fieldHideLable("last_name"); // Hide label
                                    $pdocrud->fieldHideLable("email"); // Hide label
                                    $pdocrud->fieldHideLable("phone"); // Hide label                              
                                    $pdocrud->fieldHideLable("comments"); // Hide label
                                    $pdocrud->fieldHideLable("zip/pin_code"); // Hide label

                                    $pdocrud->enqueueCss("signup", "../assets/css/signup-form.css");


                                    echo $pdocrud->setLangData("save", "Finish")->dbTable("car_booking")->render("insertform");
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- code Modal -->
        <div class="modal fade bs-example-modal-lg" id="code" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="myModalLabel">Code</h4>
                    </div>
                    <div class="modal-body">
                        <pre class="brush: php;">  
                               $pdocrud = new PDOCrud();

                                    $pdocrud->FormSteps(array("pick_up_location", "pick_up_date", "pick_up_time", "drop_off_location", "drop_off_date", "drop_off_time", "car_type"), "Car Info.");
                                    $pdocrud->FormSteps(array("first_name", "last_name", "email", "phone"), "Personal Info.");
                                    $pdocrud->FormSteps(array("car_with", "additional_request"), "Extra Info.");

                                    $pdocrud->fieldAttributes("first_name", array("placeholder" => "First name")); //add placeholder attribute
                                    $pdocrud->fieldAttributes("last_name", array("placeholder" => "Last name")); //add placeholder attribute
                                    $pdocrud->fieldAttributes("email", array("placeholder" => "Email")); //add placeholder attribute
                                    $pdocrud->fieldAttributes("phone", array("placeholder" => "Contact Number")); //add placeholder attribute
                                    $pdocrud->fieldAttributes("zip/pin_code", array("placeholder" => "Zip/Pin Code")); //add placeholder attribute
                                    $pdocrud->fieldAttributes("comments", array("placeholder" => "Message")); //add placeholder attribute

                                    $pdocrud->fieldTypes("gender", "radio"); //change donation amount to radio button
                                    $pdocrud->fieldDataBinding("gender", array("Male", "Female"), "", "", "array"); //add data for radio button

                                    $pdocrud->fieldTypes("city", "select"); //change type to select
                                    $pdocrud->fieldDataBinding("city", "city", "city_id", "city_name", "db"); //add data using another table name city

                                    $pdocrud->fieldTypes("state", "select"); //change type to select
                                    $pdocrud->fieldDataBinding("state", "state", "state_id", "state_name", "db"); //add data using another table name country

                                    $pdocrud->fieldTypes("country", "select"); //change type to select
                                    $pdocrud->fieldDataBinding("country", "country", "country_id", "country_name", "db"); //add data using another table name country

                                    $pdocrud->fieldGroups("pick_up", array("pick_up_date", "pick_up_time"));
                                    $pdocrud->fieldGroups("drop_off", array("drop_off_date", "drop_off_time"));
                                    $pdocrud->fieldGroups("name", array("first_name", "last_name"));
                                    $pdocrud->fieldGroups("contact", array("email", "phone"));

                                    $pdocrud->fieldTypes("car_type", "radio"); //change donation amount to radio button
                                    $pdocrud->fieldDataBinding("car_type", array("Standart Cars", "Convertibles", "Luxury Cars", "Vans", "SUVs"), "", "", "array"); //add data for radio button

                                    $pdocrud->fieldTypes("car_with", "radio"); //change donation amount to radio button
                                    $pdocrud->fieldDataBinding("car_with", array("GPS Navigation system", "Booster", "Child Safety Seat", "Additinal Driver"), "", "", "array"); //add data for radio button

                                    $pdocrud->fieldHideLable("first_name"); // Hide label
                                    $pdocrud->fieldHideLable("last_name"); // Hide label
                                    $pdocrud->fieldHideLable("email"); // Hide label
                                    $pdocrud->fieldHideLable("phone"); // Hide label                              
                                    $pdocrud->fieldHideLable("comments"); // Hide label
                                    $pdocrud->fieldHideLable("zip/pin_code"); // Hide label
                                    echo $pdocrud->setLangData("save", "Finish")->dbTable("car_booking")->render("insertform");
                        </pre>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save changes</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- DB Modal -->
        <div class="modal fade bs-example-modal-lg" id="dbmodal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="myModalLabel">Code</h4>
                    </div>
                    <div class="modal-body">
                        <img src="images/dbimages/registration_1.jpg" alt="Database diagram" />
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save changes</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- PHP brush scripts-->
        <script src="assets/js/shCore.js"></script>
        <script src="assets/js/shBrushPhp.js"></script>
    </body>
</html>