    <!DOCTYPE html>
 <html lang="en">
 
 
<head>
    <meta charset="UTF-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
    
     <!-- Primary Meta Tags -->
	<title>Holapetz - Social Community & Marketplace</title>
	<meta name="title" content="Holapetz - Social Community & Marketplace">
	<meta name="description" content="">
	<meta name="author" content="Holapetz - Social Community & Marketplace">
	<meta name="image" content="{{ asset('user/assets/images/Holalogo/metaImg.jpg') }}" />


	<!-- Open Graph / Facebook -->
	<meta property="og:type" content="website">
	<meta property="og:url" content="https://thedaxads.com/">
	<meta property="og:title" content="Holapetz - Social Community & Marketplace">
	<meta property="og:description" content="">
	<meta property="og:image" content="{{ asset('user/assets/images/Holalogo/metaImg.jpg') }}"/>

	<!-- Twitter -->
	<meta property="twitter:card" content="summary_large_image">
	<meta property="twitter:url" content="https://thedaxads.com/">
	<meta property="twitter:title" content="Holapetz - Social Community & Marketplace">
	<meta property="twitter:description" content="">
	<meta property="twitter:image" content="{{ asset('user/assets/images/Holalogo/metaImg.jpg') }}"/>

    <!--== Favicon ==-->
    <link rel="shortcut icon" href="{{ asset('user/assets/images/Holalogo/favImg.png')}}" type="image/x-icon" />

   <!-- css Icon Font -->
   <link rel="stylesheet" href="{{ asset('user/assets/css/vendor/ecicons.min.css')}}" />

   <!-- css All Plugins Files -->
   <link rel="stylesheet" href="{{ asset('user/assets/css/plugins/animate.css')}}" />
   <link rel="stylesheet" href="{{ asset('user/assets/css/plugins/swiper-bundle.min.css')}}" />
   <link rel="stylesheet" href="{{ asset('user/assets/css/plugins/jquery-ui.min.css')}}" />
   <link rel="stylesheet" href="{{ asset('user/assets/css/plugins/countdownTimer.css')}}" />
   <link rel="stylesheet" href="{{ asset('user/assets/css/plugins/nouislider.css')}}" />
   <link rel="stylesheet" href="{{ asset('user/assets/css/plugins/slick.min.css')}}" />
   <link rel="stylesheet" href="{{ asset('user/assets/css/plugins/owl.carousel.min.css')}}" />
   <link rel="stylesheet" href="{{ asset('user/assets/css/plugins/owl.theme.default.min.css')}}" />
   <link rel="stylesheet" href="{{ asset('user/assets/css/plugins/bootstrap.css')}}" />

   <!-- Main Style -->
   <link rel="stylesheet" href="{{ asset('user/assets/css/demo8.css')}}" />

   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
<a href="https://api.whatsapp.com/send?phone=919633444855" class="float" target="_blank">
<i class="fa fa-whatsapp my-float"></i>
</a>

   
</head>
<body>
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
                                <li class="list-inline-item"><a class="hdr-facebook" href="#"><i class="ecicon eci-facebook"></i></a></li>
                                <li class="list-inline-item"><a class="hdr-twitter" href="#"><i class="ecicon eci-twitter"></i></a></li>
                                <li class="list-inline-item"><a class="hdr-instagram" href="#"><i class="ecicon eci-instagram"></i></a></li>
                                <li class="list-inline-item"><a class="hdr-linkedin" href="#"><i class="ecicon eci-linkedin"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- Header Top social End -->
                    <!-- Header Top Category Toggle Start -->
                    <a href="#ec-mobile-sidebar" class="ec-header-btn ec-sidebar-toggle d-lg-none">
                        <i class="fi fi-rr-apps"></i>
                    </a>
                    <!-- Header Top Category Toggle End -->
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
                                <div class="header-icon"><i class="fi-rr-shopping-basket"></i></div>
                                <span class="ec-header-count ec-cart-count cart-count-lable">3</span>
                            </a>
                            <!-- Header Cart End -->
                            <!-- Header menu Start -->
                            <a href="#ec-mobile-menu" class="ec-header-btn ec-side-toggle d-lg-none">
                                <i class="fi-rr-menu-burger"></i>
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
                                <a href="{{ url ('/') }}"><img src="{{ asset('user/assets/images/Holalogo/footerLogo.png')}}" alt="Site Logo" /><img
                                    class="dark-logo" src="{{ asset('user/assets/images/Holalogo/footerLogo.png')}}" alt="Site Logo"
                                        style="display: none;" /></a>
                            </div>
                        </div>
                        <!-- Ec Header Logo End -->

                        <!-- Ec Header Search Start -->
                        <div class="align-self-center">
                            <div class="header-search">
                                <form class="ec-btn-group-form" action="#">
                                    <input class="form-control" placeholder="Enter Your Product Name..." type="text">
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
                                    <div class="header-icon"><i class="fi-rr-shopping-basket"></i></div>
                                    <span class="ec-header-count ec-cart-count cart-count-lable">3</span>
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
                            <a href="{{ url ('/') }}"><img src="{{ asset('user/assets/images/Holalogo/footerLogo.png')}}" alt="Site Logo" /><img
                                    class="dark-logo" src="{{ asset('user/assets/images/Holalogo/footerLogo.png')}}" alt="Site Logo"
                                    style="display: none;" /></a>
                        </div>
                    </div>
                    <!-- Ec Header Logo End -->
                    <!-- Ec Header Search Start -->
                    <div class="col">
                        <div class="header-search">
                            <form class="ec-btn-group-form" action="#">
                                <input class="form-control" placeholder="Enter Your Product Name..." type="text">
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
                                <li><a href="{{ url('/') }}">Home</a></li>
                                <li class="dropdown"><a href="{{ url('user/about') }}">About</a>
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
                                                <!-- <li><a href="{{ url ('user/products') }}">Personalised Accessories</a></li> -->
                                                
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
                                                <!-- <li><a href="{{ url ('user/products') }}">View All Treats</a></li> -->
                                                
                                                <br>
                                                <li class="menu_title"><a href="javascript:void(0)">CARRIERS</a></li>
                                                <li><a href="{{ url ('user/products') }}">Crates</a></li>
                                                <li><a href="{{ url ('user/products') }}">Carriers</a></li>
                                                <!-- <li><a href="{{ url ('user/products') }}">View All Treats</a></li> -->
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
                                                <!-- <li><a href="{{ url ('user/products') }}">Stain & Odour</a></li>
                                                <li><a href="{{ url ('user/products') }}">Tick & Flea</a></li>
                                                <li><a href="{{ url ('user/products') }}">Brushes & Combs</a>
                                                </li> -->
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
                                </li><li class="dropdown position-static"><a href="javascript:void(0)">Other Animals</a>
                                    <ul class="mega-menu d-block">
                                        <li class="d-flex">
                                            <ul class="d-block">
                                                <li><a href="product.html"> <img  src="{{ asset('user/assets/images/holapetz/dog.png') }}" alt="">Dog </a>
                                                </li>
                                            </ul>

                                            <ul class="d-block">    
                                                <li><a href="product.html"> <img  src="{{ asset('user/assets/images/holapetz/rabbit.png')}}" alt="">Rabbit </a>
                                                </li>
                                            </ul>

                                            <ul class="d-block">    
                                                <li><a href="product.html"> <img  src="{{ asset('user/assets/images/holapetz/parrot.png')}}" alt="">Parrot </a>
                                                </li>
                                            </ul>

                                            <ul class="d-block">    
                                                <li><a href="product.html"> <img  src="{{ asset('user/assets/images/holapetz/bird.png')}}" alt="">Other birds </a>
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
                                        <li><a href="product">Tents</a></li>
                                        <li><a href="product">Beds</a></li>
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

    <!-- Ekka Cart Start -->
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
                        <a href="{{ url ('user/productDetails') }}" class="sidecart_pro_img"><img
                                src="{{ asset('user/assets/images/holapetz/drools2.jpg')}}" alt="product"></a>
                        <div class="ec-pro-content">
                            <a href="single-{{ url ('user/productDetails') }}" class="cart_pro_title">Mens Winter Leathers Jackets</a>
                            <span class="cart-price"><span>$49.00</span> x 1</span>
                            <div class="qty-plus-minus">
                                <input class="qty-input" type="text" name="ec_qtybtn" value="1" />
                            </div>
                            <a href="#" class="remove">×</a>
                        </div>
                    </li>
                    <li>
                        <a href="{{ url ('user/productDetails') }}" class="sidecart_pro_img"><img
                                src="{{ asset('user/assets/images/holapetz/drools.jpg')}}" alt="product"></a>
                        <div class="ec-pro-content">
                            <a href="{{ url ('user/productDetails') }}" class="cart_pro_title">Running & Trekking Shoes - White</a>
                            <span class="cart-price"><span>$150.00</span> x 1</span>
                            <div class="qty-plus-minus">
                                <input class="qty-input" type="text" name="ec_qtybtn" value="1" />
                            </div>
                            <a href="#" class="remove">×</a>
                        </div>
                    </li>
                    <li>
                        <a href="{{ url ('user/productDetails') }}" class="sidecart_pro_img"><img
                                src="{{ asset('user/assets/images/product-image/111_1.jpg')}}" alt="product"></a>
                        <div class="ec-pro-content">
                            <a href="{{ url ('user/productDetails') }}" class="cart_pro_title">Rose Gold Peacock Earrings</a>
                            <span class="cart-price"><span>$950.00</span> x 1</span>
                            <div class="qty-plus-minus">
                                <input class="qty-input" type="text" name="ec_qtybtn" value="1" />
                            </div>
                            <a href="#" class="remove">×</a>
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
    <!-- Ekka Cart End -->

    <!-- Main Slider Start -->
    <div class="ec-main-slider section section-space-pb">
        <div class="container">
            <div class="ec-slider swiper-container main-slider-nav main-slider-dot">
            <!-- Main slider -->
            <div class="swiper-wrapper">
                <div class="ec-slide-item swiper-slide d-flex slide-1">
                    <div class="container align-self-center">
                        <div class="row">
                            <div class="col-sm-12 align-self-center">
                                <div class="ec-slide-content slider-animation">
                                    <h1 class="ec-slide-title">Sale offer</h1>
                                    <!-- <h1 class="ec-slide-title">New Fashion Summer Sale</h1> -->
                                    <div class="ec-slide-desc">
                                        <!-- <p>starting at $ <b>29</b>.99</p> -->
                                        <a href="#" class="btn btn-lg btn-primary">Shop Now <i
                                                class="ecicon eci-angle-double-right" aria-hidden="true"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="ec-slide-item swiper-slide d-flex slide-2">
                    <div class="container align-self-center">
                        <div class="row">
                            <div class="col-sm-12 align-self-center">
                                <div class="ec-slide-content slider-animation">
                                    <h2 class="ec-slide-stitle">Trending item</h2>
                                    <h1 class="ec-slide-title">SEE THE CHANGE </h1>
                                    <div class="ec-slide-desc">
                                        <p>Baked Artisanally</p>
                                        <a href="#" class="btn btn-lg btn-primary">Shop Now <i
                                                class="ecicon eci-angle-double-right" aria-hidden="true"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="ec-slide-item swiper-slide d-flex slide-3">
                    <div class="container align-self-center">
                        <div class="row">
                            <div class="col-sm-12 align-self-center">
                                <div class="ec-slide-content slider-animation">
                                    <!-- <h2 class="ec-slide-stitle">Trending accessories</h2> -->
                                    <!-- <h1 class="ec-slide-title">Modern Sunglasses</h1> -->
                                    <!-- <div class="ec-slide-desc">
                                        <p>starting at $ <b>15</b>.00</p>
                                        <a href="#" class="btn btn-lg btn-primary">Shop Now <i
                                                class="ecicon eci-angle-double-right" aria-hidden="true"></i></a>
                                    </div> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-pagination swiper-pagination-white"></div>
            <div class="swiper-buttons">
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
            </div>
            </div>
    </div>
    </div>  
    <!-- Main Slider End -->

    <!--  category Section Start -->
    <section class="section ec-category-section section-space-p">
        <div class="container">
            <div class="row d-none">
                <div class="col-md-12">
                    <div class="section-title">
                        <h2 class="ec-title">Top Category</h2>
                    </div>
                </div>
            </div>
            <div class="row margin-minus-b-15 margin-minus-t-15">
                <div id="ec-cat-slider" class="ec-cat-slider owl-carousel">
                <div class="ec_cat_content ec_cat_content_1">
                    <div class="ec_cat_inner ec_cat_inner-1">
                        <div class="ec-category-image">
                            <img src="{{ asset('user/assets/images/holapetz/img1.jpg')}}" class="svg_img" alt="drink" />
                        </div>
                        <div class="ec-category-desc">
                            <h3>Dog Food <span title="Category Items">(53)</span></h3>
                            <a href="{{ url ('user/products') }}" class="cat-show-all">Show All <i class="ecicon eci-angle-double-right"
                                    aria-hidden="true"></i></a>
                        </div>
                    </div>
                </div>
                <div class="ec_cat_content ec_cat_content_2">
                    <div class="ec_cat_inner ec_cat_inner-2">
                        <div class="ec-category-image">
                            <img src="{{ asset('user/assets/images/holapetz/img2.jpg')}}" class="svg_img" alt="drink" />
                        </div>
                        <div class="ec-category-desc">
                            <h3>Leashes <span title="Category Items">(58)</span></h3>
                            <a href="{{ url ('user/products') }}" class="cat-show-all">Show All <i class="ecicon eci-angle-double-right"
                                    aria-hidden="true"></i></a>
                        </div>
                    </div>
                </div>
                <div class="ec_cat_content ec_cat_content_3">
                    <div class="ec_cat_inner ec_cat_inner-3">
                        <div class="ec-category-image">
                            <img src="{{ asset('user/assets/images/holapetz/img3.jpg')}}" class="svg_img" alt="drink" />
                        </div>
                        <div class="ec-category-desc">
                            <h3>Treats <span title="Category Items">(76)</span></h3>
                            <a href="{{ url ('user/products') }}" class="cat-show-all">Show All <i class="ecicon eci-angle-double-right"
                                    aria-hidden="true"></i></a>
                        </div>
                    </div>
                </div>
                <div class="ec_cat_content ec_cat_content_4">
                    <div class="ec_cat_inner ec_cat_inner-4">
                        <div class="ec-category-image">
                            <img src="{{ asset('user/assets/images/holapetz/img4.jpg')}}" class="svg_img" alt="drink" />
                        </div>
                        <div class="ec-category-desc">
                            <h3>Beds<span title="Category Items">(49)</span></h3>
                            <a href="{{ url ('user/products') }}" class="cat-show-all">Show All <i class="ecicon eci-angle-double-right"
                                    aria-hidden="true"></i></a>
                        </div>
                    </div>
                </div>
                <div class="ec_cat_content ec_cat_content_5">
                    <div class="ec_cat_inner ec_cat_inner-5">
                        <div class="ec-category-image">
                            <img src="{{ asset('user/assets/images/holapetz/img5.jpg')}}" class="svg_img" alt="drink" />
                        </div>
                        <div class="ec-category-desc">
                            <h3>Jackets<span title="Category Items">(25)</span></h3>
                            <a href="{{ url ('user/products') }}" class="cat-show-all">Show All <i class="ecicon eci-angle-double-right"
                                    aria-hidden="true"></i></a>
                        </div>
                    </div>
                </div>
                <div class="ec_cat_content ec_cat_content_6">
                    <div class="ec_cat_inner ec_cat_inner-6">
                        <div class="ec-category-image">
                            <img src="{{ asset('user/assets/images/holapetz/img6.jpg')}}" class="svg_img" alt="drink" />
                        </div>
                        <div class="ec-category-desc">
                            <h3>Dog Toys<span title="Category Items">(35)</span></h3>
                            <a href="{{ url ('user/products') }}" class="cat-show-all">Show All <i class="ecicon eci-angle-double-right"
                                    aria-hidden="true"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>
    <!--category Section End -->
    
    <!-- Product tab Area Start -->
    <section class="section ec-product-tab section-space-p">
        <div class="container">
            <div class="row">

                <!-- Sidebar area start -->
                <!-- <div class="ec-side-cat-overlay"></div>
                    <div class="col-lg-3 sidebar-dis-991" data-animation="fadeIn">
                        <div class="cat-sidebar">
                            <div class="cat-sidebar-box">
                                <div class="ec-sidebar-wrap">
                                    Sidebar Category Block
                                    <div class="ec-sidebar-block">
                                        <div class="ec-sb-title">
                                            <h3 class="ec-sidebar-title">Category<button class="ec-close">×</button></h3>
                                        </div>
                                        <div class="ec-sb-block-content">
                                            <ul>
                                                <li>
                                                    <div class="ec-sidebar-block-item"><img src="assets/images/icons/dress-8.png" class="svg_img" alt="drink" />Cothes</div>
                                                    <ul style="display: block;">
                                                        <li>
                                                            <div class="ec-sidebar-sub-item"><a href="{{ url ('user/products') }}">Shirt <span title="Available Stock">- 25</span></a>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="ec-sidebar-sub-item"><a href="{{ url ('user/products') }}">shorts & jeans <span title="Available Stock">- 52</span></a>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="ec-sidebar-sub-item"><a href="{{ url ('user/products') }}">jacket<span title="Available Stock">- 500</span></a>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="ec-sidebar-sub-item"><a href="{{ url ('user/products') }}">dress & frock  <span title="Available Stock">- 35</span></a>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="ec-sb-block-content">
                                            <ul>
                                                <li>
                                                    <div class="ec-sidebar-block-item"><img src="assets/images/icons/shoes-8.png" class="svg_img" alt="drink" />Footwear</div>
                                                    <ul>
                                                        <li>
                                                            <div class="ec-sidebar-sub-item"><a href="{{ url ('user/products') }}">Sports <span title="Available Stock">- 25</span></a>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="ec-sidebar-sub-item"><a href="{{ url ('user/products') }}">Formal <span title="Available Stock">- 52</span></a>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="ec-sidebar-sub-item"><a href="{{ url ('user/products') }}">Casual <span title="Available Stock">- 40</span></a>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="ec-sidebar-sub-item"><a href="{{ url ('user/products') }}">safety shoes <span title="Available Stock">- 35</span></a>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="ec-sb-block-content">
                                            <ul>
                                                <li>
                                                    <div class="ec-sidebar-block-item"><img src="assets/images/icons/jewelry-8.png" class="svg_img" alt="drink" />jewelry</div>
                                                    <ul>
                                                        <li>
                                                            <div class="ec-sidebar-sub-item"><a href="{{ url ('user/products') }}">Earrings <span title="Available Stock">- 50</span></a>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="ec-sidebar-sub-item"><a href="{{ url ('user/products') }}">Couple Rings <span title="Available Stock">- 35</span></a>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="ec-sidebar-sub-item"><a href="{{ url ('user/products') }}">Necklace <span title="Available Stock">- 40</span></a>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="ec-sb-block-content">
                                            <ul>
                                                <li>
                                                    <div class="ec-sidebar-block-item"><img src="assets/images/icons/perfume-8.png" class="svg_img" alt="drink" />perfume</div>
                                                    <ul>
                                                        <li>
                                                            <div class="ec-sidebar-sub-item"><a href="{{ url ('user/products') }}">Clothes perfume<span title="Available Stock">- 4 pcs</span></a>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="ec-sidebar-sub-item"><a href="{{ url ('user/products') }}">deodorant <span title="Available Stock">- 52 pcs</span></a>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="ec-sidebar-sub-item"><a href="{{ url ('user/products') }}">Flower fragrance <span title="Available Stock">- 10 pack</span></a>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="ec-sidebar-sub-item"><a href="{{ url ('user/products') }}">Air Freshener<span title="Available Stock">- 35 pack</span></a>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="ec-sb-block-content">
                                            <ul>
                                                <li>
                                                    <div class="ec-sidebar-block-item"><img src="assets/images/icons/cosmetics-8.png" class="svg_img" alt="drink" />cosmetics</div>
                                                    <ul>
                                                        <li>
                                                            <div class="ec-sidebar-sub-item"><a href="{{ url ('user/products') }}">shampoo<span title="Available Stock"></span></a>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="ec-sidebar-sub-item"><a href="{{ url ('user/products') }}">Sunscreen<span title="Available Stock"></span></a>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="ec-sidebar-sub-item"><a href="{{ url ('user/products') }}">body wash<span title="Available Stock"></span></a>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="ec-sidebar-sub-item"><a href="{{ url ('user/products') }}">makeup kit<span title="Available Stock"></span></a>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="ec-sb-block-content">
                                            <ul>
                                                <li>
                                                    <div class="ec-sidebar-block-item"><img src="assets/images/icons/glasses-8.png" class="svg_img" alt="drink" />glasses</div>
                                                    <ul>
                                                        <li>
                                                            <div class="ec-sidebar-sub-item"><a href="{{ url ('user/products') }}">Sunglasses <span title="Available Stock">- 20</span></a>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="ec-sidebar-sub-item"><a href="{{ url ('user/products') }}">Lenses <span title="Available Stock">- 52</span></a>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="ec-sb-block-content">
                                            <ul>
                                                <li>
                                                    <div class="ec-sidebar-block-item"><img src="assets/images/icons/bag-8.png" class="svg_img" alt="drink" />bags</div>
                                                    <ul>
                                                        <li>
                                                            <div class="ec-sidebar-sub-item"><a href="{{ url ('user/products') }}">shopping bag <span title="Available Stock">- 25</span></a>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="ec-sidebar-sub-item"><a href="{{ url ('user/products') }}">Gym backpack <span title="Available Stock">- 52</span></a>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="ec-sidebar-sub-item"><a href="{{ url ('user/products') }}">purse <span title="Available Stock">- 40</span></a>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="ec-sidebar-sub-item"><a href="{{ url ('user/products') }}">wallet <span title="Available Stock">- 35</span></a>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    Sidebar Category Block
                                    Sidebar Price Block
                                    <div class="ec-sidebar-block ec-price-clock">
                                        <div class="ec-sb-title">
                                            <h3 class="ec-sidebar-title">Price</h3>
                                        </div>
                                        <div class="ec-sb-block-content es-price-slider">
                                            <div class="ec-price-filter">
                                                <div id="ec-sliderPrice" class="filter__slider-price" data-min="0"
                                                    data-max="250" data-step="5"></div>
                                                <div class="ec-price-input">
                                                    <label class="filter__label"><input type="text"
                                                            class="filter__input"></label>
                                                    <span class="ec-price-divider"></span>
                                                    <label class="filter__label"><input type="text"
                                                            class="filter__input"></label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="ec-sidebar-slider">
                                <div class="ec-sb-slider-title">Best Sellers</div>
                                <div class="ec-sb-pro-sl">
                                    <div>
                                        <div class="ec-sb-pro-sl-item">
                                            <a href="productdetails.html" class="sidekka_pro_img"><img
                                                    src="assets/images/product-image/1.jpg" alt="product" /></a>
                                            <div class="ec-pro-content">
                                                <h5 class="ec-pro-title"><a href="productdetails.html">baby fabric shoes</a></h5>
                                                <div class="ec-pro-rating">
                                                    <i class="ecicon eci-star fill"></i>
                                                    <i class="ecicon eci-star fill"></i>
                                                    <i class="ecicon eci-star fill"></i>
                                                    <i class="ecicon eci-star fill"></i>
                                                    <i class="ecicon eci-star fill"></i>
                                                </div>
                                                <span class="ec-price">
                                                    <span class="old-price">$5.00</span>
                                                    <span class="new-price">$4.00</span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="ec-sb-pro-sl-item">
                                            <a href="productdetails.html" class="sidekka_pro_img"><img
                                                    src="assets/images/product-image/2.jpg" alt="product" /></a>
                                            <div class="ec-pro-content">
                                                <h5 class="ec-pro-title"><a href="productdetails.html">Men's hoodies t-shirt</a></h5>
                                                <div class="ec-pro-rating">
                                                    <i class="ecicon eci-star fill"></i>
                                                    <i class="ecicon eci-star fill"></i>
                                                    <i class="ecicon eci-star fill"></i>
                                                    <i class="ecicon eci-star fill"></i>
                                                    <i class="ecicon eci-star"></i>
                                                </div>
                                                <span class="ec-price">
                                                    <span class="old-price">$10.00</span>
                                                    <span class="new-price">$7.00</span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="ec-sb-pro-sl-item">
                                            <a href="productdetails.html" class="sidekka_pro_img"><img
                                                    src="assets/images/product-image/3.jpg" alt="product" /></a>
                                            <div class="ec-pro-content">
                                                <h5 class="ec-pro-title"><a href="productdetails.html">Girls t-shirt</a></h5>
                                                <div class="ec-pro-rating">
                                                    <i class="ecicon eci-star fill"></i>
                                                    <i class="ecicon eci-star fill"></i>
                                                    <i class="ecicon eci-star fill"></i>
                                                    <i class="ecicon eci-star"></i>
                                                    <i class="ecicon eci-star"></i>
                                                </div>
                                                <span class="ec-price">
                                                    <span class="old-price">$5.00</span>
                                                    <span class="new-price">$3.00</span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="ec-sb-pro-sl-item">
                                            <a href="productdetails.html" class="sidekka_pro_img"><img
                                                    src="assets/images/product-image/4.jpg" alt="product" /></a>
                                            <div class="ec-pro-content">
                                                <h5 class="ec-pro-title"><a href="productdetails.html">woolen hat for men</a></h5>
                                                <div class="ec-pro-rating">
                                                    <i class="ecicon eci-star fill"></i>
                                                    <i class="ecicon eci-star fill"></i>
                                                    <i class="ecicon eci-star fill"></i>
                                                    <i class="ecicon eci-star fill"></i>
                                                    <i class="ecicon eci-star fill"></i>
                                                </div>
                                                <span class="ec-price">
                                                    <span class="old-price">$15.00</span>
                                                    <span class="new-price">$12.00</span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="ec-sb-pro-sl-item">
                                            <a href="productdetails.html" class="sidekka_pro_img"><img
                                                    src="assets/images/product-image/5.jpg" alt="product" /></a>
                                            <div class="ec-pro-content">
                                                <h5 class="ec-pro-title"><a href="productdetails.html">Womens purse</a></h5>
                                                <div class="ec-pro-rating">
                                                    <i class="ecicon eci-star fill"></i>
                                                    <i class="ecicon eci-star fill"></i>
                                                    <i class="ecicon eci-star fill"></i>
                                                    <i class="ecicon eci-star fill"></i>
                                                    <i class="ecicon eci-star"></i>
                                                </div>
                                                <span class="ec-price">
                                                    <span class="old-price">$15.00</span>
                                                    <span class="new-price">$12.00</span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="ec-sb-pro-sl-item">
                                            <a href="productdetails.html" class="sidekka_pro_img"><img
                                                    src="assets/images/product-image/6.jpg" alt="product" /></a>
                                            <div class="ec-pro-content">
                                                <h5 class="ec-pro-title"><a href="productdetails.html">Baby toy doctor kit</a></h5>
                                                <div class="ec-pro-rating">
                                                    <i class="ecicon eci-star fill"></i>
                                                    <i class="ecicon eci-star fill"></i>
                                                    <i class="ecicon eci-star"></i>
                                                    <i class="ecicon eci-star"></i>
                                                    <i class="ecicon eci-star"></i>
                                                </div>
                                                <span class="ec-price">
                                                    <span class="old-price">$50.00</span>
                                                    <span class="new-price">$45.00</span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="ec-sb-pro-sl-item">
                                            <a href="productdetails.html" class="sidekka_pro_img"><img
                                                    src="assets/images/product-image/7.jpg" alt="product" /></a>
                                            <div class="ec-pro-content">
                                                <h5 class="ec-pro-title"><a href="productdetails.html">teddy bear baby toy</a></h5>
                                                <div class="ec-pro-rating">
                                                    <i class="ecicon eci-star fill"></i>
                                                    <i class="ecicon eci-star fill"></i>
                                                    <i class="ecicon eci-star fill"></i>
                                                    <i class="ecicon eci-star fill"></i>
                                                    <i class="ecicon eci-star fill"></i>
                                                </div>
                                                <span class="ec-price">
                                                    <span class="old-price">$35.00</span>
                                                    <span class="new-price">$25.00</span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="ec-sb-pro-sl-item">
                                            <a href="productdetails.html" class="sidekka_pro_img"><img
                                                    src="assets/images/product-image/2.jpg" alt="product" /></a>
                                            <div class="ec-pro-content">
                                                <h5 class="ec-pro-title"><a href="productdetails.html">Mens hoodies blue</a></h5>
                                                <div class="ec-pro-rating">
                                                    <i class="ecicon eci-star fill"></i>
                                                    <i class="ecicon eci-star fill"></i>
                                                    <i class="ecicon eci-star fill"></i>
                                                    <i class="ecicon eci-star"></i>
                                                    <i class="ecicon eci-star"></i>
                                                </div>
                                                <span class="ec-price">
                                                    <span class="old-price">$15.00</span>
                                                    <span class="new-price">$13.00</span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                </div>  -->

                <!-- Product area start -->
                <div class="col-lg-12 col-md-12">
 
                    <!-- ec New Arrivals, ec Trending, ec Top Rated Start -->
                    <div class="row">
                        <!-- ec New Arrivals -->
                        <div class="col-lg-4 col-md-6 col-sm-12 col-xs-6 ec-all-product-content ec-new-product-content margin-b-30" data-animation="fadeIn">
                            <div class="col-md-12">
                                <div class="section-title">
                                    <h2 class="ec-title">New Arrivals</h2>
                                </div>
                            </div>
                            <div class="ec-new-slider">
                                <div class="col-sm-12 ec-all-product-block">
                                    <div class="ec-all-product-inner">
                                        <div class="ec-pro-image-outer">
                                            <div class="ec-pro-image">
                                                <a href="{{ url ('user/productDetails') }}" class="image">
                                                    <img class="main-image" src="{{ asset('user/assets/images/holapetz/1.png')}}"
                                                        alt="Product" />
                                                </a>
                                            </div>
                                        </div>
                                        <div class="ec-pro-content">
                                            <h5 class="ec-pro-title"><a href="{{ url ('user/productDetails') }}">Product Name</a></h5>
                                            <h6 class="ec-pro-stitle"><a href="{{ url ('user/products') }}">Type</a></h6>
                                            <div class="ec-pro-rat-price">
                                                <div class="ec-pro-rat-pri-inner">
                                                    <span class="ec-price">
                                                        <span class="new-price">$50.00</span>
                                                        <span class="old-price">$55.00</span>
                                                        <span class="qty">- 2 pack</span>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12 ec-all-product-block">
                                    <div class="ec-all-product-inner">
                                        <div class="ec-pro-image-outer">
                                            <div class="ec-pro-image">
                                                <a href="{{ url ('user/productDetails') }}" class="image">
                                                    <img class="main-image" src="{{ asset('user/assets/images/holapetz/2.jpg')}}"
                                                        alt="Product" />
                                                </a>
                                            </div>
                                        </div>
                                        <div class="ec-pro-content">
                                            <h5 class="ec-pro-title"><a href="{{ url ('user/productDetails') }}">Product Name</a></h5>
                                            <h6 class="ec-pro-stitle"><a href="{{ url ('user/products') }}">Type</a></h6>
                                            <div class="ec-pro-rat-price">
                                                <div class="ec-pro-rat-pri-inner">
                                                    <span class="ec-price">
                                                        <span class="new-price">$62.00</span>
                                                        <span class="old-price">$65.00</span>
                                                        <span class="qty">- 1 kg</span>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12 ec-all-product-block">
                                    <div class="ec-all-product-inner">
                                        <div class="ec-pro-image-outer">
                                            <div class="ec-pro-image">
                                                <a href="{{ url ('user/productDetails') }}" class="image">
                                                    <img class="main-image" src="{{ asset('user/assets/images/holapetz/3.jpg')}}"
                                                        alt="Product" />
                                                </a>
                                            </div>
                                        </div>
                                        <div class="ec-pro-content">
                                            <h5 class="ec-pro-title"><a href="{{ url ('user/productDetails') }}">Product Name</a></h5>
                                            <h6 class="ec-pro-stitle"><a href="{{ url ('user/products') }}">Type</a></h6>
                                            <div class="ec-pro-rat-price">
                                                <div class="ec-pro-rat-pri-inner">
                                                    <span class="ec-price">
                                                        <span class="new-price">$52.00</span>
                                                        <span class="old-price">$55.00</span>
                                                        <span class="qty">- 1 pcs</span>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12 ec-all-product-block">
                                    <div class="ec-all-product-inner">
                                        <div class="ec-pro-image-outer">
                                            <div class="ec-pro-image">
                                                <a href="{{ url ('user/productDetails') }}" class="image">
                                                    <img class="main-image" src="{{ asset('user/assets/images/holapetz/img1.jpg')}}"
                                                        alt="Product" />
                                                </a>
                                            </div>
                                        </div>
                                        <div class="ec-pro-content">
                                            <h5 class="ec-pro-title"><a href="{{ url ('user/productDetails') }}">Product Name</a></h5>
                                            <h6 class="ec-pro-stitle"><a href="{{ url ('user/products') }}">Type</a></h6>
                                            <div class="ec-pro-rat-price">
                                                <div class="ec-pro-rat-pri-inner">
                                                    <span class="ec-price">
                                                        <span class="new-price">$56.00</span>
                                                        <span class="old-price">$78.00</span>
                                                        <span class="qty">- 3 pcs</span>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12 ec-all-product-block">
                                    <div class="ec-all-product-inner">
                                        <div class="ec-pro-image-outer">
                                            <div class="ec-pro-image">
                                                <a href="{{ url ('user/productDetails') }}" class="image">
                                                    <img class="main-image" src="{{ asset('user/assets/images/holapetz/img1.jpg')}}"
                                                        alt="Product" />
                                                </a>
                                            </div>
                                        </div>
                                        <div class="ec-pro-content">
                                            <h5 class="ec-pro-title"><a href="{{ url ('user/productDetails') }}">Product Name</a></h5>
                                            <h6 class="ec-pro-stitle"><a href="{{ url ('user/products') }}">Type</a></h6>
                                            <div class="ec-pro-rat-price">
                                                <div class="ec-pro-rat-pri-inner">
                                                    <span class="ec-price">
                                                        <span class="new-price">$50.00</span>
                                                        <span class="old-price">$55.00</span>
                                                        <span class="qty">- 2 pack</span>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12 ec-all-product-block">
                                    <div class="ec-all-product-inner">
                                        <div class="ec-pro-image-outer">
                                            <div class="ec-pro-image">
                                                <a href="{{ url ('user/productDetails') }}" class="image">
                                                    <img class="main-image" src="{{ asset('user/assets/images/holapetz/3.jpg')}}"
                                                        alt="Product" />
                                                </a>
                                            </div>
                                        </div>
                                        <div class="ec-pro-content">
                                            <h5 class="ec-pro-title"><a href="{{ url ('user/productDetails') }}">Product Name</a></h5>
                                            <h6 class="ec-pro-stitle"><a href="{{ url ('user/products') }}">Type</a></h6>
                                            <div class="ec-pro-rat-price">
                                                <div class="ec-pro-rat-pri-inner">
                                                    <span class="ec-price">
                                                        <span class="new-price">$62.00</span>
                                                        <span class="old-price">$65.00</span>
                                                        <span class="qty">- 1 kg</span>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12 ec-all-product-block">
                                    <div class="ec-all-product-inner">
                                        <div class="ec-pro-image-outer">
                                            <div class="ec-pro-image">
                                                <a href="{{ url ('user/productDetails') }}" class="image">
                                                    <img class="main-image" src="{{ asset('user/assets/images/holapetz/img4.jpg')}}"
                                                        alt="Product" />
                                                </a>
                                            </div>
                                        </div>
                                        <div class="ec-pro-content">
                                            <h5 class="ec-pro-title"><a href="{{ url ('user/productDetails') }}">Product Name</a></h5>
                                            <h6 class="ec-pro-stitle"><a href="{{ url ('user/products') }}">Type</a></h6>
                                            <div class="ec-pro-rat-price">
                                                <div class="ec-pro-rat-pri-inner">
                                                    <span class="ec-price">
                                                        <span class="new-price">$52.00</span>
                                                        <span class="old-price">$55.00</span>
                                                        <span class="qty">- 1 pcs</span>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12 ec-all-product-block">
                                    <div class="ec-all-product-inner">
                                        <div class="ec-pro-image-outer">
                                            <div class="ec-pro-image">
                                                <a href="{{ url ('user/productDetails') }}" class="image">
                                                    <img class="main-image" src="{{ asset('user/assets/images/holapetz/2.jpg')}}"
                                                        alt="Product" />
                                                </a>
                                            </div>
                                        </div>
                                        <div class="ec-pro-content">
                                            <h5 class="ec-pro-title"><a href="{{ url ('user/productDetails') }}">Product Name</a></h5>
                                            <h6 class="ec-pro-stitle"><a href="{{ url ('user/products') }}">Type</a></h6>
                                            <div class="ec-pro-rat-price">
                                                <div class="ec-pro-rat-pri-inner">
                                                    <span class="ec-price">
                                                        <span class="new-price">$56.00</span>
                                                        <span class="old-price">$78.00</span>
                                                        <span class="qty">- 3 pcs</span>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- ec Trending -->
                        <div class="col-lg-4 col-md-6 col-sm-12 col-xs-6 ec-all-product-content ec-new-product-content margin-b-30" data-animation="fadeIn">
                            <div class="col-md-12">
                                <div class="section-title">
                                    <h2 class="ec-title">Trending</h2>
                                </div>
                            </div>
                            <div class="ec-new-slider">
                                <div class="col-sm-12 ec-all-product-block">
                                    <div class="ec-all-product-inner">
                                        <div class="ec-pro-image-outer">
                                            <div class="ec-pro-image">
                                                <a href="{{ url ('user/productDetails') }}" class="image">
                                                    <img class="main-image" src="{{ asset('user/assets/images/holapetz/img2.jpg')}}"
                                                        alt="Product" />
                                                </a>
                                            </div>
                                        </div>
                                        <div class="ec-pro-content">
                                            <h5 class="ec-pro-title"><a href="{{ url ('user/productDetails') }}">Product Name</a></h5>
                                            <h6 class="ec-pro-stitle"><a href="{{ url ('user/products') }}">Type</a></h6>
                                            <div class="ec-pro-rat-price">
                                                <div class="ec-pro-rat-pri-inner">
                                                    <span class="ec-price">
                                                        <span class="new-price">$56.00</span>
                                                        <span class="old-price">$78.00</span>
                                                        <span class="qty">- 3 pcs</span>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12 ec-all-product-block">
                                    <div class="ec-all-product-inner">
                                        <div class="ec-pro-image-outer">
                                            <div class="ec-pro-image">
                                                <a href="{{ url ('user/productDetails') }}" class="image">
                                                    <img class="main-image" src="{{ asset('user/assets/images/holapetz/img1.jpg')}}"
                                                        alt="Product" />
                                                </a>
                                            </div>
                                        </div>
                                        <div class="ec-pro-content">
                                            <h5 class="ec-pro-title"><a href="{{ url ('user/productDetails') }}">Product Name</a></h5>
                                            <h6 class="ec-pro-stitle"><a href="{{ url ('user/products') }}">Type</a></h6>
                                            <div class="ec-pro-rat-price">
                                                <div class="ec-pro-rat-pri-inner">
                                                    <span class="ec-price">
                                                        <span class="new-price">$50.00</span>
                                                        <span class="old-price">$55.00</span>
                                                        <span class="qty">- 2 pack</span>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12 ec-all-product-block">
                                    <div class="ec-all-product-inner">
                                        <div class="ec-pro-image-outer">
                                            <div class="ec-pro-image">
                                                <a href="{{ url ('user/productDetails') }}" class="image">
                                                    <img class="main-image" src="{{ asset('user/assets/images/holapetz/3.jpg')}}"
                                                        alt="Product" />
                                                </a>
                                            </div>
                                        </div>
                                        <div class="ec-pro-content">
                                            <h5 class="ec-pro-title"><a href="{{ url ('user/productDetails') }}">Product Name</a></h5>
                                            <h6 class="ec-pro-stitle"><a href="{{ url ('user/products') }}">Type</a></h6>
                                            <div class="ec-pro-rat-price">
                                                <div class="ec-pro-rat-pri-inner">
                                                    <span class="ec-price">
                                                        <span class="new-price">$62.00</span>
                                                        <span class="old-price">$65.00</span>
                                                        <span class="qty">- 1 kg</span>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12 ec-all-product-block">
                                    <div class="ec-all-product-inner">
                                        <div class="ec-pro-image-outer">
                                            <div class="ec-pro-image">
                                                <a href="{{ url ('user/productDetails') }}" class="image">
                                                    <img class="main-image" src="{{ asset('user/assets/images/holapetz/img4.jpg')}}"
                                                        alt="Product" />
                                                </a>
                                            </div>
                                        </div>
                                        <div class="ec-pro-content">
                                            <h5 class="ec-pro-title"><a href="{{ url ('user/productDetails') }}">Product Name</a></h5>
                                            <h6 class="ec-pro-stitle"><a href="{{ url ('user/products') }}">Type</a></h6>
                                            <div class="ec-pro-rat-price">
                                                <div class="ec-pro-rat-pri-inner">
                                                    <span class="ec-price">
                                                        <span class="new-price">$52.00</span>
                                                        <span class="old-price">$55.00</span>
                                                        <span class="qty">- 1 pcs</span>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12 ec-all-product-block">
                                    <div class="ec-all-product-inner">
                                        <div class="ec-pro-image-outer">
                                            <div class="ec-pro-image">
                                                <a href="{{ url ('user/productDetails') }}" class="image">
                                                    <img class="main-image" src="{{ asset('user/assets/images/holapetz/2.jpg')}}"
                                                        alt="Product" />
                                                </a>
                                            </div>
                                        </div>
                                        <div class="ec-pro-content">
                                            <h5 class="ec-pro-title"><a href="{{ url ('user/productDetails') }}">Product Name</a></h5>
                                            <h6 class="ec-pro-stitle"><a href="{{ url ('user/products') }}">Type</a></h6>
                                            <div class="ec-pro-rat-price">
                                                <div class="ec-pro-rat-pri-inner">
                                                    <span class="ec-price">
                                                        <span class="new-price">$56.00</span>
                                                        <span class="old-price">$78.00</span>
                                                        <span class="qty">- 3 pcs</span>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12 ec-all-product-block">
                                    <div class="ec-all-product-inner">
                                        <div class="ec-pro-image-outer">
                                            <div class="ec-pro-image">
                                                <a href="{{ url ('user/productDetails') }}" class="image">
                                                    <img class="main-image" src="{{ asset('user/assets/images/holapetz/1.png')}}"
                                                        alt="Product" />
                                                </a>
                                            </div>
                                        </div>
                                        <div class="ec-pro-content">
                                            <h5 class="ec-pro-title"><a href="{{ url ('user/productDetails') }}">Product Name</a></h5>
                                            <h6 class="ec-pro-stitle"><a href="{{ url ('user/products') }}">Type</a></h6>
                                            <div class="ec-pro-rat-price">
                                                <div class="ec-pro-rat-pri-inner">
                                                    <span class="ec-price">
                                                        <span class="new-price">$50.00</span>
                                                        <span class="old-price">$55.00</span>
                                                        <span class="qty">- 2 pack</span>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12 ec-all-product-block">
                                    <div class="ec-all-product-inner">
                                        <div class="ec-pro-image-outer">
                                            <div class="ec-pro-image">
                                                <a href="{{ url ('user/productDetails') }}" class="image">
                                                    <img class="main-image" src="{{ asset('user/assets/images/holapetz/img4.jpg')}}"
                                                        alt="Product" />
                                                </a>
                                            </div>
                                        </div>
                                        <div class="ec-pro-content">
                                            <h5 class="ec-pro-title"><a href="{{ url ('user/productDetails') }}">Product Name</a></h5>
                                            <h6 class="ec-pro-stitle"><a href="{{ url ('user/products') }}">Type</a></h6>
                                            <div class="ec-pro-rat-price">
                                                <div class="ec-pro-rat-pri-inner">
                                                    <span class="ec-price">
                                                        <span class="new-price">$62.00</span>
                                                        <span class="old-price">$65.00</span>
                                                        <span class="qty">- 1 kg</span>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12 ec-all-product-block">
                                    <div class="ec-all-product-inner">
                                        <div class="ec-pro-image-outer">
                                            <div class="ec-pro-image">
                                                <a href="{{ url ('user/productDetails') }}" class="image">
                                                    <img class="main-image" src="{{ asset('user/assets/images/holapetz/img6.jpg')}}"
                                                        alt="Product" />
                                                </a>
                                            </div>
                                        </div>
                                        <div class="ec-pro-content">
                                            <h5 class="ec-pro-title"><a href="{{ url ('user/productDetails') }}">Product Name</a></h5>
                                            <h6 class="ec-pro-stitle"><a href="{{ url ('user/products') }}">Type</a></h6>
                                            <div class="ec-pro-rat-price">
                                                <div class="ec-pro-rat-pri-inner">
                                                    <span class="ec-price">
                                                        <span class="new-price">$52.00</span>
                                                        <span class="old-price">$55.00</span>
                                                        <span class="qty">- 1 pcs</span>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- ec Top Rated -->
                        <div class="col-lg-4 col-md-6 col-sm-12 col-xs-6 ec-all-product-content ec-new-product-content m-auto" data-animation="fadeIn">
                            <div class="col-md-12">
                                <div class="section-title">
                                    <h2 class="ec-title">Top Rated</h2>
                                </div>
                            </div>
                            <div class="ec-new-slider">
                                <div class="col-sm-12 ec-all-product-block">
                                    <div class="ec-all-product-inner">
                                        <div class="ec-pro-image-outer">
                                            <div class="ec-pro-image">
                                                <a href="{{ url ('user/productDetails') }}" class="image">
                                                    <img class="main-image" src="{{ asset('user/assets/images/holapetz/2.jpg')}}"
                                                        alt="Product" />
                                                </a>
                                            </div>
                                        </div>
                                        <div class="ec-pro-content">
                                            <h5 class="ec-pro-title"><a href="{{ url ('user/productDetails') }}">Product Name</a></h5>
                                            <h6 class="ec-pro-stitle"><a href="{{ url ('user/products') }}">Type</a></h6>
                                            <div class="ec-pro-rat-price">
                                                <div class="ec-pro-rat-pri-inner">
                                                    <span class="ec-price">
                                                        <span class="new-price">$50.00</span>
                                                        <span class="old-price">$55.00</span>
                                                        <span class="qty">- 2 pack</span>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12 ec-all-product-block">
                                    <div class="ec-all-product-inner">
                                        <div class="ec-pro-image-outer">
                                            <div class="ec-pro-image">
                                                <a href="{{ url ('user/productDetails') }}" class="image">
                                                    <img class="main-image" src="{{ asset('user/assets/images/holapetz/img3.jpg')}}"
                                                        alt="Product" />
                                                </a>
                                            </div>
                                        </div>
                                        <div class="ec-pro-content">
                                            <h5 class="ec-pro-title"><a href="{{ url ('user/productDetails') }}">Product Name</a></h5>
                                            <h6 class="ec-pro-stitle"><a href="{{ url ('user/products') }}">Type</a></h6>
                                            <div class="ec-pro-rat-price">
                                                <div class="ec-pro-rat-pri-inner">
                                                    <span class="ec-price">
                                                        <span class="new-price">$62.00</span>
                                                        <span class="old-price">$65.00</span>
                                                        <span class="qty">- 1 kg</span>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12 ec-all-product-block">
                                    <div class="ec-all-product-inner">
                                        <div class="ec-pro-image-outer">
                                            <div class="ec-pro-image">
                                                <a href="{{ url ('user/productDetails') }}" class="image">
                                                    <img class="main-image" src="{{ asset('user/assets/images/holapetz/img5.jpg')}}"
                                                        alt="Product" />
                                                </a>
                                            </div>
                                        </div>
                                        <div class="ec-pro-content">
                                            <h5 class="ec-pro-title"><a href="{{ url ('user/productDetails') }}">Product Name</a></h5>
                                            <h6 class="ec-pro-stitle"><a href="{{ url ('user/products') }}">Type</a></h6>
                                            <div class="ec-pro-rat-price">
                                                <div class="ec-pro-rat-pri-inner">
                                                    <span class="ec-price">
                                                        <span class="new-price">$52.00</span>
                                                        <span class="old-price">$55.00</span>
                                                        <span class="qty">- 1 pcs</span>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12 ec-all-product-block">
                                    <div class="ec-all-product-inner">
                                        <div class="ec-pro-image-outer">
                                            <div class="ec-pro-image">
                                                <a href="{{ url ('user/productDetails') }}" class="image">
                                                    <img class="main-image" src="{{ asset('user/assets/images/holapetz/img6.jpg')}}"
                                                        alt="Product" />
                                                </a>
                                            </div>
                                        </div>
                                        <div class="ec-pro-content">
                                            <h5 class="ec-pro-title"><a href="{{ url ('user/productDetails') }}">Product Name</a></h5>
                                            <h6 class="ec-pro-stitle"><a href="{{ url ('user/products') }}">Type</a></h6>
                                            <div class="ec-pro-rat-price">
                                                <div class="ec-pro-rat-pri-inner">
                                                    <span class="ec-price">
                                                        <span class="new-price">$56.00</span>
                                                        <span class="old-price">$78.00</span>
                                                        <span class="qty">- 3 pcs</span>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12 ec-all-product-block">
                                    <div class="ec-all-product-inner">
                                        <div class="ec-pro-image-outer">
                                            <div class="ec-pro-image">
                                                <a href="{{ url ('user/productDetails') }}" class="image">
                                                    <img class="main-image" src="{{ asset('user/assets/images/holapetz/1.png')}}"
                                                        alt="Product" />
                                                </a>
                                            </div>
                                        </div>
                                        <div class="ec-pro-content">
                                            <h5 class="ec-pro-title"><a href="{{ url ('user/productDetails') }}">Product Name</a></h5>
                                            <h6 class="ec-pro-stitle"><a href="{{ url ('user/products') }}">Type</a></h6>
                                            <div class="ec-pro-rat-price">
                                                <div class="ec-pro-rat-pri-inner">
                                                    <span class="ec-price">
                                                        <span class="new-price">$50.00</span>
                                                        <span class="old-price">$55.00</span>
                                                        <span class="qty">- 2 pack</span>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12 ec-all-product-block">
                                    <div class="ec-all-product-inner">
                                        <div class="ec-pro-image-outer">
                                            <div class="ec-pro-image">
                                                <a href="{{ url ('user/productDetails') }}" class="image">
                                                    <img class="main-image" src="{{ asset('user/assets/images/holapetz/2.jpg')}}"
                                                        alt="Product" />
                                                </a>
                                            </div>
                                        </div>
                                        <div class="ec-pro-content">
                                            <h5 class="ec-pro-title"><a href="{{ url ('user/productDetails') }}">Product Name</a></h5>
                                            <h6 class="ec-pro-stitle"><a href="{{ url ('user/products') }}">Type</a></h6>
                                            <div class="ec-pro-rat-price">
                                                <div class="ec-pro-rat-pri-inner">
                                                    <span class="ec-price">
                                                        <span class="new-price">$62.00</span>
                                                        <span class="old-price">$65.00</span>
                                                        <span class="qty">- 1 kg</span>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12 ec-all-product-block">
                                    <div class="ec-all-product-inner">
                                        <div class="ec-pro-image-outer">
                                            <div class="ec-pro-image">
                                                <a href="{{ url ('user/productDetails') }}" class="image">
                                                    <img class="main-image" src="{{ asset('user/assets/images/holapetz/3.jpg')}}"
                                                        alt="Product" />
                                                </a>
                                            </div>
                                        </div>
                                        <div class="ec-pro-content">
                                            <h5 class="ec-pro-title"><a href="{{ url ('user/productDetails') }}">Product Name</a></h5>
                                            <h6 class="ec-pro-stitle"><a href="{{ url ('user/products') }}">Type</a></h6>
                                            <div class="ec-pro-rat-price">
                                                <div class="ec-pro-rat-pri-inner">
                                                    <span class="ec-price">
                                                        <span class="new-price">$52.00</span>
                                                        <span class="old-price">$55.00</span>
                                                        <span class="qty">- 1 pcs</span>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12 ec-all-product-block">
                                    <div class="ec-all-product-inner">
                                        <div class="ec-pro-image-outer">
                                            <div class="ec-pro-image">
                                                <a href="{{ url ('user/productDetails') }}" class="image">
                                                    <img class="main-image" src="{{ asset('user/assets/images/holapetz/img1.jpg')}}"
                                                        alt="Product" />
                                                </a>
                                            </div>
                                        </div>
                                        <div class="ec-pro-content">
                                            <h5 class="ec-pro-title"><a href="{{ url ('user/productDetails') }}">Product Name</a></h5>
                                            <h6 class="ec-pro-stitle"><a href="{{ url ('user/products') }}">Type</a></h6>
                                            <div class="ec-pro-rat-price">
                                                <div class="ec-pro-rat-pri-inner">
                                                    <span class="ec-price">
                                                        <span class="new-price">$56.00</span>
                                                        <span class="old-price">$78.00</span>
                                                        <span class="qty">- 3 pcs</span>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ec New Arrivals, ec Trending, ec Top Rated end -->

                    <!-- Deal of the day Start -->
                    <!-- <div class="row space-t-50" data-animation="fadeIn">
                         Special Section Start
                        <div class="ec-spe-section col-lg-12 col-md-12 col-sm-12 sectopn-spc-mb">
                            <div class="col-md-12">
                                <div class="section-title">
                                    <h2 class="ec-title">Deal of the day</h2>
                                </div>
                            </div>

                            <div class="ec-spe-products">
                                <div class="ec-spe-product">
                                    <div class="ec-spe-pro-inner">
                                        <div class="ec-spe-pro-image-outer col-md-6 col-sm-12">
                                            <div class="ec-spe-pro-image">
                                                <img class="img-responsive" src="assets/images/product-image/111_1.jpg" alt="">                                                                              
                                            </div>
                                        </div>
                                        <div class="ec-spe-pro-content col-md-6 col-sm-12">
                                            <div class="ec-spe-pro-rating">
                                                <span class="ec-spe-rating-icon">
                                                    <i class="ecicon eci-star fill"></i>
                                                    <i class="ecicon eci-star fill"></i>
                                                    <i class="ecicon eci-star fill"></i>
                                                    <i class="ecicon eci-star"></i>
                                                    <i class="ecicon eci-star"></i>
                                                </span>
                                            </div>
                                            <h5 class="ec-spe-pro-title"><a href="productdetails.html">Rose Gold diamonds Earring</a></h5>
                                            <div class="ec-spe-pro-desc">Lorem ipsum dolor sit amet consectetur Lorem ipsum
                                                dolor dolor sit amet consectetur Lorem ipsum dolor</div>
                                            <div class="ec-spe-price">
                                                <span class="new-price">$1990.00</span>
                                                <span class="old-price">$2000.00</span>
                                            </div>
                                            <div class="ec-spe-pro-btn">
                                                <a href="#" class="btn btn-lg btn-primary">Add To Cart</a>
                                            </div>
                                            <div class="ec-spe-pro-progress">
                                                <span class="ec-spe-pro-progress-desc"><span>Already Sold:
                                                        <b>15</b></span><span>Available: <b>40</b></span></span>
                                                <span class="ec-spe-pro-progressbar"></span>
                                            </div>
                                            <div class="countdowntimer">
                                                <span class="ec-spe-count-desc"> Hurry Up! Offer ends in:</span>
                                                <span id="ec-spe-count-1"></span>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class="ec-spe-product">
                                    <div class="ec-spe-pro-inner">
                                        <div class="ec-spe-pro-image-outer col-md-6 col-sm-12">
                                            <div class="ec-spe-pro-image">
                                                <img class="img-responsive"
                                                            src="assets/images/product-image/110_1.jpg" alt="">
                                            </div>
                                        </div>
                                        <div class="ec-spe-pro-content col-md-6 col-sm-12">
                                            <div class="ec-spe-pro-rating">
                                                <span class="ec-spe-rating-icon">
                                                    <i class="ecicon eci-star fill"></i>
                                                    <i class="ecicon eci-star fill"></i>
                                                    <i class="ecicon eci-star fill"></i>
                                                    <i class="ecicon eci-star"></i>
                                                    <i class="ecicon eci-star"></i>
                                                </span>
                                            </div>
                                            <h5 class="ec-spe-pro-title"><a href="productdetails.html">shampoo, conditioner & facewash packs</a></h5>
                                            <div class="ec-spe-pro-desc">Lorem ipsum dolor sit amet consectetur Lorem ipsum
                                                dolor dolor sit amet consectetur Lorem ipsum dolor</div>
                                            <div class="ec-spe-price">
                                                <span class="new-price">$150.00</span>
                                                <span class="old-price">$200.00</span>
                                            </div>
                                            <div class="ec-spe-pro-btn">
                                                <a href="#" class="btn btn-lg btn-primary">Add To Cart</a>
                                            </div>
                                            <div class="ec-spe-pro-progress">
                                                <span class="ec-spe-pro-progress-desc"><span>Already Sold:
                                                        <b>20</b></span><span>Available: <b>40</b></span></span>
                                                <span class="ec-spe-pro-progressbar"></span>
                                            </div>
                                            <div class="countdowntimer">
                                                <span class="ec-spe-count-desc"> Hurry Up! Offer ends in:</span>
                                                <span id="ec-spe-count-2"></span>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                         Special Section End
                    </div> -->
                    <!-- Deal of the day end -->


										<!-- Main Slider Start -->
    <div class="ec-main-slider section section-space-pb pt-100px">
        <div class="container">
            <div class="ec-slider swiper-container main-slider-nav main-slider-dot">
            <!-- Main slider -->
            <div class="swiper-wrapper">
                <div class="ec-slide-item swiper-slide d-flex banner-1">
                    <div class="container align-self-center">
                        <div class="row">
                            <div class="col-sm-12 align-self-center">
                                <div class="ec-slide-content slider-animation">
                                    <!-- <h2 class="ec-slide-stitle">Sale offer</h2> -->
                                    <!-- <h1 class="ec-slide-title">New Fashion Summer Sale</h1> -->
                                    <!-- <div class="ec-slide-desc">
                                        <p>starting at $ <b>29</b>.99</p>
                                        <a href="#" class="btn btn-lg btn-primary">Shop Now <i
                                                class="ecicon eci-angle-double-right" aria-hidden="true"></i></a>
                                    </div> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="ec-slide-item swiper-slide d-flex banner-2">
                    <div class="container align-self-center">
                        <div class="row">
                            <div class="col-sm-12 align-self-center">
                                <div class="ec-slide-content slider-animation">
                                    <!-- <h2 class="ec-slide-stitle">Trending item</h2> -->
                                    <!-- <h1 class="ec-slide-title">Women's latest fashion sale</h1> -->
                                    <!-- <div class="ec-slide-desc">
                                        <p>starting at $ <b>20</b>.00</p>
                                        <a href="#" class="btn btn-lg btn-primary">Shop Now <i
                                                class="ecicon eci-angle-double-right" aria-hidden="true"></i></a>
                                    </div> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-pagination swiper-pagination-white"></div>
            <div class="swiper-buttons">
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
            </div>
            </div>
    </div>
    </div>  
    <!-- Main Slider End -->

                    <!-- Product tab area start -->
                    <div class="row space-t-50">
                        <div class="col-md-12">
                            <div class="section-title">
                                <h2 class="ec-title">New Products</h2>
                            </div>
                        </div>

                        <!-- Tab Start -->
                        <div class="col-md-12 ec-pro-tab">
                            <ul class="ec-pro-tab-nav nav justify-content-end">
                                <li class="nav-item"><a class="nav-link active" data-bs-toggle="tab"
                                        href="#all">All</a></li>
                                <li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#dogs">Dogs</a></li>
                                <li class="nav-item"><a class="nav-link" data-bs-toggle="tab"
                                        href="#cats">Cats</a></li>
                                <li class="nav-item"><a class="nav-link" data-bs-toggle="tab"
                                            href="#others">Other Pets</a></li>
                            </ul>
                        </div>
                        <!-- Tab End -->
                    </div>
                    <div class="row margin-minus-b-15">
                        <div class="col">
                            <div class="tab-content">
                                <!-- 1st Product tab start -->
                                <div class="tab-pane fade show active" id="all">
                                    <div class="row">
                                        <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 ec-product-content">
                                            <div class="ec-product-inner">
                                                <div class="ec-pro-image-outer">
                                                    <div class="ec-pro-image">
                                                        <a href="{{ url ('user/productDetails') }}" class="image">
                                                            <img class="main-image"
                                                                src="{{ asset('user/assets/images/holapetz/1.png') }}" alt="Product" />
                                                            <img class="hover-image"
                                                                src="{{ asset('user/assets/images/holapetz/1.png') }}" alt="Product" />
                                                        </a>
                                                        <span class="percentage">20%</span>
                                                        <div class="ec-pro-actions">
                                                            <a class="ec-btn-group wishlist" title="Wishlist"><i class="fi-rr-heart"></i></a>
                                                            <a href="#" class="ec-btn-group quickview" data-link-action="quickview" title="Quick view"
                                                                data-bs-toggle="modal" data-bs-target="#ec_quickview_modal"><i class="fi-rr-eye"></i></a>
                                                            <!-- <a href="compare.html" class="ec-btn-group compare" title="Compare"><i class="fi fi-rr-arrows-repeat"></i></a> -->
                                                            <a href="javascript:void(0)"  title="Add To Cart" class="ec-btn-group add-to-cart"><i class="fi-rr-shopping-basket"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="ec-pro-content">
                                                    <a href="{{ url ('user/products') }}"><h6 class="ec-pro-stitle">Product Name</h6></a> 
                                                    <h5 class="ec-pro-title"><a href="{{ url ('user/productDetails') }}">Product Details</a></h5>
                                                    <div class="ec-pro-rat-price">
                                                        <span class="ec-pro-rating">
                                                            <i class="ecicon eci-star fill"></i>
                                                            <i class="ecicon eci-star fill"></i>
                                                            <i class="ecicon eci-star fill"></i>
                                                            <i class="ecicon eci-star"></i>
                                                            <i class="ecicon eci-star"></i>
                                                        </span>
                                                        <span class="ec-price">
                                                            <span class="new-price">$58.00</span>
                                                            <span class="old-price">$65.00</span>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 ec-product-content">
                                            <div class="ec-product-inner">
                                                <div class="ec-pro-image-outer">
                                                    <div class="ec-pro-image">
                                                        <a href="{{ url ('user/productDetails') }}" class="image">
                                                            <img class="main-image"
                                                                src="{{ asset('user/assets/images/holapetz/img1.jpg') }}" alt="Product" />
                                                            <img class="hover-image"
                                                                src="{{ asset('user/assets/images/holapetz/img1.jpg') }}" alt="Product" />
                                                        </a>
                                                        <span class="percentage">20%</span>
                                                        <div class="ec-pro-actions">
                                                            <a class="ec-btn-group wishlist" title="Wishlist"><i class="fi-rr-heart"></i></a>
                                                            <a href="#" class="ec-btn-group quickview" data-link-action="quickview" title="Quick view"
                                                                data-bs-toggle="modal" data-bs-target="#ec_quickview_modal"><i class="fi-rr-eye"></i></a>
                                                            <!-- <a href="compare.html" class="ec-btn-group compare" title="Compare"><i class="fi fi-rr-arrows-repeat"></i></a> -->
                                                            <a href="javascript:void(0)"  title="Add To Cart" class="ec-btn-group add-to-cart"><i class="fi-rr-shopping-basket"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="ec-pro-content">
                                                    <a href="{{ url ('user/products') }}"><h6 class="ec-pro-stitle">Product Name</h6></a> 
                                                    <h5 class="ec-pro-title"><a href="{{ url ('user/productDetails') }}">Product Details</a></h5>
                                                    <div class="ec-pro-rat-price">
                                                        <span class="ec-pro-rating">
                                                            <i class="ecicon eci-star fill"></i>
                                                            <i class="ecicon eci-star fill"></i>
                                                            <i class="ecicon eci-star fill"></i>
                                                            <i class="ecicon eci-star"></i>
                                                            <i class="ecicon eci-star"></i>
                                                        </span>
                                                        <span class="ec-price">
                                                            <span class="new-price">$58.00</span>
                                                            <span class="old-price">$65.00</span>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 ec-product-content">
                                            <div class="ec-product-inner">
                                                <div class="ec-pro-image-outer">
                                                    <div class="ec-pro-image">
                                                        <a href="{{ url ('user/productDetails') }}" class="image">
                                                            <img class="main-image"
                                                                src="{{ asset('user/assets/images/holapetz/img2.jpg') }}" alt="Product" />
                                                            <img class="hover-image"
                                                                src="{{ asset('user/assets/images/holapetz/img2.jpg') }}" alt="Product" />
                                                        </a>
                                                        <span class="percentage">20%</span>
                                                        <div class="ec-pro-actions">
                                                            <a class="ec-btn-group wishlist" title="Wishlist"><i class="fi-rr-heart"></i></a>
                                                            <a href="#" class="ec-btn-group quickview" data-link-action="quickview" title="Quick view"
                                                                data-bs-toggle="modal" data-bs-target="#ec_quickview_modal"><i class="fi-rr-eye"></i></a>
                                                            <!-- <a href="compare.html" class="ec-btn-group compare" title="Compare"><i class="fi fi-rr-arrows-repeat"></i></a> -->
                                                            <a href="javascript:void(0)"  title="Add To Cart" class="ec-btn-group add-to-cart"><i class="fi-rr-shopping-basket"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="ec-pro-content">
                                                    <a href="{{ url ('user/products') }}"><h6 class="ec-pro-stitle">Product Name</h6></a> 
                                                    <h5 class="ec-pro-title"><a href="{{ url ('user/productDetails') }}">Product Details</a></h5>
                                                    <div class="ec-pro-rat-price">
                                                        <span class="ec-pro-rating">
                                                            <i class="ecicon eci-star fill"></i>
                                                            <i class="ecicon eci-star fill"></i>
                                                            <i class="ecicon eci-star fill"></i>
                                                            <i class="ecicon eci-star"></i>
                                                            <i class="ecicon eci-star"></i>
                                                        </span>
                                                        <span class="ec-price">
                                                            <span class="new-price">$58.00</span>
                                                            <span class="old-price">$65.00</span>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 ec-product-content">
                                            <div class="ec-product-inner">
                                                <div class="ec-pro-image-outer">
                                                    <div class="ec-pro-image">
                                                        <a href="{{ url ('user/productDetails') }}" class="image">
                                                            <img class="main-image"
                                                                src="{{ asset('user/assets/images/holapetz/img3.jpg') }}" alt="Product" />
                                                            <img class="hover-image"
                                                                src="{{ asset('user/assets/images/holapetz/img3.jpg') }}" alt="Product" />
                                                        </a>
                                                        <span class="percentage">20%</span>
                                                        <div class="ec-pro-actions">
                                                            <a class="ec-btn-group wishlist" title="Wishlist"><i class="fi-rr-heart"></i></a>
                                                            <a href="#" class="ec-btn-group quickview" data-link-action="quickview" title="Quick view"
                                                                data-bs-toggle="modal" data-bs-target="#ec_quickview_modal"><i class="fi-rr-eye"></i></a>
                                                            <!-- <a href="compare.html" class="ec-btn-group compare" title="Compare"><i class="fi fi-rr-arrows-repeat"></i></a> -->
                                                            <a href="javascript:void(0)"  title="Add To Cart" class="ec-btn-group add-to-cart"><i class="fi-rr-shopping-basket"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="ec-pro-content">
                                                    <a href="{{ url ('user/products') }}"><h6 class="ec-pro-stitle">Product Name</h6></a> 
                                                    <h5 class="ec-pro-title"><a href="{{ url ('user/productDetails') }}">Product Details</a></h5>
                                                    <div class="ec-pro-rat-price">
                                                        <span class="ec-pro-rating">
                                                            <i class="ecicon eci-star fill"></i>
                                                            <i class="ecicon eci-star fill"></i>
                                                            <i class="ecicon eci-star fill"></i>
                                                            <i class="ecicon eci-star"></i>
                                                            <i class="ecicon eci-star"></i>
                                                        </span>
                                                        <span class="ec-price">
                                                            <span class="new-price">$58.00</span>
                                                            <span class="old-price">$65.00</span>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 ec-product-content">
                                            <div class="ec-product-inner">
                                                <div class="ec-pro-image-outer">
                                                    <div class="ec-pro-image">
                                                        <a href="{{ url ('user/productDetails') }}" class="image">
                                                            <img class="main-image"
                                                                src="{{ asset('user/assets/images/holapetz/img4.jpg') }}" alt="Product" />
                                                            <img class="hover-image"
                                                                src="{{ asset('user/assets/images/holapetz/img4.jpg') }}" alt="Product" />
                                                        </a>
                                                        <span class="percentage">20%</span>
                                                        <div class="ec-pro-actions">
                                                            <a class="ec-btn-group wishlist" title="Wishlist"><i class="fi-rr-heart"></i></a>
                                                            <a href="#" class="ec-btn-group quickview" data-link-action="quickview" title="Quick view"
                                                                data-bs-toggle="modal" data-bs-target="#ec_quickview_modal"><i class="fi-rr-eye"></i></a>
                                                            <!-- <a href="compare.html" class="ec-btn-group compare" title="Compare"><i class="fi fi-rr-arrows-repeat"></i></a> -->
                                                            <a href="javascript:void(0)"  title="Add To Cart" class="ec-btn-group add-to-cart"><i class="fi-rr-shopping-basket"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="ec-pro-content">
                                                    <a href="{{ url ('user/products') }}"><h6 class="ec-pro-stitle">Product Name</h6></a> 
                                                    <h5 class="ec-pro-title"><a href="{{ url ('user/productDetails') }}">Product Details</a></h5>
                                                    <div class="ec-pro-rat-price">
                                                        <span class="ec-pro-rating">
                                                            <i class="ecicon eci-star fill"></i>
                                                            <i class="ecicon eci-star fill"></i>
                                                            <i class="ecicon eci-star fill"></i>
                                                            <i class="ecicon eci-star"></i>
                                                            <i class="ecicon eci-star"></i>
                                                        </span>
                                                        <span class="ec-price">
                                                            <span class="new-price">$58.00</span>
                                                            <span class="old-price">$65.00</span>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 ec-product-content">
                                            <div class="ec-product-inner">
                                                <div class="ec-pro-image-outer">
                                                    <div class="ec-pro-image">
                                                        <a href="{{ url ('user/productDetails') }}" class="image">
                                                            <img class="main-image"
                                                                src="{{ asset('user/assets/images/holapetz/img5.jpg') }}" alt="Product" />
                                                            <img class="hover-image"
                                                                src="{{ asset('user/assets/images/holapetz/img5.jpg') }}" alt="Product" />
                                                        </a>
                                                        <span class="percentage">20%</span>
                                                        <div class="ec-pro-actions">
                                                            <a class="ec-btn-group wishlist" title="Wishlist"><i class="fi-rr-heart"></i></a>
                                                            <a href="#" class="ec-btn-group quickview" data-link-action="quickview" title="Quick view"
                                                                data-bs-toggle="modal" data-bs-target="#ec_quickview_modal"><i class="fi-rr-eye"></i></a>
                                                            <!-- <a href="compare.html" class="ec-btn-group compare" title="Compare"><i class="fi fi-rr-arrows-repeat"></i></a> -->
                                                            <a href="javascript:void(0)"  title="Add To Cart" class="ec-btn-group add-to-cart"><i class="fi-rr-shopping-basket"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="ec-pro-content">
                                                    <a href="{{ url ('user/products') }}"><h6 class="ec-pro-stitle">Product Name</h6></a> 
                                                    <h5 class="ec-pro-title"><a href="{{ url ('user/productDetails') }}">Product Details</a></h5>
                                                    <div class="ec-pro-rat-price">
                                                        <span class="ec-pro-rating">
                                                            <i class="ecicon eci-star fill"></i>
                                                            <i class="ecicon eci-star fill"></i>
                                                            <i class="ecicon eci-star fill"></i>
                                                            <i class="ecicon eci-star"></i>
                                                            <i class="ecicon eci-star"></i>
                                                        </span>
                                                        <span class="ec-price">
                                                            <span class="new-price">$58.00</span>
                                                            <span class="old-price">$65.00</span>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 ec-product-content">
                                            <div class="ec-product-inner">
                                                <div class="ec-pro-image-outer">
                                                    <div class="ec-pro-image">
                                                        <a href="{{ url ('user/productDetails') }}" class="image">
                                                            <img class="main-image"
                                                                src="{{ asset('user/assets/images/holapetz/img6.jpg') }}" alt="Product" />
                                                            <img class="hover-image"
                                                                src="{{ asset('user/assets/images/holapetz/img6.jpg') }}" alt="Product" />
                                                        </a>
                                                        <span class="percentage">20%</span>
                                                        <div class="ec-pro-actions">
                                                            <a class="ec-btn-group wishlist" title="Wishlist"><i class="fi-rr-heart"></i></a>
                                                            <a href="#" class="ec-btn-group quickview" data-link-action="quickview" title="Quick view"
                                                                data-bs-toggle="modal" data-bs-target="#ec_quickview_modal"><i class="fi-rr-eye"></i></a>
                                                            <!-- <a href="compare.html" class="ec-btn-group compare" title="Compare"><i class="fi fi-rr-arrows-repeat"></i></a> -->
                                                            <a href="javascript:void(0)"  title="Add To Cart" class="ec-btn-group add-to-cart"><i class="fi-rr-shopping-basket"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="ec-pro-content">
                                                    <a href="{{ url ('user/products') }}"><h6 class="ec-pro-stitle">Product Name</h6></a> 
                                                    <h5 class="ec-pro-title"><a href="{{ url ('user/productDetails') }}">Product Details</a></h5>
                                                    <div class="ec-pro-rat-price">
                                                        <span class="ec-pro-rating">
                                                            <i class="ecicon eci-star fill"></i>
                                                            <i class="ecicon eci-star fill"></i>
                                                            <i class="ecicon eci-star fill"></i>
                                                            <i class="ecicon eci-star"></i>
                                                            <i class="ecicon eci-star"></i>
                                                        </span>
                                                        <span class="ec-price">
                                                            <span class="new-price">$58.00</span>
                                                            <span class="old-price">$65.00</span>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 ec-product-content">
                                            <div class="ec-product-inner">
                                                <div class="ec-pro-image-outer">
                                                    <div class="ec-pro-image">
                                                        <a href="{{ url ('user/productDetails') }}" class="image">
                                                            <img class="main-image"
                                                                src="{{ asset('user/assets/images/holapetz/2.jpg') }}" alt="Product" />
                                                            <img class="hover-image"
                                                                src="{{ asset('user/assets/images/holapetz/2.jpg') }}" alt="Product" />
                                                        </a>
                                                        <span class="percentage">20%</span>
                                                        <div class="ec-pro-actions">
                                                            <a class="ec-btn-group wishlist" title="Wishlist"><i class="fi-rr-heart"></i></a>
                                                            <a href="#" class="ec-btn-group quickview" data-link-action="quickview" title="Quick view"
                                                                data-bs-toggle="modal" data-bs-target="#ec_quickview_modal"><i class="fi-rr-eye"></i></a>
                                                            <!-- <a href="compare.html" class="ec-btn-group compare" title="Compare"><i class="fi fi-rr-arrows-repeat"></i></a> -->
                                                            <a href="javascript:void(0)"  title="Add To Cart" class="ec-btn-group add-to-cart"><i class="fi-rr-shopping-basket"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="ec-pro-content">
                                                    <a href="{{ url ('user/products') }}"><h6 class="ec-pro-stitle">Product Name</h6></a> 
                                                    <h5 class="ec-pro-title"><a href="{{ url ('user/productDetails') }}">Product Details</a></h5>
                                                    <div class="ec-pro-rat-price">
                                                        <span class="ec-pro-rating">
                                                            <i class="ecicon eci-star fill"></i>
                                                            <i class="ecicon eci-star fill"></i>
                                                            <i class="ecicon eci-star fill"></i>
                                                            <i class="ecicon eci-star"></i>
                                                            <i class="ecicon eci-star"></i>
                                                        </span>
                                                        <span class="ec-price">
                                                            <span class="new-price">$58.00</span>
                                                            <span class="old-price">$65.00</span>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 ec-product-content">
                                            <div class="ec-product-inner">
                                                <div class="ec-pro-image-outer">
                                                    <div class="ec-pro-image">
                                                        <a href="{{ url ('user/productDetails') }}" class="image">
                                                            <img class="main-image"
                                                                src="{{ asset('user/assets/images/holapetz/3.jpg') }}" alt="Product" />
                                                            <img class="hover-image"
                                                                src="{{ asset('user/assets/images/holapetz/3.jpg') }}" alt="Product" />
                                                        </a>
                                                        <span class="percentage">20%</span>
                                                        <div class="ec-pro-actions">
                                                            <a class="ec-btn-group wishlist" title="Wishlist"><i class="fi-rr-heart"></i></a>
                                                            <a href="#" class="ec-btn-group quickview" data-link-action="quickview" title="Quick view"
                                                                data-bs-toggle="modal" data-bs-target="#ec_quickview_modal"><i class="fi-rr-eye"></i></a>
                                                            <!-- <a href="compare.html" class="ec-btn-group compare" title="Compare"><i class="fi fi-rr-arrows-repeat"></i></a> -->
                                                            <a href="javascript:void(0)"  title="Add To Cart" class="ec-btn-group add-to-cart"><i class="fi-rr-shopping-basket"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="ec-pro-content">
                                                    <a href="{{ url ('user/products') }}"><h6 class="ec-pro-stitle">Product Name</h6></a> 
                                                    <h5 class="ec-pro-title"><a href="{{ url ('user/productDetails') }}">Product Details</a></h5>
                                                    <div class="ec-pro-rat-price">
                                                        <span class="ec-pro-rating">
                                                            <i class="ecicon eci-star fill"></i>
                                                            <i class="ecicon eci-star fill"></i>
                                                            <i class="ecicon eci-star fill"></i>
                                                            <i class="ecicon eci-star"></i>
                                                            <i class="ecicon eci-star"></i>
                                                        </span>
                                                        <span class="ec-price">
                                                            <span class="new-price">$58.00</span>
                                                            <span class="old-price">$65.00</span>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 ec-product-content">
                                            <div class="ec-product-inner">
                                                <div class="ec-pro-image-outer">
                                                    <div class="ec-pro-image">
                                                        <a href="{{ url ('user/productDetails') }}" class="image">
                                                            <img class="main-image"
                                                                src="{{ asset('user/assets/images/holapetz/2.jpg') }}" alt="Product" />
                                                            <img class="hover-image"
                                                                src="{{ asset('user/assets/images/holapetz/2.jpg') }}" alt="Product" />
                                                        </a>
                                                        <span class="percentage">20%</span>
                                                        <div class="ec-pro-actions">
                                                            <a class="ec-btn-group wishlist" title="Wishlist"><i class="fi-rr-heart"></i></a>
                                                            <a href="#" class="ec-btn-group quickview" data-link-action="quickview" title="Quick view"
                                                                data-bs-toggle="modal" data-bs-target="#ec_quickview_modal"><i class="fi-rr-eye"></i></a>
                                                            <!-- <a href="compare.html" class="ec-btn-group compare" title="Compare"><i class="fi fi-rr-arrows-repeat"></i></a> -->
                                                            <a href="javascript:void(0)"  title="Add To Cart" class="ec-btn-group add-to-cart"><i class="fi-rr-shopping-basket"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="ec-pro-content">
                                                    <a href="{{ url ('user/products') }}"><h6 class="ec-pro-stitle">Product Name</h6></a> 
                                                    <h5 class="ec-pro-title"><a href="{{ url ('user/productDetails') }}">Product Details</a></h5>
                                                    <div class="ec-pro-rat-price">
                                                        <span class="ec-pro-rating">
                                                            <i class="ecicon eci-star fill"></i>
                                                            <i class="ecicon eci-star fill"></i>
                                                            <i class="ecicon eci-star fill"></i>
                                                            <i class="ecicon eci-star"></i>
                                                            <i class="ecicon eci-star"></i>
                                                        </span>
                                                        <span class="ec-price">
                                                            <span class="new-price">$58.00</span>
                                                            <span class="old-price">$65.00</span>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 ec-product-content">
                                            <div class="ec-product-inner">
                                                <div class="ec-pro-image-outer">
                                                    <div class="ec-pro-image">
                                                        <a href="{{ url ('user/productDetails') }}" class="image">
                                                            <img class="main-image"
                                                                src="{{ asset('user/assets/images/holapetz/1.png') }}" alt="Product" />
                                                            <img class="hover-image"
                                                                src="{{ asset('user/assets/images/holapetz/1.png') }}" alt="Product" />
                                                        </a>
                                                        <span class="percentage">20%</span>
                                                        <div class="ec-pro-actions">
                                                            <a class="ec-btn-group wishlist" title="Wishlist"><i class="fi-rr-heart"></i></a>
                                                            <a href="#" class="ec-btn-group quickview" data-link-action="quickview" title="Quick view"
                                                                data-bs-toggle="modal" data-bs-target="#ec_quickview_modal"><i class="fi-rr-eye"></i></a>
                                                            <!-- <a href="compare.html" class="ec-btn-group compare" title="Compare"><i class="fi fi-rr-arrows-repeat"></i></a>  -->
                                                            <a href="javascript:void(0)"  title="Add To Cart" class="ec-btn-group add-to-cart"><i class="fi-rr-shopping-basket"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="ec-pro-content">
                                                    <a href="{{ url ('user/products') }}"><h6 class="ec-pro-stitle">Product Name</h6></a> 
                                                    <h5 class="ec-pro-title"><a href="{{ url ('user/productDetails') }}">Product Details</a></h5>
                                                    <div class="ec-pro-rat-price">
                                                        <span class="ec-pro-rating">
                                                            <i class="ecicon eci-star fill"></i>
                                                            <i class="ecicon eci-star fill"></i>
                                                            <i class="ecicon eci-star fill"></i>
                                                            <i class="ecicon eci-star"></i>
                                                            <i class="ecicon eci-star"></i>
                                                        </span>
                                                        <span class="ec-price">
                                                            <span class="new-price">$58.00</span>
                                                            <span class="old-price">$65.00</span>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- ec 1st Product tab end -->
                                <!-- ec 2nd Product tab start -->
                                <div class="tab-pane fade" id="dogs">
                                    <div class="row">
                                        <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 ec-product-content">
                                            <div class="ec-product-inner">
                                                <div class="ec-pro-image-outer">
                                                    <div class="ec-pro-image">
                                                        <a href="{{ url ('user/productDetails') }}" class="image">
                                                            <img class="main-image"
                                                                src="{{ asset('user/assets/images/holapetz/1.png') }}" alt="Product" />
                                                            <img class="hover-image"
                                                                src="{{ asset('user/assets/images/holapetz/1.png') }}" alt="Product" />
                                                        </a>
                                                        <span class="percentage">20%</span>
                                                        <div class="ec-pro-actions">
                                                            <a class="ec-btn-group wishlist" title="Wishlist"><i class="fi-rr-heart"></i></a>
                                                            <a href="#" class="ec-btn-group quickview" data-link-action="quickview" title="Quick view"
                                                                data-bs-toggle="modal" data-bs-target="#ec_quickview_modal"><i class="fi-rr-eye"></i></a>
                                                            <a href="compare.html" class="ec-btn-group compare" title="Compare"><i class="fi fi-rr-arrows-repeat"></i></a>
                                                            <a href="javascript:void(0)"  title="Add To Cart" class="ec-btn-group add-to-cart"><i class="fi-rr-shopping-basket"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="ec-pro-content">
                                                    <a href="{{ url ('user/products') }}"><h6 class="ec-pro-stitle">Product Name</h6></a> 
                                                    <h5 class="ec-pro-title"><a href="{{ url ('user/productDetails') }}">Product Details</a></h5>
                                                    <div class="ec-pro-rat-price">
                                                        <span class="ec-pro-rating">
                                                            <i class="ecicon eci-star fill"></i>
                                                            <i class="ecicon eci-star fill"></i>
                                                            <i class="ecicon eci-star fill"></i>
                                                            <i class="ecicon eci-star"></i>
                                                            <i class="ecicon eci-star"></i>
                                                        </span>
                                                        <span class="ec-price">
                                                            <span class="new-price">$58.00</span>
                                                            <span class="old-price">$65.00</span>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 ec-product-content">
                                            <div class="ec-product-inner">
                                                <div class="ec-pro-image-outer">
                                                    <div class="ec-pro-image">
                                                        <a href="{{ url ('user/productDetails') }}" class="image">
                                                            <img class="main-image"
                                                                src="{{ asset('user/assets/images/holapetz/img1.jpg') }}" alt="Product" />
                                                            <img class="hover-image"
                                                                src="{{ asset('user/assets/images/holapetz/img1.jpg') }}" alt="Product" />
                                                        </a>
                                                        <span class="percentage">20%</span>
                                                        <div class="ec-pro-actions">
                                                            <a class="ec-btn-group wishlist" title="Wishlist"><i class="fi-rr-heart"></i></a>
                                                            <a href="#" class="ec-btn-group quickview" data-link-action="quickview" title="Quick view"
                                                                data-bs-toggle="modal" data-bs-target="#ec_quickview_modal"><i class="fi-rr-eye"></i></a>
                                                            <a href="compare.html" class="ec-btn-group compare" title="Compare"><i class="fi fi-rr-arrows-repeat"></i></a>
                                                            <a href="javascript:void(0)"  title="Add To Cart" class="ec-btn-group add-to-cart"><i class="fi-rr-shopping-basket"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="ec-pro-content">
                                                    <a href="{{ url ('user/products') }}"><h6 class="ec-pro-stitle">Product Name</h6></a> 
                                                    <h5 class="ec-pro-title"><a href="{{ url ('user/productDetails') }}">Product Details</a></h5>
                                                    <div class="ec-pro-rat-price">
                                                        <span class="ec-pro-rating">
                                                            <i class="ecicon eci-star fill"></i>
                                                            <i class="ecicon eci-star fill"></i>
                                                            <i class="ecicon eci-star fill"></i>
                                                            <i class="ecicon eci-star"></i>
                                                            <i class="ecicon eci-star"></i>
                                                        </span>
                                                        <span class="ec-price">
                                                            <span class="new-price">$58.00</span>
                                                            <span class="old-price">$65.00</span>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 ec-product-content">
                                            <div class="ec-product-inner">
                                                <div class="ec-pro-image-outer">
                                                    <div class="ec-pro-image">
                                                        <a href="{{ url ('user/productDetails') }}" class="image">
                                                            <img class="main-image"
                                                                src="{{ asset('user/assets/images/holapetz/img2.jpg') }}" alt="Product" />
                                                            <img class="hover-image"
                                                                src="{{ asset('user/assets/images/holapetz/img2.jpg') }}" alt="Product" />
                                                        </a>
                                                        <span class="percentage">20%</span>
                                                        <div class="ec-pro-actions">
                                                            <a class="ec-btn-group wishlist" title="Wishlist"><i class="fi-rr-heart"></i></a>
                                                            <a href="#" class="ec-btn-group quickview" data-link-action="quickview" title="Quick view"
                                                                data-bs-toggle="modal" data-bs-target="#ec_quickview_modal"><i class="fi-rr-eye"></i></a>
                                                            <a href="compare.html" class="ec-btn-group compare" title="Compare"><i class="fi fi-rr-arrows-repeat"></i></a>
                                                            <a href="javascript:void(0)"  title="Add To Cart" class="ec-btn-group add-to-cart"><i class="fi-rr-shopping-basket"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="ec-pro-content">
                                                    <a href="{{ url ('user/products') }}"><h6 class="ec-pro-stitle">Product Name</h6></a> 
                                                    <h5 class="ec-pro-title"><a href="{{ url ('user/productDetails') }}">Product Details</a></h5>
                                                    <div class="ec-pro-rat-price">
                                                        <span class="ec-pro-rating">
                                                            <i class="ecicon eci-star fill"></i>
                                                            <i class="ecicon eci-star fill"></i>
                                                            <i class="ecicon eci-star fill"></i>
                                                            <i class="ecicon eci-star"></i>
                                                            <i class="ecicon eci-star"></i>
                                                        </span>
                                                        <span class="ec-price">
                                                            <span class="new-price">$58.00</span>
                                                            <span class="old-price">$65.00</span>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 ec-product-content">
                                            <div class="ec-product-inner">
                                                <div class="ec-pro-image-outer">
                                                    <div class="ec-pro-image">
                                                        <a href="{{ url ('user/productDetails') }}" class="image">
                                                            <img class="main-image"
                                                                src="{{ asset('user/assets/images/holapetz/img3.jpg') }}" alt="Product" />
                                                            <img class="hover-image"
                                                                src="{{ asset('user/assets/images/holapetz/img3.jpg') }}" alt="Product" />
                                                        </a>
                                                        <span class="percentage">20%</span>
                                                        <div class="ec-pro-actions">
                                                            <a class="ec-btn-group wishlist" title="Wishlist"><i class="fi-rr-heart"></i></a>
                                                            <a href="#" class="ec-btn-group quickview" data-link-action="quickview" title="Quick view"
                                                                data-bs-toggle="modal" data-bs-target="#ec_quickview_modal"><i class="fi-rr-eye"></i></a>
                                                            <a href="compare.html" class="ec-btn-group compare" title="Compare"><i class="fi fi-rr-arrows-repeat"></i></a>
                                                            <a href="javascript:void(0)"  title="Add To Cart" class="ec-btn-group add-to-cart"><i class="fi-rr-shopping-basket"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="ec-pro-content">
                                                    <a href="{{ url ('user/products') }}"><h6 class="ec-pro-stitle">Product Name</h6></a> 
                                                    <h5 class="ec-pro-title"><a href="{{ url ('user/productDetails') }}">Product Details</a></h5>
                                                    <div class="ec-pro-rat-price">
                                                        <span class="ec-pro-rating">
                                                            <i class="ecicon eci-star fill"></i>
                                                            <i class="ecicon eci-star fill"></i>
                                                            <i class="ecicon eci-star fill"></i>
                                                            <i class="ecicon eci-star"></i>
                                                            <i class="ecicon eci-star"></i>
                                                        </span>
                                                        <span class="ec-price">
                                                            <span class="new-price">$58.00</span>
                                                            <span class="old-price">$65.00</span>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 ec-product-content">
                                            <div class="ec-product-inner">
                                                <div class="ec-pro-image-outer">
                                                    <div class="ec-pro-image">
                                                        <a href="{{ url ('user/productDetails') }}" class="image">
                                                            <img class="main-image"
                                                                src="{{ asset('user/assets/images/holapetz/img4.jpg') }}" alt="Product" />
                                                            <img class="hover-image"
                                                                src="{{ asset('user/assets/images/holapetz/img4.jpg') }}" alt="Product" />
                                                        </a>
                                                        <span class="percentage">20%</span>
                                                        <div class="ec-pro-actions">
                                                            <a class="ec-btn-group wishlist" title="Wishlist"><i class="fi-rr-heart"></i></a>
                                                            <a href="#" class="ec-btn-group quickview" data-link-action="quickview" title="Quick view"
                                                                data-bs-toggle="modal" data-bs-target="#ec_quickview_modal"><i class="fi-rr-eye"></i></a>
                                                            <a href="compare.html" class="ec-btn-group compare" title="Compare"><i class="fi fi-rr-arrows-repeat"></i></a>
                                                            <a href="javascript:void(0)"  title="Add To Cart" class="ec-btn-group add-to-cart"><i class="fi-rr-shopping-basket"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="ec-pro-content">
                                                    <a href="{{ url ('user/products') }}"><h6 class="ec-pro-stitle">Product Name</h6></a> 
                                                    <h5 class="ec-pro-title"><a href="{{ url ('user/productDetails') }}">Product Details</a></h5>
                                                    <div class="ec-pro-rat-price">
                                                        <span class="ec-pro-rating">
                                                            <i class="ecicon eci-star fill"></i>
                                                            <i class="ecicon eci-star fill"></i>
                                                            <i class="ecicon eci-star fill"></i>
                                                            <i class="ecicon eci-star"></i>
                                                            <i class="ecicon eci-star"></i>
                                                        </span>
                                                        <span class="ec-price">
                                                            <span class="new-price">$58.00</span>
                                                            <span class="old-price">$65.00</span>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 ec-product-content">
                                            <div class="ec-product-inner">
                                                <div class="ec-pro-image-outer">
                                                    <div class="ec-pro-image">
                                                        <a href="{{ url ('user/productDetails') }}" class="image">
                                                            <img class="main-image"
                                                                src="{{ asset('user/assets/images/holapetz/img5.jpg') }}" alt="Product" />
                                                            <img class="hover-image"
                                                                src="{{ asset('user/assets/images/holapetz/img5.jpg') }}" alt="Product" />
                                                        </a>
                                                        <span class="percentage">20%</span>
                                                        <div class="ec-pro-actions">
                                                            <a class="ec-btn-group wishlist" title="Wishlist"><i class="fi-rr-heart"></i></a>
                                                            <a href="#" class="ec-btn-group quickview" data-link-action="quickview" title="Quick view"
                                                                data-bs-toggle="modal" data-bs-target="#ec_quickview_modal"><i class="fi-rr-eye"></i></a>
                                                            <a href="compare.html" class="ec-btn-group compare" title="Compare"><i class="fi fi-rr-arrows-repeat"></i></a>
                                                            <a href="javascript:void(0)"  title="Add To Cart" class="ec-btn-group add-to-cart"><i class="fi-rr-shopping-basket"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="ec-pro-content">
                                                    <a href="{{ url ('user/products') }}"><h6 class="ec-pro-stitle">Product Name</h6></a> 
                                                    <h5 class="ec-pro-title"><a href="{{ url ('user/productDetails') }}">Product Details</a></h5>
                                                    <div class="ec-pro-rat-price">
                                                        <span class="ec-pro-rating">
                                                            <i class="ecicon eci-star fill"></i>
                                                            <i class="ecicon eci-star fill"></i>
                                                            <i class="ecicon eci-star fill"></i>
                                                            <i class="ecicon eci-star"></i>
                                                            <i class="ecicon eci-star"></i>
                                                        </span>
                                                        <span class="ec-price">
                                                            <span class="new-price">$58.00</span>
                                                            <span class="old-price">$65.00</span>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 ec-product-content">
                                            <div class="ec-product-inner">
                                                <div class="ec-pro-image-outer">
                                                    <div class="ec-pro-image">
                                                        <a href="{{ url ('user/productDetails') }}" class="image">
                                                            <img class="main-image"
                                                                src="{{ asset('user/assets/images/holapetz/img6.jpg') }}" alt="Product" />
                                                            <img class="hover-image"
                                                                src="{{ asset('user/assets/images/holapetz/img6.jpg') }}" alt="Product" />
                                                        </a>
                                                        <span class="percentage">20%</span>
                                                        <div class="ec-pro-actions">
                                                            <a class="ec-btn-group wishlist" title="Wishlist"><i class="fi-rr-heart"></i></a>
                                                            <a href="#" class="ec-btn-group quickview" data-link-action="quickview" title="Quick view"
                                                                data-bs-toggle="modal" data-bs-target="#ec_quickview_modal"><i class="fi-rr-eye"></i></a>
                                                            <a href="compare.html" class="ec-btn-group compare" title="Compare"><i class="fi fi-rr-arrows-repeat"></i></a>
                                                            <a href="javascript:void(0)"  title="Add To Cart" class="ec-btn-group add-to-cart"><i class="fi-rr-shopping-basket"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="ec-pro-content">
                                                    <a href="{{ url ('user/products') }}"><h6 class="ec-pro-stitle">Product Name</h6></a> 
                                                    <h5 class="ec-pro-title"><a href="{{ url ('user/productDetails') }}">Product Details</a></h5>
                                                    <div class="ec-pro-rat-price">
                                                        <span class="ec-pro-rating">
                                                            <i class="ecicon eci-star fill"></i>
                                                            <i class="ecicon eci-star fill"></i>
                                                            <i class="ecicon eci-star fill"></i>
                                                            <i class="ecicon eci-star"></i>
                                                            <i class="ecicon eci-star"></i>
                                                        </span>
                                                        <span class="ec-price">
                                                            <span class="new-price">$58.00</span>
                                                            <span class="old-price">$65.00</span>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 ec-product-content">
                                            <div class="ec-product-inner">
                                                <div class="ec-pro-image-outer">
                                                    <div class="ec-pro-image">
                                                        <a href="{{ url ('user/productDetails') }}" class="image">
                                                            <img class="main-image"
                                                                src="{{ asset('user/assets/images/holapetz/2.jpg') }}" alt="Product" />
                                                            <img class="hover-image"
                                                                src="{{ asset('user/assets/images/holapetz/2.jpg') }}" alt="Product" />
                                                        </a>
                                                        <span class="percentage">20%</span>
                                                        <div class="ec-pro-actions">
                                                            <a class="ec-btn-group wishlist" title="Wishlist"><i class="fi-rr-heart"></i></a>
                                                            <a href="#" class="ec-btn-group quickview" data-link-action="quickview" title="Quick view"
                                                                data-bs-toggle="modal" data-bs-target="#ec_quickview_modal"><i class="fi-rr-eye"></i></a>
                                                            <a href="compare.html" class="ec-btn-group compare" title="Compare"><i class="fi fi-rr-arrows-repeat"></i></a>
                                                            <a href="javascript:void(0)"  title="Add To Cart" class="ec-btn-group add-to-cart"><i class="fi-rr-shopping-basket"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="ec-pro-content">
                                                    <a href="{{ url ('user/products') }}"><h6 class="ec-pro-stitle">Product Name</h6></a> 
                                                    <h5 class="ec-pro-title"><a href="{{ url ('user/productDetails') }}">Product Details</a></h5>
                                                    <div class="ec-pro-rat-price">
                                                        <span class="ec-pro-rating">
                                                            <i class="ecicon eci-star fill"></i>
                                                            <i class="ecicon eci-star fill"></i>
                                                            <i class="ecicon eci-star fill"></i>
                                                            <i class="ecicon eci-star"></i>
                                                            <i class="ecicon eci-star"></i>
                                                        </span>
                                                        <span class="ec-price">
                                                            <span class="new-price">$58.00</span>
                                                            <span class="old-price">$65.00</span>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- ec 2nd Product tab end -->
                                <!-- ec 3rd Product tab start -->
                                <div class="tab-pane fade" id="cats">
                                    <div class="row">
                                        <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 ec-product-content">
                                            <div class="ec-product-inner">
                                                <div class="ec-pro-image-outer">
                                                    <div class="ec-pro-image">
                                                        <a href="{{ url ('user/productDetails') }}" class="image">
                                                            <img class="main-image"
                                                                src="{{ asset('user/assets/images/holapetz/img5.jpg') }}" alt="Product" />
                                                            <img class="hover-image"
                                                                src="{{ asset('user/assets/images/holapetz/img5.jpg') }}" alt="Product" />
                                                        </a>
                                                        <span class="percentage">20%</span>
                                                        <div class="ec-pro-actions">
                                                            <a class="ec-btn-group wishlist" title="Wishlist"><i class="fi-rr-heart"></i></a>
                                                            <a href="#" class="ec-btn-group quickview" data-link-action="quickview" title="Quick view"
                                                                data-bs-toggle="modal" data-bs-target="#ec_quickview_modal"><i class="fi-rr-eye"></i></a>
                                                            <a href="compare.html" class="ec-btn-group compare" title="Compare"><i class="fi fi-rr-arrows-repeat"></i></a>
                                                            <a href="javascript:void(0)"  title="Add To Cart" class="ec-btn-group add-to-cart"><i class="fi-rr-shopping-basket"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="ec-pro-content">
                                                    <a href="{{ url ('user/products') }}"><h6 class="ec-pro-stitle">Product Name</h6></a> 
                                                    <h5 class="ec-pro-title"><a href="{{ url ('user/productDetails') }}">Product Details</a></h5>
                                                    <div class="ec-pro-rat-price">
                                                        <span class="ec-pro-rating">
                                                            <i class="ecicon eci-star fill"></i>
                                                            <i class="ecicon eci-star fill"></i>
                                                            <i class="ecicon eci-star fill"></i>
                                                            <i class="ecicon eci-star"></i>
                                                            <i class="ecicon eci-star"></i>
                                                        </span>
                                                        <span class="ec-price">
                                                            <span class="new-price">$58.00</span>
                                                            <span class="old-price">$65.00</span>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 ec-product-content">
                                            <div class="ec-product-inner">
                                                <div class="ec-pro-image-outer">
                                                    <div class="ec-pro-image">
                                                        <a href="{{ url ('user/productDetails') }}" class="image">
                                                            <img class="main-image"
                                                                src="{{ asset('user/assets/images/holapetz/img1.jpg') }}" alt="Product" />
                                                            <img class="hover-image"
                                                                src="{{ asset('user/assets/images/holapetz/img1.jpg') }}" alt="Product" />
                                                        </a>
                                                        <span class="percentage">20%</span>
                                                        <div class="ec-pro-actions">
                                                            <a class="ec-btn-group wishlist" title="Wishlist"><i class="fi-rr-heart"></i></a>
                                                            <a href="#" class="ec-btn-group quickview" data-link-action="quickview" title="Quick view"
                                                                data-bs-toggle="modal" data-bs-target="#ec_quickview_modal"><i class="fi-rr-eye"></i></a>
                                                            <a href="compare.html" class="ec-btn-group compare" title="Compare"><i class="fi fi-rr-arrows-repeat"></i></a>
                                                            <a href="javascript:void(0)"  title="Add To Cart" class="ec-btn-group add-to-cart"><i class="fi-rr-shopping-basket"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="ec-pro-content">
                                                    <a href="{{ url ('user/products') }}"><h6 class="ec-pro-stitle">Product Name</h6></a> 
                                                    <h5 class="ec-pro-title"><a href="{{ url ('user/productDetails') }}">Product Details</a></h5>
                                                    <div class="ec-pro-rat-price">
                                                        <span class="ec-pro-rating">
                                                            <i class="ecicon eci-star fill"></i>
                                                            <i class="ecicon eci-star fill"></i>
                                                            <i class="ecicon eci-star fill"></i>
                                                            <i class="ecicon eci-star"></i>
                                                            <i class="ecicon eci-star"></i>
                                                        </span>
                                                        <span class="ec-price">
                                                            <span class="new-price">$58.00</span>
                                                            <span class="old-price">$65.00</span>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 ec-product-content">
                                            <div class="ec-product-inner">
                                                <div class="ec-pro-image-outer">
                                                    <div class="ec-pro-image">
                                                        <a href="{{ url ('user/productDetails') }}" class="image">
                                                            <img class="main-image"
                                                                src="{{ asset('user/assets/images/holapetz/img2.jpg') }}" alt="Product" />
                                                            <img class="hover-image"
                                                                src="{{ asset('user/assets/images/holapetz/img2.jpg') }}" alt="Product" />
                                                        </a>
                                                        <span class="percentage">20%</span>
                                                        <div class="ec-pro-actions">
                                                            <a class="ec-btn-group wishlist" title="Wishlist"><i class="fi-rr-heart"></i></a>
                                                            <a href="#" class="ec-btn-group quickview" data-link-action="quickview" title="Quick view"
                                                                data-bs-toggle="modal" data-bs-target="#ec_quickview_modal"><i class="fi-rr-eye"></i></a>
                                                            <a href="compare.html" class="ec-btn-group compare" title="Compare"><i class="fi fi-rr-arrows-repeat"></i></a>
                                                            <a href="javascript:void(0)"  title="Add To Cart" class="ec-btn-group add-to-cart"><i class="fi-rr-shopping-basket"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="ec-pro-content">
                                                    <a href="{{ url ('user/products') }}"><h6 class="ec-pro-stitle">Product Name</h6></a> 
                                                    <h5 class="ec-pro-title"><a href="{{ url ('user/productDetails') }}">Product Details</a></h5>
                                                    <div class="ec-pro-rat-price">
                                                        <span class="ec-pro-rating">
                                                            <i class="ecicon eci-star fill"></i>
                                                            <i class="ecicon eci-star fill"></i>
                                                            <i class="ecicon eci-star fill"></i>
                                                            <i class="ecicon eci-star"></i>
                                                            <i class="ecicon eci-star"></i>
                                                        </span>
                                                        <span class="ec-price">
                                                            <span class="new-price">$58.00</span>
                                                            <span class="old-price">$65.00</span>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 ec-product-content">
                                            <div class="ec-product-inner">
                                                <div class="ec-pro-image-outer">
                                                    <div class="ec-pro-image">
                                                        <a href="{{ url ('user/productDetails') }}" class="image">
                                                            <img class="main-image"
                                                                src="{{ asset('user/assets/images/holapetz/img3.jpg') }}" alt="Product" />
                                                            <img class="hover-image"
                                                                src="{{ asset('user/assets/images/holapetz/img3.jpg') }}" alt="Product" />
                                                        </a>
                                                        <span class="percentage">20%</span>
                                                        <div class="ec-pro-actions">
                                                            <a class="ec-btn-group wishlist" title="Wishlist"><i class="fi-rr-heart"></i></a>
                                                            <a href="#" class="ec-btn-group quickview" data-link-action="quickview" title="Quick view"
                                                                data-bs-toggle="modal" data-bs-target="#ec_quickview_modal"><i class="fi-rr-eye"></i></a>
                                                            <a href="compare.html" class="ec-btn-group compare" title="Compare"><i class="fi fi-rr-arrows-repeat"></i></a>
                                                            <a href="javascript:void(0)"  title="Add To Cart" class="ec-btn-group add-to-cart"><i class="fi-rr-shopping-basket"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="ec-pro-content">
                                                    <a href="{{ url ('user/products') }}"><h6 class="ec-pro-stitle">Product Name</h6></a> 
                                                    <h5 class="ec-pro-title"><a href="{{ url ('user/productDetails') }}">Product Details</a></h5>
                                                    <div class="ec-pro-rat-price">
                                                        <span class="ec-pro-rating">
                                                            <i class="ecicon eci-star fill"></i>
                                                            <i class="ecicon eci-star fill"></i>
                                                            <i class="ecicon eci-star fill"></i>
                                                            <i class="ecicon eci-star"></i>
                                                            <i class="ecicon eci-star"></i>
                                                        </span>
                                                        <span class="ec-price">
                                                            <span class="new-price">$58.00</span>
                                                            <span class="old-price">$65.00</span>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 ec-product-content">
                                            <div class="ec-product-inner">
                                                <div class="ec-pro-image-outer">
                                                    <div class="ec-pro-image">
                                                        <a href="{{ url ('user/productDetails') }}" class="image">
                                                            <img class="main-image"
                                                                src="{{ asset('user/assets/images/holapetz/img4.jpg') }}" alt="Product" />
                                                            <img class="hover-image"
                                                                src="{{ asset('user/assets/images/holapetz/img4.jpg') }}" alt="Product" />
                                                        </a>
                                                        <span class="percentage">20%</span>
                                                        <div class="ec-pro-actions">
                                                            <a class="ec-btn-group wishlist" title="Wishlist"><i class="fi-rr-heart"></i></a>
                                                            <a href="#" class="ec-btn-group quickview" data-link-action="quickview" title="Quick view"
                                                                data-bs-toggle="modal" data-bs-target="#ec_quickview_modal"><i class="fi-rr-eye"></i></a>
                                                            <a href="compare.html" class="ec-btn-group compare" title="Compare"><i class="fi fi-rr-arrows-repeat"></i></a>
                                                            <a href="javascript:void(0)"  title="Add To Cart" class="ec-btn-group add-to-cart"><i class="fi-rr-shopping-basket"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="ec-pro-content">
                                                    <a href="{{ url ('user/products') }}"><h6 class="ec-pro-stitle">Product Name</h6></a> 
                                                    <h5 class="ec-pro-title"><a href="{{ url ('user/productDetails') }}">Product Details</a></h5>
                                                    <div class="ec-pro-rat-price">
                                                        <span class="ec-pro-rating">
                                                            <i class="ecicon eci-star fill"></i>
                                                            <i class="ecicon eci-star fill"></i>
                                                            <i class="ecicon eci-star fill"></i>
                                                            <i class="ecicon eci-star"></i>
                                                            <i class="ecicon eci-star"></i>
                                                        </span>
                                                        <span class="ec-price">
                                                            <span class="new-price">$58.00</span>
                                                            <span class="old-price">$65.00</span>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 ec-product-content">
                                            <div class="ec-product-inner">
                                                <div class="ec-pro-image-outer">
                                                    <div class="ec-pro-image">
                                                        <a href="{{ url ('user/productDetails') }}" class="image">
                                                            <img class="main-image"
                                                                src="{{ asset('user/assets/images/holapetz/img5.jpg') }}" alt="Product" />
                                                            <img class="hover-image"
                                                                src="{{ asset('user/assets/images/holapetz/img5.jpg') }}" alt="Product" />
                                                        </a>
                                                        <span class="percentage">20%</span>
                                                        <div class="ec-pro-actions">
                                                            <a class="ec-btn-group wishlist" title="Wishlist"><i class="fi-rr-heart"></i></a>
                                                            <a href="#" class="ec-btn-group quickview" data-link-action="quickview" title="Quick view"
                                                                data-bs-toggle="modal" data-bs-target="#ec_quickview_modal"><i class="fi-rr-eye"></i></a>
                                                            <a href="compare.html" class="ec-btn-group compare" title="Compare"><i class="fi fi-rr-arrows-repeat"></i></a>
                                                            <a href="javascript:void(0)"  title="Add To Cart" class="ec-btn-group add-to-cart"><i class="fi-rr-shopping-basket"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="ec-pro-content">
                                                    <a href="{{ url ('user/products') }}"><h6 class="ec-pro-stitle">Product Name</h6></a> 
                                                    <h5 class="ec-pro-title"><a href="{{ url ('user/productDetails') }}">Product Details</a></h5>
                                                    <div class="ec-pro-rat-price">
                                                        <span class="ec-pro-rating">
                                                            <i class="ecicon eci-star fill"></i>
                                                            <i class="ecicon eci-star fill"></i>
                                                            <i class="ecicon eci-star fill"></i>
                                                            <i class="ecicon eci-star"></i>
                                                            <i class="ecicon eci-star"></i>
                                                        </span>
                                                        <span class="ec-price">
                                                            <span class="new-price">$58.00</span>
                                                            <span class="old-price">$65.00</span>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 ec-product-content">
                                            <div class="ec-product-inner">
                                                <div class="ec-pro-image-outer">
                                                    <div class="ec-pro-image">
                                                        <a href="{{ url ('user/productDetails') }}" class="image">
                                                            <img class="main-image"
                                                                src="{{ asset('user/assets/images/holapetz/img6.jpg')}}" alt="Product" />
                                                            <img class="hover-image"
                                                                src="{{ asset('user/assets/images/holapetz/img6.jpg')}}" alt="Product" />
                                                        </a>
                                                        <span class="percentage">20%</span>
                                                        <div class="ec-pro-actions">
                                                            <a class="ec-btn-group wishlist" title="Wishlist"><i class="fi-rr-heart"></i></a>
                                                            <a href="#" class="ec-btn-group quickview" data-link-action="quickview" title="Quick view"
                                                                data-bs-toggle="modal" data-bs-target="#ec_quickview_modal"><i class="fi-rr-eye"></i></a>
                                                            <a href="compare.html" class="ec-btn-group compare" title="Compare"><i class="fi fi-rr-arrows-repeat"></i></a>
                                                            <a href="javascript:void(0)"  title="Add To Cart" class="ec-btn-group add-to-cart"><i class="fi-rr-shopping-basket"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="ec-pro-content">
                                                    <a href="{{ url ('user/products') }}"><h6 class="ec-pro-stitle">Product Name</h6></a> 
                                                    <h5 class="ec-pro-title"><a href="{{ url ('user/productDetails') }}">Product Details</a></h5>
                                                    <div class="ec-pro-rat-price">
                                                        <span class="ec-pro-rating">
                                                            <i class="ecicon eci-star fill"></i>
                                                            <i class="ecicon eci-star fill"></i>
                                                            <i class="ecicon eci-star fill"></i>
                                                            <i class="ecicon eci-star"></i>
                                                            <i class="ecicon eci-star"></i>
                                                        </span>
                                                        <span class="ec-price">
                                                            <span class="new-price">$58.00</span>
                                                            <span class="old-price">$65.00</span>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 ec-product-content">
                                            <div class="ec-product-inner">
                                                <div class="ec-pro-image-outer">
                                                    <div class="ec-pro-image">
                                                        <a href="{{ url ('user/productDetails') }}" class="image">
                                                            <img class="main-image"
                                                                src="{{ asset('user/assets/images/holapetz/2.jpg')}}" alt="Product" />
                                                            <img class="hover-image"
                                                                src="{{ asset('user/assets/images/holapetz/2.jpg')}}" alt="Product" />
                                                        </a>
                                                        <span class="percentage">20%</span>
                                                        <div class="ec-pro-actions">
                                                            <a class="ec-btn-group wishlist" title="Wishlist"><i class="fi-rr-heart"></i></a>
                                                            <a href="#" class="ec-btn-group quickview" data-link-action="quickview" title="Quick view"
                                                                data-bs-toggle="modal" data-bs-target="#ec_quickview_modal"><i class="fi-rr-eye"></i></a>
                                                            <a href="compare.html" class="ec-btn-group compare" title="Compare"><i class="fi fi-rr-arrows-repeat"></i></a>
                                                            <a href="javascript:void(0)"  title="Add To Cart" class="ec-btn-group add-to-cart"><i class="fi-rr-shopping-basket"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="ec-pro-content">
                                                    <a href="{{ url ('user/products') }}"><h6 class="ec-pro-stitle">Product Name</h6></a> 
                                                    <h5 class="ec-pro-title"><a href="{{ url ('user/productDetails') }}">Product Details</a></h5>
                                                    <div class="ec-pro-rat-price">
                                                        <span class="ec-pro-rating">
                                                            <i class="ecicon eci-star fill"></i>
                                                            <i class="ecicon eci-star fill"></i>
                                                            <i class="ecicon eci-star fill"></i>
                                                            <i class="ecicon eci-star"></i>
                                                            <i class="ecicon eci-star"></i>
                                                        </span>
                                                        <span class="ec-price">
                                                            <span class="new-price">$58.00</span>
                                                            <span class="old-price">$65.00</span>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- ec 3rd Product tab end -->
                                <!-- ec 3rd Product tab start -->
                                <div class="tab-pane fade" id="others">
                                    <div class="row">
                                        <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 ec-product-content">
                                            <div class="ec-product-inner">
                                                <div class="ec-pro-image-outer">
                                                    <div class="ec-pro-image">
                                                        <a href="{{ url ('user/productDetails') }}" class="image">
                                                            <img class="main-image"
                                                                src="{{ asset('user/assets/images/holapetz/img6.jpg')}}" alt="Product" />
                                                            <img class="hover-image"
                                                                src="{{ asset('user/assets/images/holapetz/img6.jpg')}}" alt="Product" />
                                                        </a>
                                                        <span class="percentage">20%</span>
                                                        <div class="ec-pro-actions">
                                                            <a class="ec-btn-group wishlist" title="Wishlist"><i class="fi-rr-heart"></i></a>
                                                            <a href="#" class="ec-btn-group quickview" data-link-action="quickview" title="Quick view"
                                                                data-bs-toggle="modal" data-bs-target="#ec_quickview_modal"><i class="fi-rr-eye"></i></a>
                                                            <a href="compare.html" class="ec-btn-group compare" title="Compare"><i class="fi fi-rr-arrows-repeat"></i></a>
                                                            <a href="javascript:void(0)"  title="Add To Cart" class="ec-btn-group add-to-cart"><i class="fi-rr-shopping-basket"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="ec-pro-content">
                                                    <a href="{{ url ('user/products') }}"><h6 class="ec-pro-stitle">Product Name</h6></a> 
                                                    <h5 class="ec-pro-title"><a href="{{ url ('user/productDetails') }}">Product Details</a></h5>
                                                    <div class="ec-pro-rat-price">
                                                        <span class="ec-pro-rating">
                                                            <i class="ecicon eci-star fill"></i>
                                                            <i class="ecicon eci-star fill"></i>
                                                            <i class="ecicon eci-star fill"></i>
                                                            <i class="ecicon eci-star"></i>
                                                            <i class="ecicon eci-star"></i>
                                                        </span>
                                                        <span class="ec-price">
                                                            <span class="new-price">$58.00</span>
                                                            <span class="old-price">$65.00</span>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 ec-product-content">
                                            <div class="ec-product-inner">
                                                <div class="ec-pro-image-outer">
                                                    <div class="ec-pro-image">
                                                        <a href="{{ url ('user/productDetails') }}" class="image">
                                                            <img class="main-image"
                                                                src="{{ asset('user/assets/images/holapetz/img1.jpg')}}" alt="Product" />
                                                            <img class="hover-image"
                                                                src="{{ asset('user/assets/images/holapetz/img1.jpg')}}" alt="Product" />
                                                        </a>
                                                        <span class="percentage">20%</span>
                                                        <div class="ec-pro-actions">
                                                            <a class="ec-btn-group wishlist" title="Wishlist"><i class="fi-rr-heart"></i></a>
                                                            <a href="#" class="ec-btn-group quickview" data-link-action="quickview" title="Quick view"
                                                                data-bs-toggle="modal" data-bs-target="#ec_quickview_modal"><i class="fi-rr-eye"></i></a>
                                                            <a href="compare.html" class="ec-btn-group compare" title="Compare"><i class="fi fi-rr-arrows-repeat"></i></a>
                                                            <a href="javascript:void(0)"  title="Add To Cart" class="ec-btn-group add-to-cart"><i class="fi-rr-shopping-basket"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="ec-pro-content">
                                                    <a href="{{ url ('user/products') }}"><h6 class="ec-pro-stitle">Product Name</h6></a> 
                                                    <h5 class="ec-pro-title"><a href="{{ url ('user/productDetails') }}">Product Details</a></h5>
                                                    <div class="ec-pro-rat-price">
                                                        <span class="ec-pro-rating">
                                                            <i class="ecicon eci-star fill"></i>
                                                            <i class="ecicon eci-star fill"></i>
                                                            <i class="ecicon eci-star fill"></i>
                                                            <i class="ecicon eci-star"></i>
                                                            <i class="ecicon eci-star"></i>
                                                        </span>
                                                        <span class="ec-price">
                                                            <span class="new-price">$58.00</span>
                                                            <span class="old-price">$65.00</span>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 ec-product-content">
                                            <div class="ec-product-inner">
                                                <div class="ec-pro-image-outer">
                                                    <div class="ec-pro-image">
                                                        <a href="{{ url ('user/productDetails') }}" class="image">
                                                            <img class="main-image"
                                                                src="{{ asset('user/assets/images/holapetz/img2.jpg')}}" alt="Product" />
                                                            <img class="hover-image"
                                                                src="{{ asset('user/assets/images/holapetz/img2.jpg')}}" alt="Product" />
                                                        </a>
                                                        <span class="percentage">20%</span>
                                                        <div class="ec-pro-actions">
                                                            <a class="ec-btn-group wishlist" title="Wishlist"><i class="fi-rr-heart"></i></a>
                                                            <a href="#" class="ec-btn-group quickview" data-link-action="quickview" title="Quick view"
                                                                data-bs-toggle="modal" data-bs-target="#ec_quickview_modal"><i class="fi-rr-eye"></i></a>
                                                            <a href="compare.html" class="ec-btn-group compare" title="Compare"><i class="fi fi-rr-arrows-repeat"></i></a>
                                                            <a href="javascript:void(0)"  title="Add To Cart" class="ec-btn-group add-to-cart"><i class="fi-rr-shopping-basket"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="ec-pro-content">
                                                    <a href="{{ url ('user/products') }}"><h6 class="ec-pro-stitle">Product Name</h6></a> 
                                                    <h5 class="ec-pro-title"><a href="{{ url ('user/productDetails') }}">Product Details</a></h5>
                                                    <div class="ec-pro-rat-price">
                                                        <span class="ec-pro-rating">
                                                            <i class="ecicon eci-star fill"></i>
                                                            <i class="ecicon eci-star fill"></i>
                                                            <i class="ecicon eci-star fill"></i>
                                                            <i class="ecicon eci-star"></i>
                                                            <i class="ecicon eci-star"></i>
                                                        </span>
                                                        <span class="ec-price">
                                                            <span class="new-price">$58.00</span>
                                                            <span class="old-price">$65.00</span>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 ec-product-content">
                                            <div class="ec-product-inner">
                                                <div class="ec-pro-image-outer">
                                                    <div class="ec-pro-image">
                                                        <a href="{{ url ('user/productDetails') }}" class="image">
                                                            <img class="main-image"
                                                                src="{{ asset('user/assets/images/holapetz/img3.jpg')}}" alt="Product" />
                                                            <img class="hover-image"
                                                                src="{{ asset('user/assets/images/holapetz/img3.jpg')}}" alt="Product" />
                                                        </a>
                                                        <span class="percentage">20%</span>
                                                        <div class="ec-pro-actions">
                                                            <a class="ec-btn-group wishlist" title="Wishlist"><i class="fi-rr-heart"></i></a>
                                                            <a href="#" class="ec-btn-group quickview" data-link-action="quickview" title="Quick view"
                                                                data-bs-toggle="modal" data-bs-target="#ec_quickview_modal"><i class="fi-rr-eye"></i></a>
                                                            <a href="compare.html" class="ec-btn-group compare" title="Compare"><i class="fi fi-rr-arrows-repeat"></i></a>
                                                            <a href="javascript:void(0)"  title="Add To Cart" class="ec-btn-group add-to-cart"><i class="fi-rr-shopping-basket"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="ec-pro-content">
                                                    <a href="{{ url ('user/products') }}"><h6 class="ec-pro-stitle">Product Name</h6></a> 
                                                    <h5 class="ec-pro-title"><a href="{{ url ('user/productDetails') }}">Product Details</a></h5>
                                                    <div class="ec-pro-rat-price">
                                                        <span class="ec-pro-rating">
                                                            <i class="ecicon eci-star fill"></i>
                                                            <i class="ecicon eci-star fill"></i>
                                                            <i class="ecicon eci-star fill"></i>
                                                            <i class="ecicon eci-star"></i>
                                                            <i class="ecicon eci-star"></i>
                                                        </span>
                                                        <span class="ec-price">
                                                            <span class="new-price">$58.00</span>
                                                            <span class="old-price">$65.00</span>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 ec-product-content">
                                            <div class="ec-product-inner">
                                                <div class="ec-pro-image-outer">
                                                    <div class="ec-pro-image">
                                                        <a href="{{ url ('user/productDetails') }}" class="image">
                                                            <img class="main-image"
                                                                src="{{ asset('user/assets/images/holapetz/img4.jpg')}}" alt="Product" />
                                                            <img class="hover-image"
                                                                src="{{ asset('user/assets/images/holapetz/img4.jpg')}}" alt="Product" />
                                                        </a>
                                                        <span class="percentage">20%</span>
                                                        <div class="ec-pro-actions">
                                                            <a class="ec-btn-group wishlist" title="Wishlist"><i class="fi-rr-heart"></i></a>
                                                            <a href="#" class="ec-btn-group quickview" data-link-action="quickview" title="Quick view"
                                                                data-bs-toggle="modal" data-bs-target="#ec_quickview_modal"><i class="fi-rr-eye"></i></a>
                                                            <a href="compare.html" class="ec-btn-group compare" title="Compare"><i class="fi fi-rr-arrows-repeat"></i></a>
                                                            <a href="javascript:void(0)"  title="Add To Cart" class="ec-btn-group add-to-cart"><i class="fi-rr-shopping-basket"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="ec-pro-content">
                                                    <a href="{{ url ('user/products') }}"><h6 class="ec-pro-stitle">Product Name</h6></a> 
                                                    <h5 class="ec-pro-title"><a href="{{ url ('user/productDetails') }}">Product Details</a></h5>
                                                    <div class="ec-pro-rat-price">
                                                        <span class="ec-pro-rating">
                                                            <i class="ecicon eci-star fill"></i>
                                                            <i class="ecicon eci-star fill"></i>
                                                            <i class="ecicon eci-star fill"></i>
                                                            <i class="ecicon eci-star"></i>
                                                            <i class="ecicon eci-star"></i>
                                                        </span>
                                                        <span class="ec-price">
                                                            <span class="new-price">$58.00</span>
                                                            <span class="old-price">$65.00</span>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 ec-product-content">
                                            <div class="ec-product-inner">
                                                <div class="ec-pro-image-outer">
                                                    <div class="ec-pro-image">
                                                        <a href="{{ url ('user/productDetails') }}" class="image">
                                                            <img class="main-image"
                                                                src="{{ asset('user/assets/images/holapetz/img5.jpg')}}" alt="Product" />
                                                            <img class="hover-image"
                                                                src="{{ asset('user/assets/images/holapetz/img5.jpg')}}" alt="Product" />
                                                        </a>
                                                        <span class="percentage">20%</span>
                                                        <div class="ec-pro-actions">
                                                            <a class="ec-btn-group wishlist" title="Wishlist"><i class="fi-rr-heart"></i></a>
                                                            <a href="#" class="ec-btn-group quickview" data-link-action="quickview" title="Quick view"
                                                                data-bs-toggle="modal" data-bs-target="#ec_quickview_modal"><i class="fi-rr-eye"></i></a>
                                                            <a href="compare.html" class="ec-btn-group compare" title="Compare"><i class="fi fi-rr-arrows-repeat"></i></a>
                                                            <a href="javascript:void(0)"  title="Add To Cart" class="ec-btn-group add-to-cart"><i class="fi-rr-shopping-basket"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="ec-pro-content">
                                                    <a href="{{ url ('user/products') }}"><h6 class="ec-pro-stitle">Product Name</h6></a> 
                                                    <h5 class="ec-pro-title"><a href="{{ url ('user/productDetails') }}">Product Details</a></h5>
                                                    <div class="ec-pro-rat-price">
                                                        <span class="ec-pro-rating">
                                                            <i class="ecicon eci-star fill"></i>
                                                            <i class="ecicon eci-star fill"></i>
                                                            <i class="ecicon eci-star fill"></i>
                                                            <i class="ecicon eci-star"></i>
                                                            <i class="ecicon eci-star"></i>
                                                        </span>
                                                        <span class="ec-price">
                                                            <span class="new-price">$58.00</span>
                                                            <span class="old-price">$65.00</span>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 ec-product-content">
                                            <div class="ec-product-inner">
                                                <div class="ec-pro-image-outer">
                                                    <div class="ec-pro-image">
                                                        <a href="{{ url ('user/productDetails') }}" class="image">
                                                            <img class="main-image"
                                                                src="{{ asset('user/assets/images/holapetz/img6.jpg')}}" alt="Product" />
                                                            <img class="hover-image"
                                                                src="{{ asset('user/assets/images/holapetz/img6.jpg')}}" alt="Product" />
                                                        </a>
                                                        <span class="percentage">20%</span>
                                                        <div class="ec-pro-actions">
                                                            <a class="ec-btn-group wishlist" title="Wishlist"><i class="fi-rr-heart"></i></a>
                                                            <a href="#" class="ec-btn-group quickview" data-link-action="quickview" title="Quick view"
                                                                data-bs-toggle="modal" data-bs-target="#ec_quickview_modal"><i class="fi-rr-eye"></i></a>
                                                            <a href="compare.html" class="ec-btn-group compare" title="Compare"><i class="fi fi-rr-arrows-repeat"></i></a>
                                                            <a href="javascript:void(0)"  title="Add To Cart" class="ec-btn-group add-to-cart"><i class="fi-rr-shopping-basket"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="ec-pro-content">
                                                    <a href="{{ url ('user/products') }}"><h6 class="ec-pro-stitle">Product Name</h6></a> 
                                                    <h5 class="ec-pro-title"><a href="{{ url ('user/productDetails') }}">Product Details</a></h5>
                                                    <div class="ec-pro-rat-price">
                                                        <span class="ec-pro-rating">
                                                            <i class="ecicon eci-star fill"></i>
                                                            <i class="ecicon eci-star fill"></i>
                                                            <i class="ecicon eci-star fill"></i>
                                                            <i class="ecicon eci-star"></i>
                                                            <i class="ecicon eci-star"></i>
                                                        </span>
                                                        <span class="ec-price">
                                                            <span class="new-price">$58.00</span>
                                                            <span class="old-price">$65.00</span>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 ec-product-content">
                                            <div class="ec-product-inner">
                                                <div class="ec-pro-image-outer">
                                                    <div class="ec-pro-image">
                                                        <a href="{{ url ('user/productDetails') }}" class="image">
                                                            <img class="main-image"
                                                                src="{{ asset('user/assets/images/holapetz/2.jpg')}}" alt="Product" />
                                                            <img class="hover-image"
                                                                src="{{ asset('user/assets/images/holapetz/2.jpg')}}" alt="Product" />
                                                        </a>
                                                        <span class="percentage">20%</span>
                                                        <div class="ec-pro-actions">
                                                            <a class="ec-btn-group wishlist" title="Wishlist"><i class="fi-rr-heart"></i></a>
                                                            <a href="#" class="ec-btn-group quickview" data-link-action="quickview" title="Quick view"
                                                                data-bs-toggle="modal" data-bs-target="#ec_quickview_modal"><i class="fi-rr-eye"></i></a>
                                                            <a href="compare.html" class="ec-btn-group compare" title="Compare"><i class="fi fi-rr-arrows-repeat"></i></a>
                                                            <a href="javascript:void(0)"  title="Add To Cart" class="ec-btn-group add-to-cart"><i class="fi-rr-shopping-basket"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="ec-pro-content">
                                                    <a href="{{ url ('user/products') }}"><h6 class="ec-pro-stitle">Product Name</h6></a> 
                                                    <h5 class="ec-pro-title"><a href="{{ url ('user/productDetails') }}">Product Details</a></h5>
                                                    <div class="ec-pro-rat-price">
                                                        <span class="ec-pro-rating">
                                                            <i class="ecicon eci-star fill"></i>
                                                            <i class="ecicon eci-star fill"></i>
                                                            <i class="ecicon eci-star fill"></i>
                                                            <i class="ecicon eci-star"></i>
                                                            <i class="ecicon eci-star"></i>
                                                        </span>
                                                        <span class="ec-price">
                                                            <span class="new-price">$58.00</span>
                                                            <span class="old-price">$65.00</span>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- ec 3rd Product tab end -->
                            </div>
                        </div>
                    </div>
                    <!-- Product tab area end -->

                </div>
            </div>
        </div>
    </section>
    <!-- ec Product tab Area End -->


		<!-- Main Slider Start -->
    <div class="ec-main-slider section section-space-pb">
        <div class="container">
            <div class="ec-slider swiper-container main-slider-nav main-slider-dot">
            <!-- Main slider -->
            <div class="swiper-wrapper">
                <div class="ec-slide-item swiper-slide d-flex banner-1">
                    <div class="container align-self-center">
                        <div class="row">
                            <div class="col-sm-12 align-self-center">
                                <div class="ec-slide-content slider-animation">
                                    <!-- <h2 class="ec-slide-stitle">Sale offer</h2> -->
                                    <!-- <h1 class="ec-slide-title">New Fashion Summer Sale</h1> -->
                                    <!-- <div class="ec-slide-desc">
                                        <p>starting at $ <b>29</b>.99</p>
                                        <a href="#" class="btn btn-lg btn-primary">Shop Now <i
                                                class="ecicon eci-angle-double-right" aria-hidden="true"></i></a>
                                    </div> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="ec-slide-item swiper-slide d-flex banner-2">
                    <div class="container align-self-center">
                        <div class="row">
                            <div class="col-sm-12 align-self-center">
                                <div class="ec-slide-content slider-animation">
                                    <!-- <h2 class="ec-slide-stitle">Trending item</h2> -->
                                    <!-- <h1 class="ec-slide-title">Women's latest fashion sale</h1> -->
                                    <!-- <div class="ec-slide-desc">
                                        <p>starting at $ <b>20</b>.00</p>
                                        <a href="#" class="btn btn-lg btn-primary">Shop Now <i
                                                class="ecicon eci-angle-double-right" aria-hidden="true"></i></a>
                                    </div> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-pagination swiper-pagination-white"></div>
            <div class="swiper-buttons">
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
            </div>
            </div>
    </div>
    </div>  
    <!-- Main Slider End -->

    <!--  Testimonial, Banner & Service Section Start -->
    <section class="section ec-ser-spe-section section-space-p">
        <div class="container" data-animation="fadeIn">
            <div class="row">
                <!-- ec Testimonial Start -->
                <div class="ec-test-section col-lg-3 col-md-6 col-sm-12 col-xs-6 sectopn-spc-mb" data-animation="slideInRight">
                    <div class="col-md-12">
                        <div class="section-title">
                            <h2 class="ec-title">Testimonial</h2>
                        </div>
                    </div>
                    <div class="ec-test-outer">
                        <ul id="ec-testimonial-slider">
                            <li class="ec-test-item">
                                <div class="ec-test-inner">
                                    <div class="ec-test-img">
                                        <img alt="testimonial" title="testimonial"
                                            src="{{ asset('user/assets/images/testimonial/1.jpg')}}" />
                                    </div>
                                    <div class="ec-test-content">
                                        <div class="ec-test-name">mark jofferson</div>
                                        <div class="ec-test-designation">- CEO & Founder Invision</div>
                                        <div class="ec-test-divider">
                                            <i class="fi-rr-quote-right"></i>
                                        </div>
                                        <div class="ec-test-desc">Lorem ipsum dolor sit amet consectetur Lorem ipsum
                                            dolor dolor sit amet.
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="ec-test-item">
                                <div class="ec-test-inner">
                                    <div class="ec-test-img">
                                        <img alt="testimonial" title="testimonial"
                                            src="{{ asset('user/assets/images/testimonial/2.jpg')}}" />
                                    </div>
                                    <div class="ec-test-content">
                                        <div class="ec-test-name">mark jofferson</div>
                                        <div class="ec-test-designation">- CEO & Founder Invision</div>
                                        <div class="ec-test-divider">
                                            <i class="fi-rr-quote-right"></i>
                                        </div>
                                        <div class="ec-test-desc">Lorem ipsum dolor sit amet consectetur Lorem ipsum
                                            dolor dolor sit amet.
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="ec-test-item">
                                <div class="ec-test-inner">
                                    <div class="ec-test-img">
                                        <img alt="testimonial" title="testimonial"
                                            src="{{ asset('user/assets/images/testimonial/3.jpg')}}" />
                                    </div>
                                    <div class="ec-test-content">
                                        <div class="ec-test-name">mark jofferson</div>
                                        <div class="ec-test-designation">- CEO & Founder Invision</div>
                                        <div class="ec-test-divider">
                                            <i class="fi-rr-quote-right"></i>
                                        </div>
                                        <div class="ec-test-desc">Lorem ipsum dolor sit amet consectetur Lorem ipsum
                                            dolor dolor sit amet.
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- ec Testimonial end -->
                <!-- ec Banner Start -->
                <div class="col-md-6 col-sm-12" data-animation="fadeIn">
                    <div class="ec-banner-inner">
                        <div class="ec-banner-block ec-banner-block-1">
                            <div class="banner-block">
                                <div class="banner-content">
                                    <div class="banner-text">
                                        <span class="ec-banner-disc">25% discount</span>
                                        <span class="ec-banner-title">Dogs & Cats</span>
                                        <span class="ec-banner-stitle">Starting @ $10</span>
                                    </div>
                                    <span class="ec-banner-btn"><a href="{{ url ('user/products') }}">Shop Now <i
                                                class="ecicon eci-angle-double-right" aria-hidden="true"></i></a></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ec Banner End -->
                <!--  Service Section Start -->
                <div class="ec-services-section col-lg-3 col-md-3 col-sm-3" data-animation="slideInLeft">
                    <div class="col-md-12">
                        <div class="section-title">
                            <h2 class="ec-title">Our Services</h2>
                        </div>
                    </div>
                    <div class="ec_ser_block">
                        <div class="ec_ser_content ec_ser_content_1 col-sm-12">
                            <div class="ec_ser_inner">
                                <div class="ec-service-image">
                                    <i class="fi fi-ts-truck-moving"></i>
                                </div>
                                <div class="ec-service-desc">
                                    <h2>Worldwide Delivery</h2>
                                    <p>For Order Over $100</p>
                                </div>
                            </div>
                        </div>
                        <div class="ec_ser_content ec_ser_content_2 col-sm-12">
                            <div class="ec_ser_inner">
                                <div class="ec-service-image">
                                    <i class="fi fi-ts-tachometer-fast"></i>
                                </div>
                                <div class="ec-service-desc">
                                    <h2>Next Day delivery</h2>
                                    <p>UK Orders Only</p>
                                </div>
                            </div>
                        </div>
                        <div class="ec_ser_content ec_ser_content_3 col-sm-12">
                            <div class="ec_ser_inner">
                                <div class="ec-service-image">
                                    <i class="fi fi-ts-circle-phone"></i>
                                </div>
                                <div class="ec-service-desc">
                                    <h2>Best Online Support</h2>
                                    <p>Hours: 8AM -11PM</p>
                                </div>
                            </div>
                        </div>
                        <div class="ec_ser_content ec_ser_content_4 col-sm-12">
                            <div class="ec_ser_inner">
                                <div class="ec-service-image">
                                    <i class="fi fi-ts-badge-percent"></i>
                                </div>
                                <div class="ec-service-desc">
                                    <h2>Return Policy</h2>
                                    <p>Easy & Free Return</p>
                                </div>
                            </div>
                        </div>
                        <div class="ec_ser_content ec_ser_content_5 col-sm-12">
                            <div class="ec_ser_inner">
                                <div class="ec-service-image">
                                    <i class="fi fi-ts-donate"></i>
                                </div>
                                <div class="ec-service-desc">
                                    <h2>30% money back</h2>
                                    <p>For Order Over $100</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ec Service End -->
            </div>
        </div>
    </section>
    <!--  End Testimonial, Banner & Service Section Start -->

    <!--  Blog Section Start -->
    <section class="section ec-blog-section section-space-p">
        <div class="container">
            <div class="row">
                <div class="ec-blog-slider owl-carousel" data-animation="fadeIn">
                    <div class="ec-blog-block">
                        <div class="ec-blog-inner">
                            <div class="ec-blog-image">
                                <a href="blogdetails.html">
                                    <img class="blog-image" src="{{ asset('user/assets/images/holapetz/blog1.png')}}"
                                        alt="Blog" />
                                </a>
                            </div>
                            <div class="ec-blog-content">
                                <div class="ec-blog-cat"><a href="blogdetails.html">Jan 18, 2022</a></div>
                                <h5 class="ec-blog-title"><a
                                        href="blogdetails.html">Blog Title</a></h5>

                                <div class="ec-blog-date">By<span>Author Name</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="ec-blog-block">
                        <div class="ec-blog-inner">
                            <div class="ec-blog-image">
                                <a href="blogdetails.html">
                                    <img class="blog-image" src="{{ asset('user/assets/images/holapetz/blog2.jpeg')}}"
                                        alt="Blog" />
                                </a>
                            </div>
                            <div class="ec-blog-content">
                                <div class="ec-blog-cat"><a href="blogdetails.html">Apr 06, 2022</a></div>
                                <h5 class="ec-blog-title"><a
                                        href="blogdetails.html">Blog Title</a></h5>

                                <div class="ec-blog-date">By<span>Author Name</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="ec-blog-block">
                        <div class="ec-blog-inner">
                            <div class="ec-blog-image">
                                <a href="blogdetails.html">
                                    <img class="blog-image" src="{{ asset('user/assets/images/holapetz/blog3.jpeg')}}"
                                        alt="Blog" />
                                </a>
                            </div>
                            <div class="ec-blog-content">
                                <div class="ec-blog-cat"><a href="blogdetails.html">Feb 10, 2022</a></div>
                                <h5 class="ec-blog-title"><a
                                        href="blogdetails.html">Blog Title</a></h5>

                                <div class="ec-blog-date">By<span>Author Name</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="ec-blog-block">
                        <div class="ec-blog-inner">
                            <div class="ec-blog-image">
                                <a href="blogdetails.html">
                                    <img class="blog-image" src="{{ asset('user/assets/images/holapetz/blog4.jpeg')}}"
                                        alt="Blog" />
                                </a>
                            </div>
                            <div class="ec-blog-content">
                                <div class="ec-blog-cat"><a href="blogdetails.html">Mar 15, 2022</a></div>
                                <h5 class="ec-blog-title"><a
                                        href="blogdetails.html">Blog Title</a></h5>

                                <div class="ec-blog-date">By<span>Author Name</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="ec-blog-block">
                        <div class="ec-blog-inner">
                            <div class="ec-blog-image">
                                <a href="blogdetails.html">
                                    <img class="blog-image" src="{{ asset('user/assets/images/holapetz/blog2.jpeg')}}"
                                        alt="Blog" />
                                </a>
                            </div>
                            <div class="ec-blog-content">
                                <div class="ec-blog-cat"><a href="blogdetails.html">Jun 02, 2022</a></div>
                                <h5 class="ec-blog-title"><a
                                        href="blogdetails.html">Blog Title</a></h5>

                                <div class="ec-blog-date">By<span>Author Name</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="ec-blog-block">
                        <div class="ec-blog-inner">
                            <div class="ec-blog-image">
                                <a href="blogdetails.html">
                                    <img class="blog-image" src="{{ asset('user/assets/images/holapetz/blog4.jpeg')}}"
                                        alt="Blog" />
                                </a>
                            </div>
                            <div class="ec-blog-content">
                                <div class="ec-blog-cat"><a href="blogdetails.html">Feb 10, 2022</a></div>
                                <h5 class="ec-blog-title"><a
                                        href="blogdetails.html">Blog Title</a></h5>

                                <div class="ec-blog-date">By<span>Author Name</span></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--  Blog Section End -->

    <!-- Ec Instagram Start -->
    <section class="section ec-instagram-section section-space-pt">
        <div class="container">
            <h2 class="d-none">Instagram</h2>
            <div class="ec-insta-wrapper" data-animation="fadeIn">
                <div class="ec-insta-outer">
                    <div class="insta-auto">
                        <!-- instagram item -->
                        <div class="ec-insta-item">
                            <div class="ec-insta-inner">
                                <a href="#" target="_blank"><img src="{{ asset('user/assets/images/instragram-image/1.jpg')}}" alt="">

                                </a>
                            </div>
                        </div>
                        <!-- instagram item -->
                        <div class="ec-insta-item">
                            <div class="ec-insta-inner">
                                <a href="#" target="_blank"><img src="{{ asset('user/assets/images/instragram-image/2.jpg')}}" alt="">

                                </a>
                            </div>
                        </div>
                        <!-- instagram item -->
                        <div class="ec-insta-item">
                            <div class="ec-insta-inner">
                                <a href="#" target="_blank"><img src="{{ asset('user/assets/images/instragram-image/3.jpg')}}" alt="">

                                </a>
                            </div>
                        </div>
                        <!-- instagram item -->
                        <div class="ec-insta-item">
                            <div class="ec-insta-inner">
                                <a href="#" target="_blank"><img src="{{ asset('user/assets/images/instragram-image/4.jpg')}}" alt="">

                                </a>
                            </div>
                        </div>
                        <!-- instagram item -->
                        <!-- instagram item -->
                        <div class="ec-insta-item">
                            <div class="ec-insta-inner">
                                <a href="#" target="_blank"><img src="{{ asset('user/assets/images/instragram-image/5.jpg')}}" alt="">

                                </a>
                            </div>
                        </div>
                        <!-- instagram item -->
                        <div class="ec-insta-item">
                            <div class="ec-insta-inner">
                                <a href="#" target="_blank"><img src="{{ asset('user/assets/images/instragram-image/6.jpg')}}" alt="">

                                </a>
                            </div>
                        </div>
                        <!-- instagram item -->
                        <div class="ec-insta-item">
                            <div class="ec-insta-inner">
                                <a href="#" target="_blank"><img src="{{ asset('user/assets/images/instragram-image/7.jpg')}}" alt="">

                                </a>
                            </div>
                        </div>
                        <!-- instagram item -->
                        <div class="ec-insta-item">
                            <div class="ec-insta-inner">
                                <a href="#" target="_blank"><img src="{{ asset('user/assets/images/instragram-image/3.jpg')}}" alt="">

                                </a>
                            </div>
                        </div>
                        <!-- instagram item -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Ec Instagram End -->

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
                                        <li class="ec-footer-link"><a href="about-us.html">About us</a></li>
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
                                    <img src="{{ asset('user/assets/images/icons/payment.png')}}" alt="">
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

    <!-- Modal -->
    <div class="modal fade" id="ec_quickview_modal" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <button type="button" class="btn-close qty_close" data-bs-dismiss="modal" aria-label="Close"></button>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-5 col-sm-12 col-xs-12">
                            <!-- Swiper -->
                            <div class="qty-product-cover">
                                <div class="qty-slide">
                                    <img class="img-responsive" src="{{ asset('user/assets/images/product-image/94_1.jpg')}}" alt="">
                                </div>
                                <div class="qty-slide">
                                    <img class="img-responsive" src="{{ asset('user/assets/images/product-image/94_2.jpg')}}" alt="">
                                </div>
                                <div class="qty-slide">
                                    <img class="img-responsive" src="{{ asset('user/assets/images/holapetz/drools2.jpg')}}" alt="">
                                </div>
                                <div class="qty-slide">
                                    <img class="img-responsive" src="{{ asset('user/assets/images/product-image/93_2.jpg')}}" alt="">
                                </div>
                                <div class="qty-slide">
                                    <img class="img-responsive" src="{{ asset('user/assets/images/product-image/94_2.jpg')}}" alt="">
                                </div>
                            </div>
                            <div class="qty-nav-thumb">
                                <div class="qty-slide">
                                    <img class="img-responsive" src="{{ asset('user/assets/images/product-image/94_1.jpg')}}" alt="">
                                </div>
                                <div class="qty-slide">
                                    <img class="img-responsive" src="{{ asset('user/assets/images/product-image/94_2.jpg')}}" alt="">
                                </div>
                                <div class="qty-slide">
                                    <img class="img-responsive" src="{{ asset('user/assets/images/holapetz/drools2.jpg')}}" alt="">
                                </div>
                                <div class="qty-slide">
                                    <img class="img-responsive" src="{{ asset('user/assets/images/product-image/93_2.jpg')}}" alt="">
                                </div>
                                <div class="qty-slide">
                                    <img class="img-responsive" src="{{ asset('user/assets/images/product-image/94_2.jpg')}}" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-7 col-sm-12 col-xs-12">
                            <div class="quickview-pro-content">
                                <h5 class="ec-quick-title"><a href="{{ url ('user/productDetails') }}">Mens Winter Leathers Jackets</a></h5>
                                <div class="ec-quickview-rating">
                                    <i class="ecicon eci-star fill"></i>
                                    <i class="ecicon eci-star fill"></i>
                                    <i class="ecicon eci-star fill"></i>
                                    <i class="ecicon eci-star fill"></i>
                                    <i class="ecicon eci-star"></i>
                                </div>

                                <div class="ec-quickview-desc">Lorem Ipsum is simply dummy text of the printing and
                                    typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever
                                    since the 1500s,</div>
                                <div class="ec-quickview-price">
                                    <span class="new-price">$199.00</span>
                                    <span class="old-price">$200.00</span>
                                </div>

                                <div class="ec-pro-variation">
                                    <div class="ec-pro-variation-inner ec-pro-variation-size">
                                        <span>Size</span>
                                        <div class="ec-pro-variation-content">
                                            <ul>
                                                <li><span>250 g</span></li>
                                                <li><span>500 g</span></li>
                                                <li><span>1 kg</span></li>
                                                <li><span>2 kg</span></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="ec-quickview-qty">
                                    <div class="qty-plus-minus">
                                        <input class="qty-input" type="text" name="ec_qtybtn" value="1" />
                                    </div>
                                    <div class="ec-quickview-cart ">
                                        <button class="btn btn-primary">Add To Cart</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal end -->

    <!-- Click To Call -->
    <div class="ec-cc-style cc-right-bottom">
        <!-- Start Floating Panel Container -->
        <div class="cc-panel">			
            <!-- Panel Content -->
            <div class="cc-header">
                <img src="{{ asset('user/assets/images/whatsapp/profile_01.jpg')}}" alt="profile image"/>
                <h2>John Mark</h2>
                <p>Tachnical Manager</p>
            </div>
            <div class="cc-body">
                <p><b>Hey there &#128515;</b></p>
                <p>Need help ? just give me a call.</p>
            </div>
            <div class="cc-footer">
                <a href="tel:+919099153528" class="cc-call-button">
                    <span>Call me</span>
                    <svg width="13px" height="10px" viewBox="0 0 13 10">
                    <path d="M1,5 L11,5"></path>
                    <polyline points="8 1 12 5 8 9"></polyline>
                    </svg>
                </a>
            </div>
        </div>
        <!--/ End Floating Panel Container -->


    </div>
    <!-- Click To Call end -->

    <!-- Newsletter Modal Start -->
    <div id="ec-popnews-bg"></div>
    <div id="ec-popnews-box">
        <div id="ec-popnews-close"><i class="ecicon eci-close"></i></div>
        <div class="row">
            <div class="col-md-7 disp-no-767">
                <img src="{{ asset('user/assets/images/holapetz/frnd.jpg')}}" alt="newsletter">
            </div>
            <div class="col-md-5">
                <div id="ec-popnews-box-content">
                    <h2>Subscribe Newsletter.</h2>
                    <p>Subscribe the ekka ecommerce to get in touch and get the future update. </p>
                    <form id="ec-popnews-form" action="#" method="post">
                        <input type="email" name="newsemail" placeholder="Email Address" required />
                        <button type="button" class="btn btn-primary" name="subscribe">Subscribe</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Newsletter Modal end -->
    
    <!-- Footer navigation panel for responsive display -->
    <div class="ec-nav-toolbar">
        <div class="container">
            <div class="ec-nav-panel">
                <div class="ec-nav-panel-icons">
                    <a href="#ec-mobile-menu" class="navbar-toggler-btn ec-header-btn ec-side-toggle"><i class="fi fi-rr-menu-burger"></i></a>
                </div>
                <div class="ec-nav-panel-icons">
                    <a href="#ec-side-cart" class="toggle-cart ec-header-btn ec-side-toggle"><i class="fi-rr-shopping-basket"></i><span
                            class="ec-cart-noti ec-header-count cart-count-lable">3</span></a>
                </div>
                <div class="ec-nav-panel-icons">
                    <a href="{{ url ('/') }}" class="ec-header-btn"><i class="fi-rr-home"></i></a>
                </div>
                <div class="ec-nav-panel-icons">
                    <a href="{{ url ('user/wishlist') }}" class="ec-header-btn"><i class="fi-rr-heart"></i><span class="ec-cart-noti">4</span></a>
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
        <img src="{{ asset('user/assets/images/holapetz/pedigree.jpg')}}" alt="payment image">
        <div class="detail">
            <p>Someone in new just bought</p>
            <h6>Pedigree Adult Wet Dog Food, Chicken & Liver Chunks</h6>
            <p>2 Minutes ago</p>
        </div>
        <a href="javascript:void(0)" class="icon-btn recent-close">×</a>
    </div>
    <!-- Recent Purchase Popup end -->

    <!-- Add to Cart successfully toast Start -->
    <div id="addtocart_toast" class="addtocart_toast">
        <div class="desc">You Have Add To Cart Successfully</div>
    </div>
    <div id="wishlist_toast" class="wishlist_toast">
        <div class="desc">You Have Add To Wishlist Successfully</div>
    </div>
    <!-- Add to Cart successfully toast end -->

    <!-- Vendor JS -->
    <script src="{{ asset('user/assets/js/vendor/jquery-3.5.1.min.js')}}"></script>
    <script src="{{ asset('user/assets/js/vendor/popper.min.js')}}"></script>
    <script src="{{ asset('user/assets/js/vendor/bootstrap.min.js')}}"></script>
    <script src="{{ asset('user/assets/js/vendor/jquery-migrate-3.3.0.min.js')}}"></script>
    <script src="{{ asset('user/assets/js/vendor/modernizr-3.11.2.min.js')}}"></script>

    <!--Plugins JS-->
    
    <script src="{{ asset('user/assets/js/plugins/jquery.sticky-sidebar.js')}}"></script>
    <script src="{{ asset('user/assets/js/plugins/swiper-bundle.min.js')}}"></script>
    <script src="{{ asset('user/assets/js/plugins/countdownTimer.min.js')}}"></script>
    <script src="{{ asset('user/assets/js/plugins/nouislider.js')}}"></script>
    <script src="{{ asset('user/assets/js/plugins/scrollup.js')}}"></script>
    <script src="{{ asset('user/assets/js/plugins/jquery.zoom.min.js')}}"></script>
    <script src="{{ asset('user/assets/js/plugins/slick.min.js')}}"></script>
    <script src="{{ asset('user/assets/js/plugins/owl.carousel.min.js')}}"></script>
    <script src="{{ asset('user/assets/js/plugins/infiniteslidev2.js')}}"></script>
    <script src="{{ asset('user/assets/js/plugins/click-to-call.js')}}"></script>

    <!-- Main Js -->
    <script src="{{ asset('user/assets/js/vendor/index.js')}}"></script>
    <script src="{{ asset('user/assets/js/demo-8.js')}}"></script>
</body>


</html>