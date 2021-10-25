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
                    Plugin chosen example
                </h1>
            </section>

            <!-- Default box -->
            <div class="box">                
                <div class="box-body">                    
                    <div class="box-function-ref">
                        <section class="code-section">
                            <pre class="brush: php;">  
                            $pdocrud = new PDOCrud();
                            $pdocrud->addPlugin("chosen");//to add plugin      
                            $pdocrud->fieldTypes("product_name", "select"); //change donation amount to radio button
                            $pdocrud->fieldDataBinding("product_name", array("Mobile", "Pendrive", "Harddisk"), "", "", "array"); //add data for radio button
                            echo $pdocrud->dbTable("producttable")->render("insertform");
                            echo $pdocrud->loadPluginJsCode("chosen",".pdocrud-select");//to add plugin call on class .pdocrud-select elements
                            </pre>
                        </section>  
                    </div>
                </div>
            </div>  

            <!-- Main content -->
            <section class="content">
                <div class="box">
                    <div class="box-header with-border">
                        <h3 class="box-title">Plugin chosen example - PDOCrud</h3>
                        <div class="box-tools pull-right">
                            <button class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
                        </div>
                    </div>
                    <div class="box-body">
                        <div class="box-body table-responsive no-padding">
                            <?php
                            $pdocrud = new PDOCrud();
                            $pdocrud->addPlugin("chosen");//to add plugin      
                            $pdocrud->fieldTypes("product_name", "select"); //change donation amount to radio button
                            $pdocrud->fieldDataBinding("product_name", array("Mobile", "Pendrive", "Harddisk"), "", "", "array"); //add data for radio button
                            echo $pdocrud->dbTable("producttable")->render("insertform");
                            echo $pdocrud->loadPluginJsCode("chosen",".pdocrud-select");//to add plugin call on class .pdocrud-select elements
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