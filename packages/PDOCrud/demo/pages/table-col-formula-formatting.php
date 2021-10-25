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
                    Formula based Formatting of CRUD table column
                    <small>Format crud table column using formula</small>
                </h1>
                <p>
                    You can format table column using various formula functions. For example you can make any table column content to uppercase, first letter uppercase, lowercase
                    or you can add prefix, suffix etc. 
                </p>
            </section>

            <!-- Default box -->
            <div class="box">                
                <div class="box-body">                    
                    <div class="box-function-ref">
                        <section class="code-section">
                            <pre class="brush: php;">  
                               $pdocrud = new PDOCrud();
                                // format field to 2 decimal point
                               $pdocrud->tableColFormatting("tax", "formula",array("type" =>"round","decimalpoint"=>2));
                               // format field to 2 decimal point
                               $pdocrud->tableColFormatting("product_discount", "formula",array("type" =>"number_format","decimalpoint"=>2));
                               // get ceil value of field
                               $pdocrud->tableColFormatting("product_price", "formula",array("type" =>"ceil"));
                               //get floor value of field
                               $pdocrud->tableColFormatting("product_sell_price", "formula",array("type" =>"floor"));

                               $pdocrud->crudTableCol(array("product_name", "product_price","product_sell_price","tax","product_discount"));
                               echo $pdocrud->dbTable("products")->render();
                            </pre>
                        </section>  
                    </div>
                </div>
            </div>  

            <!-- Main content -->
            <section class="content">
                <div class="box">
                    <div class="box-header with-border">
                        <h3 class="box-title">Formula based table content formatting </h3>
                        <div class="box-tools pull-right">
                            <button class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
                        </div>
                    </div>
                    <div class="box-body">
                        <div class="box-body table-responsive no-padding">
                            <?php
                                    $pdocrud = new PDOCrud();
                                     // format field to 2 decimal point
                                    $pdocrud->tableColFormatting("tax", "formula",array("type" =>"round","decimalpoint"=>2));
                                    // format field to 2 decimal point
                                    $pdocrud->tableColFormatting("product_discount", "formula",array("type" =>"number_format","decimalpoint"=>2));
                                    // get ceil value of field
                                    $pdocrud->tableColFormatting("product_price", "formula",array("type" =>"ceil"));
                                    //get floor value of field
                                    $pdocrud->tableColFormatting("product_sell_price", "formula",array("type" =>"floor"));
                                    $pdocrud->crudTableCol(array("product_name", "product_price","product_sell_price","tax","product_discount"));
                                    
                                    echo $pdocrud->dbTable("products")->render();
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