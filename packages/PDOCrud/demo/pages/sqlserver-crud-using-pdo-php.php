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
                    PDOCrud SQL Server Connection
                    <small>Default crud option</small>
                </h1>
                <p> PDOCrud is dynamic CRUD generator application. It generates complete crud operation for you. You don't need
                    to write code for CRUD operation(create, read, update, delete) operation. PDOCrud class does every thing on your behalf. 
                    All you need to do is to create object of class and call render function on the table for which you want to generate the
                    CRUD operation. i.e. 2 lines of code and all operation of CRUD works.
                </p>
                <p>
                    For generating default crud table, you need to write 2 lines of code. It will create all insert/update/delete and view along with
                various other controls like pagination, search, records per page, sorting etc. This all options can be customized using various setting
                options available.
                <p>
                   Using PDOCrud, you can build huge forms with many no. of fields in few seconds. You just need to write 2 lines of code and all operations will
                   be managed by the database table. It doesn't matter how big or how small a table is, PDOCrud script generates form easily and
                   also you don't need to write the code for database insert/update/delete/view also. All form submission and operations are done using
                   ajax for faster operations
                </p>
            </section>    
            <!-- Default box -->
            <div class="box">                
                <div class="box-body">                    
                    <section class="code-section">
                        <pre class="brush: php;">  
                                $pdocrud = new PDOCrud();//create object of PDOCrud Class
                                echo $pdocrud->dbTable("feedback")->render(); // call render function on database table
                        </pre>
                    </section>  
                </div>
            </div>  
            <!-- Code box -->
            <section class="content">
                <?php
                $pdocrud = new PDOCrud();
                echo $pdocrud->dbTable('usuario')->render();

                ?>
            </section>
        </div>
    </div>
    <?php include 'includes/footer.php'; ?>
</body>
</html>