<?php
$Chapter = $_POST['Chapter'];
$Mark_of_car = $_POST['Mark_of_car'];
$Model_of_Mark = $_POST['Model_of_Mark'];
$Price = $_POST['Price'];
$Type_of_body = $_POST['Type_of_Body'];
$Date_of_car = $_POST['date'];
$Box_of_Gear = $_POST['Box_of_Gear'];
$Color_of_Car = $_POST['color_of_car'];
$Type_of_fuel = $_POST['type_of_fuel'];
$State_of_Car = $_POST['State_of_Car'];
$Rule_Side = $_POST['Rule_Side'];
$Mileage = $_POST['Mileage'];
$Volume_of_Engine = $_POST['Volume_of_Engine'];
$Describtion =  $_POST['Describtion'];
$City = $_POST['City'];
$Address = $_POST['Address'];
$Number_of_Phone = $_POST['Number_of_phone'];
$Email = $_POST['Email'];
$Contact_face21 = $_POST['Contact_face12'];
$SmartCounter ;
$cars =  array('sas');


// echo $Mark_of_car,$Model_of_Mark,$Price,$Type_of_body,$Date_of_car,$Box_of_Gear,$Color_of_Car,$Type_of_fuel,$State_of_Car,$Rule_Side,$Mileage,$Volume_of_Engine;


 $db = mysql_connect("localhost","root","");
    $db1  = mysql_select_db("general-motors");



    // $result = mysql_query("SELECT Model_of_Mark FROM audi_motors WHERE Model_of_Mark='BMW 3' ");
    // while($row = mysql_fetch_array($result)){
    //     $cars[] = $row['Model_of_Mark'];



    //     $array1 = json_encode(array(1 => $cars['Model_of_Mark']));
    // echo $array1;
    // mysql_set_charset('utf8');
    // mb_internal_encoding('UTF-8');
    // header('Content-Type: text/html; charset=utf-8');

    mysql_query("INSERT INTO  audi_motors(Chapter, Mark_of_car , Model_of_Mark, Price, Type_of_body ,Date_of_conctrucion ,Box_of_gear,Color_of_car,
    Type_of_fuel, State_of_car, Rule_side, Mileage, Volume_of_engine,Describtion, Adress,Number_of_Phone,Contact_face,E_mail,City) VALUES
     ('{$Chapter}','{$Mark_of_car}','{$Model_of_Mark}','{$Price}','{$Type_of_body}','{$Date_of_car}','{$Box_of_Gear}','{$Color_of_Car}','{$Type_of_fuel}',
       '{$State_of_Car}','{$Rule_Side}','{$Mileage}','{$Volume_of_Engine}','{$Describtion}','{$Address}','{$Number_of_Phone}','{$Contact_face21}','{$Email}','{$City}'
      )");





 ?>
