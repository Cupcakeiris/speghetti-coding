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
                    Trigger with button switch  
                    <small>Trigger to save values in other tables of database on button click</small>
                </h1>
                <p>You can use button switch with trigger to save values in other tables of database.</p>
                <p>
                    Button Switch : You can add extra action buttons to perform many operations like switch, url redirection etc.
                    Below are example of how to add url action button and switch. URL action is for redirecting 
                </p>
                <p>
                    to another website with some value and switch can be used for on/off operation (like approve/disapprove, publish/unpublish).
                    Trigger: Many times, you want to perform insert/update/delete operation in other table than main table also. For example, 
                    after entering employee leave date in "leaves" table, you might want to update total leaves taken by that employee in employee table also.
                    One way is to do this is using the callback function, but you have to write quite a lines of code there.
                    Now same thing can be achieved using the setTriggerOperation() function.
                    You can specify tablename, column data, where data, type of operation and event to perform this operation.


                </p>
             </section>    
                <!-- Default box -->
                <div class="box">                
                    <div class="box-body">                    
                            <section class="code-section">
                                <pre class="brush: php;">  
                                $pdocrud = new PDOCrud();
                                $pdocrud->setTriggerOperation("student", array("login_status" => array("type" => "fixed", "val" => 1)),array(),
                                        "insert", "after_btn_switch_update");
                                $pdocrud->crudTableCol(array("first_name","last_name","no_of_adult","no_of_child","booking_amount","booking_status"));
                                $action = array("1"=>"0","0"=>"1");//action to be performed, like when value is 1 set it to 0
                                $text = array("1" => '<i class="fa fa-arrow-down" aria-hidden="true"></i>',"0"=>'<i class="fa fa-arrow-up" aria-hidden="true"></i>');
                                $attr = array("title"=>"Switch Button");
                                $pdocrud->enqueueBtnActions("btnswitch", $action, "btnswitch",$text,"booking_status", $attr);
                                echo $pdocrud->dbTable("bookroom")->render
                                </pre>
                            </section>  
                    </div>
                </div>  
           
            <section class="content">
                <?php
                $pdocrud = new PDOCrud();
                $triggerdata = array("name" => array("type" => "fixed", "val" => "Test"),"description" => array("type" => "fixed", "val" => "test description"));
                $pdocrud->setTriggerOperation("book", $triggerdata,array(),
                        "insert", "after_btn_switch_update");
                $pdocrud->crudTableCol(array("first_name","last_name","no_of_adult","no_of_child","booking_amount","booking_status"));
                $action = array("1"=>"0","0"=>"1");//action to be performed, like when value is 1 set it to 0
                $text = array("1" => '<i class="fa fa-arrow-down" aria-hidden="true"></i>',"0"=>'<i class="fa fa-arrow-up" aria-hidden="true"></i>');
                $attr = array("title"=>"Switch Button");
                $pdocrud->enqueueBtnActions("btnswitch", $action, "btnswitch",$text,"booking_status", $attr);
                echo $pdocrud->dbTable("bookroom")->render();
               ?>
            </section>
        </div>
    </div>
    <?php include 'includes/footer.php'; ?>
</body>
</html>