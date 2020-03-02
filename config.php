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
echo "Connected successfully";

mysqli_select_db($conn, "vocabulary");

echo " Database vocabulary is selected successfully ";

$sql = mysqli_query($conn, "SELECT * FROM contents_arr");
while($row = mysqli_fetch_assoc($sql)){
	
	$serialize1_explode = explode(" , ",$row['arr_serialize1']); 
	$serialize2_explode = explode(" , ",$row['arr_serialize2']); 
	$serialize3_explode = explode(" , ",$row['arr_serialize3']); 
	$serialize4_explode = explode(" , ",$row['arr_serialize4']); 
	$serialize5_explode = explode(" , ",$row['arr_serialize5']); 
	$serialize6_explode = explode(" , ",$row['arr_serialize6']);

}

$arr_serialize13=explode(',',$_POST['arr_serialize1']);
$arr_serialize14=explode(',',$_POST['arr_serialize2']);
$arr_serialize15=explode(',',$_POST['arr_serialize3']);
$arr_serialize16=explode(',',$_POST['arr_serialize4']);
$arr_serialize17=explode(',',$_POST['arr_serialize5']);
$arr_serialize18=explode(',',$_POST['arr_serialize6']);

$arr_serialize7 = array_merge($serialize1_explode, $arr_serialize13);
$arr_serialize8 = array_merge($serialize2_explode, $arr_serialize14);
$arr_serialize9 = array_merge($serialize3_explode, $arr_serialize15);
$arr_serialize10 = array_merge($serialize4_explode, $arr_serialize16);
$arr_serialize11 = array_merge($serialize5_explode, $arr_serialize17);
$arr_serialize12 = array_merge($serialize6_explode, $arr_serialize18);

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

$sql = "DELETE FROM contents_arr WHERE arr_serialize1 = '' AND arr_serialize2 = '' AND arr_serialize3 = '' AND arr_serialize4 ='' AND arr_serialize5 = '' AND arr_serialize6 = '';";
mysqli_query($conn,$sql);

header("Location: http://localhost/index.php");
?> 

	
