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
                    Add New Column dynamically on CRUD Table
                    <small>New Column addition dynamically on CRUD Table</small>
                </h1>
                <p>
                    You can add new table column dynamically based on two columns value for example you want to show order total based on order sub total
                    and tax. You can also merge two columns to generate a new column for example you can merge first name and last name to generate
                    new column "Full Name". By default, new column is added at the last. Since it is dynamic column, so it doesn't support search/sort/export
                    function.
                </p>
            </section>

            <!-- Default box -->
            <div class="box">                
                <div class="box-body">                    
                    <div class="box-function-ref">
                        <section class="code-section">
                            <pre class="brush: php;">  
                                 $pdocrud = new PDOCrud();
                                    //Add new column total which is calculated as sum of two columns (you can pass any no. of columns)
                                    $pdocrud->tableColAddition("Total", "sum",array("product_sell_price","tax"));
                                     //Add new colum Profit which is calculated as subtraction of two columns
                                    $pdocrud->tableColAddition("Profit", "subtract",array("product_price","product_sell_price"));
                                    //Add new colum Sell/price which is calculated as division of two columns
                                    $pdocrud->tableColAddition("Sell/price", "divide",array("product_sell_price","product_price"));
                                    //Merge column to generate a new column ( you can pass any no. of columns)
                                    $pdocrud->tableColAddition("Product Info", "merge",array("product_id","product_name"));
                                    $pdocrud->crudTableCol(array("product_name","product_id", "product_price","product_sell_price","tax","product_discount"));
                                    $pdocrud->crudRemoveCol(array("product_name","product_id"));
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
                        <h3 class="box-title">Add new table column</h3>
                        <div class="box-tools pull-right">
                            <button class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
                        </div>
                    </div>
                    <div class="box-body">
                        <div class="box-body table-responsive no-padding">
                            <?php
                                    $pdocrud = new PDOCrud();
                                    //Add new column total which is calculated as sum of two columns (you can pass any no. of columns)
                                    $pdocrud->tableColAddition("Total", "sum",array("product_sell_price","tax"));
                                     //Add new colum Profit which is calculated as subtraction of two columns
                                    $pdocrud->tableColAddition("Profit", "subtract",array("product_price","product_sell_price"));
                                    //Add new colum Sell/price which is calculated as division of two columns
                                    $pdocrud->tableColAddition("Sell/price", "divide",array("product_sell_price","product_price"));
                                    //Add new colum Random which is calculated as multipliication of two columns
                                    $pdocrud->tableColAddition("Random", "multiply",array("product_sell_price","product_price"));
                                    //Merge column to generate a new column ( you can pass any no. of columns)
                                    $pdocrud->tableColAddition("Product Info", "merge",array("product_id","product_name"));
                                    $pdocrud->crudTableCol(array("product_name","product_id", "product_price","product_sell_price","tax","product_discount"));
                                    $pdocrud->crudRemoveCol(array("product_name","product_id"));
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