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
                    PDOCrud  
                    <small>Recpatcha using PDOCrud</small>
                </h1>
                <p> You can add recaptcha easily PDOCrud. You will only need to get the site key and secret key from google. </p>
            </section>    
            <!-- Default box -->
            <div class="box">                
                <div class="box-body">                    
                    <section class="code-section">
                        <pre class="brush: php;">  
                                $pdocrud = new PDOCrud();
                                $pdocrud->recaptcha("your-site-key","site-secret");//site key and site secret
                                echo $pdocrud->dbTable("employee")->render("insertform");
                        </pre>
                    </section>  
                </div>
            </div>  
            <!-- Code box -->
            <section class="content">
                <?php
                $pdocrud = new PDOCrud();
                $pdocrud->recaptcha("6LdYUwgUAAAAAMvuaWvL6esSCd-9TvjVD3NIWcF6","6LdYUwgUAAAAAEBHn34n37p2qM44Ppj-fCUqB5wg");//site key and site secret
                echo $pdocrud->dbTable("employee")->render("insertform");
                ?>
            </section>
        </div>
    </div>
    <?php include 'includes/footer.php'; ?>
</body>
</html>