<?php include '../../script/pdocrud.php'; ?>
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
                    Field Data Binding settings
                    <small>Bind data to fields in PDOCrud</small>
                </h1>
                <p> You can set the data for different types of fields using fieldDataBinding function. You can set data directly from database table
                 or using array or by passing select query (sql option is added in Version 4.0). It is really useful for setting data of fields like select, radio button, checkbox etc.
                 Dropdown field option consists of two things, one is display value and other is the value saved. Display value comes from $val parameter and $key contains
                 the value being saved. e.g &lt;option value="$key"&gt;$val&lt;/option&gt;. Both $key and $val can be same or different depending upon how you want to save the value in database. 
                 <br/> Please note in case of array, <b>if you pass numeric array</b>
                 then it will save index of array in database so if you want to save display value, you need to pass as associative array i.e. array with key and value
                 where key and val can be same or different. for example numeric array $country = array("X","Y","Z"); will save 0,1,2 as per the selected value but if you 
                 want to save displayed value i.e. X,Y,Z then you need to pass associative array $country = array("X"=>"X","Y"=>"Y","Z"=>"Z");
                </p>
                <p> <b> Version 4.0 - We have added two more option. </b>
                <ol>
                    <li>You can now pass valid select query to generate the data of fields directly by running queries.</li>
                    <li>You can now combine two or more columns in the display value for example join first_name and last_name with a separator to display as name.  </li>
                </ol>
            </p>
            </section>

            <!-- Default box -->
            <div class="box">                
                <div class="box-body">                    
                    <div class="box-function-ref">
                        <section class="code-section">
                            <pre class="brush: php;">  
                                $pdocrud = new PDOCrud();
                                /**
                                   * Sets data binding of the field i.e. load the field data from some datasource
                                   * @param   string  $fieldName                             field name to be bind
                                   * @param   mixed   $dataSource                            data source either tablename or array of data
                                   * @param   string  $key                                   name of col, that will serve as data key
                                   * @param   mixed   $val                                   name of col as string or array of columns, that will serve as field value
                                   * @param   string  $bind                                  whether datasource is db table or array or sql, default is db table
                                   * @param   string  $separator                             Separator string in case of $val is an array of columns. Default value is " "
                                   * @param   string  $where                                 Where condition for the datasource
                                   * @param   string  $orderby                               Order by clause for the datasource
                                   * return   object                                         Object of class
                                   */
                                $pdocrud->fieldTypes("gender", "radio");//change gender to radio button
                                $pdocrud->fieldDataBinding("gender", array("male","female"), "", "","array");//add data binding using array
                                $pdocrud->fieldTypes("country", "select");//change type to select
                                $pdocrud->fieldDataBinding("country", "country", "country_id", "country_name", "db");//add data using another table name country
                                $pdocrud->fieldTypes("state", "select");//change state to select dropdown
                                $pdocrud->fieldDataBinding("state", array("Andhra Pradesh","Bihar","Patna","Gujarat","Madhya Pradesh"), "", "","array");//add data using array in select dropdown
                                //Version 4.0 features
                                //1. Pass select query to generate the data
                                $pdocrud->fieldTypes("hobbies", "checkbox");//change field type to checkbox
                                $query = "select * from `hobbies` where `hobby_status` = 1 order by `hobby_name`";
                                $pdocrud->fieldDataBinding("hobbies", $query, "hobby_id", "hobby_name", "sql");
                                //2. Combine two or more columns in the display value 
                                $pdocrud->fieldTypes("city", "select");//change city field to select
                                //add data using another table name city and merge columns "city_code" and "city_name" with separator "-" 
                                $pdocrud->fieldDataBinding("city", "city", "city_id", array("city_code","city_name"), "db", "-");
                                echo $pdocrud->dbTable("users")->render("insertform");
                                //Version 4.2 features
                                //Add 'where' and 'orderby' statement.
                                //$pdocrud->fieldTypes("city", "select");//change city field to select
                                //add data using another table name city and merge columns "city_code" and "city_name" with separator "-" 
                                //$pdocrud->fieldDataBinding("city", "city", "city_id", array("city_code","city_name"), "db", "-", array(array("city_code","0001","=")), array("city_name"));

                            </pre>
                        </section>  
                    </div>
                </div>
            </div>  

            <!-- Main content -->
            <section class="content">
                <div class="box">
                    <div class="box-header with-border">
                        <h3 class="box-title">Field Data binding  using PDOCrud</h3>
                        <div class="box-tools pull-right">
                            <button class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
                        </div>
                    </div>
                    <div class="box-body">
                        <div class="box-body table-responsive no-padding">
                            <?php
                            $pdocrud = new PDOCrud();
                              /**
                            * Sets data binding of the field i.e. load the field data from some datasource
                            * @param   string  $fieldName                             field name to be bind
                            * @param   mixed   $dataSource                            data source either tablename or array of data
                            * @param   string  $key                                   name of col, that will serve as data key
                            * @param   mixed   $val                                   name of col as string or array of columns, that will serve as field value
                            * @param   string  $bind                                  whether datasource is db table or array or sql, default is db table
                            * @param   string  $separator                             Separator string in case of $val is an array of columns. Default value is " "
                            * @param   string  $where                                 Where condition for the datasource
                            * @param   string  $orderby                               Order by clause for the datasource
                            * return   object                                         Object of class
                            */
                            $pdocrud->fieldTypes("gender", "radio");//change gender to radio button
                            $pdocrud->fieldDataBinding("gender", array("male","female"), "", "","array");//add data binding using array
                            $pdocrud->fieldTypes("country", "select");//change type to select
                            $pdocrud->fieldDataBinding("country", "country", "country_id", "country_name", "db");//add data using another table name country
                            $pdocrud->fieldTypes("state", "select");//change state to select dropdown
                            $pdocrud->fieldDataBinding("state", array("Andhra Pradesh","Bihar","Patna","Gujarat","Madhya Pradesh"), "", "","array");//add data using array in select dropdown
                            //Version 4.0 features
                            //1. Pass select query to generate the data
                            $pdocrud->fieldTypes("hobbies", "checkbox");//change field type to checkbox
                            $query = "select * from `hobbies` where `hobby_status` = 1 order by `hobby_name`";
                            $pdocrud->fieldDataBinding("hobbies", $query, "hobby_id", "hobby_name", "sql");
                            //2. Combine two or more columns in the display value 
                            $pdocrud->fieldTypes("city", "select");//change city field to select
                            //add data using another table name city and merge columns "city_code" and "city_name" with separator "-" 
                            $pdocrud->fieldDataBinding("city", "city", "city_id", array("city_code","city_name"), "db", "-");
                            
                            //Version 4.2 features
                            //Add 'where' and 'orderby' statement.
                            //$pdocrud->fieldTypes("city", "select");//change city field to select
                            //add data using another table name city and merge columns "city_code" and "city_name" with separator "-" 
                            //$pdocrud->fieldDataBinding("city", "city", "city_id", array("city_code","city_name"), "db", "-", array(array("city_code","0001","=")), array("city_name"));
                            
                            echo $pdocrud->dbTable("users")->render("insertform");
                            ?>
                        </div><!-- /.box-body -->
                    </div>
                </div>
            </section><!-- /.content -->
        </div><!-- /.content-wrapper -->
    </div><!-- ./wrapper -->
    <?php include 'includes/footer.php'; ?>
</body>
</html>