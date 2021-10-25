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
                    <small>Order by ascending and descending </small>
                </h1>
                <p> You can get the data order by ascending and descending by using dbOrderBy function.
                </p>
                
            </section>    
            <!-- Default box -->
            <div class="box">                
                <div class="box-body">                    
                    <section class="code-section">
                        <pre class="brush: php;">  
                    $pdocrud = new PDOCrud();
                    $pdocrud->dbOrderBy("id desc");//descending    
                    //$pdocrud->dbOrderBy(array("id desc","order_no desc"));//pass in array                                 
                    echo $pdocrud->dbTable("orders")->render();
                        </pre>
                    </section>  
                </div>
            </div>  
            <!-- Code box -->
            <section class="content">
                <?php
                  $pdocrud = new PDOCrud();
                  $pdocrud->dbOrderBy("id desc");//descending          
                  $pdocrud->dbOrderBy(array("id desc","order_no desc"));//descending          
                  //$pdocrud->dbOrderBy("rand()");
                    echo $pdocrud->dbTable("orders")->render();
                ?>
            </section>
        </div>
    </div>
    <?php include 'includes/footer.php'; ?>
</body>
</html>