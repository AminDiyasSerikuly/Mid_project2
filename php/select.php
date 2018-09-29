<?php

$audi_version = json_encode(array(1 =>"A5",2 => 'A4' , 3 => 'A6' , 4 => 'TT', 5 => 'S5' , 6 => 'S6', 7 => 'A8', 8 => 'S8', 9 => 'Q5' , 10 => 'Q7'));
$BMW_version  = json_encode(array(1 =>"BMW 2",2 => 'BMW 3' , 3 => 'BMW 4' , 4 => 'BMW 5', 5 => 'M2' , 6 => 'BMW 7', 7 => 'M4', 8 => 'BMW 6', 9 => 'M5' , 10 => 'i8',11 =>'BMW 1',12=> 'i3', 13=>'X1' ,14 =>'X2',15=>'X3',16=>'X4',15=>'X5',16=>'X6',17=>'X6M' ));
$MB_version = json_encode(array(1 =>"C-class",2 => 'CLA' , 3 => 'E-class' , 4 => 'S-class', 5 => 'A-class' , 6 => 'G-class', 7 => 'B-class', 8 => 'GLC', 9 => 'GLE' , 10 => 'GLC',10 => 'GLA',10 => 'GLS'));

$arrayName = array("","$audi_version","$BMW_version","$MB_version");
// $audi_version = json_encode(array(1 =>"A5",2 => 'A4' , 3 => 'A6' , 4 => 'TT', 5 => 'S5' , 6 => 'S6', 7 => 'A8', 8 => 'S8', 9 => 'Q5' , 10 => 'Q7'));
// $audi_version = json_encode(array(1 =>"A5",2 => 'A4' , 3 => 'A6' , 4 => 'TT', 5 => 'S5' , 6 => 'S6', 7 => 'A8', 8 => 'S8', 9 => 'Q5' , 10 => 'Q7'));
// $audi_version = json_encode(array(1 =>"A5",2 => 'A4' , 3 => 'A6' , 4 => 'TT', 5 => 'S5' , 6 => 'S6', 7 => 'A8', 8 => 'S8', 9 => 'Q5' , 10 => 'Q7'));
// $audi_version = json_encode(array(1 =>"A5",2 => 'A4' , 3 => 'A6' , 4 => 'TT', 5 => 'S5' , 6 => 'S6', 7 => 'A8', 8 => 'S8', 9 => 'Q5' , 10 => 'Q7'));
// $audi_version = json_encode(array(1 =>"A5",2 => 'A4' , 3 => 'A6' , 4 => 'TT', 5 => 'S5' , 6 => 'S6', 7 => 'A8', 8 => 'S8', 9 => 'Q5' , 10 => 'Q7'));
// $audi_version = json_encode(array(1 =>"A5",2 => 'A4' , 3 => 'A6' , 4 => 'TT', 5 => 'S5' , 6 => 'S6', 7 => 'A8', 8 => 'S8', 9 => 'Q5' , 10 => 'Q7'));
// $audi_version = json_encode(array(1 =>"A5",2 => 'A4' , 3 => 'A6' , 4 => 'TT', 5 => 'S5' , 6 => 'S6', 7 => 'A8', 8 => 'S8', 9 => 'Q5' , 10 => 'Q7'));
// $audi_version = json_encode(array(1 =>"A5",2 => 'A4' , 3 => 'A6' , 4 => 'TT', 5 => 'S5' , 6 => 'S6', 7 => 'A8', 8 => 'S8', 9 => 'Q5' , 10 => 'Q7'));
// $audi_version = json_encode(array(1 =>"A5",2 => 'A4' , 3 => 'A6' , 4 => 'TT', 5 => 'S5' , 6 => 'S6', 7 => 'A8', 8 => 'S8', 9 => 'Q5' , 10 => 'Q7'));
// $audi_version = json_encode(array(1 =>"A5",2 => 'A4' , 3 => 'A6' , 4 => 'TT', 5 => 'S5' , 6 => 'S6', 7 => 'A8', 8 => 'S8', 9 => 'Q5' , 10 => 'Q7'));
// $audi_version = json_encode(array(1 =>"A5",2 => 'A4' , 3 => 'A6' , 4 => 'TT', 5 => 'S5' , 6 => 'S6', 7 => 'A8', 8 => 'S8', 9 => 'Q5' , 10 => 'Q7'));


$variable = $_POST["logo"];


// echo $variable;
for ($i=0; $i <5 ; $i++) {
  if($variable == $i){
    echo $arrayName[$i];

  }
}



// if($variable == 1){
//   echo  $audi_version;
// }
// if($variable == 2){
//   echo  $BMW_version;
// }


 ?>
