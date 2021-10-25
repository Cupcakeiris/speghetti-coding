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
                    Field Validations
                    <small>Add validation on fields</small>
                </h1>
                <p>
                    By default, field validations are generated as per the data type of field in database table. But you can also define
                    extra validation on field, like max length, min length, url, equal to etc. 
                </p>
            </section>

            <!-- Default box -->
            <div class="box">                
                <div class="box-body">                    
                    <div class="box-function-ref">
                        <section class="code-section">
                            <pre class="brush: php;">  
                            $pdocrud = new PDOCrud();
                            $pdocrud->formFields(array("user_name","email","password","confirm_password","phone"));                                    
                            $pdocrud->fieldValidationType("user_name", "data-minlength", "10", "Please enter atleast 10 characters");
                            $pdocrud->fieldValidationType("password", "data-match", "confirm_password", "Password and confirm password not matching");
                            $pdocrud->formStaticFields("confirm_password", "text");
                            echo $pdocrud->dbTable("users")->render("insertform");
                            </pre>
                        </section>  
                    </div>
                </div>
            </div>  

            <!-- Main content -->
            <section class="content">
                <div class="box">
                    <div class="box-header with-border">
                        <h3 class="box-title">Field validation using PDOCrud</h3>
                        <div class="box-tools pull-right">
                            <button class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
                        </div>
                    </div>
                    <div class="box-body">
                        <div class="box-body table-responsive no-padding">
                            <?php
                                    $pdocrud = new PDOCrud();
                                    $pdocrud->formFields(array("user_name","email","password","confirm_password","phone"));               
                                    $pdocrud->fieldValidationType("email", "email", "10", "Please enter valid email");
                                    $pdocrud->fieldValidationType("user_name", "data-minlength", "", "Please enter atleast 10 characters");
                                    $pdocrud->fieldValidationType("password", "data-match", "confirm_password", "Password and confirm password not matching","static");
                                    $pdocrud->formStaticFields("confirm_password", "text");
                                    echo $pdocrud->dbTable("users")->render("insertform");
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