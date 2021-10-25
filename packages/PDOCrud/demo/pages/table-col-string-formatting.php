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
                    String Formatting of CRUD table column
                    <small>Format crud table column using string function</small>
                </h1>
                <p>
                    You can format table column using various string functions. For example you can make any table column content to uppercase, first letter uppercase, lowercase
                    or you can add prefix, suffix etc. 
                </p>
            </section>

            <!-- Default box -->
            <div class="box">                
                <div class="box-body">                    
                    <div class="box-function-ref">
                        <section class="code-section">
                            <pre class="brush: php;">  
                                    $pdocrud = new PDOCrud();
                                    //Add prefix (e.g. Mr.) in first name
                                    $pdocrud->tableColFormatting("first_name", "string",array("type" =>"prefix","str"=>"Mr. "));
                                    //make firstname upper case
                                    $pdocrud->tableColFormatting("first_name", "string",array("type" =>"uppercase"));
                                     //make lastname lower case
                                    $pdocrud->tableColFormatting("last_name", "string",array("type" =>"lowercase"));
                                     //Add suffix
                                    $pdocrud->tableColFormatting("Address", "string",array("type" =>"suffix","str"=>" <i class=\"fa fa-map-marker\" aria-hidden=\"true\"></i>"));

                                echo $pdocrud->dbTable("employee")->render();
                            </pre>
                        </section>  
                    </div>
                </div>
            </div>  

            <!-- Main content -->
            <section class="content">
                <div class="box">
                    <div class="box-header with-border">
                        <h3 class="box-title">String based table content formatting </h3>
                        <div class="box-tools pull-right">
                            <button class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
                        </div>
                    </div>
                    <div class="box-body">
                        <div class="box-body table-responsive no-padding">
                            <?php
                                    $pdocrud = new PDOCrud();
                                    //Add prefix (e.g. Mr.) in first name
                                    $pdocrud->tableColFormatting("first_name", "string",array("type" =>"prefix","str"=>"Mr. "));
                                    //make firstname upper case
                                    $pdocrud->tableColFormatting("first_name", "string",array("type" =>"uppercase"));
                                     //make lastname lower case
                                    $pdocrud->tableColFormatting("last_name", "string",array("type" =>"lowercase"));
                                     //Add suffix
                                    $pdocrud->tableColFormatting("Address", "string",array("type" =>"suffix","str"=>" <i class=\"fa fa-map-marker\" aria-hidden=\"true\"></i>"));
                                    
                                    echo $pdocrud->dbTable("employee")->render();
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