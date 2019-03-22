<!DOCTYPE html>
<html>
<head>
	<!-- set the encoding of your site -->
	<meta charset="utf-8">
	<!-- set the viewport width and initial-scale on mobile devices -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0 user-scalable=no">
	<title>VIRAL</title>
	<link rel="apple-touch-icon-precomposed" sizes="57x57" href="favicon/apple-touch-icon-57x57.png" />
	<link rel="apple-touch-icon-precomposed" sizes="114x114" href="favicon/apple-touch-icon-114x114.png" />
	<link rel="apple-touch-icon-precomposed" sizes="72x72" href="favicon/apple-touch-icon-72x72.png" />
	<link rel="apple-touch-icon-precomposed" sizes="144x144" href="favicon/apple-touch-icon-144x144.png" />
	<link rel="apple-touch-icon-precomposed" sizes="60x60" href="favicon/apple-touch-icon-60x60.png" />
	<link rel="apple-touch-icon-precomposed" sizes="120x120" href="favicon/apple-touch-icon-120x120.png" />
	<link rel="apple-touch-icon-precomposed" sizes="76x76" href="favicon/apple-touch-icon-76x76.png" />
	<link rel="apple-touch-icon-precomposed" sizes="152x152" href="favicon/apple-touch-icon-152x152.png" />
	<link rel="icon" type="image/png" href="favicon/favicon-196x196.png" sizes="196x196" />
	<link rel="icon" type="image/png" href="favicon/favicon-96x96.png" sizes="96x96" />
	<link rel="icon" type="image/png" href="favicon/favicon-32x32.png" sizes="32x32" />
	<link rel="icon" type="image/png" href="favicon/favicon-16x16.png" sizes="16x16" />
	<link rel="icon" type="image/png" href="favicon/favicon-128.png" sizes="128x128" />
	<meta name="application-name" content="&nbsp;"/>
	<meta name="msapplication-TileColor" content="#FFFFFF" />
	<meta name="msapplication-TileImage" content="mstile-144x144.png" />
	<meta name="msapplication-square70x70logo" content="mstile-70x70.png" />
	<meta name="msapplication-square150x150logo" content="mstile-150x150.png" />
	<meta name="msapplication-wide310x150logo" content="mstile-310x150.png" />
	<meta name="msapplication-square310x310logo" content="mstile-310x310.png" />
	<!-- <link href="https://fonts.googleapis.com/css?family=Rubik:300,300i,400,400i,500,500i,700,700i,900,900i&amp;subset=cyrillic" rel="stylesheet"> -->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&amp;subset=cyrillic" rel="stylesheet">
	<!-- include the site animate stylesheet -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- include the site bootstrap stylesheet -->
	<link rel="stylesheet" href="css/bootstrap.css">
	<!-- include the font awesome stylesheet -->
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<!-- for services pages -->
	<link rel="stylesheet" href="css/old-style.css">
	<!-- include the site stylesheet -->
	<link rel="stylesheet" href="style.css">
	<!-- include the site fonts stylesheet -->
	<link rel="stylesheet" href="css/fonts.css">
	<!-- include the site responsive stylesheet -->
	<link rel="stylesheet" href="css/responsive.css">
	<!-- include the site color stylesheet -->
	<link rel="stylesheet" href="css/color/color.css">
	<!-- lib -->
	<link rel="stylesheet" href="css/jcf.css">
	
</head>
<body>
	<!-- main container of all the page elements -->
	<div id="wrapper">
		<div id="shadow-bg"></div>
		<div class="order-form-wrapper f1">
			<div class="wpcf7">
				<form id='order-form' class="wpcf7-form f-contact-form">
					<div class="btn-form-close"><img src="images/close-icon-dk.svg" alt=""></div>
					<h3>Мы будем рады услышать Вас</h3>
					<div class="rows">
						<span class="wpcf7-form-control-wrap text-field-required">
							<input type="text" name="orderName" id="orderName" value="" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required text-field-class wpcf7-use-title-as-watermark" size="12" placeholder="Имя">
						</span>
					</div>
					<div class="rows">
						<span class="wpcf7-form-control-wrap text-field-required">
							<input type="text" name="orderPhone" id="orderPhone" value="" class="masked-phone wpcf7-form-control wpcf7-text wpcf7-validates-as-required text-field-class wpcf7-use-title-as-watermark" size="12" data-rule-phonevalidate="1" data-rule-phoneverified="1" placeholder="Телефон" data-mask="+38 (099) 999-99-99" minlength="19" maxlength="19" autocomplete="off">
						</span>
					</div>
					<div class="rows">
						<span class="wpcf7-form-control-wrap Emailfield">
							<input type="email" name="orderEmail" id="orderEmail"  value="" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email email-class wpcf7-use-title-as-watermark" size="12" placeholder="Email" />
						</span>
					</div>
					<div class="rows">
						<span class="wpcf7-form-control-wrap textarea">
							<textarea name="orderMessage" id="orderMessage"  class="wpcf7-form-control wpcf7-textarea textarea-class wpcf7-use-title-as-watermark" rows="9" cols="39" placeholder="Расскажите о своей идее"></textarea>
						</span>
					</div>
					<input id="submit" class="btn-submit-order" type="submit" value="ОТПРАВИТЬ">
					<div class="done-massage">
						<strong>Спасибо!</strong> Мы получили Ваше письмо.
					</div>
				</form>
			</div>
		</div>
		<!-- header of the page -->
		<header id="header" class="sticky-header">
			<div class="max-container">
				<!-- main site logo -->
				<div class="navbar-header">
					<div id="nav-icon1">
						<span></span>
						<span></span>
						<span></span>
					  </div>
				</div>
				<a href="#" class="btn-contact mobile">Связаться</a>
				<strong class="logo">
					<a href="<?php echo "http://" . $_SERVER['SERVER_NAME'] ?>">
						<i class="icon">#</i>
						<img src="images/logo.svg" alt="Viral">
					</a>
				</strong>
				<!-- align-right -->
				<div class="align-right nav-holder">
					<nav class="navbar navbar-default">
						<div class="container-fluid">
							<!-- Collect the nav links, forms, and other content for toggling -->
							<ul class="nav navbar-nav">
								<li class="dropdown">
									<a href="<?php echo "http://" . $_SERVER['SERVER_NAME'] ?>" class="dropdown-toggle" role="button" aria-haspopup="false" aria-expanded="false">Главная <!--<span class="caret"></span>--></a>
									 <!-- <ul class="dropdown-menu">
										<li><a href="index.html">Home 1</a></li>
										<li><a href="index2.html">One Page</a></li>
									 </ul> -->
								</li>
								<li class="dropdown">
									<a  class="dropdown-toggle" role="button" aria-haspopup="true" aria-expanded="false">Услуги <span class="caret"></span></a>
									 <ul class="dropdown-menu custom-dropdown">
										<li><a href="marketing">Маркетинг</a></li>
										<li><a href="design">Дизайн</a></li>
										<li><a href="development">Разработка</a></li>
									 </ul>
								</li>
								<li class="dropdown">
									<a href="/portfolio" class="dropdown-toggle" role="button" aria-haspopup="true" aria-expanded="false">Портфолио <!--<span class="caret"></span>--></a>
									 <!-- <ul class="dropdown-menu">
										<li><a href="portfolio.html">Portfolio Free Style</a></li>
										<li><a href="portfolio-grid.html">Portfolio 1 Column</a></li>
										<li><a href="portfolio-2grid.html">Portfolio 2 Column</a></li>
										<li><a href="portfolio-3grid.html">Portfolio 3 Column</a></li>
										<li><a href="portfolio-detail.html">Portfolio Detail</a></li>
									 </ul> -->
								</li>
								<li class="dropdown">
									<a href="/blog" class="dropdown-toggle" role="button" aria-haspopup="true" aria-expanded="false">Блог <!--<span class="caret"></span>--></a>
									 <!-- <ul class="dropdown-menu">
										<li>
											<a href="blog.html">Blog Style1</a>
											<ul class="drop">
												<li><a href="blog.html">Blog Sidebar</a></li>
												<li><a href="blog-left-sidebar.html">Blog Left Sidebar</a></li>
												<li><a href="blog-right-sidebar.html">Blog Right Sidebar</a></li>
											</ul>
										</li>
										<li>
											<a href="blog2.html">Blog Style2</a>
											<ul class="drop">
												<li><a href="blog2.html">Blog Sidebar</a></li>
												<li><a href="blog2-left-sidebar.html">Blog Left Sidebar</a></li>
												<li><a href="blog2-right-sidebar.html">Blog Right Sidebar</a></li>
											</ul>
										</li>
										<li>
											<a href="blog3.html">Blog Style3</a>
											<ul class="drop">
												<li><a href="blog3-left-sidebar.html">Blog Sidebar</a></li>
												<li><a href="blog3-left-sidebar.html">Blog Left Sidebar</a></li>
												<li><a href="blog3-right-sidebar.html">Blog Right Sidebar</a></li>
											</ul>
										</li>
										<li>
											<a href="blog-detail.html">Blog Detail</a>
											<ul class="drop">
												<li><a href="blog-detail.html">Blog Detail</a></li>
												<li><a href="blog3-left-sidebar.html">Blog Left Sidebar</a></li>
												<li><a href="blog3-right-sidebar.html">Blog Right Sidebar</a></li>
											</ul>
										</li>
										<li><a href="blog.html">Blog Link 3</a></li>
										<li><a href="blog.html">Blog Link 4</a></li>
									 </ul> -->
								</li>
								<!-- <li class="dropdown">
									<a href="#" class="dropdown-toggle" role="button" aria-haspopup="true" aria-expanded="false">Page <!--<span class="caret"></span>--></a>
									 <!-- <ul class="dropdown-menu">
										<li><a href="aboutus.html">About Me</a></li>
										<li><a href="contact.html">Contact Us</a></li>
										<li><a href="contact2.html">Contact Us 2</a></li>
										<li><a href="shortcodes.html">Short Codes</a></li>
										<li><a href="shortcodes2.html">Short Codes 2</a></li>
										<li><a href="shortcodes3.html">Short Codes 3</a></li>
										<li><a href="shortcodes4.html">Short Codes 4</a></li>
									 </ul> 
								</li> -->
								<li><a href="/aboutus">О нас</a></li>
								<li><a href="/contact">Контакты</a></li>
							</ul>
						</div><!-- /.container-fluid -->
					</nav>
					<div class="search-area">
						<!-- <div class="search-box">
							<a class="search" href="#"><i class="icon-search"><span>search</span></i></a>
							<input type="search" placeholder="Search">
						</div> -->
						<a href="#" class="mail"><i class="icon-mail"><span>mail</span></i></a>
						<a href="#" class="btn-contact"><span>Связаться с нами</span></a>
					</div>
				</div>
			</div>
		</header>
		