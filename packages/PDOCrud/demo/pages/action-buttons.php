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
                    <small>Add action buttons</small>
                </h1>
                <p>
                    You can add extra action buttons to perform many operations like switch, url redirection etc.
                    Below are example of how to add url action button and switch. URL action is for redirecting 
                    to another website with some value and switch can be used for on/off operation (like approve/disapprove, publish/unpublish).
                </p>
             </section>    
                <!-- Default box -->
                <div class="box">                
                    <div class="box-body">                    
                            <section class="code-section">
                                <pre class="brush: php;">  
                                    $pdocrud = new PDOCrud();
                                    $pdocrud->crudTableCol(array("first_name","last_name","no_of_adult","no_of_child","booking_amount","booking_status"));
                                    $action = "http://google.com/?id={pk}";//pk will be replaced by primary key value
                                    $text = '<i class="fa fa-external-link" aria-hidden="true"></i>';
                                    $attr = array("title"=>"Redirect URL");
                                    $pdocrud->enqueueBtnActions("url", $action, "url",$text,"booking_status", $attr);
                                    $action = "http://yahoo.com/?id={pk}";
                                    $text = '<i class="fa fa-external-link" aria-hidden="true"></i>';
                                    $attr = array("title"=>"Redirect URL");
                                    $pdocrud->enqueueBtnActions("url2", $action, "url",$text,"booking_status", $attr);
                                    $action = array("1"=>"0","0"=>"1");//action to be performed, like when value is 1 set it to 0
                                    $text = array("1" => '<i class="fa fa-arrow-down" aria-hidden="true"></i>',"0"=>'<i class="fa fa-arrow-up" aria-hidden="true"></i>');
                                    $attr = array("title"=>"Switch Button");
                                    $pdocrud->enqueueBtnActions("btnswitch", $action, "btnswitch",$text,"booking_status", $attr);
                                    echo $pdocrud->dbTable("bookroom")->render();
                                </pre>
                            </section>  
                    </div>
                </div>  
           
            <section class="content">
                <?php
                $pdocrud = new PDOCrud();
                $pdocrud->crudTableCol(array("first_name","last_name","no_of_adult","no_of_child","booking_amount","booking_status"));
                $action = "http://google.com/?id={pk}";
                $text = '<i class="fa fa-external-link" aria-hidden="true"></i>';
                $attr = array("title"=>"Redirect URL");
                $pdocrud->enqueueBtnActions("url", $action, "url",$text,"booking_status", $attr);
                $action = "http://yahoo.com/?id={pk}";
                $text = '<i class="fa fa-external-link" aria-hidden="true"></i>';
                $attr = array("title"=>"Redirect URL");
                $pdocrud->enqueueBtnActions("url2", $action, "url",$text,"booking_status", $attr);
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