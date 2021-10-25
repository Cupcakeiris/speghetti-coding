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
                    Default Field types
                    <small>Default field type generated based on data type/name of column</small>
                </h1>
                <p>
                    PDOCrud automatically generates the type of field based on the data type/name of the column of table. For example, if your database column is 
                    of type integer then it will automatically generate the field as type numeric. 
                </p>
                <p> Apart from field type, PDOCrud also takes name into account for example if you have column name "email" in your table and data type defined is 
                varchar then also it will convert field to type email. Ofcourse, you can override the type of field using the fieldTypes function. </p>
            </section>

            <!-- Default box -->
            <div class="box">                
                <div class="box-body">                    
                    <div class="box-function-ref">
                        <section class="code-section">
                            <pre class="brush: php;">  
                            $pdocrud = new PDOCrud();
                            //You can enable these settings directly from config
                            $pdocrud->setSettings("enumToSelect", true);
                            $pdocrud->setSettings("setToSelect", true);
                            echo $pdocrud->dbTable("field_types")->render("insertform");
                            </pre>
                        </section>  
                    </div>
                </div>
            </div>  

            <!-- Main content -->
            <section class="content">
                <div class="box">
                    <div class="box-header with-border">
                        <h3 class="box-title">Default field type using PDOCrud</h3>
                        <div class="box-tools pull-right">
                            <button class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
                        </div>
                    </div>
                    <div class="box-body">
                        <div class="box-body table-responsive no-padding">
                            <?php
                                    $pdocrud = new PDOCrud();
                                    //You can enable these settings directly from config
                                    $pdocrud->setSettings("enumToSelect", true);
                                    $pdocrud->setSettings("setToSelect", true);
                                    echo $pdocrud->dbTable("field_types")->render("insertform");
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