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
                    <small>raw data operation/small>
                </h1>
                <p>PDOCrud uses <a href="https://codecanyon.net/item/pdomodel-database-abstraction-and-helper-php-class/15832775?s_rank=1">PDOModel</a> for database related operations. It supports
                    all pdomodel functions. You can refer pdomodel documentation <a href="http://demo.digitaldreamstech.com/PDOModel/documentation/pdo/">here</a>. </p>
             </section>    
                <!-- Default box -->
                <div class="box">                
                    <div class="box-body">                    
                        <section class="code-section">
                            <pre class="brush: php;">  
                            $pdocrud = new PDOCrud();               
                            //insert operation
                            $insertData = array("customer_name" => "bob", "email" => "builder@gmail.com", "postal_code" =>99423);
                            $pdocrud->getPDOModelObj()->insert("customertable", $insertData);
                            //update operation
                            //Example 2
                            $updateData = array("first_name"=>"Jon", "last_name"=>"snow", "email"=>"builder@gmail.com");
                            $pdomodel = $pdocrud->getPDOModelObj();
                            $pdomodel->where("id", 1);
                            $pdomodel->update("feedback", $updateData);

                            //Example 3
                            //select operation
                            $data =  $pdocrud->getPDOModelObj()->select("orders");
                            print_r($data);
                            </pre>
                        </section>  
                    </div>
                </div>  
           
            <section class="content">
                <?php
                $pdocrud = new PDOCrud();               
                //insert operation
                $insertData = array("customer_name" => "bob", "email" => "builder@gmail.com", "postal_code" =>99423);
                $pdocrud->getPDOModelObj()->insert("customertable", $insertData);
                //update operation
                //Example 2
                $updateData = array("first_name"=>"Jon", "last_name"=>"snow", "email"=>"builder@gmail.com");
                $pdomodel = $pdocrud->getPDOModelObj();
                $pdomodel->where("id", 1);
                $pdomodel->update("feedback", $updateData);
               
                //Example 3
                //select operation
                $data =  $pdocrud->getPDOModelObj()->select("orders");
                echo "<pre>";
                print_r($data);
                echo "</pre>";
                ?>
            </section>
        </div>
    </div>
    <?php include 'includes/footer.php'; ?>
</body>
</html>