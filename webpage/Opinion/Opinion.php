
<?php

$host = "localhost";
$userName = "id12674694_ictsba";
$password = "hYvbux-vawkip-9jykwy";
$dbName = "id12674694_opinion";
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

$sql="INSERT INTO `Opinion` (`Name`, `Age`, `Known`, `Rank`, `Opinion`, `Submit`) VALUES ('".$Name."','".$Age."','".$Known."','".$Rank."','".$Opinion."','".$Submit."')";

if(!$result = $conn->query($sql)){
die('SQL server Error [' . $conn->error . ']');
}
else
{
	echo "
		<h1>Success</h1>
	";
}
?>

	<body style="text-align:center">
	
		<table align="center" width="50%" border="10" style="font-size:30px">
		  <tr align="center">
		    <td>本表格將於SBA報告完成后刪除</td>
	      </tr>
		  <tr>
		    <td>SQL hostname:databases.000webhost.com <br />
		      Debug website: <a href="https://databases.000webhost.com/sql.php?db=id12674694_opinion&table=Opinion&pos=0" target="new">Direct Link</a> <br />
		      Username: id12674694_ictsba<br />
		      Password: hYvbux-vawkip-9jykwy<br />
		      <a style="font-size:16px">For copy and paste:
		      id12674694_ictsba hYvbux-vawkip-9jykwy</a><br />
		      Database Name: id12674694_opinion<br />
	        Table: Opinion</td>
	      </tr>
    </table>
	</body>