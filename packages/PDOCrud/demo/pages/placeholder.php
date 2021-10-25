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
                    Placeholder  
                    <small>Default placeholder on load (Added in v 3.6)</small>
                </h1>
                <p> You can enable the placeholder settings in config to show the default placeholder for input elements. By default, placeholder
                will have save value as the label of field. You can also set the particular placeholder value.</p>
             </section>    
                <!-- Default box -->
                <div class="box">                
                    <div class="box-body">                    
                        <section class="code-section">
                            <pre class="brush: php;">  
                                $pdocrud = new PDOCrud();
                                // This will show placeholder for all input type text elements, value of placeholder will be same 
                                // as the lable shown
                                $pdocrud->setSettings("placeholder", true);
                                // optional: change the value of particular field (This function is already available before)
                                $pdocrud->fieldAttributes("order_status", array("placeholder"=>"status of order"));//add placeholder attribute
                                echo $pdocrud->dbTable("orders")->render("INSERTFORM");
                            </pre>
                        </section>  
                    </div>
                </div>  
           
            <section class="content">
                <?php
                $pdocrud = new PDOCrud();
                // This will show placeholder for all input type text elements, value of placeholder will be same 
                // as the lable shown
                $pdocrud->setSettings("placeholder", true);
                // optional: change the value of particular field
                $pdocrud->fieldAttributes("order_status", array("placeholder"=>"status of order"));//add placeholder attribute
                echo $pdocrud->dbTable("orders")->render("INSERTFORM");
                ?>
            </section>
        </div>
    </div>
    <?php include 'includes/footer.php'; ?>
</body>
</html>