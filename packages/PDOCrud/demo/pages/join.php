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
                    <small> Join operation</small>
                </h1>
                <p>PDOCrud supports both left join and inner join operation. 
                    If you want to apply master, detail table operation where master table contains single record and details table 
                    contains multiple records, use LEFT JOIN else INNER JOIN.</p>
                <br/>
                <a href="http://pdocrud.com/demo/pages/inner-join"> Example of inner join 1</a>
                <br/>
                <a href="http://pdocrud.com/demo/pages/inner-join-with-columns"> Example of inner join 2</a>
             </section>    
                <!-- Default box -->
                <div class="box">                
                    <div class="box-body">                    
                        <section class="code-section">
                            <pre class="brush: php;">  
                            $pdocrud = new PDOCrud();
                            $pdocrud->crudTableCol(array("first_name","last_name","user_name","gender"));
                            /**
                            * Add join between tables, supported join condition are "INNER JOIN" & "LEFT JOIN"
                            * @param   string  $joinTableName                             name of table to be joined
                            * @param   string  $joinCondition                             join condition e.g. ("table2.col = table1.col")
                            * @param   string  $joinType                                  type of join (Inner or left join)-default is inner join
                            * return   object                                             Object of class
                            */
                            $pdocrud->joinTable("user_meta", "user_meta.user_id = users.user_id", "LEFT JOIN");
                            echo $pdocrud->dbTable("users")->render();
                            </pre>
                        </section>  
                    </div>
                </div>             
            <section class="content">
                <?php
                $pdocrud = new PDOCrud();
                $pdocrud->crudTableCol(array("user_id","first_name","last_name","user_name","gender"));
                  /**
                 * Add join between tables, supported join condition are "INNER JOIN" & "LEFT JOIN"
                 * @param   string  $joinTableName                             name of table to be joined
                 * @param   string  $joinCondition                             join condition e.g. 
                 * @param   string  $joinType                                  type of join (Inner or left join)-default is inner join
                 * return   object                                             Object of class
                 */
                $pdocrud->joinTable("user_meta", "user_meta.user_id = users.user_id", "LEFT JOIN");
                echo $pdocrud->dbTable("users")->render();
                ?>
            </section>
        </div>
    </div>
    <?php include 'includes/footer.php'; ?>
</body>
</html>