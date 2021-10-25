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
                    Plugin data table example
                    <small>jquery data table plugin (Added in version 2.4)</small>
                </h1>
                
                <p>
                    jQuery based data table plugin is quite useful in term of no. of function it has. With our script, if you want to use
                    the sql and still want search/sorting/pagination etc functions, you can use this plugin. You will have 
                    most of the grid/table functionality using this.
                </p>
            </section>

            <!-- Default box -->
            <div class="box">                
                <div class="box-body">                    
                    <div class="box-function-ref">
                        <section class="code-section">
                            <pre class="brush: php;">  
                            $pdocrud = new PDOCrud();
                            $pdocrud->addPlugin("datatable");//to add plugin          
                            $pdocrud->setQuery("select * from orders"); 
                            echo $pdocrud->render("SQL");
                            echo $pdocrud->loadPluginJsCode("datatable",".pdocrud-table");//to add plugin call on input[type=text] elements
                            </pre>
                        </section>  
                    </div>
                </div>
            </div>  

            <!-- Main content -->
            <section class="content">
                <div class="box">
                    <div class="box-header with-border">
                        <h3 class="box-title"> Plugin data table example - PDOCrud</h3>
                        <div class="box-tools pull-right">
                            <button class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
                        </div>
                    </div>
                    <div class="box-body">
                        <div class="box-body table-responsive no-padding">
                            <?php
                            $pdocrud = new PDOCrud();
                            $pdocrud->addPlugin("datatable");//to add plugin          
                            $pdocrud->setQuery("select * from orders"); 
                            echo $pdocrud->render("SQL");
                            echo $pdocrud->loadPluginJsCode("datatable",".pdocrud-table");//to add plugin call on input[type=text] elements
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