<!DOCTYPE html>
<html lang="en">
    
<head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Home - Education Theme</title>
        <!-- Bootstrap -->
        <link href="/site/css/bootstrap.css" rel="stylesheet">
        <!-- DL Menu CSS -->
        <link href="/site/js/dl-menu/component.css" rel="stylesheet">
        <!--SLICK SLIDER CSS-->
        <link rel="stylesheet" type="text/css" href="/site/css/slick.css"/>
        <!-- Font Awesome StyleSheet CSS -->
        <link href="/site/css/font-awesome.min.css" rel="stylesheet">
        <!-- Font Awesome StyleSheet CSS -->
        <link href="/site/css/svg.css" rel="stylesheet">
        <!-- Pretty Photo CSS -->
        <link href="/site/css/prettyPhoto.css" rel="stylesheet">
        <!-- Shortcodes CSS -->
        <link href="/site/css/shortcodes.css" rel="stylesheet">
        <!-- Widget CSS -->
        <link href="/site/css/widget.css" rel="stylesheet">
        <!-- Typography CSS -->
        <link href="/site/css/typography.css" rel="stylesheet">
        <!-- Custom Main StyleSheet CSS -->
        <link href="/site/css/style.css" rel="stylesheet">
        <!-- Color CSS -->
        <link href="/site/css/color.css" rel="stylesheet">
        <!-- Responsive CSS -->
        <link href="/site/css/responsive.css" rel="stylesheet">
    </head>
    <body>
        <!--iqoniq Wrapper Start-->  
        @include('site.layouts.topmenu')
        <!--Header Wrap End-->
        <!--Banner Wrap Start-->
     @yield('content')
            <!--Contact Info Wrap End-->
            <!--Footer Wrap Start-->
            <footer class="iq_footer_bg">
            	<div class="container">
            		<div class="row">
                        <!--Widget About Start-->
            			<div class="col-md-3 col-sm-6">
            				<div class="iq_uni_title">
                                <!--Widget Title Start-->
            					<h4>university of <span>education</span></h4>
                                <!--Widget Title End-->
            					<p>Lorem ipsum dolor sit amet elit, sed do eiusmod tempor incididunt ut labore et dolore .</p>
            					<ul>
            						<li><span>Moday - Friday</span> 08:00- 05:00</li>
            						<li><span>Saturday</span> Closed</li>
            						<li><span>Sunday</span> Closed</li>
            					</ul>
            				</div>
            			</div>
            			<!--Widget About End-->
                        <!--Widget Archive Start-->
            			<div class="col-md-3 col-sm-6">
                            <div class="widget widget_archive">
                                <!--Widget Title Start-->
                                <h5 class="widget-title"><span>Our</span> Services</h5>
                                <!--Widget Title End-->
                                <!--Social Media Start-->
                                <ul>
                                    <li>
                                        <a href="#">Safety & Risk Management</a>
                                    </li>
                                    <li>
                                        <a href="#">Facilities Services</a>
                                    </li>
                                    <li>
                                        <a href="#">University Police</a>
                                    </li>
                                    <li>
                                        <a href="#">Campus Planning</a>
                                    </li>
                                    <li>
                                        <a href="#">Mail Services</a>
                                    </li>
                                    <li>
                                        <a href="#">Facilities IT</a>
                                    </li>
                                </ul>
                                <!--Social Media End-->
                            </div>
            			</div>
                        <!--Widget Archive End-->
                        <!--Widget Flickr Start-->
                        <div class="col-md-3 col-sm-6">
                            <div class="widget widget-flickr">
                                <!-- Widget Title Start-->
                                <h5 class="widget-title"><span>Our</span> Photo</h5>
                                <!-- Widget Title End-->
                                <div class="flickr-wrap">
                                    <a class="flickrbadges" href="#"><img src="/site/extra-images/flickr1.jpg" alt=""></a>
                                    <a class="flickrbadges" href="#"><img src="/site/extra-images/flickr2.jpg" alt=""></a>
                                    <a class="flickrbadges" href="#"><img src="/site/extra-images/flickr3.jpg" alt=""></a>
                                    <a class="flickrbadges" href="#"><img src="/site/extra-images/flickr4.jpg" alt=""></a>
                                    <a class="flickrbadges" href="#"><img src="/site/extra-images/flickr5.jpg" alt=""></a>
                                    <a class="flickrbadges" href="#"><img src="/site/extra-images/flickr6.jpg" alt=""></a>
                                    <a class="flickrbadges" href="#"><img src="/site/extra-images/flickr4.jpg" alt=""></a>
                                    <a class="flickrbadges" href="#"><img src="/site/extra-images/flickr5.jpg" alt=""></a>
                                    <a class="flickrbadges" href="#"><img src="/site/extra-images/flickr6.jpg" alt=""></a>
                                </div>
                            </div>
                        </div>
                        <!--Widget Flickr End-->
                        <!--Widget News Letter Start-->
            			<div class="col-md-3 col-sm-6">
            				<div class="widget iq_footer_newsletter">
                                <!--Widget Title Start-->
                                <h5 class="widget-title"><span>Our</span> Newsletter</h5>
                                <!--Widget Title End-->
            					<p>Lorem ipsum dolor sit amet elit, sed do eiusmod tempor incididunt ut labore et dolore .</p>
                                <form class="iq-input">
                                    <input placeholder="Search ..." type="text">
                                    <label class="iq-input-icon"><input type="submit"></label>
                                </form>
                                <!--Widget Title Start-->
            					<h5 class="widget-title border-none"><span>Our</span> Connected</h5>
                                <!--Widget Title Start-->
            					<ul class="iq_footer_social">
            						<li>
            							<a href="#"><i class="fa fa-facebook"></i></a>
            						</li>
            						<li>
            							<a href="#"><i class="fa fa-twitter"></i></a>
            						</li>
            						<li>
            							<a href="#"><i class="fa fa-facebook"></i></a>
            						</li>
            						<li>
            							<a href="#"><i class="fa fa-pinterest"></i></a>
            						</li>
            					</ul>
            				</div>
            			</div>
                        <!--Widget News Letter End-->
            		</div>
            	</div>
            </footer>
            <!--Footer Wrap End-->
            <!--Copy Right Start-->
			<div class="footer_strip">
				<h5><a target="_blank" href="https://www.templateshub.net">Templates Hub</a></h5>
			</div>
			<!--Copy Right End-->
			<!-- Modal -->
			<div class="modal fade" id="search-box" role="dialog">
      			<button type="button" class="close" data-dismiss="modal">&times;</button>
				<div class="modal-dialog">
				  	<!--SEARCH section STARTS-->  
					<div class="iqoniq_courses_search">
						<div class="container">
							<!--Heading Wrap Start-->
			            	<div class="iq_heading_1 text-center">
			                    <h4>Search For<span>Our Courses</span></h4>
			                    <p>Fill The Below Form and Star Searching</p>
			                </div>
			                <!--Heading Wrap End-->  
							<!--iqoniq FORM STARTS-->  
							<div class="row">
								<div class="col-md-3 col-sm-6">
									<!--Iconiq Input STARTS-->
									<div class="iq-input">
										<input class="first_input" type="text" placeholder="Search Words">
									</div>
									<!--Iconiq Input End-->
								</div>
								<div class="col-md-3 col-sm-6">
									<!--Iconiq Input STARTS-->
									<div class="iq-input">
			                            <select name="Category">
			                                <option value="0">Category</option>
			                                <option value="9">Publishing Date</option>
			                                <option value="2">Publishing Date</option>
			                                <option value="3">Publishing Date</option>
			                            </select>
									</div>
									<!--Iconiq Input End-->
								</div>
								<div class="col-md-3 col-sm-6">
									<!--Iconiq Input STARTS-->
									<div class="iq-input">
			                            <select name="Category">
			                                <option value="0">Category</option>
			                                <option value="9">Publishing Date</option>
			                                <option value="2">Publishing Date</option>
			                                <option value="3">Publishing Date</option>
			                            </select>
									</div>
									<!--Iconiq Input End-->
								</div> 
								<div class="col-md-3 col-sm-6">
									<!--Iconiq Input STARTS-->
									<div class="iq-input">
			                            <input class="iq_link_1" type="submit" value="Start Search">
									</div>
									<!--Iconiq Input End-->
								</div>    
							</div> 
							<!--iqoniq FROM END-->  
						</div>
					</div>
					<!--SEARCH section ENDS-->
				</div>
			</div>
        </div>
        <!--iqoniq Wrapper End-->
        <!--Javascript Library-->
        <script src="/site/js/jquery.js"></script>
        <!--Bootstrap core JavaScript-->
        <script src="/site/js/bootstrap.min.js"></script>
        <!--SLICK SLIDER JavaScript-->
        <script src="/site/js/slick.min.js"></script>
        <!--Dl Menu Script-->
        <script src="/site/js/dl-menu/modernizr.custom.js"></script>
        <script src="/site/js/dl-menu/jquery.dlmenu.js"></script>
        <!--Pretty Photo JavaScript-->
        <script src="/site/js/jquery.prettyPhoto.js"></script>
        <!--Image Filterable JavaScript-->
        <script src="/site/js/jquery-filterable.js"></script>
        <!--Number Count (Waypoints) JavaScript-->
        <script src="/site/js/waypoints-min.js"></script>
        <!--Custom JavaScript-->
        <script src="/site/js/custom.js"></script>
    </body>

</html>
