<?php
// Khởi tạo session
session_start();

// Định nghĩa hằng số cho đường dẫn gốc
define('BASE_PATH', dirname(__DIR__) . DIRECTORY_SEPARATOR);

// Kết nối cơ sở dữ liệu
$host = 'localhost';
$dbname = 'doctorhub';
$username = 'root';
$password = '';

try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Kết nối thất bại: " . $e->getMessage());
}
?>