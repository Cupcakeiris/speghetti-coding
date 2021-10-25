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
                    Auto Suggestion
                    <small>Auto suggestion in search box (Added in v 3.6)</small>
                </h1>
                <p>
                    You can add auto suggestion in search box that allows you to type the text and based on text, records will be shown as suggestion.
                    You can enable/disable auto suggestion in config file. Please note that auto suggestion works with specific column not 
                    for "All" option in column dropdown of search box. You need to type atleast 2 character to view auto suggestion search result.
                </p>
             </section>    
                <!-- Default box -->
                <div class="box">                
                    <div class="box-body">                    
                            <section class="code-section">
                                <pre class="brush: php;">  
                                //enable the auto suggestion and hide the "All" text from the search box 
                                $pdocrud = new PDOCrud(false, "", "", array("autoSuggestion" => true, "showAllSearch" => false));
                                echo $pdocrud->dbTable("orders")->render();
                                </pre>
                            </section>  
                    </div>
                </div>  
           
            <section class="content">
                <?php
                //enable the auto suggestion and hide the "All" text from the search box 
                $pdocrud = new PDOCrud(false, "", "", array("autoSuggestion" => true, "showAllSearch" => false));
                echo $pdocrud->dbTable("orders")->render();
               ?>
            </section>
        </div>
    </div>
    <?php include 'includes/footer.php'; ?>
</body>
</html>