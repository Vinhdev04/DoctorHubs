<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- *SEO Meta Tags* -->
    <meta name="description"
        content="DoctorHub - Đặt lịch khám bệnh và tư vấn sức khỏe trực tuyến. Tiết kiệm thời gian, chăm sóc sức khỏe mọi lúc, mọi nơi." />
    <meta name="keywords"
        content="đặt lịch khám, tư vấn sức khỏe, khám bệnh trực tuyến, chăm sóc sức khỏe, đặt lịch bác sĩ" />
    <meta name="robots" content="index, follow" />
    <!-- *Open Graph Meta Tags for Social Media* -->
    <meta property="og:title" content="DoctorHub - Đặt lịch khám và tư vấn sức khỏe" />
    <meta property="og:description"
        content="DoctorHub giúp bạn dễ dàng đặt lịch khám bệnh và nhận tư vấn sức khỏe từ các bác sĩ uy tín." />
    <meta property="og:image" content="URL_of_image_for_social_sharing" />
    <meta property="og:url" content="https://www.doctorhub.com" />
    <meta property="og:type" content="website" />
    <!-- *Twitter Card Meta Tags* -->
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:title" content="DoctorHub - Đặt lịch khám và tư vấn sức khỏe" />
    <meta name="twitter:description"
        content="Đặt lịch khám bệnh và tư vấn sức khỏe trực tuyến với DoctorHub, giúp bạn chăm sóc sức khỏe dễ dàng và hiệu quả." />
    <meta name="twitter:image" content="URL_of_image_for_twitter_card" />
    <meta name="60552469035-27c42t2tcr98qbmp27b6r2tti6b8vvql.apps.googleusercontent.com"
        content="YOUR_GOOGLE_CLIENT_ID" />

    <!-- *Title* -->
    <title>DoctorHub - Đặt Lịch Khám và Tư Vấn Sức Khỏe</title>
    <!-- *Favicon* -->
    <link rel="icon" href="./assets/images/Logo/DoctorHub.png" type="image/x-icon" />
    <!-- *Liên kết Bootstrap CSS* -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
    <!-- *Liên kết RemixIcon* -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/4.6.0/remixicon.css" rel="stylesheet" />
    <!-- *Splide CSS* -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/css/splide.min.css" />
    <!-- *Fontawesome* -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" />
    <!-- *LazySizes* -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lazysizes/5.3.2/lazysizes.min.js" async=""></script>
    <!-- Toastr CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" />

    <!-- jQuery (yêu cầu cho Toastr) -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- Toastr JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

    <!-- *Stylesheets* -->
    <link rel="stylesheet" href="./assets/css/style.css" />
    <link rel="stylesheet" href="./assets/css/base.css" />
    <link rel="stylesheet" href="./assets/css/responsive.css" />
    <link rel="stylesheet" href="./assets/css/animation.css" />
    <!-- *Mobile Optimization* -->
    <meta name="mobile-web-app-capable" content="yes" />
    <meta name="theme-color" content="#0d6efd" />
    <style>
    .user-profile {
        display: flex;
        align-items: center;
        gap: 8px;
        font-weight: 500;
    }

    .user-profile i {
        font-size: 1.2rem;
    }

    .dropdown-menu {
        min-width: 150px;
    }

    .dropdown-item {
        font-size: 0.9rem;
        padding: 8px 15px;
    }

    .dropdown-item:hover {
        background-color: #f8f9fa;
    }
    </style>
</head>

<body>
    <!-- *Navbar* -->
    <header class="header">
        <div class="container">
            <div class="topbar py-3 border-bottom bg-white">
                <div class="container d-flex justify-content-between align-items-center">
                    <div class="contact-info small text-muted d-flex">
                        <strong>Email:</strong>
                        <a href="mailto:vaniizit.work@gmail.com?subject=Yêu%20cầu%20được%20hỗ%20trợ%20từ%20website%20DoctorHub"
                            class="topbar__mail">vaniizit.work@gmail.com</a>
                        |
                        <strong class="ms-1 d-none d-md-flex">Hotline:
                            <a href="tel:+84 252 032 375"
                                class="text-decoration-none cart__home--phone text-dark fw-bold">+84 252 032 375</a>
                        </strong>
                    </div>
                    <div class="user-actions d-flex align-items-center gap-3">
                        <div class="g-signin2" data-onsuccess="onSignIn"></div>
                    </div>
                </div>
            </div>

            <nav class="navbar navbar-expand-lg navbar-light">
                <a class="navbar-brand navbar__link d-flex align-items-center" href="/Doctor_Hubs/index.php">
                    <img data-src="./assets/images/Logo/DoctorHub.png" alt="Logo" width="30" height="24"
                        class="d-inline-block align-text-top img-fluid navbar__logo lazyload" />
                    DoctorHub
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav" style="justify-content: end">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="/DoctorHubs/index.php?action=home">Trang Chủ</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/DoctorHubs/index.php?action=book">Đặt Lịch Khám</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/DoctorHubs/index.php?action=consultation">Tư Vấn Sức Khỏe</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/DoctorHubs/index.php?action=services">Dịch Vụ Y Tế</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/DoctorHubs/index.php?action=contact">Liên Hệ</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/DoctorHubs/index.php?action=blog">Blog</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/DoctorHubs/index.php?action=shop">Shop</a>
                        </li>
                        <!-- User Info -->
                        <li class="nav-item dropdown">
                            <?php if (isset($_SESSION['username']) && !empty($_SESSION['username'])): ?>
                            <a class="nav-link dropdown-toggle user-profile" href="#" id="userDropdown" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="fa fa-user"></i> <?= htmlspecialchars($_SESSION['username']) ?>
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="userDropdown">
                                <li><a class="dropdown-item" href="/DoctorHubs/index.php?action=dashboard">Tài
                                        khoản</a></li>
                                <li><a class="dropdown-item" href="/index.php?action=logout">Đăng xuất</a>
                                </li>
                            </ul>
                            <?php else: ?>
                            <a class="nav-link" href="/DoctorHubs/index.php?action=signIn">Đăng nhập</a>
                            <?php endif; ?>
                        </li>
                        <!-- Cart Icon -->
                        <li class="nav-item">
                            <a class="nav-link position-relative" href="/Doctor_Hubs/index.php?action=cart">
                                <i class="fa fa-shopping-cart"></i>
                                <span
                                    class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                                    0
                                </span>
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </header>

    <!-- *SplideJS Scripts* -->
    <script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/js/splide.min.js"></script>
    <!-- *Popper* -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"
        integrity="sha384-JGLZOLoMCs5hQdIb2Rlp+vgbp7NjPR8tW3mv4TqRfj7sG04O1LYljX29lvH9acX7" crossorigin="anonymous">
    </script>
    <!-- *Bootstrap* -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <!-- *Javascript* -->
    <script src="./assets/javascript/main.js" type="module"></script>
    <script src="./services/handleModal.js"></script>
    <script src="./services/handleSlider.js"></script>
    <!-- *Google API* -->
    <script src="https://apis.google.com/js/platform.js" async defer></script>
</body>

</html>