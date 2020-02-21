<?php
$name = $_POST['Name']; 
$where_know_website = $_POST['Known']; 
$radio = $_POST['Rank']; 
$Other_Opinion = $_POST['Opinion']; 


echo "
你的姓名是： $Name
職業： $Name
你從哪裏得識此網站: $Known
網頁評分： $Rank
其他意見： $Opinion
";
?>