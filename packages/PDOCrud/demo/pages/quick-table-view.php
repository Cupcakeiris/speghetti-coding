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
                    Quick Data View 
                    <small>Option to view the data on grid/table row click (Added in v 3.6) </small>
                </h1>
                <p> You can set quickView=true to quickly view the table data just below the table on click of row.
                    You can pass quickView=true in constructor function or set it directly in config file. Click on
                    any table/grid row to view this operation in action. You can set the color/css of the table
                    row selected in the style.css file.
                </p>
            </section>    
            <!-- Default box -->
            <div class="box">                
                <div class="box-body">                    
                    <section class="code-section">
                        <pre class="brush: php;">  
                                //pass quickView=true in constructor function or you can set it via config file
                                $pdocrud = new PDOCrud(false, "", "", array("quickView" => true));
                                //optional - Enable edit button, make sure to hide save and edit button on form next form
                                //$pdocrud->setSettings("viewEditButton", true);
                                //hide back button
                                $pdocrud->setSettings("viewBackButton", false);
                                //optional: add close button
                                $pdocrud->setSettings("closeButton", true);
                                echo $pdocrud->dbTable("employee")->render();
                        </pre>
                    </section>  
                </div>
            </div>  
            <!-- Code box -->
            <section class="content">
                <?php
                //pass quickView=true in constructor function or you can set it via config file
                $pdocrud = new PDOCrud(false, "", "", array("quickView" => true));
                //optional - Enable edit button, make sure to hide save and edit button on form next form
                //$pdocrud->setSettings("viewEditButton", true);
                //hide back button
                $pdocrud->setSettings("viewBackButton", false);
                //optional: add close button
                $pdocrud->setSettings("closeButton", true);
                echo $pdocrud->dbTable("employee")->render();
                ?>
            </section>
        </div>
    </div>
    <?php include 'includes/footer.php'; ?>
</body>
</html>