<?php require_once '../../../script/pdocrud.php'; ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta content="PDO Database abstraction, PDO Crud, PDOModel, PHP SQlite helper class, PHP Mysql database abstraction, PDO Transactions, no query PDO, PDO helper class, database management using PDO, Mysql crud, multi table join, PHP Sqlite CRUD" name="keyword" />
        <meta content="PDOModel is a Database abstraction and helper class for PHP and Mysql, PDSql, SQLite database operations. It provides various simple functions to perform database related operation like insert, delete, update, selection without writing any queries." name="description" />
        <!-- Page specific CSS to improve design of the form. This script is not about writing css to create beautiful forms, it is generating the form from
        database directly with minimal lines of code.-->

        <link href='https://fonts.googleapis.com/css?family=Josefin+Sans' rel='stylesheet' type='text/css'>

        <title>PDOCrud - Cruise Booking form</title>

    </head>
    <body>
        <header>
            <div class="heading">
                <a href="#" class="PDOCrud-logo"> <h3> PDOCrud - Customer Cruise Booking form demo </h3></a>
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
                            <div class="col-sm-6 col-sm-offset-3 form-box">
                                <div class="form-top">
                                    <?php
                                    $pdocrud = new PDOCrud();
                                    $pdocrud->formStaticFields("personalinfo", "html", "<div class='form-top-left'><h3>PDOCrud Cruise Booking Form</h3><p>Please Fill in the form below</p></div>");
                                    $pdocrud->formStaticFields("personalinfo1", "html", "<div class='form-top-right'><i class='fa fa-pencil'></i></div>");

                                    $pdocrud->fieldDisplayOrder(array("personalinfo", "personalinfo1"));
                                    $pdocrud->formFields(array("personalinfo", "personalinfo1", "cruise_destination", "cruise_length", "departure_month", "day", "cruise_departure_port", "cruise_line", "where_do_you_live"));

                                    $pdocrud->fieldAttributes("cruise_destination", array("placeholder" => "Cruise Destination")); //add placeholder attribute
                                    $pdocrud->fieldAttributes("cruise_length", array("placeholder" => "Cruise Length")); //add placeholder attribute
                                    $pdocrud->fieldAttributes("departure_month", array("placeholder" => "Departure Month")); //add placeholder attribute
                                    $pdocrud->fieldAttributes("day", array("placeholder" => "No. Of Days")); //add placeholder attribute
                                    $pdocrud->fieldAttributes("cruise_departure_port", array("placeholder" => "Cruise Departure Port")); //add placeholder attribute
                                    $pdocrud->fieldAttributes("cruise_line", array("placeholder" => "Cruise Line")); //add placeholder attribute
                                    $pdocrud->fieldAttributes("where_do_you_live", array("placeholder" => "where do you live?")); //add placeholder attribute
                                    $pdocrud->fieldHideLable("cruise_destination"); // Hide label
                                    $pdocrud->fieldHideLable("cruise_length"); // Hide label
                                    $pdocrud->fieldHideLable("departure_month"); // Hide label
                                    $pdocrud->fieldHideLable("day"); // Hide label   
                                    $pdocrud->fieldHideLable("cruise_departure_port"); // Hide label
                                    $pdocrud->fieldHideLable("cruise_line"); // Hide label
                                    $pdocrud->fieldHideLable("where_do_you_live"); // Hide label

                                    $pdocrud->buttonHide("cancel"); // Hide button
                                    $pdocrud->setLangData("save", "SUBMIT");

  $pdocrud->enqueueCss("font-awesome.min", "../assets/css/font-awesome/css/font-awesome.min.css");
                                    $pdocrud->enqueueCss("form-elements", "../assets/css/form-elements.css");
                                    $pdocrud->enqueueCss("signup", "../assets/css/signup-form.css");
                                    $pdocrud->enqueueCss("style", "../assets/css/style.css");

                                    echo $pdocrud->dbTable("cruises_booking")->render("insertform");
                                    ?>
                                </div>
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
                                    $pdocrud->formStaticFields("personalinfo", "html", "<div class='form-top-left'><h3>PDOCrud Cruise Booking Form</h3><p>Please Fill in the form below</p></div>");
                                    $pdocrud->formStaticFields("personalinfo1", "html", "<div class='form-top-right'><i class='fa fa-pencil'></i></div>");

                                    $pdocrud->fieldDisplayOrder(array("personalinfo", "personalinfo1"));
                                    $pdocrud->formFields(array("personalinfo", "personalinfo1", "cruise_destination", "cruise_length", "departure_month", "day", "cruise_departure_port", "cruise_line", "where_do_you_live"));

                                    $pdocrud->fieldAttributes("cruise_destination", array("placeholder" => "Cruise Destination")); //add placeholder attribute
                                    $pdocrud->fieldAttributes("cruise_length", array("placeholder" => "Cruise Length")); //add placeholder attribute
                                    $pdocrud->fieldAttributes("departure_month", array("placeholder" => "Departure Month")); //add placeholder attribute
                                    $pdocrud->fieldAttributes("day", array("placeholder" => "No. Of Days")); //add placeholder attribute
                                    $pdocrud->fieldAttributes("cruise_departure_port", array("placeholder" => "Cruise Departure Port")); //add placeholder attribute
                                    $pdocrud->fieldAttributes("cruise_line", array("placeholder" => "Cruise Line")); //add placeholder attribute
                                    $pdocrud->fieldAttributes("where_do_you_live", array("placeholder" => "where do you live?")); //add placeholder attribute
                                    $pdocrud->fieldHideLable("cruise_destination"); // Hide label
                                    $pdocrud->fieldHideLable("cruise_length"); // Hide label
                                    $pdocrud->fieldHideLable("departure_month"); // Hide label
                                    $pdocrud->fieldHideLable("day"); // Hide label   
                                    $pdocrud->fieldHideLable("cruise_departure_port"); // Hide label
                                    $pdocrud->fieldHideLable("cruise_line"); // Hide label
                                    $pdocrud->fieldHideLable("where_do_you_live"); // Hide label

                                    $pdocrud->buttonHide("cancel"); // Hide button
                                    $pdocrud->setLangData("save", "SUBMIT");

  $pdocrud->enqueueCss("font-awesome.min", "../assets/css/font-awesome/css/font-awesome.min.css");
                                    $pdocrud->enqueueCss("form-elements", "../assets/css/form-elements.css");
                                    $pdocrud->enqueueCss("signup", "../assets/css/signup-form.css");
                                    $pdocrud->enqueueCss("style", "../assets/css/style.css");

                                    echo $pdocrud->dbTable("cruises_booking")->render("insertform");
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