<?php 
$servername = "localhost:3308" ; 
$username = "root" ; 
$password = "root007" ; 


// สร้างการเชื่อมต่อ
$conn = new  mysqli ( $servername , $username , $password ); 


// ตรวจสอบการเชื่อมต่อ
if ( $conn ->connect_error) { 
  die ( "การเชื่อมต่อล้มเหลว: " . $conn ->connect_error); 
} 
echo  "เชื่อมต่อสำเร็จ" ; 
?>
