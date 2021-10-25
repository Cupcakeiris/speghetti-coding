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
                    Set Field  
                    <small>Auto convert "set" column type to multi select dropdown (Added in v 4.0)</small>
                </h1>
                <p>
                    Set field will be automatically converted to multi select dropdown. You need to enable setToSelect = true settings
                    to make it appear as dropdown.
                </p>
             </section>    
                <!-- Default box -->
                <div class="box">                
                    <div class="box-body">                    
                            <section class="code-section">
                                <pre class="brush: php;">  
                                $pdocrud = new PDOCrud();
                                $pdocrud->setSettings("setToSelect", true);//this setting can be done directly in config file.
                                echo $pdocrud->dbTable("product_colors")->render("insertform");
                                </pre>
                            </section>  
                    </div>
                </div>  
           
            <section class="content">
                <?php
                $pdocrud = new PDOCrud();
                $pdocrud->setSettings("setToSelect", true);//this setting can be done directly in config file.
                echo $pdocrud->dbTable("product_colors")->render("insertform");
                ?>
            </section>
        </div>
    </div>
    <?php include 'includes/footer.php'; ?>
</body>
</html>