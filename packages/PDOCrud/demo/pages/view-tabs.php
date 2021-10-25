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
                    Multi Step (tabs) View Form  
                    <small>Divide complete view form in tabs</small>
                </h1>
                <p> You can divide the form tab wise also. You can show fields in different tabs.
                    Please note that if you need tabs only in forms then you can turn off tabs in view form by setting
                    $config["viewFormTabs"] = false or $pdocrud->setSettings("viewFormTabs",false);
                </p>
               
                </p>
            </section>    
            <!-- Default box -->
            <div class="box">                
                <div class="box-body">                    
                    <section class="code-section">
                        <pre class="brush: php;">  
                            $pdocrud = new PDOCrud();
                            $pdocrud->FormSteps(array("first_name", "last_name", "email", "phone", "gender","birth_date"), "General Info","tabs");
                            $pdocrud->FormSteps(array("user_name", "password"), "Login Details","tabs");
                            $pdocrud->FormSteps(array("address", "city", "state", "country", "zip_code"), "Address","tabs");
                            $pdocrud->FormSteps(array("hobbies", "educational_status", "about_yourself", "company_name"), "Other","tabs");
                            $pdocrud->setPK("user_id");
                            $pdocrud->setSettings("viewFormTabs", true);//set view form tabs enabled
                            echo $pdocrud->dbTable("users")->render("VIEWFORM",array("id" =>"26"));
                        </pre>
                    </section>  
                </div>
            </div>  
            <!-- Code box -->
            <section class="content">
                <?php
                $pdocrud = new PDOCrud();
                $pdocrud->FormSteps(array("first_name", "last_name", "email", "phone", "gender","birth_date"), "General Info","tabs");
                $pdocrud->FormSteps(array("user_name", "password"), "Login Details","tabs");
                $pdocrud->FormSteps(array("address", "city", "state", "country", "zip_code"), "Address","tabs");
                $pdocrud->FormSteps(array("hobbies", "educational_status", "about_yourself", "company_name"), "Other","tabs");
                $pdocrud->setPK("user_id");
                $pdocrud->setSettings("viewFormTabs", true);
                echo $pdocrud->dbTable("users")->render("VIEWFORM",array("id" =>"26"));
                ?>
            </section>
        </div>
    </div>
    <?php include 'includes/footer.php'; ?>
</body>
</html>