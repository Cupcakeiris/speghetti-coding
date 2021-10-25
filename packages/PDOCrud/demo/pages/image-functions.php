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
                    PDOCrud Image operations
                    <small>Resize, thumbnail, flip, crop, add overlay(water mark), add text to image (added in v 1.9)</small>
                </h1>
                <p>
                    With PDOCrud, you can easily resize images, make thumbnails, flip images, crop images, add overlay (watermark), or add text to images.
                    You need to define the field type as image to make it file control. PDOCrud uses The SimpleImage PHP class to implement all these image related operations.
                </p>
             </section>    
                <!-- Default box -->
                <div class="box">                
                    <div class="box-body">                    
                        <section class="code-section">
                            <pre class="brush: php;">  
                            $pdocrud = new PDOCrud();
                            //resize image, (width as key and height as value in array)
                            $pdocrud->resizeImage(array("100"=>"100"));
                            //Add overlay image (watermark) - pass overlay image, position, opacity, x_position, y_position
                            $pdocrud->watermark("http://localhost/pdoCrud/demo/pages/images/overlay.png","bottom right","0.8");
                            // Thumbnail Trim the image and resize to exactly width and height given
                            $pdocrud->thumbnailImage(100, 100);
                            //Crop image - x1, y1, x2,y2
                            $pdocrud->crop(5, 20, 100, 400);
                            //flip image (x or y)
                            $pdocrud->flip("x");
                            //Add text on image
                            $pdocrud->imageText('Your Text',  __DIR__.'/images/delicious.ttf', 32, '#FFFFFF', 'top', 0, 20);

                            $pdocrud->fieldTypes("product_image", "image");
                            $pdocrud->formFields(array("product_image","product_id"));
                            echo $pdocrud->dbTable("products")->render("insertform");
                            </pre>
                        </section>  
                    </div>
                </div>  
           
            <section class="content">
                <?php
                $pdocrud = new PDOCrud();
                //resize image, (width as key and height as value in array)
                $pdocrud->resizeImage(array("100"=>"100"));
                //Add overlay image (watermark) - pass overlay image, position, opacity, x_position, y_position
                $pdocrud->watermark("http://localhost/pdoCrud/demo/pages/images/overlay.png","bottom right","0.8");
                // Thumbnail Trim the image and resize to exactly width and height given
                $pdocrud->thumbnailImage(100, 100);
                //Crop image - x1, y1, x2,y2
                $pdocrud->crop(5, 20, 100, 400);
                //flip image (x or y)
                $pdocrud->flip("x");
                //Add text on image
                $pdocrud->imageText('Your Text',  __DIR__.'/images/delicious.ttf', 32, '#FFFFFF', 'top', 0, 20);
                
                $pdocrud->fieldTypes("product_image", "image");
                $pdocrud->formFields(array("product_image","product_id"));
                echo $pdocrud->dbTable("products")->render("insertform");
                ?>
            </section>
        </div>
    </div>
    <?php include 'includes/footer.php'; ?>
</body>
</html>