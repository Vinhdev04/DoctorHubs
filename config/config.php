<?php
// Khởi tạo session
session_start();

// Định nghĩa hằng số cho đường dẫn gốc
define('BASE_PATH', dirname(__DIR__) . DIRECTORY_SEPARATOR);

// Định nghĩa class Database
class Database {
    private $host = 'localhost';
    private $dbname = 'doctorhub';
    private $username = 'root';
    private $password = '';
    private $conn = null;

    public function getConnection() {
        try {
            $this->conn = new PDO(
                "mysql:host=" . $this->host . ";dbname=" . $this->dbname,
                $this->username,
                $this->password
            );
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $this->conn->exec("set names utf8");
        } catch (PDOException $e) {
            die("Kết nối thất bại: " . $e->getMessage());
        }
        return $this->conn;
    }
}

// Tạo kết nối để sử dụng trong các file khác (nếu cần)
$db = (new Database())->getConnection();
?>