<?php 

// include('include/header.php');
// include('include/sidebar.php');
include_once 'include/session.php';

// Filter the excel data 
function filterData(&$str){ 
    $str = preg_replace("/\t/", "\\t", $str); 
    $str = preg_replace("/\r?\n/", "\\n", $str); 
    if(strstr($str, '"')) $str = '"' . str_replace('"', '""', $str) . '"'; 
} 
 
// Excel file name for download 
$fileName = "BarangayClearance_" . date('Y-m-d') . ".xls"; 
 
// Column names 
$fields = array('RBI', 'FULL NAME',  'PURPOSE', 'DATE APPROVED', 'PERMIT TYPE', 'RESIDENT ID'); 
 
// Display column names as first row 
$excelData = implode("\t", array_values($fields)) . "\n"; 
 
// Fetch records from database 

$d1 = $_GET['d1'];
$d2 = $_GET['d2'];
$query = $conn->query("SELECT * FROM application where permit_type='Barangay Clearance'AND udate_approve BETWEEN '$d1' AND '$d2';"); 
if($query->num_rows > 0){ 
    // Output each row of the data 
    while($row = $query->fetch_assoc()){ 
        $lineData = array($row['urbi'], $row['uname'],  $row['upurpose'], $row['udate_approve'], $row['permit_type'], $row['residentId']); 
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

// header("location:rbi_report.php?from=0&to=0");
 
exit;