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
                    Enum Field  
                    <small>Auto convert enum field to select dropdown (Added in v 3.1)</small>
                </h1>
                <p>
                    Enum field will be automatically converted to dropdown. You need to enable enumToSelect = true to make it appear as dropdown.
                </p>
             </section>    
                <!-- Default box -->
                <div class="box">                
                    <div class="box-body">                    
                            <section class="code-section">
                                <pre class="brush: php;">  
                                $pdocrud = new PDOCrud();
                                $pdocrud->setSettings("enumToSelect", true);//this setting can be done directly in config file.
                                echo $pdocrud->dbTable("productsizes")->render("insertform");
                                </pre>
                            </section>  
                    </div>
                </div>  
           
            <section class="content">
                <?php
                $pdocrud = new PDOCrud();
                $pdocrud->setSettings("enumToSelect", true);//this setting can be done directly in config file also.
                echo $pdocrud->dbTable("productsizes")->render("insertform");
                ?>
            </section>
        </div>
    </div>
    <?php include 'includes/footer.php'; ?>
</body>
</html>