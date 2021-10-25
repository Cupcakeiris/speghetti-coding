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
                    Plugin Rateit example
                      <small>Add rating option to display</small>
                </h1>
            </section>

            <!-- Default box -->
            <div class="box">                
                <div class="box-body">                    
                    <div class="box-function-ref">
                        <section class="code-section">
                            <pre class="brush: php;">  
                                $pdocrud = new PDOCrud();
                                $pdocrud->addPlugin("rateit");//to add plugin   
                                $pdocrud->fieldTypes("product_rating", "rateit");
                                $pdocrud->formFields(array("product_rating"));
                                $pdocrud->crudTableCol(array("product_id","product_name", "qty_available", "product_rating"));
                                $pdocrud->tableColFormatting("product_rating", "rateit");
                                $pdocrud->viewColFormatting("product_rating", "rateit");    
                                echo $pdocrud->dbTable("producttable")->render();
                                echo $pdocrud->loadPluginJsCode("rateit",".rateit");//to add plugin call on input[type=text] elements
                            </pre>
                        </section>  
                    </div>
                </div>
            </div>  

            <!-- Main content -->
            <section class="content">
                <div class="box">
                    <div class="box-header with-border">
                        <h3 class="box-title">Plugin Rateit example - PDOCrud</h3>
                        <div class="box-tools pull-right">
                            <button class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
                        </div>
                    </div>
                    <div class="box-body">
                        <div class="box-body table-responsive no-padding">
                            <?php
                            $pdocrud = new PDOCrud();
                            $pdocrud->addPlugin("rateit");//to add plugin   
                            $pdocrud->fieldTypes("product_rating", "rateit");
                            $pdocrud->formFields(array("product_rating"));
                            $pdocrud->crudTableCol(array("product_id","product_name", "qty_available", "product_rating"));
                            $pdocrud->tableColFormatting("product_rating", "rateit");
                            $pdocrud->viewColFormatting("product_rating", "rateit");
                            echo $pdocrud->dbTable("producttable")->render();
                            echo $pdocrud->loadPluginJsCode("rateit",".rateit");//to add plugin call on input[type=text] elements
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