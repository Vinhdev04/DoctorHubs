<?php
session_start(); 
$_SESSION['all'] = [];  

if (isset($_POST['signIn'])) {
    $username = $_POST['username'] ?? '';
    $email = $_POST['email'] ?? '';
    $password = $_POST['password'] ?? '';

    // Lưu vào session
    $_SESSION['all'][0] = $username;
    $_SESSION['all'][1] = $email;
    $_SESSION['all'][2] = $password;  

   echo '
    <h3>Username: '.$SESSION['all'][0].'</h3>;
    <h3>Password:'.$SESSION['all'][1].' </h3>';
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon" href="../../assets/images//Logo/DoctorHub.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/4.6.0/remixicon.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
    <link rel="stylesheet" href="../../assets/css/base.css" />
    <link rel="stylesheet" href="../../assets/css/animation.css" />
    <link rel="stylesheet" href="../../assets/css/login.css" />
    <title>SignIn | DoctorHub</title>
    <style>
    .container.container-login {
        width: 500px;
    }

    .form-container {
        width: 100%;
        position: unset;
    }

    .control__group {
        color: #fff;
        height: 42px;
        border: none;
        outline: none;
        border-radius: 10px;
        cursor: pointer;
        font-weight: 600;
        font-size: 14px;
    }

    .container .form-container .social-login .control__group--google {
        background-color: #db4437;
    }

    .container .form-container .social-login .control__group--facebook {
        background-color: #1877f2;
    }



    .form-group label {
        font-weight: 500;
        font-size: 1.2em;
        color: #333;
    }


    form button[type="submit"] {

        padding: 10px;
        border: none;
        border-radius: 5px;
        margin-top: 10px;
        background-color: #2846a7;
        color: white;
        font-size: 1em;
        cursor: pointer;
        transition: 0.3s all ease;
    }

    form button[type="submit"]:hover {
        background-color: #1e3578;
    }

    form input::placeholder {
        color: #999;
        font-style: italic;
    }

    form input:focus {
        border-color: #2846a7;
        outline: none;
    }

    form input:has(:invalid) {
        border-color: red;
    }

    form input:has(:valid) {
        border-color: green;
    }

    .error {
        color: red;
        font-weight: 500;
        font-size: 12px;
    }

    form .input-group input:focus {
        outline: none;
        /* border-color: #2e2b41; */
    }
    </style>
</head>

<body>
    <div class="container container-login" id="container">
        <div class="form-container">
            <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post" id="form-login">
                <h1 class="text-capitalize mb-3 text-center">Đăng Nhập</h1>

                <div>
                    <div class="input-group d-flex align-items-center flex-nowrap form-group">
                        <label for="username">
                            <i class="fa-solid fa-user"></i></label>
                        <input type="text" placeholder="Username" class="input__username " id="username"
                            name="username" />
                    </div>

                </div>

                <div>
                    <div class="input-group d-flex align-items-center flex-nowrap form-group">
                        <label for="mail">
                            <i class="fa-solid fa-envelope"></i></label>
                        <input type="email" placeholder="Email" class="input__mail" id="mail" name="email" />
                    </div>

                </div>

                <div>
                    <div class="input-group d-flex align-items-center flex-nowrap form-group">
                        <label for="password">
                            <i class="ri-lock-line"></i></label>
                        <input type="password" placeholder="Password" class="input__pass " id="password"
                            name="password" />
                    </div>

                </div>

                <button type="submit" class="btn signUp" name="signIn">Đăng Nhập</button>

                <div class="line"><span>hoặc đăng nhập bằng</span></div>

                <div class="social-login mb-3 row gx-2">
                    <!-- Google -->
                    <div class="col-6">
                        <button id="googleBtn" type="button"
                            class="btn d-flex align-items-center justify-content-center gap-2 w-100 control__group control__group--google">
                            <i class="fab fa-google"></i>
                            <span>Google</span>
                        </button>

                    </div>

                    <!-- Facebook -->
                    <div class="col-6">
                        <button id="facebookBtn" type="button"
                            class="btn d-flex align-items-center justify-content-center gap-2 w-100 control__group control__group--facebook">
                            <i class="fab fa-facebook-f"></i>
                            <span>Facebook</span>
                        </button>
                    </div>
                </div>

                <p class="mt-0 text-center">
                    Tạo mới?
                    <a href="./signUp.php" class="form__desc" id="createAccount">Tạo mới tài khoản?</a>
                </p>
            </form>
        </div>
    </div>
    <?php





   
// require_once 'db.php'; // Gọi file kết nối

// if ($_SERVER["REQUEST_METHOD"] == "POST") {
//     $name = trim($_POST["username"]);
//     $email = trim($_POST["email"]);
//     $password = $_POST["password"];
//     $cfPassword = $_POST["cfPassword"];

//     // Kiểm tra xác nhận mật khẩu
//     if ($password !== $cfPassword) {
//         die("Mật khẩu xác nhận không khớp!");
//     }

//     // Mã hóa mật khẩu
//     $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

//     try {
//         // Chuẩn bị và thực thi câu lệnh SQL
//         $stmt = $pdo->prepare("INSERT INTO users (name, email, password) VALUES (:name, :email, :password)");
//         $stmt->execute([
//             ':name' => $name,
//             ':email' => $email,
//             ':password' => $hashedPassword
//         ]);

//         echo "Đăng ký thành công!";
//         // Có thể redirect sau khi đăng ký thành công
//         header("Location: signIn.php");
//         exit;
//     } catch (PDOException $e) {
//         if ($e->getCode() == 23000) { // Lỗi trùng email (UNIQUE)
//             echo "Email đã tồn tại!";
//         } else {
//             echo "Lỗi: " . $e->getMessage();
//         }
//     }
// }
// ?>


    <!-- SDK Google -->
    <script src="https://accounts.google.com/gsi/client" async defer></script>

    <!-- SDK Facebook -->
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js"></script>

    <script>
    // Google Login
    window.onload = function() {
        google.accounts.id.initialize({
            client_id: "16769569373-33ss6o0l2c3s75urp2trlq4nbahdvapf.apps.googleusercontent.com", // 🔁 THAY bằng Client ID thực của bạn
            callback: handleGoogleResponse,
        });

        document.getElementById("googleBtn").addEventListener("click", function() {
            const clientId = "16769569373-33ss6o0l2c3s75urp2trlq4nbahdvapf.apps.googleusercontent.com";
            const redirectUri =
                "http://localhost:3000/auth/google/callback"; // 🔁 sửa thành URL backend của bạn

            const authUrl = `https://accounts.google.com/o/oauth2/v2/auth?` +
                `client_id=${clientId}&` +
                `redirect_uri=${redirectUri}&` +
                `response_type=token&` +
                `scope=email%20profile`;

            window.location.href = authUrl;
        });




        document.getElementById("facebookBtn").addEventListener("click", function() {
            FB.login(function(response) {
                if (response.status === 'connected') {
                    const token = response.authResponse.accessToken;
                    fetch("/auth/facebook", {
                            method: "POST",
                            headers: {
                                "Content-Type": "application/json"
                            },
                            body: JSON.stringify({
                                token: token
                            })
                        })
                        .then(res => res.json())
                        .then(data => {
                            if (data.success) {
                                window.location.href = "/index";
                            } else {
                                alert("Đăng nhập Facebook thất bại");
                            }
                        });
                }
            }, {
                scope: 'public_profile,email'
            });
        });
    };

    function handleGoogleResponse(response) {
        fetch("/auth/google", {
                method: "POST",
                headers: {
                    "Content-Type": "application/json"
                },
                body: JSON.stringify({
                    token: response.credential
                })
            })
            .then(res => res.json())
            .then(data => {
                if (data.success) {
                    window.location.href = "/index";
                } else {
                    alert("Đăng nhập Google thất bại");
                }
            });
    }

    // Facebook SDK init
    window.fbAsyncInit = function() {
        FB.init({
            appId: '1728886988022684',
            cookie: true,
            xfbml: true,
            version: 'v18.0'
        });
    };
    </script>

    <!-- Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <script src="../helper/validate.js"></script>

</body>

</html>