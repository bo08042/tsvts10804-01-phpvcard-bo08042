<?php
copy($_FILES['who']['tmp_name'],"upload/".$_FILES['who']['name']);
$tmp=$_POST;
$tmp['who']=$_FILES['who']['name'];
session_start();
$_SESSION['info']=$tmp;
header('location:preview.php');
?>