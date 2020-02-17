<?php
//give a filename
$filename = "myexcel.csv";
//set headers to download file
header( 'Content-Type: text/csv' );
header( 'Content-Disposition: attachment;filename='.$filename);
$file = fopen('php://output', 'w');            
//set the column names
$cells[] = array('Name', 'Email', 'Location');
//pass all the form values
$cells[] = array($_POST['name'], $_POST['email'], $_POST['location']);
foreach($cells as $cell){
  fputcsv($file,$cell);
}
fclose($file); 
?>