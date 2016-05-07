<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>

	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="author" content="SemiColonWeb" />

	<!-- Stylesheets
	============================================= -->
	<!-- <link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700|Roboto:300,400,500,700" rel="stylesheet" type="text/css" />-->
	<link rel="stylesheet" href="./css/bootstrap.css" type="text/css" />
	<link rel="stylesheet" href="./style.css" type="text/css" />

	<!-- One Page Module Specific Stylesheet -->
	<link rel="stylesheet" href="onepage.css" type="text/css" />
	<!-- / -->

	<link rel="stylesheet" href="./css/dark.css" type="text/css" />
	<link rel="stylesheet" href="./css/font-icons.css" type="text/css" />
	<link rel="stylesheet" href="css/et-line.css" type="text/css" />
	<link rel="stylesheet" href="./css/animate.css" type="text/css" />
	<link rel="stylesheet" href="./css/magnific-popup.css" type="text/css" />

	<link rel="stylesheet" href="css/fonts.css" type="text/css" />

	<link rel="stylesheet" href="./css/responsive.css" type="text/css" />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
	<!--[if lt IE 9]>
		<script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
		<![endif]-->
	<!-- STYLE NEW NEWS -FORM -->
	<link rel="stylesheet" href="./css/form-style.css" type="text/css" />

	<!-- External JavaScripts
	============================================= -->
	<script type="text/javascript" src="./js/jquery.js"></script>
	<script type="text/javascript" src="./js/plugins.js"></script>
	<script type="text/javascript" src="jquery-1.7.min.js"></script>
	<!-- Document Title
	============================================= -->
	<title>HandiRecrute</title>

</head>

<body class="stretched side-push-panel">


	<!-- Document Wrapper
	============================================= -->
	<div id="wrapper" class="clearfix">

		<!-- Header
		============================================= -->
		<header id="header" class="full-header static-sticky" data-sticky-class="not-dark" data-sticky-offset="0">

			<div id="header-wrap">

				<div class="container clearfix">

					<div id="primary-menu-trigger"><i class="icon-reorder"></i></div>

					<!-- Logo
					============================================= -->
					<div id="logo">
						<a href="index.php" class="standard-logo" data-dark-logo="images/canvasone-dark.png"><img src="images/canvasone.png" alt="Canvas Logo"></a>
						<a href="index.php" class="retina-logo" data-dark-logo="images/canvasone-dark@2x.png"><img src="images/canvasone@2x.png" alt="Canvas Logo"></a>
					</div><!-- #logo end -->

					<!-- Primary Navigation
					============================================= -->
				<nav id="primary-menu">

						<ul class="one-page-menu" data-easing="easeInOutExpo" data-speed="1250" data-offset="65">
							<li><a href="sub2.php" data-href="#wrapper"><div>News</div></a></li>
							<li><a href="secure.php" data-href="#section-about"><div>Abonneés</div></a></li>
							<li><a href="admin.php" data-href="#section-about"><div>Deconnexion</div></a></li>
						</ul>

					</nav>


				</div>

			</div>

		</header><!-- #header end -->


		<!-- =================     Menu    ========================-->
	
		<div id="wrap">
        <form action="news.php" method="post">
            <fieldset>
                <legend>NEW ENTRY IN THE NEWS </legend>
                <div>
                    <input type="text" name="title" placeholder="Titre"/>
                </div>
                <div>
                    <input type="text" name="auteur" placeholder="Auteur"/>
                </div>
              
                <div>
                     <textarea name="message" placeholder="Message"></textarea>
                </div>    
                <input type="submit" name="submit" value="Send"/>
            </fieldset>    
        </form>
    </div>
	
		<!-- ======================================================================== --> 
		<!-- Footer
		============================================= -->
		
		<footer id="footer" class="dark noborder">


			<div id="copyrights">
				<div class="container center clearfix">
					Copyright HolaColor 2016 | All Rights Reserved
				</div>
			</div>

		</footer><!-- #footer end -->

	</div><!-- #wrapper end -->

	<!-- Go To Top
	============================================= -->
	<div id="gotoTop" class="icon-angle-up"></div>

	<!-- Footer Scripts
	============================================= -->
	<script type="text/javascript" src="./js/functions.js"></script>

</body>
</html>