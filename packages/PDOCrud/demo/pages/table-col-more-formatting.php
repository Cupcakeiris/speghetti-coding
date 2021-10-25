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
                    More Crud Table Formatting Options
                    <small>Format crud table column for date, image, read more, description and conditional logic formatting etc</small>
                </h1>
                <p>
                    You can format table column for date, image, html,read more, description and conditional logic formatting and many more other options.
                    date format allows you to pass any standard php date formatting string and table will be formatted according to that.
                    image format makes column value as image tag.
                    long description can be made short with some character limit.
                    conditional logic like if product price is greater than 200 than make that background highlight.
                    Similar way view form formatting can be done. <a href="view-col-formatting">Click here </a> to check example of view form formatting options.
                </p>
            </section>

            <!-- Default box -->
            <div class="box">                
                <div class="box-body">                    
                    <div class="box-function-ref">
                        <section class="code-section">
                            <pre class="brush: php;">  
                                    $pdocrud = new PDOCrud();
                                    $pdocrud->crudTableCol(array("product_line","product_image","product_name","product_description","product_price"));
                                     // date formatting (pass date format)
                                    $pdocrud->tableColFormatting("added_date", "date",array("format" =>"m-d-Y"));
                                    // convert to any html like url or any html with actual value passed as {col-name}
                                     $pdocrud->tableColFormatting("product_line", "html",array("type" =>"html",
                                        "str"=>"<div style='font-weight:bold' data-attribute='abc-{col-name}'>{col-name}</div>"));
                                    $pdocrud->tableColFormatting("product_name", "html",array("type" =>"html",
                                        "str"=>"<a href='http://www.pdocrud.com/paramater={col-name}' data-attribute='abc-{col-name}'>{col-name}</a>"));
                                    //convert to image column
                                     $pdocrud->tableColFormatting("product_image", "image");
                                     //convert long column text to small text with read more
                                     $pdocrud->tableColFormatting("product_description", "readmore", array("length"=>4,"showreadmore"=>true));//not showing read more 
                                    //conditional logic for formatting table colums - e.g apply css style for cells with product price>200 
                                     $pdocrud->tableDataFormatting("col", "style", array("product_price",">", "55"),array("background:#f00","color:#ff0"));
                                     //$pdocrud->tableDataFormatting("row", "style", array("product_price",">", "55"),array("background:#000","color:#ff0"));
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
                        <h3 class="box-title">More options for table content formatting </h3>
                        <div class="box-tools pull-right">
                            <button class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
                        </div>
                    </div>
                    <div class="box-body">
                        <div class="box-body table-responsive no-padding">
                            <?php
                                    $pdocrud = new PDOCrud();
                                    $pdocrud->crudTableCol(array("product_line","product_image","product_name","product_description","product_price"));
                                     // date formatting (pass date format)
                                    $pdocrud->tableColFormatting("added_date", "date",array("format" =>"m-d-Y"));
                                    // convert to any html like url or any html with actual value passed as {col-name}
                                     $pdocrud->tableColFormatting("product_line", "html",array("type" =>"html",
                                        "str"=>"<div style='font-weight:bold' data-attribute='abc-{col-name}'>{col-name}</div>"));
                                    $pdocrud->tableColFormatting("product_name", "html",array("type" =>"html",
                                        "str"=>"<a href='http://www.pdocrud.com/paramater={col-name}' data-attribute='abc-{col-name}'>{col-name}</a>"));
                                    //convert to image column
                                     $pdocrud->tableColFormatting("product_image", "image");
                                     //convert long column text to small text with read more
                                     $pdocrud->tableColFormatting("product_description", "readmore", array("length"=>24,"showreadmore"=>true));//not showing read more 
                                    //conditional logic for formatting table colums - e.g apply css style for cells with product price>200 
                                     $pdocrud->tableDataFormatting("col", "style", array("product_price",">", "55"),array("background:#f00","color:#ff0"));
                                     //$pdocrud->tableDataFormatting("row", "style", array("product_price",">", "55"),array("background:#000","color:#ff0"));
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