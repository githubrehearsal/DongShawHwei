<?php
    include "config.php";
?>
<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="董小蕙的藝術 || 老院子•韶光•年華">
    <meta name="keywords" content="董小蕙的藝術, 董小蕙, 董小蕙的作品">
    <meta name="author" content="regaltheme.com">

    <title>董小蕙的藝術 || 老院子•韶光•年華</title>

    <!-- favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">

    <!-- style css -->
    <link rel="stylesheet" href="style.css">
    <!-- custom css -->
    <link rel="stylesheet" href="assets/css/custom.css">
    <!-- modernizr js -->
    <script src="assets/js/vendor/modernizr-2.8.3.min.js"></script>

</head>

<body>
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

    <!-- Loading Bar Start -->
    <div id="loading-wrap">
        <div class="loading-effect"></div>
    </div>
    <!-- Loading Bar End -->
    <!-- Loading Bar End -->
    <!-- Header Section Start -->
    <header class="header-style-1">
        <div class="header-top active-sticky">
            <div class="container">
                <div class="row">
                    <div class="col-xs-8 col-sm-4 col-md-2">
                        <div class="left">
                            <div class="logo">
                                <a href="index.php"><img src="assets/img/logo.svg" alt="董小蕙的藝術">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-8 col-md-10">
                        <div class="right">
                            <nav class="mainmenu menu-hover-1 pull-right">
                                <div class="navbar-header">
                                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                    </button>
                                </div>
                                <div class="navbar-collapse collapse clearfix">
									<ul class="navigation clearfix">
										<?php include $lang['menu']; ?>
										<li class="dropdown"><a><?php echo _('language'); ?></a>
											<ul>
												<li>
													<a href="media01.php?lang=tw">繁體中文</a>
												</li>
												<li>
													<a href="media01.php?lang=en">English</a>
												</li>
											</ul>
										</li>
									</ul>
                                </div>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Header Space -->
    <div class="header-space"></div>
    <!-- Header Section End -->

    <!-- Portfolio Details Section Start -->
    <div class="portfolio-details light-bg section-padding">
        <div class="container">
            <div class="row">
                <?php include $lang['media01']; ?>
            </div>
        </div>
    </div>
    <!-- Portfolio Details Section End -->

	<!-- Footer Section Start -->
	<footer class="footer white-bg ptb-20 clearfix">
		<div class="container">
			<div class="row">
				<div class="col-xs-12">
					<?php include $lang['footer']; ?>
				</div>
			</div>
		</div>
	</footer>
	<!-- Footer Section End -->

    <!-- All JS Here -->
    <!-- jQuery Latest Version -->
    <script src="assets/js/vendor/jquery-1.12.4.min.js"></script>
    <!-- Bootstrap JS -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- Isotope -->
    <script src="assets/js/isotope.pkgd.js"></script>
    <!-- Validate -->
    <script src="assets/js/jquery.validate.min.js"></script>
    <!-- Slick Slider JS -->
    <script src="assets/js/slick.min.js"></script>
    <!-- Plugins JS -->
    <script src="assets/js/plugins.js"></script>
    <!-- main JS -->
    <script src="assets/js/main.js"></script>
</body>

</html>