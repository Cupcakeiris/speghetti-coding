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
                    Plugin input mask example
                </h1>
                <p> You can define the input mask for element with the help of plugin input mask. </p>
            </section>

            <!-- Default box -->
            <div class="box">                
                <div class="box-body">                    
                    <div class="box-function-ref">
                        <section class="code-section">
                            <pre class="brush: php;">  
                                $pdocrud = new PDOCrud();
                                $pdocrud->addPlugin("bootstrap-inputmask");//to add plugin          
                                $pdocrud->formFields(array("product_name"));
                                $pdocrud->fieldCssClass("product_name", array("product_name"));
                                //$pdocrud->fieldDataAttr("product_name", array("placeholder"=>"default format is [9-]AAA-999"));//optional
                                echo $pdocrud->dbTable("producttable")->render("insertform");
                                echo $pdocrud->loadPluginJsCode("bootstrap-inputmask",".product_name", array("mask"=> "'[9-]AAA-999'"));//to add plugin call on .product_name elements
                            </pre>
                        </section>  
                    </div>
                </div>
            </div>  

            <!-- Main content -->
            <section class="content">
                <div class="box">
                    <div class="box-header with-border">
                        <h3 class="box-title">Plugin input mask example - PDOCrud</h3>
                        <div class="box-tools pull-right">
                            <button class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
                        </div>
                    </div>
                    <div class="box-body">
                        <div class="box-body table-responsive no-padding">
                            <?php
                            $pdocrud = new PDOCrud();
                            $pdocrud->addPlugin("bootstrap-inputmask");//to add plugin          
                            $pdocrud->formFields(array("product_name"));
                            $pdocrud->fieldCssClass("product_name", array("product_name"));
                            //$pdocrud->fieldDataAttr("product_name", array("placeholder"=>"default format is [9-]AAA-999"));//optional
                            echo $pdocrud->dbTable("producttable")->render("insertform");
                            echo $pdocrud->loadPluginJsCode("bootstrap-inputmask",".product_name", array("mask"=> "'[9-]AAA-999'"));//to add plugin call on .product_name elements
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