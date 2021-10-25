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
                    Google Chart  
                    <small>Add google chart from database tables directly using PDO (Added in v 3.6)</small>
                </h1>
                <p>
                    Apart from plugin addition, you can using addChart function to generate google chart/bar/line easily. You just needs
                    to pass type of chart you want to generate and values to be passed. You can pass value as array or get data from
                    database using PDOModel obect easily and pass it as array.
                    Currently following Google charts are supported.
                <ol>
                    <li> Line Chart</li>
                    <li> Bar Chart </li>
                    <li> Pie Chart </li>
                    <li> Donut Chart </li>
                    <li> Area Chart </li>
                </ol>
                </p>

            </section>    
            <!-- Default box -->
            <div class="box">                
                <div class="box-body">                    
                    <section class="code-section">
                        <pre class="brush: php;">  
                                $pdocrud = new PDOCrud();
                                /**
                                * Add pie chart, bar chart, google charts etc using add chart function
                                * @param   string  $chartName                            Name of the chart
                                * @param   string  $chartType                            Chart type 
                                * @param   mixed   $dataSource                           data source either tablename or array of data
                                * @param   string  $key                                  name of col, that will serve as data key
                                * @param   string  $val                                  name of col, that will serve as field valye
                                * @param   string  $bind                                 whether datasource is db table or array or sql, default is db table
                                * @param   string  $param                                data parameter for the chart element
                                * return   object                                        Object of class
                                */
                                $pdocrud->addChart("chart1", "google-chart", array("'Task'" => "'Hour per day'","'Work'"=>8, "'Eat'"=>2, "'TV'"=>3, "'Gym'"=>4,"'Sleep'"=>9), "", "", "array",array("title" => "Employee Data","width"=>"500", "height"=>"500","google-chart-type"=>"LineChart"));
                                $pdocrud->addChart("chart2", "google-chart", array("'Task'" => "'Hour per day'","'Work'"=>8, "'Eat'"=>2, "'TV'"=>3, "'Gym'"=>4,"'Sleep'"=>9), "", "", "array",array("title" => "Employee Data","width"=>"500", "height"=>"500","google-chart-type"=>"BarChart"));
                                $pdocrud->addChart("chart3", "google-chart", array("'Task'" => "'Hour per day'","'Work'"=>8, "'Eat'"=>2, "'TV'"=>3, "'Gym'"=>4,"'Sleep'"=>9), "", "", "array",array("title" => "Employee Data","width"=>"500", "height"=>"500","google-chart-type"=>"PieChart"));
                                $pdocrud->addChart("chart4", "google-chart", array("'Task'" => "'Hour per day'","'Work'"=>8, "'Eat'"=>2, "'TV'"=>3, "'Gym'"=>4,"'Sleep'"=>9), "", "", "array",array("title" => "Employee Data","width"=>"500", "height"=>"500","pieHole"=> 0.4,"google-chart-type"=>"PieChart"));
                                $pdocrud->addChart("chart5", "google-chart", array("'Task'" => "'Hour per day'","'Work'"=>8, "'Eat'"=>2, "'TV'"=>3, "'Gym'"=>4,"'Sleep'"=>9), "", "", "array",array("title" => "Employee Data","width"=>"500", "height"=>"500","google-chart-type"=>"AreaChart"));
                                echo $pdocrud->render("chart", array("chart1","chart2","chart3","chart4","chart5"));
                        </pre>
                    </section>  
                </div>
            </div>  
            <!-- Code box -->
            <section class="content">
                <div style="width:500px; display: inline; background: #18d4cb">
                    <?php
                    $pdocrud = new PDOCrud();
                    /**
                    * Add pie chart, bar chart, google charts etc using add chart function
                    * @param   string  $chartName                            Name of the chart
                    * @param   string  $chartType                            Chart type 
                    * @param   mixed   $dataSource                           data source either tablename or array of data
                    * @param   string  $key                                  name of col, that will serve as data key
                    * @param   string  $val                                  name of col, that will serve as field valye
                    * @param   string  $bind                                 whether datasource is db table or array or sql, default is db table
                    * @param   string  $param                                data parameter for the chart element
                    * return   object                                        Object of class
                    */
                    $pdocrud->addChart("chart1", "google-chart", array("'Task'" => "'Hour per day'","'Work'"=>8, "'Eat'"=>2, "'TV'"=>3, "'Gym'"=>4,"'Sleep'"=>9), "", "", "array",array("title" => "Employee Data","width"=>"500", "height"=>"500","google-chart-type"=>"LineChart"));
                    $pdocrud->addChart("chart2", "google-chart", array("'Task'" => "'Hour per day'","'Work'"=>8, "'Eat'"=>2, "'TV'"=>3, "'Gym'"=>4,"'Sleep'"=>9), "", "", "array",array("title" => "Employee Data","width"=>"500", "height"=>"500","google-chart-type"=>"BarChart"));
                    $pdocrud->addChart("chart3", "google-chart", array("'Task'" => "'Hour per day'","'Work'"=>8, "'Eat'"=>2, "'TV'"=>3, "'Gym'"=>4,"'Sleep'"=>9), "", "", "array",array("title" => "Employee Data","width"=>"500", "height"=>"500","google-chart-type"=>"PieChart"));
                    $pdocrud->addChart("chart4", "google-chart", array("'Task'" => "'Hour per day'","'Work'"=>8, "'Eat'"=>2, "'TV'"=>3, "'Gym'"=>4,"'Sleep'"=>9), "", "", "array",array("title" => "Employee Data","width"=>"500", "height"=>"500","pieHole"=> 0.4,"google-chart-type"=>"PieChart"));
                    $pdocrud->addChart("chart5", "google-chart", array("'Task'" => "'Hour per day'","'Work'"=>8, "'Eat'"=>2, "'TV'"=>3, "'Gym'"=>4,"'Sleep'"=>9), "", "", "array",array("title" => "Employee Data","width"=>"500", "height"=>"500","google-chart-type"=>"AreaChart"));
                    echo $pdocrud->render("chart", array("chart1","chart2","chart3","chart4","chart5"));
                    ?>
                </div>
            </section>
        </div>
    </div>
    <?php include 'includes/footer.php'; ?>
</body>
</html>