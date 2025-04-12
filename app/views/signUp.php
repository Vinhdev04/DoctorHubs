<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon" href="../../assets/images/Logo/DoctorHub.png" type="image/x-icon">
    <!-- *Fontawesome* -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" />
    <!-- *Liên kết RemixIcon* -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/4.6.0/remixicon.css" rel="stylesheet" />
    <!-- *Liên kết Bootstrap CSS* -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
    <link rel="stylesheet" href="../../assets/css/base.css" />
    <link rel="stylesheet" href="../../assets/css/animation.css" />
    <link rel="stylesheet" href="../../assets/css/login.css" />
    <title>SignUp | DoctorHub</title>
    <style>
    .card {
        padding: 20px;
        text-align: center;
        border-radius: 10px;
    }

    #profile {
        display: none;
        text-align: center;
        margin-top: 20px;
    }

    img {
        border-radius: 50%;
        width: 80px;
        height: 80px;
    }
    </style>
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

    .error {
        color: red;
        font-weight: 500;
        font-size: 12px;
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
            <form action="/register" method="post" id="form-signup">
                <h1 class="text-capitalize mb-3 text-center">Đăng Ký</h1>

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

                <div>
                    <div class="input-group d-flex align-items-center flex-nowrap form-group">
                        <label for="cfPassword">
                            <i class="ri-lock-line"></i></label>
                        <input type="password" placeholder="Password" class="input__pass " id="cfPassword"
                            name="cfPassword" />
                    </div>

                </div>

                <button type="submit" class="btn signUp" name="signIn">Đăng Ký</button>

                <div class="line"><span>hoặc đăng ký bằng</span></div>

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
                    Bạn đã có tài khoản?
                    <a href="./signIn.php" class="form__desc" id="createAccount">Đăng nhập</a>
                </p>
            </form>

            <div id="profile" style="display:none;">
                <h3>Chào, <span id="userName"></span>!</h3>
                <img id="userImage" src="" alt="User Image" />
                <p>Email: <span id="userEmail"></span></p>
                <button onclick="logout()" class="btn btn-danger">Đăng Xuất</button>
            </div>
        </div>
    </div>
</body>

<!-- *Bootstrap* -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
</script>
<script src="../../services/handleLogin.js"></script> <!-- SDK Google -->
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

<!-- <script>
    /**
     * Xử lý phản hồi từ Google sau khi đăng nhập
     */
    function handleCredentialResponse(response) {
      if (!response || !response.credential) {
        console.error("Lỗi: Không nhận được JWT Token từ Google");
        return;
      }

      let data = parseJwt(response.credential);
      if (!data || !data.name || !data.email) {
        console.error("Lỗi: Không thể giải mã JWT Token.");
        return;
      }

      console.log("User Data:", data);

      // Hiển thị thông tin user
      document.getElementById("userName").textContent = data.name;
      document.getElementById("userEmail").textContent = data.email;
      document.getElementById("userImage").src = data.picture;
      document.getElementById("profile").style.display = "block";

      // Lưu vào LocalStorage
      localStorage.setItem("user", JSON.stringify(data));
    }

    /**
     * Giải mã JWT Token
     */
    function parseJwt(token) {
      try {
        let base64Url = token.split(".")[1];
        let base64 = base64Url.replace(/-/g, "+").replace(/_/g, "/");
        let jsonPayload = decodeURIComponent(
          atob(base64)
            .split("")
            .map((c) => "%" + ("00" + c.charCodeAt(0).toString(16)).slice(-2))
            .join("")
        );
        return JSON.parse(jsonPayload);
      } catch (error) {
        console.error("Lỗi khi parse JWT:", error);
        return null;
      }
    }

    /**
     * Đăng xuất
     */
    function logout() {
      document.getElementById("profile").style.display = "none";
      document.getElementById("userName").textContent = "";
      document.getElementById("userEmail").textContent = "";
      document.getElementById("userImage").src = "";
      localStorage.removeItem("user");
    }

    /**
     * Kiểm tra đăng nhập
     */
    function checkLoginStatus() {
      let userData = localStorage.getItem("user");
      if (userData) {
        let data = JSON.parse(userData);
        document.getElementById("userName").textContent = data.name;
        document.getElementById("userEmail").textContent = data.email;
        document.getElementById("userImage").src = data.picture;
        document.getElementById("profile").style.display = "block";
      }
    }

    window.onload = checkLoginStatus;
  </script> -->
<!-- <script>
function handleCredentialResponse(response) {
    if (!response || !response.credential) {
        console.error("Lỗi: Không nhận được JWT Token từ Google");
        return;
    }

    let data = parseJwt(response.credential);
    console.log("User Data:", data);

    if (data) {
        localStorage.setItem("user", JSON.stringify(data));

        alert(`Đăng nhập thành công! Chào ${data.name}`);

        window.location.href = "../../index.php";
    }
}

function parseJwt(token) {
    let base64Url = token.split(".")[1];
    let base64 = base64Url.replace(/-/g, "+").replace(/_/g, "/");
    let jsonPayload = decodeURIComponent(
        atob(base64)
        .split("")
        .map((c) => "%" + ("00" + c.charCodeAt(0).toString(16)).slice(-2))
        .join("")
    );
    return JSON.parse(jsonPayload);
}

window.onload = function() {
    google.accounts.id.initialize({
        client_id: "60552469035-27c42t2tcr98qbmp27b6r2tti6b8vvql.apps.googleusercontent.com",
        callback: handleCredentialResponse,
    });

    document
        .getElementById("google-signin-btn")
        .addEventListener("click", function() {
            google.accounts.id.prompt(); // Hiển thị hộp thoại đăng nhập
        });
};
</script> -->
<!-- <script>
    function fakeLogin() {
      const userData = {
        name: "Nguyễn Văn A",
        avatar: "https://lh3.googleusercontent.com/a/AATXAJwxxxxx",
      };
      localStorage.setItem("user", JSON.stringify(userData));
      window.location.href = "index.html"; // Quay về trang chủ
    }
  </script> -->

<script src="https://accounts.google.com/gsi/client" async defer></script>
<script src="https://accounts.google.com/gsi/client" async defer></script>
<script src="../helper/validate.js"></script>

</html>