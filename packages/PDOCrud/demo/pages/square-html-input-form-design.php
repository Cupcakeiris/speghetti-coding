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
                   Advance HTML Forms  
                    <small>Beautiful html form design using the PDO CRUD</small>
                </h1>
                <p> PDO Crud helps you to generate forms directly from the database. You can easily add css to create beautiful designs of forms.
                We are sharing three form designs. More designs will be added in future. Please feel free to share if you have particular form design</p>
                <ol>
                    <li><a href="transparent-html-form-design">Tranparent input's form design</a> </li>
                    <li><a href="round-html-input-form-design">Round input's form design</a> </li>
                    <li><a href="square-html-input-form-design">Square input's form design</a> </li>
                </ol>
             </section>    
                <!-- Default box -->
                <div class="box">                
                    <div class="box-body">                    
                            <section class="code-section">
                                <pre class="brush: php;">  
                                    $pdocrud = new PDOCrud();
                                    $pdocrud->setSkin(array("default","form-square"));//set two skins
                                    $pdocrud->setSettings("placeholder", true);
                                    $pdocrud->fieldTypes("gender", "radio");//change gender to radio button
                                    $pdocrud->fieldDataBinding("gender", array("male","female"), "", "","array");//add data for radio button
                                    $pdocrud->fieldAddOnInfo("email", "before", '<span class="input-group-addon" id="basic-addon1">@</span>');//after addon
                                    //$pdocrud->setSettings("hideLable",true);// To hide all labels    
                                    echo $pdocrud->dbTable("users")->render("insertform");
                                </pre>
                            </section>  
                    </div>
                </div>  
           
            <section class="content">
                <?php
                $pdocrud = new PDOCrud();
                $pdocrud->setSkin(array("default","form-square"));//set two skins
                $pdocrud->setSettings("placeholder", true);
                $pdocrud->fieldTypes("gender", "radio");//change gender to radio button
                $pdocrud->fieldDataBinding("gender", array("male","female"), "", "","array");//add data for radio button
                $pdocrud->fieldAddOnInfo("email", "before", '<span class="input-group-addon" id="basic-addon1">@</span>');//after addon
                //$pdocrud->setSettings("hideLable",true);// To hide all labels    
                echo $pdocrud->dbTable("users")->render("insertform");
                ?>
            </section>
        </div>
    </div>
    <?php include 'includes/footer.php'; ?>
</body>
</html>