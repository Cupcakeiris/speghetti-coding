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
                    <small>Add custom action button</small>
                </h1>
                <p>
                    You can add custom action button to specify various actions to be performed against table column. You can create
                    switch like approve/unapprove, publish/unpublish, Complete/pending/partial type of actions easily.
                </p>
             </section>    
                <!-- Default box -->
                <div class="box">                
                    <div class="box-body">                    
                            <section class="code-section">
                                <pre class="brush: php;">  
                                $pdocrud = new PDOCrud();
                                //set inline edit true, it will show inline edit button
                                $pdocrud->setSettings("inlineEditbtn", true);
                                echo $pdocrud->dbTable("orders")->render();
                                </pre>
                            </section>  
                    </div>
                </div>  
           
            <section class="content">
                <?php
                $pdocrud = new PDOCrud();
                $displayVal = array("Completed" => "<i class='fa fa-info-circle'></i>", "Pending" =>"<i class='fa fa-pencil-square-o'></i>");
                $applyVal = array("Completed" => "Pending", "Pending" =>"Pending");
                $pdocrud->crudAddAction("change_status", "order_status", $displayVal, $applyVal);
                echo $pdocrud->dbTable("orders")->render();
                ?>
            </section>
        </div>
    </div>
    <?php include 'includes/footer.php'; ?>
</body>
</html>