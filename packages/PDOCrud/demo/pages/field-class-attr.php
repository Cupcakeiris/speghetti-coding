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
                    Field class and attribute settings
                    <small>Add field class and attributes in PDOCrud</small>
                </h1>
            </section>

            <!-- Default box -->
            <div class="box">                
                <div class="box-body">                    
                    <div class="box-function-ref">
                        <section class="code-section">
                            <pre class="brush: php;">  
                                $pdocrud = new PDOCrud();
                                $pdocrud->fieldCssClass("first_name", array("class1", "class2"));// add css classes
                                $pdocrud->fieldAttributes("last_name", array("data-type"=>"some_val"));// any attribute name and it's value
                                $pdocrud->fieldAttributes("customer_name", array("placeholder"=>"name of customer"));//add placeholder attribute
                                $pdocrud->fieldAttributes("order_status", array("placeholder"=>"status of order"));//add placeholder attribute
                                echo $pdocrud->dbTable("orders")->render("insertform");
                            </pre>
                        </section>  
                    </div>
                </div>
            </div>  

            <!-- Main content -->
            <section class="content">
                <div class="box">
                    <div class="box-header with-border">
                        <h3 class="box-title">Field class and data attributes addition using PDOCrud</h3>
                        <div class="box-tools pull-right">
                            <button class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
                        </div>
                    </div>
                    <div class="box-body">
                        <div class="box-body table-responsive no-padding">
                            <?php
                            $pdocrud = new PDOCrud();
                            $pdocrud->fieldCssClass("first_name", array("class1", "class2"));// add css classes
                            $pdocrud->fieldAttributes("last_name", array("data-type"=>"some_val"));// any attribute name and it's value
                            $pdocrud->fieldAttributes("customer_name", array("placeholder"=>"name of customer"));//add placeholder attribute
                            $pdocrud->fieldAttributes("order_status", array("placeholder"=>"status of order"));//add placeholder attribute
                            echo $pdocrud->dbTable("orders")->render("insertform");
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