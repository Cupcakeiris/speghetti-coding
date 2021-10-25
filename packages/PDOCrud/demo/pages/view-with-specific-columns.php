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
                    <small>Form View with specific columns</small>
                </h1>
             </section>    
                <!-- Default box -->
                <div class="box">                
                    <div class="box-body">                    
                            <section class="code-section">
                                <pre class="brush: php;">  
                                $pdocrud = new PDOCrud();
                                $pdocrud->setPK("id");
                                $pdocrud->setViewColumns(array("order_no","order_date","customer_name"));
                                echo $pdocrud->dbTable("orders")->render("VIEWFORM",array("id" =>"58"));
                                </pre>
                            </section>  
                    </div>
                </div>  
           
            <section class="content">
                <?php
                $pdocrud = new PDOCrud();
                $pdocrud->setPK("id");
                $pdocrud->setViewColumns(array("order_no","order_date","customer_name"));
                echo $pdocrud->dbTable("orders")->render("VIEWFORM",array("id" =>"58"));
                ?>
            </section>
        </div>
    </div>
    <?php include 'includes/footer.php'; ?>
</body>
</html>