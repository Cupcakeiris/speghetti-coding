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
                    Calculate field based on other field value
                    <small>Apply simple math formula to dynamically calcualte a field (added in v 4.3) </small>
                </h1>
                <p>
                    If you want to calculate a field value based on the other field's value then you can
                    easily do using the formFieldValue() function. You can apply basic math function
                    e.g addition, subtraction, multiplication or division to generate the field value
                    based on other field's value. For example, if you want to save the total field
                    as multiplicate of qty and rate field and don't want to show this total field
                    to user then you can easily acheive this using this function.
                </p>
                <p>
                    Please note that you need to hide that field from form that is being calculated. Also, math function can be applied to two fields only. It doesn't work with complex functions currently. We will further improve this function in next versions.
                </p>
                <p>
                    In the below example, we are dynamically calculating sale_price field based on the price field. We are adding 24 to price field to generate sale_price field. 
                </p>
             </section>    
                <!-- Default box -->
                <div class="box">                
                    <div class="box-body">                    
                            <section class="code-section">
                                <pre class="brush: php;">  
                               $pdocrud = new PDOCrud();
                                $pdocrud->formRemoveFields(array("sale_price"));
                                /**
                                 * Set a value of field
                                 * @param   string   $fieldName                            field name to renamed
                                 * @param   string   $value                                value of the field
                                 * @param   bool     $fieldHidden                          Wheter that field is hidden or not
                                 * @param   string   $tablename                            Tablename = Required only when using join table field name
                                 * return   object                                         Object of class
                                 */
                                $pdocrud->formFieldValue("sale_price", "{price}+24", true);
                                //apply formula
                                $pdocrud->fieldFormula("sale_price", "expression",array("type" =>"math_expression"));
                                echo $pdocrud->dbTable("book")->render("insertform"); // call render function
                                </pre>
                            </section>  
                    </div>
                </div>  
           
            <section class="content">
                <?php
                $pdocrud = new PDOCrud();
                $pdocrud->formRemoveFields(array("sale_price"));
                /**
                 * Set a value of field
                 * @param   string   $fieldName                            field name to renamed
                 * @param   string   $value                                value of the field
                 * @param   bool     $fieldHidden                          Wheter that field is hidden or not
                 * @param   string   $tablename                            Tablename = Required only when using join table field name
                 * return   object                                         Object of class
                 */
                $pdocrud->formFieldValue("sale_price", "{price}+24", true);
                //apply formula
                $pdocrud->fieldFormula("sale_price", "expression",array("type" =>"math_expression"));
                echo $pdocrud->dbTable("book")->render(); // call render function
               ?>
            </section>
        </div>
    </div>
    <?php include 'includes/footer.php'; ?>
</body>
</html>