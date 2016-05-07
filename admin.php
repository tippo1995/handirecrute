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
	<!-- STYLE LOGIN-FORM -->
	<link rel="stylesheet" href="./css/login-style.css" />
	<link href='http://fonts.googleapis.com/css?family=Oleo+Script' rel='stylesheet' type='text/css'>

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

					
				

				</div>

			</div>

		</header><!-- #header end -->


		<!-- =================     Menu LOGIN               ========================-->
<?php 

    require("include/config.php"); 
    if(isset($_SESSION)) { unset($_SESSION) ; }

    $submitted_username = ''; 
    if(!empty($_POST)){ 
        $query = " 
            SELECT 
                 
                user, 
                password

            FROM users 
            WHERE 
                user = :user AND password = :password 
        "; 
        $query_params = array( 
            ':user' => $_POST['username'],
            ':password' => $_POST['password'] 
        ); 
         
        try{ 
            $stmt = $db->prepare($query); 
            $result = $stmt->execute($query_params); 
        } 
        catch(PDOException $ex){ die("Impossible d'executer la requète: " . $ex->getMessage()); } 
        $login_ok = false; 
        $row = $stmt->fetch(); 
        if($row){ 
             
            
                $login_ok = true;
            
        } 

        if($login_ok){ 
            unset($row['password']); 
            $_SESSION['user'] = $row;  
            header("Location: sub2.php"); 
            die("Redirection vers: sub2.php"); 
        } 
        else{ 
            print("Le MDP ou bien Le Login est erroné."); 
            $submitted_username = htmlentities($_POST['username'], ENT_QUOTES, 'UTF-8'); 
        } 
    } 
?> 

<!-- ============================= Script PHP =========================== -->
		<div class="lg-container">
		<h1>Zone Administrateur</h1>
		<form action="./admin.php" id="lg-form" name="lg-form" method="post">
			
			<div>
				<label for="username">Username:</label>
				<input type="text" name="username" id="username" placeholder="username"/>
			</div>
			
			<div>
				<label for="password">Password:</label>
				<input type="password" name="password" id="password" placeholder="password" />
			</div>
			
			<div>				
				<button type="submit" id="login">Login</button>
			</div>
			
		</form>
		<div id="message"></div>
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