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
                    <small>sql operation</small>
                </h1>
                <p>Render sql helps to display the data in grid/table format. You can write sql select statement to display data in the grid format.
                Please note that since sql statement can be of any type so the default grid function will not work with this sql render. From
                version 2.4, the pagination, records per page and display of total records is also removed. A better option to use the
                sql render with the jquery datatable plugin. You can see example <a href="plugin-datatable">here</a></p>
             </section>    
                <!-- Default box -->
                <div class="box">                
                    <div class="box-body">                    
                            <section class="code-section">
                                <pre class="brush: php;">  
                                 $pdocrud = new PDOCrud();
                                $pdocrud->setQuery("select * from orders");                
                                echo $pdocrud->render("SQL");
                                </pre>
                            </section>  
                    </div>
                </div>  
           
            <section class="content">
                <?php
                $pdocrud = new PDOCrud();
                $pdocrud->setQuery("select * from orders");                
                echo $pdocrud->render("SQL");
                ?>
            </section>
        </div>
    </div>
    <?php include 'includes/footer.php'; ?>
</body>
</html>