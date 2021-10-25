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
                    Multi table relation (nested tables)  
                    <small>Editing of related records in other table (Added in v 2.0)</small>
                </h1>
                <p> PDOCrud allows the editing of related records of different table i.e. similar to nested table.  
                    Nested Table is a table inside a table. It is not stored in that way but similar concept is used.
                    You can define relation between the two tables data using some binding column value.
                    <a href="multi-table-relation-tabs"> Click here</a> for tab version 
                </p>
            </section>    
            <!-- Default box -->
            <div class="box">                
                <div class="box-body">                    
                    <section class="code-section">
                        <pre class="brush: php;">  
                            //class table object
                            $pClass = new PDOCrud();
                            //section of class 
                            $pSection = new PDOCrud(true);
                            $pSection->crudTableCol(array("name", "start_time", "end_time"));
                            $pSection->dbTable("section");
                            //first paramater is first table(object) columnn name and 2nd parameter is 2nd object column name
                            $pClass->multiTableRelation("class_id", "class_id", $pSection);
                            //next level
                            //student's class object
                            $pStudent = new PDOCrud(true);
                            $pStudent->crudTableCol(array("first_name", "last_name", "gender"));
                            $pStudent->formFields(array("first_name", "last_name", "gender"));
                            $pStudent->dbTable("student");
                            //first paramater is first table(object) columnn name and 2nd parameter is 2nd object column name
                            $pSection->multiTableRelation("section_id", "section_id", $pStudent);

                            echo $pClass->dbTable("class")->render();
                        </pre>
                    </section>  
                </div>
            </div>  
            <!-- Code box -->
            <section class="content">
                <?php
                //class table object
                $pClass = new PDOCrud();
                //section of class 
                $pSection = new PDOCrud(true);
                $pSection->crudTableCol(array("name", "start_time", "end_time"));
                $pSection->dbTable("section");
                //first paramater is first table(object) columnn name and 2nd parameter is 2nd object column name
                $pClass->multiTableRelation("class_id", "class_id", $pSection);
                //next level
                //student's class object
                $pStudent = new PDOCrud(true);
                $pStudent->crudTableCol(array("first_name", "last_name", "gender"));
                $pStudent->formFields(array("first_name", "last_name", "gender"));
                $pStudent->dbTable("student");
                //first paramater is first table(object) columnn name and 2nd parameter is 2nd object column name
                $pSection->multiTableRelation("section_id", "section_id", $pStudent);
               
                echo $pClass->dbTable("class")->render();
                ?>
            </section>
        </div>
        
    <?php include 'includes/footer.php'; ?>
</body>
</html>