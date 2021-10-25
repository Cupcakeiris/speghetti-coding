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
                    PDOCrud  
                    <small>Add filter</small>
                </h1>
                <p>
                    
                </p>
             </section>    
                <!-- Default box -->
                <div class="box">                
                    <div class="box-body">                    
                            <section class="code-section">
                                <pre class="brush: php;">  
                                 $pdocrud = new PDOCrud(); 
                                $pdocrud->crudFilter("city", "city", "city_name", "city_name as city");//field name to be searched, tablename from where data to be loaded, key of table, value of table
                                $pdocrud->setSettings("filter", true);
                                echo $pdocrud->dbTable("employee")->render();
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
$pdocrud->setSearchOperator("like");
       
echo $pdocrud->dbTable("products")->render();
               ?>
            </section>
        </div>
    </div>
    <?php include 'includes/footer.php'; ?>
</body>
</html>