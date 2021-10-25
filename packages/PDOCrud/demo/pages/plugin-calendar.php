<?php include '../../script/pdocrud.php'; ?>
<?php include 'includes/header.php'; ?>
<script src="http://localhost/pdocrud/script/plugins/fullcalendar/js/moment/moment.min.js" type="text/javascript"></script>
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
                    Plugin calendar example - (added in v 2.3)
                    <p>This example also demonstrate how to use plugin that are applied to static html elements like div/span etc instead of
                    form elements</p>
                </h1>
            </section>

            <!-- Default box -->
            <div class="box">                
                <div class="box-body">                    
                    <div class="box-function-ref">
                        <section class="code-section">
                            <pre class="brush: php;">  
                            $pdocrud = new PDOCrud();
                            $pdocrud->addPlugin("fullcalendar");
                            $pdomodel = $pdocrud->getPDOModelObj();
                            $data["events"] = $pdomodel->executeQuery("select event_id as id, event_title as title, event_date_and_time as start,event_end_date_time as end from eventtable");
                            $html_data = array("<div id='fullcalendar'></div>");
                            echo $pdocrud->render("HTML", $html_data);
                            echo $pdocrud->loadPluginJsCode("fullcalendar","#fullcalendar",$data);//to add plugin call on input[type=text] elements
                            </pre>
                        </section>  
                    </div>
                </div>
            </div>  

            <!-- Main content -->
            <section class="content">
                <div class="box">
                    <div class="box-header with-border">
                        <h3 class="box-title"> Plugin calendar example - PDOCrud</h3>
                        <div class="box-tools pull-right">
                            <button class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
                        </div>
                    </div>
                    <div class="box-body">
                        <div class="box-body table-responsive no-padding">
                            <?php
                            $pdocrud = new PDOCrud();
                            $pdocrud->addPlugin("fullcalendar");
                            $pdomodel = $pdocrud->getPDOModelObj();
                            $data["events"] = $pdomodel->executeQuery("select event_id as id, event_title as title, event_date_and_time as start,event_end_date_time as end from eventtable");
                            $html_data = array("<div id='calendar'></div>");
                            echo $pdocrud->render("HTML", $html_data);
                            echo $pdocrud->loadPluginJsCode("fullcalendar","#calendar",$data);//to add plugin call on input[type=text] elements
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