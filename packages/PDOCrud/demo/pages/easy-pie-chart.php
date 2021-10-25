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
                    Easy pie chart  
                    <small>Add pie chart from database tables directly using PDO (Added in v 2.2)</small>
                </h1>
                <p>
                    Apart from plugin addition, you can using addChart function to generate pie chart/bar/line easily. You just needs
                    to pass type of chart you want to generate and values to be passed. You can pass value as array or from database tables or write query.
                    Below example shows how to add easy pie chart.
                    Please note that each chart/graph library has it's own functions and parameters so you need to pass data accordingly. 
                </p>

            </section>    
            <!-- Default box -->
            <div class="box">                
                <div class="box-body">                    
                    <section class="code-section">
                        <pre class="brush: php;">  
                                $pdocrud = new PDOCrud();
                                //function defination of addChart($chartName, $chartType, $dataSource, $key, $val, $bind = "db", $param = array());
                                //pass value as array
                                $pdocrud->addChart("chart1", "easypie", array("val" => 93), "", "", "array");
                                //pass value as database table (similar to field binding)
                                $pdocrud->addChart("chart2", "easypie", "employee", "Id", "Id as empId", "db", array("animate" => "2000"));
                                //Pass value as sql query
                                $pdocrud->addChart("chart3", "easypie", "select count(*) as val from employee where `City`!=''", "", "", "sql", array("animate" => "100"));
                                echo $pdocrud->render("chart", array("chart1", "chart2", "chart3"));
                        </pre>
                    </section>  
                </div>
            </div>  
            <!-- Code box -->
            <section class="content">
                <div style="width:1000px; display: inline; background: #18d4cb">
                    <?php
                    $pdocrud = new PDOCrud();
                    $pdocrud->addChart("chart1", "easypie", array("val" => 93), "", "", "array");
                    $pdocrud->addChart("chart2", "easypie", "employee", "Id", "Id as empId", "db", array("animate" => "2000"));
                    $pdocrud->addChart("chart3", "easypie", "select count(*) as val from employee where `City`!=''", "", "", "sql", array("animate" => "100"));
                    echo $pdocrud->render("chart", array("chart1", "chart2", "chart3"));
                    ?>

            </section>

        </div>
    </div>
    <?php include 'includes/footer.php'; ?>
</body>
</html>