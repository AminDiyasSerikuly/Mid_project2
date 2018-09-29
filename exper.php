<?php
if(isset($_FILES["file"]["type"]))
{
$validextensions = array("jpeg", "jpg", "png");
$temporary = explode(".", $_FILES["file"]["name"]);
$file_extension = end($temporary);
if ((($_FILES["file"]["type"] == "image/png") || ($_FILES["file"]["type"] == "image/jpg") || ($_FILES["file"]["type"] == "image/jpeg")
) && ($_FILES["file"]["size"] < 20000000)//Approx. 100kb files can be uploaded.
&& in_array($file_extension, $validextensions)) {
if ($_FILES["file"]["error"] > 0)
{
echo "Return Code: " . $_FILES["file"]["error"] . "<br/><br/>";
}
else
{
if (file_exists("upload/" . $_FILES["file"]["name"])) {
echo $_FILES["file"]["name"] . " <span id='invalid'><b>already exists.</b></span> ";
}
else
{
$sourcePath = $_FILES['file']['tmp_name']; // Storing source path of the file in a variable
$targetPath = "upload/".$_FILES['file']['name']; // Target path where file is to be stored
move_uploaded_file($sourcePath,$targetPath) ; // Moving Uploaded file
echo "<span id='success'>Image Uploaded Successfully...!!</span><br/>";
echo "<br/><b>File Name:</b> " . $_FILES["file"]["name"] . "<br>";
echo "<b>Type:</b> " . $_FILES["file"]["type"] . "<br>";
echo "<b>Size:</b> " . ($_FILES["file"]["size"] / 1024) . " kB<br>";
echo "<b>Temp file:</b> " . $_FILES["file"]["tmp_name"] . "<br>";
$image = $_FILES['file']['name'];
$db = mysql_connect("localhost","amin","admin123");

$db = mysql_connect("localhost","amin","admin123");
    $db2  = mysql_select_db("general-motors");


    $rowSQL = mysql_query( "SELECT MAX( individual_id ) AS max FROM `audi_motors`;" );
    $row = mysql_fetch_array($rowSQL);
    $largestNumber = $row['max'];
    $total_number = $largestNumber + 1;
    // $array2 = json_encode(array(1 =>"$largestNumber"));
    // echo($array2);





  $db1  = mysql_select_db("photo");

 mysql_query("INSERT INTO  image( id,images,name ) VALUES ('{$total_number}','{$image}','{$image}')");


  $result =  mysql_query("SELECT * FROM image WHERE name='{$image}'");

  $row = mysql_fetch_array($result);




}
}
}
else
{
echo "<span id='invalid'>***Invalid file Size or Type***<span>";
}
}




      // $result1 =  mysql_query("SELECT * FROM audi_a1 WHERE id_number='{$id_number}'");
      //
      //   $row1 = mysql_fetch_array($result1);
      //
      //  // echo $row1['Model'] ,$row1['Contact_face'];
      //  $var  = $row1['Model'];
      //  $var2 = $row1['Type_of_body'];
      //   $array1 = json_encode(array(1 =>"$var",2=>"$var2"));
      //
      //   // $array1 = array();
      //   // header('Content-Type: text/html; charset=utf-8');
      //
      //   echo $array1;

?>
