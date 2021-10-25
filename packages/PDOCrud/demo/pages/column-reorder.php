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
                    <small>Column Reorder (Added in V 3.0)</small>
                </h1>
                <p> You can reorder columns display order using this function. Also, there is one more way you can do is by passing columns names.</p>
             </section>    
                <!-- Default box -->
                <div class="box">                
                    <div class="box-body">                    
                        <section class="code-section">
                            <pre class="brush: php;">  
                            $pdocrud = new PDOCrud();
                            //changing the order of columns to be displayed
                            $pdocrud->setColumnsOrders(array("last_name","first_name","Zip","State","City"));
                            echo $pdocrud->dbTable("employee")->render();
                            </pre>
                        </section>  
                    </div>
                </div>  
           
            <section class="content">
                <?php
                $pdocrud = new PDOCrud();
                //changing the order of columns to be displayed
                $pdocrud->setColumnsOrders(array("last_name","first_name","Zip","State","City"));
                echo $pdocrud->dbTable("employee")->render();
                ?>
            </section>
        </div>
    </div>
    <?php include 'includes/footer.php'; ?>
</body>
</html>