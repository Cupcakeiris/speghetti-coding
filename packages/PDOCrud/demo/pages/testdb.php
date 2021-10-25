<?php

 require_once '../../script/pdocrud.php'; 

// $pdomodel = $pdocrud->getPDOModelObj();
// $data = $pdomodel->executeQuery("SELECT company.id_company, company.name, cus.mycount, cus.mySUM FROM company INNER JOIN ( SELECT data_order, id_company, COUNT(*) AS mycount, SUM(total) AS mySUM FROM orders WHERE DATE(data_order) >= '2019-01-01' GROUP BY id_company ) cus ON cus.id_company = company.id_company");
// print_r($data);
// $pdocrud->addChart("chart5", "google-chart", "SELECT orders.customer_name, orders.ID,  orders.order_amount FROM orders", "id_company", "total", "sql", array("title" => "Employee Data","width"=>"500", "height"=>"500","google-chart-type"=>"PieChart"));

// echo $pdocrud->render("chart", array("chart5"));
// $pdocrud->formRemoveFields(array("notice"));
$pdocrud = new PDOCrud();
/*$pdocrud->fieldTypes("first_name","spinner");
$pdocrud->fieldTypes("about_yourself", "textarea");//change about_yourself 'textarea' to input type text
$pdocrud->fieldTypes("educational_status", "textarea"); // change educational_status 'input text' to textarea
$pdocrud->fieldTypes("gender", "radio");//change gender to radio button
$pdocrud->fieldDataBinding("gender", array("male","female"), "", "","array");//add data for radio button
$pdocrud->fieldTypes("hobbies", "checkbox");//change hobbies to checkbox button
$pdocrud->fieldDataBinding("hobbies", array("Dance","Art","Games"), "", "","array");//add data for checkbox button
$pdocrud->fieldTypes("state", "select");//change state to select dropdown
$pdocrud->fieldDataBinding("state", array("Andhra Pradesh","Bihar","Patna","Gujarat","Madhya Pradesh"), "", "","array");//add data using array in select dropdown
$pdocrud->fieldTypes("country", "multiselect");//change country to multiselect dropdown
$pdocrud->fieldDataBinding("country", array("India","Brazil","UK","Pakistan"), "", "","array");//add data using array in multiselect*/
//$pdocrud->addPlugin("animate");//to add plugin          
$pdocrud->crudTableCol(array("first_name","last_name"));
$pdocrud->subQueryColumn("order_id", "select sum(id) from orders where customer_name = {user_name}");
echo $pdocrud->dbTable("users")->render(); 

//echo $pdocrud->loadPluginJsCode("animate","input[type=text]", array("rubberBand delay-2s infinite"));//to add plugin call on input[type=text] 
?>