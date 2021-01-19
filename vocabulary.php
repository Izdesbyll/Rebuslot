<?php
$servername = "localhost";
$username = "izdesbyll";
$password = "q14103755.";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
//echo "Connected successfully";

mysqli_select_db($conn, "vocabulary");

//echo " Database vocabulary is selected successfully ";

$arr_serialize7=explode(',',$_POST['arr_serialize1']);
$arr_serialize8=explode(',',$_POST['arr_serialize2']);
$arr_serialize9=explode(',',$_POST['arr_serialize3']);
$arr_serialize10=explode(',',$_POST['arr_serialize4']);
$arr_serialize11=explode(',',$_POST['arr_serialize5']);
$arr_serialize12=explode(',',$_POST['arr_serialize6']);

$arr_serialize1=implode(" , ",$arr_serialize7);
$arr_serialize2=implode(" , ",$arr_serialize8);
$arr_serialize3=implode(" , ",$arr_serialize9);
$arr_serialize4=implode(" , ",$arr_serialize10);
$arr_serialize5=implode(" , ",$arr_serialize11);
$arr_serialize6=implode(" , ",$arr_serialize12);

$sql = "INSERT INTO contents_arr(arr_serialize1, arr_serialize2, arr_serialize3, arr_serialize4, arr_serialize5, arr_serialize6) VALUES('".$arr_serialize1."','".$arr_serialize2."','".$arr_serialize3."','".$arr_serialize4."','".$arr_serialize5."','".$arr_serialize6."')";
mysqli_query($conn,$sql);


//	echo "<pre>";
//	echo "1 : ";
//	print_r($arr_serialize7);
//	echo "</pre>";

	echo "<pre>";
	echo "2 : ";
	print_r($arr_serialize8);
	echo "</pre>";

	echo "<pre>";
	echo "3 : ";
	print_r($arr_serialize9);
	echo "</pre>";

//	echo "<pre>";
//	echo "4 : ";
//	print_r($arr_serialize10);
//	echo "</pre>";

//	echo "<pre>";
//	echo "5 : ";
//	print_r($arr_serialize11);
//	echo "</pre>";

//	echo "<pre>";
//	echo "6 : ";
//	print_r($arr_serialize12);
//	echo "</pre>";

mysqli_query($conn,$sql);

header("Location: http://localhost/Rebuslot.php");
?> 

	
