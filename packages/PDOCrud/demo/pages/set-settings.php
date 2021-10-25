<?php include '../../script/pdocrud.php'; ?>
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
                    Settings
                </h1>
            </section>

            <!-- Default box -->
            <div class="box">                
                <div class="box-body">                    
                    <div class="box-function-ref">
                        <section class="code-section">
                            <pre class="brush: php;">  
                            $config["hideLable"] = true; // Set "hideLable" to "true" in config.php to hide all labels in all forms  
                            $config["loadJsPlugins"] = array("chosen"); // Load plugins initially (list of plugins available) in config.php
                            $config["formtype"] = "singlestep"; // By default single step form in config.php
                            $config["displayErrors"] = true; // Display errors directly in config.php
                            $config["submissionType"] = "ajax"; // Submit whether using ajax or using simple post in config.php
                            $config["jsvalidation"] = "bootstrap_validator"; // Enable js validation in config.php
                            $config["phpvalidation"] = true; // Enable php validation in config.php
                            $config["loadJs"] = array("jquery.min.js","jquery-ui.min.js"); // Load js initially (this js needs to be present in script/js fodler)                    
                            $config["loadCss"] = array("style.css","jquery-ui.css"); // Load css initially (this css needs to be present in script/css fodler)
                            </pre>
                        </section>  
                    </div>
                </div>
            </div>  

            <!-- Main content -->
            
        </div><!-- /.content-wrapper -->
    </div><!-- ./wrapper -->
    <?php include 'includes/footer.php'; ?>
</body>
</html>