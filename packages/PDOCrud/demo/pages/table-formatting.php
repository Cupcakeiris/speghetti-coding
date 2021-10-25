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
                    <small>Table Data Formatting</small>
                </h1>
             </section>    
                <!-- Default box -->
                <div class="box">                
                    <div class="box-body">                    
                            <section class="code-section">
                                <pre class="brush: php;">  
                                $pdocrud = new PDOCrud();  
                                $pdocrud->tableColFormatting("product_name", "string",array("type" =>"uppercase"));
                                $pdocrud->tableColFormatting("product_description", "string",array("type" =>"lowercase"));
                                $pdocrud->tableColFormatting("product_image", "image");
                                $pdocrud->tableColFormatting("product_description", "dialog", array("length"=>4,"showreadmore"=>true));
                                $pdocrud->tableColFormatting("product_rating", "html",array("type" =>"html","str"=>"<a href='javascript:;' data-action='abc'>{col-name}</a>"));
                                $pdocrud->tableColFormatting("discount", "formula",array("type" =>"percentage"));
                                $pdocrud->tableColFormatting("qyt_available", "formula",array("type" =>"number_format","decimalpoint"=>2));
                                $pdocrud->tableColAddition("Total", "sum",array("product_price","product_sell_price"));
                                $pdocrud->tableColFormatting("qyt_available", "formula",array("type" =>"round","decimalpoint"=>2));
                                $pdocrud->tableColFormatting("product_price", "formula",array("type" =>"ceil"));
                                $pdocrud->tableColFormatting("product_sell_price", "formula",array("type" =>"floor"));
                                $pdocrud->tableDataFormatting("col", "style", array("product_price",">", "200"),array("background:#000","color:#ff0"));
                                echo $pdocrud->dbTable("producttable")->render();
                                </pre>
                            </section>  
                    </div>
                </div>  
           
            <section class="content">
                <?php
                $pdocrud = new PDOCrud();  
                $pdocrud->tableColFormatting("product_name", "string",array("type" =>"uppercase"));
                $pdocrud->tableColFormatting("product_description", "string",array("type" =>"lowercase"));
                $pdocrud->tableColFormatting("product_image", "image");
                $pdocrud->tableColFormatting("product_description", "dialog", array("length"=>4,"showreadmore"=>true));
                $pdocrud->tableColFormatting("product_rating", "html",array("type" =>"html","str"=>"<a href='javascript:;' data-action='abc'>{col-name}</a>"));
                $pdocrud->tableColFormatting("discount", "formula",array("type" =>"percentage"));
                $pdocrud->tableColFormatting("qyt_available", "formula",array("type" =>"number_format","decimalpoint"=>2));
                $pdocrud->tableColAddition("Total", "sum",array("product_price","product_sell_price"));
                $pdocrud->tableColFormatting("qyt_available", "formula",array("type" =>"round","decimalpoint"=>2));
                $pdocrud->tableColFormatting("product_price", "formula",array("type" =>"ceil"));
                $pdocrud->tableColFormatting("product_sell_price", "formula",array("type" =>"floor"));
                $pdocrud->tableDataFormatting("col", "style", array("product_price",">", "200"),array("background:#000","color:#ff0"));
                echo $pdocrud->dbTable("producttable")->render();
                ?>
            </section>
        </div>
    </div>
    <?php include 'includes/footer.php'; ?>
</body>
</html>