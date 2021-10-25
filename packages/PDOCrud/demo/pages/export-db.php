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
                    Export DB  
                    <small>export database </small>
                </h1>
                <p>
                    Export database at single click. Please note that it uses shuttle-export-master library to export database.
                    As per limitation of shuttle-export-master library, there is no foreign key constraint exported in database. Please
                    check https://github.com/2createStudio/shuttle-export for more details to avoid any confusion regarding data exported.
                    By default, exported sql file will be saved in downloads folder.
                </p>
             </section>    
                <!-- Default box -->
                <div class="box">                
                    <div class="box-body">                    
                            <section class="code-section">
                                <pre class="brush: php;">  
                                $pdocrud = new PDOCrud();
                                /**
                                     * Export complete database
                                     * @param   string   $filename                          File name 
                                     * @param   string   $includeTables                     Include particular tables
                                     * @param   string   $excludeTables                     Exclude particular tables
                                     * return   object                                      Object of class
                                     */
                                $pdocrud->exportDB("pdo.sql");
                                 //complete path
                                //$pdocrud->exportDB("pdo.sql.gz", array("orders"),array("student"));
                                </pre>
                            </section>  
                    </div>
                </div>  
           
            <section class="content">
                <?php
                $pdocrud = new PDOCrud();
                $pdocrud->exportDB("pdo.sql");
               ?>
            </section>
        </div>
    </div>
    <?php include 'includes/footer.php'; ?>
</body>
</html>