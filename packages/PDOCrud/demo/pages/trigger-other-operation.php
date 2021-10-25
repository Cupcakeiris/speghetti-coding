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
                    Trigger other operation   
                    <small>Perform other operation like Insert/Update data in other table directly  (added in version 2.4) </small>
                </h1>
                <p>
                    Many times, you want to perform insert/update/delete operation in other table than main table also. For example,
                    after entering employee leave date in "leaves" table, you might want to update total leaves taken by that
                    employee in employee table also. One way is to do this is using the callback function, but you have to write
                    quite a lines of code there. Now same thing can be achieved using the setTriggerOperation() function. You
                    can specify tablename, column data, where data, type of operation and event to perform this operation.
                </p>
             </section>    
                <!-- Default box -->
                <div class="box">                
                    <div class="box-body">                    
                            <section class="code-section">
                                <pre class="brush: php;">  
                                     $pdocrud = new PDOCrud();
                $pdocrud->setTriggerOperation("student", array("total_attendance" => array("type" => "fixed", "val" => 10)), 
                         array(), "insert", "after_insert");
//                $pdocrud->setTriggerOperation("student", array("total_attendance" => array("type" => "last_insert_id")), 
//                          array(), "insert", "after_insert");
//                $pdocrud->setTriggerOperation("student", array("total_attendance" => array("type" => "array_data", "val" => "student_id")), 
//                          array(), "insert", "before_insert");
//                $pdocrud->setTriggerOperation("student", array("total_attendance" => array("type" => "fixed", "val" => 12)), 
//                          array("student_id"=> array("type" => "array_data", "val" => "student_id")), "update", "after_update");
                echo $pdocrud->dbTable("attendance")->render();
                                </pre>
                            </section>  
                    </div>
                </div>  
           
            <section class="content">
                <?php
                $pdocrud = new PDOCrud();
                $pdocrud->setTriggerOperation("student", array("total_attendance" => array("type" => "fixed", "val" => 10)), 
                         array(), "insert", "after_insert");
//                $pdocrud->setTriggerOperation("student", array("total_attendance" => array("type" => "last_insert_id")), 
//                          array(), "insert", "after_insert");
//                $pdocrud->setTriggerOperation("student", array("total_attendance" => array("type" => "array_data", "val" => "student_id")), 
//                          array(), "insert", "before_insert");
//                $pdocrud->setTriggerOperation("student", array("total_attendance" => array("type" => "fixed", "val" => 12)), 
//                          array("student_id"=> array("type" => "array_data", "val" => "student_id")), "update", "after_update");
                echo $pdocrud->dbTable("attendance")->render();
                ?>
            </section>
        </div>
    </div>
    <?php include 'includes/footer.php'; ?>
</body>
</html>