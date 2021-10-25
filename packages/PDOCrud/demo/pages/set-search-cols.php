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
                    Set Search Columns  
                    <small>Option to set search columns instead of all columns (Added in v 3.5.2) </small>
                </h1>
                <p> You can set which search columns to be shown instead of showing all columns of table in search box.
                </p>
            </section>    
            <!-- Default box -->
            <div class="box">                
                <div class="box-body">                    
                    <section class="code-section">
                        <pre class="brush: php;">  
                                $pdocrud = new PDOCrud();
                                $pdocrud->setSearchCols(array("id","first_name"));
                                echo $pdocrud->dbTable("employee")->render();
                        </pre>
                    </section>  
                </div>
            </div>  
            <!-- Code box -->
            <section class="content">
                <?php
                $pdocrud = new PDOCrud();
                $pdocrud->setSearchCols(array("id","first_name"));
                echo $pdocrud->dbTable("employee")->render();
                ?>
            </section>
        </div>
    </div>
    <?php include 'includes/footer.php'; ?>
</body>
</html>