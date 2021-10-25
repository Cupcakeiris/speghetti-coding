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
                    On Hover
                    <small>Show on hover effect (Added in v 4.0)</small>
                </h1>
                <p> On hover effect is particularly useful when you have large number of columns in grid/table. Due to large number of columns, it shows the scroll
                if the data doesn't fit. You need to horizontal scroll to reach to action buttons. Using hover css, you won't need to scroll because on hover, it will show
                the action button directly. We have created a skin named "hover", you will either need to use this skin or you can directly use the css shown below to achieve this effect</p>
            </section>

            <!-- Default box -->
            <div class="box">                
                <div class="box-body">                    
                    <div class="box-function-ref">
                        <section class="code-section">
                            <pre class="brush: php;">  
                                $pdocrud = new PDOCrud();
                                $pdocrud->setSkin("hover");//add this skin to show hover effect
                                echo $pdocrud->dbTable("products")->render();

                                //Or you can add below css in your style file 
                                    .pdocrud-table-container table tr.pdocrud-header-row th{
                                        padding: 9px 15px;    
                                    }
                                    .pdocrud-table tbody tr.pdocrud-data-row{
                                        height: 50px;
                                    }
                                    .pdocrud-table tbody tr.pdocrud-data-row:hover td.pdocrud-row-actions{
                                        position: absolute;
                                        right: 0;
                                        border-left: none;
                                        margin-top: 0;
                                        border-top: 1px solid #000;
                                    }
                                    .pdocrud-table tbody tr.pdocrud-data-row:hover td{
                                        background: #000;
                                        color: #fff;
                                    }
                            </pre>
                        </section>  
                    </div>
                </div>
            </div>  

            <!-- Main content -->
            <section class="content">
                <div class="box">
                    <div class="box-header with-border">
                        <h3 class="box-title">On hover effect using PDOCrud</h3>
                        <div class="box-tools pull-right">
                            <button class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
                        </div>
                    </div>
                    <div class="box-body">
                        <div class="box-body table-responsive no-padding">
                            <?php
                            $pdocrud = new PDOCrud();
                            $pdocrud->setSkin("hover");
                            echo $pdocrud->dbTable("products")->render();
                            ?>
                        </div><!-- /.box-body -->
                    </div>
                </div>
            </section><!-- /.content -->
        </div><!-- /.content-wrapper -->
    </div><!-- ./wrapper -->
    <?php include 'includes/footer.php'; ?>
</body>
</html>