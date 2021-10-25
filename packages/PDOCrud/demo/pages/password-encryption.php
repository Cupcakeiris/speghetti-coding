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
                    Password Encryption
                    <small>Define password encryption method (Added in v 3.6) </small>
                </h1>
                <p>You can define the encryption method to be used for password type fields before data insert or select. Previously you need to 
                add callback function for this feature but now you can achieve same using this function also. Supported methods are base64_encode,
                md5 and sha1 with no extra parameters. If you need other way to encrypt, you can use the callback function.</p>
            </section>

            <!-- Default box -->
            <div class="box">                
                <div class="box-body">                    
                    <div class="box-function-ref">
                        <section class="code-section">
                            <pre class="brush: php;">  
                                $pdocrud = new PDOCrud();
                                $pdocrud->formFields(array("user_name","password"));
                                 /**
                                * Sets the type of field
                                * @param   string  $fieldName                             field name for types needs to be set
                                * @param   string  $type                                  Field type 
                                * @param   string  $parameters                            Field parameters
                                * return   object                                         Object of class
                                */
                                $pdocrud->fieldTypes("password", "password", array("encryption"=>"md5"));
                                echo $pdocrud->dbTable("users")->render("insertform");
                            </pre>
                        </section>  
                    </div>
                </div>
            </div>  

            <!-- Main content -->
            <section class="content">
                <div class="box">
                    <div class="box-header with-border">
                        <h3 class="box-title">password encryption using PDOCrud</h3>
                        <div class="box-tools pull-right">
                            <button class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
                        </div>
                    </div>
                    <div class="box-body">
                        <div class="box-body table-responsive no-padding">
                            <?php
                            $pdocrud = new PDOCrud();
                            $pdocrud->formFields(array("user_name","password"));
                             /**
                            * Sets the type of field
                            * @param   string  $fieldName                             field name for types needs to be set
                            * @param   string  $type                                  Field type 
                            * @param   string  $parameters                            Field parameters
                            * return   object                                         Object of class
                            */
                            $pdocrud->fieldTypes("password", "password", array("encryption"=>"md5"));
                            echo $pdocrud->dbTable("users")->render("insertform");
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