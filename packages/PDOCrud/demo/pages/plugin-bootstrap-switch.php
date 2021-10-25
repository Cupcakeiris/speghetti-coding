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
                    Plugin bootstrap switch master example
                </h1>
                <p> Convert any input type checkbox field to switch(on and off) field. </p>
            </section>

            <!-- Default box -->
            <div class="box">                
                <div class="box-body">                    
                    <div class="box-function-ref">
                        <section class="code-section">
                            <pre class="brush: php;">  
                                $pdocrud = new PDOCrud();
                                $pdocrud->formFields(array("membership_categories"));
                                $pdocrud->fieldTypes("membership_categories", "checkbox");//change membership_categories to checkbox button
                                $pdocrud->fieldDataBinding("membership_categories", array("Monthly"=>"Monthly","Yearly"=>"Yearly","Lifetime"=>"Lifetime"), "", "","array");//add data for checkbox button
                                $pdocrud->addPlugin("bootstrap-switch-master");//to add plugin      
                                echo $pdocrud->dbTable("library_membership")->render();
                                echo $pdocrud->loadPluginJsCode("bootstrap-switch-master",".pdocrud-checkbox");//to add plugin call on .pdocrud-checkbox class
                            </pre>
                        </section>  
                    </div>
                </div>
            </div>  

            <!-- Main content -->
            <section class="content">
                <div class="box">
                    <div class="box-header with-border">
                        <h3 class="box-title">Plugin bootstrap switch master example - PDOCrud</h3>
                        <div class="box-tools pull-right">
                            <button class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
                        </div>
                    </div>
                    <div class="box-body">
                        <div class="box-body table-responsive no-padding">
                            <?php
                            $pdocrud = new PDOCrud();
                            $pdocrud->formFields(array("full_name","gender","email","membership_categories"));
                            $pdocrud->crudTableCol(array("full_name","gender","email","membership_categories"));
                            $pdocrud->fieldTypes("membership_categories", "checkbox");//change membership_categories to checkbox button
                            $pdocrud->fieldDataBinding("membership_categories", array("Monthly"=>"Monthly","Yearly"=>"Yearly","Lifetime"=>"Lifetime"), "", "","array");//add data for checkbox button
                            $pdocrud->addPlugin("bootstrap-switch-master");//to add plugin      
                            $pdocrud->fieldNotMandatory("membership_categories");
                            echo $pdocrud->dbTable("library_membership")->render();
                            echo $pdocrud->loadPluginJsCode("bootstrap-switch-master",".pdocrud-checkbox");//to add plugin call on .pdocrud-checkbox class
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