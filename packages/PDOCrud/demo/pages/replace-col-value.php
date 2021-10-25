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
                    <small>Replace column value</small>
                </h1>
                <p>
                    Many times, we need to display different value of column than the value saved for example we save status as 0,1 and
                    display as "Approved" "Not Approved". This can be easily achieved using the PDOCrud using tableColFormatting function
                    and replacing the value of column. 
                </p>
             </section>    
                <!-- Default box -->
                <div class="box">                
                    <div class="box-body">                    
                            <section class="code-section">
                                <pre class="brush: php;">  
                                $pdocrud = new PDOCrud(); 
                                //column_name, replace, array of value and replace value array (you can also write in one statement, rather than two)
                                $pdocrud->tableColFormatting("order_status", "replace",array("Completed" =>"<i class=\"fa fa-thumbs-up\" aria-hidden=\"true\"></i>"));
                                $pdocrud->tableColFormatting("order_status", "replace",array("Pending" =>"<i class=\"fa fa-thumbs-down\" aria-hidden=\"true\"></i>"));
                                echo $pdocrud->dbTable("orders")->render();
                                </pre>
                            </section>  
                    </div>
                </div>  
           
            <section class="content">
                <?php
                $pdocrud = new PDOCrud(); 
                $pdocrud->tableColFormatting("order_status", "replace",array("Completed" =>"<i class=\"fa fa-thumbs-up\" aria-hidden=\"true\"></i>"));
                $pdocrud->tableColFormatting("order_status", "replace",array("Pending" =>"<i class=\"fa fa-thumbs-down\" aria-hidden=\"true\"></i>"));
                echo $pdocrud->dbTable("orders")->render();
               ?>
            </section>
        </div>
    </div>
    <?php include 'includes/footer.php'; ?>
</body>
</html>