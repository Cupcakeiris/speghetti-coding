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
                                //Add callback function "beforeInsertCallback" on before_insert event
                                $pdocrud->addCallback("before_insert", "beforeInsertCallback");
                                echo $pdocrud->dbTable("orders")->render("INSERTFORM");

                                //Please note this function will be on the different file (script/pdocrud.php file not here)
                                //example of how to add action function on script/pdocrud.php file
                                function beforeInsertCallback($data, $obj) {  
                                    //lets print the data to understand what it contains
                                    print_r($data);
                                    //Now, let's modify the data - for example we will add prefix on all order no.
                                    $data["orders"]["customer_name"] = "MR. ".$data["orders"]["customer_name"];
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
                                //Add callback function "beforeInsertCallback" on before_insert event
                                $pdocrud->addCallback("before_insert", "beforeInsertCallback");
                                echo $pdocrud->dbTable("orders")->render("INSERTFORM");
                           
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