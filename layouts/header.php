
<!DOCTYPE html>
<html>
    <head lang="en">
        <meta charset="UTF-8">
        <title>Home - Shop project by nhom 11</title>
        <meta name="author" content="ThemePunch" />
        <meta name="description" content="The Garden theme tempalte">
        <meta name="keywords" content="The Garden theme template">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!--Icons fonts-->
        <link href="<?php echo base_url() ?>public/frontend/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet">
        <link href="<?php echo base_url() ?>public/frontend/vendor/themify-icons/themify-icons.css" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400i,700,700i,900,900i|Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i|Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
        <!--Styles-->
        <link href="<?php echo base_url() ?>public/frontend/vendor/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
        <link href="<?php echo base_url() ?>public/frontend/vendor/animsition/dist/css/animsition.min.css" rel="stylesheet">
        <link href="<?php echo base_url() ?>public/frontend/vendor/animate.css/source/slide_fwd_center/slide_fwd_center.css" rel="stylesheet">
        <link href="<?php echo base_url() ?>public/frontend/vendor/owl-carousel/css/owl.carousel.css" rel="stylesheet">
        <link href="<?php echo base_url() ?>public/frontend/vendor/css-hamburgers/css/hamburgers.min.css" rel="stylesheet">
        <link href="<?php echo base_url() ?>public/frontend/vendor/slick/css/slick.css" rel="stylesheet">
        <link href="<?php echo base_url() ?>public/frontend/vendor/range_filter/css/jquery-ui.css" rel="stylesheet">
        <!-- Revolution -->
        <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>public/frontend/vendor/slider-revolution/css/settings.css">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>public/frontend/vendor/slider-revolution/css/layers.css">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>public/frontend/vendor/slider-revolution/css/navigation.css">
        <!--Theme style-->
        <link href="<?php echo base_url() ?>public/frontend/css/main.css"  rel="stylesheet">
        <link href="<?php echo base_url() ?>public/frontend/css/responsive.css"  rel="stylesheet">
    </head>
    <body>
        <div class="page-loader">
            <div class="spinner">
              <div class="rect1"></div>
              <div class="rect2"></div>
              <div class="rect3"></div>
              <div class="rect4"></div>
              <div class="rect5"></div>
            </div>
        </div>
        <div class="home-top">
                    <div class="container">
                        <div class="header-top clearfix">
                            <div class="header-tleft pull-left">
                                <!-- Top header -->
                                <div class="link-list link-list-first">
                                    <span><i class="fa fa-phone" aria-hidden="true"></i>(+84) 968 123 456</span>
                                </div>
                                <?php if (isset($_SESSION['name_user'])): ?>
                                    <div class="link-list">
                                        <span><i class="fa fa-user" aria-hidden="true"></i>Xin chào : <?php echo $_SESSION['name_user']; ?></span>
                                    </div>
                                    <div class="link-list ">
                                        <span><i class="fa fa-info" aria-hidden="true"></i>Hôm nay bạn mua gì nào ?</span>
                                    </div>
                                <?php else : ?>
                                    <div class="link-list">
                                        <span><i class="fa fa-home" aria-hidden="true"></i>Học viện kỹ thuật Mật mã, 141 Chiến Thắng - Thanh Xuân - Hà nội</span>
                                    </div>
                                    <div class="link-list ">
                                        <span><i class="fa fa-clock-o" aria-hidden="true"></i>Monday - Saturday: 7.AM - 5.PM</span>
                                    </div>
                                <?php endif; ?>
                                <!-- end -->
                            </div>
                            <div class="header-tright pull-right">
                                <ul>
                                    <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-skype" aria-hidden="true"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
        <div class="the-garden the-garden-planting">
            <div class="search">
                <input type="text" class="ip-search" placeholder="Search for...">
            </div>
            <header id="header" class="header_service">
                <div class="home-menu">
                    <nav class="navbar-core navbar-white navbar-v1 headroom headroom--not-bottom headroom--pinned headroom--top">
                        <div class="s-wrapper">
                            <div class="container">
                                <div class="s-inner clearfix">
                                    <div class="pull-left nav-left">
                                        <div class="logo">
                                            <a href="index.php">
                                            <img src="<?php echo base_url() ?>public/frontend/images/Home_Service/logo.png" alt="logo">
                                            </a>
                                        </div>
                                    </div>
                                    <button class="hamburger has-animation hamburger--collapse" id="toggle-icon">
                                    <span class="hamburger-box">
                                    <span class="hamburger-inner"></span>
                                    </span>
                                    </button>
                                    <div class="pull-left nav-right">
                                        <div class="navbar-main">
                                            <ul class="navbar-menu">
                                                <!-- Thanh menu bar -->
                                                <li class="dropdown">
                                                    <a href="index.php" class="active">Home</a>
                                                    <i class="fa fa-angle-down"></i>
                                                </li>
                                                <li class="dropdown">
                                                    <a href="#" >Danh mục sản phẩm</a>
                                                    <i class="fa fa-angle-down"></i>

                                                    <ul class="dropdown-menu home-list">
                                                        <?php foreach($category as $item) :?>
                                                            <li><a href="danh-muc-san-pham.php?id=<?php echo $item['id'] ?>"><?php echo $item['name'] ?></a></li>
                                                        <?php endforeach; ?>
                                                    </ul>
                                                </li>
                                                <li class="dropdown">
                                                    <a href="#" >Giỏ hàng</a>
                                                    <i class="fa fa-angle-down"></i>
                                                    <ul class="dropdown-menu home-list">
                                                        <li class="menu-child">
                                                            <a href="gio-hang.php">Giỏ hàng của bạn</a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li class="dropdown">
                                                    <a href="#" >Thành viên</a>
                                                    <i class="fa fa-angle-down"></i>
                                                    <ul class="dropdown-menu home-list">
                                                        <li class="menu-child">
                                                            <a href="dang-ky.php">Đăng ký thành viên</a>
                                                        </li>
                                                        <li class="menu-child">
                                                            <a href="dang-nhap.php">Đăng nhập</a>
                                                        </li>
                                                        <li class="menu-child">
                                                            <a href="thoat.php">Đăng xuất</a>
                                                        </li>
                                                        <li class="menu-child">
                                                            <a href="admin/index.php">Dành cho người quản lý Website</a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li class="dropdown">
                                                    <a href="#">Liên hệ với chúng tôi</a>
                                                    <i class="fa fa-angle-down"></i>
                                                    <ul class="dropdown-menu home-list home-listV2">
                                                        <li class="menu-child">
                                                            <a href="#">Contact Us</a>
                                                        </li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="pull-right u-cart">
                                        <div class="u-shop-cart ic-enjoy1">
                                            <div class="ic-cart">
                                                <i class="fa fa-shopping-cart fa-shop" aria-hidden="true"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mini-cart">
                                        <div class="wd-cart-wrap">
                                            <div class="wd-cart-content">
                                                <div class="wd-cart-item">
                                                    <div class="p-image">
                                                        <a href="#"><img src="<?php echo base_url() ?>public/frontend/images/Home_Service/img-cart.jpg" alt="mini cart"></a>
                                                    </div>
                                                    <div class="p-content">
                                                        <h3 class="p-content-title"><a href="#">Aloe vera - herbal</a></h3>
                                                        <p>2  x $140.00</p>
                                                        <a href="#" class=""><i class="fa fa-trash p-content-icon" aria-hidden="true"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="wd-cart-panel-footer">
                                                <p class="total-cart">Total:  $280.00</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </nav>
                </div>
            </header>