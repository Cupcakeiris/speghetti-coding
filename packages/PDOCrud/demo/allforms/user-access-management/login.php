<?php require_once '../../../script/pdocrud.php'; ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta content="Crud, PDO Crud, PDO Database management system, PHP Mysql CRUD, PHP Mysql database abstraction, PHP ajax crud, no query PDO, PDO helper class, database management using PDO, Mysql crud, multi table join, PHP Sqlite CRUD" name="keywords" />
        <meta content="PDOCrud is an advance PHP based CRUD(Create, Read, Update and Delete) application. It supports Mysql, Pgsql and Sqlite database." name="description" />
        <!-- Page specific CSS to improve design of the form. This script is not about writing css to create beautiful forms, it is generating the form from
        database directly with minimal lines of code.-->
        <link href="../assets/css/font-awesome/css/font-awesome.min.css" rel="stylesheet"/>
        <link href="../assets/css/form-elements.css" rel="stylesheet"/>
        <link href="../assets/css/signup-form.css" rel="stylesheet"/>
        <link href="../assets/css/style.css" rel="stylesheet"/>

        <style type="text/css">
            ul{ list-style: none;}
            .form-content{background: #ddd}
            .checkbox label, .radio label{
                float: left;
            }
        </style>

        <link href='https://fonts.googleapis.com/css?family=Josefin+Sans' rel='stylesheet' type='text/css'>

        <title>PDOCrud - Login Form</title>

    </head>
    <body>
        <header>
            <div class="heading">
                <a href="#" class="PDOCrud-logo"> <h3> PDOCrud - Login Form demo </h3></a>
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
                                        <h3>Login Form demo</h3>
                                    </div>
                                    <div class="form-head-right">
                                        <i class="fa fa-pencil"></i>
                                    </div> 
                                </div>
                                <div class="form-content">
                                    <p>
                                        Test Login info :
                                    <h4> User 1 </h4>
                                        <br/>
                                        email: dave@test.com
                                        password: dave
                                        role: admin
                                    
                                    <h4> User 2 </h4>
                                        <br/>
                                        email: john@test.com
                                        password: john
                                        role: developer
                                    </p>
                                    <?php
                                    //Login page code
                                    $pdo_crud = new PDOCrud();
                                    // (Optional step) before checking the login data if you want to peform any operation like password encryption etc/(optional)
                                     //$pdo_crud->addCallback("before_select", "beforeloginCallback");
                                     //only required fields to be display on form
                                     $pdo_crud->formFields(array("email", "password"));
                                     //set session variables - 1st parameter is the session variable name and 2nd is value to be matched in database table
                                     $pdo_crud->setUserSession("userName", "user_name");
                                     //You can set any no. of session variables
                                     $pdo_crud->setUserSession("userId", "user_id");
                                     
                                     $pdo_crud->setUserSession("role", "role");
                                     
                                     $pdo_crud->setUserSession("lastLoginTime", date("now"));
                                    ///redirect to some page after login (optional)-2nd parameter specify whether to redirect or not if no records found
                                     $pdo_crud->formRedirection("http://pdocrud.com/demo/allforms/user-access-management/after-login-page.php", true);
                                    // set db table to your user table and call render function with select form
                                     echo $pdo_crud->dbTable("login")->render("selectform");
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
                                //Login page code
                                $pdo_crud = new PDOCrud();
                                // (Optional step) before checking the login data if you want to peform any operation like password encryption etc/(optional)
                                 //$pdo_crud->addCallback("before_select", "beforeloginCallback");
                                 //only required fields to be display on form
                                 $pdo_crud->formFields(array("email", "password"));
                                 //set session variables - 1st parameter is the session variable name and 2nd is value to be matched in database table
                                 $pdo_crud->setUserSession("userName", "user_name");
                                 //You can set any no. of session variables
                                 $pdo_crud->setUserSession("userId", "user_id");

                                 $pdo_crud->setUserSession("role", "role");

                                 $pdo_crud->setUserSession("lastLoginTime", date("now"));
                                ///redirect to some page after login (optional)
                                 $pdo_crud->formRedirection("http://localhost/pdOCrud/demo/allforms/user-access-management/after-login-page.php");
                                // set db table to your user table and call render function with select form
                                 echo $pdo_crud->dbTable("login")->render("selectform");
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