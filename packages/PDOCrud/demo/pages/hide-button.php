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
                    Hide button  
                    <small>hide form buttons</small>
                </h1>
                <p>
                    You can hide any form buttons using this function.
                </p>
             </section>    
                <!-- Default box -->
                <div class="box">                
                    <div class="box-body">                    
                            <section class="code-section">
                                <pre class="brush: php;">  
                                $pdocrud = new PDOCrud();
                                //hide 4 types of buttons using the buttonHide function
                                // available parameters are "submitBtnSaveBack","submitBtnBack","submitBtnSaveBack","cancel"
                                $pdocrud->buttonHide("submitBtn");
                                echo $pdocrud->dbTable("bookroom")->render();
                                </pre>
                            </section>  
                    </div>
                </div>  
           
            <section class="content">
                <?php
                $pdocrud = new PDOCrud();
                //hide 4 types of buttons using the buttonHide function
                // available parameters are "submitBtnSaveBack","submitBtnBack","submitBtnSaveBack","cancel"
                $pdocrud->buttonHide("submitBtn");
                echo $pdocrud->dbTable("bookroom")->render();
               ?>
            </section>
        </div>
    </div>
    <?php include 'includes/footer.php'; ?>
</body>
</html>