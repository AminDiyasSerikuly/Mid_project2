<?php

$mail = isset($_POST['mail']) ? $_POST['mail'] : '';
$password = isset($_POST['password']) ? $_POST['password'] : '';
$uname = isset($_POST['uname']) ? $_POST['uname'] : '';
$quest = isset($_POST['question']) ? $_POST['question'] : '';
$answer = isset($_POST['answer']) ? $_POST['answer'] : '';

$mail_ARRAY = array();
$password_ARRAY= array();
$uname_ARRAY =  array();

$counter = 0;

// ---------------------------------------------------------------------- sql connecting))

$connection = mysql_connect("localhost","amin","admin123");
$db  = mysql_select_db("passwords_and_mails");


if(!$connection || !$db){
  exit(mysql_error());}


$result = mysql_query(" SELECT * FROM  passwords_mails");

// ---------------------------------------------------------------------- sql connecting))


//  --------------------------------------------------------------------- Translating to array ))

while($row = mysql_fetch_array($result)){
  $mail_ARRAY[] =  $row['Mails'];
  $password_ARRAY[] = $row['Passwords'];
  $uname_ARRAY[] = $row['Uname'];}

// ---------------------------------------------------------------------- Translating to array ))

$arrlength = count($mail_ARRAY);

   for($x = 0; $x < $arrlength; $x++){
      $id1 = isset($_POST['mail']) ? $_POST['mail'] : '';
     if($id1  == $mail_ARRAY[$x]){
       $counter +=1;
     }}

     if($counter >= 1){
       echo "already";
     }

     else if ($counter == 0){
           mysql_query("INSERT INTO passwords_mails (Mails ,Passwords, Uname,Question,Answer) VALUES ('{$mail}' , '{$password}' , '{$uname}','{$quest}','{$answer}')");
           echo "success";
    }


 ?>
