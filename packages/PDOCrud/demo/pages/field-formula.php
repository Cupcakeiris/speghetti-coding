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
                   Field Formula
                    <small>Apply formula for fields before insert/update operation (added in version 2.5) </small>
                </h1>
                <p>
                    You can apply basic formula to change value of the field before insert/update operation dynamically. It can be done using
                    the callback function also but this function is added to provide more convenient way to do same. It also helps to set
                    the value to NULL for empty values to help to enter data in case of database restriction for e.g. saving NULL for datetime
                    for empty values.
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
                                    $pdocrud->fieldFormula("tax", "formula",array("type" =>"round","decimalpoint"=>2));
                                    // format field to 2 decimal point
                                    $pdocrud->fieldFormula("product_discount", "formula",array("type" =>"number_format","decimalpoint"=>2));
                                    // get ceil value of field
                                    $pdocrud->fieldFormula("product_price", "formula",array("type" =>"ceil"));
                                    //get floor value of field
                                    $pdocrud->fieldFormula("product_sell_price", "formula",array("type" =>"floor"));
                                    //string type - adding prefix of sku always and checking for duplicate i.e. string already have sku or not
                                    $pdocrud->fieldFormula("product_id","string",array("type" =>"prefix","str"=>"SKU_","duplicate"=>true));
                                    //make product name first letter upper case
                                    $pdocrud->fieldFormula("product_name", "string",array("type" =>"uppercase"));
                                    //setting value to NULL if empty
                                    $pdocrud->fieldFormula("added_Date", "string",array("type" =>"null"));
                                     
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
                        <h3 class="box-title">Formula based field content formatting </h3>
                        <div class="box-tools pull-right">
                            <button class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
                        </div>
                    </div>
                    <div class="box-body">
                        <div class="box-body table-responsive no-padding">
                            <?php
                                    $pdocrud = new PDOCrud();
                                     // format field to 2 decimal point
                                    $pdocrud->fieldFormula("tax", "formula",array("type" =>"round","decimalpoint"=>2));
                                    // format field to 2 decimal point
                                    $pdocrud->fieldFormula("product_discount", "formula",array("type" =>"number_format","decimalpoint"=>2));
                                    // get ceil value of field
                                    $pdocrud->fieldFormula("product_price", "formula",array("type" =>"ceil"));
                                    //get floor value of field
                                    $pdocrud->fieldFormula("product_sell_price", "formula",array("type" =>"floor"));
                                    //string type - adding prefix of sku always and checking for duplicate i.e. string already have sku or not
                                    $pdocrud->fieldFormula("product_id","string",array("type" =>"prefix","str"=>"SKU_","duplicate"=>true));
                                    //make product name first letter upper case
                                    $pdocrud->fieldFormula("product_name", "string",array("type" =>"uppercase"));
                                    //setting value to NULL if empty else return the value
                                    $pdocrud->fieldFormula("added_date", "string",array("type" =>"null"));
                                    
                                    $pdocrud->setSettings("required", false);
                                     
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