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
                    Check duplicate records
                    <small>Check for duplicate records before inserting data (Added in v 3.3)</small>
                </h1>
                <p>
                    If you want to check whether record with same value exists or not before inserting data, 
                    you can call checkDuplicateRecord() function to achieve it. It accepts array of fields that
                    needs to be checked for duplicate record. For example, you can pass username and email in this
                    function to check for duplicate record. It will return record already exists message if there
                    is already field with same value exist.
                <br/> Before this version, you can also do this functionality using the callback function. 
                </p>
             </section>    
                <!-- Default box -->
                <div class="box">                
                    <div class="box-body">                    
                            <section class="code-section">
                                <pre class="brush: php;">  
                                $pdocrud = new PDOCrud(); 
                                $pdocrud->formFields(array("register_number","first_name","last_name","email"));
                                //Check for duplicate record. You can pass multiple fields also.
                                $pdocrud->checkDuplicateRecord(array("register_number"));
                                echo $pdocrud->dbTable("student")->render("insertform");
                                </pre>
                            </section>  
                    </div>
                </div>  
           
            <section class="content">
                <?php
                $pdocrud = new PDOCrud(); 
                $pdocrud->formFields(array("register_number","first_name","last_name","email"));
                //Check for duplicate record. You can pass multiple fields also.
                $pdocrud->checkDuplicateRecord(array("register_number"));
                echo $pdocrud->dbTable("student")->render("insertform");
               ?>
            </section>
        </div>
    </div>
    <?php include 'includes/footer.php'; ?>
</body>
</html>