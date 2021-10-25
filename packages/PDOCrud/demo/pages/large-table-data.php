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
                    Managing Large Tables  
                    <small> Large tables with many rows can be easily handled by PDOCrud</small>
                </h1>
                <p> You can use PDOCrud to manage very large database tables also. Below demo shows table with 100000 rows. Also, 
                make sure to use the column indexing to make result more fast. </p>
                
             </section>    
                <!-- Default box -->
                <div class="box">                
                    <div class="box-body">                    
                        <section class="code-section">
                            <pre class="brush: php;">  
                            $pdocrud = new PDOCrud();
                            //setting dropdown for records per page (avoid using "all" for large tables)
                            $pdocrud->setRecordsPerPageList(array(10,25,50,100)); 
                            echo $pdocrud->dbTable("user_details")->render();
                            </pre>
                        </section>  
                    </div>
                </div>             
            <section class="content">
                <?php
                $pdocrud = new PDOCrud();
                //setting dropdown for records per page (avoid using "all" for large tables)
                $pdocrud->setRecordsPerPageList(array(10,25,50,100)); 
                echo $pdocrud->dbTable("user_details")->render();
                ?>
            </section>
        </div>
    </div>
    <?php include 'includes/footer.php'; ?>
</body>
</html>