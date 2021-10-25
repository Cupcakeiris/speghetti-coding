<?php require_once '../../script/pdocrud.php'; ?>
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
                    Related Data
                    <small>Display related column value based on relation</small>
                </h1>
                <p> When your main table contains the fields related to other tables then you can use the  related data function to easily get data 
                    from other tables and also display as list in the forms. For example, if you want to display crud for "student" table containing class_id which is related to
                    "class" table (columns class_id, class_name ) then you can easily display class_name instead of class_id using the related data.
                    Also, it converts the field class_id to dropdown with display field text as "class_name" and value saved will be "class_id".
                </p>
                <p>In previous version, this can be done using join between main table and other tables and defining the field type and binding that field using the fielddatabinding 
                function. Now this can be done using a single line. </p>
                <p>Please note that it works on the main table field related to the other tables, it doesn't work on joined table. Also, currently it is supported by Mysql only.
                We will add for other database also in future versions. 
                </p>
            </section>    
            <!-- Default box -->
            <div class="box">                
                <div class="box-body">                    
                    <section class="code-section">
                        <pre class="brush: php;">  
                                $pdocrud = new PDOCrud();
                                $pdocrud->crudTableCol(array("student_id","register_number","first_name","last_name","class_id"));//optional
                               /**
                                * Get related column data as list from other tables
                                * @param   string   $mainTableCol                            Column name of the main table
                                * @param   string   $relTable                                Related table name
                                * @param   mixed    $relTableCol                             Matching related table columns
                                * @param   mixed    $relDisplayCol                           Related table column to be display
                                * @param   array    $where                                   where condition array
                                * @param   array    $orderby                                 Order by condition array
                                * @param   mixed    $fieldType                               Field type to be displayed for that field, default is "select", if empty, then textarea will be shown
                                * return   object                                            Object of class
                                */
                               $pdocrud->relatedData('class_id','class','class_id','class_name');
                               //complete example of the related data function
                               // Please note that this will be applied in the form fields not in the grid
                              // $pdocrud->relatedData('class_id','class','class_id','class_name',array(array("class_id", 1,">=")), array("class_name"));
                               echo $pdocrud->dbTable("student")->render();
                        </pre>
                    </section>  
                </div>
            </div>  
            <!-- Code box -->
            <section class="content">
                <?php
                $pdocrud = new PDOCrud();
                $pdocrud->crudTableCol(array("student_id","register_number","first_name","last_name","class_id"));//optional
                /**
                * Get related column data 
                * @param   string   $mainTableCol                            Column name of the main table
                * @param   string   $relTable                                Related table name
                * @param   mixed    $relTableCol                             Matching related table columns
                * @param   mixed    $relDisplayCol                           Related table column to be display
                * @param   mixed    $fieldType                               Field type to be displayed for that field, default is "select", if empty, then textarea will be shown
                * return   object                                            Object of class
                */
               // $pdocrud->relatedData('class_id','class','class_id','class_name');
                $pdocrud->relatedData('class_id','class','class_id','class_name',array(array("class_id", 1,">=")), array("class_name"));
                echo $pdocrud->dbTable("student")->render();
                ?>
            </section>
        </div>
    </div>
    <?php include 'includes/footer.php'; ?>
</body>
</html>