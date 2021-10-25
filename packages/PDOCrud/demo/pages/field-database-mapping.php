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
                   Database field mapping with static field
                    <small>add static field with value and map it to database field (Added in v 3.1)</small>
                </h1>
                <p> Many times you want to insert some static fixed value in database field along with the other field during database insert
                    operation for example, you want to save logged in user id in the database table (saved in session etc)
                    along with other fields that will be filled by user. User Id needs not to be changed by user and you want to save it's value
                    so you can use this function to add static field value that will be saved in database. 
                    Please note that same thing can be done using the callback function also.  you can show/hide the field like other static field and it can be
                    viewed using the view source. So if it sensitive information than it will be better to use callback function.
            </section>

            <!-- Default box -->
            <div class="box">                
                <div class="box-body">                    
                    <div class="box-function-ref">
                        <section class="code-section">
                            <pre class="brush: php;">  
                                $pdocrud = new PDOCrud();
                                // It uses same function formStaticFields that is used to add static fields
                                //first parameter is name of database field to be mapped, 2nd parameter is field type, 3rd parameter is value to be set, 4th parameter needs to be set "db"
                                $pdocrud->formStaticFields("customer_id_field", "hidden", array("33"),"db", "customer_id"); //add hidden field
                                echo $pdocrud->dbTable("ordertable")->render("insertform");
                            </pre>
                        </section>  
                    </div>
                </div>
            </div>  

            <!-- Main content -->
            <section class="content">
                <div class="box">
                    <div class="box-header with-border">
                        <h3 class="box-title">Database field mapping using PDOCrud</h3>
                        <div class="box-tools pull-right">
                            <button class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
                        </div>
                    </div>
                    <div class="box-body">
                        <div class="box-body table-responsive no-padding">
                            <?php
                                $pdocrud = new PDOCrud();
                                $pdocrud->formRemoveFields(array("customer_id"));
                                $pdocrud->formStaticFields("customer_id_field", "hidden", array("33"),"db", "customer_id"); //add hidden field
                                echo $pdocrud->dbTable("ordertable")->render("insertform");
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