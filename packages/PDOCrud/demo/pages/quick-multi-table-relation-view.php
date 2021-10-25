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
                    <small>Editing of related records in other table (Added in v 3.6)</small>
                </h1>
                <p> PDOCrud allows the editing of related records of different table i.e. similar to nested table.  
                    Nested Table is a table inside a table. It is not stored in that way but similar concept is used.
                    You can define relation between the two tables data using some binding column value.
                    <a href="multi-table-relation-tabs"> Click here</a> for tab version 
                </p>
            </section>    
            <!-- Default box -->
            <div class="box">                
                <div class="box-body">                    
                    <section class="code-section">
                        <pre class="brush: php;">  
                            //customer table object
                            $pCustomer = new PDOCrud();

                            // Add related table data view action button
                            $action = "javascript:;";
                            $text = '<i class="fa fa-plus" aria-hidden="true"></i>';
                            $attr = array("title"=>"Related Table");
                            $pCustomer->enqueueBtnActions("related_table", $action, "related_table",$text,"customer_id", $attr);

                            //optional - setting the columns of cutomer table
                            $pCustomer->crudTableCol(array("customer_id","customer_name","customer_country"));
                            //order of customer 
                            $pOrder = new PDOCrud(true);
                            $pOrder->joinTable("customertable", "ordertable.customer_id = customertable.customer_id", "INNER JOIN");
                            $pOrder->dbTable("ordertable");
                            //optional - setting the columns of order table
                            $pOrder->crudTableCol(array("orderId","customer_name","order_amount","order_date"));
                            //optional - changing the field type customer_id as select and getting data from the list of customers in the order table fields dropdown
                            $pOrder->fieldTypes("customer_id", "select");//change type to select
                            $pOrder->fieldDataBinding("customer_id", "customertable", "customer_id", "customer_name", "db");//add data using another table name country
                            //first paramater is first table(object) columnn name and 2nd parameter is 2nd object column name
                            $pCustomer->multiTableRelation("customer_id", "ordertable.customer_id", $pOrder);
                            $pOrder->setSettings("viewBackButton", false);
                            $pCustomer->setSettings("viewBackButton", false);
                            $pOrder->setSettings("saveBackButton", false);
                            $pOrder->setSettings("backButton", false);
                            $pOrder->setSettings("viewEditButton", true);
                            $pOrder->setSettings("saveCloseButton", true);
                            echo $pCustomer->dbTable("customertable")->render();

                            echo $pCustomer->dbTable("customertable")->render();
                        </pre>
                    </section>  
                </div>
            </div>  
            <!-- Code box -->
            <section class="content">
                <?php
                //customer table object
                $pCustomer = new PDOCrud(false,"","",array("quickView"=>true));
                
                // Add related table data view action button
                $action = "javascript:;";
                $text = '<i class="fa fa-plus" aria-hidden="true"></i>';
                $attr = array("title"=>"Related Table");
                $pCustomer->enqueueBtnActions("related_table", $action, "related_table",$text,"customer_id", $attr);
                
                //optional - setting the columns of cutomer table
                $pCustomer->crudTableCol(array("customer_id","customer_name","customer_country"));
                //order of customer 
                $pOrder = new PDOCrud(true,"","",array("quickView"=>true));
                $pOrder->joinTable("customertable", "ordertable.customer_id = customertable.customer_id", "INNER JOIN");
                $pOrder->dbTable("ordertable");
                //optional - setting the columns of order table
                $pOrder->crudTableCol(array("orderId","customer_name","order_amount","order_date"));
                //optional - changing the field type customer_id as select and getting data from the list of customers in the order table fields dropdown
                $pOrder->fieldTypes("customer_id", "select");//change type to select
                $pOrder->fieldDataBinding("customer_id", "customertable", "customer_id", "customer_name", "db");//add data using another table name country
                //first paramater is first table(object) columnn name and 2nd parameter is 2nd object column name
                $pCustomer->multiTableRelation("customer_id", "ordertable.customer_id", $pOrder);
                $pOrder->setSettings("viewBackButton", false);
                $pCustomer->setSettings("viewBackButton", false);
                $pOrder->setSettings("saveBackButton", false);
                $pOrder->setSettings("backButton", false);
                $pOrder->setSettings("viewEditButton", true);
                $pOrder->setSettings("saveCloseButton", true);
                echo $pCustomer->dbTable("customertable")->render();
                ?>
            </section>
        </div>
        
    <?php include 'includes/footer.php'; ?>
</body>
</html>
