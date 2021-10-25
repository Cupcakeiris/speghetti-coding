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
                    Form Tag
                    <small>Separate form related fields e.g form type, class, attributes</small>
                </h1>
                <p>
                   Set form related parameters e.g.  formHeading, formType="horizontal/inline", form class and attribute etc.
                </p>
             </section>    
                <!-- Default box -->
                <div class="box">                
                    <div class="box-body">                    
                            <section class="code-section">
                                <pre class="brush: php;">  
                                $pdocrud = new PDOCrud(); 
                                $pdocrud->formTag("Employee Data", "inline", array("bootstrap-form"), array("title"=>"emp form"));
                                echo $pdocrud->dbTable("employee")->render("insertform");
                                </pre>
                            </section>  
                    </div>
                </div>  
           
            <section class="content">
                <?php
                $pdocrud = new PDOCrud(); 
                $pdocrud->formTag("Employee Data", "inline", array("bootstrap-form"), array("title"=>"emp form"));
                echo $pdocrud->dbTable("employee")->render("insertform");
               ?>
            </section>
        </div>
    </div>
    <?php include 'includes/footer.php'; ?>
</body>
</html>