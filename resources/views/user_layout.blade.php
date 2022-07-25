
<!DOCTYPE HTML>
<html lang="en-US">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Favicon -->
		<link rel="apple-touch-icon" sizes="57x57" href="favicon/apple-icon-57x57.png">
        <link rel="apple-touch-icon" sizes="60x60" href="favicon/apple-icon-60x60.png">
        <link rel="apple-touch-icon" sizes="72x72" href="favicon/apple-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="76x76" href="favicon/apple-icon-76x76.png">
        <link rel="apple-touch-icon" sizes="114x114" href="favicon/apple-icon-114x114.png">
        <link rel="apple-touch-icon" sizes="120x120" href="favicon/apple-icon-120x120.png">
        <link rel="apple-touch-icon" sizes="144x144" href="favicon/apple-icon-144x144.png">
        <link rel="apple-touch-icon" sizes="152x152" href="favicon/apple-icon-152x152.png">
        <link rel="apple-touch-icon" sizes="180x180" href="favicon/apple-icon-180x180.png">
        <link rel="icon" type="image/png" sizes="192x192"  href="/sanpham/logo.jpg">
        <link rel="icon" type="image/png" sizes="32x32" href="/sanpham/logo.jpg">
        <link rel="icon" type="image/png" sizes="96x96" href="/sanpham/logo.jpg">
        <link rel="icon" type="image/png" sizes="16x16" href="/sanpham/logo.jpg">
        <link rel="manifest" href="favicon/manifest.json">
        <meta name="msapplication-TileColor" content="#ffffff">
        <meta name="msapplication-TileImage" content="favicon/ms-icon-144x144.png">
        <meta name="theme-color" content="#ffffff">
		<title>Welcome | HNJ</title>
		<!-- Font Awesome CSS -->
		<link rel="stylesheet" type="text/css" href="/backend/assets/css/font-awesome.min.css" media="all" />
		<!-- Bootstrap CSS -->
		<link rel="stylesheet" type="text/css" href="/backend/assets/css/bootstrap.min.css" media="all" />
		<!-- slicknav CSS -->
		<link rel="stylesheet" href="/backend/assets/css/slicknav.min.css">
		<!-- Owl carousel CSS -->
		<link rel="stylesheet" href="/backend/assets/css/owl.carousel.min.css">
		<!-- Lightbox CSS -->
		<link rel="stylesheet" href="/backend/assets/css/lightbox.min.css"/>
		<!-- Bx slider CSS -->
		<link rel="stylesheet" href="/backend/assets/css/jquery.bxslider.css">
		<!-- Animate CSS -->
		<link rel="stylesheet" href="/backend/assets/css/animate.min.css">
		<!-- Main style CSS -->
		<link rel="stylesheet" type="text/css" href="/backend/assets/css/style.css" media="all" />
		<!-- Responsive CSS -->
		<link rel="stylesheet" type="text/css" href="/backend/assets/css/responsive.css" media="all" />
        <!-- Bootstrap -->



        <link href="/Content/css/bootstrap.min.css" rel="stylesheet" />
        <link href="/Content/css/chosen.min.css" rel="stylesheet" />
        <link href="/Content/css/font-awesome.min.css" rel="stylesheet" />
        <link href="/Content/css/ionicons.min.css" rel="stylesheet" />
        <link href="/Content/css/jquery-ui.css" rel="stylesheet" />
        <link href="/Content/css/meanmenu.min.css" rel="stylesheet" />
        <link href="/Content/css/owl.carousel.min.css" rel="stylesheet" />
        <link href="/Content/css/slick.css" rel="stylesheet" />
        <link href="/Content/css/style.css" rel="stylesheet" />
        <link href="/Content/css/themify-icons.css" rel="stylesheet" />
        <link href="/Content/css/responsive.css" rel="stylesheet" />
        <link href="/Content/css/animate.css" rel="stylesheet" />
        <script src="/Content/js/vendor/modernizr-2.8.3.min.js"></script>



        @yield('css')
	</head>
	<body ng-app="myapptt" ng-controller="mycontrollertt">
		<!-- Page loader -->
	    <div id="preloader"></div>
		<!-- header area start -->
		<header class="header-area ptb-15">
			<div class="container">
				<div class="row">
					<div class="col-md-7">
					    <div class="header-left-content">
					        <ul>
					            <li><a href="#"><i class="fa fa-phone"></i>0358 344 882</a></li>
					            <li><a href="#"><i class="fa fa-envelope"></i>dodanhtiep1007@gmail.com</a></li>
					        </ul>
					    </div>
					</div>
					<div class="col-md-5">
					    <div class="header-right-content">
					        <ul>
					            <li>
                                    <select>
                                        <option value="En">En</option>
                                        <option value="Bd">Vn</option>
                                    </select>
                                </li>
								<li><a href="/giohang" class="krishok-cart"><i class="fa fa-shopping-cart"></i></a></li>
					            <li><a href="#" class="popup-show">Login</a>
					                <div class="login-popup login-form contact-form">
                                        <h4>Login</h4>
                                        <form action="#">
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <div class="contact-container">
                                                        <input type="email" placeholder="Email Address">
											            <i class="fa fa-envelope"></i>
                                                    </div>
                                                </div>
                                                <div class="col-sm-12 mb-15">
                                                    <div class="contact-container">
                                                        <input type="password" placeholder="Password">
											            <i class="fa fa-eye"></i>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 text-left mb-15">
                                                    <input type="checkbox">
                                                    <p>Remember me</p>
                                                </div>
                                                <div class="col-sm-6 text-right mb-15">
                                                    <div class="popup-light">
                                                        <p>Forget Password ?</p>
                                                    </div>
                                                </div>
                                                <div class="col-sm-12 mb-30">
                                                    <button class="krishok-btn">LOGIN</button>
                                                </div>
                                                <div class="col-sm-12 mb-15">
                                                    <div class="sign-with">
                                                        <p>Or Sign In With</p>
                                                    </div>
                                                </div>
                                                <div class="col-sm-12">
                                                    <a href="#" class="login-with"><i class="fa fa-facebook"></i></a>
                                                    <a href="#" class="login-with"><i class="fa fa-twitter"></i></a>
                                                </div>
                                                <div class="col-sm-12 mt-30">
                                                    <p>Don’t Have an Account ? <a href="#" class="registration-form-show">Create Now</a></p>
                                                </div>
                                            </div>
                                        </form>
					                    <div class="popup-close"><i class="fa fa-close"></i></div>
					                </div>
					                <div class="login-popup registration-form contact-form">
                                        <h4>Create Account</h4>
                                        <form action="#">
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <div class="contact-container">
                                                        <input type="text" placeholder="Username">
											            <i class="fa fa-user"></i>
                                                    </div>
                                                </div>
                                                <div class="col-sm-12">
                                                    <div class="contact-container">
                                                        <input type="email" placeholder="Email Address">
											            <i class="fa fa-envelope"></i>
                                                    </div>
                                                </div>
                                                <div class="col-sm-12">
                                                    <div class="contact-container">
                                                        <input type="password" placeholder="Password">
											            <i class="fa fa-eye"></i>
                                                    </div>
                                                </div>
                                                <div class="col-sm-12 mb-15">
                                                    <input type="password" placeholder="Retype Password">
                                                </div>
                                                <div class="col-sm-12 text-left mb-15">
                                                    <input type="checkbox">
                                                    <p>Agree with <span>terms and condition</span></p>
                                                </div>
                                                <div class="col-sm-12 mb-20">
                                                    <button class="krishok-btn">Create Account</button>
                                                </div>
                                                <div class="col-sm-12">
                                                    <p>Already Have an Account ?  <a href="#" class="login-form-show">Login Now</a></p>
                                                </div>
                                            </div>
                                        </form>
					                    <div class="popup-close"><i class="fa fa-close"></i></div>
					                </div>
					            </li>
					        </ul>
					    </div>
					</div>
				</div>
			</div>
		</header><!-- header area end -->
		<!-- menu area start -->
		<div class="menubar">
			<div class="container">
				<div class="row">
					<div class="col-md-2 col-sm-6">
						<div class="logo">
							<a href="/TT"><img src="/sanpham/logo.jpg" style="height: 85px; margin: -50px 0px -25px 0px;" alt="logo"></a>
						</div>
					</div>
					<div class="col-md-10 col-sm-6">
						<div class="responsive-menu"></div>
					    <div class="mainmenu">
                            <ul id="primary-menu">
                                <li id="tt" ><a href="/TT">Trang Chủ</a></li>
                                
                                <li id="tt1"><a href="/LoaiSanPham/1">Sản Phẩm<i class="fa fa-angle-down"></i></a>
									<ul>
										<li><a href="/LoaiSanPham/2">Khuyên Tai</a></li>
										<li><a href="/LoaiSanPham/3">Dây Chuyền</a></li>
                                        <li><a href="/LoaiSanPham/4">Vòng Pandora</a></li>
										<li><a href="/LoaiSanPham/5">Nhẫn Đôi</a></li>
                                        <li><a href="/LoaiSanPham/6">Lắc Tay Nữ</a></li>
									</ul>
								</li>
                                
                                <li><a href="#">Các Trang<i class="fa fa-angle-down"></i></a>
									<ul>
                                        <li><a href="/tintuc">Tin Tức</a></li>
										<li><a href="/lienhe">Liên Hệ</a></li>
										<li><a href="/giohang">Giỏ Hàng</a></li>
										<li><a href="/thanhtoan">Thanh Toán</a></li>
									</ul>
								</li>
                                <li><a href="/tintuc">Tin Tức</a></li>
                                <li><a href="/lienhe">Liên Hệ</a></li>
                                <li>
                                    <button type="submit" class="toggle-pade">
                                        <i class="fa fa-search"></i>
                                    </button>
                                    <form class="navbar-form form-box" role="search">
                                        <input type="text" placeholder="Search">
                                    </form>
                                </li>
                            </ul>
					    </div>
					</div>
				</div>
			</div>
		</div><!-- menu area end -->
		@yield("content")
		<!-- footer area start -->
		<footer class="site-footer pt-75">
			<div class="container">
				<div class="row">
                    <div class="col-lg-5">
                        <div class="widget">
                            <h5 class="widget-title"><a href="#">Về Chúng Tôi</a></h5>
                            <p>Luôn mang lại trải nghiêm tốt nhất cho quý khách hàng. Không hài lòng về sản phẩm vui lòng liên hệ với chúng tôi qua thông tin trên website. </p>
                            <div class="widget-icon">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-pinterest"></i></a>
                                <a href="#"><i class="fa fa-linkedin"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <div class="widget">
                            <h5 class="widget-title"><a href="#">Giữ Liên Lạc</a></h5>
                            <ul>
                                <li>Địa Chỉ : Cầu tình, huyên Mỹ Hào, tỉnh Hưng Yên</li>
                                <li>Số Điện Thoại : 0358 344 882  </li>
                                <li>Email : dodanhtiep1007@gmail.com</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="widget">
                            <h5 class="widget-title"><a href="#">Instagram Feed</a></h5>
                            <div class="img-gallery">
                                <div class="single-img-gallery">
                                    <a href="#"><img src="/sanpham/nhandoi/doi1.jpg" alt=""></a>
                                </div>
                                <div class="single-img-gallery">
                                    <a href="#"><img src="/sanpham/nhandoi/doi2.jpg" alt=""></a>
                                </div>
                                <div class="single-img-gallery">
                                    <a href="#"><img src="/sanpham/nhandoi/doi3.jpg" alt=""></a>
                                </div>
                                <div class="single-img-gallery">
                                    <a href="#"><img src="/sanpham/nhandoi/doi4.jpg" alt=""></a>
                                </div>
                                <div class="single-img-gallery">
                                    <a href="#"><img src="/sanpham/nhandoi/doi5.jpg" alt=""></a>
                                </div>
                                <div class="single-img-gallery">
                                    <a href="#"><img src="/sanpham/nhandoi/doi6.jpg" alt=""></a>
                                </div>
                            </div>
                        </div>
                    </div>
				</div>
			</div>
			<div class="footer-bottom-bg ptb-20">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="footer-bottom">
                                <p>Copyright © 2017 - All Right Reserved</p>
                            </div>
                        </div>
                    </div>
                </div>
			</div>
		</footer><!-- footer area end -->
		<!-- jquery main JS -->
		<script src="/backend/assets/js/jquery.min.js"></script>
		<!-- Poppers JS -->
		<script src="/backend/assets/js/popper.min.js"></script>
		<!-- Bootstrap JS -->
		<script src="/backend/assets/js/bootstrap.min.js"></script>
		<!-- slicknav JS -->
		<script src="/backend/assets/js/jquery.slicknav.min.js"></script>
		<!-- owl carousel JS -->
		<script src="/backend/assets/js/owl.carousel.min.js"></script>
		<!-- Isotope JS -->
		<script src="/backend/assets/js/isotope-3.0.4.min.js"></script>
		<!-- Bx slider JS -->
		<script src="/backend/assets/js/jquery.bxslider.min.js"></script>
		<!-- lightbox JS -->
		<script src="/backend/assets/js/lightbox.min.js"></script>
		<!-- Wow JS -->
		<script src="/backend/assets/js/wow-1.3.0.min.js"></script>
        <!-- Google map api -->
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCXNQbOV3ZGoxAQ_H2FtRAS_i9yOdZFfBo&region=GB"></script>
		<!-- Imagezoom JS -->
		<script src="/backend/assets/js/jquery.imagezoom.js"></script>
		<!-- main JS -->
		<script src="/backend/assets/js/main.js"></script>
        <!-- Jquery -->

        

        
	</body>
</html>