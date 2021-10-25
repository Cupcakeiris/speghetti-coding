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
                    Pop up Forms  
                    <small>Open Forms on button click</small>
                </h1>
                <p> Apart from crud popup forms, you can also open forms on button click. You need to call formDisplayInPopup function
                    as mentioned below.
                </p>
                
            </section>     
                <!-- Default box -->
                <div class="box">                
                    <div class="box-body">                    
                            <section class="code-section">
                                <pre class="brush: php;">  
                                $pdocrud = new PDOCrud();
                                $pdocrud->formDisplayInPopup("Open Order Details popup","Order Details", true);
                                echo $pdocrud->dbTable("orders")->render("insertform");
                                </pre>
                            </section>  
                    </div>
                </div>  
           
            <section class="content">
                <?php
                $pdocrud = new PDOCrud();
                $pdocrud->formDisplayInPopup("Open Order Details popup","Order Details", true);
                echo $pdocrud->dbTable("orders")->render("insertform");
                ?>
            </section>
        </div>
    </div>
    <?php include 'includes/footer.php'; ?>
</body>
</html>