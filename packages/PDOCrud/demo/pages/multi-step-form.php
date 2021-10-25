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
                    Multi Step Forms  
                    <small>Divide complete forms in steps</small>
                </h1>
                <p> You can design the form step wise also. You can show fields in different steps. It can be done using the jQuery tabs or jQuery stepy plugin.
                </p>
               
                </p>
            </section>    
            <!-- Default box -->
            <div class="box">                
                <div class="box-body">                    
                    <section class="code-section">
                        <pre class="brush: php;">  
                                $pdocrud = new PDOCrud();
                                $pdocrud->FormSteps(array("first_name", "last_name", "email", "phone", "gender","birth_date"), "General Info");
                                $pdocrud->FormSteps(array("user_name", "password"), "Login Details");
                                $pdocrud->FormSteps(array("address", "city", "state", "country", "zip_code"), "Address");
                                $pdocrud->FormSteps(array("hobbies", "educational_status", "about_yourself", "company_name"), "Other");
                                echo $pdocrud->dbTable("users")->render("insertform");
                        </pre>
                    </section>  
                </div>
            </div>  
            <!-- Code box -->
            <section class="content">
                <?php
                $pdocrud = new PDOCrud();
                $pdocrud->FormSteps(array("first_name", "last_name", "email", "phone", "gender","birth_date"), "General Info");
                $pdocrud->FormSteps(array("user_name", "password"), "Login Details");
                $pdocrud->FormSteps(array("address", "city", "state", "country", "zip_code"), "Address");
                $pdocrud->FormSteps(array("hobbies", "educational_status", "about_yourself", "company_name"), "Other");
                echo $pdocrud->dbTable("users")->render("insertform");
                ?>
            </section>
        </div>
    </div>
    <?php include 'includes/footer.php'; ?>
</body>
</html>