<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Formasta</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<!-- CSS
================================================== -->
<link href='http://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="css/bootstrap.css">
<link rel="stylesheet" href="css/bootstrap-responsive.css">
<link rel="stylesheet" href="css/prettyPhoto.css" />
<link rel="stylesheet" href="css/custom-styles.css">

<!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <link rel="stylesheet" href="css/style-ie.css"/>
<![endif]--> 

<!-- Favicons
================================================== -->
<link rel="shortcut icon" href="img/favicon.ico">
<link rel="apple-touch-icon" href="img/apple-touch-icon.png">
<link rel="apple-touch-icon" sizes="72x72" href="img/apple-touch-icon-72x72.png">
<link rel="apple-touch-icon" sizes="114x114" href="img/apple-touch-icon-114x114.png">

<!-- JS
================================================== -->
<script src="http://code.jquery.com/jquery-1.8.3.min.js"></script>
<script src="js/jquery.easing.1.3.js"></script>
<script src="js/bootstrap.js"></script>
<script src="js/jquery.prettyPhoto.js"></script>
<script src="js/jquery.quicksand.js"></script>
<script src="js/jquery.custom.js"></script>


</head>

<body>
	<div class="color-bar-1"></div>
    <div class="color-bar-2 color-bg"></div>
    
    <div class="container main-container">
    
      <div class="row header"><!-- Begin Header -->
      
        <!-- Logo
        ================================================== -->
        <div class="span5 logo">
        	<a href="index.php"><img src="img/logo%20formasta.png" alt="" class="img-responsive" width="150" height="200"></a>



            <h5></h5>
        </div>
        
        <!-- Main Navigation
        ================================================== -->
        <div class="span7 navigation">
            <div class="navbar hidden-phone">
            
            <ul class="nav">
            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="index.php">Home <b class="caret"></b></a>
                <ul class="dropdown-menu">
                    <li><a href="index.php">Full Page</a></li>
                    <li><a href="index-gallery.php">Gallery Only</a></li>
                    <li><a href="index-slider.php">Slider Only</a></li>
                </ul>
            </li>
           <li><a href="features.php">Features</a></li>
            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="page-full-width.php">Pages <b class="caret"></b></a>
                <ul class="dropdown-menu">
                    <li><a href="page-full-width.php">Full Width</a></li>
                    <li><a href="page-right-sidebar.php">Right Sidebar</a></li>
                    <li><a href="page-left-sidebar.php">Left Sidebar</a></li>
                    <li><a href="page-double-sidebar.php">Double Sidebar</a></li>
                </ul>
            </li>
             <li class="dropdown active">
                <a class="dropdown-toggle" data-toggle="dropdown" href="gallery-4col.php">Gallery <b class="caret"></b></a>
                <ul class="dropdown-menu">
                    <li><a href="gallery-3col.php">Gallery 3 Column</a></li>
                    <li><a href="gallery-4col.php">Gallery 4 Column</a></li>
                    <li><a href="gallery-6col.php">Gallery 6 Column</a></li>
                    <li><a href="gallery-4col-circle.php">Gallery 4 Round</a></li>
                    <li><a href="gallery-single.php">Gallery Single</a></li>
                </ul>
             </li>
             <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="blog-style1.php">Blog <b class="caret"></b></a>
                <ul class="dropdown-menu">
                    <li><a href="blog-style1.php">Blog Style 1</a></li>
                    <li><a href="blog-style2.php">Blog Style 2</a></li>
                    <li><a href="blog-style3.php">Blog Style 3</a></li>
                    <li><a href="blog-style4.php">Blog Style 4</a></li>
                    <li><a href="blog-single.php">Blog Single</a></li>
                </ul>
             </li>
            </ul>
           
            </div>

            <!-- Mobile Nav
            ================================================== -->
            <form action="#" id="mobile-nav" class="visible-phone">
                <div class="mobile-nav-select">
                <select onchange="window.open(this.options[this.selectedIndex].value,'_top')">
                    <option value="">Navigate...</option>
                    <option value="index.php">Home</option>
                        <option value="index.php">- Full Page</option>
                        <option value="index-gallery.php">- Gallery Only</option>
                        <option value="index-slider.php">- Slider Only</option>
                    <option value="features.php">Features</option>
                    <option value="page-full-width.php">Pages</option>
                        <option value="page-full-width.php">- Full Width</option>
                        <option value="page-right-sidebar.php">- Right Sidebar</option>
                        <option value="page-left-sidebar.php>- Left Sidebar</option>
                        <option value="page-double-sidebar.php">- Double Sidebar</option>
                    <option value="gallery-4col.php">Gallery</option>
                        <option value="gallery-3col.php">- 3 Column</option>
                        <option value="gallery-4col.php">- 4 Column</option>
                        <option value="gallery-6col.php">- 6 Column</option>
                        <option value="gallery-4col.php">- Gallery 4 Col Round</option>
                        <option value="gallery-single.php">- Gallery Single</option>
                    <option value="blog-style1.php">Blog</option>
                        <option value="blog-style1.php">- Blog Style 1</option>
                        <option value="blog-style2.php">- Blog Style 2</option>
                        <option value="blog-style3.php">- Blog Style 3</option>
                        <option value="blog-style4.php">- Blog Style 4</option>
                        <option value="blog-single.php">- Blog Single</option>
                </select>
                </div>
                </form>

        </div>

      </div><!-- End Header -->
     
    <!-- Page Content
    ================================================== --> 
    <div class="row">

        <!-- Gallery Items
        ================================================== --> 
        <div class="span12 gallery">

            <div class="row clearfix">
                <ul class="gallery-post-grid holder">

                    <!-- Gallery Item 1 -->
                    <li  class="span3 gallery-item" data-id="id-1" data-type="illustration">
                        <span class="gallery-hover-4col-cir hidden-phone hidden-tablet">
                            <span class="gallery-icons">
                                <a href="img/gallery/gallery-img-1-full.jpg" class="item-zoom-link lightbox" title="Custom Illustration" data-rel="prettyPhoto"></a>
                                <a href="gallery-single.php" class="item-details-link"></a>
                            </span>
                        </span>
                        <a href="gallery-single.php"><img src="img/gallery/gallery-img-1-4col-cir.jpg" alt="Gallery" class="img-circle"></a>
                    </li>

                    <!-- Gallery Item 2 -->
                    <li class="span3 gallery-item" data-id="id-2" data-type="illustration">
                        <span class="gallery-hover-4col-cir hidden-phone hidden-tablet">
                            <span class="gallery-icons">
                                <a href="img/gallery/gallery-img-1-full.jpg" class="item-zoom-link lightbox" title="Custom Illustration" data-rel="prettyPhoto"></a>
                                <a href="gallery-single.php" class="item-details-link"></a>
                            </span>
                        </span>
                        <a href="gallery-single.php"><img src="img/gallery/gallery-img-1-4col-cir.jpg" alt="Gallery" class="img-circle"></a>
                    </li>

                    <!-- Gallery Item 3 -->
                    <li class="span3 gallery-item" data-id="id-3" data-type="web">
                        <span class="gallery-hover-4col-cir hidden-phone hidden-tablet">
                            <span class="gallery-icons">
                                <a href="img/gallery/gallery-img-1-full.jpg" class="item-zoom-link lightbox" title="Custom Illustration" data-rel="prettyPhoto"></a>
                                <a href="gallery-single.php" class="item-details-link"></a>
                            </span>
                        </span>
                        <a href="gallery-single.php"><img src="img/gallery/gallery-img-1-4col-cir.jpg" alt="Gallery" class="img-circle"></a>
                    </li>

                    <!-- Gallery Item 4 -->
                    <li class="span3 gallery-item" data-id="id-4" data-type="video">
                        <span class="gallery-hover-4col-cir hidden-phone hidden-tablet">
                            <span class="gallery-icons">
                                <a href="img/gallery/gallery-img-1-full.jpg" class="item-zoom-link lightbox" title="Custom Illustration" data-rel="prettyPhoto"></a>
                                <a href="gallery-single.php" class="item-details-link"></a>
                            </span>
                        </span>
                        <a href="gallery-single.php"><img src="img/gallery/gallery-img-1-4col-cir.jpg" alt="Gallery" class="img-circle"></a>
                    </li>

                    <!-- Gallery Item 5 -->
                    <li class="span3 gallery-item" data-id="id-5" data-type="web illustration">
                        <span class="gallery-hover-4col-cir hidden-phone hidden-tablet">
                            <span class="gallery-icons">
                                <a href="img/gallery/gallery-img-1-full.jpg" class="item-zoom-link lightbox" title="Custom Illustration" data-rel="prettyPhoto"></a>
                                <a href="gallery-single.php" class="item-details-link"></a>
                            </span>
                        </span>
                        <a href="gallery-single.php"><img src="img/gallery/gallery-img-1-4col-cir.jpg" alt="Gallery" class="img-circle"></a>
                    </li>

                    <!-- Gallery Item 6 -->
                    <li class="span3 gallery-item" data-id="id-6" data-type="illustration design">
                        <span class="gallery-hover-4col-cir hidden-phone hidden-tablet">
                            <span class="gallery-icons">
                                <a href="img/gallery/gallery-img-1-full.jpg" class="item-zoom-link lightbox" title="Custom Illustration" data-rel="prettyPhoto"></a>
                                <a href="gallery-single.php" class="item-details-link"></a>
                            </span>
                        </span>
                        <a href="gallery-single.php"><img src="img/gallery/gallery-img-1-4col-cir.jpg" alt="Gallery" class="img-circle"></a>
                    </li>

                    <!-- Gallery Item 7 -->
                    <li class="span3 gallery-item" data-id="id-7" data-type="design">
                        <span class="gallery-hover-4col-cir hidden-phone hidden-tablet">
                            <span class="gallery-icons">
                                <a href="img/gallery/gallery-img-1-full.jpg" class="item-zoom-link lightbox" title="Custom Illustration" data-rel="prettyPhoto"></a>
                                <a href="gallery-single.php" class="item-details-link"></a>
                            </span>
                        </span>
                        <a href="gallery-single.php"><img src="img/gallery/gallery-img-1-4col-cir.jpg" alt="Gallery" class="img-circle"></a>
                    </li>

                    <!-- Gallery Item 8 -->
                    <li class="span3 gallery-item" data-id="id-8" data-type="web video">
                        <span class="gallery-hover-4col-cir hidden-phone hidden-tablet">
                            <span class="gallery-icons">
                                <a href="img/gallery/gallery-img-1-full.jpg" class="item-zoom-link lightbox" title="Custom Illustration" data-rel="prettyPhoto"></a>
                                <a href="gallery-single.php" class="item-details-link"></a>
                            </span>
                        </span>
                        <a href="gallery-single.php"><img src="img/gallery/gallery-img-1-4col-cir.jpg" alt="Gallery" class="img-circle"></a>
                    </li>

                    <!-- Gallery Item 9 -->
                    <li class="span3 gallery-item" data-id="id-9" data-type="design">
                        <span class="gallery-hover-4col-cir hidden-phone hidden-tablet">
                            <span class="gallery-icons">
                                <a href="img/gallery/gallery-img-1-full.jpg" class="item-zoom-link lightbox" title="Custom Illustration" data-rel="prettyPhoto"></a>
                                <a href="gallery-single.php" class="item-details-link"></a>
                            </span>
                        </span>
                        <a href="gallery-single.php"><img src="img/gallery/gallery-img-1-4col-cir.jpg" alt="Gallery" class="img-circle"></a>
                    </li>

                    <!-- Gallery Item 10 -->
                    <li class="span3 gallery-item" data-id="id-10" data-type="web design">
                        <span class="gallery-hover-4col-cir hidden-phone hidden-tablet">
                            <span class="gallery-icons">
                                <a href="img/gallery/gallery-img-1-full.jpg" class="item-zoom-link lightbox" title="Custom Illustration" data-rel="prettyPhoto"></a>
                                <a href="gallery-single.php" class="item-details-link"></a>
                            </span>
                        </span>
                        <a href="gallery-single.php"><img src="img/gallery/gallery-img-1-4col-cir.jpg" alt="Gallery" class="img-circle"></a>
                    </li>

                    <!-- Gallery Item 11 -->
                    <li class="span3 gallery-item" data-id="id-11" data-type="illustration">
                        <span class="gallery-hover-4col-cir hidden-phone hidden-tablet">
                            <span class="gallery-icons">
                                <a href="img/gallery/gallery-img-1-full.jpg" class="item-zoom-link lightbox" title="Custom Illustration" data-rel="prettyPhoto"></a>
                                <a href="gallery-single.php" class="item-details-link"></a>
                            </span>
                        </span>
                        <a href="gallery-single.php"><img src="img/gallery/gallery-img-1-4col-cir.jpg" alt="Gallery" class="img-circle"></a>
                    </li>

                    <!-- Gallery Item 12 -->
                    <li class="span3 gallery-item" data-id="id-12" data-type="illustration video">
                        <span class="gallery-hover-4col-cir hidden-phone hidden-tablet">
                            <span class="gallery-icons">
                                <a href="img/gallery/gallery-img-1-full.jpg" class="item-zoom-link lightbox" title="Custom Illustration" data-rel="prettyPhoto"></a>
                                <a href="gallery-single.php" class="item-details-link"></a>
                            </span>
                        </span>
                        <a href="gallery-single.php"><img src="img/gallery/gallery-img-1-4col-cir.jpg" alt="Gallery" class="img-circle"></a>
                    </li>

                </ul>
            </div>

            <!-- Pagination -->
            <div class="pagination">
                <ul>
                <li class="active"><a href="#">Prev</a></li>
                <li class="active"><a href="#">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">4</a></li>
                <li><a href="#">Next</a></li>
                </ul>
            </div>

        </div><!-- End gallery list-->

    </div><!-- End container row -->
    
    </div> <!-- End Container -->

    <!-- Footer Area
        ================================================== -->
	<div class="footer-container"><!-- Begin Footer -->
    	<div class="container">
        	<div class="row footer-row">
                <div class="span3 footer-col">
                    <h5>About Us</h5>
                   <img src="img/FORMASTA.png" alt="Piccolo" /><br /><br />
                    <address>
                        <strong>Design Team</strong><br />
                        Formasta<br />
                        Suarabaya<br />
                    </address>
                    <ul class="social-icons">
                        <li><a href="#" class="social-icon facebook"></a></li>
                        <li><a href="#" class="social-icon twitter"></a></li>
                        <li><a href="#" class="social-icon dribble"></a></li>
                        <li><a href="#" class="social-icon rss"></a></li>
                        <li><a href="#" class="social-icon forrst"></a></li>
                    </ul>
                </div>
                <div class="span3 footer-col">
                    <h5>Latest Posts</h5>
                     <ul class="post-list">
                        <li><a href="#"></a></li>
                        <li><a href="#"></a></li>
                        <li><a href="#"></a></li>
                        <li><a href="#"></a></li>
                        <li><a href="#"></a></li>
                    </ul>
                </div>
                <div class="span3 footer-col">
                    <h5>Gallery Photos</h5>
                    <ul class="img-feed">
                        <li><a href="#"><img src="img/gallery/flickr-img-1.jpg" alt="Image Feed"></a></li>
                        <li><a href="#"><img src="img/gallery/flickr-img-1.jpg" alt="Image Feed"></a></li>
                        <li><a href="#"><img src="img/gallery/flickr-img-1.jpg" alt="Image Feed"></a></li>
                        <li><a href="#"><img src="img/gallery/flickr-img-1.jpg" alt="Image Feed"></a></li>
                        <li><a href="#"><img src="img/gallery/flickr-img-1.jpg" alt="Image Feed"></a></li>
                        <li><a href="#"><img src="img/gallery/flickr-img-1.jpg" alt="Image Feed"></a></li>
                        <li><a href="#"><img src="img/gallery/flickr-img-1.jpg" alt="Image Feed"></a></li>
                        <li><a href="#"><img src="img/gallery/flickr-img-1.jpg" alt="Image Feed"></a></li>
                        <li><a href="#"><img src="img/gallery/flickr-img-1.jpg" alt="Image Feed"></a></li>
                        <li><a href="#"><img src="img/gallery/flickr-img-1.jpg" alt="Image Feed"></a></li>
                        <li><a href="#"><img src="img/gallery/flickr-img-1.jpg" alt="Image Feed"></a></li>
                        <li><a href="#"><img src="img/gallery/flickr-img-1.jpg" alt="Image Feed"></a></li>
                    </ul>
                </div>
            </div>

            <div class="row"><!-- Begin Sub Footer -->
                <div class="span12 footer-col footer-sub">
                    <div class="row no-margin">
                        <div class="span6"><span class="left">Copyright 2017 Formasta. All rights reserved.</span></div>
                        <div class="span6">
                            <span class="right">
                            <a href="#">Home</a>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;<a href="#">Features</a>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;<a href="#">Gallery</a>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;<a href="#">Blog</a>&nbsp;&nbsp;&nbsp;</a>
                            </span>
                        </div>
                    </div>
                </div>
            </div><!-- End Sub Footer -->

        </div>
    </div><!-- End Footer -->

    <!-- Scroll to Top -->  
    <div id="toTop" class="hidden-phone hidden-tablet">Back to Top</div>
    
</body>
</html>
