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
                    Form Fields
                    <small>Separate form fields for insert and edit form (Addded in v 3.3)</small>
                </h1>
                <p>
                   Now you can define the separate form fields for insert and edit forms. As you know, formFields function is used to
                   set both insert and edit form fields but if you want separate fields for the edit form, you can use editFormFields function
                   to define the fields for edit form. If editFormFields function is not defined then formFields function fields will be
                   used for insert and edit form like previously. 
                </p>
             </section>    
                <!-- Default box -->
                <div class="box">                
                    <div class="box-body">                    
                            <section class="code-section">
                                <pre class="brush: php;">  
                                $pdocrud = new PDOCrud(); 
                                //set which form fields to display. It sets fields for both insert and edit form.
                                $pdocrud->formFields(array("first_name","last_name","Address")); // function to set form fields in both insert and edit
                                //If you want seperate fields for edit form then insert form, you can set using below function. 
                                $pdocrud->editFormFields(array("first_name","Address"));//added in v 3.3

                                echo $pdocrud->dbTable("employee")->render();
                                </pre>
                            </section>  
                    </div>
                </div>  
           
            <section class="content">
                <?php
                $pdocrud = new PDOCrud(); 
                //set which form fields to display. It sets fields for both insert and edit form.
                $pdocrud->formFields(array("first_name","last_name","Address")); // function to set form fields in both insert and edit
                //If you want seperate fields for edit form then insert form, you can set using below function. 
                $pdocrud->editFormFields(array("first_name","Address"));//added in v 3.3
                
                echo $pdocrud->dbTable("employee")->render();
               ?>
            </section>
        </div>
    </div>
    <?php include 'includes/footer.php'; ?>
</body>
</html>