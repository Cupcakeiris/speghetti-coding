<?php include '../../script/pdocrud.php'; ?>
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
                    Plugin vertical timeline (Added in v 3.6)
                </h1>
                <p> Creates vertical timeline by passing the required data. You can get data in form of array and use it to create the html block.
                    
            </section>

            <!-- Default box -->
            <div class="box">                
                <div class="box-body">                    
                    <div class="box-function-ref">
                        <section class="code-section">
                            <pre class="brush: php;"> 
                            $pdocrud = new PDOCrud();
                            $pdocrud->addPlugin("vertical-timeline-master");//to add plugin     
                            $data = $pdocrud->getPDOModelObj()->orderBy(array("message_date"))->select("message");//get data to be displayed in time line e.g. getting data from message table
                            //Create html from data
                            //You can print_r the $data to understand the column name that needs to be used to create the block.
                            $block = "";
                            if(count($data)){
                                foreach($data as $row){
                                    $block .="<div class='cd-timeline__block js-cd-block'>
                                                <div class='cd-timeline__img cd-timeline__img--picture js-cd-img'>
                                                </div> <!-- cd-timeline__img -->

                                                <div class='cd-timeline__content js-cd-content'>
                                                        <h2>".$row["message_thread_code"]."</h2>
                                                        <p>".$row["message"]."</p>
                                                        <a href='".$row["message_url"]."' class='cd-timeline__read-more'>Read more</a>
                                                        <span class='cd-timeline__date'>".$row["message_date"]."</span>
                                                </div> <!-- cd-timeline__content -->
                                            </div>";
                                }
                            }
                            $html_data = array("<section class='cd-timeline js-cd-timeline'><div class='cd-timeline__container'>$block</div><section>");
                            echo $pdocrud->render("HTML", $html_data);
                            </pre>
                        </section>  
                    </div>
                </div>
            </div>  

            <!-- Main content -->
            <section class="content">
                <div class="box">
                    <div class="box-header with-border">
                        <h3 class="box-title">Plugin vertical timeline example - PDOCrud</h3>
                        <div class="box-tools pull-right">
                            <button class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
                        </div>
                    </div>
                    <div class="box-body">
                        <div class="box-body table-responsive no-padding">
                            <?php
                            $pdocrud = new PDOCrud();
                            $pdocrud->addPlugin("vertical-timeline-master");//to add plugin     
                            $data = $pdocrud->getPDOModelObj()->orderBy(array("message_date"))->select("message");//get data to be displayed in time line e.g. getting data from message table
                            //Create html from data
                            //You can print_r the $data to understand the column name that needs to be used to create the block.
                            $block = "";
                            if(count($data)){
                                foreach($data as $row){
                                    $block .="<div class='cd-timeline__block js-cd-block'>
                                                <div class='cd-timeline__img cd-timeline__img--picture js-cd-img'>
                                                </div> <!-- cd-timeline__img -->

                                                <div class='cd-timeline__content js-cd-content'>
                                                        <h2>".$row["message_thread_code"]."</h2>
                                                        <p>".$row["message"]."</p>
                                                        <a href='".$row["message_url"]."' class='cd-timeline__read-more'>Read more</a>
                                                        <span class='cd-timeline__date'>".$row["message_date"]."</span>
                                                </div> <!-- cd-timeline__content -->
                                            </div>";
                                }
                            }
                            $html_data = array("<section class='cd-timeline js-cd-timeline'><div class='cd-timeline__container'>$block</div><section>");
                            echo $pdocrud->render("HTML", $html_data);
                            ?>
                        </div><!-- /.box-body -->
                    </div>
                </div>
            </section><!-- /.content -->
        </div><!-- /.content-wrapper -->
    </div><!-- ./wrapper -->
    <?php include 'includes/footer.php'; ?>   
        
</body>
</html>