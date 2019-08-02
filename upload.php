<?php
session_start();
if($_FILES["file"]["name"] != '')
{
 $_FILES["file"]["name"];
 //$ext = end($test);
 //$name = rand() . '.' . $ext;
 //$sel=$_POST['sel'];
 //mkdir($sel);
 $location = 'j1_46/'.$_FILES["file"]["name"]; 
 
 move_uploaded_file($_FILES["file"]["tmp_name"], $location);
 //echo $_FILES["file"]["tmp_name"]; 
}
?>