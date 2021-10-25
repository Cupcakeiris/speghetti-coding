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
                    Load dependent data
                    <small>change data in another field on change of some field in PDOCrud</small>
                </h1>
            </section>

            <!-- Default box -->
            <div class="box">                
                <div class="box-body">                    
                    <div class="box-function-ref">
                        <section class="code-section">
                            <pre class="brush: php;">  
                            $pdocrud = new PDOCrud();
                            $pdocrud->fieldTypes("billing_country", "select"); //change type to select
                            $pdocrud->fieldDataBinding("billing_country", "country", "country_id", "country_name", "db"); //load select data
                            $pdocrud->fieldTypes("billing_state", "select"); //change type to select
                            $pdocrud->fieldDataBinding("billing_state", "state", "state_id", "state_name", "db"); //load select data
                            $pdocrud->fieldDependent("billing_state", "billing_country", "country_id"); //now on change of country it will change state
                            $pdocrud->fieldDisplayOrder(array("first_name", "last_name", "billing_country", "billing_state"));//change display order
                            echo $pdocrud->dbTable("ordertable")->render();   
                            </pre>
                        </section>  
                    </div>
                </div>
            </div>  

            <!-- Main content -->
            <section class="content">
                <div class="box">
                    <div class="box-header with-border">
                        <h3 class="box-title">Populate data in another field on change on data in some field up using PDOCrud</h3>
                        <div class="box-tools pull-right">
                            <button class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
                        </div>
                    </div>
                    <div class="box-body">
                        <div class="box-body table-responsive no-padding">
                            <?php
                            $pdocrud = new PDOCrud();
                            $pdocrud->fieldTypes("billing_country", "select"); //change type to select
                            $pdocrud->fieldDataBinding("billing_country", "country", "country_id", "country_name", "db"); //load select data
                            $pdocrud->fieldTypes("billing_state", "select"); //change type to select
                            $pdocrud->fieldDataBinding("billing_state", "state", "state_id", "state_name", "db"); //load select data
                            $pdocrud->fieldDependent("billing_state", "billing_country", "country_id"); //now on change of country it will change state
                            $pdocrud->fieldDisplayOrder(array("first_name", "last_name", "billing_country", "billing_state"));
                            $pdocrud->formfields(array("first_name", "last_name", "billing_country", "billing_state"));
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