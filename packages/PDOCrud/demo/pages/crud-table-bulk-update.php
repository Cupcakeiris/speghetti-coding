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
                    Bulk Records Update
                    <small>Update many records directly on crud table (added in version 1.9)</small>
                </h1>
                <p>
                    You can update multiple rows of data directly in table using the bulkCrudUpdate function. It allows data update 
                    directly in crud table so you can update multiple rows of data very fast. You can apply this function for more than a column to update
                    multiple column data simultaneously. After change on data, You need to press the save button on the top of the table (near add button)
                    to save the entries.
                    Please note that this function works with single table only having primary key in columns. 
                    
                </p>
             </section>    
                <!-- Default box -->
                <div class="box">                
                    <div class="box-body">                    
                        <section class="code-section">
                            <pre class="brush: php;">  
                            $pdocrud = new PDOCrud();
                            //$pdocrud->bulkCrudUpdate("customer_name", "textarea",array("data-some-attr" =>"some-dummy-val"));
                            $pdocrud->bulkCrudUpdate("order_amount", "text",array("data-some-attr" =>"some-dummy-val"));
                            $pdocrud->bulkCrudUpdate("customer_name", "select", array("data-cust-attr" =>"some-cust-val"),array(
                                        array(
                                            "Xenos Clarke",
                                            "Xenos Clarke"
                                        ),
                                        array(
                                            "Cooper Jensen",
                                            "Cooper Jensen"
                                        ),
                                        array(
                                            "Deacon Tyson",
                                            "Deacon Tyson"
                                        )));
                        //lets also remove action buttons(edit/delete/view) and checkbox(optional)
                        $pdocrud->setSettings("actionbtn", false);
                        $pdocrud->setSettings("checkboxCol", false);
                        echo $pdocrud->dbTable("orders")->render();
                            </pre>
                        </section>  
                    </div>
                </div>  
           
            <section class="content">
                <?php
                $pdocrud = new PDOCrud();
                //You need to pass column name, type of column field and some attribute.
                //$pdocrud->bulkCrudUpdate("order_date", "date",array("data-some-attr" =>"some-dummy-val"));
//                $pdocrud->bulkCrudUpdate("customer_name", "textarea",array("data-some-attr" =>"some-dummy-val"));
                $pdocrud->bulkCrudUpdate("order_amount", "text",array("data-some-attr" =>"some-dummy-val"));
                $pdocrud->bulkCrudUpdate("customer_name", "select", array("data-cust-attr" =>"some-cust-val"),array(
                            array(
                                "Xenos Clarke",
                                "Xenos Clarke"
                            ),
                            array(
                                "Cooper Jensen",
                                "Cooper Jensen"
                            ),
                            array(
                                "Deacon Tyson",
                                "Deacon Tyson"
                            )));
                //lets also remove action buttons(edit/delete/view) and checkbox(optional)
                $pdocrud->setSettings("actionbtn", false);
                $pdocrud->setSettings("checkboxCol", false);
                echo $pdocrud->dbTable("orders")->render();
                ?>
                
            </section>
        </div>
    </div>
    <?php include 'includes/footer.php'; ?>
</body>
</html>