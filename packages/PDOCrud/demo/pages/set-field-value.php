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
                    <small>Set value of a form field (updated in v 4.3)</small>
                </h1>
                <p>
                    You can set some default value of field in insert form. For example, in your table, you may have field name created by,
                    which you don't want to fill by user (instead this you want this to be logged in user id) but you want to save that value
                    in table.
                </p>
                <p>
                    Updates in v 4.3 - Before v 4.3, if you want to hide the value, you need to use
                    the "style = display:none". In v 4.3, we have added option to hide the field 
                    so it will be completely hidden from user.
                </p>
             </section>    
                <!-- Default box -->
                <div class="box">                
                    <div class="box-body">                    
                            <section class="code-section">
                                <pre class="brush: php;">  
                               $pdocrud = new PDOCrud();
                                /**
                                 * Set a value of field
                                 * @param   string   $fieldName                            field name to renamed
                                 * @param   string   $value                                value of the field
                                 * @param   bool     $fieldHidden                          Wheter that field is hidden or not
                                 * @param   string   $tablename                            Tablename = Required only when using join table field name
                                 * return   object                                         Object of class
                                 */
                                $pdocrud->formFieldValue("customer_id", "1");//set some default value for customer Id 
                                $pdocrud->fieldDataAttr("customer_id", array("disabled"=>"disabled"));
                                //or you can entirly hide that field also
            //                $pdocrud->fieldHideLable("customer_id");
            //                $pdocrud->fieldDataAttr("customer_id", array("style"=>"display:none"));


                                //hide another field payment_method and set it's value to "cash"
                                //step 1 hide and set value
                                $pdocrud->formFieldValue("payment_method", "cash", true);//set some default value for payment_method
                                //step 2 remove this field from form field list (you can use formFields function or formRemoveField function)
                                $pdocrud->formFields(array("customer_id","order_amount","order_date"));
                                echo $pdocrud->dbTable("ordertable")->render("insertform");
                                </pre>
                            </section>  
                    </div>
                </div>  
           
            <section class="content">
                <?php
                $pdocrud = new PDOCrud();
                /**
                 * Set a value of field
                 * @param   string   $fieldName                            field name to renamed
                 * @param   string   $value                                value of the field
                 * @param   bool     $fieldHidden                          Wheter that field is hidden or not
                 * @param   string   $tablename                            Tablename = Required only when using join table field name
                 * return   object                                         Object of class
                 */
                $pdocrud->formFieldValue("customer_id", "1");//set some default value for customer Id 
                $pdocrud->fieldDataAttr("customer_id", array("disabled"=>"disabled"));
                //or you can entirly hide that field also
//                $pdocrud->fieldHideLable("customer_id");
//                $pdocrud->fieldDataAttr("customer_id", array("style"=>"display:none"));


                //hide another field payment_method and set it's value to "cash"
                //step 1 hide and set value
                $pdocrud->formFieldValue("payment_method", "cash", true);//set some default value for payment_method
                //step 2 remove this field from form field list (you can use formFields function or formRemoveField function)
                $pdocrud->formFields(array("customer_id","order_amount","order_date"));
                echo $pdocrud->dbTable("ordertable")->render("insertform");
                ?>
            </section>
        </div>
    </div>
    <?php include 'includes/footer.php'; ?>
</body>
</html>