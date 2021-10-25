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
                    <small>Inner Join between tables</small>
                </h1>
                <p>
                    SQL INNER JOIN returns all rows from tables where the key record of one table is equal to the key records of another table. You can
                    easily perform the INNER JOIN operation using pdcrud, all you need to do is specify the join table name and the join condition between two tables.
                    Below examples shows inner join between user table and usermeta table that has matching column 'user_id'. It will select all records having matching
                    user_id from both of these tables. During select/insert/update operation, data from both tables will be shown for inner join operation.
                </p>
            </section>    
            <!-- Default box -->
            <div class="box">                
                <div class="box-body">                    
                    <section class="code-section">
                        <pre class="brush: php;">  
                            $pdocrud = new PDOCrud();
                            /**
                            * Add join between tables, supported join condition are "INNER JOIN" & "LEFT JOIN"
                            * @param   string  $joinTableName                             name of table to be joined
                            * @param   string  $joinCondition                             join condition e.g. 
                            * @param   string  $joinType                                  type of join (Inner or left join)-default is inner join
                            * return   object                                             Object of class
                            */
                            $pdocrud->colRename("meta_key", "Meta Key Info");
                            $pdocrud->joinTable("user_meta", "users.user_id = user_meta.user_id", "INNER JOIN");
                            $pdocrud->crudTableCol(array("first_name","last_name","meta_key"));
                            echo $pdocrud->dbTable("users")->render();
                        </pre>
                    </section>  
                </div>
            </div>  

            <section class="content">
                <?php
                $pdocrud = new PDOCrud();
                /**
                 * Add join between tables, supported join condition are "INNER JOIN" & "LEFT JOIN"
                 * @param   string  $joinTableName                             name of table to be joined
                 * @param   string  $joinCondition                             join condition e.g. 
                 * @param   string  $joinType                                  type of join (Inner or left join)-default is inner join
                 * return   object                                             Object of class
                 */
                $pdocrud->colRename("meta_key", "Meta Key Info");
                $pdocrud->joinTable("user_meta", "users.user_id = user_meta.user_id", "INNER JOIN");
                $pdocrud->crudTableCol(array("first_name","last_name","meta_key"));
                echo $pdocrud->dbTable("users")->render();
                ?>
            </section>
        </div>
    </div>
    <?php include 'includes/footer.php'; ?>
</body>
</html>