<?php require_once '../../script/pdocrud.php'; ?>
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
                    View Col formatting  
                    <small>Format view columns similar to table col formating (added in v 2.5)</small>
                </h1>
                <p>
                    You can format view form fields for date, image, html,read more, description and many more other options.
                    date format allows you to pass any standard php date formatting string and data will be formatted according to that.
                    image format makes value as image tag.
                    long description can be made short with some character limit.
                </p>
             </section>    
                <!-- Default box -->
                <div class="box">                
                    <div class="box-body">                    
                            <section class="code-section">
                                <pre class="brush: php;">  
                                    $pdocrud = new PDOCrud();
                                    $pdocrud->setPK("product_id");
                                    // convert to any html like url or any html with actual value passed as {col-name}
                                    $pdocrud->viewColFormatting("product_line", "html", array("type" => "html",
                                        "str" => "<div style='font-weight:bold' data-attribute='abc-{col-name}'>{col-name}</div>"));
                                    $pdocrud->viewColFormatting("product_name", "html", array("type" => "html",
                                        "str" => "<a href='http://www.pdocrud.com/?paramater={col-name}' data-attribute='abc-{col-name}'>{col-name}</a>"));
                                    //convert to image column
                                    $pdocrud->viewColFormatting("product_image", "image");
                                    //convert long column text to small text with read more
                                    $pdocrud->viewColFormatting("product_description", "readmore", array("length" => 4, "showreadmore" => true)); //not showing read more 
                                    // date formatting (pass date format)
                                    $pdocrud->viewColFormatting("added_date", "date", array("format" => "m-d-Y"));
                                    echo $pdocrud->dbTable("products")->render("VIEWFORM", array("id" => "S10_1678"));
                                </pre>
                            </section>  
                    </div>
                </div>  
           
            <section class="content">
                <?php
                $pdocrud = new PDOCrud();
                $pdocrud->setPK("product_id");
                // convert to any html like url or any html with actual value passed as {col-name}
                $pdocrud->viewColFormatting("product_line", "html", array("type" => "html",
                    "str" => "<div style='font-weight:bold' data-attribute='abc-{col-name}'>{col-name}</div>"));
                $pdocrud->viewColFormatting("product_name", "html", array("type" => "html",
                    "str" => "<a href='http://www.pdocrud.com/?paramater={col-name}' data-attribute='abc-{col-name}'>{col-name}</a>"));
                //convert to image column
                $pdocrud->viewColFormatting("product_image", "image");
                //convert long column text to small text with read more
                $pdocrud->viewColFormatting("product_description", "readmore", array("length" => 4, "showreadmore" => true)); //not showing read more 
                // date formatting (pass date format)
                $pdocrud->viewColFormatting("added_date", "date", array("format" => "m-d-Y"));
                echo $pdocrud->dbTable("products")->render("VIEWFORM", array("id" => "S10_1678"));
                ?>
            </section>
        </div>
    </div>
    <?php include 'includes/footer.php'; ?>
</body>
</html>