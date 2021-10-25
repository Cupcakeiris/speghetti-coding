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
                    Plugin password strength example
                </h1>
                <p> Adds a password strength bar below the password field indicating the password strength. Please note that it shows only strength 
                of password, it doesn't prevent submission if password is weak.</p>
            </section>

            <!-- Default box -->
            <div class="box">                
                <div class="box-body">                    
                    <div class="box-function-ref">
                        <section class="code-section">
                            <pre class="brush: php;">  
                            $pdocrud = new PDOCrud();
                            $pdocrud->fieldCssClass("password", array("password"));// add css classes to apply plugin later on that css class
                            $pdocrud->addPlugin("bootstrap-pwstrength");//to add plugin      
                            $pdocrud->formFields(array("first_name","last_name","user_name","password"));
                            echo $pdocrud->dbTable("users")->render("insertform");
                            //optional parameters for the bootstrap pwstrength plugin
                            $params["ui"] = array("showProgressBar"=> "true");
                            $params["common"] = array("showVerdictsInsideProgressBar"=> "true");
                            $params["rules"] = array("wordRepetitions"=> "true");
                            
                            echo $pdocrud->loadPluginJsCode("bootstrap-pwstrength",".password",$params);//to add plugin call on class .password elements
                            </pre>
                        </section>  
                    </div>
                </div>
            </div>  

            <!-- Main content -->
            <section class="content">
                <div class="box">
                    <div class="box-header with-border">
                        <h3 class="box-title">Plugin Password Strength example - PDOCrud</h3>
                        <div class="box-tools pull-right">
                            <button class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
                        </div>
                    </div>
                    <div class="box-body">
                        <div class="box-body table-responsive no-padding">
                            <?php
                            $pdocrud = new PDOCrud();
                            $pdocrud->fieldCssClass("password", array("password"));// add css classes to apply plugin later on that css class
                            $pdocrud->addPlugin("bootstrap-pwstrength");//to add plugin      
                            $pdocrud->formFields(array("first_name","last_name","user_name","password"));
                            echo $pdocrud->dbTable("users")->render("insertform");
                            //optional parameters for the bootstrap pwstrength plguin
                            $params["ui"] = array("showProgressBar"=> "true");
                            $params["common"] = array("showVerdictsInsideProgressBar"=> "true");
                            $params["rules"] = array("wordRepetitions"=> "true");
                            
                            echo $pdocrud->loadPluginJsCode("bootstrap-pwstrength",".password",$params);//to add plugin call on class .password elements
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