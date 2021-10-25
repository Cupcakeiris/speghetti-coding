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
                    Ajax actions
                    <small>Ajax actions for form elements (added in v 4.3) </small>
                </h1>
                <p>
                    You can now directly perform ajax actions on form elements. For example, on change of
                    textbox/dropdown, if you want to get the some data from database(or any other action) based on value of textbox/dropdown and put it in some textbox/dropdown, you can easily do this using the setAjaxAction function. 
                    By default, element on which you apply ajax, it's value will be passed directly. You need to define the function to be called using ajax in script/pdocrud.php and return the required output(if any). You can also define which other element values to be passed along with main element if required. 
                </p>
                <p>
                    In the below example, we are calling the ajax function on change of the exam category id
                    select box. We are also passing the value of student id just to explain how to pass other
                    element's value. The ajax function getAmount is defined in the script/pdocrud.php. You
                    can use the print_r to understand the content of the $data there.
                </p>
             </section>    
                <!-- Default box -->
                <div class="box">                
                    <div class="box-body">                    
                            <section class="code-section">
                                <pre class="brush: php;">  
                                $pdocrud = new PDOCrud();
                                $pdocrud->relatedData('expense_category_id','expense_category','expense_category_id','name');
                                $pdocrud->fieldTypes("student_id", "select");
                                $pdocrud->fieldDataBinding("student_id", "student", "student_id", "first_name", "db");
                                /**
                                 * Set/Call ajax actions for the form elements on some js event
                                 * @param   string   $elementName                 Name of table column (element name) you want to apply event
                                 * @param   string   $event                       Javascript event name
                                 * @param   string   $callbackFunc                Function to be called upon
                                 * @param   string   $returnValueElement          On which element, return value should be displayed
                                 * @param   string   $otherElements               Other elements to be passed along if any
                                 * return   object                                Object of class
                                 */
                                $pdocrud->setAjaxActions("expense_category_id","change","getAmount","amount", array("student_id") );
                                 echo $pdocrud->dbTable("payment")->render("insertform"); // call render function
                                </pre>
                            </section>  
                    </div>
                </div>  
           
            <section class="content">
                <?php
                $pdocrud = new PDOCrud();
                $pdocrud->formFields(array("your_email", "brief_description"));
                $pdocrud->setAjaxActions("getURL","clcik","getAmount","amount", array("your_email") );
                $pdocrud->formStaticFields("get_url", "html", '<button onclick="javascript:;" type="button id="getURL" name="getURL">Click Me!</button>
');//html field

                 echo $pdocrud->dbTable("customer_support_request")->render("selectform"); // call render function
               ?>
            </section>
        </div>
    </div>
    <?php include 'includes/footer.php'; ?>
</body>
</html>