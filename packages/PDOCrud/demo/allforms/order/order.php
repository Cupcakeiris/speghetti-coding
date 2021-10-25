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
        
        <title>PDOCrud - Order form</title>

    </head>
    <body>
        <header>
            <div class="heading">
                <a href="#" class="PDOCrud-logo"> <h3> PDOCrud - Order form demo </h3></a>
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
                                    $pdocrud->formStaticFields("personalinfo", "html", "<div class='form-top-left'><h3>PDOCrud Order Form</h3><p>Please Fill in the form below</p></div>");
                                    $pdocrud->formStaticFields("personalinfo1", "html", "<div class='form-top-right'><i class='fa fa-pencil'></i></div>");

                                    $pdocrud->fieldDisplayOrder(array("personalinfo", "personalinfo1"));
                                    $pdocrud->formFields(array("personalinfo", "personalinfo1", "first_name", "last_name", "email", "contact_no", "gender", "billing_address_line_1", "billing_address_line_2", "billing_city", "billing_state", "billing_postal_code", "billing_country", "shipping_address_line_1", "shipping_address_line_2", "shipping_city", "shipping_state", "shipping_country", "shipping_postal_code", "payment_method"));

                                    $pdocrud->fieldAttributes("first_name", array("placeholder" => "First name")); //add placeholder attribute
                                    $pdocrud->fieldAttributes("last_name", array("placeholder" => "Last name")); //add placeholder attribute
                                    $pdocrud->fieldAttributes("email", array("placeholder" => "Email")); //add placeholder attribute
                                    $pdocrud->fieldAttributes("contact_no", array("placeholder" => "Contact Number")); //add placeholder attribute

                                    $pdocrud->fieldAttributes("billing_address_line_1", array("placeholder" => "Billing Address Line1")); //add placeholder attribute
                                    $pdocrud->fieldAttributes("billing_address_line_2", array("placeholder" => "Billing Address Line2")); //add placeholder attribute
                                    $pdocrud->fieldAttributes("billing_city", array("placeholder" => "Billing City")); //add placeholder attribute
                                    $pdocrud->fieldAttributes("billing_state", array("placeholder" => "Billing State")); //add placeholder attribute
                                    $pdocrud->fieldAttributes("billing_postal_code", array("placeholder" => "Billing Postal Code")); //add placeholder attribute
                                    $pdocrud->fieldAttributes("billing_country", array("placeholder" => "Billing Country")); //add placeholder attribute

                                    $pdocrud->fieldAttributes("shipping_address_line_1", array("placeholder" => "Shipping Address Line1")); //add placeholder attribute
                                    $pdocrud->fieldAttributes("shipping_address_line_2", array("placeholder" => "Shipping Address Line2")); //add placeholder attribute
                                    $pdocrud->fieldAttributes("shipping_city", array("placeholder" => "Shipping City")); //add placeholder attribute
                                    $pdocrud->fieldAttributes("shipping_state", array("placeholder" => "Shipping State")); //add placeholder attribute
                                    $pdocrud->fieldAttributes("shipping_postal_code", array("placeholder" => "Shipping Postal Code")); //add placeholder attribute
                                    $pdocrud->fieldAttributes("shipping_country", array("placeholder" => "Shipping Country")); //add placeholder attribute

                                    $pdocrud->fieldTypes("gender", "radio"); //change donation amount to radio button
                                    $pdocrud->fieldDataBinding("gender", array("Male", "Female"), "", "", "array"); //add data for radio button


                                    $pdocrud->fieldTypes("city", "select"); //change type to select
                                    $pdocrud->fieldDataBinding("city", "city", "city_id", "city_name", "db"); //add data using another table name city

                                    $pdocrud->fieldTypes("state", "select"); //change type to select
                                    $pdocrud->fieldDataBinding("state", "state", "state_id", "state_name", "db"); //add data using another table name country

                                    $pdocrud->fieldTypes("country", "select"); //change type to select
                                    $pdocrud->fieldDataBinding("country", "country", "country_id", "country_name", "db"); //add data using another table name country


                                    $pdocrud->fieldTypes("education", "select"); //change education to select dropdown
                                    $pdocrud->fieldDataBinding("education", array("B.A.", "B.E.", "B.Ed.", "M.C.A.", "M.B.A."), "", "", "array"); //add data using array in select dropdown

                                    $pdocrud->fieldTypes("applying_for_position", "multiselect"); //change applying_for_position to multiselect dropdown
                                    $pdocrud->fieldDataBinding("applying_for_position", array("Manager", "Hr", "Developer", "Tester"), "", "", "array"); //add data using array in multiselect


                                    $pdocrud->fieldTypes("payment_method", "radio"); //change donation amount to radio button
                                    $pdocrud->fieldDataBinding("payment_method", array('<img src="../assets/img/cb.png" >', '<img src="../assets/img/paypal.png" >'), "", "", "array"); //add data for radio button


                                    $pdocrud->fieldGroups("Name", array("first_name", "last_name"));
                                    $pdocrud->fieldGroups("billing1", array("billing_city", "billing_state"));
                                    $pdocrud->fieldGroups("billing2", array("billing_country", "billing_postal_code"));

                                    $pdocrud->fieldGroups("shipping1", array("shipping_city", "shipping_state"));
                                    $pdocrud->fieldGroups("shipping2", array("shipping_country", "shipping_postal_code"));



                                    $pdocrud->fieldHideLable("first_name"); // Hide label
                                    $pdocrud->fieldHideLable("last_name"); // Hide label
                                    $pdocrud->fieldHideLable("email"); // Hide label
                                    $pdocrud->fieldHideLable("contact_no"); // Hide label  

                                    $pdocrud->fieldHideLable("billing_address_line_1"); // Hide label
                                    $pdocrud->fieldHideLable("billing_address_line_2"); // Hide label

                                    $pdocrud->fieldHideLable("billing_city"); // Hide label
                                    $pdocrud->fieldHideLable("billing_state"); // Hide label
                                    $pdocrud->fieldHideLable("billing_country"); // Hide label
                                    $pdocrud->fieldHideLable("billing_postal_code"); // Hide label

                                    $pdocrud->fieldHideLable("shipping_address_line_1"); // Hide label
                                    $pdocrud->fieldHideLable("shipping_address_line_2"); // Hide label
                                    $pdocrud->fieldHideLable("shipping_city"); // Hide label
                                    $pdocrud->fieldHideLable("shipping_state"); // Hide label
                                    $pdocrud->fieldHideLable("shipping_country"); // Hide label
                                    $pdocrud->fieldHideLable("shipping_postal_code"); // Hide label

                                    $pdocrud->buttonHide("cancel"); // Hide button
                                    $pdocrud->setLangData("save", "SUBMIT");

                                    $pdocrud->fieldCssClass("first_name", array("form-first-name")); // add class 
                                    $pdocrud->fieldCssClass("last_name", array("form-first-name")); // add class 
                                    $pdocrud->fieldCssClass("email", array("form-first-name")); // add class 

                                     $pdocrud->enqueueCss("font-awesome.min", "../assets/css/font-awesome/css/font-awesome.min.css");
                                    $pdocrud->enqueueCss("form-elements", "../assets/css/form-elements.css");
                                    $pdocrud->enqueueCss("signup", "../assets/css/signup-form.css");
                                    $pdocrud->enqueueCss("style", "../assets/css/style.css");

                                    echo $pdocrud->dbTable("orders")->render("insertform");
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
                                    $pdocrud->formStaticFields("personalinfo", "html", "<div class='form-top-left'><h3>PDOCrud Order Form</h3><p>Please Fill in the form below</p></div>");
                                    $pdocrud->formStaticFields("personalinfo1", "html", "<div class='form-top-right'><i class='fa fa-pencil'></i></div>");

                                    $pdocrud->fieldDisplayOrder(array("personalinfo", "personalinfo1"));
                                    $pdocrud->formFields(array("personalinfo", "personalinfo1", "first_name", "last_name", "email", "contact_no", "gender", "billing_address_line_1", "billing_address_line_2", "billing_city", "billing_state", "billing_postal_code", "billing_country", "shipping_address_line_1", "shipping_address_line_2", "shipping_city", "shipping_state", "shipping_country", "shipping_postal_code", "payment_method"));

                                    $pdocrud->fieldAttributes("first_name", array("placeholder" => "First name")); //add placeholder attribute
                                    $pdocrud->fieldAttributes("last_name", array("placeholder" => "Last name")); //add placeholder attribute
                                    $pdocrud->fieldAttributes("email", array("placeholder" => "Email")); //add placeholder attribute
                                    $pdocrud->fieldAttributes("contact_no", array("placeholder" => "Contact Number")); //add placeholder attribute

                                    $pdocrud->fieldAttributes("billing_address_line_1", array("placeholder" => "Billing Address Line1")); //add placeholder attribute
                                    $pdocrud->fieldAttributes("billing_address_line_2", array("placeholder" => "Billing Address Line2")); //add placeholder attribute
                                    $pdocrud->fieldAttributes("billing_city", array("placeholder" => "Billing City")); //add placeholder attribute
                                    $pdocrud->fieldAttributes("billing_state", array("placeholder" => "Billing State")); //add placeholder attribute
                                    $pdocrud->fieldAttributes("billing_postal_code", array("placeholder" => "Billing Postal Code")); //add placeholder attribute
                                    $pdocrud->fieldAttributes("billing_country", array("placeholder" => "Billing Country")); //add placeholder attribute

                                    $pdocrud->fieldAttributes("shipping_address_line_1", array("placeholder" => "Shipping Address Line1")); //add placeholder attribute
                                    $pdocrud->fieldAttributes("shipping_address_line_2", array("placeholder" => "Shipping Address Line2")); //add placeholder attribute
                                    $pdocrud->fieldAttributes("shipping_city", array("placeholder" => "Shipping City")); //add placeholder attribute
                                    $pdocrud->fieldAttributes("shipping_state", array("placeholder" => "Shipping State")); //add placeholder attribute
                                    $pdocrud->fieldAttributes("shipping_postal_code", array("placeholder" => "Shipping Postal Code")); //add placeholder attribute
                                    $pdocrud->fieldAttributes("shipping_country", array("placeholder" => "Shipping Country")); //add placeholder attribute

                                    $pdocrud->fieldTypes("gender", "radio"); //change donation amount to radio button
                                    $pdocrud->fieldDataBinding("gender", array("Male", "Female"), "", "", "array"); //add data for radio button


                                    $pdocrud->fieldTypes("city", "select"); //change type to select
                                    $pdocrud->fieldDataBinding("city", "city", "city_id", "city_name", "db"); //add data using another table name city

                                    $pdocrud->fieldTypes("state", "select"); //change type to select
                                    $pdocrud->fieldDataBinding("state", "state", "state_id", "state_name", "db"); //add data using another table name country

                                    $pdocrud->fieldTypes("country", "select"); //change type to select
                                    $pdocrud->fieldDataBinding("country", "country", "country_id", "country_name", "db"); //add data using another table name country


                                    $pdocrud->fieldTypes("education", "select"); //change education to select dropdown
                                    $pdocrud->fieldDataBinding("education", array("B.A.", "B.E.", "B.Ed.", "M.C.A.", "M.B.A."), "", "", "array"); //add data using array in select dropdown

                                    $pdocrud->fieldTypes("applying_for_position", "multiselect"); //change applying_for_position to multiselect dropdown
                                    $pdocrud->fieldDataBinding("applying_for_position", array("Manager", "Hr", "Developer", "Tester"), "", "", "array"); //add data using array in multiselect


                                    $pdocrud->fieldTypes("payment_method", "radio"); //change donation amount to radio button
                                    $pdocrud->fieldDataBinding("payment_method", array('<img src="../assets/img/cb.png" >', '<img src="../assets/img/paypal.png" >'), "", "", "array"); //add data for radio button


                                    $pdocrud->fieldGroups("Name", array("first_name", "last_name"));
                                    $pdocrud->fieldGroups("billing1", array("billing_city", "billing_state"));
                                    $pdocrud->fieldGroups("billing2", array("billing_country", "billing_postal_code"));

                                    $pdocrud->fieldGroups("shipping1", array("shipping_city", "shipping_state"));
                                    $pdocrud->fieldGroups("shipping2", array("shipping_country", "shipping_postal_code"));



                                    $pdocrud->fieldHideLable("first_name"); // Hide label
                                    $pdocrud->fieldHideLable("last_name"); // Hide label
                                    $pdocrud->fieldHideLable("email"); // Hide label
                                    $pdocrud->fieldHideLable("contact_no"); // Hide label  

                                    $pdocrud->fieldHideLable("billing_address_line_1"); // Hide label
                                    $pdocrud->fieldHideLable("billing_address_line_2"); // Hide label

                                    $pdocrud->fieldHideLable("billing_city"); // Hide label
                                    $pdocrud->fieldHideLable("billing_state"); // Hide label
                                    $pdocrud->fieldHideLable("billing_country"); // Hide label
                                    $pdocrud->fieldHideLable("billing_postal_code"); // Hide label

                                    $pdocrud->fieldHideLable("shipping_address_line_1"); // Hide label
                                    $pdocrud->fieldHideLable("shipping_address_line_2"); // Hide label
                                    $pdocrud->fieldHideLable("shipping_city"); // Hide label
                                    $pdocrud->fieldHideLable("shipping_state"); // Hide label
                                    $pdocrud->fieldHideLable("shipping_country"); // Hide label
                                    $pdocrud->fieldHideLable("shipping_postal_code"); // Hide label

                                    $pdocrud->buttonHide("cancel"); // Hide button
                                    $pdocrud->setLangData("save", "SUBMIT");

                                    $pdocrud->fieldCssClass("first_name", array("form-first-name")); // add class 
                                    $pdocrud->fieldCssClass("last_name", array("form-first-name")); // add class 
                                    $pdocrud->fieldCssClass("email", array("form-first-name")); // add class 

                                     $pdocrud->enqueueCss("font-awesome.min", "../assets/css/font-awesome/css/font-awesome.min.css");
                                    $pdocrud->enqueueCss("form-elements", "../assets/css/form-elements.css");
                                    $pdocrud->enqueueCss("signup", "../assets/css/signup-form.css");
                                    $pdocrud->enqueueCss("style", "../assets/css/style.css");

                                    echo $pdocrud->dbTable("orders")->render("insertform");
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