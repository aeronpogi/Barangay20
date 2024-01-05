<?php 

// include('include/header.php');
// include('include/sidebar.php');
include_once 'include/session.php';

// Filter the excel data 

$from = $_GET['from'];
$to = $_GET['to'];  

function filterData(&$str){ 
    $str = preg_replace("/\t/", "\\t", $str); 
    $str = preg_replace("/\r?\n/", "\\n", $str); 
    if(strstr($str, '"')) $str = '"' . str_replace('"', '""', $str) . '"'; 
} 
 
$fileName = "finance" . date('Y-m-d') . ".xls"; 
 
// Column names 
$fields = array('Permit Type', 'Requestor', 'Date', 'Fee'); 
 
$excelData = implode("\t", array_values($fields)) . "\n"; 
 
// Fetch records from database 
$query = $conn->query("SELECT * FROM application where  udate_approve BETWEEN '$from' and '$to' and pickupMode='Delivery'"); 
if($query->num_rows > 0){ 
    // Output each row of the data 
    while($row = $query->fetch_assoc()){ 
        $lineData = array($row['permit_type'], $row['uname'], $row['udate_approve'], $row['fee']); 
        array_walk($lineData, 'filterData'); 
        $excelData .= implode("\t", array_values($lineData)) . "\n"; 
    } 
}else{ 
    $excelData .= 'No records found...'. "\n"; 
} 
 
// Headers for download 
header("Content-Type: application/vnd.ms-excel"); 
header("Content-Disposition: attachment; filename=\"$fileName\""); 
 
// Render excel data 
echo $excelData; 

// header("location:rbi_report.php?from=0&to=0");re
// header("location:report_incident.php");
 
exit;

