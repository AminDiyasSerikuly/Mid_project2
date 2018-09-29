<?php


$mails = array("adfredw");
$passwords = array("defrfedw");


$boolean = true;
$counter = 0;


// -------------------------------------------------------------  mysql query
$connection = mysql_connect("localhost","amin","admin123");
$db  = mysql_select_db("passwords_and_mails");
$resultSet = array();
if(!$connection || !$db){
    exit(mysql_error());
}
$result = mysql_query(" SELECT * FROM  passwords_mails");
mysql_close();
// -------------------------------------------------------------  mysql query


while($row = mysql_fetch_array($result)){
  $mails[] =  $row['Mails'];
  $passwords[] = $row['Passwords'];
}
$arrlength = count($mails);

  if($boolean){
    for($x = 0; $x < $arrlength; $x++){
      $counter ++;
      $ID = isset($_POST['mail']) ? $_POST['mail'] : '';
      $ID2 = isset($_POST['password']) ? $_POST['password'] : '';
      if($ID == $mails[$x] && $ID2 == $passwords[$x]){
          echo $mails[$x];
          $counter = 0;
        }
        elseif($counter == 1){
          echo "No";
        }
}}

?>
