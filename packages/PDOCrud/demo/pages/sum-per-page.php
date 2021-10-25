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
                    Sum per page  
                    <small>Display sum per page and Grand sum (added in v 1.9)</small>
                </h1>
                <p> You can use sum per page function to display sum of any columns values of that page and sum total function to display grand total. Please
                note that these function display values dynamically on crud table only.</p>
            </section>    
            <!-- Default box -->
            <div class="box">                
                <div class="box-body">                    
                    <section class="code-section">
                        <pre class="brush: php;">  
                            $pdocrud = new PDOCrud();
                            $pdocrud->crudTableCol(array("product_id","product_name","product_price","product_sell_price"));
                            $pdocrud->colSumPerPage("product_price");
                            $pdocrud->colSumPerPage("product_sell_price");
                            $pdocrud->colSumTotal("product_sell_price");
                            echo $pdocrud->dbTable("products")->render();
                        </pre>
                    </section>  
                </div>
            </div>
            <section class="content">
                <?php
                $pdocrud = new PDOCrud();
                $pdocrud->crudTableCol(array("product_id","product_name","product_price","product_sell_price"));
                $pdocrud->colSumPerPage("product_price");
                $pdocrud->colSumPerPage("product_sell_price");
                $pdocrud->colSumTotal("product_sell_price");
                echo $pdocrud->dbTable("products")->render();
                ?>
            </section>
        </div>
    </div>
    <?php include 'includes/footer.php'; ?>
</body>
</html>