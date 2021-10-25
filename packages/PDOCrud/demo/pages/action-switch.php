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
                    PDOCrud  
                    <small>Add action switch for columns</small>
                </h1>
                 <p>
                     You can make any column to action switch or url with primary key as query parameter. For example, if you want to change
                     the value from approve to reject or reject to approve, you can use this feature to switch values. Also, if you want
                     to make a column to url with primary key as query paramater then you can also do this using function for example
                     you can make firstname to <a href="http://www.yourwebsite.com/?profile=5">firstname</a>. You can pass extra data attributes
                     in 4th parameter of function.
                </p>
             </section>    
                <!-- Default box -->
                <div class="box">                
                    <div class="box-body">                    
                            <section class="code-section">
                                <pre class="brush: php;">  
                                $pdocrud = new PDOCrud();
                                $pdocrud->crudTableCol(array("first_name","last_name","no_of_adult","no_of_child","booking_amount","booking_status"));

                                //action type switch - on click on column, value will be changed and saved
                                $action = array("1"=>"0","0"=>"1");//action to be performed, like when value is 1 set it to 0
                                $text = array("1" => "approved","0"=>"unapproved");
                                $pdocrud->enqueueActions($action,"switch",$text,"booking_status",array());

                                //action type url - redirect to another page with primary key
                                $action = "http://www.google.com?url={pk}";//{another example of adding url {} text will be replaced by the primary key value
                                $pdocrud->enqueueActions($action,"url","","first_name",array());
                                echo $pdocrud->dbTable("bookroom")->render();
                                </pre>
                            </section>  
                    </div>
                </div>  
           
            <section class="content">
                <?php
                $pdocrud = new PDOCrud();
                $pdocrud->crudTableCol(array("first_name", "last_name", "no_of_adult", "no_of_child", "booking_amount", "booking_status"));

                //action type switch - on click on column, value will be changed and saved
                $action = array("1" => "0", "0" => "1"); //action to be performed, like when value is 1 set it to 0
                $text = array("1" => "approved", "0" => "unapproved");
                $pdocrud->enqueueActions($action, "switch", $text, "booking_status", array());

                //action type url - redirect to another page with primary key
                $action = "http://www.google.com?url={pk}"; //{another example of adding url {} text will be replaced by the primary key value
                $pdocrud->enqueueActions($action, "url", "", "first_name", array());
                echo $pdocrud->dbTable("bookroom")->render();
                ?>
            </section>
        </div>
    </div>
    <?php include 'includes/footer.php'; ?>
</body>
</html>