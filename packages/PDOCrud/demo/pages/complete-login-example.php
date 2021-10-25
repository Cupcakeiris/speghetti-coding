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
                    Complete login demo
                    <small>Example of how you can add callback function with login functionality</small>
                </h1>
                <p>
                    You can add facebook and google login with recatcha also easily.
                    You can easily create complete login form and add callback functions to save session related data to check login on various
                    pages using the PDOCrud script. First you need to add callback functions and call pdocrud render selectform on appropriate
                    database login table and also add these callback function defination in the script/pdocrud.php. 
                    
                </p>
            </section>

            <!-- Default box -->
            <div class="box">                
                <div class="box-body">                    
                    <div class="box-function-ref">
                        <section class="code-section">
                            <pre class="brush: php;">  
                            $pdo_crud = new PDOCrud();
                            // we need to add actions 
                            // before checking the login data if you want to peform any operation like password encryption etc/(optional)
                             $pdo_crud->addCallback("before_select", "beforeloginCallback");
                           // after login, we generally want to save the data in session
                             $pdo_crud->addCallback("after_select", "afterLoginCallBack");
                             //only required fields to be display on form
                             $pdo_crud->formFields(array("email", "password"));
                            ///redirect to some page after login (optional)
                             $pdo_crud->formRedirection("http://localhost/school/index.php?page=student&operation=add");
                            // set db table to your user table and call render function with select form
                             echo $pdo_crud->dbTable("users")->render("selectform");


                        //After this add following code in script/pdocrud.php. This is basically callback functions so must be present in the script/pdocrud.php
                        
                        //example of how to add action function
                        function beforeloginCallback($data, $obj) {  
                            //do something like if your passwords are md5 encrypted then change the value
                            $data["users"]["password"] = md5($data["users"]["password"]);
                            return $data;
                        }



                        function afterLoginCallBack($data, $obj) {
                            @session_start();
                            if (count($data)) {
                            //save data in session
                                $_SESSION["data"] = $data;
                            }
                            else{
                                //no record found so don't redirect
                                $obj->formRedirection("");
                            }
                        }

                            </pre>
                        </section>  
                    </div>
                </div>
            </div>  

            <!-- Main content -->
            <section class="content">
                <div class="box">
                    <div class="box-header with-border">
                        <h3 class="box-title">Login example using PDOCrud (this is only code example)</h3>
                        <div class="box-tools pull-right">
                            <button class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
                        </div>
                    </div>
                    <div class="box-body">
                        <div class="box-body table-responsive no-padding">
                            <?php
                            $pdo_crud = new PDOCrud();
                            // we need to add actions 
                            // before checking the login data if you want to peform any operation like password encryption etc/(optional)
                            $pdo_crud->addCallback("before_select", "beforeloginCallback");
                            // after login, we generally want to save the data in session
                            $pdo_crud->addCallback("after_select", "afterLoginCallBack");
                            //only required fields to be display on form
                            $pdo_crud->formFields(array("user_name", "password"));
                            ///redirect to some page after login (optional)
                            $pdo_crud->formRedirection("http://localhost/school/index.php?page=student&operation=add");
                            // set db table to your user table and call render function with select form
                            echo $pdo_crud->dbTable("users")->render("selectform");
                            ?>
                        </div><!-- /.box-body -->
                    </div>
                </div>
            </section><!-- /.content -->
        </div><!-- /.content-wrapper -->
    </div><!-- ./wrapper -->
    <?php include 'includes/footer.php'; ?>
</body>
</html>