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

        <title>PDOCrud - Event Booking form</title>

    </head>
    <body>
        <header>
            <div class="heading">
                <a href="#" class="PDOCrud-logo"> <h3> PDOCrud - Event Booking form demo </h3></a>
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
                                <div class="form-top">
                                    <?php
                                    $pdocrud = new PDOCrud();
                                    $pdocrud->formStaticFields("personalinfo", "html", "<div class='form-top-left'><h3>PDOCrud Event Booking Form</h3><p>Please Fill in the form below</p></div>");
                                    $pdocrud->formStaticFields("personalinfo1", "html", "<div class='form-top-right'><i class='fa fa-pencil'></i></div>");

                                    $pdocrud->fieldDisplayOrder(array("personalinfo", "personalinfo1"));
                                    $pdocrud->formFields(array("personalinfo", "personalinfo1", "event_title", "event_location", "event_date_and_time", "description_of_event", "link_to_url/website", "include_youtube_video", "event_image", "no_of_tickets", "cost_per_ticket", "first_name", "last_name", "email", "paypal_account", "paypal_currency", "voucher_code", "phone", "city", "state", "country", "event_laguage_option"));

                                    $pdocrud->fieldAttributes("first_name", array("placeholder" => "First Name")); //add placeholder attribute
                                    $pdocrud->fieldAttributes("last_name", array("placeholder" => "Last Name")); //add placeholder attribute
                                    $pdocrud->fieldAttributes("email", array("placeholder" => "Email")); //add placeholder attribute
                                    $pdocrud->fieldAttributes("phone", array("placeholder" => "Contact Number")); //add placeholder attribute
                                    $pdocrud->fieldAttributes("from_date", array("placeholder" => "Date of Arrival")); //add placeholder attribute
                                    $pdocrud->fieldAttributes("to_date", array("placeholder" => "Check Out Date")); //add placeholder attribute
                                    $pdocrud->fieldAttributes("no_of_tickets", array("placeholder" => "Number of Tickets")); //add placeholder attribute
                                    $pdocrud->fieldAttributes("cost_per_ticket", array("placeholder" => "Cost Per Ticket")); //add placeholder attribute
                                    $pdocrud->fieldAttributes("paypal_account", array("placeholder" => "Paypal Account")); //add placeholder attribute
                                    $pdocrud->fieldAttributes("paypal_currency", array("placeholder" => "Paypal Currency")); //add placeholder attribute
                                    // $pdocrud->fieldAttributes("booking_amount", array("placeholder" => "Booking Amount")); //add placeholder attribute
                                    $pdocrud->fieldAttributes("event_title", array("placeholder" => "Event Title")); //add placeholder attribute
                                    $pdocrud->fieldAttributes("event_location", array("placeholder" => "event Location")); //add placeholder attribute
                                    $pdocrud->fieldAttributes("event_date_and_time", array("placeholder" => "Event Date and Time")); //add placeholder attribute
                                    $pdocrud->fieldAttributes("description_of_event", array("placeholder" => "Description Of Event")); //add placeholder attribute
                                    $pdocrud->fieldAttributes("link_to_url/website", array("placeholder" => "Link To Url/Website")); //add placeholder attribute
                                    $pdocrud->fieldAttributes("include_youtube_video", array("placeholder" => "Include Youtube Video")); //add placeholder attribute
                                    
                                    
                                    
                                    $pdocrud->fieldHideLable("first_name"); // Hide label
                                    $pdocrud->fieldHideLable("last_name"); // Hide label
                                    $pdocrud->fieldHideLable("email"); // Hide label
                                    $pdocrud->fieldHideLable("phone"); // Hide label                              
                                    $pdocrud->fieldHideLable("no_of_tickets"); // Hide label
                                    $pdocrud->fieldHideLable("cost_per_ticket"); // Hide label
                                    $pdocrud->fieldHideLable("paypal_account"); // Hide label
                                    $pdocrud->fieldHideLable("paypal_currency"); // Hide label
                                    // $pdocrud->fieldHideLable("booking_amount"); // Hide label
                                    //$pdocrud->fieldHideLable("payment_method"); // Hide label
                                    
                                    $pdocrud->fieldHideLable("event_title"); // Hide label
                                    $pdocrud->fieldHideLable("event_location"); // Hide label
                                    $pdocrud->fieldHideLable("event_date_and_time"); // Hide label
                                    $pdocrud->fieldHideLable("description_of_event"); // Hide label                              
                                    $pdocrud->fieldHideLable("link_to_url/website"); // Hide label
                                    $pdocrud->fieldHideLable("include_youtube_video"); // Hide label
                                    
                                    
                                    $pdocrud->fieldTypes("city", "select"); //change type to select
                                    $pdocrud->fieldDataBinding("city", "city", "city_id", "city_name", "db"); //add data using another table name city

                                    $pdocrud->fieldTypes("state", "select"); //change type to select
                                    $pdocrud->fieldDataBinding("state", "state", "state_id", "state_name", "db"); //add data using another table name country
                                    $pdocrud->fieldTypes("country", "select"); //change type to select
                                    $pdocrud->fieldDataBinding("country", "country", "country_id", "country_name", "db"); //add data using another table name country
//   $pdocrud->fieldTypes("payment_method", "select"); //change education to select dropdown
//                                    $pdocrud->fieldDataBinding("payment_method", array("Cash", "Debit Card", "Credit Card"), "", "", "array"); //add data using array in select dropdown
                                    
                                    $pdocrud->fieldGroups("location", array("event_title", "description_of_event"));
                                    $pdocrud->fieldGroups("date1", array("event_date_and_time", "event_location"));
                                    $pdocrud->fieldGroups("number_of", array("no_of_tickets", "cost_per_ticket"));

                                    $pdocrud->fieldGroups("name", array("first_name", "last_name"));
                                    $pdocrud->fieldGroups("contact", array("email", "phone"));
                                    $pdocrud->fieldGroups("paypal", array("paypal_account", "paypal_currency"));
                                    $pdocrud->fieldGroups("add", array("city", "state", "country"));
                                
                                   $pdocrud->fieldTypes("event_image", "image"); //change type to image

                                    $pdocrud->fieldTypes("event_laguage_option", "checkbox"); //change education to select dropdown
                                    $pdocrud->fieldDataBinding("event_laguage_option", array("English", "Hindi", "French", "Spanish", "Chinese"), "", "", "array"); //add data using array in select dropdown
                                                                                                             
                                    $pdocrud->buttonHide("cancel"); // Hide button
                                    $pdocrud->setLangData("save", "SUBMIT");

                                    $pdocrud->fieldCssClass("first_name", array("form-first-name")); // add class 
                                    $pdocrud->fieldCssClass("last_name", array("form-first-name")); // add class 
                                    $pdocrud->fieldCssClass("email", array("form-first-name")); // add class 

                                   $pdocrud->enqueueCss("font-awesome.min", "../assets/css/font-awesome/css/font-awesome.min.css");
                                   // $pdocrud->enqueueCss("form-elements", "../assets/css/form-elements.css");
                                    $pdocrud->enqueueCss("signup", "../assets/css/signup-form.css");
                                    $pdocrud->enqueueCss("style", "../assets/css/style.css");

                                    echo $pdocrud->dbTable("event")->render("insertform");
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
                                    $pdocrud->formStaticFields("personalinfo", "html", "<div class='form-top-left'><h3>PDOCrud Event Booking Form</h3><p>Please Fill in the form below</p></div>");
                                    $pdocrud->formStaticFields("personalinfo1", "html", "<div class='form-top-right'><i class='fa fa-pencil'></i></div>");

                                    $pdocrud->fieldDisplayOrder(array("personalinfo", "personalinfo1"));
                                    $pdocrud->formFields(array("personalinfo", "personalinfo1", "event_title", "event_location", "event_date_and_time", "description_of_event", "link_to_url/website", "include_youtube_video", "event_image", "no_of_tickets", "cost_per_ticket", "first_name", "last_name", "email", "paypal_account", "paypal_currency", "voucher_code", "phone", "city", "state", "country", "event_laguage_option"));

                                    $pdocrud->fieldAttributes("first_name", array("placeholder" => "First Name")); //add placeholder attribute
                                    $pdocrud->fieldAttributes("last_name", array("placeholder" => "Last Name")); //add placeholder attribute
                                    $pdocrud->fieldAttributes("email", array("placeholder" => "Email")); //add placeholder attribute
                                    $pdocrud->fieldAttributes("phone", array("placeholder" => "Contact Number")); //add placeholder attribute
                                    $pdocrud->fieldAttributes("from_date", array("placeholder" => "Date of Arrival")); //add placeholder attribute
                                    $pdocrud->fieldAttributes("to_date", array("placeholder" => "Check Out Date")); //add placeholder attribute
                                    $pdocrud->fieldAttributes("no_of_tickets", array("placeholder" => "Number of Tickets")); //add placeholder attribute
                                    $pdocrud->fieldAttributes("cost_per_ticket", array("placeholder" => "Cost Per Ticket")); //add placeholder attribute
                                    $pdocrud->fieldAttributes("paypal_account", array("placeholder" => "Paypal Account")); //add placeholder attribute
                                    $pdocrud->fieldAttributes("paypal_currency", array("placeholder" => "Paypal Currency")); //add placeholder attribute
                                    // $pdocrud->fieldAttributes("booking_amount", array("placeholder" => "Booking Amount")); //add placeholder attribute
                                    $pdocrud->fieldAttributes("event_title", array("placeholder" => "Event Title")); //add placeholder attribute
                                    $pdocrud->fieldAttributes("event_location", array("placeholder" => "event Location")); //add placeholder attribute
                                    $pdocrud->fieldAttributes("event_date_and_time", array("placeholder" => "Event Date and Time")); //add placeholder attribute
                                    $pdocrud->fieldAttributes("description_of_event", array("placeholder" => "Description Of Event")); //add placeholder attribute
                                    $pdocrud->fieldAttributes("link_to_url/website", array("placeholder" => "Link To Url/Website")); //add placeholder attribute
                                    $pdocrud->fieldAttributes("include_youtube_video", array("placeholder" => "Include Youtube Video")); //add placeholder attribute
                                    
                                    
                                    
                                    $pdocrud->fieldHideLable("first_name"); // Hide label
                                    $pdocrud->fieldHideLable("last_name"); // Hide label
                                    $pdocrud->fieldHideLable("email"); // Hide label
                                    $pdocrud->fieldHideLable("phone"); // Hide label                              
                                    $pdocrud->fieldHideLable("no_of_tickets"); // Hide label
                                    $pdocrud->fieldHideLable("cost_per_ticket"); // Hide label
                                    $pdocrud->fieldHideLable("paypal_account"); // Hide label
                                    $pdocrud->fieldHideLable("paypal_currency"); // Hide label
                                    // $pdocrud->fieldHideLable("booking_amount"); // Hide label
                                    //$pdocrud->fieldHideLable("payment_method"); // Hide label
                                    
                                    $pdocrud->fieldHideLable("event_title"); // Hide label
                                    $pdocrud->fieldHideLable("event_location"); // Hide label
                                    $pdocrud->fieldHideLable("event_date_and_time"); // Hide label
                                    $pdocrud->fieldHideLable("description_of_event"); // Hide label                              
                                    $pdocrud->fieldHideLable("link_to_url/website"); // Hide label
                                    $pdocrud->fieldHideLable("include_youtube_video"); // Hide label
                                    
                                    
                                    $pdocrud->fieldTypes("city", "select"); //change type to select
                                    $pdocrud->fieldDataBinding("city", "city", "city_id", "city_name", "db"); //add data using another table name city

                                    $pdocrud->fieldTypes("state", "select"); //change type to select
                                    $pdocrud->fieldDataBinding("state", "state", "state_id", "state_name", "db"); //add data using another table name country
                                    $pdocrud->fieldTypes("country", "select"); //change type to select
                                    $pdocrud->fieldDataBinding("country", "country", "country_id", "country_name", "db"); //add data using another table name country
//   $pdocrud->fieldTypes("payment_method", "select"); //change education to select dropdown
//                                    $pdocrud->fieldDataBinding("payment_method", array("Cash", "Debit Card", "Credit Card"), "", "", "array"); //add data using array in select dropdown
                                    
                                    $pdocrud->fieldGroups("location", array("event_title", "description_of_event"));
                                    $pdocrud->fieldGroups("date1", array("event_date_and_time", "event_location"));
                                    $pdocrud->fieldGroups("number_of", array("no_of_tickets", "cost_per_ticket"));

                                    $pdocrud->fieldGroups("name", array("first_name", "last_name"));
                                    $pdocrud->fieldGroups("contact", array("email", "phone"));
                                    $pdocrud->fieldGroups("paypal", array("paypal_account", "paypal_currency"));
                                    $pdocrud->fieldGroups("add", array("city", "state", "country"));
                                
                                   $pdocrud->fieldTypes("event_image", "image"); //change type to image

                                    $pdocrud->fieldTypes("event_laguage_option", "checkbox"); //change education to select dropdown
                                    $pdocrud->fieldDataBinding("event_laguage_option", array("English", "Hindi", "French", "Spanish", "Chinese"), "", "", "array"); //add data using array in select dropdown
                                                                                                             
                                    $pdocrud->buttonHide("cancel"); // Hide button
                                    $pdocrud->setLangData("save", "SUBMIT");

                                    $pdocrud->fieldCssClass("first_name", array("form-first-name")); // add class 
                                    $pdocrud->fieldCssClass("last_name", array("form-first-name")); // add class 
                                    $pdocrud->fieldCssClass("email", array("form-first-name")); // add class 

                                   $pdocrud->enqueueCss("font-awesome.min", "../assets/css/font-awesome/css/font-awesome.min.css");
                                   // $pdocrud->enqueueCss("form-elements", "../assets/css/form-elements.css");
                                    $pdocrud->enqueueCss("signup", "../assets/css/signup-form.css");
                                    $pdocrud->enqueueCss("style", "../assets/css/style.css");

                                    echo $pdocrud->dbTable("event")->render("insertform");
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