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
                    Where condition  
                    <small>Apply Where conditions in crud (improved in v 4.2)</small>
                    
                </h1>
                <p> You can add where condition to filter records using where() function. In simplest term, you can pass the column name and value to
                apply where condition, default "=" (equalto) operator will be used if you don't pass any operator as third parameter</p>
                <p>
                   Below example shows how to generate queries like
                   WHERE `order_date` > ? AND `order_amount` >= ? AND ( `order_status` = ? OR `order_status` = ? )
                </p>
            </section>    
            <!-- Default box -->
            <div class="box">                
                <div class="box-body">                    
                    <section class="code-section">
                        <pre class="brush: php;">  
                            $pdocrud = new PDOCrud();
                            /**
                            * Add where condition
                            * @param   string   $colName                          column name for which where condition to be applied
                            * @param   string   $val                              value of column
                            * @param   string   $operator                         any operator like =, !=, default value is "="
                            * @param   string   $andOroperator                    whether to use "and" or "or" operator, if empty, default andOrOperator = "and" will be used
                            * @param   string   $bracket                          whether to use opening "(" or closing bracket ")", leave empty if not required
                            * return   object                                     Object of class
                            */
                            $pdocrud->where("order_date", "2015-09-08", ">");
                            $pdocrud->where("order_amount", 50, ">=");
                            $pdocrud->where("order_status", "Completed", "=", "" ,"(");
                            $pdocrud->where("order_status", "Pending", "=", "OR" ,")");
                            echo $pdocrud->dbTable("orders")->render();
                        </pre>
                    </section>  
                </div>
            </div>  
            <!-- Code box -->
            <section class="content">
                <?php
                $pdocrud = new PDOCrud();
                /**
                * Add where condition
                * @param   string   $colName                          column name for which where condition to be applied
                * @param   string   $val                              value of column
                * @param   string   $operator                         any operator like =, !=, default value is "="
                * @param   string   $andOroperator                    whether to use "and" or "or" operator, if empty, default andOrOperator = "and" will be used
                * @param   string   $bracket                          whether to use opening "(" or closing bracket ")", leave empty if not required
                * return   object                                     Object of class
                */
                $pdocrud->where("order_date", "2015-09-08", ">");
                $pdocrud->where("order_amount", 50, ">=");
                $pdocrud->where("order_status", "Completed", "=", "" ,"(");
                $pdocrud->where("order_status", "Pending", "=", "OR" ,")");
                echo $pdocrud->dbTable("orders")->render();
                ?>
            </section>
        </div>
    </div>
    <?php include 'includes/footer.php'; ?>
</body>
</html>