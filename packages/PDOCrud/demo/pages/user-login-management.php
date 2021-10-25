<?php include '../../script/pdocrud.php'; ?>
<?php include 'includes/header.php'; ?>

<body class="hold-transition skin-blue sidebar-mini">
    <!-- Site wrapper -->
    <div class="wrapper">
        <?php include 'includes/topheader.php'; ?>
        <?php include 'includes/sidebar.php'; ?>
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <h1>
                    User Login & Access Management 
                    <small>Manage complete user login and access management (added in v 3.2)  </small>
                </h1>
                <p>
                   We have added complete user based login and access management. During login process, you can now define 
                   different session that needs to be set based on the column of the table (or static value). After login,
                   you can define whether to allow access of page based on user session.
                   Till version 3.2, script has functionality to check user login only, now it can check for user access 
                   also. 
                   <br/>
                   Code explanation - First you will need to define session variables that needs to be set on successful login.
                   You can define any number of session variables. A session variable can contain value from database table or
                   static value using the setUserSession() function. 
                   After this, when user will try to access a certain page, you can check whether to allow that user access 
                   or not using the checkUserSession() function. In checkUserSession() function, you can define value to be 
                   checked against user session value. 
                </p>
                <p>
                    You can find complete application demo <a href="http://pdocrud.com/demo/allforms/user-access-management/login.php">Here</a>
                </p>
               
            </section>

            <!-- Default box -->
            <div class="box">                
                <div class="box-body">                    
                    <div class="box-function-ref">
                        <section class="code-section">
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
                                    ///redirect to some page after login (optional)-2nd parameter specify whether to redirect or not if no records found
                                     $pdo_crud->formRedirection("http://pdocrud.com/demo/allforms/user-access-management/after-login-page.php", true);
                                    // set db table to your user table and call render function with select form
                                     echo $pdo_crud->dbTable("login")->render("selectform");
                            </pre>
                            <br/>
                             <pre class="brush: php;">  
                                //Any page to check access management code
                                $pdo_crud = new PDOCrud();
                                if ($pdo_crud->checkUserSession("userId")) {
                                    if ($pdo_crud->checkUserSession("role", array("admin", "author", "editor"))) {
                                        echo "Welcome ".$pdo_crud->getUserSession("userName");
                                        echo $pdo_crud->dbTable("employee")->render();
                                    }
                                    echo "You don't have sufficient permission to access this page.";
                                } else {
                                    echo "You are not allowed to access this page.";
                                }
                             </pre>
                            <br/>
                            <pre class="brush: php;">  
                                //Logout  page code
                                $pdo_crud = new PDOCrud();

                                //set session variables - 1st parameter is the session variable name and 2nd is value to be matched in database table
                                $pdo_crud->unsetUserSession("userName");
                                //or you can unset all user session variable set by setUserSession function
                                 $pdo_crud->unsetUserSession();
                            </pre>
                            <br/>
                            <pre class="brush: php;">  
                                //Optional callback actions
                               //Add following code in script/pdocrud.php. This is basically callback functions so must be present in the script/pdocrud.php

                                //example of how to add action function
                                function beforeloginCallback($data, $obj) {  
                                   //do something like if your passwords are md5 encrypted then change the value
                                   $data["login"]["password"] = md5($data["users"]["password"]);
                                   return $data;
                                }
                            </pre>
                        </section>  
                    </div>
                </div>
            </div>  
            <p>
                    You can find complete application demo <a href="http://pdocrud.com/demo/allforms/user-access-management/login.php">Here</a>
                </p>
        </div><!-- /.content-wrapper -->
    </div><!-- ./wrapper -->
    <?php include 'includes/footer.php'; ?>
</body>
</html>