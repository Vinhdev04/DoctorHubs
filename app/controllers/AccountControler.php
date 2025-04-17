<?php 
require_once('../../config/config.php'); 
require_once('app/models/AccountModel.php');

class AccountController {
    private $accountModel;
    private $db;

    public function __construct() {
        $this->db = (new Database())->getConnection();
        if (!$this->db) {
            die("Không thể kết nối đến database.");
        }
        $this->accountModel = new AccountModel($this->db);
    }

    public function register() {
        include_once 'app/views/signUp.php';
    }

    public function login() {
        include_once 'app/views/signIn.php';
    }

    public function save() {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $name = $_POST['name'] ?? '';
            $email = $_POST['email'] ?? '';
            $password = $_POST['password'] ?? '';
            $confirmPassword = $_POST['confirmpassword'] ?? '';

            $errors = [];
            if (empty($name)) {
                $errors['name'] = "Vui lòng nhập tên!";
            }
            if (empty($email)) {
                $errors['email'] = "Vui lòng nhập email!";
            }
            if (empty($password)) {
                $errors['password'] = "Vui lòng nhập password!";
            }
            if ($password != $confirmPassword) {
                $errors['confirmPass'] = "Mật khẩu và xác nhận chưa khớp!";
            }

            $account = $this->accountModel->getAccountByUsername($name);
            if ($account) {
                $errors['account'] = "Tên hoặc email này đã được đăng ký!";
            }

            if (count($errors) > 0) {
                $_SESSION['signup_errors'] = $errors;
                header('Location: /Doctor_Hubs/app/views/signUp.php');
                exit();
            } else {
                $password = password_hash($password, PASSWORD_BCRYPT, ['cost' => 12]);
                $result = $this->accountModel->save($name, $email, $password);

                if ($result) {
                    $_SESSION['success_signup'] = "Đăng ký thành công!";
                    header('Location: /Doctor_Hubs/app/views/signIn.php');
                    exit();
                } else {
                    $_SESSION['signup_errors'] = ['system' => "Đăng ký thất bại, vui lòng thử lại!"];
                    header('Location: /Doctor_Hubs/app/views/signUp.php');
                    exit();
                }
            }
        }
    }

    public function logout() {
        session_start();
        unset($_SESSION['username']);
        unset($_SESSION['role']);
        header('Location: /Doctor_Hubs/index.php?action=home');
        exit();
    }

    public function checkLogin() {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $loginInput = $_POST['login'] ?? '';
            $password = $_POST['password'] ?? '';

            $account = $this->accountModel->getAccountByUsername($loginInput);
            if ($account) {
                $pwd_hashed = $account->password;
                if (password_verify($password, $pwd_hashed)) {
                    session_start();
                    $_SESSION['username'] = $account->name;
                    $_SESSION['role'] = $account->role;
                    header('Location: /Doctor_Hubs/index.php?action=home');
                    exit();
                } else {
                    $_SESSION['login_error'] = "Sai mật khẩu.";
                    header('Location: /Doctor_Hubs/app/views/signIn.php');
                    exit();
                }
            } else {
                $_SESSION['login_error'] = "Không tìm thấy tài khoản.";
                header('Location: /Doctor_Hubs/app/views/signIn.php');
                exit();
            }
        }
    }
}

// Điều hướng
$controller = new AccountController();
if (isset($_GET['action'])) {
    switch ($_GET['action']) {
        case 'checkLogin':
            $controller->checkLogin();
            break;
        case 'save':
            $controller->save();
            break;
        case 'logout':
            $controller->logout();
            break;
        case 'register':
            $controller->register();
            break;
        case 'login':
            $controller->login();
            break;
        default:
            echo "Hành động không hợp lệ.";
            break;
    }
}
?>