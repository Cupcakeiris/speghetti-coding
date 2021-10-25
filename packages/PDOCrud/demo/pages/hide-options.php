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
                    <small>Hide various option</small>
                </h1>
             </section>    
                <!-- Default box -->
                <div class="box">                
                    <div class="box-body">                    
                            <section class="code-section">
                                <pre class="brush: php;">  
                                // You can directly hide/show various options using the config.php or you can also do in code also
                                $pdocrud = new PDOCrud();
                                $pdocrud->setSettings("pagination", false);
                                $pdocrud->setSettings("searchbox", false);
                                $pdocrud->setSettings("deleteMultipleBtn", false);
                                $pdocrud->setSettings("recordsPerPageDropdown", false);
                                $pdocrud->setSettings("recordsPerPageDropdown", false);
                                $pdocrud->setSettings("totalRecordsInfo", false);
                                $pdocrud->setSettings("addbtn", false);
                                $pdocrud->setSettings("editbtn", false);
                                $pdocrud->setSettings("viewbtn", false);
                                $pdocrud->setSettings("delbtn", false);
                                $pdocrud->setSettings("actionbtn", false);
                                $pdocrud->setSettings("checkboxCol", false);
                                $pdocrud->setSettings("numberCol", false);
                                $pdocrud->setSettings("printBtn", false);
                                $pdocrud->setSettings("pdfBtn", false);
                                $pdocrud->setSettings("csvBtn", false);
                                $pdocrud->setSettings("excelBtn", false);
                                echo $pdocrud->dbTable("orders")->render();
                                </pre>
                            </section>  
                    </div>
                </div>  
           
            <section class="content">
                <?php
                $pdocrud = new PDOCrud();
                $pdocrud->setSettings("pagination", false);
                $pdocrud->setSettings("searchbox", false);
                $pdocrud->setSettings("deleteMultipleBtn", false);
                $pdocrud->setSettings("recordsPerPageDropdown", false);
                $pdocrud->setSettings("recordsPerPageDropdown", false);
                $pdocrud->setSettings("totalRecordsInfo", false);
                $pdocrud->setSettings("addbtn", false);
                $pdocrud->setSettings("editbtn", false);
                $pdocrud->setSettings("viewbtn", false);
                $pdocrud->setSettings("delbtn", false);
                $pdocrud->setSettings("actionbtn", false);
                $pdocrud->setSettings("checkboxCol", false);
                $pdocrud->setSettings("numberCol", false);
                $pdocrud->setSettings("printBtn", false);
                $pdocrud->setSettings("pdfBtn", false);
                $pdocrud->setSettings("csvBtn", false);
                $pdocrud->setSettings("excelBtn", false);
                echo $pdocrud->dbTable("orders")->render();
               ?>
            </section>
        </div>
    </div>
    <?php include 'includes/footer.php'; ?>
</body>
</html>