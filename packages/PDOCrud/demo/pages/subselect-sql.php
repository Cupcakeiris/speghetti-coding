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
                    Subselect SQL
                    <small>Use sql to generate dynamic columns (Added in version 4.4) </small>
                </h1>
                <p>
                   You can use the subselect query to generate columns dynamically. You can get data 
                   from other tables using the query. It accepts two parameters, first one is column
                   name/alias and second is query. 
                </p>
             </section>    
                <!-- Default box -->
                <div class="box">                
                    <div class="box-body">                    
                            <section class="code-section">
                                <pre class="brush: php;">  
                                $pdocrud = new PDOCrud();
                                $pdocrud->crudTableCol(array("first_name","last_name"));
                                 /**
                                 * Allows you to add the dynamic column based on sub query
                                 * @param   string   $columnName                      Alias column name to be used for the query
                                 * @param   string   $query                           Sub Query to be used
                                 * return   object                                    Object of class
                                 */
                                $pdocrud->subQueryColumn("order_id", "select sum(id) from orders where customer_name = {user_name}");
                                echo $pdocrud->dbTable("users")->render(); 
                                </pre>
                            </section>  
                    </div>
                </div>  
           
            <section class="content">
                <?php
                $pdocrud = new PDOCrud();
                $pdocrud->crudTableCol(array("first_name","last_name"));
                 /**
                 * Allows you to add the dynamic column based on sub query
                 * @param   string   $columnName                      Alias column name to be used for the query
                 * @param   string   $query                           Sub Query to be used
                 * return   object                                    Object of class
                 */
                $pdocrud->subQueryColumn("order_id", "select sum(id) from orders where customer_name = {user_name}");
                echo $pdocrud->dbTable("users")->render(); 
               ?>
            </section>
        </div>
    </div>
    <?php include 'includes/footer.php'; ?>
</body>
</html>