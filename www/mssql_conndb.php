<?php

// การตั้งค่าการเชื่อมต่อ
$host = '192.168.88.7'; // IP ของ MSSQL Server
$port = 1433; // พอร์ตเริ่มต้นของ MSSQL
$dbname = 'SAC'; // ชื่อฐานข้อมูล
$username = 'SYY'; // ชื่อผู้ใช้
$password = '39122222'; // รหัสผ่าน

try {
    // สร้างการเชื่อมต่อ PDO สำหรับ MSSQL
    $dsn = "sqlsrv:Server=$host,$port;Database=$dbname";
    $pdo = new PDO($dsn, $username, $password);

    // ตั้งค่า PDO error mode
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    echo "เชื่อมต่อฐานข้อมูล MSSQL สำเร็จ!";
} catch (PDOException $e) {
    // แสดงข้อผิดพลาดถ้าเชื่อมต่อไม่ได้
    echo "ไม่สามารถเชื่อมต่อฐานข้อมูล MSSQL: " . $e->getMessage();
}

?>
