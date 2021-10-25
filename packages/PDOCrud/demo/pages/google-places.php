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
                    <small>Add Google Map</small>
                </h1>
             </section>    
                <!-- Default box -->
                <div class="box">                
                    <div class="box-body">                    
                            <section class="code-section">
                                <pre class="brush: php;">  
                                $pdocrud = new PDOCrud();  
                                $pdocrud->enqueueJs("google_places", "https://maps.googleapis.com/maps/api/js?key=AIzaSyAfp6Kg56vpI7GqJsDCTa577NnNDTnQiU&libraries=places&callback=initAutocomplete");
                                $pdocrud->fieldTypes("first_name", "GOOGLEPLACES");
                                echo $pdocrud->dbTable("employee")->render("insertform");
                                </pre>
                            </section>  
                    </div>
                </div>  
           
            <section class="content">
                <?php
                $pdocrud = new PDOCrud();  
                $pdocrud->enqueueJs("google_places", "https://maps.googleapis.com/maps/api/js?key=AIzaSyAfp6Kg56vpI7GqJsDCTa577NnNDTnQiU&libraries=places&callback=initAutocomplet");
                $pdocrud->fieldTypes("first_name", "GOOGLEPLACES");
                echo $pdocrud->dbTable("employee")->render("insertform"); 
                ?>
            </section>
        </div>
    </div>
    <?php include 'includes/footer.php'; ?>
</body>
</html>