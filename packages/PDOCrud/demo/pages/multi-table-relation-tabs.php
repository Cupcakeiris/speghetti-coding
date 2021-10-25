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
                    Multi table relation in tabs (nested tables)  
                    <small>Editing of related records in other table (Added in v 2.0)</small>
                </h1>
                <p> PDOCrud allows the editing of related records of different table i.e. similar to nested table.  
                    Nested Table is a table inside a table. It is not stored in that way but similar concept is used.
                    You can define relation between the two tables data using some binding column value.
                </p>
            </section>    
            <!-- Default box -->
            <div class="box">                
                <div class="box-body">                    
                    <section class="code-section">
                        <pre class="brush: php;">  
                                //student table object
                                $pStudent = new PDOCrud();
                                $pStudent->multiTableRelationDisplay("tab", "Student");
                                //student's class object
                                $pStudentClass = new PDOCrud(true);
                                $pStudentClass->crudTableCol(array("class_id", "class_name", "code"));
                                $pStudentClass->dbTable("class");

                                //first paramater is first table(object) columnn name and 2nd parameter is 2nd object column name
                                $pStudent->multiTableRelation("class_id", "class_id", $pStudentClass);
                                $pStudentClass->multiTableRelationDisplay("tab", "Class");

                                //student's class object - adding one more table 
                                $pStudentTransport = new PDOCrud(true);
                                $pStudentTransport->dbTable("vehicle");

                                //first paramater is first table(object) columnn name and 2nd parameter is 2nd object column name
                                $pStudent->multiTableRelation("transport_id", "vehicle_id", $pStudentTransport);
                                 $pStudentTransport->multiTableRelationDisplay("tab", "Vehicle");
                                //2nd level of nesting  - relating section to class(first student to class and then class to section)
                                $pStudentSection = new PDOCrud(true);
                                $pStudentSection->dbTable("section");

                                //first paramater is first table(object) columnn name and 2nd parameter is 2nd object column name
                                $pStudentClass->multiTableRelation("class_id", "class_id", $pStudentSection);
                                $pStudentSection->multiTableRelationDisplay("tab", "Section");

                                $pStudent->crudTableCol(array("student_id","first_name","last_name"));//optional
                                echo $pStudent->dbTable("student")->render();
                        </pre>
                    </section>  
                </div>
            </div>  
            <!-- Code box -->
            <section class="content">
                <?php
                //student table object
                $pStudent = new PDOCrud();
                $pStudent->multiTableRelationDisplay("tab", "Student");
                //student's class object
                $pStudentClass = new PDOCrud(true);
                $pStudentClass->crudTableCol(array("class_id", "class_name", "code"));
                $pStudentClass->dbTable("class");

                //first paramater is first table(object) columnn name and 2nd parameter is 2nd object column name
                $pStudent->multiTableRelation("class_id", "class_id", $pStudentClass);
                $pStudentClass->multiTableRelationDisplay("tab", "Class");

                //student's class object - adding one more table 
                $pStudentTransport = new PDOCrud(true);
                $pStudentTransport->dbTable("vehicle");
                
                //first paramater is first table(object) columnn name and 2nd parameter is 2nd object column name
                $pStudent->multiTableRelation("transport_id", "vehicle_id", $pStudentTransport);
                 $pStudentTransport->multiTableRelationDisplay("tab", "Vehicle");
                //2nd level of nesting  - relating section to class(first student to class and then class to section)
                $pStudentSection = new PDOCrud(true);
                $pStudentSection->dbTable("section");
               
                //first paramater is first table(object) columnn name and 2nd parameter is 2nd object column name
                $pStudentClass->multiTableRelation("class_id", "class_id", $pStudentSection);
                $pStudentSection->multiTableRelationDisplay("tab", "Section");
                 
                $pStudent->crudTableCol(array("student_id","first_name","last_name"));//optional
                echo $pStudent->dbTable("student")->render();
                ?>
            </section>
        </div>
    </div>
    <?php include 'includes/footer.php'; ?>
</body>
</html>