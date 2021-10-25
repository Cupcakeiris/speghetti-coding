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
                    Field type settings
                    <small>Change type of fields in PDOCrud</small>
                </h1>
                <p>
                    By deafult, PDOCrud generates the field type based on the data type of the column and name of column in the database table. You can also change
                    the type of field as required using the fieldTypes function.
                </p>
                <p><a href="field-type-new">Click here to view default field type generated based on the data type of the column</a></p>
            </section>

            <!-- Default box -->
            <div class="box">                
                <div class="box-body">                    
                    <div class="box-function-ref">
                        <section class="code-section">
                            <pre class="brush: php;">  
                            $pdocrud = new PDOCrud();
                            $pdocrud->fieldTypes("about_yourself", "textarea");//change about_yourself 'textarea' to input type text
                            $pdocrud->fieldTypes("educational_status", "textarea"); // change educational_status 'input text' to textarea
                            $pdocrud->fieldTypes("gender", "radio");//change gender to radio button
                            $pdocrud->fieldDataBinding("gender", array("male","female"), "", "","array");//add data for radio button
                            $pdocrud->fieldTypes("hobbies", "checkbox");//change hobbies to checkbox button
                            $pdocrud->fieldDataBinding("hobbies", array("Dance","Art","Games"), "", "","array");//add data for checkbox button
                            $pdocrud->fieldTypes("state", "select");//change state to select dropdown
                            $pdocrud->fieldDataBinding("state", array("Andhra Pradesh","Bihar","Patna","Gujarat","Madhya Pradesh"), "", "","array");//add data using array in select dropdown
                            $pdocrud->fieldTypes("country", "multiselect");//change country to multiselect dropdown
                            $pdocrud->fieldDataBinding("country", array("India","Brazil","UK","Pakistan"), "", "","array");//add data using array in multiselect
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
                        <h3 class="box-title">Change field type using PDOCrud</h3>
                        <div class="box-tools pull-right">
                            <button class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
                        </div>
                    </div>
                    <div class="box-body">
                        <div class="box-body table-responsive no-padding">
                            <?php
                                    $pdocrud = new PDOCrud();
                                    $pdocrud->fieldTypes("gender", "radio");//change gender to radio button
                                    $pdocrud->fieldDataBinding("gender", array("male","female"), "", "","array");//add data for radio button
                                    $pdocrud->fieldTypes("hobbies", "checkbox");//change hobbies to checkbox button
                                    $pdocrud->fieldDataBinding("hobbies", array("Dance","Art","Games"), "", "","array");//add data for checkbox button
                                    $pdocrud->fieldTypes("state", "select");//change state to select dropdown
                                    $pdocrud->fieldDataBinding("state", array("Andhra Pradesh","Bihar","Patna","Gujarat","Madhya Pradesh"), "", "","array");//add data using array in select dropdown
                                    $pdocrud->fieldTypes("country", "multiselect");//change country to multiselect dropdown
                                    $pdocrud->fieldDataBinding("country", array("India","Brazil","UK","Pakistan"), "", "","array");//add data using array in multiselect
                                    $pdocrud->fieldTypes("educational_status", "textarea"); // change educational_status 'input text' to textarea
                                    $pdocrud->fieldTypes("about_yourself", "textarea");//change about_yourself from input type text to textarea
                                    //$pdocrud->fieldTypes("company_name", "slider");
                                    //$pdocrud->fieldAttributes("company_name", array("data-range"=>"true","data-min"=>0,"data-max"=>100));// any attribute name and it's value
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