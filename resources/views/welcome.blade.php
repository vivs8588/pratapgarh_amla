<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="UTF-8">
        <!-- For IE -->
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <!-- For Resposive Device -->
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <title>Organic Store | Responsive HTML5 Template</title>
        <!-- Favicon -->
        <link rel="apple-touch-icon" sizes="57x57" href="images/fav-icon/apple-icon-57x57.png">



        <!-- Custom Css -->
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <link rel="stylesheet" type="text/css" href="css/responsive.css">


        <!-- Fixing Internet Explorer ______________________________________-->

        <!--[if lt IE 9]>
            <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
            <script src="vendor/html5shiv.js"></script>
        <![endif]-->
    </head>



    <body>
        <div class="main_page">


            <!-- Header *******************************  -->
            <header>
                <div class="top_header">
                    <div class="container">
                        <div class="pull-left header_left">
                            <ul>
                                <li><a href="#">Order On Phone: <span>+321 453 68 739</span></a></li>
                                <li><i class="fa fa-envelope-o s_color" aria-hidden="true"></i><a href="#">organicstore@gmail.com</a></li>
                            </ul>
                        </div>

                        <div class="pull-right header_right">
                            <div class="state" id="value1">
                                <ul>
                                    <li><i class="fa fa-user s_color" aria-hidden="true"></i><a href="#">Account</a></li>
                                    <li><i class="fa fa-heart s_color" aria-hidden="true"></i><a href="#">Whishlist </a></li>
                                    <li><i class="fa fa-truck s_color" aria-hidden="true"></i><a href="#">Whishlist</a></li>
                                </ul>
                                <div id="polyglotLanguageSwitcher">
                                    <form action="#">
                                        <select id="polyglot-language-options">
                                            <option id="en" value="en" selected>English</option>
                                            <option id="fr" value="fr">French</option>
                                            <option id="de" value="de">German</option>
                                            <option id="it" value="it">Italian</option>
                                            <option id="es" value="es">Spanish</option>
                                        </select>
                                    </form>
                                </div>
                            </div>

                                
                        </div>
                    </div> <!-- End of .container -->
                </div> <!-- End of .top_header -->

                <div class="bottom_header">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-4 col-sm-12 col-xs-12">
                                <div class="search-box">
                                    <form action="#" class="clearfix">
                                        <input type="text" placeholder="Search...">
                                        <button><i class="fa fa-search"></i></button>
                                    </form>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-5 col-xs-6 logo-responsive">
                                <div class="logo-area">
                                    <a href="index.html" class="pull-left logo"><img src="images/logo/logo.png" alt="LOGO"></a>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-7 col-xs-6 pdt-14">
                                <div class="login_option float_left">
                                    <div class="login_form">
                                        <div class="user">
                                            <i class="icon-photo"></i>
                                        </div>
                                        <div class="login-info">
                                            <div class="welcome">Welcome!</div>
                                            <!-- select menu -->
                                                <form action="#" class="select-form">
                                                    <div class="g-input f1 mb-30">
                                                        <select class="text-capitalize selectpicker" data-style="g-select" data-width="100%">
                                                            <option value="0" selected="">Sign In</option>
                                                            <option value="1">Sign In</option>
                                                            <option value="2">Register Here</option>
                                                        </select>
                                                    </div>
                                                </form>
                                        </div>
                                    </div> <!-- End of .cart_list -->
                                </div>
                                <div class="cart_option float_left">
                                    <button class="cart tran3s dropdown-toggle" id="cartDropdown"><i class="fa icon-icon-32846" aria-hidden="true"></i><span class="s_color_bg p_color">2</span></button>
                                    <div class="cart-info">
                                        <div>My Cart</div>
                                        <div class="doller">84.00$</div>
                                    </div>
                                        
                                    <div class="cart_list color2_bg" aria-labelledby="cartDropdown">
                                        <ul>
                                            <li>
                                                <div class="cart_item_wrapper clear_fix">
                                                    <div class="img_holder float_left"><img src="images/shop/9.png" alt="Cart Image" class="img-responsive"></div> <!-- End of .img_holder -->

                                                    <div class="item_deatils float_left">
                                                        <h6>Turmeric Powde</h6>
                                                        <ul>
                                                            <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                            <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                            <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                            <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                            <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                        </ul>
                                                        <span class="font_fix">$ 34.99</span>
                                                    </div> <!-- End of .item_deatils -->
                                                </div> <!-- End of .cart_item_wrapper -->
                                            </li>

                                            <li>
                                                <div class="cart_item_wrapper clear_fix">
                                                    <div class="img_holder float_left"><img src="images/shop/10.png" alt="Cart Image" class="img-responsive"></div> <!-- End of .img_holder -->
                                                    
                                                    <div class="item_deatils float_left">
                                                        <h6>Pure Jeans Coffee</h6>
                                                        <ul>
                                                            <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                            <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                            <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                            <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                            <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                        </ul>
                                                        <span class="font_fix">$ 26.99</span>
                                                    </div> <!-- End of .item_deatils -->
                                                </div> <!-- End of .cart_item_wrapper -->
                                            </li>

                                            <li>
                                                <div class="cart_item_wrapper clear_fix">
                                                    <div class="img_holder float_left"><img src="images/shop/11.png" alt="Cart Image" class="img-responsive"></div> <!-- End of .img_holder -->
                                                    
                                                    <div class="item_deatils float_left">
                                                        <h6>Columbia Chocolate</h6>
                                                        <ul>
                                                            <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                            <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                            <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                            <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                            <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                        </ul>
                                                        <span class="font_fix">$ 26.99</span>
                                                    </div> <!-- End of .item_deatils -->
                                                </div> <!-- End of .cart_item_wrapper -->
                                            </li>
                                        </ul>

                                        <div class="cart_total clear_fix">

                                            <span class="total font_fix float_left">Total - 140$</span>
                                            <a href="#" class="s_color_bg float_right tran3s">View Cart</a>
                                        </div>
                                    </div> <!-- End of .cart_list -->
                                </div>

                            </div>

                        </div>

                    </div>
                </div> <!-- End of .bottom_header -->
            </header>





            <!-- Menu ******************************* -->
            <div class="theme_menu color1_bg">
                <div class="container">
                    <nav class="menuzord pull-left" id="main_menu">
                       <ul class="menuzord-menu">
                          <li class="current_page"><a href="index.html">Home</a></li>
                          <li><a href="about-us.html">About us</a></li>
                          <li><a href="#">store</a>
                            <ul class="dropdown">
                                <li><a href="shop.html">Shop With Sidebar</a></li>
                                <li><a href="shop-single.html">Product Detail</a></li>
                                <li><a href="shop-cart.html">Cart Page</a></li>
                                <li><a href="checkout.html">Checkout Page</a></li>
                                <li><a href="account.html">My Account</a></li>
                             </ul>
                          </li>
                          <li><a href="#">News</a>
                            <ul class="dropdown">
                                <li><a href="blog-Standard.html">News Standard</a></li>
                                <li><a href="blog-list-sidebar.html">News With Sidebar</a></li>
                                <li><a href="blog-grid.html">News Masonary</a></li>
                                <li><a href="blog-details.html">News Single</a></li>
                             </ul>
                          </li>
                          <li><a href="#">gallery</a>
                            <ul class="dropdown">
                                <li><a href="gallery-grid.html">Gallery Grid</a></li>
                                <li><a href="gallery-masonry.html">Gallery Masonary</a></li>
                                <li><a href="gallery-single.html">Gallery Single</a></li>
                             </ul>
                          </li>

                          <li><a href="#">Pages</a>
                            <ul class="dropdown">
                                <li><a href="Testimonials.html">Testimonials</a></li>
                                <li><a href="404.html">404v page</a></li>
                                <li><a href="faq.html">FAQ</a></li>
                             </ul>
                          </li>
                          
                          <li><a href="contact.html">Contact us</a></li>
                       </ul> <!-- End of .menuzord-menu -->
                   </nav> <!-- End of #main_menu -->


                   <!-- ******* Cart And Search Option ******** -->
                   <div class="nav_side_content pull-right">
                        <ul class="icon_header">
                            <li class="border_round tran3s"><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li class="border_round tran3s"><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li class="border_round tran3s"><a href="#"><i class="fa fa-google-plus"></i></a></li>
                            <li class="border_round tran3s"><a href="#"><i class="fa fa-pinterest"></i></a></li>
                        </ul>
                   </div> <!-- End of .nav_side_content -->
                     
               </div> <!-- End of .conatiner -->
            </div> <!-- End of .theme_menu -->




            <!-- Banner ____________________________________ -->
            <div id="banner">
                <div class="rev_slider_wrapper">
                    <!-- START REVOLUTION SLIDER 5.0 auto mode -->
                        <div id="main_slider" class="rev_slider" data-version="5.0">
                            <ul>
                                
                                <!-- SLIDE1  -->
                                <li data-index='rs-377' data-transition='curtain-1' data-slotamount='1' data-easein='default' data-easeout='default' data-masterspeed='default' data-thumb='images/home/slide-1.jpg' data-rotate='0' data-saveperformance='off' data-title='Business Solutions' data-description='' >
                                    <!-- MAIN IMAGE -->
                                    <img src="images/home/slide-1.jpg"  alt="image"  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg">
                                    <!-- LAYERS -->

                                    <!-- LAYER NR. 1 -->
                                    <div class="tp-caption tp-resizeme rs-parallaxlevel-3" 
                                        data-x="['center','center','center','center']" data-hoffset="['0','0','35','0']" 
                                        data-y="['middle','middle','middle','middle']" data-voffset="['-120','-120','-120','-120']"
                                        data-width="none"
                                        data-height="none"
                                        data-transform_idle="o:1;"
                                        data-transform_in="z:0;rX:0deg;rY:0;rZ:0;sX:1.5;sY:1.5;skX:0;skY:0;opacity:0;s:1500;e:Power3.easeInOut;" 
                                        data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" 
                                        data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" 
                                        data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" 
                                        data-start="1000"
                                        data-splitout="none" 
                                        data-responsive_offset="on" 
                                        data-elementdelay="0.05" 
                                        style="z-index: 5;">
                                        <img src="images/home/1.png" alt="">
                                    </div>

                                    <!-- LAYER NR. 2 -->
                                    <div class="tp-caption tp-resizeme rs-parallaxlevel-3" 
                                        data-x="['center','center','center','center']" data-hoffset="['0','0','35','0']" 
                                        data-y="['middle','middle','middle','middle']" data-voffset="['50','50','50','50']"
                                        data-width="none"
                                        data-height="none"
                                        data-transform_idle="o:1;"
                                        data-transform_in="z:0;rX:0deg;rY:0;rZ:0;sX:1.5;sY:1.5;skX:0;skY:0;opacity:0;s:1500;e:Power3.easeInOut;" 
                                        data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" 
                                        data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" 
                                        data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" 
                                        data-start="1500"
                                        data-splitout="none" 
                                        data-responsive_offset="on" 
                                        data-elementdelay="0.05" 
                                        style="z-index: 5;">
                                        <h1>Organic Store</h1>
                                    </div>


                                    <!-- LAYER NR. 3 -->
                                    <div class="tp-caption tp-resizeme rs-parallaxlevel-2" 
                                        data-x="['center','center','center','center']" data-hoffset="['0','0','35','0']" 
                                        data-y="['middle','middle','middle','middle']" data-voffset="['110','110','110','110']" 
                                        data-width="none"
                                        data-height="none"
                                        data-whitespace="nowrap"
                                        data-transform_idle="o:1;"
                             
                                        data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;" 
                                        data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" 
                                        data-mask_in="x:0px;y:[100%];" 
                                        data-mask_out="x:inherit;y:inherit;" 
                                        data-start="2000" 
                                        data-splitin="none" 
                                        data-splitout="none" 
                                        data-responsive_offset="on" 
                                        style="z-index: 6; white-space: nowrap;">
                                        <h5 class="cp-title">Fruits ~ Vegetables ~ Foods ~ Cosmetics </h5>
                                    </div>

                                    <!-- LAYER NR. 4 -->
                                    <div class="tp-caption tp-resizeme rs-parallaxlevel-2" 
                                        data-x="['center','center','center','center']" data-hoffset="['0','0','35','0']" 
                                        data-y="['middle','middle','middle','middle']" data-voffset="['160','160','160','160']" 
                                        data-width="none"
                                        data-height="none"
                                        data-whitespace="nowrap"
                                        data-transform_idle="o:1;"
                             
                                        data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;" 
                                        data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" 
                                        data-mask_in="x:0px;y:[100%];" 
                                        data-mask_out="x:inherit;y:inherit;" 
                                        data-start="2500" 
                                        data-splitin="none" 
                                        data-splitout="none" 
                                        data-responsive_offset="on" 
                                        style="z-index: 6; white-space: nowrap;">
                                        <h5 class="cp-title-2">We are providing highest quality Organics Products for USA almo</h5>
                                    </div>



            
                                
                                </li>



                                <!-- SLIDE2  -->
                                <li data-index="rs-18" data-transition="zoomin" data-slotamount="7"  data-easein="Power4.easeInOut" data-easeout="Power4.easeInOut" data-masterspeed="2000"  data-thumb="images/home/slide-2.jpg"  data-rotate="0"  data-saveperformance="off"  data-title="Successful Careers" data-description="">
                                    <!-- MAIN IMAGE -->
                                    <img src="images/home/slide-2.jpg"  alt=""  data-bgposition="top center" class="rev-slidebg" data-no-retina>
                                    <!-- LAYERS -->
                                    <div class="tp-caption tp-resizeme" 
                                        data-x="['center','center','center','center']" data-hoffset="['80','80','80','80']" 
                                        data-y="['middle','middle','middle','middle']" data-voffset="['-160','-160','-160','-160']"
                                        data-width="none"
                                        data-height="none"
                                        data-transform_idle="o:1;"
                                        data-transform_in="z:0;rX:0deg;rY:0;rZ:0;sX:1.5;sY:1.5;skX:0;skY:0;opacity:0;s:1500;e:Power3.easeInOut;" 
                                        data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" 
                                        data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" 
                                        data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" 
                                        data-start="1000"
                                        data-splitout="none" 
                                        data-responsive_offset="on" 
                                        data-elementdelay="0.05" 
                                        style="z-index: 5;">
                                        <img src="images/home/4.png" alt="">
                                    </div>
                                    <div class="tp-caption tp-resizeme banner-caption-box"
                                        data-x="right" data-hoffset="0" 
                                        data-y="top" data-voffset="260"
                                        data-transform_idle="o:1;"         
                                        data-transform_in="x:[-175%];y:0px;z:0;rX:0;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0.01;s:3000;e:Power3.easeOut;" 
                                        data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" 
                                        data-mask_in="x:[100%];y:0;s:inherit;e:inherit;" 
                                        data-splitin="none" 
                                        data-splitout="none"                         
                                        data-start="1000">
                                        <div class="banner-caption-h1">Get Blackberry <br>Pack With 50% Off</div>
                                        <div class="banner-caption-p"><p>Great explorer of the truth, the master-builder of human happiness no sed one rejects <br>dislikes, or avoids pleasure itself, because it is pleasure.</p></div>
                                        <a href="#" class="thm-btn contuct-us">shop now</a>
                                    </div>
                                </li>



                            
                                <!-- SLIDE3  -->
                                <li data-index="rs-20" data-transition="zoomin" data-slotamount="7"  data-easein="Power4.easeInOut" data-easeout="Power4.easeInOut" data-masterspeed="2000"  data-thumb="images/home/slide-3.jpg"  data-rotate="0"  data-saveperformance="off"  data-title="Your Success" data-description="">
                                    <!-- MAIN IMAGE -->
                                    <img src="images/home/slide-3.jpg"  alt=""  data-bgposition="top center"  class="rev-slidebg" data-no-retina>
                                    <!-- LAYERS -->
                                    

                                    <!-- LAYER NR. 1 -->
                                    <div class="tp-caption tp-resizeme" 
                                        data-x="['center','center','center','center']" data-hoffset="['0','0','35','0']" 
                                        data-y="['middle','middle','middle','middle']" data-voffset="['-120','-120','-120','-120']"
                                        data-width="none"
                                        data-height="none"
                                        data-transform_idle="o:1;"
                                        data-transform_in="z:0;rX:0deg;rY:0;rZ:0;sX:1.5;sY:1.5;skX:0;skY:0;opacity:0;s:1500;e:Power3.easeInOut;" 
                                        data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" 
                                        data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" 
                                        data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" 
                                        data-start="1000"
                                        data-splitout="none" 
                                        data-responsive_offset="on" 
                                        data-elementdelay="0.05" 
                                        style="z-index: 5;">
                                        <img src="images/home/3.png" alt="">
                                    </div>


                                    <!-- LAYER NR. 1 -->
                                    <div class="tp-caption tp-resizeme text-center"
                                        data-x="center" data-hoffset="0" 
                                        data-y="center" data-voffset="-40"
                                        data-transform_idle="o:1;"         
                                        data-transform_in="x:[-175%];y:0px;z:0;rX:0;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0.01;s:3000;e:Power3.easeOut;" 
                                        data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" 
                                        data-mask_in="x:[100%];y:0;s:inherit;e:inherit;" 
                                        data-splitin="none" 
                                        data-splitout="none"                         
                                        data-start="500">
                                        <div class="banner-caption-h2">Natural Healthy Foods</div>                    
                                    </div>
                                    <div class="tp-caption tp-resizeme text-center"
                                        data-x="center" data-hoffset="0" 
                                        data-y="top" data-voffset="360"
                                        data-transform_idle="o:1;"                         
                                        data-transform_in="x:[175%];y:0px;z:0;rX:0;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0.01;s:3000;e:Power3.easeOut;" 
                                        data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" 
                                        data-mask_in="x:[-100%];y:0;s:inherit;e:inherit;" 
                                        data-splitin="none" 
                                        data-splitout="none" 
                                        data-responsive_offset="on"                         
                                        data-start="1400">  
                                        <div class="banner-caption-h3">With Your Affortable</div>                  
                                        <div class="banner-caption-p"><p>Great explorer of the truth, the master-builder of human happin</p></div>                  
                                        <a href="#" class="color1-bg contuct-us">shop now</a>
                                    </div>
                                </li>
                            </ul>   
                        </div>
                    </div><!-- END REVOLUTION SLIDER -->
            </div> <!-- End of #banner -->




            <!-- about Section ************************** -->
            <div class="about_section">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12t">
                            <div class="item wow fadeInLef" style="background-image: url(images/about/1.jpg);">
                                <div class="offer-sec">
                                    <div class="inner-title">For All Cosmetics<div class="offer"><span>30% <br>OFF</span></div></div>
                                </div>
                                <div class="content">
                                    <h3>We Grow Beauty</h3>
                                    <p>It is a long established fact that a reader will be <br> distracted by the readable content of a page when <br> looking organic cosmetics.</p>
                                    <div class="link-btn"><a href="#" class="tran3s">More Products<span class="fa fa-sort-desc"></span></a></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12t">
                            <div class="item wow fadeInRight" style="background-image: url(images/about/2.jpg);">
                                <div class="offer-sec">
                                    <div class="inner-title">For All Cosmetics<div class="offer"><span>30% <br>OFF</span></div></div>
                                </div>
                                <div class="content">
                                    <h3>We Grow Beauty</h3>
                                    <p>It is a long established fact that a reader will be <br> distracted by the readable content of a page when <br> looking organic cosmetics.</p>
                                    <div class="link-btn"><a href="#" class="tran3s">More Products<span class="fa fa-sort-desc"></span></a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> <!-- End of .container -->
            </div> <!-- End of .welcome_section -->


                <!--feature Section-->
            <section class="featured-product">
                <div class="container">

                    <div class="theme_title center">
                        <h3>FEATURED PRODUCTS</h3>
                    </div>

                    <!--Filter-->
                    <div class="filters text-center">
                        <ul class="filter-tabs filter-btns clearfix">
                            <li class="filter active" data-role="button" data-filter="all"><span class="txt">All Products</span></li>
                            <li class="filter" data-role="button" data-filter=".fruits"><span class="txt">fruits</span></li>
                            <li class="filter" data-role="button" data-filter=".vegetables"><span class="txt">vegetables</span></li>
                            <li class="filter" data-role="button" data-filter=".beauty"><span class="txt">beauty</span></li>
                            <li class="filter" data-role="button" data-filter=".others"><span class="txt">others</span></li>
                        </ul>
                    </div>

                    <div class="row filter-list clearfix" id="MixItUp717B05">
                        
                        <!--Default Item-->
                        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 mix mix_all default-item all beauty others" style="display: inline-block;">
                            <div class="inner-box">
                                <div class="single-item center">
                                    <figure class="image-box"><img src="images/shop/1.png" alt=""><div class="product-model new">New</div></figure>
                                    <div class="content">
                                        <h3><a href="shop-single.html">Turmeric Powder</a></h3>
                                        <div class="rating"><span class="fa fa-star"></span> <span class="fa fa-star"></span> <span class="fa fa-star"></span> <span class="fa fa-star"></span> <span class="fa fa-star"></span></div>
                                        <div class="price">$12.99 <span class="prev-rate">$14.99</span></div>
                                    </div>
                                    <div class="overlay-box">
                                        <div class="inner">
                                            <div class="top-content">
                                                <ul>
                                                    <li><a href="#"><span class="fa fa-eye"></span></a></li>
                                                    <li class="tultip-op"><span class="tultip"><i class="fa fa-sort-desc"></i>ADD TO CART</span><a href="#"><span class="icon-icon-32846"></span></a>
                                                        
                                                    </li>
                                                    <li><a href="#"><span class="fa fa-heart-o"></span></a></li>
                                                </ul>
                                            </div>
                                            <div class="bottom-content">
                                                <h4><a href="#">It Contains:</a></h4>
                                                <p>35% of organic raisins 55% of oats and 10% of butter. </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <!--Default Item-->
                        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 mix mix_all default-item all others" style="display: inline-block;">
                            <div class="inner-box">
                                <div class="single-item center">
                                    <figure class="image-box"><img src="images/shop/2.png" alt=""></figure>
                                    <div class="content">
                                        <h3><a href="shop-single.html">Turmeric Powder</a></h3>
                                        <div class="rating"><span class="fa fa-star"></span> <span class="fa fa-star"></span> <span class="fa fa-star"></span> <span class="fa fa-star"></span> <span class="fa fa-star"></span></div>
                                        <div class="price">$12.99 <span class="prev-rate">$14.99</span></div>
                                    </div>
                                    <div class="overlay-box">
                                        <div class="inner">
                                            <div class="top-content">
                                                <ul>
                                                    <li><a href="#"><span class="fa fa-eye"></span></a></li>
                                                    <li class="tultip-op"><span class="tultip"><i class="fa fa-sort-desc"></i>ADD TO CART</span><a href="#"><span class="icon-icon-32846"></span></a>
                                                        
                                                    </li>
                                                    <li><a href="#"><span class="fa fa-heart-o"></span></a></li>
                                                </ul>
                                            </div>
                                            <div class="bottom-content">
                                                <h4><a href="#">It Contains:</a></h4>
                                                <p>35% of organic raisins 55% of oats and 10% of butter. </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <!--Default Item-->
                        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 mix mix_all default-item all fruits vegetables beauty" style="display: inline-block;">
                            <div class="inner-box">
                                <div class="single-item center">
                                    <figure class="image-box"><img src="images/shop/3.png" alt=""><div class="product-model hot">Hot</div></figure>
                                    <div class="content">
                                        <h3><a href="shop-single.html">Turmeric Powder</a></h3>
                                        <div class="rating"><span class="fa fa-star"></span> <span class="fa fa-star"></span> <span class="fa fa-star"></span> <span class="fa fa-star"></span> <span class="fa fa-star"></span></div>
                                        <div class="price">$12.99 <span class="prev-rate">$14.99</span></div>
                                    </div>
                                    <div class="overlay-box">
                                        <div class="inner">
                                            <div class="top-content">
                                                <ul>
                                                    <li><a href="#"><span class="fa fa-eye"></span></a></li>
                                                    <li class="tultip-op"><span class="tultip"><i class="fa fa-sort-desc"></i>ADD TO CART</span><a href="#"><span class="icon-icon-32846"></span></a>
                                                        
                                                    </li>
                                                    <li><a href="#"><span class="fa fa-heart-o"></span></a></li>
                                                </ul>
                                            </div>
                                            <div class="bottom-content">
                                                <h4><a href="#">It Contains:</a></h4>
                                                <p>35% of organic raisins 55% of oats and 10% of butter. </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <!--Default Item-->
                        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 mix mix_all default-item all beauty others" style="display: inline-block;">
                            <div class="inner-box">
                                <div class="single-item center">
                                    <figure class="image-box"><img src="images/shop/4.png" alt=""></figure>
                                    <div class="content">
                                        <h3><a href="shop-single.html">Turmeric Powder</a></h3>
                                        <div class="rating"><span class="fa fa-star"></span> <span class="fa fa-star"></span> <span class="fa fa-star"></span> <span class="fa fa-star"></span> <span class="fa fa-star"></span></div>
                                        <div class="price">$12.99 <span class="prev-rate">$14.99</span></div>
                                    </div>
                                    <div class="overlay-box">
                                        <div class="inner">
                                            <div class="top-content">
                                                <ul>
                                                    <li><a href="#"><span class="fa fa-eye"></span></a></li>
                                                    <li class="tultip-op"><span class="tultip"><i class="fa fa-sort-desc"></i>ADD TO CART</span><a href="#"><span class="icon-icon-32846"></span></a>
                                                        
                                                    </li>
                                                    <li><a href="#"><span class="fa fa-heart-o"></span></a></li>
                                                </ul>
                                            </div>
                                            <div class="bottom-content">
                                                <h4><a href="#">It Contains:</a></h4>
                                                <p>35% of organic raisins 55% of oats and 10% of butter. </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <!--Default Item-->
                        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 mix mix_all default-item all fruits others" style="display: inline-block;">
                            <div class="inner-box">
                                <div class="single-item center">
                                    <figure class="image-box"><img src="images/shop/5.png" alt=""></figure>
                                    <div class="content">
                                        <h3><a href="shop-single.html">Turmeric Powder</a></h3>
                                        <div class="rating"><span class="fa fa-star"></span> <span class="fa fa-star"></span> <span class="fa fa-star"></span> <span class="fa fa-star"></span> <span class="fa fa-star"></span></div>
                                        <div class="price">$12.99 <span class="prev-rate">$14.99</span></div>
                                    </div>
                                    <div class="overlay-box">
                                        <div class="inner">
                                            <div class="top-content">
                                                <ul>
                                                    <li><a href="#"><span class="fa fa-eye"></span></a></li>
                                                    <li class="tultip-op"><span class="tultip"><i class="fa fa-sort-desc"></i>ADD TO CART</span><a href="#"><span class="icon-icon-32846"></span></a>
                                                        
                                                    </li>
                                                    <li><a href="#"><span class="fa fa-heart-o"></span></a></li>
                                                </ul>
                                            </div>
                                            <div class="bottom-content">
                                                <h4><a href="#">It Contains:</a></h4>
                                                <p>35% of organic raisins 55% of oats and 10% of butter. </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <!--Default Item-->
                        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 mix mix_all default-item all fruits vegetables beauty others" style="display: inline-block;">
                            <div class="inner-box">
                                <div class="single-item center">
                                    <figure class="image-box"><img src="images/shop/6.png" alt=""><div class="product-model new">New</div></figure>
                                    <div class="content">
                                        <h3><a href="shop-single.html">Turmeric Powder</a></h3>
                                        <div class="rating"><span class="fa fa-star"></span> <span class="fa fa-star"></span> <span class="fa fa-star"></span> <span class="fa fa-star"></span> <span class="fa fa-star"></span></div>
                                        <div class="price">$12.99 <span class="prev-rate">$14.99</span></div>
                                    </div>
                                    <div class="overlay-box">
                                        <div class="inner">
                                            <div class="top-content">
                                                <ul>
                                                    <li><a href="#"><span class="fa fa-eye"></span></a></li>
                                                    <li class="tultip-op"><span class="tultip"><i class="fa fa-sort-desc"></i>ADD TO CART</span><a href="#"><span class="icon-icon-32846"></span></a>
                                                        
                                                    </li>
                                                    
                                                    <li><a href="#"><span class="fa fa-heart-o"></span></a></li>
                                                </ul>
                                            </div>
                                            <div class="bottom-content">
                                                <h4><a href="#">It Contains:</a></h4>
                                                <p>35% of organic raisins 55% of oats and 10% of butter. </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <!--Default Item-->
                        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 mix mix_all default-item all fruits others" style="display: inline-block;">
                            <div class="inner-box">
                               <div class="single-item center">
                                    <figure class="image-box"><img src="images/shop/7.png" alt=""></figure>
                                    <div class="content">
                                        <h3><a href="shop-single.html">Turmeric Powder</a></h3>
                                        <div class="rating"><span class="fa fa-star"></span> <span class="fa fa-star"></span> <span class="fa fa-star"></span> <span class="fa fa-star"></span> <span class="fa fa-star"></span></div>
                                        <div class="price">$12.99 <span class="prev-rate">$14.99</span></div>
                                    </div>
                                    <div class="overlay-box">
                                        <div class="inner">
                                            <div class="top-content">
                                                <ul>
                                                    <li><a href="#"><span class="fa fa-eye"></span></a></li>
                                                    <li class="tultip-op"><span class="tultip"><i class="fa fa-sort-desc"></i>ADD TO CART</span><a href="#"><span class="icon-icon-32846"></span></a>
                                                        
                                                    </li>
                                                    <li><a href="#"><span class="fa fa-heart-o"></span></a></li>
                                                </ul>
                                            </div>
                                            <div class="bottom-content">
                                                <h4><a href="#">It Contains:</a></h4>
                                                <p>35% of organic raisins 55% of oats and 10% of butter. </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <!--Default Item-->
                        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 mix mix_all default-item all fruits vegetables beauty others" style="display: inline-block;">
                            <div class="inner-box">
                               <div class="single-item center">
                                    <figure class="image-box"><img src="images/shop/8.png" alt=""><div class="product-model hot">Hot</div></figure>
                                    <div class="content">
                                        <h3><a href="shop-single.html">Turmeric Powder</a></h3>
                                        <div class="rating"><span class="fa fa-star"></span> <span class="fa fa-star"></span> <span class="fa fa-star"></span> <span class="fa fa-star"></span> <span class="fa fa-star"></span></div>
                                        <div class="price">$12.99 <span class="prev-rate">$14.99</span></div>
                                    </div>
                                    <div class="overlay-box">
                                        <div class="inner">
                                            <div class="top-content">
                                                <ul>
                                                    <li><a href="#"><span class="fa fa-eye"></span></a></li>
                                                    <li class="tultip-op"><span class="tultip"><i class="fa fa-sort-desc"></i>ADD TO CART</span><a href="#"><span class="icon-icon-32846"></span></a>
                                                        
                                                    </li>
                                                    
                                                    <li><a href="#"><span class="fa fa-heart-o"></span></a></li>
                                                </ul>
                                            </div>
                                            <div class="bottom-content">
                                                <h4><a href="#">It Contains:</a></h4>
                                                <p>35% of organic raisins 55% of oats and 10% of butter. </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
                    
            </section><!-- End of section -->


            <!-- Request Quote ******************************* -->
            <section class="why_choose_us">
                <div class="theme_title_bg" style="background-image: url(images/background/1.jpg);">
                    <div class="theme_title center">
                        <div class="container">
                            <h2>Why to Choose Us</h2>
                            <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered <br>alteration in some form, by injected humour.</p>
                            
                        </div>
                    </div>
                    
                </div>
                
                <div class="container">
                     <!-- End of .theme_title_center -->

                    <div class="row">

                        <!-- ______________ Item _____________ -->
                        <div class="col-md-6 col-sm-12 col-xs-12">
                            <div class="choose_us_item tran3s">
                                <div class="icon p_color_bg border_round float_left"><span class="ficon icon-fruit-1"></span></div> <!-- End of .icon -->
                                <div class="text float_left">
                                    <h5 class="tran3s">100% Organic Products</h5>
                                    <p class="tran3s">Duis aute irure dolor in reprehenderit voluptate velit esse seds cillum dolore eu fugiat nulla pariatur excepteur sint occaecat.</p>
                                </div> <!-- End of .text -->
                                <div class="clear_fix"></div>
                            </div> <!-- End of .choose_us_item -->
                        </div> <!-- End of .col -->

                        <!-- ______________ Item _____________ -->
                        <div class="col-md-6 col-sm-12 col-xs-12">
                            <div class="choose_us_item tran3s">
                                <div class="icon p_color_bg border_round float_left"><span class="ficon icon-wheat"></span></div> <!-- End of .icon -->
                                <div class="text float_left">
                                    <h5 class="tran3s">Any Time, Anywhere Delivery</h5>
                                    <p class="tran3s">Duis aute irure dolor in reprehenderit voluptate velit esse seds cillum dolore eu fugiat nulla pariatur excepteur sint occaecat.</p>
                                </div> <!-- End of .text -->
                                <div class="clear_fix"></div>
                            </div> <!-- End of .choose_us_item -->
                        </div> <!-- End of .col -->

                        <!-- ______________ Item _____________ -->
                        <div class="col-md-6 col-sm-12 col-xs-12">
                            <div class="choose_us_item tran3s">
                                <div class="icon p_color_bg border_round float_left"><span class="ficon icon-food-2"></span></div> <!-- End of .icon -->
                                <div class="text float_left">
                                    <h5 class="tran3s">Keeps Your Family Healthy</h5>
                                    <p class="tran3s">Duis aute irure dolor in reprehenderit voluptate velit esse seds cillum dolore eu fugiat nulla pariatur excepteur sint occaecat.</p>
                                </div> <!-- End of .text -->
                                <div class="clear_fix"></div>
                            </div> <!-- End of .choose_us_item -->
                        </div> <!-- End of .col -->

                        <!-- ______________ Item _____________ -->
                        <div class="col-md-6 col-sm-12 col-xs-12">
                            <div class="choose_us_item tran3s">
                                <div class="icon p_color_bg border_round float_left"><span class="ficon icon-fruit"></span></div> <!-- End of .icon -->
                                <div class="text float_left">
                                    <h5 class="tran3s">Clean, Fresh and Safety</h5>
                                    <p class="tran3s">Duis aute irure dolor in reprehenderit voluptate velit esse seds cillum dolore eu fugiat nulla pariatur excepteur sint occaecat.</p>
                                </div> <!-- End of .text -->
                                <div class="clear_fix"></div>
                            </div> <!-- End of .choose_us_item -->
                        </div> <!-- End of .col -->
                    </div>
                </div> <!-- End of .container -->
            </section> <!-- End of why chooreus -->



            <!--gallery Section-->
            <section class="gallery">
                <div class="container">

                    <div class="theme_title">
                        <h3>Top Selling Products</h3>
                    </div>


                    <div class="row filter-list clearfix">
                        
                        <!--Default Item-->
                        <div class="col-md-4 col-sm-6 col-xs-12 mix mix_all default-item all beauty others" style="display: inline-block;">
                            <div class="inner-box">
                                <div class="single-item center">
                                    <figure class="image-box"><img src="images/gallery/1.jpg" alt=""></figure>
                                    <div class="overlay-box">
                                        <div class="inner">
                                            <div class="image-view">
                                                <div class="icon-holder">
                                                    <a href="images/gallery/1.jpg" class="fancybox" data-fancybox-group="home-gallery" title="Gardener Gallery"><span class="icon-magnifier"></span></a>
                                                </div>
                                            </div>
                                            <div class="bottom-content">
                                                <h4><a href="#">Coffee Break Cake</a></h4>
                                                <div class="price">$12.99 <span class="prev-rate">$14.99</span></div>
                                                <div class="icon-box"><a href="shop-cart.html"><span class="icon-icon-32846"></span></a></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <!--Default Item-->
                        <div class="col-md-4 col-sm-6 col-xs-12 mix mix_all default-item all others" style="display: inline-block;">
                            <div class="inner-box">
                                <div class="single-item center">
                                    <figure class="image-box"><img src="images/gallery/2.jpg" alt=""></figure>
                                    <div class="overlay-box">
                                        <div class="inner">
                                            <div class="image-view">
                                                <div class="icon-holder">
                                                    <a href="images/gallery/1.jpg" class="fancybox" data-fancybox-group="home-gallery" title="Gardener Gallery"><span class="icon-magnifier"></span></a>
                                                </div>
                                            </div>
                                            <div class="bottom-content">
                                                <h4><a href="#">Coffee Break Cake</a></h4>
                                                <div class="price">$12.99 <span class="prev-rate">$14.99</span></div>
                                                <div class="icon-box"><a href="shop-cart.html"><span class="icon-icon-32846"></span></a></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <!--Default Item-->
                        <div class="col-md-4 col-sm-6 col-xs-12 mix mix_all default-item all fruits vegetables beauty" style="display: inline-block;">
                            <div class="inner-box">
                                <div class="single-item center">
                                    <figure class="image-box"><img src="images/gallery/3.jpg" alt=""></figure>
                                    <div class="overlay-box">
                                        <div class="inner">
                                            <div class="image-view">
                                                <div class="icon-holder">
                                                    <a href="images/gallery/1.jpg" class="fancybox" data-fancybox-group="home-gallery" title="Gardener Gallery"><span class="icon-magnifier"></span></a>
                                                </div>
                                            </div>
                                            <div class="bottom-content">
                                                <h4><a href="#">Coffee Break Cake</a></h4>
                                                <div class="price">$12.99 <span class="prev-rate">$14.99</span></div>
                                                <div class="icon-box"><a href="shop-cart.html"><span class="icon-icon-32846"></span></a></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <!--Default Item-->
                        <div class="col-md-4 col-sm-6 col-xs-12 mix mix_all default-item all beauty others" style="display: inline-block;">
                            <div class="inner-box">
                                <div class="single-item center">
                                    <figure class="image-box"><img src="images/gallery/4.jpg" alt=""></figure>
                                    <div class="overlay-box">
                                        <div class="inner">
                                            <div class="image-view">
                                                <div class="icon-holder">
                                                    <a href="images/gallery/1.jpg" class="fancybox"><span class="icon-magnifier"></span></a>
                                                </div>
                                            </div>
                                            <div class="bottom-content">
                                                <h4><a href="#">Coffee Break Cake</a></h4>
                                                <div class="price">$12.99 <span class="prev-rate">$14.99</span></div>
                                                <div class="icon-box"><a href="shop-cart.html"><span class="icon-icon-32846"></span></a></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <!--Default Item-->
                        <div class="col-md-4 col-sm-6 col-xs-12 mix mix_all default-item all fruits others" style="display: inline-block;">
                            <div class="inner-box">
                                <div class="single-item center">
                                    <figure class="image-box"><img src="images/gallery/5.jpg" alt=""></figure>
                                    <div class="overlay-box">
                                        <div class="inner">
                                            <div class="image-view">
                                                <div class="icon-holder">
                                                    <a href="images/gallery/1.jpg" class="fancybox"><span class="icon-magnifier"></span></a>
                                                </div>
                                            </div>
                                            <div class="bottom-content">
                                                <h4><a href="#">Coffee Break Cake</a></h4>
                                                <div class="price">$12.99 <span class="prev-rate">$14.99</span></div>
                                                <div class="icon-box"><a href="shop-cart.html"><span class="icon-icon-32846"></span></a></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <!--Default Item-->
                        <div class="col-md-4 col-sm-6 col-xs-12 mix mix_all default-item all fruits vegetables beauty others" style="display: inline-block;">
                            <div class="inner-box">
                                <div class="single-item center">
                                    <figure class="image-box"><img src="images/gallery/6.jpg" alt=""></figure>
                                    <div class="overlay-box">
                                        <div class="inner">
                                            <div class="image-view">
                                                <div class="icon-holder">
                                                    <a href="images/gallery/1.jpg" class="fancybox"><span class="icon-magnifier"></span></a>
                                                </div>
                                            </div>
                                            <div class="bottom-content">
                                                <h4><a href="#">Coffee Break Cake</a></h4>
                                                <div class="price">$12.99 <span class="prev-rate">$14.99</span></div>
                                                <div class="icon-box"><a href="shop-cart.html"><span class="icon-icon-32846"></span></a></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        
                    </div>
                </div>
                    
            </section><!-- End of section -->

            <section class="news">
                <div class="container">
                    <div class="theme_title center">
                        <h3>our latest news</h3>
                    </div>
                    <div class="row">
                        <div class="col-md-4 col-sm-6 col-xs-12">
                            <div class="blogList_single_post clear_fix wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
                                <div class="img_holder">
                                    <img src="images/blog/1.jpg" alt="News" class="img-responsive">
                                    <div class="opacity tran3s">
                                        <div class="icon">
                                            <span><a href="blog-details.html" class="border_round">+</a></span>
                                        </div> <!-- End of .icon -->
                                    </div> <!-- End of .opacity -->
                                </div> <!-- End of .img_holder -->
                                <div class="post">
                                    <ul>
                                        <li><a href="blog-details.html" class="tran3s"><i class="fa fa-tag" aria-hidden="true"></i> Healthy</a></li>
                                        <li><a href="blog-details.html" class="tran3s"><i class="fa fa-clock-o" aria-hidden="true"></i> J21st Aug, 2015</a></li>
                                        <li><a href="blog-details.html" class="tran3s"><i class="fa fa-comments" aria-hidden="true"></i> 26</a></li>
                                    </ul>
                                    <div class="text">
                                        <h4><a href="blog-details.html">You should add 5 things in your daily meals.</a></h4>
                                        <p>As more and more people are turning to organic lifestyles & trying improve their health...</p>
                                        <div class="link"><a href="#" class="tran3s">READ MORE<span class="fa fa-sort-desc"></span></a></div>
                                        
                                    </div>
                                    
                                </div> <!-- End of .post -->
                            </div>
                            
                        </div>
                        <div class="col-md-4 col-sm-6 col-xs-12">
                            <div class="blogList_single_post clear_fix wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
                                <div class="img_holder">
                                    <img src="images/blog/2.jpg" alt="News" class="img-responsive">
                                    <div class="opacity tran3s">
                                        <div class="icon">
                                            <span><a href="blog-details.html" class="border_round">+</a></span>
                                        </div> <!-- End of .icon -->
                                    </div> <!-- End of .opacity -->
                                </div> <!-- End of .img_holder -->
                                <div class="post">
                                    <ul>
                                        <li><a href="blog-details.html" class="tran3s"><i class="fa fa-tag" aria-hidden="true"></i> Healthy</a></li>
                                        <li><a href="blog-details.html" class="tran3s"><i class="fa fa-clock-o" aria-hidden="true"></i> J21st Aug, 2015</a></li>
                                        <li><a href="blog-details.html" class="tran3s"><i class="fa fa-comments" aria-hidden="true"></i> 26</a></li>
                                    </ul>
                                    <div class="text">
                                        <h4><a href="blog-details.html">You should add 5 things in your daily meals.</a></h4>
                                        <p>As more and more people are turning to organic lifestyles & trying improve their health...</p>
                                        <div class="link"><a href="#" class="tran3s">READ MORE<span class="fa fa-sort-desc"></span></a></div>
                                        
                                    </div>
                                    
                                </div> <!-- End of .post -->
                            </div>
                            
                        </div>
                        <div class="col-md-4 col-sm-6 col-xs-12">
                            <div class="blogList_single_post clear_fix wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
                                <div class="img_holder">
                                    <img src="images/blog/3.jpg" alt="News" class="img-responsive">
                                    <div class="opacity tran3s">
                                        <div class="icon">
                                            <span><a href="blog-details.html" class="border_round">+</a></span>
                                        </div> <!-- End of .icon -->
                                    </div> <!-- End of .opacity -->
                                </div> <!-- End of .img_holder -->
                                <div class="post">
                                    <ul>
                                        <li><a href="blog-details.html" class="tran3s"><i class="fa fa-tag" aria-hidden="true"></i> Healthy</a></li>
                                        <li><a href="blog-details.html" class="tran3s"><i class="fa fa-clock-o" aria-hidden="true"></i> J21st Aug, 2015</a></li>
                                        <li><a href="blog-details.html" class="tran3s"><i class="fa fa-comments" aria-hidden="true"></i> 26</a></li>
                                    </ul>
                                    <div class="text">
                                        <h4><a href="blog-details.html">You should add 5 things in your daily meals.</a></h4>
                                        <p>As more and more people are turning to organic lifestyles & trying improve their health...</p>
                                        <div class="link"><a href="#" class="tran3s">READ MORE<span class="fa fa-sort-desc"></span></a></div>
                                        
                                    </div>
                                    
                                </div> <!-- End of .post -->
                            </div>
                            
                        </div>
                        
                    </div>
                </div>
            </section>



            <!-- Our Service ****************************** -->
            <div class="our_farmer">
                <div class="container">
                    <div class="theme_title center">
                        <h2>our farmers</h2>
                    </div>
                    
                    <div class="row">
                        <div class="service_slider owl-carousel owl-theme">
                            
                                <div class="item center">
                                    <div class="img_holder">
                                        <img src="images/team/1.jpg" alt="images">
                                        <div class="overlay tran3s">
                                            <div class="inner-box">
                                                <ul>
                                                    <li><a href="#"><span class="fa fa-facebook"></span></a></li>
                                                    <li><a href="#"><span class="fa fa-twitter"></span></a></li>
                                                    <li><a href="#"><span class="fa fa-google-plus"></span></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="text">
                                        <h4>Rebecca Garzany</h4>
                                        <a href="turnaround.html"><h5>Pastoral Farmer</h5></a>
                                        <p> Praising pain was born and I will give you a <br>complete account of the system.</p>
                                    </div>
                                </div> <!-- End of .item -->

                                <div class="item center">
                                    <div class="img_holder">
                                        <img src="images/team/2.jpg" alt="images">
                                        <div class="overlay tran3s">
                                            <div class="inner-box">
                                                <ul>
                                                    <li><a href="#"><span class="fa fa-facebook"></span></a></li>
                                                    <li><a href="#"><span class="fa fa-twitter"></span></a></li>
                                                    <li><a href="#"><span class="fa fa-google-plus"></span></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="text">
                                        <h4>George William</h4>
                                        <a href="turnaround.html"><h5>Arable Farmer</h5></a>
                                        <p> Praising pain was born and I will give you a <br>complete account of the system.</p>
                                    </div>
                                </div> <!-- End of .item -->

                                <div class="item center">
                                    <div class="img_holder">
                                        <img src="images/team/3.jpg" alt="images">
                                        <div class="overlay tran3s">
                                            <div class="inner-box">
                                                <ul>
                                                    <li><a href="#"><span class="fa fa-facebook"></span></a></li>
                                                    <li><a href="#"><span class="fa fa-twitter"></span></a></li>
                                                    <li><a href="#"><span class="fa fa-google-plus"></span></a></li>
                                                </ul>
                                            </div>
                                                
                                        </div>
                                    </div>
                                    <div class="text">
                                        <h4>Giana Fernando</h4>
                                        <a href="turnaround.html"><h5>Farm Manager</h5></a>
                                        <p> Praising pain was born and I will give you a <br>complete account of the system.</p>
                                    </div>
                                </div> <!-- End of .item -->


                        </div> <!-- End of .service_slider -->
                    </div>
                </div>
            </div> <!-- End of .our_service -->



            <!--Testimonials Section-->
            <section class="testimonials-section" style="background-image:url(images/parallax/1.jpg);">
                <div class="container">
                    <div class="theme_title">
                        <h2>testimonials</h2>
                    </div>
                    <div class="testimonials-carousel">
                    
                        <!--Slide Item-->
                        <div class="slide-item">
                            <div class="inner-box">
                                <div class="content">
                                    <div class="text-bg">
                                        <div class="quote-icon"><span class="fa fa-quote-left"></span></div>
                                        <div class="text">Who do not know how to pursue an sed pleasure rationally encounter that are extremely win painful nor again is there anyone who loves or pursues or desires obtain pain itself circumstances.</div>                       
                                    </div>
                                    <div class="info clearfix">
                                        <div class="author-thumb"><img src="images/team/a1.png" alt=""></div>
                                        <div class="author">William Border</div>
                                        <div class="author-title">Designer</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <!--Slide Item-->
                        <div class="slide-item">
                            <div class="inner-box">
                                <div class="content">
                                    <div class="text-bg">
                                        <div class="quote-icon"><span class="fa fa-quote-left"></span></div>
                                        <div class="text">Who do not know how to pursue an sed pleasure rationally encounter that are extremely win painful nor again is there anyone who loves or pursues or desires obtain pain itself circumstances.</div>                       
                                    </div>
                                    <div class="info clearfix">
                                        <div class="author-thumb"><img src="images/team/a2.png" alt=""></div>
                                        <div class="author">Jessy Federar</div>
                                        <div class="author-title">Cor.Manager</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <!--Slide Item-->
                        <div class="slide-item">
                            <div class="inner-box">
                                <div class="content">
                                    <div class="text-bg">
                                        <div class="quote-icon"><span class="fa fa-quote-left"></span></div>
                                        <div class="text">Who do not know how to pursue an sed pleasure rationally encounter that are extremely win painful nor again is there anyone who loves or pursues or desires obtain pain itself circumstances.</div>                       
                                    </div>
                                    <div class="info clearfix">
                                        <div class="author-thumb"><img src="images/team/a3.png" alt=""></div>
                                        <div class="author">Mark Antony</div>
                                        <div class="author-title">Designer</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--Slide Item-->
                        <div class="slide-item">
                            <div class="inner-box">
                                <div class="content">
                                    <div class="text-bg">
                                        <div class="quote-icon"><span class="fa fa-quote-left"></span></div>
                                        <div class="text">Who do not know how to pursue an sed pleasure rationally encounter that are extremely win painful nor again is there anyone who loves or pursues or desires obtain pain itself circumstances.</div>                       
                                    </div>
                                    <div class="info clearfix">
                                        <div class="author-thumb"><img src="images/team/a1.png" alt=""></div>
                                        <div class="author">William Border</div>
                                        <div class="author-title">Designer</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <!--Slide Item-->
                        <div class="slide-item">
                            <div class="inner-box">
                                <div class="content">
                                    <div class="text-bg">
                                        <div class="quote-icon"><span class="fa fa-quote-left"></span></div>
                                        <div class="text">Who do not know how to pursue an sed pleasure rationally encounter that are extremely win painful nor again is there anyone who loves or pursues or desires obtain pain itself circumstances.</div>                       
                                    </div>
                                    <div class="info clearfix">
                                        <div class="author-thumb"><img src="images/team/a2.png" alt=""></div>
                                        <div class="author">Jessy Federar</div>
                                        <div class="author-title">Cor.Manager</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <!--Slide Item-->
                        <div class="slide-item">
                            <div class="inner-box">
                                <div class="content">
                                    <div class="text-bg">
                                        <div class="quote-icon"><span class="fa fa-quote-left"></span></div>
                                        <div class="text">Who do not know how to pursue an sed pleasure rationally encounter that are extremely win painful nor again is there anyone who loves or pursues or desires obtain pain itself circumstances.</div>                       
                                    </div>
                                    <div class="info clearfix">
                                        <div class="author-thumb"><img src="images/team/a3.png" alt=""></div>
                                        <div class="author">Mark Antony</div>
                                        <div class="author-title">Designer</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--Slide Item-->
                        <div class="slide-item">
                            <div class="inner-box">
                                <div class="content">
                                    <div class="text-bg">
                                        <div class="quote-icon"><span class="fa fa-quote-left"></span></div>
                                        <div class="text">Who do not know how to pursue an sed pleasure rationally encounter that are extremely win painful nor again is there anyone who loves or pursues or desires obtain pain itself circumstances.</div>                       
                                    </div>
                                    <div class="info clearfix">
                                        <div class="author-thumb"><img src="images/team/a1.png" alt=""></div>
                                        <div class="author">William Border</div>
                                        <div class="author-title">Designer</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <!--Slide Item-->
                        <div class="slide-item">
                            <div class="inner-box">
                                <div class="content">
                                    <div class="text-bg">
                                        <div class="quote-icon"><span class="fa fa-quote-left"></span></div>
                                        <div class="text">Who do not know how to pursue an sed pleasure rationally encounter that are extremely win painful nor again is there anyone who loves or pursues or desires obtain pain itself circumstances.</div>                       
                                    </div>
                                    <div class="info clearfix">
                                        <div class="author-thumb"><img src="images/team/a2.png" alt=""></div>
                                        <div class="author">Jessy Federar</div>
                                        <div class="author-title">Cor.Manager</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <!--Slide Item-->
                        <div class="slide-item">
                            <div class="inner-box">
                                <div class="content">
                                    <div class="text-bg">
                                        <div class="quote-icon"><span class="fa fa-quote-left"></span></div>
                                        <div class="text">Who do not know how to pursue an sed pleasure rationally encounter that are extremely win painful nor again is there anyone who loves or pursues or desires obtain pain itself circumstances.</div>                       
                                    </div>
                                    <div class="info clearfix">
                                        <div class="author-thumb"><img src="images/team/a3.png" alt=""></div>
                                        <div class="author">Mark Antony</div>
                                        <div class="author-title">Designer</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </section>

            <!-- Partner Logo********************** -->

            <div class="partners wow fadeInUp">
                <div class="container">
                    <div id="partner_logo" class="owl-carousel owl-theme">
                        <div class="item"><img src="images/partner-logo/1.png" alt="logo"></div>
                        <div class="item"><img src="images/partner-logo/2.png" alt="logo"></div>
                        <div class="item"><img src="images/partner-logo/3.png" alt="logo"></div>
                        <div class="item"><img src="images/partner-logo/4.png" alt="logo"></div>
                        <div class="item"><img src="images/partner-logo/1.png" alt="logo"></div>
                        <div class="item"><img src="images/partner-logo/2.png" alt="logo"></div>
                        <div class="item"><img src="images/partner-logo/3.png" alt="logo"></div>
                        <div class="item"><img src="images/partner-logo/4.png" alt="logo"></div>
                        <div class="item"><img src="images/partner-logo/1.png" alt="logo"></div>
                        <div class="item"><img src="images/partner-logo/2.png" alt="logo"></div>
                        <div class="item"><img src="images/partner-logo/3.png" alt="logo"></div>
                        <div class="item"><img src="images/partner-logo/4.png" alt="logo"></div>

                    </div> <!-- End .partner_logo -->
                </div>
            </div>





            <section class="call-out">
                <div class="container">
                    <div class="float_left">
                        <h2>Subscribe For Newsletter</h2>
                        <p>We send you latest news couple a month ( No Spam).</p>
                    </div>
                    <div class="float_right">
                        <div class="contact-box">

                            <form method="post" action="sendemail.php" class="contact-form" novalidate="novalidate">
                                    
                                <div class="row clearfix">
                                    <div class="form-group">
                                        <input type="text" name="username" value="" placeholder="Your Name*"><i class="fa fa-user" aria-hidden="true"></i>

                                    </div>

                                    <div class="form-group">
                                        <input type="email" name="username" value="" placeholder="Email Address*"><i class="fa fa-envelope" aria-hidden="true"></i>
                                    </div>
                                   

                                    <div class="form-group">
                                        <button type="submit" name="submit" class="btn-style-one center">Submit now</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Footer************************* -->
            <footer>
                <div class="main_footer">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 footer_logo">
                                <a href="index.html"><img src="images/logo/logo-2.png" alt="Logo"></a>
                                <p>Denouncing pleasures and praising pain was born and I will give you a complete account of the system.</p><p>Expound that actual teachings the great explorer of the truth, the master-builder of human happiness no one rejects, likes, or avoids pleasure itself rationally. </p>

                                <a href="#" class="tran3s">buy theme</a>
                        
                            </div> <!-- End of .footer_logo -->

                            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 footer_news">
                                <h5>recent post</h5>

                                <div class="recent-posts">
                                    <div class="post">
                                        <div class="post-thumb"><a href="#"><img src="images/blog/p1.jpg" alt=""></a></div>
                                        <h4><a href="#">Control your cholestrol & fat in 2 weeks</a></h4>
                                        <div class="post-info"><i class="fa fa-clock-o"></i>08th Sep, 2015</div>
                                    </div>
                                    <div class="post">
                                        <div class="post-thumb"><a href="#"><img src="images/blog/p2.jpg" alt=""></a></div>
                                        <h4><a href="#">Control your cholestrol & fat in 2 weeks</a></h4>
                                        <div class="post-info"><i class="fa fa-clock-o"></i>08th Sep, 2015</div>
                                    </div>
                                    <div class="post">
                                        <div class="post-thumb"><a href="#"><img src="images/blog/p3.jpg" alt=""></a></div>
                                        <h4><a href="#">Control your cholestrol & fat in 2 weeks</a></h4>
                                        <div class="post-info"><i class="fa fa-clock-o"></i>08th Sep, 2015</div>
                                    </div>
                                </div>
                            </div> <!-- End of .footer_news -->

                            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 footer_subscribe">
                                <h5>categoreis</h5>
                                <ul class="list catagories">
                                    <li><a href="#"><i class="fa fa-angle-right"></i>Arable & Postoral Farmers</a></li>
                                    <li><a href="#"><i class="fa fa-angle-right"></i>Become a Member</a></li>
                                    <li><a href="#"><i class="fa fa-angle-right"></i>Shop Our Prodcuts</a></li>
                                </ul>
                                <div class="widget popular-tags">
                                    <div class="sidebar-title"><h5>tags</h5></div>
                                    
                                    <a href="#">Fruits</a>
                                    <a href="#">Cosmetics</a>
                                    <a href="#">Farmers</a>
                                    <a href="#">Healthy</a>
                                    <a href="#">Catering</a>                     
                                    <a href="#">Post Format</a>                                         
                                </div>
                            </div> <!-- End of .footer_subscribe -->


                            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 footer_contact">
                                <h5>Get In Touch</h5>
                                <ul class="list catagories">
                                    <li><a href="#"><i class="fa fa-envelope"></i>Organic store@gmail.com</a></li>
                                    <li><a href="#"><i class="fa fa-phone"></i>+91 (321) 758 142 5698</a></li>
                                    <li><a href="#"><i class="fa fa-home"></i>No 271, Red Cross Building, Modern Street, Newyork City, USA.</a></li>
                                </ul>

                                <h5>Business Hours</h5>
                                <div class="list Business">
                                    <p>Monday - Friday: 09.00am to 07.00pm <br>Saturday: 10.00am to 05.00pm <br>Sunday: <span>Closed</span></p>
                                </div>
                                
                            </div> <!-- End of .footer_contact -->
                        </div>
                    </div>
                </div> <!-- End of .main_footer -->

                <div class="bottom_footer clear_fix">
                    <div class="container">
                        <h6 class="pull-left">Copyrights © 2015 All Rights Reserved by<a href="http://themeforest.net/user/steelthemes/portfolio" target="_blank">Steelthemes</a></h6>
                        <ul class="social_icon pull-right">
                            <li><a href="" class="tran3s"><i class="fa fa-cc-visa" aria-hidden="true"></i></a></li>
                            <li><a href="" class="tran3s"><i class="fa fa-cc-mastercard" aria-hidden="true"></i></a></li>
                            <li><a href="" class="tran3s"><i class="fa fa-paypal" aria-hidden="true"></i></a></li>
                            <li><a href="" class="tran3s"><i class="fa fa-credit-card-alt" aria-hidden="true"></i></a></li>
                            <li><a href="" class="tran3s"><i class="fa fa-cc-discover" aria-hidden="true"></i></a></li>
                        </ul>
                    </div>
                </div>
            </footer>


            <!-- Scroll Top Button -->
            <button class="scroll-top tran3s color2_bg">
                <span class="fa fa-angle-up"></span>
            </button>
            <!-- pre loader  -->
            <div id="loader-wrapper">
                <div id="loader"></div>
            </div>
    



        <!-- Js File_________________________________ -->

        <!-- j Query -->
        <script type="text/javascript" src="js/jquery-2.1.4.js"></script>
        <!-- Bootstrap JS -->
        <script type="text/javascript" src="js/bootstrap.min.js"></script>

        <!-- Vendor js _________ -->
        <!-- Google map js -->
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCRvBPo3-t31YFk588DpMYS6EqKf-oGBSI"></script> <!-- Gmap Helper -->
        <script src="js/gmap.js"></script>
        <!-- owl.carousel -->
        <script type="text/javascript" src="js/owl.carousel.min.js"></script>
        <!-- ui js -->
        <script type="text/javascript" src="js/jquery-ui.min.js"></script>
        <!-- Responsive menu-->
        <script type="text/javascript" src="js/menuzord.js"></script>
        <!-- revolution -->
        <script src="vendor/revolution/jquery.themepunch.tools.min.js"></script>
        <script src="vendor/revolution/jquery.themepunch.revolution.min.js"></script>
        <script type="text/javascript" src="vendor/revolution/revolution.extension.slideanims.min.js"></script>
        <script type="text/javascript" src="vendor/revolution/revolution.extension.layeranimation.min.js"></script>
        <script type="text/javascript" src="vendor/revolution/revolution.extension.navigation.min.js"></script>
        <script type="text/javascript" src="vendor/revolution/revolution.extension.kenburn.min.js"></script>
        <script type="text/javascript" src="vendor/revolution/revolution.extension.actions.min.js"></script>
        <script type="text/javascript" src="vendor/revolution/revolution.extension.parallax.min.js"></script>
        <script type="text/javascript" src="vendor/revolution/revolution.extension.migration.min.js"></script>

        <!-- landguage switcher js -->
        <script type="text/javascript" src="js/jquery.polyglot.language.switcher.js"></script>
        <!-- Fancybox js -->
        <script type="text/javascript" src="js/jquery.fancybox.pack.js"></script>
        <!-- js count to -->
        <script type="text/javascript" src="js/jquery.appear.js"></script>
        <script type="text/javascript" src="js/jquery.countTo.js"></script>
        <!-- WOW js -->
        <script type="text/javascript" src="js/wow.min.js"></script>

        <script type="text/javascript" src="js/SmoothScroll.js"></script>

        <script src="js/bootstrap-select.min.js"></script>
        <script src="js/jquery.mixitup.min.js"></script>
        <!-- Theme js -->
        <script type="text/javascript" src="js/theme.js"></script>
        <script type="text/javascript" src="js/google-map.js"></script>

        </div> <!-- End of .main_page -->
    </body>
</html>