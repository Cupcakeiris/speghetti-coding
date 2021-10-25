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
                    New File uploading control
                    <small>file/image uploading using PDOCrud (added in version 2.5) </small>
                </h1>
                <p> This file control is modified version of default file control that allows you to add/remove files. It also helps to check files 
                upload status in edit/update operation.</p>
            </section>

            <!-- Default box -->
            <div class="box">                
                <div class="box-body">                    
                    <div class="box-function-ref">
                        <section class="code-section">
                            <pre class="brush: php;">  
                                    $pdocrud = new PDOCrud();
                                    $pdocrud->fieldTypes("user_image", "FILE_NEW");//change type to image
                                    $pdocrud->formFields(array("username","user_image"));
                                    echo $pdocrud->dbTable("jm_users")->render();
                            </pre>
                        </section>  
                    </div>
                </div>
            </div>  

            <!-- Main content -->
            <section class="content">
                <div class="box">
                    <div class="box-header with-border">
                        <h3 class="box-title">file uploading using PDOCrud</h3>
                        <div class="box-tools pull-right">
                            <button class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
                        </div>
                    </div>
                    <div class="box-body">
                        <div class="box-body table-responsive no-padding">
                            Demo is disabled due to security reason
                            <?php
//                            $pdocrud = new PDOCrud();
//                            $pdocrud->fieldTypes("user_image", "FILE_NEW");//change type to image
//                            $pdocrud->formFields(array("username","user_image"));
//                            echo $pdocrud->dbTable("jm_users")->render();
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