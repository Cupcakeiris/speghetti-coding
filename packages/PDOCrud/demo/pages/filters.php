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
                    Filters/Search in PDOCrud
                    <small>Advance filter options</small>
                </h1>
                <p>
                    Apart from column based search, you can add the advance filter options in PDOCrud. You can specify different filter and connect to 
                    different columns of table. You can also specify type of filter and how it should work. Currently it support three types of 
                    controls - dropdown, radio button and textbox. More options will be available in future versions.
                    
                </p>
             </section>    
                <!-- Default box -->
                <div class="box">                
                    <div class="box-body">                    
                        <section class="code-section">
                            <pre class="brush: php;">  
                            $pdocrud = new PDOCrud();
                            //add Filter ("unique-filter-name", "Filter display name", "column name to be matched","type of filter")
                            $pdocrud->addFilter("product_cat_filter", "Product Category", "product_cat", "radio");
                            //set data for filter ("unique-filter-name",array of data or table,key (if source=db),value (if source=db), "source_type") 
                            $pdocrud->setFilterSource("product_cat_filter", array("Electronic" => "Electronic", "Fashion" => "Fashion"), "", "", "array");

                            $pdocrud->addFilter("ProductLineFilter", "Product Line", "product_line", "dropdown");
                            $pdocrud->setFilterSource("ProductLineFilter", "products", "product_line", "product_line as pl", "db");

                            $pdocrud->addFilter("ProductVendorFilter", "Vendor", "ProductVendor", "text");
                            $pdocrud->setFilterSource("ProductVendorFilter", "", "", "", "");

                            echo $pdocrud->dbTable("products")->render();
                            </pre>
                        </section>  
                    </div>
                </div>  
           
            <section class="content">
                <?php
                $pdocrud = new PDOCrud();
                //add Filter ("unique-filter-name", "Filter display name", "column name to be matched","type of filter")
                $pdocrud->addFilter("product_cat_filter", "Product Category", "product_cat", "radio");
                //set data for filter ("unique-filter-name",array of data or table,key (if source=db),value (if source=db), "source_type") 
                $pdocrud->setFilterSource("product_cat_filter", array("Electronic" => "Electronic", "Fashion" => "Fashion"), "", "", "array");
                
                $pdocrud->addFilter("ProductLineFilter", "Product Line", "product_line", "dropdown");
                $pdocrud->setFilterSource("ProductLineFilter", "products", "product_line", "product_line as pl", "db");
                
                $pdocrud->addFilter("ProductVendorFilter", "Vendor", "ProductVendor", "text");
                $pdocrud->setFilterSource("ProductVendorFilter", "", "", "", "");
                
                echo $pdocrud->dbTable("products")->render();
                ?>
            </section>
        </div>
    </div>
    <?php include 'includes/footer.php'; ?>
</body>
</html>