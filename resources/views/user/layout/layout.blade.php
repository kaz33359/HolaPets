 <!DOCTYPE html>
 <html lang="en">
 
 
<head>
     <meta charset="UTF-8">
     <meta http-equiv="x-ua-compatible" content="ie=edge" />
     <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
 
      <!-- Primary Meta Tags -->
      <title>Holapetz - @yield('pagetitle')</title>
      <meta name="title" content="Holapetz - Social Community & Marketplace">
      <meta name="description" content="">
      <meta name="author" content="Holapetz - Social Community & Marketplace">
  
      <!-- Open Graph / Facebook -->
      <meta property="og:type" content="website">
      <meta property="og:url" content="https://thedaxads.com/">
      <meta property="og:title" content="Holapetz - Social Community & Marketplace">
      <meta property="og:description" content="">
      <meta property="og:image" content="assets/images/Holalogo/metaImg.jpg"/>
  
      <!-- Twitter -->
      <meta property="twitter:card" content="summary_large_image">
      <meta property="twitter:url" content="https://thedaxads.com/">
      <meta property="twitter:title" content="Holapetz - Social Community & Marketplace">
      <meta property="twitter:description" content="">
      <meta property="twitter:image" content="assets/images/Holalogo/metaImg.jpg"/>
  
      <!--== Favicon ==-->
      <link rel="shortcut icon" href="assets/images/Holalogo/favImg.png" type="image/x-icon" />
 
     <!-- css Icon Font -->
     <link rel="stylesheet" href="assets/css/vendor/ecicons.min.css" />
 
     <!-- css All Plugins Files -->
     <link rel="stylesheet" href="assets/css/plugins/animate.css" />
     <link rel="stylesheet" href="assets/css/plugins/swiper-bundle.min.css" />
     <link rel="stylesheet" href="assets/css/plugins/jquery-ui.min.css" />
     <link rel="stylesheet" href="assets/css/plugins/countdownTimer.css" />
     <link rel="stylesheet" href="assets/css/plugins/slick.min.css" />
     <link rel="stylesheet" href="assets/css/plugins/bootstrap.css" />
 
     <!-- Main Style -->
     <link rel="stylesheet" href="assets/css/style.css" />
     <link rel="stylesheet" href="assets/css/responsive.css" />
     <link rel="stylesheet" href="assets/css/footer.css">
     
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
     <a href="https://api.whatsapp.com/send?phone=919633444855" class="float" target="_blank">
     <i class="fa fa-whatsapp my-float"></i>
     </a>
 
     <!-- Background css -->
     <link rel="stylesheet" id="bg-switcher-css" href="assets/css/backgrounds/bg-4.css">
 </head>
<body class="aboutus_page">
    <div id="ec-overlay">
        <div class="ec-ellipsis">
            <div></div>
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>

    <!-- Header start  -->
    <header class="ec-header">
        <!--Ec Header Top Start -->
        <div class="header-top">
            <div class="container">
                <div class="row align-items-center">
                    <!-- Header Top social Start -->
                    <div class="col text-left header-top-left d-none d-lg-block">
                        <div class="header-top-social">
                            <span class="social-text text-upper">Follow us on:</span>
                            <ul class="mb-0">
                                <li class="list-inline-item"><a class="hdr-facebook" href="#"><i
                                            class="ecicon eci-facebook"></i></a></li>
                                <li class="list-inline-item"><a class="hdr-twitter" href="#"><i
                                            class="ecicon eci-twitter"></i></a></li>
                                <li class="list-inline-item"><a class="hdr-instagram" href="#"><i
                                            class="ecicon eci-instagram"></i></a></li>
                                <li class="list-inline-item"><a class="hdr-linkedin" href="#"><i
                                            class="ecicon eci-linkedin"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- Header Top social End -->
                    <!-- Header Top Message Start -->
                    <div class="col text-center header-top-center">
                        <div class="header-top-message text-upper">
                            <span>Free Shipping</span>This Week Order Over - $75
                        </div>
                    </div>
                    <!-- Header Top Message End -->
                    <!-- Header Top Language Currency -->
                    <div class="col header-top-right d-none d-lg-block">
                        <div class="header-top-lan-curr d-flex justify-content-end">
                            <!-- Currency Start -->
                            <div class="header-top-curr dropdown">
                                <!-- <button class="dropdown-toggle text-upper" data-bs-toggle="dropdown">Currency <i
                                        class="ecicon eci-caret-down" aria-hidden="true"></i></button>
                                <ul class="dropdown-menu">
                                    <li class="active"><a class="dropdown-item" href="#">USD $</a></li>
                                    <li><a class="dropdown-item" href="#">EUR €</a></li>
                                </ul> -->
                            </div>
                            <!-- Currency End -->
                            <!-- Language Start -->
                            <div class="header-top-lan dropdown">
                                <!-- <button class="dropdown-toggle text-upper" data-bs-toggle="dropdown">Language <i
                                        class="ecicon eci-caret-down" aria-hidden="true"></i></button>
                                <ul class="dropdown-menu">
                                    <li class="active"><a class="dropdown-item" href="#">English</a></li>
                                    <li><a class="dropdown-item" href="#">Italiano</a></li>
                                </ul> -->
                            </div>
                            <!-- Language End -->

                        </div>
                    </div>
                    <!-- Header Top Language Currency -->
                    <!-- Header Top responsive Action -->
                    <div class="col d-lg-none ">
                        <div class="ec-header-bottons">
                            <!-- Header User Start -->
                            <div class="ec-header-user dropdown">
                                <button class="dropdown-toggle" data-bs-toggle="dropdown"><i class="fi-rr-user"></i></button>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a class="dropdown-item" href="register.html">Register</a></li>
                                    <li><a class="dropdown-item" href="{{ url ('user/checkout') }}">Checkout</a></li>
                                    <li><a class="dropdown-item" href="login.html">Login</a></li>
                                    <li><a class="dropdown-item" href="{{ url ('user/userProfile') }}">My Profile</a></li>
                                </ul>
                            </div>
                            <!-- Header User End -->
                            <!-- Header Cart Start -->
                            <a href="{{ url ('user/wishlist') }}" class="ec-header-btn ec-header-wishlist">
                                <div class="header-icon"><i class="fi-rr-heart"></i></div>
                                <span class="ec-header-count">4</span>
                            </a>
                            <!-- Header Cart End -->
                            <!-- Header Cart Start -->
                            <a href="#ec-side-cart" class="ec-header-btn ec-side-toggle">
                                <div class="header-icon"><i class="fi-rr-shopping-bag"></i></div>
                                <span class="ec-header-count cart-count-lable">3</span>
                            </a>
                            <!-- Header Cart End -->
                            <!-- Header menu Start -->
                            <a href="#ec-mobile-menu" class="ec-header-btn ec-side-toggle d-lg-none">
                                <i class="fi fi-rr-menu-burger"></i>
                            </a>
                            <!-- Header menu End -->
                        </div>
                    </div>
                    <!-- Header Top responsive Action -->
                </div>
            </div>
        </div>
        <!-- Ec Header Top  End -->
        <!-- Ec Header Bottom  Start -->
        <div class="ec-header-bottom d-none d-lg-block">
            <div class="container position-relative">
                <div class="row">
                    <div class="ec-flex">
                        <!-- Ec Header Logo Start -->
                        <div class="align-self-center">
                            <div class="header-logo">
                                <a href="{{ url ('/') }}"><img src="assets/images/Holalogo/footerLogo.png" alt="Site Logo" /><img
                                        class="dark-logo" src="assets/images/Holalogo/footerLogo.png" alt="Site Logo"
                                        style="display: none;" /></a>
                            </div>
                        </div>
                        <!-- Ec Header Logo End -->

                        <!-- Ec Header Search Start -->
                        <div class="align-self-center">
                            <div class="header-search">
                                <form class="ec-btn-group-form" action="#">
                                    <input class="form-control ec-search-bar" placeholder="Search products..."
                                        type="text">
                                    <button class="submit" type="submit"><i class="fi-rr-search"></i></button>
                                </form>
                            </div>
                        </div>
                        <!-- Ec Header Search End -->

                        <!-- Ec Header Button Start -->
                        <div class="align-self-center">
                            <div class="ec-header-bottons">

                                <!-- Header User Start -->
                                <div class="ec-header-user dropdown">
                                    <button class="dropdown-toggle" data-bs-toggle="dropdown"><i class="fi-rr-user"></i></button>
                                    <ul class="dropdown-menu dropdown-menu-right">
                                        <li><a class="dropdown-item" href="register.html">Register</a></li>
                                        <li><a class="dropdown-item" href="{{ url ('user/checkout') }}">Checkout</a></li>
                                        <li><a class="dropdown-item" href="login.html">Login</a></li>
                                        <li><a class="dropdown-item" href="{{ url ('user/userProfile') }}">My Profile</a></li>
                                    </ul>
                                </div>
                                <!-- Header User End -->
                                <!-- Header wishlist Start -->
                                <a href="{{ url ('user/wishlist') }}" class="ec-header-btn ec-header-wishlist">
                                    <div class="header-icon"><i class="fi-rr-heart"></i></div>
                                    <span class="ec-header-count">4</span>
                                </a>
                                <!-- Header wishlist End -->
                                <!-- Header Cart Start -->
                                <a href="#ec-side-cart" class="ec-header-btn ec-side-toggle">
                                    <div class="header-icon"><i class="fi-rr-shopping-bag"></i></div>
                                    <span class="ec-header-count cart-count-lable">3</span>
                                </a>
                                <!-- Header Cart End -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Ec Header Button End -->
        <!-- Header responsive Bottom  Start -->
        <div class="ec-header-bottom d-lg-none">
            <div class="container position-relative">
                <div class="row ">

                    <!-- Ec Header Logo Start -->
                    <div class="col">
                        <div class="header-logo">
                            <a href="{{ url ('/') }}"><img src="assets/images/Holalogo/footerLogo.png" alt="Site Logo" /><img
                                    class="dark-logo" src="assets/images/Holalogo/footerLogo.png" alt="Site Logo"
                                    style="display: none;" /></a>
                        </div>
                    </div>
                    <!-- Ec Header Logo End -->
                    <!-- Ec Header Search Start -->
                    <div class="col">
                        <div class="header-search">
                            <form class="ec-btn-group-form" action="#">
                                <input class="form-control ec-search-bar" placeholder="Search products..." type="text">
                                <button class="submit" type="submit"><i class="fi-rr-search"></i></button>
                            </form>
                        </div>
                    </div>
                    <!-- Ec Header Search End -->
                </div>
            </div>
        </div>
        <!-- Header responsive Bottom  End -->
        <!-- EC Main Menu Start -->
        <div id="ec-main-menu-desk" class="d-none d-lg-block sticky-nav">
            <div class="container position-relative">
                <div class="row">
                    <div class="col-md-12 align-self-center">
                        <div class="ec-main-menu">
                            <ul>
                                <li><a href="{{ url ('/') }}">Home</a></li>
                                <li class="dropdown"><a href="{{ url ('user/about') }}">About</a>
                                    <!-- <ul class="sub-menu">
                                        <li><a href="about-us.html">About Us</a></li>
                                        <li><a href="contact-us.html">Contact Us</a></li>
                                        <li><a href="cart.html">Cart</a></li>
                                        <li><a href="checkout.html">Checkout</a></li>
                                        <li><a href="compare.html">Compare</a></li>
                                        <li><a href="faq.html">FAQ</a></li>
                                        <li><a href="login.html">Login</a></li>
                                        <li><a href="register.html">Register</a></li>
                                        <li><a href="track-order.html">Track Order</a></li>
                                        <li><a href="terms-condition.html">Terms Condition</a></li>
                                        <li><a href="privacy-policy.html">Privacy Policy</a></li>
                                    </ul> -->
                                </li>
                                <li class="dropdown position-static"><a href="javascript:void(0)">Dogs</a>
                                    <ul class="mega-menu d-block">
                                        <li class="d-flex">
                                            <ul class="d-block">
                                                <li class="menu_title"><a href="javascript:void(0)">FOODS</a></li>
                                                <li><a href="{{ url ('user/products') }}">Dry Foods</a>
                                                </li>
                                                <li><a href="{{ url ('user/products') }}">Wet Food</a>
                                                </li>
                                                <li><a href="{{ url ('user/products') }}">Puppy Food</a>
                                                </li>
                                                <li><a href="{{ url ('user/products') }}">Grain Free Food</a>
                                                </li>
                                                <li><a href="{{ url ('user/products') }}">Hypoallergenic Food</a></li>
                                                <li><a href="{{ url ('user/products') }}">Supplements</a></li>
                                                <br>
                                                <li class="menu_title"><a href="javascript:void(0)">TREATS, BISCUITS & CHEWS</a></li>
                                                <li><a href="{{ url ('user/products') }}">Biscuits</a>
                                                </li>
                                                <li><a href="{{ url ('user/products') }}">Vegetarian Treats</a>
                                                </li>
                                                <li><a href="{{ url ('user/products') }}">Natural Treats</a>
                                                </li>
                                                <li><a href="{{ url ('user/products') }}">Puppy Treats</a>
                                                </li>
                                                <li><a href="{{ url ('user/products') }}">Dental Treats</a></li>
                                                <li><a href="{{ url ('user/products') }}">Soft & Hard Chews</a></li>
                                                <!-- <li><a href="{{ url ('user/products') }}">View All Treats</a></li> -->

                                            </ul>
                                            <ul class="d-block">
                                                <li class="menu_title"><a href="javascript:void(0)">WALK ESSENTIALS</a></li>
                                                <li><a href="{{ url ('user/products') }}">Collars</a></li>
                                                <li><a href="{{ url ('user/products') }}">Leashes</a></li>
                                                <li><a href="{{ url ('user/products') }}">Harnesses</a></li>
                                                <li><a href="{{ url ('user/products') }}">Name Tags</a></li>
                                                <li><a href="{{ url ('user/products') }}">Collar & Leash Set</a>
                                                </li>
                                                <!-- <li><a href="{{ url ('user/products') }}">Personalised</a></li> -->

                                                <br>
                                                <li class="menu_title"><a href="javascript:void(0)">BEDDING & MATS</a></li>
                                                <li><a href="{{ url ('user/products') }}">Beds</a></li>
                                                <li><a href="{{ url ('user/products') }}">Mats</a></li>
                                                <li><a href="{{ url ('user/products') }}">Blankets & Cushions</a></li>
                                                <li><a href="{{ url ('user/products') }}">Bed Covers</a></li>
                                                <li><a href="{{ url ('user/products') }}">Collar & Leash Set</a>
                                                </li>
                                                <!-- <li><a href="{{ url ('user/products') }}">Personalised Bedding</a></li> -->
                                            </ul>
                                            <ul class="d-block">
                                                <li class="menu_title"><a href="javascript:void(0)">GROOMING</a></li>
                                                <li><a href="{{ url ('user/products') }}">Shampoos, Conditioners</a></li>
                                                <li><a href="{{ url ('user/products') }}">Brushes & Combs</a></li>
                                                <li><a href="{{ url ('user/products') }}">Towels & Wipes</a></li>
                                                <li><a href="{{ url ('user/products') }}">Tick & Flea</a></li>
                                                <li><a href="{{ url ('user/products') }}">Dry Baths & Perfumes</a></li>
                                                <li><a href="{{ url ('user/products') }}">Paw Care</a></li>
                                                <li><a href="{{ url ('user/products') }}">Detangling Solutions</a></li>
                                                <br>

                                                <li class="menu_title"><a href="javascript:void(0)">CLOTHING</a></li>
                                                <li><a href="{{ url ('user/products') }}">Jackets</a></li>
                                                <li><a href="{{ url ('user/products') }}">Sweatshirts</a></li>
                                                <li><a href="{{ url ('user/products') }}">Sweaters</a></li>
                                                <li><a href="{{ url ('user/products') }}">Raincoats</a></li>
                                                <li><a href="{{ url ('user/products') }}">T-Shirts & Shirts</a></li>
                                                <li><a href="{{ url ('user/products') }}">Dresses</a></li>
                                                <li><a href="{{ url ('user/products') }}">Special Occasion Wear</a></li>
                                            </ul>
                                            <ul class="d-block">
                                                <li class="menu_title"><a href="javascript:void(0)">TRAVEL</a>
                                                </li>
                                                <li><a href="{{ url ('user/products') }}">Ramps & Steps</a></li>
                                                <li><a href="{{ url ('user/products') }}">Crates & Carriers</a></li>
                                            <br>
                                            <li class="menu_title"><a href="javascript:void(0)">DOGS TOYS</a>
                                            </li>
                                            <li><a href="{{ url ('user/products') }}">Chew Toys</a></li>
                                            <li><a href="{{ url ('user/products') }}">Balls</a></li>
                                            <li><a href="{{ url ('user/products') }}">Interactive Toys</a></li>
                                            <li><a href="{{ url ('user/products') }}">Tough Chewers</a></li>
                                            <li><a href="{{ url ('user/products') }}">Rope Toys</a></li>
                                            <!-- <li><a href="{{ url ('user/products') }}">View All Toys</a></li> -->
                                            </ul>
                                            
                                            <ul class="d-block">
                                                <li class="menu_title"><a href="javascript:void(0)">BOWLS & DINERS</a></li>
                                                <li><a href="{{ url ('user/products') }}">Steel Bowls</a></li>
                                                <li><a href="{{ url ('user/products') }}">Elevated Bowls</a></li>
                                                <li><a href="{{ url ('user/products') }}">Slow Feeders</a></li>
                                                <li><a href="{{ url ('user/products') }}">Licki Mats</a></li>
                                                <li><a href="{{ url ('user/products') }}">Anti Spills Mat</a>
                                                    
                                                    <br>
                                                    <li class="menu_title"><a href="javascript:void(0)">HEALTH & HYGIENE</a></li>
                                                <li><a href="{{ url ('user/products') }}">Supplements</a></li>
                                                <li><a href="{{ url ('user/products') }}">Oral Care</a></li>
                                                <li><a href="{{ url ('user/products') }}">Tick & Flea</a></li>
                                                <li><a href="{{ url ('user/products') }}">Stain & Odour</a></li>
                                                <li><a href="{{ url ('user/products') }}">Pee-Lock Powder</a>
                                                </li>
                                            </ul>
                                            <ul class="d-block">
                                                <li class="menu_title"><a href="javascript:void(0)">DOG ACCESSORIES</a></li>
                                                <li><a href="{{ url ('user/products') }}">Bow Ties & Bandanas</a></li>
                                                <li><a href="{{ url ('user/products') }}">Party Accessories</a></li>
                                                <li><a href="{{ url ('user/products') }}">Shoes & Socks</a></li>
                                                
                                                <br>
                                                <li class="menu_title"><a href="javascript:void(0)">TRAINING AIDS</a></li>
                                                <li><a href="{{ url ('user/products') }}">Training Pads & Diapers</a></li>
                                                <li><a href="{{ url ('user/products') }}">Pens & Barriers</a></li>
                                                <li><a href="{{ url ('user/products') }}">Agility</a></li>
                                                <li><a href="{{ url ('user/products') }}">Training Treats</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <ul class="ec-main-banner w-100">
                                                <li><a class="p-0" href="{{ url ('user/products') }}"><img style="height: 160px; width: 305px;"
                                                            class="img-responsive" src="assets/images/holapetz/dropBan.jpg"
                                                            alt=""></a></li>
                                                <li><a class="p-0" href="{{ url ('user/products') }}"><img style="height: 160px; width: 305px;"
                                                            class="img-responsive" src="assets/images/holapetz/dropBan2.jpg"
                                                            alt=""></a></li>
                                                <li><a class="p-0" href="{{ url ('user/products') }}"><img style="height: 160px; width: 305px;"
                                                            class="img-responsive" src="assets/images/holapetz/dropBan3.jpg"
                                                            alt=""></a></li>
                                                <li><a class="p-0" href="{{ url ('user/products') }}"><img style="height: 160px; width: 305px;"
                                                            class="img-responsive" src="assets/images/holapetz/dropBan4.jpeg"
                                                            alt=""></a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li class="dropdown position-static"><a href="javascript:void(0)">Cats</a>
                                    <ul class="mega-menu d-block">
                                        <li class="d-flex">
                                            <ul class="d-block">
                                                <li class="menu_title"><a href="javascript:void(0)">FOODS</a></li>
                                                <li><a href="{{ url ('user/products') }}">Wet Food</a>
                                                </li>
                                                <li><a href="{{ url ('user/products') }}">Dry Food</a>
                                                </li>
                                                <li><a href="{{ url ('user/products') }}">Kitten Food</a>
                                                </li>
                                                <br>
                                                <li class="menu_title"><a href="javascript:void(0)">LITTER & SUPPLIES</a></li>
                                                <li><a href="{{ url ('user/products') }}">Litter</a></li>
                                                <li><a href="{{ url ('user/products') }}">Toilets & Trays</a>
                                                </li>
                                                <li><a href="{{ url ('user/products') }}">Scoopers</a>
                                                </li>
                                                <li><a href="{{ url ('user/products') }}">Stain & Odour</a>
                                                </li>
                                                
                                            </ul>
                                            <ul class="d-block">
                                                <li class="menu_title"><a href="javascript:void(0)">TREATS</a></li>
                                                <li><a href="{{ url ('user/products') }}">Natural Treats</a></li>
                                                <li><a href="{{ url ('user/products') }}">Creamy Treats</a></li>
                                                
                                                <br>
                                                <li class="menu_title"><a href="javascript:void(0)">CARRIERS</a></li>
                                                <li><a href="{{ url ('user/products') }}">Crates</a></li>
                                                <li><a href="{{ url ('user/products') }}">Carriers</a></li>
                                            </ul>
                                            <ul class="d-block">
                                                <li class="menu_title"><a href="javascript:void(0)">CAT GROOMING</a></li>
                                                <li><a href="{{ url ('user/products') }}">Cat Shampoos</a></li>
                                                <li><a href="{{ url ('user/products') }}">Towels & Wipes</a></li>
                                                <li><a href="{{ url ('user/products') }}">Stain & Odour</a></li>
                                                <li><a href="{{ url ('user/products') }}">Tick & Flea</a></li>
                                                <li><a href="{{ url ('user/products') }}">Brushes & Combs</a>
                                                </li>
                                                
                                                <br>
                                                <li class="menu_title"><a href="javascript:void(0)">CAT BEDDING</a></li>
                                                <li><a href="{{ url ('user/products') }}">Tents</a></li>
                                                <li><a href="{{ url ('user/products') }}">Beds</a></li>
                                                
                                            </ul>
                                            <ul class="d-block">
                                                <li class="menu_title"><a href="javascript:void(0)">COLLARS & ACCESSORIES</a>
                                                </li>
                                                <li><a href="{{ url ('user/products') }}">Collars</a></li>
                                                <li><a href="{{ url ('user/products') }}">Harnesses</a></li>
                                                <li><a href="{{ url ('user/products') }}">Bandanas</a>
                                                    
                                                    <br>
                                                    <li class="menu_title"><a href="javascript:void(0)">TOYS</a>
                                                </li>
                                                <li><a href="{{ url ('user/products') }}">Plush Toys</a></li>
                                                <li><a href="{{ url ('user/products') }}">Interactive Toys</a></li>
                                                <li><a href="{{ url ('user/products') }}">Catnip</a>
                                                    <li><a href="{{ url ('user/products') }}">Scratchers</a></li>
                                                <li><a href="{{ url ('user/products') }}">Scratchers</a></li>
                                                
                                            </ul>
                                        </li>
                                        <li>
                                            <ul class="ec-main-banner w-100">
                                                <li><a class="p-0" href="{{ url ('user/products') }}"><img style="height: 160px; width: 305px;"
                                                            class="img-responsive" src="assets/images/holapetz/catBan1.jpg"
                                                            alt=""></a></li>
                                                <li><a class="p-0" href="{{ url ('user/products') }}"><img style="height: 160px; width: 305px;"
                                                            class="img-responsive" src="assets/images/holapetz/catBan2.jpeg"
                                                            alt=""></a></li>
                                                <li><a class="p-0" href="{{ url ('user/products') }}"><img style="height: 160px; width: 305px;"
                                                            class="img-responsive" src="assets/images/holapetz/catBan3.jpg"
                                                            alt=""></a></li>
                                                <li><a class="p-0" href="{{ url ('user/products') }}"><img style="height: 160px; width: 305px;"
                                                            class="img-responsive" src="assets/images/holapetz/catBan4.jpg"
                                                            alt=""></a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li class="dropdown position-static"><a href="javascript:void(0)">Other Animals</a>
                                    <ul class="mega-menu d-block">
                                        <li class="d-flex">
                                            <ul class="d-block">
                                                <li><a href="product.html"> <img  src="assets/images/holapetz/dog.png" alt="">Dog </a>
                                                </li>
                                            </ul>

                                            <ul class="d-block">    
                                                <li><a href="product.html"> <img  src="assets/images/holapetz/rabbit.png" alt="">Rabbit </a>
                                                </li>
                                            </ul>

                                            <ul class="d-block">    
                                                <li><a href="product.html"> <img  src="assets/images/holapetz/parrot.png" alt="">Parrot </a>
                                                </li>
                                            </ul>

                                            <ul class="d-block">    
                                                <li><a href="product.html"> <img  src="assets/images/holapetz/bird.png" alt="">Other birds </a>
                                                </li>
                                            </ul>
                                            
                                        </li>
                                    </ul>
                                </li>
                                
                                <!-- <li class="dropdown"><span class="main-label-note-new" data-toggle="tooltip"
                                        title="NEW"></span><a href="javascript:void(0)">Others</a>
                                    <ul class="sub-menu">
                                        <li class="dropdown position-static"><a href="javascript:void(0)">Mail
                                                Confirmation
                                                <i class="ecicon eci-angle-right"></i></a>
                                            <ul class="sub-menu sub-menu-child">
                                                <li><a href="email-template-confirm-1.html">Mail Confirmation 1</a></li>
                                                <li><a href="email-template-confirm-2.html">Mail Confirmation 2</a></li>
                                                <li><a href="email-template-confirm-3.html">Mail Confirmation 3</a></li>
                                                <li><a href="email-template-confirm-4.html">Mail Confirmation 4</a></li>
                                                <li><a href="email-template-confirm-5.html">Mail Confirmation 5</a></li>
                                            </ul>
                                        </li>
                                        <li class="dropdown position-static"><a href="javascript:void(0)">Mail Reset
                                                password
                                                <i class="ecicon eci-angle-right"></i></a>
                                            <ul class="sub-menu sub-menu-child">
                                                <li><a href="email-template-forgot-password-1.html">Reset password 1</a>
                                                </li>
                                                <li><a href="email-template-forgot-password-2.html">Reset password 2</a>
                                                </li>
                                                <li><a href="email-template-forgot-password-3.html">Reset password 3</a>
                                                </li>
                                                <li><a href="email-template-forgot-password-4.html">Reset password 4</a>
                                                </li>
                                                <li><a href="email-template-forgot-password-5.html">Reset password 5</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="dropdown position-static"><a href="javascript:void(0)">Mail
                                                Promotional
                                                <i class="ecicon eci-angle-right"></i></a>
                                            <ul class="sub-menu sub-menu-child">
                                                <li><a href="email-template-offers-1.html">Offer mail 1</a></li>
                                                <li><a href="email-template-offers-2.html">Offer mail 2</a></li>
                                                <li><a href="email-template-offers-3.html">Offer mail 3</a></li>
                                                <li><a href="email-template-offers-4.html">Offer mail 4</a></li>
                                                <li><a href="email-template-offers-5.html">Offer mail 5</a></li>
                                                <li><a href="email-template-offers-6.html">Offer mail 6</a></li>
                                                <li><a href="email-template-offers-7.html">Offer mail 7</a></li>
                                                <li><a href="email-template-offers-8.html">Offer mail 8</a></li>
                                            </ul>
                                        </li>
                                        <li class="dropdown position-static">
                                            <span class="label-note-hot"></span>
                                            <a href="javascript:void(0)">Vendor account pages
                                                <i class="ecicon eci-angle-right"></i></a>
                                            <ul class="sub-menu sub-menu-child">
                                                <li><a href="vendor-dashboard.html">Vendor Dashboard</a></li>
                                                <li><a href="vendor-profile.html">Vendor Profile</a></li>
                                                <li><a href="vendor-uploads.html">Vendor Uploads</a></li>
                                                <li><a href="vendor-settings.html">Vendor Settings</a></li>
                                            </ul>
                                        </li>
                                        <li class="dropdown position-static">
                                            <span class="label-note-trending"></span>
                                            <a href="javascript:void(0)">User account pages
                                                <i class="ecicon eci-angle-right"></i></a>
                                            <ul class="sub-menu sub-menu-child">
                                                <li><a href="user-profile.html">User Profile</a></li>
                                                <li><a href="user-history.html">History</a></li>
                                                <li><a href="wishlist.html">Wishlist</a></li>
                                                <li><a href="track-order.html">Track Order</a></li>
                                                <li><a href="user-invoice.html">Invoice</a></li>
                                            </ul>
                                        </li>
                                        <li class="dropdown position-static"><a href="javascript:void(0)">Construction
                                                pages
                                                <i class="ecicon eci-angle-right"></i></a>
                                            <ul class="sub-menu sub-menu-child">
                                                <li><a href="404-error-page.html">404 error page</a></li>
                                                <li><a href="under-maintenance.html">maintanence page</a></li>
                                                <li><a href="coming-soon.html">Coming soon page</a></li>
                                            </ul>
                                        </li>
                                        <li class="dropdown position-static">
                                            <span class="label-note-new"></span>
                                            <a href="javascript:void(0)">Vendor Catalog pages
                                                <i class="ecicon eci-angle-right"></i></a>
                                            <ul class="sub-menu sub-menu-child">
                                                <li><a href="catalog-single-vendor.html">Catalog Single Vendor</a></li>
                                                <li><a href="catalog-multi-vendor.html">Catalog Multi Vendor</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li> -->
                                <li class="dropdown"><a href="{{ url ('user/blog') }}">Blog</a></li>
                                <li class="dropdown"><a href="{{ url ('user/faq') }}">FAQ</a></li>
                                <li class="dropdown"><a href="{{ url ('user/contact') }}">Contact</a></li>
                                <!-- <li class="dropdown"><a href="javascript:void(0)">Elements</a>
                                    <ul class="sub-menu">
                                        <li><a href="elemets-products.html">Products</a></li>
                                        <li><a href="elemets-typography.html">Typography</a></li>
                                        <li><a href="elemets-title.html">Titles</a></li>
                                        <li><a href="elemets-categories.html">Categories</a></li>
                                        <li><a href="elemets-buttons.html">Buttons</a></li>
                                        <li><a href="elemets-tabs.html">Tabs</a></li>
                                        <li><a href="elemets-accordions.html">Accordions</a></li>
                                        <li><a href="elemets-blog.html">Blogs</a></li>
                                    </ul>
                                </li>
                                <li><a href="offer.html">Hot Offers</a></li> -->
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Ec Main Menu End -->
        <!-- ekka Mobile Menu Start -->
        <div id="ec-mobile-menu" class="ec-side-cart ec-mobile-menu">
            <div class="ec-menu-title">
                <span class="menu_title">My Menu</span>
                <button class="ec-close">×</button>
            </div>
            <div class="ec-menu-inner">
                <div class="ec-menu-content">
                    <ul>
                        <li><a href="{{ url ('/') }}">Home</a></li>
                        <li><a href="{{ url ('user/about') }}">About Us</a></li>
                        <li><a href="javascript:void(0)">Dogs</a>
                            <ul class="sub-menu">
                                 <li>
                                    <a href="javascript:void(0)">FOOD</a>
                                    <ul class="sub-menu">
                                        <li><a href="{{ url ('user/products') }}">Dry Food</a></li>
                                        <li><a href="{{ url ('user/products') }}">Wet Food</a></li>
                                        <li><a href="{{ url ('user/products') }}">Puppy Food</a></li>
                                        <li><a href="{{ url ('user/products') }}">Grain Free Food</a></li>
                                        <li><a href="{{ url ('user/products') }}">Hypoallergenic Food</a></li>
                                        <li><a href="{{ url ('user/products') }}">Supplements</a></li>
                                    </ul>
                                </li>
                                 <li>
                                    <a href="javascript:void(0)">TREATS, BISCUITS & CHEWS</a>
                                    <ul class="sub-menu">
                                        <li><a href="{{ url ('user/products') }}">Biscuits</a></li>
                                        <li><a href="{{ url ('user/products') }}">Vegetarian Treats</a></li>
                                        <li><a href="{{ url ('user/products') }}">Natural Treats</a></li>
                                        <li><a href="{{ url ('user/products') }}">Puppy Treats</a></li>
                                        <li><a href="{{ url ('user/products') }}">Dental Treats</a></li>
                                        <li><a href="{{ url ('user/products') }}">Soft & Hard Chews</a></li>
                                    </ul>
                                </li>
                                 <li>
                                    <a href="javascript:void(0)">WALK ESSENTIALS</a>
                                    <ul class="sub-menu">
                                        <li><a href="{{ url ('user/products') }}">Collars</a></li>
                                        <li><a href="{{ url ('user/products') }}">Leashes</a></li>
                                        <li><a href="{{ url ('user/products') }}">Harnesses</a></li>
                                        <li><a href="{{ url ('user/products') }}">Name Tags</a></li>
                                        <li><a href="{{ url ('user/products') }}">Collar & Leash Set</a></li>
                                    </ul>
                                </li>
                                 <li>
                                    <a href="javascript:void(0)">BEDDING & MATS</a>
                                    <ul class="sub-menu">
                                        <li><a href="{{ url ('user/products') }}">Beds</a></li>
                                        <li><a href="{{ url ('user/products') }}">Mats</a></li>
                                        <li><a href="{{ url ('user/products') }}">Blankets & Cushions</a></li>
                                        <li><a href="{{ url ('user/products') }}">Bed Covers</a></li>
                                    </ul>
                                </li>
																<li>
                                    <a href="javascript:void(0)">GROOMING</a>
                                    <ul class="sub-menu">
                                        <li><a href="{{ url ('user/products') }}">Shampoos, Conditioners</a></li>
                                        <li><a href="{{ url ('user/products') }}">Brushes & Combs</a></li>
                                        <li><a href="{{ url ('user/products') }}">Towels & Wipes</a></li>
                                        <li><a href="{{ url ('user/products') }}">Tick & Flea</a></li>
                                        <li><a href="{{ url ('user/products') }}">Dry Baths & Perfumes </a></li>
                                        <li><a href="{{ url ('user/products') }}">Paw Care </a></li>
                                        <li><a href="{{ url ('user/products') }}">Detangling Solutions </a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="javascript:void(0)">CLOTHING</a>
                                    <ul class="sub-menu">
                                        <li><a href="{{ url ('user/products') }}">Jackets</a></li>
                                        <li><a href="{{ url ('user/products') }}">Sweatshirts</a></li>
                                        <li><a href="{{ url ('user/products') }}">Sweaters</a></li>
                                        <li><a href="{{ url ('user/products') }}">Raincoats</a></li>
                                        <li><a href="{{ url ('user/products') }}">T-Shirts & Shirts</a></li>
                                        <li><a href="{{ url ('user/products') }}">Dresses</a></li>
                                        <li><a href="{{ url ('user/products') }}">Special Occasion Wear</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="javascript:void(0)">TRAVEL</a>
                                    <ul class="sub-menu">
                                        <li><a href="{{ url ('user/products') }}">Ramps & Steps</a></li>
                                        <li><a href="{{ url ('user/products') }}">Crates & Carriers</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="javascript:void(0)">DOG TOYS</a>
                                    <ul class="sub-menu">
                                        <li><a href="{{ url ('user/products') }}">Chew Toys</a></li>
                                        <li><a href="{{ url ('user/products') }}">Plush Toys</a></li>
                                        <li><a href="{{ url ('user/products') }}">Balls</a></li>
                                        <li><a href="{{ url ('user/products') }}">Interactive Toys</a></li>
                                        <li><a href="{{ url ('user/products') }}">Tough Chewers</a></li>
                                        <li><a href="{{ url ('user/products') }}">Rope Toys</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="javascript:void(0)">BOWLS & DINERS</a>
                                    <ul class="sub-menu">
                                        <li><a href="{{ url ('user/products') }}">Steel Bowls</a></li>
                                        <li><a href="{{ url ('user/products') }}">Elevated Bowls</a></li>
                                        <li><a href="{{ url ('user/products') }}">Slow Feeders</a></li>
                                        <li><a href="{{ url ('user/products') }}">Licki Mats</a></li>
                                        <li><a href="{{ url ('user/products') }}">Anti Spills Mat</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="javascript:void(0)">HEALTH & HYGIENE</a>
                                    <ul class="sub-menu">
                                        <li><a href="{{ url ('user/products') }}">Supplements</a></li>
                                        <li><a href="{{ url ('user/products') }}">Oral Care</a></li>
                                        <li><a href="{{ url ('user/products') }}">Tick & Flea</a></li>
                                        <li><a href="{{ url ('user/products') }}">Stain & Odour</a></li>
                                        <li><a href="{{ url ('user/products') }}">Pee-Lock Powder</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="javascript:void(0)">DOG ACCESSORIES</a>
                                    <ul class="sub-menu">
                                        <li><a href="{{ url ('user/products') }}">Bow Ties & Bandanas</a></li>
                                        <li><a href="{{ url ('user/products') }}">Party Accessories</a></li>
                                        <li><a href="{{ url ('user/products') }}">Shoes & Socks</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="javascript:void(0)">TRAINING AIDS</a>
                                    <ul class="sub-menu">
                                        <li><a href="{{ url ('user/products') }}">Training Pads & Diapers</a></li>
                                        <li><a href="{{ url ('user/products') }}">Pens & Barriers</a></li>
                                        <li><a href="{{ url ('user/products') }}">Agility</a></li>
                                        <li><a href="{{ url ('user/products') }}">Training Treats</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li><a href="javascript:void(0)">Cats</a>
                            <ul class="sub-menu">
                                 <li><a href="javascript:void(0)">FOOD</a>
                                    <ul class="sub-menu">
                                        <li><a href="{{ url ('user/products') }}">Wet Food</a></li>
                                        <li><a href="{{ url ('user/products') }}">Dry Food</a></li>
                                        <li><a href="{{ url ('user/products') }}">Kitten Food</a></li>
                                    </ul>
                                </li>
                                 <li><a href="javascript:void(0)">LITTER & SUPPLIES</a>
                                    <ul class="sub-menu">
                                        <li><a href="{{ url ('user/products') }}">Litter</a></li>
                                        <li><a href="{{ url ('user/products') }}">Toilets & Trays</a></li>
                                        <li><a href="{{ url ('user/products') }}">Scoopers</a></li>
                                        <li><a href="{{ url ('user/products') }}">Stain & Odour</a></li>
                                    </ul>
                                </li>
                                 <li><a href="javascript:void(0)">COLLARS & ACCESSORIES</a>
                                    <ul class="sub-menu">
                                        <li><a href="{{ url ('user/products') }}">Collars</a></li>
                                        <li><a href="{{ url ('user/products') }}">Harnesses</a></li>
                                        <li><a href="{{ url ('user/products') }}">Bandanas</a></li>
                                    </ul>
                                </li>
                                <li><a href="javascript:void(0)">TREATS</a>
                                    <ul class="sub-menu">
                                        <li><a href="{{ url ('user/products') }}">Natural Treats</a></li>
                                        <li><a href="{{ url ('user/products') }}">Creamy Treats</a></li>
                                    </ul>
                                </li>
                                <li><a href="javascript:void(0)">CARRIERS</a>
                                    <ul class="sub-menu">
                                        <li><a href="{{ url ('user/products') }}">Crates</a></li>
                                        <li><a href="{{ url ('user/products') }}">Carriers</a></li>
                                    </ul>
                                </li>
                                <li><a href="javascript:void(0)">TOYS</a>
                                    <ul class="sub-menu">
                                        <li><a href="{{ url ('user/products') }}">Plush Toys</a></li>
                                        <li><a href="{{ url ('user/products') }}">Interactive Toys</a></li>
                                        <li><a href="{{ url ('user/products') }}">Catnip</a></li>
                                        <li><a href="{{ url ('user/products') }}">Scratchers</a></li>
                                        <li><a href="{{ url ('user/products') }}">Teaser & Wand</a></li>
                                    </ul>
                                </li>
                                <li><a href="javascript:void(0)">CAT GROOMING</a>
                                    <ul class="sub-menu">
                                        <li><a href="{{ url ('user/products') }}">Cat Shampoos</a></li>
                                        <li><a href="{{ url ('user/products') }}">Towels & Wipes</a></li>
                                        <li><a href="{{ url ('user/products') }}">Stain & Odour</a></li>
                                        <li><a href="{{ url ('user/products') }}">Tick & Flea</a></li>
                                        <li><a href="{{ url ('user/products') }}">Brushes & Combs</a></li>
                                    </ul>
                                </li>
                                <li><a href="javascript:void(0)">CAT BEDDING</a>
                                    <ul class="sub-menu">
                                        <li><a href="{{ url ('user/products') }}">Tents</a></li>
                                        <li><a href="{{ url ('user/products') }}">Beds</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li><a href="javascript:void(0)">Others Animals</a>
                            <ul class="sub-menu">
                                <!-- <li><a href="javascript:void(0)">Mail Confirmation</a>
                                    <ul class="sub-menu">
                                        <li><a href="email-template-confirm-1.html">Mail Confirmation 1</a></li>
                                        <li><a href="email-template-confirm-2.html">Mail Confirmation 2</a></li>
                                        <li><a href="email-template-confirm-3.html">Mail Confirmation 3</a></li>
                                        <li><a href="email-template-confirm-4.html">Mail Confirmation 4</a></li>
                                        <li><a href="email-template-confirm-5.html">Mail Confirmation 5</a></li>
                                    </ul>
                                </li>
                                <li><a href="javascript:void(0)">Mail Reset password</a>
                                    <ul class="sub-menu">
                                        <li><a href="email-template-forgot-password-1.html">Reset password 1</a></li>
                                        <li><a href="email-template-forgot-password-2.html">Reset password 2</a></li>
                                        <li><a href="email-template-forgot-password-3.html">Reset password 3</a></li>
                                        <li><a href="email-template-forgot-password-4.html">Reset password 4</a></li>
                                        <li><a href="email-template-forgot-password-5.html">Reset password 5</a></li>
                                    </ul>
                                </li>
                                <li><a href="javascript:void(0)">Mail Promotional</a>
                                    <ul class="sub-menu">
                                        <li><a href="email-template-offers-1.html">Offer Mail 1</a></li>
                                        <li><a href="email-template-offers-2.html">Offer Mail 2</a></li>
                                        <li><a href="email-template-offers-3.html">Offer Mail 3</a></li>
                                        <li><a href="email-template-offers-4.html">Offer Mail 4</a></li>
                                        <li><a href="email-template-offers-5.html">Offer Mail 5</a></li>
                                        <li><a href="email-template-offers-6.html">Offer Mail 6</a></li>
                                        <li><a href="email-template-offers-7.html">Offer Mail 7</a></li>
                                        <li><a href="email-template-offers-8.html">Offer Mail 8</a></li>
                                    </ul>
                                </li>
                                <li><a href="javascript:void(0)">Vendor Account Pages</a>
                                    <ul class="sub-menu">
                                        <li><a href="vendor-dashboard.html">Vendor Dashboard</a></li>
                                        <li><a href="vendor-profile.html">Vendor Profile</a></li>
                                        <li><a href="vendor-uploads.html">Vendor Uploads</a></li>
                                        <li><a href="vendor-settings.html">Vendor Settings</a></li>
                                    </ul>
                                </li>
                                <li><a href="javascript:void(0)">User Account Pages</a>
                                    <ul class="sub-menu">
                                        <li><a href="user-profile.html">User Profile</a></li>
                                        <li><a href="user-history.html">User History</a></li>
                                        <li><a href="wishlist.html">Wishlist</a></li>
                                        <li><a href="track-order.html">Track Order</a></li>
                                        <li><a href="user-invoice.html">User Invoice</a></li>
                                    </ul>
                                </li>
                                <li><a href="javascript:void(0)">Construction Pages</a>
                                    <ul class="sub-menu">
                                        <li><a href="404-error-page.html">404 Error Page</a></li>
                                        <li><a href="under-maintenance.html">Maintenance Page</a></li>
                                        <li><a href="coming-soon.html">Comming Soon Page</a></li>
                                    </ul>
                                </li>
                                <li><a href="javascript:void(0)">Vendor Catalog Pages</a>
                                    <ul class="sub-menu">
                                        <li><a href="catalog-single-vendor.html">Catalog Single Vendor</a></li>
                                        <li><a href="catalog-multi-vendor.html">Catalog Multi Vendor</a></li>
                                    </ul>
                                </li> -->
                            </ul>
                        </li>
                        <li><a href="{{ url ('user/blog') }}">Blog</a>
                        <li><a href="{{ url ('user/faq') }}">Faq</a>
                        <li><a href="{{ url ('user/contact') }}">Contact</a>
                            <!-- <ul class="sub-menu">
                                <li><a href="about-us.html">About Us</a></li>
                                <li><a href="contact-us.html">Contact Us</a></li>
                                <li><a href="cart.html">Cart</a></li>
                                <li><a href="checkout.html">Checkout</a></li>
                                <li><a href="compare.html">Compare</a></li>
                                <li><a href="faq.html">FAQ</a></li>
                                <li><a href="login.html">Login</a></li>
                                <li><a href="register.html">Register</a></li>
                                <li><a href="track-order.html">Track Order</a></li>
                                <li><a href="terms-condition.html">Terms Condition</a></li>
                                <li><a href="privacy-policy.html">Privacy Policy</a></li>
                            </ul> -->
                        </li>
                        <!-- <li class="dropdown"><a href="javascript:void(0)">Blog</a>
                            <ul class="sub-menu">
                                <li><a href="blog-left-sidebar.html">Blog left sidebar</a></li>
                                <li><a href="blog-right-sidebar.html">Blog right sidebar</a></li>
                                <li><a href="blog-detail-left-sidebar.html">Blog detail left sidebar</a></li>
                                <li><a href="blog-detail-right-sidebar.html">Blog detail right sidebar</a></li>
                                <li><a href="blog-full-width.html">Blog full width</a></li>
                                <li><a href="blog-detail-full-width.html">Blog detail full width</a></li>
                            </ul>
                        </li>
                        <li class="dropdown"><a href="javascript:void(0)">Elements</a>
                            <ul class="sub-menu">
                                <li><a href="elemets-products.html">Products</a></li>
                                <li><a href="elemets-typography.html">Typography</a></li>
                                <li><a href="elemets-title.html">Titles</a></li>
                                <li><a href="elemets-categories.html">Categories</a></li>
                                <li><a href="elemets-buttons.html">Buttons</a></li>
                                <li><a href="elemets-tabs.html">Tabs</a></li>
                                <li><a href="elemets-accordions.html">Accordions</a></li>
                                <li><a href="elemets-blog.html">Blogs</a></li>
                            </ul>
                        </li>
                        <li><a href="offer.html">Hot Offers</a></li> -->
                    </ul>
                </div>
                <div class="header-res-lan-curr">
                    <div class="header-top-lan-curr">
                        <!-- Language Start -->
                        <div class="header-top-lan dropdown">
                            <!-- <button class="dropdown-toggle text-upper" data-bs-toggle="dropdown">Language <i
                                    class="ecicon eci-caret-down" aria-hidden="true"></i></button>
                            <ul class="dropdown-menu">
                                <li class="active"><a class="dropdown-item" href="#">English</a></li>
                                <li><a class="dropdown-item" href="#">Italiano</a></li>
                            </ul> -->
                        </div>
                        <!-- Language End -->
                        <!-- Currency Start -->
                        <div class="header-top-curr dropdown">
                            <!-- <button class="dropdown-toggle text-upper" data-bs-toggle="dropdown">Currency <i
                                    class="ecicon eci-caret-down" aria-hidden="true"></i></button>
                            <ul class="dropdown-menu">
                                <li class="active"><a class="dropdown-item" href="#">USD $</a></li>
                                <li><a class="dropdown-item" href="#">EUR €</a></li>
                            </ul> -->
                        </div>
                        <!-- Currency End -->
                    </div>
                    <!-- Social Start -->
                    <div class="header-res-social">
                        <div class="header-top-social">
                            <ul class="mb-0">
                                <li class="list-inline-item"><a class="hdr-facebook" href="#"><i class="ecicon eci-facebook"></i></a></li>
                                <li class="list-inline-item"><a class="hdr-twitter" href="#"><i class="ecicon eci-twitter"></i></a></li>
                                <li class="list-inline-item"><a class="hdr-instagram" href="#"><i class="ecicon eci-instagram"></i></a></li>
                                <li class="list-inline-item"><a class="hdr-linkedin" href="#"><i class="ecicon eci-linkedin"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- Social End -->
                </div>
            </div>
        </div>
        <!-- ekka mobile Menu End -->
    </header>
    <!-- Header End  -->

    <!-- ekka Cart Start -->
    <div class="ec-side-cart-overlay"></div>
    <div id="ec-side-cart" class="ec-side-cart">
        <div class="ec-cart-inner">
            <div class="ec-cart-top">
                <div class="ec-cart-title">
                    <span class="cart_title">My Cart</span>
                    <button class="ec-close">×</button>
                </div>
                <ul class="eccart-pro-items">
                    <li>
                        <a href="product-left-sidebar.html" class="sidekka_pro_img"><img
                                src="assets/images/product-image/6_1.jpg" alt="product"></a>
                        <div class="ec-pro-content">
                            <a href="product-left-sidebar.html" class="cart_pro_title">T-shirt For Women</a>
                            <span class="cart-price"><span>$76.00</span> x 1</span>
                            <div class="qty-plus-minus">
                                <input class="qty-input" type="text" name="ec_qtybtn" value="1" />
                            </div>
                            <a href="javascript:void(0)" class="remove">×</a>
                        </div>
                    </li>
                    <li>
                        <a href="product-left-sidebar.html" class="sidekka_pro_img"><img
                                src="assets/images/product-image/12_1.jpg" alt="product"></a>
                        <div class="ec-pro-content">
                            <a href="product-left-sidebar.html" class="cart_pro_title">Women Leather Shoes</a>
                            <span class="cart-price"><span>$64.00</span> x 1</span>
                            <div class="qty-plus-minus">
                                <input class="qty-input" type="text" name="ec_qtybtn" value="1" />
                            </div>
                            <a href="javascript:void(0)" class="remove">×</a>
                        </div>
                    </li>
                    <li>
                        <a href="product-left-sidebar.html" class="sidekka_pro_img"><img
                                src="assets/images/product-image/3_1.jpg" alt="product"></a>
                        <div class="ec-pro-content">
                            <a href="product-left-sidebar.html" class="cart_pro_title">Girls Nylon Purse</a>
                            <span class="cart-price"><span>$59.00</span> x 1</span>
                            <div class="qty-plus-minus">
                                <input class="qty-input" type="text" name="ec_qtybtn" value="1" />
                            </div>
                            <a href="javascript:void(0)" class="remove">×</a>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="ec-cart-bottom">
                <div class="cart-sub-total">
                    <table class="table cart-table">
                        <tbody>
                            <tr>
                                <td class="text-left">Sub-Total :</td>
                                <td class="text-right">$300.00</td>
                            </tr>
                            <tr>
                                <td class="text-left">VAT (20%) :</td>
                                <td class="text-right">$60.00</td>
                            </tr>
                            <tr>
                                <td class="text-left">Total :</td>
                                <td class="text-right primary-color">$360.00</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="cart_btn">
                    <a href="{{ url ('user/cart') }}" class="btn btn-primary">View Cart</a>
                    <a href="{{ url ('user/checkout') }}" class="btn btn-secondary">Checkout</a>
                </div>
            </div>
        </div>
    </div>
    <!-- ekka Cart End -->

    <!-- Ec breadcrumb start -->
    <div class="sticky-header-next-sec  ec-breadcrumb section-space-mb">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="row ec_breadcrumb_inner">
                        <div class="col-md-6 col-sm-12">
                            <h2 class="ec-breadcrumb-title">@yield('pagename')</h2>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <!-- ec-breadcrumb-list start -->
                            <ul class="ec-breadcrumb-list">
                                <li class="ec-breadcrumb-item"><a href="{{ url ('/') }}">Home</a></li>
                                <li class="ec-breadcrumb-item active">@yield('breadcrumb')</li>
                            </ul>
                            <!-- ec-breadcrumb-list end -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Ec breadcrumb end -->
    @section('container')
    @show

    <!-- Footer Start -->
    <footer class="ec-footer">
        <div class="footer-newletter section-space-footer-p">
            <div class="container">
                <div class="row">
                    <div class="footer-cat-inner">
                        <div class="footer-cat-block">
                            <div class="footer-cat-stitle">Brands Directory</div>
                            <div class="block">
                                <span class="footer-cat-title">Fashion : </span>
                                <a href="{{ url ('user/products') }}">T-shirt</a><span> | </span>
                                <a href="{{ url ('user/products') }}">Shirts</a><span> | </span>
                                <a href="{{ url ('user/products') }}">shorts & jeans </a><span> | </span>
                                <a href="{{ url ('user/products') }}">jacket</a><span> | </span>
                                <a href="{{ url ('user/products') }}">dress & frock</a><span> | </span>
                                <a href="{{ url ('user/products') }}">innerwear</a>
                                <a href="{{ url ('user/products') }}">hosiery</a>
                            </div>
                            <div class="block">
                                <span class="footer-cat-title">footwear : </span>
                                <a href="{{ url ('user/products') }}">sport</a><span> | </span>
                                <a href="{{ url ('user/products') }}">formal</a><span> | </span>
                                <a href="{{ url ('user/products') }}">Boots</a><span> | </span>
                                <a href="{{ url ('user/products') }}">casual</a><span> | </span>
                                <a href="{{ url ('user/products') }}">cowboy shoes</a><span> | </span>
                                <a href="{{ url ('user/products') }}">safety shoes</a><span> | </span>
                                <a href="{{ url ('user/products') }}">Party wear shoes</a><span> | </span>
                                <a href="{{ url ('user/products') }}">Branded</a><span> | </span>
                                <a href="{{ url ('user/products') }}">Firstcopy</a><span> | </span>
                                <a href="{{ url ('user/products') }}">Long shoes</a>
                            </div>
                            <div class="block">
                                <span class="footer-cat-title">jewellery : </span>
                                <a href="{{ url ('user/products') }}">Necklace</a><span> | </span>
                                <a href="{{ url ('user/products') }}">Earrings</a><span> | </span>
                                <a href="{{ url ('user/products') }}">Couple rings</a><span> | </span>
                                <a href="{{ url ('user/products') }}">Pendants</a><span> | </span>
                                <a href="{{ url ('user/products') }}">Crystal</a><span> | </span>
                                <a href="{{ url ('user/products') }}">Bangles</a><span> | </span>
                                <a href="{{ url ('user/products') }}">bracelets</a><span> | </span>
                                <a href="{{ url ('user/products') }}">nosepin</a><span> | </span>
                                <a href="{{ url ('user/products') }}">chain</a><span> | </span>
                                <a href="{{ url ('user/products') }}">Earrings</a><span> | </span>
                                <a href="{{ url ('user/products') }}">Couple rings</a><span> | </span>
                            </div>
                            <div class="block">
                                <span class="footer-cat-title">cosmetics : </span>
                                <a href="{{ url ('user/products') }}">Shampoo</a><span> | </span>
                                <a href="{{ url ('user/products') }}">Bodywash</a><span> | </span>
                                <a href="{{ url ('user/products') }}">Facewash</a><span> | </span>
                                <a href="{{ url ('user/products') }}">makeup kit</a><span> | </span>
                                <a href="{{ url ('user/products') }}">liner</a><span> | </span>
                                <a href="{{ url ('user/products') }}">lipstick</a><span> | </span>
                                <a href="{{ url ('user/products') }}">prefume</a><span> | </span>
                                <a href="{{ url ('user/products') }}">Body shop</a><span> | </span>
                                <a href="{{ url ('user/products') }}">scrub</a><span> | </span>
                                <a href="{{ url ('user/products') }}">hair gel</a><span> | </span>
                                <a href="{{ url ('user/products') }}">hair colors</a><span> | </span>
                                <a href="{{ url ('user/products') }}">hair dye</a><span> | </span>
                                <a href="{{ url ('user/products') }}">sunscreen</a><span> | </span>
                                <a href="{{ url ('user/products') }}">skin loson</a><span> | </span>
                                <a href="{{ url ('user/products') }}">liner</a><span> | </span>
                                <a href="{{ url ('user/products') }}">lipstick</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-container">
            <div class="footer-top section-space-footer-p">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12 col-lg-3 ec-footer-cat">
                            <div class="ec-footer-widget">
                                <h4 class="ec-footer-heading">Popular Categories</h4>
                                <div class="ec-footer-links">
                                    <ul class="align-items-center">
                                        <li class="ec-footer-link"><a href="#">Fashion</a></li>
                                        <li class="ec-footer-link"><a href="#">Electronic</a></li>
                                        <li class="ec-footer-link"><a href="#">Cosmetic</a></li>
                                        <li class="ec-footer-link"><a href="#">Health</a></li>
                                        <li class="ec-footer-link"><a href="#">Watches</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-lg-3 ec-footer-info">
                            <div class="ec-footer-widget">
                                <h4 class="ec-footer-heading">Products</h4>
                                <div class="ec-footer-links">
                                    <ul class="align-items-center">
                                        <li class="ec-footer-link"><a href="#">Prices drop</a></li>
                                        <li class="ec-footer-link"><a href="#">New products</a></li>
                                        <li class="ec-footer-link"><a href="#">Best sales</a></li>
                                        <li class="ec-footer-link"><a href="{{ url ('user/contact') }}">Contact us</a></li>
                                        <li class="ec-footer-link"><a href="#">Sitemap</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-lg-3 ec-footer-account">
                            <div class="ec-footer-widget">
                                <h4 class="ec-footer-heading">Our Company</h4>
                                <div class="ec-footer-links">
                                    <ul class="align-items-center">
                                        <li class="ec-footer-link"><a href="track-order.html">Delivery</a></li>
                                        <li class="ec-footer-link"><a href="privacy-policy.html">Legal Notice</a></li>
                                        <li class="ec-footer-link"><a href="terms-condition.html">Terms and conditions</a></li>
                                        <li class="ec-footer-link"><a href="{{ url ('user/about') }}">About us</a></li>
                                        <li class="ec-footer-link"><a href="{{ url ('user/checkout') }}">Secure payment</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-lg-3 ec-footer-service">
                            <div class="ec-footer-widget">
                                <h4 class="ec-footer-heading">Services</h4>
                                <div class="ec-footer-links">
                                    <ul class="align-items-center">
                                        <li class="ec-footer-link"><a href="#">Prices drop</a></li>
                                        <li class="ec-footer-link"><a href="#">New products</a></li>
                                        <li class="ec-footer-link"><a href="#">Best sales</a></li>
                                        <li class="ec-footer-link"><a href="{{ url ('user/contact') }}">Contact us</a></li>
                                        <li class="ec-footer-link"><a href="#">Sitemap</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-lg-3 ec-footer-cont-social">
                            <div class="ec-footer-contact">
                                <div class="ec-footer-widget">
                                    <h4 class="ec-footer-heading">Contact</h4>
                                    <div class="ec-footer-links">
                                        <ul class="align-items-center">
                                            <li class="ec-footer-link ec-foo-location"><span><i class="fi fi-rr-marker"></i></span>
                                                <p>2548 Broaddus Maple Court, Madisonville KY 4783, USA</p>
                                            </li>
                                            <li class="ec-footer-link ec-foo-call"><span><i class="fi-rr-phone-call"></i></span><a href="tel:+919999999999">+91 999 999 9999</a>
                                            </li>
                                            <li class="ec-footer-link ec-foo-mail"><span><i class="fi fi-rr-envelope"></i></span><a
                                                    href="mailto:support@demo.email">support@demo.email</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="ec-footer-social">
                                <div class="ec-footer-widget">
                                    <h4 class="ec-footer-heading marg-b-0 s-head">Follow Us</h4>
                                    <div class="ec-footer-links">
                                        <ul class="align-items-center">
                                            <li class="ec-footer-link"><a href="#"><i class="ecicon eci-instagram"
                                                        aria-hidden="true"></i></a></li>
                                            <li class="ec-footer-link"><a href="#"><i class="ecicon eci-twitter-square"
                                                        aria-hidden="true"></i></a></li>
                                            <li class="ec-footer-link"><a href="#"><i class="ecicon eci-facebook-square"
                                                        aria-hidden="true"></i></a></li>
                                            <li class="ec-footer-link"><a href="#"><i class="ecicon eci-linkedin-square"
                                                            aria-hidden="true"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-bottom">
                <div class="container">
                    <div class="row">
                        <!-- Footer payment -->
                        <div class="footer-bottom-right">
                            <div class="footer-bottom-payment d-flex justify-content-center">
                                <div class="payment-link">
                                    <img src="assets/images/icons/payment.png" alt="">
                                </div>

                            </div>
                        </div>
                        <!-- Footer payment -->
                        <!-- Footer Copyright Start -->
                        <div class="footer-copy">
                            <div class="footer-bottom-copy ">
                                <div class="ec-copy">Copyright © 2023 HOLAPETZ all
                                    rights reserved. Powered by <a target="_blank" class="site-name" href="https://thedaxads.com">DAXADS</a></div>
                            </div>
                        </div>
                        <!-- Footer Copyright End -->

                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Area End -->

    <!-- Footer navigation panel for responsive display -->
    <div class="ec-nav-toolbar">
        <div class="container">
            <div class="ec-nav-panel">
                <div class="ec-nav-panel-icons">
                    <a href="#ec-mobile-menu" class="navbar-toggler-btn ec-header-btn ec-side-toggle"><i
                            class="fi-rr-menu-burger"></i></a>
                </div>
                <div class="ec-nav-panel-icons">
                    <a href="#ec-side-cart" class="toggle-cart ec-header-btn ec-side-toggle"><i
                            class="fi-rr-shopping-bag"></i><span
                            class="ec-cart-noti ec-header-count cart-count-lable">3</span></a>
                </div>
                <div class="ec-nav-panel-icons">
                    <a href="{{ url ('/') }}" class="ec-header-btn"><i class="fi-rr-home"></i></a>
                </div>
                <div class="ec-nav-panel-icons">
                    <a href="{{ url ('user/wishlist') }}" class="ec-header-btn"><i class="fi-rr-heart"></i><span
                            class="ec-cart-noti">4</span></a>
                </div>
                <div class="ec-nav-panel-icons">
                    <a href="login.html" class="ec-header-btn"><i class="fi-rr-user"></i></a>
                </div>

            </div>
        </div>
    </div>
    <!-- Footer navigation panel for responsive display end -->

    <!-- Recent Purchase Popup  -->
    <div class="recent-purchase">
        <img src="assets/images/product-image/1.jpg" alt="payment image">
        <div class="detail">
            <p>Someone in new just bought</p>
            <h6>stylish baby shoes</h6>
            <p>10 Minutes ago</p>
        </div>
        <a href="javascript:void(0)" class="icon-btn recent-close">×</a>
    </div>
    <!-- Recent Purchase Popup end -->

    <!-- Cart Floating Button -->
    <div class="ec-cart-float">
        <a href="#ec-side-cart" class="ec-header-btn ec-side-toggle">
            <div class="header-icon"><i class="fi-rr-shopping-basket"></i>
            </div>
            <span class="ec-cart-count cart-count-lable">3</span>
        </a>
    </div>
    <!-- Cart Floating Button end -->

 

    <!-- Feature tools -->
    <!-- <div class="ec-tools-sidebar-overlay"></div>
    <div class="ec-tools-sidebar">
        <div class="tool-title">
            <h3>Features</h3>
        </div>
        <a href="#" class="ec-tools-sidebar-toggle in-out">
            <img alt="icon" src="assets/images/common/settings.png">
        </a>
        <div class="ec-tools-detail">
            <div class="ec-tools-sidebar-content ec-change-color ec-color-desc">
                <h3>Color Scheme</h3>
                <ul class="bg-panel">
                    <li class="active" data-color="01"><a href="#" class="colorcode1"></a></li>
                    <li data-color="02"><a href="#" class="colorcode2"></a></li>
                    <li data-color="03"><a href="#" class="colorcode3"></a></li>
                    <li data-color="04"><a href="#" class="colorcode4"></a></li>
                    <li data-color="05"><a href="#" class="colorcode5"></a></li>
                </ul>
            </div>
            <div class="ec-tools-sidebar-content">
                <h3>Backgrounds</h3>
                <ul class="bg-panel">
                    <li class="bg"><a class="back-bg-1" id="bg-1">Background-1</a></li>
                    <li class="bg"><a class="back-bg-2" id="bg-2">Background-2</a></li>
                    <li class="bg"><a class="back-bg-3" id="bg-3">Background-3</a></li>
                    <li class="bg"><a class="back-bg-4" id="bg-4">Default</a></li>
                </ul>
            </div>
            <div class="ec-tools-sidebar-content">
                <h3>Full Screen mode</h3>
                <div class="ec-fullscreen-mode">
                    <div class="ec-fullscreen-switch">
                        <div class="ec-fullscreen-btn">Mode</div>
                        <div class="ec-fullscreen-on">On</div>
                        <div class="ec-fullscreen-off">Off</div>
                    </div>
                </div>
            </div>
            <div class="ec-tools-sidebar-content">
                <h3>Dark mode</h3>
                <div class="ec-change-mode">
                    <div class="ec-mode-switch">
                        <div class="ec-mode-btn">Mode</div>
                        <div class="ec-mode-on">On</div>
                        <div class="ec-mode-off">Off</div>
                    </div>
                </div>
            </div>
            <div class="ec-tools-sidebar-content">
                <h3>RTL mode</h3>
                <div class="ec-change-rtl">
                    <div class="ec-rtl-switch">
                        <div class="ec-rtl-btn">Rtl</div>
                        <div class="ec-rtl-on">On</div>
                        <div class="ec-rtl-off">Off</div>
                    </div>
                </div>
            </div>
            <div class="ec-tools-sidebar-content">
                <h3>Language</h3>
                <div class="ec-change-lang">
                    <span id="google_translate_element"></span>
                </div>
            </div>
            <div class="ec-tools-sidebar-content">
                <h3>Clear local storage</h3>
                <a class="clear-cach" href="javascript:void(0)">Clear Cache & Default</a>
            </div>
        </div>
    </div> -->
    <!-- Feature tools end -->

    <!-- Vendor JS -->
    <script src="assets/js/vendor/jquery-3.5.1.min.js"></script>
    <script src="assets/js/vendor/popper.min.js"></script>
    <script src="assets/js/vendor/bootstrap.min.js"></script>
    <script src="assets/js/vendor/jquery-migrate-3.3.0.min.js"></script>
    <script src="assets/js/vendor/modernizr-3.11.2.min.js"></script>

    <!--Plugins JS-->
    <script src="assets/js/plugins/swiper-bundle.min.js"></script>
    <script src="assets/js/plugins/countdownTimer.min.js"></script>
    <script src="assets/js/plugins/scrollup.js"></script>
    <script src="assets/js/plugins/jquery.zoom.min.js"></script>
    <script src="assets/js/plugins/slick.min.js"></script>
    <script src="assets/js/plugins/infiniteslidev2.js"></script>
    <script src="assets/js/vendor/jquery.magnific-popup.min.js"></script>
    <script src="assets/js/plugins/jquery.sticky-sidebar.js"></script>
    <!-- Google translate Js -->
    <script src="assets/js/vendor/google-translate.js"></script>
    <script>
        function googleTranslateElementInit() {
            new google.translate.TranslateElement({ pageLanguage: 'en' }, 'google_translate_element');
        }
    </script>
    <!-- Main Js -->
    <script src="assets/js/vendor/index.js"></script>
    <script src="assets/js/main.js"></script>
    <script src="assets/js/demo-8.js"></script>


</body>

</html>