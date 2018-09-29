<?php
$id = $_POST['id11'];

// $counter = 2;
$db = mysql_connect("localhost","amin","admin123");
$db1  = mysql_select_db("photo");
 // $json =  json_encode(array ());
 $arrayName = array();





   $result =  mysql_query("SELECT * FROM image WHERE id='$id'");

  while($row = mysql_fetch_array($result)){
    $arrayName[] = "upload/".$row['images'];
  }
    // $counter++;

      // echo $json;
  //   }
     // $json = array_push($json ,"1" => "upload/".$row['images']);
      // echo "upload/bmw3.jpg";
//       $myObj->name = "John";
// $myObj->age = 30;
// $myObj->city = "New York";
//
// $myJSON = json_encode($myObj);

 $arrayName =  json_encode($arrayName);

echo $arrayName;


 ?>
