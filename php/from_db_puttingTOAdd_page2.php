<?php


$db = mysql_connect("localhost","amin","admin123");
    $db2  = mysql_select_db("general-motors");
    $id = $_POST['id'];
    // $price = 200000;

      $result1 =  mysql_query("SELECT * FROM audi_motors WHERE individual_id='{$id}'");
      $row1 = mysql_fetch_array($result1);

      $id = $row1['individual_id'];
       $Mark_of_car  = $row1['Mark_of_car'];
       $Model_of_Mark = $row1['Model_of_Mark'];
       $Chapter = $row1['Chapter'];
       $Price = $row1['Price'];
       $Type_of_body = $row1['Type_of_body'];
       $Date_of_conctrucion = $row1['Date_of_conctrucion'];
       $Box_of_gear = $row1['Box_of_gear'];
       $Color_of_car = $row1['Color_of_car'];
       $Type_of_fuel = $row1['Type_of_fuel'];
       $State_of_car = $row1['State_of_car'];
       $Rule_side = $row1['Rule_side'];
       $Mileage = $row1['Mileage'];
       $Volume_of_engine = $row1['Volume_of_engine'];
       $Describtion =  $row1['Describtion'];
       $Address = $row1['Adress'];
       $Number_of_Phone = $row1['Number_of_Phone'];
       $Email = $row1['E_mail'];
       $Contact_face21 = $row1['Contact_face'];
       $City = $row1['City'];
       $Chapter = $row1['Chapter'];




        $array1 = json_encode(array(1 =>"$Mark_of_car",2=>"$Model_of_Mark" ,3=>"$Chapter",4=>"$Price",5=>"$Type_of_body",
        6=>"$Date_of_conctrucion",7=>"$Box_of_gear",8=>"$Color_of_car",9=>"$Type_of_fuel",10=>"$State_of_car",11=>"$Rule_side",
         12=>"$Mileage",13=>"$Volume_of_engine",14=>$Describtion,15=>$Address,16=>$Number_of_Phone,17=>$Email,18=>$Contact_face21,
         19=>$City,20=>$Chapter,21=>$id


       ));



        echo $array1;
 ?>
