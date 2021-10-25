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
                    Reset Form  
                    <small>Option to reset form value after form submission (Added in v 3.6) </small>
                </h1>
                <p> You can automatically reset the form fields after form submission by specifying settings resetForm = true. You 
                    can pass it in constructor function or set it directly in config file. 
                </p>
            </section>    
            <!-- Default box -->
            <div class="box">                
                <div class="box-body">                    
                    <section class="code-section">
                        <pre class="brush: php;">  
                                //pass reset form true in constructor function or you can set it via config file
                                $pdocrud = new PDOCrud(false, "", "", array("resetForm" => true));
                                echo $pdocrud->dbTable("employee")->render("INSERTFORM");
                        </pre>
                    </section>  
                </div>
            </div>  
            <!-- Code box -->
            <section class="content">
                <?php
                //pass reset form true in constructor function or you can set it via config file
                $pdocrud = new PDOCrud(false, "", "", array("resetForm" => true));
                echo $pdocrud->dbTable("employee")->render("INSERTFORM");
                ?>
            </section>
        </div>
    </div>
    <?php include 'includes/footer.php'; ?>
</body>
</html>