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
                    Date range wise report
                    <small>Display month wise, day wise, year wise report buttons (Added in version 3.0) </small>
                </h1>
                <p>
                    You can directly add month wise, day wise, year wise (calendar as well day duration wise) report buttons to generate the table data based on the date range.
                    Please note it work for the CRUD table not for SQL as sql statement can be of anytype.
                </p>
             </section>    
                <!-- Default box -->
                <div class="box">                
                    <div class="box-body">                    
                            <section class="code-section">
                                <pre class="brush: php;">  
                                $pdocrud = new PDOCrud();
                                /**
                                * Add date range report buttons (eg daily ,monthly ,yearly report button)
                                * @param   string   $text                          Name/Text of the button
                                * @param   string   $type                          Type of the report to be generated.
                                * return   object                                  Object of class
                                */
                                $pdocrud->addDateRangeReport("This Year", "calendar_year", "order_date");
                                $pdocrud->addDateRangeReport("This Month", "calendar_month", "order_date");
                                $pdocrud->addDateRangeReport("Last 365 days", "year", "order_date");
                                $pdocrud->addDateRangeReport("Last 30 days", "month", "order_date");
                                $pdocrud->addDateRangeReport("1 Day", "Last 1 day", "order_date");
                                $pdocrud->addDateRangeReport("Today", "today", "order_date");
                                echo $pdocrud->dbTable("orders")->render();
                                </pre>
                            </section>  
                    </div>
                </div>  
           
            <section class="content">
                <?php
                $pdocrud = new PDOCrud();
                $pdocrud->addDateRangeReport("This Year", "calendar_year", "order_date");
                $pdocrud->addDateRangeReport("This Month", "calendar_month", "order_date");
                $pdocrud->addDateRangeReport("Last 365 days", "year", "order_date");
                $pdocrud->addDateRangeReport("Last 30 days", "month", "order_date");
                $pdocrud->addDateRangeReport("1 Day", "Last 1 day", "order_date");
                $pdocrud->addDateRangeReport("Today", "today", "order_date");
                echo $pdocrud->dbTable("orders")->render();
               ?>
            </section>
        </div>
    </div>
    <?php include 'includes/footer.php'; ?>
</body>
</html>