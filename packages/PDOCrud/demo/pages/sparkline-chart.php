<?php require_once '../../script/pdocrud.php'; ?>
<?php include 'includes/header.php'; ?>
<body class="hold-transition skin-blue sidebar-mini">
<!--    Some specific css added this page for graph/chart nice look (optional)-->
    <style type="text/css">
        .chart {
    display: inline-block;
    text-align: center;
    width: 100%;
}
.chart .heading {
    text-align: left;
}
.chart .heading span {
    display: block;
}
.panel.green-chart .chart-tittle {
    font-size: 16px;
    padding: 15px;
    display: inline-block;
    font-weight:normal;
    background: #99c262;
    width: 100%;
    -webkit-border-radius: 0px 0px 4px 4px;
    border-radius: 0px 0px 4px 4px;
}

#barchart {
    margin-bottom: -15px;
    display: inline-block;
}

.chart-tittle .title {

}

.panel.green-chart .chart-tittle .value {
    float: right;
    color: #c0f080;
}

.panel.green-chart {
    background: #a9d96c;
    color: #fff;
}

.panel.terques-chart {
    background: #41cac0;
    color: #fff;
}

.panel.terques-chart .chart-tittle .value {
    float: right;
    color: #fff;
}

.panel.terques-chart .chart-tittle .value a {
    color: #fff;
    font-size: 12px;
}

.panel.terques-chart .chart-tittle .value a:hover, .panel.terques-chart .chart-tittle .value a.active {
    color: #55f2e7;
    font-size: 12px;
}

.panel.terques-chart .chart-tittle {
    font-size: 16px;
    padding: 15px;
    display: inline-block;
    font-weight:normal;
    background: #39b7ac;
    width: 100%;
    -webkit-border-radius: 0px 0px 4px 4px;
    border-radius: 0px 0px 4px 4px;
}

.inline-block {
    display: inline-block;
}
    </style>    
    <!-- Site wrapper -->
    <div class="wrapper">
        <?php include 'includes/topheader.php'; ?>
        <?php include 'includes/sidebar.php'; ?>
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                 <h1>
                    Sparkline chart  
                    <small>Add sparkline chart from database tables directly using PDO (Added in v 2.2)</small>
                </h1>
                <p>
                    Apart from plugin addition, you can using addChart function to generate pie chart/bar/line easily. You just needs
                    to pass type of chart you want to generate and values to be passed. You can pass value as array or from database tables or write query.
                    Below example shows how to add sparkline chart.
                    Please note that each chart/graph library has it's own functions and parameters so you need to pass data accordingly. 
                </p>
               
            </section>    
            <!-- Default box -->
            <div class="box">                
                <div class="box-body">                    
                    <section class="code-section">
                        <pre class="brush: php;">  
                            $pdocrud = new PDOCrud();
                            $options_line = array("data-type"=>"line", "data-resize"=>"true", "data-height"=>"75", "data-width"=>"90%", "data-line-width"=>"1", "data-line-color"=>"#fff", "data-spot-color"=>"#fff", "data-fill-color"=>"", "data-highlight-line-color"=>"#fff", "data-spot-radius"=>"4");
                            $pdocrud->addChart("chart1","sparkline",array("val"=>93,34,34,34,533,434,213,23,23,23,23,23),"","","array",$options_line);
                            $options_bar = array("data-type"=>"bar", "data-resize"=>"true", "data-height"=>"75", "data-width"=>"90%", "data-line-width"=>"1", "data-line-color"=>"#fff", "data-spot-color"=>"#fff", "data-fill-color"=>"", "data-highlight-line-color"=>"#fff", "data-spot-radius"=>"4");
                            $pdocrud->addChart("chart2","sparkline",array("val"=>93,34,34,34,533,434,213,23,23,23,23,23),"","","array",$options_bar);
                            $options_pie = array("data-type"=>"pie", "data-resize"=>"true", "data-height"=>"75", "data-width"=>"90%", "data-line-width"=>"1", "data-line-color"=>"#fff", "data-spot-color"=>"#fff", "data-fill-color"=>"", "data-highlight-line-color"=>"#fff", "data-spot-radius"=>"4");
                            $pdocrud->addChart("chart3","sparkline", "employee", "Id", "Id as empId", "db",$options_pie);
                            $options_line = array("data-type"=>"line", "data-resize"=>"true", "data-height"=>"75", "data-width"=>"90%", "data-line-width"=>"1", "data-line-color"=>"#fff", "data-spot-color"=>"#fff", "data-fill-color"=>"", "data-highlight-line-color"=>"#fff", "data-spot-radius"=>"4");
                            $pdocrud->addChart("chart4","sparkline","SELECT Salary FROM `empsalary` ", "", "", "sql",$options_line);
                            echo $pdocrud->render("chart",array("chart1","chart2","chart3","chart4"));
                        </pre>
                    </section>  
                </div>
            </div>  
            <!-- Code box -->
            <section class="content">
                <div class="panel terques-chart">
                    <div class="panel-body chart-texture">
                        <div class="chart">
                            <?php
                            $pdocrud = new PDOCrud();
                            $options_line = array("data-type" => "line", "data-resize" => "true", "data-height" => "75", "data-width" => "90%", "data-line-width" => "1", "data-line-color" => "#fff", "data-spot-color" => "#fff", "data-fill-color" => "", "data-highlight-line-color" => "#fff", "data-spot-radius" => "4");
                            $pdocrud->addChart("chart1", "sparkline", array("val" => 93, 34, 34, 34, 533, 434, 213, 23, 23, 23, 23, 23), "", "", "array", $options_line);
                            $options_bar = array("data-type" => "bar", "data-resize" => "true", "data-height" => "75", "data-width" => "90%", "data-line-width" => "1", "data-line-color" => "#fff", "data-spot-color" => "#fff", "data-fill-color" => "", "data-highlight-line-color" => "#fff", "data-spot-radius" => "4");
                            $pdocrud->addChart("chart2", "sparkline", array("val" => 93, 34, 34, 34, 533, 434, 213, 23, 23, 23, 23, 23), "", "", "array", $options_bar);
                            $options_pie = array("data-type" => "pie", "data-resize" => "true", "data-height" => "75", "data-width" => "90%", "data-line-width" => "1", "data-line-color" => "#fff", "data-spot-color" => "#fff", "data-fill-color" => "", "data-highlight-line-color" => "#fff", "data-spot-radius" => "4");
                            $pdocrud->addChart("chart3", "sparkline", "employee", "Id", "Id as empId", "db", $options_pie);
                            $options_line = array("data-type" => "line", "data-resize" => "true", "data-height" => "75", "data-width" => "90%", "data-line-width" => "1", "data-line-color" => "#fff", "data-spot-color" => "#fff", "data-fill-color" => "", "data-highlight-line-color" => "#fff", "data-spot-radius" => "4");
                            $pdocrud->addChart("chart4", "sparkline", "SELECT Salary FROM `empsalary` ", "", "", "sql", $options_line);
                            echo $pdocrud->render("chart", array("chart1", "chart2", "chart3", "chart4"));
                            ?>
                        </div>
                    </div></div>
            </section>
        </div>
    </div>
    <?php include 'includes/footer.php'; ?>
</body>
</html>