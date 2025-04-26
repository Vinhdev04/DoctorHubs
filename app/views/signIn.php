<?php
// Include initialization file
require_once '../../config/init.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon" href="../../assets/images/Logo/DoctorHub.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/4.6.0/remixicon.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../../assets/css/base.css" />
    <link rel="stylesheet" href="../../assets/css/login.css" />
    <title>SignIn | DoctorHub</title>
</head>

<body>
    <div class="container container-login" id="container">
        <div class="form-container">
            <form action="../../controllers/auth/signin.php" method="post">
                <h1 class="text-capitalize mb-3 text-center">Đăng Nhập</h1>

                <?php
                if (isset($_SESSION['error'])) {
                    echo '<div class="alert alert-danger">' . $_SESSION['error'] . '</div>';
                    unset($_SESSION['error']);
                }
                if (isset($_SESSION['success'])) {
                    echo '<div class="alert alert-success">' . $_SESSION['success'] . '</div>';
                    unset($_SESSION['success']);
                }
                
                // Redirect if already logged in
                if (isset($_SESSION['user_id']) && isset($_SESSION['email'])) {
                    header('Location: ../../index.php');
                    exit;
                }
                ?>

                <div class="input-group d-flex align-items-center flex-nowrap form-group">
                    <label for="input__mail"><i class="fa-solid fa-envelope"></i></label>
                    <input type="email" placeholder="Email" class="input__mail" id="input__mail" name="email" required />
                </div>

                <div class="input-group d-flex align-items-center flex-nowrap form-group">
                    <label for="input__pass"><i class="ri-lock-line"></i></label>
                    <input type="password" placeholder="Mật khẩu" class="input__pass" id="input__pass" name="password" required />
                </div>

                <button type="submit" class="btn signUp">Đăng Nhập</button>

                <p class="mt-3 text-center">
                    Chưa có tài khoản?
                    <a href="./signUp.php" class="form__desc">Tạo tài khoản mới</a>
                </p>
            </form>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>