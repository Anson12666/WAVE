
<?php
$host = "localhost";
$userName = "hkclouds_SBAOPIN";
$password = "m%al@$=X%d?p[S*+Dk";
$dbName = "hkclouds_ICTSBA_Opinion";
// Create database connection
$conn = new mysqli($host, $userName, $password, $dbName);
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}

$Name = $conn->real_escape_string($_POST['Name']);
$Age = $conn->real_escape_string($_POST['Age']);
$Known = $conn->real_escape_string($_POST['Known']);
$Rank = $conn->real_escape_string($_POST['Rank']);
$Opinion = $conn->real_escape_string($_POST['Opinion']);
$Submit = $conn->real_escape_string($_POST['Submit']);
if($Submit == "提交")
{
$sql="INSERT INTO `Opinion` (`Name`, `Age`, `Known`, `Rank`, `Opinion`, `Submit`) VALUES ('".$Name."','".$Age."','".$Known."','".$Rank."','".$Opinion."','".$Submit."')";

if(!$result = $conn->query($sql)){
die('SQL server Error [' . $conn->error . ']');
}
else
{
	echo '
		<h1 align="center">成功提交數據</h1>
	';
}
}
else{
		echo '
		<h1 align="center">請先填寫表格</h1>
		';
}
?>


