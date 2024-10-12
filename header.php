<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from kodeforest.net/html/books/library/index-1.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 07 Jul 2021 12:04:13 GMT -->
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="Katsina Library Website">
<meta name="keywords" content="katsina, library, abm, katsina library">
<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
<title>Home - Katsina Library</title>

<link rel="icon" href="images/logo-icon.png" type="image/x-icon">
<!-- CUSTOM STYLE -->
<link href="style.css" rel="stylesheet">
<!-- THEME TYPO -->
<link href="css/themetypo.css" rel="stylesheet">
<!-- BOOTSTRAP -->
<link href="css/bootstrap.css" rel="stylesheet">
<!-- COLOR FILE -->
<link href="css/color.css" rel="stylesheet">
<!-- FONT AWESOME -->
<link href="css/font-awesome.min.css" rel="stylesheet">
<!-- BX SLIDER -->
<link href="css/jquery.bxslider.css" rel="stylesheet">
<!-- Boostrap Slider -->
<link href="css/bootstrap-slider.css" rel="stylesheet">
<!-- Widgets -->
<link href="css/widget.css" rel="stylesheet">
<!-- Owl Carusel -->
<link href="css/owl.carousel.css" rel="stylesheet">
<!-- responsive -->
<link href="css/responsive.css" rel="stylesheet">
<!-- Component -->
<link href="js/dl-menu/component.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="css/bookblock.css" />

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
</head>
<body>
<div id="loader-wrapper">
	<div id="loader"></div>

	<div class="loader-section section-left"></div>
	<div class="loader-section section-right"></div>

</div>
<!--WRAPPER START-->
<div class="wrapper">
	<!--HEADER START-->
	<header class="header-1">
    	<div class="top-strip">
        	<div class="container">
            	<div class="pull-left">
                	<p>Welcome to Katsina State Library</p>
                </div>
                
                <?php
                    // Initialize the session
                    session_start();
                    include("./admin/signup/vendor/animsition/css/x.php");
                    // Check if the user is logged in, if not then redirect him to login page
                    if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
                    
                ?>
                     <ul class="my-account">
                        <!-- <li><a href="#"><i class="fa fa-list"></i> Wishlist</a></li> -->
                        <li><a href="#"><i class="fa fa-user"> &nbsp; </i> My Account</a></li>
                        <!-- <li><a href="#"><i class="fa fa-compress"></i> Compare</a></li> -->
                        <li><a href="login.php"><i class="fa fa-sign-in"></i>Login</a></li>
                        <!-- <li><a href="#"><i class="fa fa-shopping-cart"></i> 0Item</a></li>                         -->
                    </ul>
                <?php
                        
                    }else{

                ?>
                    <ul class="my-account">
                        <!-- <li><a href="#"><i class="fa fa-list"></i> Wishlist</a></li> -->
                        <li><a href="#"><i class="fa fa-user"></i> &nbsp; <?php echo htmlspecialchars($_SESSION["username"]); ?></a></li>
                        <!-- <li><a href="#"><i class="fa fa-compress"></i> Compare</a></li> -->
                        <li><a href="logout.php"><i class="fa fa-sign-in"></i> Logout</a></li>
                        <!-- <li><a href="#"><i class="fa fa-shopping-cart"></i> 0Item</a></li>                         -->
                    </ul>

                    <?php
                        }
                    ?>
            </div>
        </div>
        <div class="logo-container">
        	<div class="container">
            	<!--LOGO START-->
            	<div class="logo">
                    <a href="#"><img src="images/logo-2.png" height=54px; alt=""></a>
                </div>
                <!--LOGO END-->
                <div class="kode-navigation">
                <ul>
                                 <li><a href="index.php">Home</a>
                                     <!-- <ul>
                                         <li><a href="index-1.html">Home page 1</a></li>
                                     </ul> -->
                                 </li>
                                 
                                 <li><a href="about-us.php">About Us</a></li>
                                 
                                 <li><a href="administration.php">Administration</a>
                                     <!-- <ul>
                                         <li><a href="books3-sidebar.html">Book With Sidebar</a></li>
                                         <li><a href="books-detail.html">Book Detail</a></li>                                
                                     </ul> -->
                                 </li>
                                 <li><a target="_blank" href="https://pleasantlibrary.org/">Pleasant Library</a></li>
                                 <li><a href="#">Resources</a>
                                     <ul>
                                         <li><a href="subscribe.php">Subscribe Database</a></li>
                                         <li><a href="OpenAccess.php">OpenAccess Database</a></li>
                                         <li><a target="_blank" href="https://nerdc.org.ng/ecurriculum/index.aspx">NERDC E-Curriculum</a></li>
                                         <li><a href="Arabic.php">Arabic Collection</a></li>
                                         <li><a href="UNPublications.php">United Nation Publications</a></li>
                                         <li><a href="Ebooks.php">E-books</a></li>
                                         <li><a href="Dissertations.php">Thesis and Dissertations</a></li>
                                         <li><a href="Gov_Publications.php">Government Publications</a></li>
                                         <li><a href="kg.php">KG-Research Journals</a></li>
                                         <li><a target="_blank" href="https://nerdc.org.ng/ecurriculum">E-Curriculum</a></li>
                                         <li><a target="_blank" href="https://www.worldbank.org/en/home">World Bank Group</a></li>
                                         <li><a href="Plagarism.php">Plagarism Checkers</a></li>
                                         <li><a href="Paraphrasing.php">Paraphrasing Tool</a></li>
                                         
                                     </ul>
                                 </li>
                                 <li><a href="#">Grant</a>
                                     <ul>
                                         <li><a target="_blank" href="http://www.iiep.unesco.org/en">UNESCO</a></li>
                                         <li><a target="_blank" href="https://www.worldbank.org/en/programs/scholarships">World Bank</a></li>										
                                     </ul>
                                 </li>
                                 <li class="last"><a href="#">Branches</a>
                                     <ul>
                                         <li><a target="_blank" href="https://library.umyu.edu.ng/">UMYUK Library</a></li>
                                         <li><a target="_blank" href="https://auk.edu.ng/library/e-Library.html">AUK Library</a></li>
                                         <li><a  href="https://fudmalibrary.ng/" target="_blank">FUDMA Library</a></li>
                                         <li><a target="_blank" href="http://www.ksitm.edu.ng/admissions.html">KSTIM Library</a></li>
                                         <!-- <li><a href="https://pleasantlibrary.com/">Pleasant Library</a></li> -->
                                     </ul>
                                 </li>
                                 <!-- <li class="last"><a href="contact-us.html">PLBC</a></li> -->
                                 <!-- <li class="last"><a href="contact-us.html">Staffs</a></li> -->
                                 <!-- <li class="last"><a href="#">Pages</a>
                                     <ul class="children">
                                         <li><a href="error-404.html">Error 404</a></li>
                                         <li><a href="coming-soon.html">Comming Soon</a></li>
                                         <li class="last"><a href="gallery-2col.html">Gallery</a>
                                             <ul>
                                                 <li><a href="gallery-2col.html">Gallery 2 Col</a></li>
                                                 <li><a href="gallery-3col.html">Gallery 3 Col</a></li>
                                                 <li><a href="gallery-4col.html">Gallery 4 Col</a></li>    
                                             </ul>
                                         </li>
                                     </ul>
                                 </li> -->
                                 <li class="last"><a href="contact-us.php">Contact Us</a></li>
                             </ul>
                         </div>
						<div id="kode-responsive-navigation" class="dl-menuwrapper">
							<button class="dl-trigger">Open Menu</button>
							<ul class="dl-menu">
								<li class="menu-item kode-parent-menu"><a href="index.php">Home</a>
								</li>
								<li><a href="about-us.php">About Us</a></li>
								<li class="menu-item kode-parent-menu"><a href="administration.php">Administration</a>
								</li>
                                <li><a target="_blank" href="https://pleasantlibrary.org/">Pleasant Library</a></li>
								<li class="menu-item kode-parent-menu"><a href="#">Resources</a>
									<ul class="dl-submenu">
                                         <li><a href="subscribe.php">Subscribe Database</a></li>
                                         <li><a href="OpenAccess.php">OpenAccess Database</a></li>
                                         <li><a href="Arabic.php">Arabic Collection</a></li>
                                         <li><a href="UNPublications.php">United Nation Publications</a></li>
                                         <li><a href="Ebooks.php">E-books</a></li>
                                         <li><a href="Dissertations.php">Thesis and Dissertations</a></li>
                                         <li><a href="Gov_Publications.php">Government Publications</a></li>
                                         <li><a href="kg.php">KG-Research Journals</a></li>
                                         <li><a target="_blank" href="https://nerdc.org.ng/ecurriculum">E-Curriculum</a></li>
                                         <li><a target="_blank" href="https://www.worldbank.org/en/home">World Bank Group</a></li>
                                         <li><a href="Plagarism.php">Plagarism Chechers</a></li>
                                         <li><a href="Paraphrasing.php">Paraphrasing Tool</a></li>
                                         
									</ul>
								</li>
								<li class="menu-item kode-parent-menu last"><a href="#">Grant</a>
									<ul class="dl-submenu">
                                         <li><a target="_blank" href="http://www.iiep.unesco.org/en">UNESCO</a></li>
                                         <li><a target="_blank" href="https://www.worldbank.org/en/programs/scholarships">World Bank</a></li>										
									</ul>
								</li>
								<li class="menu-item kode-parent-menu last"><a href="#">Branches</a>
									<ul class="dl-submenu">
                                         <li><a target="_blank" href="https://library.umyu.edu.ng/">UMYUK Library</a></li>
                                         <li><a target="_blank" href="https://auk.edu.ng/library/e-Library.html">AUK Library</a></li>
                                         <li><a target="_blank" href="https://fudmalibrary.ng/">FUDMA Library</a></li>
                                         <li><a target="_blank" href="http://www.ksitm.edu.ng/admissions.html">KSTIM Library</a></li>
                                         <!-- <li><a href="https://pleasantlibrary.com/">KSTIM Library</a></li> -->
									</ul>
								</li>
								<!-- <li class="menu-item kode-parent-menu last"><a href="#">Pages</a>
									<ul class="dl-submenu">
										<li><a href="error-404.html">Error 404</a></li>
										<li><a href="coming-soon.html">Comming Soon</a></li>
										<li class="menu-item kode-parent-menu last"><a href="gallery-2col.html">Gallery</a>
											<ul class="dl-submenu">
												<li><a href="gallery-2col.html">Gallery 2 Col</a></li>
												<li><a href="gallery-3col.html">Gallery 3 Col</a></li>
												<li><a href="gallery-4col.html">Gallery 4 Col</a></li>    
											</ul>
										</li>
									</ul>
								</li> -->
								<li class="last"><a href="contact-us.php">Contact Us</a></li>
							</ul>
				</div>
            </div>
        </div>
    </header>
    <!--HEADER END-->