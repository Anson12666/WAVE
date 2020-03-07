
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
if($Submit == "Submit")
{
$sql="INSERT INTO `Opinion` (`Name`, `Age`, `Known`, `Rank`, `Opinion`, `Submit`) VALUES ('".$Name."','".$Age."','".$Known."','".$Rank."','".$Opinion."','".$Submit."')";

if(!$result = $conn->query($sql)){
die('SQL server Error [' . $conn->error . ']');
}
else
{
	echo '
		<h1 align="center">Success</h1>
		<table align="center" width="50%" border="10" style="font-size:30px">
		  <tr align="center">
		    <td>本表格將於SBA報告完成后刪除</td>
	      </tr>
		  <tr>
		    <td>SQL <br/>
		      Debug website: <a href="https://hkcloudstorage.online/SBA_PHP_DEBUG/sql.php?db=hkclouds_ICTSBA_Opinion&table=Opinion&pos=0" target="new">Direct Link</a> (wait few sec)<br />
		      Username: hkclouds_SBAOPIN<br>
		      Password: m%al@$=X%d?p[S*+Dk<br>
		      <a style="font-size:16px">For copy and paste:
		      hkclouds_SBAOPIN    m%al@$=X%d?p[S*+Dk</a><br>
		      Database: hkclouds_ICTSBA_Opinion<br>
	        Table: Opinion</td>
	      </tr>
    </table>
	';
}
}
?>


