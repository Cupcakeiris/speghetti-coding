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
                    CRUD Table col source  
                    <small>get column data from some array or another table column</small>
                </h1>
                <p>
                    PDOCrud allows you to get the column data from different table's column or from array data. For example, in your table,
                    you are storing empId, instead of that you want to show the name of employee which is stored in another table and joined
                    using the table. One way is do this is using the inner join operation. Apart from this, tableColDataSource function also
                    available that can be used for same purpose so you don't have to join the tables. You can specify the tablename, colname
                    and datafield name.In this function, you can also pass array of data.
                </p>
             </section>    
                <!-- Default box -->
                <div class="box">                
                    <div class="box-body">                    
                            <section class="code-section">
                                <pre class="brush: php;">  
                                $pdocrud = new PDOCrud(); 
                                //load data of room_id from another table and column name room_no where corrosponding values are stored.
                                $pdocrud->tableColUsingDatasource("room_Id", "roomtable", "room_id", "room_no", "db");
                                echo $pdocrud->dbTable("bookroom")->render();
                                </pre>
                            </section>  
                    </div>
                </div>  
           
            <section class="content">
                <?php
                $pdocrud = new PDOCrud(); 
                //load data of room_id from another table and column name room_no where corrosponding values are stored.
                $pdocrud->tableColUsingDatasource("room_Id", "roomtable", "room_id", "room_no", "db");
                echo $pdocrud->dbTable("bookroom")->render();
               ?>
            </section>
        </div>
    </div>
    <?php include 'includes/footer.php'; ?>
</body>
</html>