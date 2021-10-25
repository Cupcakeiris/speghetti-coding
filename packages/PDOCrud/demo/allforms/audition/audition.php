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

        <title>PDOCrud - Audition form</title>

    </head>
    <body>
        <header>
            <div class="heading">
                <a href="#" class="PDOCrud-logo"> <h3> PDOCrud - Audition form demo </h3></a>
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
                                    $pdocrud->formStaticFields("personalinfo", "html", "<div class='form-top-left'><h3>PDOCrud Audition Form</h3><p>Please Fill in the form below</p></div>");
                                    $pdocrud->formStaticFields("personalinfo1", "html", "<div class='form-top-right'><i class='fa fa-pencil'></i></div>");

                                    $pdocrud->fieldDisplayOrder(array("personalinfo", "personalinfo1"));
                                    $pdocrud->formFields(array("personalinfo", "personalinfo1", "performance_title", "performer_name", "length_of_performance", "style", "instruments", "prop", "microphones", "cd", "gender", "age", "phone", "email", "address"));

                                    $pdocrud->fieldAttributes("performance_title", array("placeholder" => "Performance Title")); //add placeholder attribute
                                    $pdocrud->fieldAttributes("performer_name", array("placeholder" => "Performer Name")); //add placeholder attribute
                                    $pdocrud->fieldAttributes("length_of_performance", array("placeholder" => "Length Of Performance")); //add placeholder attribute

                                    $pdocrud->fieldAttributes("age", array("placeholder" => "Age")); //add placeholder attribute
                                    $pdocrud->fieldAttributes("phone", array("placeholder" => "Phone")); //add placeholder attribute
                                    $pdocrud->fieldAttributes("email", array("placeholder" => "Email")); //add placeholder attribute
                                    $pdocrud->fieldAttributes("address", array("placeholder" => "Address")); //add placeholder attribute

                                    $pdocrud->fieldHideLable("performance_title"); // Hide label
                                    $pdocrud->fieldHideLable("performer_name"); // Hide label                              
                                    $pdocrud->fieldHideLable("length_of_performance"); // Hide label

                                    $pdocrud->fieldHideLable("age"); // Hide label                              
                                    $pdocrud->fieldHideLable("phone"); // Hide label
                                    $pdocrud->fieldHideLable("email"); // Hide label
                                    $pdocrud->fieldHideLable("address"); // Hide label
                                    
                                    $pdocrud->fieldGroups("prop", array("instruments", "prop"));
                                    $pdocrud->fieldGroups("cd", array("microphones", "cd"));

                                    $pdocrud->fieldTypes("style", "select"); //change education to select dropdown
                                    $pdocrud->fieldDataBinding("style", array("Dance", "Drama", "Band", "Vocal Performance", "Comedy Act", "Other"), "", "", "array"); //add data using array in select dropdown

                                    $pdocrud->fieldTypes("gender", "radio"); //change donation amount to radio button
                                    $pdocrud->fieldDataBinding("gender", array("Male", "Female"), "", "", "array"); //add data for radio button
                                   
                                    $pdocrud->fieldTypes("instruments", "radio"); //change donation amount to radio button
                                    $pdocrud->fieldDataBinding("instruments", array("Yes", "No"), "", "", "array"); //add data for radio button
                                    $pdocrud->fieldTypes("prop", "radio"); //change donation amount to radio button
                                    $pdocrud->fieldDataBinding("prop", array("Yes", "No"), "", "", "array"); //add data for radio button
                                    $pdocrud->fieldTypes("microphones", "radio"); //change donation amount to radio button
                                    $pdocrud->fieldDataBinding("microphones", array("Yes", "No"), "", "", "array"); //add data for radio button
                                    $pdocrud->fieldTypes("cd", "radio"); //change donation amount to radio button
                                    $pdocrud->fieldDataBinding("cd", array("Yes", "No"), "", "", "array"); //add data for radio button

                                    $pdocrud->buttonHide("cancel"); // Hide button
                                    $pdocrud->setLangData("save", "SUBMIT");

                                    $pdocrud->enqueueCss("font-awesome.min", "../assets/css/font-awesome/css/font-awesome.min.css");
                                    //$pdocrud->enqueueCss("form-elements", "../assets/css/form-elements.css");
                                    $pdocrud->enqueueCss("signup", "../assets/css/signup-form.css");
                                    $pdocrud->enqueueCss("style", "../assets/css/style.css");

                                    echo $pdocrud->dbTable("audition")->render("insertform");
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
                                    $pdocrud->formStaticFields("personalinfo", "html", "<div class='form-top-left'><h3>PDOCrud Audition Form</h3><p>Please Fill in the form below</p></div>");
                                    $pdocrud->formStaticFields("personalinfo1", "html", "<div class='form-top-right'><i class='fa fa-pencil'></i></div>");

                                    $pdocrud->fieldDisplayOrder(array("personalinfo", "personalinfo1"));
                                    $pdocrud->formFields(array("personalinfo", "personalinfo1", "performance_title", "performer_name", "length_of_performance", "style", "instruments", "prop", "microphones", "cd", "gender", "age", "phone", "email", "address"));

                                    $pdocrud->fieldAttributes("performance_title", array("placeholder" => "Performance Title")); //add placeholder attribute
                                    $pdocrud->fieldAttributes("performer_name", array("placeholder" => "Performer Name")); //add placeholder attribute
                                    $pdocrud->fieldAttributes("length_of_performance", array("placeholder" => "Length Of Performance")); //add placeholder attribute

                                    $pdocrud->fieldAttributes("age", array("placeholder" => "Age")); //add placeholder attribute
                                    $pdocrud->fieldAttributes("phone", array("placeholder" => "Phone")); //add placeholder attribute
                                    $pdocrud->fieldAttributes("email", array("placeholder" => "Email")); //add placeholder attribute
                                    $pdocrud->fieldAttributes("address", array("placeholder" => "Address")); //add placeholder attribute

                                    $pdocrud->fieldHideLable("performance_title"); // Hide label
                                    $pdocrud->fieldHideLable("performer_name"); // Hide label                              
                                    $pdocrud->fieldHideLable("length_of_performance"); // Hide label

                                    $pdocrud->fieldHideLable("age"); // Hide label                              
                                    $pdocrud->fieldHideLable("phone"); // Hide label
                                    $pdocrud->fieldHideLable("email"); // Hide label
                                    $pdocrud->fieldHideLable("address"); // Hide label
                                    
                                    $pdocrud->fieldGroups("prop", array("instruments", "prop"));
                                    $pdocrud->fieldGroups("cd", array("microphones", "cd"));

                                    $pdocrud->fieldTypes("style", "select"); //change education to select dropdown
                                    $pdocrud->fieldDataBinding("style", array("Dance", "Drama", "Band", "Vocal Performance", "Comedy Act", "Other"), "", "", "array"); //add data using array in select dropdown

                                    $pdocrud->fieldTypes("gender", "radio"); //change donation amount to radio button
                                    $pdocrud->fieldDataBinding("gender", array("Male", "Female"), "", "", "array"); //add data for radio button
                                   
                                    $pdocrud->fieldTypes("instruments", "radio"); //change donation amount to radio button
                                    $pdocrud->fieldDataBinding("instruments", array("Yes", "No"), "", "", "array"); //add data for radio button
                                    $pdocrud->fieldTypes("prop", "radio"); //change donation amount to radio button
                                    $pdocrud->fieldDataBinding("prop", array("Yes", "No"), "", "", "array"); //add data for radio button
                                    $pdocrud->fieldTypes("microphones", "radio"); //change donation amount to radio button
                                    $pdocrud->fieldDataBinding("microphones", array("Yes", "No"), "", "", "array"); //add data for radio button
                                    $pdocrud->fieldTypes("cd", "radio"); //change donation amount to radio button
                                    $pdocrud->fieldDataBinding("cd", array("Yes", "No"), "", "", "array"); //add data for radio button

                                    $pdocrud->buttonHide("cancel"); // Hide button
                                    $pdocrud->setLangData("save", "SUBMIT");

                                    $pdocrud->enqueueCss("font-awesome.min", "../assets/css/font-awesome/css/font-awesome.min.css");
                                    //$pdocrud->enqueueCss("form-elements", "../assets/css/form-elements.css");
                                    $pdocrud->enqueueCss("signup", "../assets/css/signup-form.css");
                                    $pdocrud->enqueueCss("style", "../assets/css/style.css");

                                    echo $pdocrud->dbTable("audition")->render("insertform");
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