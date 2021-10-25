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
                    Forgot password example
                    <small>Example of using forgot password form directly (added in version 2.4) </small>
                </h1>
                <p>
                    You can easily create forgot password form using only few lines of codes. It will automatically send email (based 
                    on the config email settings) with new password details. Please note the password will be reset and hashed/encrypted
                    before sending to email.You can set hashing/encryption type also.
                    
                </p>
            </section>

            <!-- Default box -->
            <div class="box">                
                <div class="box-body">                    
                    <div class="box-function-ref">
                        <section class="code-section">
                            <pre class="brush: php;">  
                            $pdocrud = new PDOCrud();
                            /*
                            * @param   string   $email                                 Email field of the table
                            * @param   string   $password                              password field of the table
                            * @param   string   $from                                  from email to be used to send email
                            * @param   string   $subject                               subject of the email
                            * @param   string   $message                               message of the meail
                            * @param   string   $encryption                            encryption to be used, default type md5
                             * */
                            $message = "Here is your new password {password}";
                            $subject="Password has been updated successfully";
                            $pdocrud->forgotPassword("email","password", array("info@pdocrud.com"),$subject,$message);
                            $pdocrud->setLangData("login", "Retrieve Password");
                            echo $pdocrud->dbTable("users")->render("SELECTFORM");
                            </pre>
                        </section>  
                    </div>
                </div>
            </div>  

            <!-- Main content -->
            <section class="content">
                <div class="box">
                    <div class="box-header with-border">
                        <h3 class="box-title">Forgot password example using PDOCrud</h3>
                        <div class="box-tools pull-right">
                            <button class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
                        </div>
                    </div>
                    <div class="box-body">
                        <div class="box-body table-responsive no-padding">
                            <?php
                            $pdocrud = new PDOCrud();
                            /*
                            * @param   string   $email                                 Email field of the table
                            * @param   string   $password                              password field of the table
                            * @param   string   $from                                  from email to be used to send email
                            * @param   string   $subject                               subject of the email
                            * @param   string   $message                               message of the meail
                            * @param   string   $encryption                            encryption to be used, default type md5
                             * */
                            $message = "Here is your new password {password}";
                            $subject="Password has been updated successfully";
                            $pdocrud->forgotPassword("email","password", array("info@pdocrud.com"),$subject,$message);
                            $pdocrud->setLangData("login", "Retrieve Password");
                            echo $pdocrud->dbTable("users")->render("SELECTFORM");
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