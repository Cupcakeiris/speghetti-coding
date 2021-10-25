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
                    Portfolio   
                    <small>Display data directly in form of portfolio (Added in version 2.3) </small>
                </h1>
                <p>
                    Display data in portfolio format. Works almost same as grid table (Crud table) with all features available here
                    also, only thing that you need to do extra is to call setPortfolioColumn() function with no. of columns in 
                    one row parameter. Most of the grid table functions also works perfectly with portfolio display also but 
                    some function don't work with format of display. You can use crud table col to display format properly
                    for e.g. we have set product_image as first column as per the default view of this type of format. Export/Print 
                    option will be in same format as of grid table display.
                </p>
             </section>    
                <!-- Default box -->
                <div class="box">                
                    <div class="box-body">                    
                            <section class="code-section">
                                <pre class="brush: php;">  
                                    $pdocrud = new PDOCrud();
                                    $pdocrud->crudTableCol(array("product_image","product_name","product_price"));
                                    $pdocrud->setPortfolioColumn(4);// set no. of columns in one row. Possible values are 1,2,3,4,6
                                    $pdocrud->recordsPerPage(12);
                                    $pdocrud->tableColFormatting("product_image", "image");
                                    //$pdocrud->setSettings("actionbtn", false);//hide action buttons (view/delete/edit) if not required
                                    echo $pdocrud->dbTable("products")->render();
                                </pre>
                            </section>  
                    </div>
                </div>  
           
            <section class="content">
                <?php
                $pdocrud = new PDOCrud();
                $pdocrud->crudTableCol(array("product_image","product_name","product_price"));
                $pdocrud->setPortfolioColumn(4);// set no. of columns in one row. Possible values are 1,2,3,4,6
                $pdocrud->recordsPerPage(12);
                $pdocrud->tableColFormatting("product_image", "image");
                //$pdocrud->setSettings("actionbtn", false);//hide action buttons
                echo $pdocrud->dbTable("products")->render();
                ?>
            </section>
        </div>
    </div>
    <?php include 'includes/footer.php'; ?>
</body>
</html>