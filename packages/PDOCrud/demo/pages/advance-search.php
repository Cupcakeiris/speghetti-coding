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
                    Advance Search Options
                    <small>Add advance search options for crud table (added in v 1.9)</small>
                </h1>
                <p>
                   Add advance search option easily and display the CRUD table data on the basis of advance search fields. 
                   Initially, crud table will not shown and after selection of search options, table will shown on the basis
                   of the values selected.
                    
                </p>
             </section>    
                <!-- Default box -->
                <div class="box">                
                    <div class="box-body">                    
                        <section class="code-section">
                            <pre class="brush: php;">  
                                $pdocrud = new PDOCrud();
                                //add addvance search columns ("array of column names to be matched")
                                $pdocrud->addAdvSearch(array( "class_id","section_id","student_id"));                
                                //set data for advance search ("column-name",array of data or table,key (if source=db),value (if source=db), "source_type") 
                                $pdocrud->setAdvSearchSource("class_id", "class", "class_id", "class_name", "db");
                                $pdocrud->setAdvSearchSource("section_id", "section", "section_id", "name", "db");
                                $pdocrud->setAdvSearchSource("student_id", "student", "student_id", "first_name", "db");
                                //optional - set parameter for each search
                                $pdocrud->fieldDependent("section_id", "class_id", "class_id"); //now on change of class id, it will load section id
                                $pdocrud->fieldDependent("student_id", "section_id", "section_id"); // on change of section it will change student
                                $pdocrud->crudTableCol(array("student_id","first_name","gender","class_id","section_id"));
                                echo $pdocrud->dbTable("student")->render("ADVSEARCH");
                            </pre>
                        </section>  
                    </div>
                </div>  
           
            <section class="content">
                <?php
                $pdocrud = new PDOCrud();
                //add addvance search columns ("array of column names to be matched")
                $pdocrud->addAdvSearch(array( "class_id","section_id","student_id"));                
                //set data for advance search ("column-name",array of data or table,key (if source=db),value (if source=db), "source_type") 
                $pdocrud->setAdvSearchSource("class_id", "class", "class_id", "class_name", "db");
                $pdocrud->setAdvSearchSource("section_id", "section", "section_id", "name", "db");
                $pdocrud->setAdvSearchSource("student_id", "student", "student_id", "first_name", "db");
                //optional - set parameter for each search
                $pdocrud->fieldDependent("section_id", "class_id", "class_id"); //now on change of class id, it will load section id
                $pdocrud->fieldDependent("student_id", "section_id", "section_id"); // on change of section it will change student
                $pdocrud->crudTableCol(array("student_id","first_name","gender","class_id","section_id"));
                echo $pdocrud->dbTable("student")->render("ADVSEARCH");
                ?>
            </section>
        </div>
    </div>
    <?php include 'includes/footer.php'; ?>
</body>
</html>