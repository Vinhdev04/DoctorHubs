<?php
// Include file cấu hình (đã có session_start() trong config.php)
require_once 'config/config.php';

// Xử lý các route
$action = isset($_GET['action']) ? $_GET['action'] : 'home';

// Điều hướng dựa trên action
switch ($action) {
    case 'home':
        include_once 'app/views/home.php';
        break;
    case 'book':
        include_once 'app/views/book.php';
        break;
    case 'blog':
        include_once 'app/views/blog.php';
        break;
    case 'cart':
        include_once 'app/views/cart.php';
        break;
    case 'chuyenkhoa':
        include_once 'app/views/chuyenkhoa.php';
        break;
    case 'consultation':
        include_once 'app/views/consultation.php';
        break;
    case 'contact':
        include_once 'app/views/contact.php';
        break;
    case 'CoXuongKhop':
        include_once 'app/views/CoXuongKhop.php';
        break;
    case 'dashboard':
        include_once 'app/views/dashboard.php';
        break;
    case 'detailMedicines':
        include_once 'app/views/detailMedicines.php';
        break;
    case 'google-callback':
        include_once 'app/views/google-callback.php';
        break;
    case 'medicineCategory':
        include_once 'app/views/medicineCategory.php';
        break;
    case 'payment':
        include_once 'app/views/payment.php';
        break;
    case 'runtest':
        include_once 'app/views/runtest.php';
        break;
    case 'services':
        include_once 'app/views/services.php';
        break;
    case 'shop':
        include_once 'app/views/shop.php';
        break;
    case 'signIn':
        include_once 'app/views/signIn.php';
        break;
    case 'signUp':
        include_once 'app/views/signUp.php';
        break;
    case 'test':
        include_once 'app/views/test.php';
        break;
    case 'TieuHoa':
        include_once 'app/views/TieuHoa.php';
        break;
    case 'TimMach':
        include_once 'app/views/TimMach.php';
        break;
    case 'login':
        include_once 'app/controllers/AccountController.php';
        break;
    case 'register':
        include_once 'app/controllers/AccountController.php';
        break;
    case 'logout':
        include_once 'app/controllers/AccountController.php';
        break;
    default:
        // Mặc định hiển thị trang home
        include_once '/app/views/home.php';
        break;
}
?>


<!-- Thêm đoạn code để hiển thị thông báo Toastr -->
<?php if (isset($_SESSION['message'])): ?>
<script>
toastr.success("<?php echo $_SESSION['message']; ?>");
</script>
<?php unset($_SESSION['message']); // Xóa thông báo sau khi hiển thị ?>
<?php endif; ?>

<?php if (isset($_SESSION['error'])): ?>
<script>
toastr.error("<?php echo $_SESSION['error']; ?>");
</script>
<?php unset($_SESSION['error']); // Xóa thông báo lỗi sau khi hiển thị ?>
<?php endif; ?>