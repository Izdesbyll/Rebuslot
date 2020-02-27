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

$arr_serialize1=explode(',',$_POST['arr_serialize1']);
$arr_serialize2=explode(',',$_POST['arr_serialize2']);
$arr_serialize3=explode(',',$_POST['arr_serialize3']);
$arr_serialize4=explode(',',$_POST['arr_serialize4']);
$arr_serialize5=explode(',',$_POST['arr_serialize5']);
$arr_serialize6=explode(',',$_POST['arr_serialize6']);
print_r($arr_serialize1);
print_r($arr_serialize2);
print_r($arr_serialize3);
print_r($arr_serialize4);
print_r($arr_serialize5);
print_r($arr_serialize6);
?> 
	
