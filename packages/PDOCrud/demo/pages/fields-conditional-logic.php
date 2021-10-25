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
                    <small>Add conditional logic to show/hide fields</small>
                </h1>
                <p> Conditional logic to show/hide some fields based on the value of field. Please note that this will work with the main table
                    fields only. You can define for which value show some other fields or hide some other fields.
                </p>                

            </section>    
            <!-- Default box -->
            <div class="box">                
                <div class="box-body">                    
                    <section class="code-section">
                        <pre class="brush: php;">  
                            $pdocrud = new PDOCrud();
                            $pdocrud->fieldTypes("City", "select");//change state to select dropdown
                            $pdocrud->fieldDataBinding("City", array("Newyork"=>"Newyork","London"=>"London","Delhi"=>"Delhi","Other"=>"Other"), "", "","array");//add data using array in select dropdown
                            //when city is other then hide state and zip code else show
                            $pdocrud->fieldConditionalLogic("city", "Other", "=", "State", "hide");
                            $pdocrud->fieldConditionalLogic("city", "Other", "=", "Zip", "hide");
                            $pdocrud->fieldConditionalLogic("city", "Other", "!=", "State", "show");
                            $pdocrud->fieldConditionalLogic("city", "Other", "!=", "Zip", "show");
                            echo $pdocrud->dbTable("employee")->render("insertform");
                        </pre>
                    </section>  
                </div>
            </div>  
            <!-- Code box -->
            <section class="content">
                <?php
                $pdocrud = new PDOCrud();
                $pdocrud->fieldTypes("City", "select");//change state to select dropdown
                $pdocrud->fieldDataBinding("City", array("Newyork"=>"Newyork","London"=>"London","Delhi"=>"Delhi","Other"=>"Other"), "", "","array");//add data using array in select dropdown
                $pdocrud->fieldConditionalLogic("city", "Other", "=", "State", "hide");
                $pdocrud->fieldConditionalLogic("city", "Other", "=", "Zip", "hide");
                $pdocrud->fieldConditionalLogic("city", "Other", "!=", "State", "show");
                $pdocrud->fieldConditionalLogic("city", "Other", "!=", "Zip", "show");
                echo $pdocrud->dbTable("employee")->render("insertform");
                ?>
            </section>
        </div>
    </div>
    <?php include 'includes/footer.php'; ?>
</body>
</html>