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
                    <small>Send email using PDOCrud</small>
                </h1>
                <p> PDOCrud allows send form fields values added by user, to the email directly. You can formSendEmail function to define
                various email parameters. You can define message template or use the default template. Default template option
                allows you to send email with all fields in table format. You can define template for subject also. You can put filed
                name inside two curly braces. You can also insert and send email both by setting 5th parameter true. </p>
            </section>    
            <!-- Default box -->
            <div class="box">                
                <div class="box-body">                    
                    <section class="code-section">
                        <pre class="brush: php;">  
                                $pdocrud = new PDOCrud();
                                $pdocrud->formFields(array("first_name","last_name","email","message"));
                                $subject = "Email from {{first_name}} {{last_name}}";
                                $message = "default_template";// this will display all fields in table format in email
                                //You can also define message new template as below
                                //$message = "first_name:{{first_name}}<br/>last_name:{{last_name}}<br/>message:{{message}}<br/>";
                                $pdocrud->formSendEmail("info@pdocrud.com",array("someemail@gmail.com"),$subject,$message);
                                echo $pdocrud->setLangData("save", "Sign me up!")->dbTable("contact")->render("emailform");
                        </pre>
                    </section>  
                </div>
            </div>  
            <!-- Code box -->
            <section class="content">
                <?php
                $pdocrud = new PDOCrud();
                $pdocrud->formFields(array("first_name","last_name","email","message"));
                $subject = "Email from {{first_name}} {{last_name}}";
                $message = "default_template";// this will display all fields in table format in email
                //You can also define message new template as below
                //$message = "first_name:{{first_name}}<br/>last_name:{{last_name}}<br/>message:{{message}}<br/>";
                $pdocrud->formSendEmail("info@pdocrud.com",array("g.pritesh@gmail.com"),$subject,$message);
                $pdocrud->setLangData("send", "save");
                echo $pdocrud->setLangData("save", "Sign me up!")->dbTable("contact")->render("emailform");
                ?>
            </section>
        </div>
    </div>
    <?php include 'includes/footer.php'; ?>
</body>
</html>