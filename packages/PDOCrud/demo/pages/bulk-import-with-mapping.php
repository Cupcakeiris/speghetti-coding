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
                    Import Bulk Data  complete demo
                    <small>Import bulk data using csv, xml and excel file (Addded in v 1.9)</small>
                </h1>
                <p>
                    You can import bulk data from csv/xml/excel file directly in database table using the bulk import function. You need to specify
                    the filename and table name only. Your file must have header as the column name of the table.
                <br/> Please note xml file must have simple <item> <column-name>column-value</column-name>...</item> structure.
                    Apart from these, three more functions are added (csvToArray, xmlToArray and excelToArray), that converts csv/xml/excel To Array. 
                </p>
             </section>    
                <!-- Default box -->
                <div class="box">                
                    <div class="box-body">                    
                            <section class="code-section">
                                <pre class="brush: php;">  
                                $pdocrud = new PDOCrud(); 
                                echo "Records Imported: ". $pdocrud->bulkImport("upload/advertisement.csv", "advertisement");
                                echo $pdocrud->dbTable("advertisement")->render();
                                </pre>
                            </section>  
                    </div>
                </div>  
           
            <section class="content">
                <?php
                $pdocrud = new PDOCrud(); 
                echo $pdocrud->dbTable("advertisement")->render("IMPORT");
               ?>
            </section>
        </div>
    </div>
    <?php include 'includes/footer.php'; ?>
</body>
</html>