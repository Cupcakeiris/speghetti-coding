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
                   Template css and js files  
                   <small> Whether to load template js and css files or not (Added in version 3.7) </small>
                </h1>
                <p>
                    You can chose whether you want to load the template js and css files or not using the settings 
                    $config["includeTemplateCSS"] = true; and $config["includeTemplateJS"] = true;
                </p>
                <p>It is useful when your theme is already loading the bootstrap css and js files so you don't want to load again.</p>
                <p>Please note that loading other css and js files can also be set in config file e.g jquery.js etc files. </p>
             </section>    
                <!-- Default box -->
                <div class="box">                
                    <div class="box-body">                    
                            <section class="code-section">
                                <pre class="brush: php;">  
                                    $settings["includeTemplateCSS"] = false;
                                    $settings["includeTemplateJS"] = false;
                                    $pdocrud = new PDOCrud(false, "","", $settings);
                                    echo $pdocrud->dbTable("orders")->render();
                                </pre>
                            </section>  
                    </div>
                </div>  
           
            <section class="content">
                <?php
                $settings["includeTemplateCSS"] = false;
                $settings["includeTemplateJS"] = false;
                $pdocrud = new PDOCrud(false, "","", $settings);
                echo $pdocrud->dbTable("orders")->render();
               ?>
            </section>
        </div>
    </div>
    <?php include 'includes/footer.php'; ?>
</body>
</html>