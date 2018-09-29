<?php

$db = mysql_connect("localhost","amin","admin123");
$db2  = mysql_select_db("general-motors");

$name = $_POST["name1"];
$comment = $_POST["comment"];
$date = date('Y-m-d H:i:s');

$comment_length = strlen($comment);
mysql_query ("INSERT INTO comment  VALUES('','$name','$comment', '$date' )");
header("location: ad_page2.php");

// if ($comment_length > 100) {
//   header("location: ad_page2.html?error=1");
// }
// else {
//
//
// }
 ?>
