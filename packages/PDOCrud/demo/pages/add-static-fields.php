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
                    Static fields
                    <small>Add static fields (fields that are not inserted in database) in PDOCrud</small>
                </h1>
            </section>
            <!-- Default box -->
            <div class="box">                
                <div class="box-body">                    
                    <div class="box-function-ref">
                        <section class="code-section">
                            <pre class="brush: php;">  
                                $pdocrud = new PDOCrud();
                                $pdocrud->formStaticFields("personalinfo", "html", "<h3>1.Personal Info </h3><br><small>Enter your personal information</small>");//html field
                                $pdocrud->formStaticFields("terms_and_conditions", "checkbox", array("I accept the terms and condition"));//checkbox field
                                $pdocrud->formStaticFields("hidden_field", "hidden", array("some value")); //add hidden field
                                $pdocrud->fieldDisplayOrder(array("personalinfo"));                            
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
                        <h3 class="box-title">Add static fields using PDOCrud</h3>
                        <div class="box-tools pull-right">
                            <button class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
                        </div>
                    </div>
                    <div class="box-body">
                        <div class="box-body table-responsive no-padding">
                            <?php
                            $pdocrud = new PDOCrud();
                            $pdocrud->formStaticFields("personalinfo", "html", "<h3>1.Personal Info </h3><br><small>Enter your personal information</small>");//html field
                            $pdocrud->formStaticFields("terms_and_conditions", "checkbox", array("I accept the terms and condition"));//checkbox field
                            $pdocrud->formStaticFields("hidden_field", "hidden", array("some value")); //add hidden field
                            $pdocrud->fieldDisplayOrder(array("personalinfo"));                            
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