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
                    Plugin bootstrap tag input example
                </h1>
                <p> Convert any input type text field to tags field. You can write tags and move focus out of the text area to convert the value in tags.</p>
            </section>

            <!-- Default box -->
            <div class="box">                
                <div class="box-body">                    
                    <div class="box-function-ref">
                        <section class="code-section">
                            <pre class="brush: php;">  
                                $pdocrud = new PDOCrud();
                                $pdocrud->formFields(array("membership_categories"));
                                $pdocrud->addPlugin("bootstrap-tag-input");//to add plugin      
                                $pdocrud->fieldAttributes("membership_categories", array("data-role"=>"tagsinput"));
                                $pdocrud->fieldCssClass("membership_categories", array("tagsinput"));// add css classes
                                echo $pdocrud->dbTable("library_membership")->render();
                                echo $pdocrud->loadPluginJsCode("bootstrap-tag-input",".tagsinput");//to add plugin call on .tagsinput class
                            </pre>
                        </section>  
                    </div>
                </div>
            </div>  

            <!-- Main content -->
            <section class="content">
                <div class="box">
                    <div class="box-header with-border">
                        <h3 class="box-title">Plugin bootstrap tag input example - PDOCrud</h3>
                        <div class="box-tools pull-right">
                            <button class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
                        </div>
                    </div>
                    <div class="box-body">
                        <div class="box-body table-responsive no-padding">
                            <?php
                            $pdocrud = new PDOCrud();
                            $pdocrud->formFields(array("membership_categories"));
                            $pdocrud->addPlugin("bootstrap-tag-input");//to add plugin      
                            $pdocrud->fieldAttributes("membership_categories", array("data-role"=>"tagsinput"));
                            $pdocrud->fieldCssClass("membership_categories", array("tagsinput"));// add css classes
                            echo $pdocrud->dbTable("library_membership")->render();
                            echo $pdocrud->loadPluginJsCode("bootstrap-tag-input",".tagsinput");//to add plugin call on .tagsinput class
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