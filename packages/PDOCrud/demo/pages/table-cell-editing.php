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
                   Edit Single Cell   
                    <small>Excel like editing of table cell on click (Added in version 3.7) </small>
                </h1>
                <p>
                    If you want to edit a single cell value directly similar to spreadsheet editing, you can easily do by enabling "tableCellEdit".
                    On click on table rows, it shows the value inside the input text box. You can edit the value inside the input type text.
                    You need to press enter to save the value. You can click on any table cell to edit the value directly.
                    <br/>
                     Limitations:
                <ul>
                    <li>Doesn't work with join.</li>
                    <li>Support input type of text field only.</li>
                    <li>Doesn't support field formatting and field validation.</li>
                </ul>
                </p>
             </section>    
                <!-- Default box -->
                <div class="box">                
                    <div class="box-body">                    
                            <section class="code-section">
                                <pre class="brush: php;">  
                                    $pdocrud = new PDOCrud();
                                    $pdocrud->setSettings("tableCellEdit", true);
                                    echo $pdocrud->dbTable("orders")->render();
                                </pre>
                            </section>  
                    </div>
                </div>  
           
            <section class="content">
                <?php
                $pdocrud = new PDOCrud();
                $pdocrud->setSettings("tableCellEdit", true);
                echo $pdocrud->dbTable("orders")->render();
               ?>
            </section>
        </div>
    </div>
    <?php include 'includes/footer.php'; ?>
</body>
</html>