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
                    <small>Pure Bootstrap - added in version 3.0</small>
                </h1>
                <p> You can now work with pure bootstrap theme also. </b>
                </p>
             </section>    
                <!-- Default box -->
                <div class="box">                
                    <div class="box-body">                    
                            <section class="code-section">
                                <pre class="brush: php;">  
                                // You need to set template name and sking name 'pure' in settings page
                                // It can be done directly in config page also      
                                $pdocrud = new PDOCrud(false, "pure", "pure");// or you can set template name and skin name as pure in constructor.
                                echo $pdocrud->dbTable("orders")->render();
                                </pre>
                            </section>  
                    </div>
                </div>  
           
            <section class="content">
                <?php
                $pdocrud = new PDOCrud(false, "pure", "pure");
                echo $pdocrud->dbTable("orders")->render();
                ?>
            </section>
        </div>
    </div>
    <?php include 'includes/footer.php'; ?>
</body>
</html>