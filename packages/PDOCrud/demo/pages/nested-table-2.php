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
                    Multi table relation (nested tables)  
                    <small>Editing of related records in other table (Added in v 2.0)</small>
                </h1>
                <p> PDOCrud allows the editing of related records of different table i.e. similar to nested table.  
                    Nested Table is a table inside a table. It is not stored in that way but similar concept is used.
                    You can define relation between the two tables data using some binding column value.
                </p>
            </section>    
            <!-- Default box -->
            <div class="box">                
                <div class="box-body">                    
                    <section class="code-section">
                        <pre class="brush: php;">  
                                 //order table object
                                $pOrder = new PDOCrud();
                                //order's class object
                                $pOrderDetails = new PDOCrud(true);
                                $pOrderDetails->crudTableCol(array("productCode", "quantityOrdered", "priceEach"));
                                $pOrderDetails->formFields(array("productCode", "quantityOrdered", "priceEach"));
                                $pOrderDetails->dbTable("orderdetails");
                                //first paramater is first table(object) columnn name and 2nd parameter is 2nd object column name
                                $pOrder->multiTableRelation("orderNumber", "orderNumber", $pOrderDetails);
                                echo $pOrder->dbTable("orders")->render();
                        </pre>
                    </section>  
                </div>
            </div>  
            <!-- Code box -->
            <section class="content">
                <?php
                //order table object
                $pOrder = new PDOCrud();
                //order's class object
                $pOrderDetails = new PDOCrud(true);
                $pOrderDetails->crudTableCol(array("productCode", "quantityOrdered", "priceEach"));
                $pOrderDetails->formFields(array("productCode", "quantityOrdered", "priceEach"));
                $pOrderDetails->dbTable("orderdetails");
                //first paramater is first table(object) columnn name and 2nd parameter is 2nd object column name
                $pOrder->multiTableRelation("order_no", "order_no", $pOrderDetails);
                echo $pOrder->dbTable("orders")->render();
                ?>
            </section>
        </div>
        
    <?php include 'includes/footer.php'; ?>
</body>
</html>