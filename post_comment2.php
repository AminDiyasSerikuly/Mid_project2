<?php
$db = mysql_connect("localhost","amin","admin123");
$db2  = mysql_select_db("general-motors");
$counter = 0;
  $r = mysql_query("SELECT * FROM comment") ;
   // $name = array();

   $coments =  array();
   $datetime = array();
  while($row = mysql_fetch_array($r)){
    $counter ++;
      $name = $row['name'];
      $name1 = json_encode(array($counter => $name));
      $comments = $row['comment'];
      $datetime = $row['datetime'];




  $coments = json_encode($coments);
  $datetime = json_encode($datetime);

  echo $name1;

}





 ?>
