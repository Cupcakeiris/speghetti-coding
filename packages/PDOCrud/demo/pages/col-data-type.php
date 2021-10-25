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
                    <small>Change column data type in table(grid)</small>
                </h1>
                <p></p>
            </section>    
            <!-- Default box -->
            <div class="box">                
                <div class="box-body">                    
                    <section class="code-section">
                        <pre class="brush: php;">  
                             $pdocrud = new PDOCrud();
                             $pdocrud->crudTableCol(array("product_name","product_line","product_image","product_url"));
                             //set product_image column to type image and set width and height (you can also set any attribute like style, class)
                             $pdocrud->tableColFormatting("product_image", "image",array("width" =>"100px","height"=>'100px'));
                            //set product_url column to type url and set it's text (you can also set any attribute like style, class)
                             $pdocrud->tableColFormatting("product_url", "url",array("text" =>"View product","target"=>'_blank'));
                             echo $pdocrud->dbTable("products")->render();
                        </pre>
                    </section>  
                </div>
            </div>
            <section class="content">
                <?php
                $pdocrud = new PDOCrud();
                $pdocrud->crudTableCol(array("product_name","product_line","product_image","product_url"));
                $pdocrud->tableColFormatting("product_image", "image",array("width" =>"100px","height"=>'100px'));
                $pdocrud->tableColFormatting("product_url", "url",array("text" =>"View product","target"=>'_blank'));
                echo $pdocrud->dbTable("products")->render();
                ?>
            </section>
        </div>
    </div>
    <?php include 'includes/footer.php'; ?>
</body>
</html>