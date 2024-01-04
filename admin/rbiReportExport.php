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
 
$fileName = "rbi_" . date('Y-m-d') . ".xls"; 
 
// Column names 
$fields = array('rbi_id', 'full_name', 'birth_place', 'birth_date', 'gender', 'civil_status', 'occupation', 'voter_status'); 
 
$excelData = implode("\t", array_values($fields)) . "\n"; 
 
// Fetch records from database 
$query = $conn->query("SELECT * FROM rbi_tenant "); 
if($query->num_rows > 0){ 
    // Output each row of the data 
    while($row = $query->fetch_assoc()){ 
        $lineData = array($row['rbi_id'], $row['full_name'], $row['birth_place'], $row['birth_date'], $row['gender'], $row['civil_status'], $row['occupation'], $row['voter_status']); 
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