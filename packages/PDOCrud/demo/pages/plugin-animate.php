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
                    Animation
                </h1>
                <p> Adds animation to fields. You can find list of animation here https://daneden.github.io/animate.css/ </p>
            </section>

            <!-- Default box -->
            <div class="box">                
                <div class="box-body">                    
                    <div class="box-function-ref">
                        <section class="code-section">
                            <pre class="brush: php;">  
                                $pdocrud = new PDOCrud();
                                $pdocrud->addPlugin("animate");//to add plugin animate          
                                echo $pdocrud->dbTable("users")->render("insertform"); // insert form
                                //lets call animate plugin to all input type text, you can specify .class or
                                #id also there.
                                //You can find list of animation here https://daneden.github.io/animate.css/
                                echo $pdocrud->loadPluginJsCode("animate","input[type=text]", array("rubberBand delay-2s infinite"));
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
                            $pdocrud->addPlugin("animate");//to add plugin animate          
                            echo $pdocrud->dbTable("users")->render("insertform"); // insert form
                            //lets call animate plugin to all input type text, you can specify .class or
                            #id also there.
                            //You can find list of animation here https://daneden.github.io/animate.css/
                            echo $pdocrud->loadPluginJsCode("animate","input[type=text]", array("rubberBand delay-2s infinite"));
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