<?php
session_start();
$uploaddir = 'produk/';
$md5 = md5(date('ymdhis'));
$file = $uploaddir .$md5."_".date('Ymdhis')."_".basename($_FILES['uploadfile5']['name']); 
$file_name = $md5."_".date('Ymdhis')."_".$_FILES['uploadfile5']['name']; 

$size = $_FILES['uploadfile5']['size'];

if ($size > 512000)
{
	echo "bigger";
}
else
{
	if (move_uploaded_file($_FILES['uploadfile5']['tmp_name'], $file)) {
		echo "$file_name"; 
	} 
	else {
		echo "error";
	}
}
?>