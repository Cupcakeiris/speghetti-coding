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
                   Javascript triggers
                    <small>Using javascript based triggers </small>
                </h1>
                <p>
                   Javascript triggers function can be used easily. You just need to add the required event and associated data in function
                   and you can use that as per your requirement. It will not return the data but you can use the data to perform required operation.
                   
                </p>
            </section>

            <!-- Default box -->
            <div class="box">                
                <div class="box-body">                    
                    <div class="box-function-ref">
                        <section class="code-section">
                            <pre class="brush: php;">  
                                     $pdocrud = new PDOCrud();
                                     
                                    echo $pdocrud->dbTable("orders")->render();
                            </pre>
                        </section>  
                    </div>
                </div>
            </div>  

            <!-- Main content -->
            <section class="content">
                <div class="box">
                    <div class="box-header with-border">
                        <h3 class="box-title">Formula based field content formatting </h3>
                        <div class="box-tools pull-right">
                            <button class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
                        </div>
                    </div>
                    <div class="box-body">
                        <div class="box-body table-responsive no-padding">
                            <?php
                                    $pdocrud = new PDOCrud();
                                    echo $pdocrud->dbTable("orders")->render();
                            ?>
                        </div><!-- /.box-body -->
                        <script type="text/javascript">
                            jQuery(document).ready(function () {
                               jQuery(document).on("pdocrud_before_ajax_action",function(event,obj,data){
                                   console.log(obj);
                                   console.log(data);
                                });
                            });

                        </script>
                    </div>
                </div>
            </section><!-- /.content -->
        </div><!-- /.content-wrapper -->
    </div><!-- ./wrapper -->
    <?php include 'includes/footer.php'; ?>
</body>
</html>