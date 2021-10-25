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
                    Callback functions
                    <small>Add callback function in PDOCrud</small>
                </h1>
            </section>

            <!-- Default box -->
            <div class="box">                
                <div class="box-body">                    
                    <div class="box-function-ref">
                        <section class="code-section">
                            <pre class="brush: php;">  
                                $pdocrud = new PDOCrud();
                                //Add callback function "beforeloginCallback" on before_select event
                                $pdocrud->addCallback("before_select", "beforeloginCallback");
                                echo $pdocrud->dbTable("users")->render();

                                // Available events are 

                                //This 'beforeloginCallback' function must be added on script/pdocrud.php file
                                // e.g. before data submission encrypt user password
                                function beforeloginCallback($data, $this) {
                                    $data["data"]["user_pass"]= md5($data["data"]["user_pass"]);
                                    return $data;
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
                        <h3 class="box-title">Callback function in PDOCrud</h3>
                        <div class="box-tools pull-right">
                            <button class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
                        </div>
                    </div>
                    <div class="box-body">
                        <div class="box-body table-responsive no-padding">
                            <?php
                             $pdocrud = new PDOCrud();
                                //Add callback function "beforeloginCallback" on before_select event
                                $pdocrud->addCallback("before_select", "beforeloginCallback");
                                echo $pdocrud->dbTable("users")->render();

                                //This 'beforeloginCallback' function must be added on script/pdocrud.php file
                                // I have added for demo purpose in commented form, uncomment that to test it.
                                
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