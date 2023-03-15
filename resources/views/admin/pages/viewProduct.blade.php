<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <title>HOLAPETZ - Product Details</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('admin/assets/img/logo/metaImg.jpg')}}"/>
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="https://fonts.googleapis.com/css?family=Quicksand:400,500,600,700&amp;display=swap" rel="stylesheet">
    <link href="{{ asset('admin/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('admin/assets/css/plugins.css')}}" rel="stylesheet" type="text/css" />
    <!-- END GLOBAL MANDATORY STYLES -->
    
    <!--  BEGIN CUSTOM STYLE FILE  -->
    <link href="{{ asset('admin/assets/css/users/user-profile.css')}}" rel="stylesheet" type="text/css" />
    <!--  END CUSTOM STYLE FILE  -->

    <!-- BEGIN PAGE LEVEL STYLES -->
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/assets/css/forms/theme-checkbox-radio.css')}}">
    <link href="{{ asset('admin/assetsplugins/lightbox/photoswipe.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('admin/assetsplugins/lightbox/default-skin/default-skin.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('admin/assetsplugins/lightbox/custom-photswipe.css')}}" rel="stylesheet" type="text/css" />
    <!-- END PAGE LEVEL STYLES --> 
</head>
<body class="sidebar-noneoverflow">
    
    <!--  BEGIN NAVBAR  -->
    <div class="header-container">
        <header class="header navbar navbar-expand-sm">

            <a href="javascript:void(0);" class="sidebarCollapse" data-placement="bottom"><svg
                    xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    class="feather feather-menu">
                    <line x1="3" y1="12" x2="21" y2="12"></line>
                    <line x1="3" y1="6" x2="21" y2="6"></line>
                    <line x1="3" y1="18" x2="21" y2="18"></line>
                </svg></a>

            <div class="nav-logo align-self-center">
                <a class="navbar-brand" href="{{ url('/admin') }}"> <img alt="logo" src="assets/img/logo/holalogo1.png"> <span
                        class="navbar-brand-name"></span></a>
            </div>

            <ul class="navbar-item flex-row mr-auto">
                <li class="nav-item align-self-center search-animated">
                </li>
            </ul>

            <ul class="navbar-item flex-row nav-dropdowns">

                <li class="nav-item dropdown user-profile-dropdown order-lg-0 order-1">
                    <a href="javascript:void(0);" class="nav-link dropdown-toggle user" id="user-profile-dropdown"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <div class="media">
                            <div class="media-body align-self-center">
                                <h6> Holapetz</h6>
                                <p>Admin</p>
                            </div>
                            <img src="assets/img/logo/metaImg.jpg" class="img-fluid" alt="admin-profile">
                            <span class="badge badge-success"></span>
                        </div>
                    </a>

                    <div class="dropdown-menu position-absolute" aria-labelledby="userProfileDropdown">
                        <div class="dropdown-item">
                            <a href="#">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="feather feather-user">
                                    <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                                    <circle cx="12" cy="7" r="4"></circle>
                                </svg> <span> Profile</span>
                            </a>
                        </div>
                        <div class="dropdown-item">
                            <a href="#">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="feather feather-inbox">
                                    <polyline points="22 12 16 12 14 15 10 15 8 12 2 12"></polyline>
                                    <path
                                        d="M5.45 5.11L2 12v6a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2v-6l-3.45-6.89A2 2 0 0 0 16.76 4H7.24a2 2 0 0 0-1.79 1.11z">
                                    </path>
                                </svg> <span> Inbox</span>
                            </a>
                        </div>
                        <!-- <div class="dropdown-item">
                            <a href="auth_lockscreen.html">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-lock"><rect x="3" y="11" width="18" height="11" rx="2" ry="2"></rect><path d="M7 11V7a5 5 0 0 1 10 0v4"></path></svg> <span>Lock Screen</span>
                            </a>
                        </div> -->
                        <div class="dropdown-item">
                            <a href="auth_login.html">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="feather feather-log-out">
                                    <path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path>
                                    <polyline points="16 17 21 12 16 7"></polyline>
                                    <line x1="21" y1="12" x2="9" y2="12"></line>
                                </svg> <span>Log Out</span>
                            </a>
                        </div>
                    </div>
                </li>
            </ul>
        </header>
    </div>
    <!--  END NAVBAR  -->

    <!--  BEGIN MAIN CONTAINER  -->
    <div class="main-container" id="container">

        <div class="overlay"></div>
        <div class="search-overlay"></div>

        <!--  BEGIN TOPBAR  -->
        <div class="topbar-nav header navbar" role="banner">
            <nav id="topbar">
                <ul class="navbar-nav theme-brand flex-row  text-center">
                    <li class="nav-item theme-logo">
                        <a href="{{ url('/admin') }}">
                            <img src="{{ asset('admin/assets/img/bekal/logo dark.png')}}"class="navbar-logo" alt="logo">
                        </a>
                    </li>
                    <li class="nav-item theme-text">
                        <a href="{{ url('/admin') }}" class="nav-link"> Bekal International </a>
                    </li>
                </ul>

                <ul class="list-unstyled menu-categories" id="topAccordion">

                    <li class="menu single-menu ">
                        <a href="{{ url('/admin') }}">
                            <div class="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="feather feather-box">
                                    <path
                                        d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z">
                                    </path>
                                    <polyline points="3.27 6.96 12 12.01 20.73 6.96"></polyline>
                                    <line x1="12" y1="22.08" x2="12" y2="12"></line>
                                </svg>
                                <span>Dashboard</span>
                            </div>
                            <!-- <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down"><polyline points="6 9 12 15 18 9"></polyline></svg> -->
                        </a>
                    </li>
            <li class="menu single-menu">
                <a href="{{ url('admin/userManagement') }}">
                    <div class="">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="feather feather-users">
                            <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                            <circle cx="9" cy="7" r="4"></circle>
                            <path d="M23 21v-2a4 4 0 0 0-3-3.87"></path>
                            <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                        </svg>
                        <span>User Manager</span>
                    </div>
                    <!-- <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down"><polyline points="6 9 12 15 18 9"></polyline></svg> -->
                </a>
            </li>
                <li class="menu single-menu active">
    
                        <a href="{{ url('admin/vendorManagement') }}">
                            <div class="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-shop"
                                    viewBox="0 0 16 16">
                                    <path
                                        d="M2.97 1.35A1 1 0 0 1 3.73 1h8.54a1 1 0 0 1 .76.35l2.609 3.044A1.5 1.5 0 0 1 16 5.37v.255a2.375 2.375 0 0 1-4.25 1.458A2.371 2.371 0 0 1 9.875 8 2.37 2.37 0 0 1 8 7.083 2.37 2.37 0 0 1 6.125 8a2.37 2.37 0 0 1-1.875-.917A2.375 2.375 0 0 1 0 5.625V5.37a1.5 1.5 0 0 1 .361-.976l2.61-3.045zm1.78 4.275a1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0 1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0 1.375 1.375 0 1 0 2.75 0V5.37a.5.5 0 0 0-.12-.325L12.27 2H3.73L1.12 5.045A.5.5 0 0 0 1 5.37v.255a1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0zM1.5 8.5A.5.5 0 0 1 2 9v6h1v-5a1 1 0 0 1 1-1h3a1 1 0 0 1 1 1v5h6V9a.5.5 0 0 1 1 0v6h.5a.5.5 0 0 1 0 1H.5a.5.5 0 0 1 0-1H1V9a.5.5 0 0 1 .5-.5zM4 15h3v-5H4v5zm5-5a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1h-2a1 1 0 0 1-1-1v-3zm3 0h-2v3h2v-3z" />
                                     
                                </svg>
                                <span>Vendor Manager</span>
                            </div>
                            <!-- <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down"><polyline points="6 9 12 15 18 9"></polyline></svg> -->
                        </a>
                    </li>
               
                    <li class="menu single-menu">
                        <a href="{{ url('admin/enquiry') }}">
                            <div class="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="feather feather-message-square">
                                    <path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"></path>
                                </svg>
                                <span>Enquiry</span>
                            </div>
                            <!-- <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down"><polyline points="6 9 12 15 18 9"></polyline></svg> -->
                        </a>
                    </li>

                    
                </ul>
            </nav>
        </div>
        <!--  END TOPBAR  -->

        <!--  BEGIN CONTENT AREA  -->
        <div id="content" class="main-content">
            <div class="layout-px-spacing">
                <div class="layout-px-spacing">
                <div class="page-header">
                    <nav class="breadcrumb-one" aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0);">Pages</a></li>
                            <li class="breadcrumb-item" aria-current="page"><a href="viewVendors.html">Vendor Profile</a></li>
                            <li class="breadcrumb-item active" aria-current="page"><a href="viewVendors.html"> Product Details</a></li>
                        </ol>
                    </nav>
                </div>

                <div class="row layout-spacing">

                    <!-- Content -->
                    <div class="col-xl-12 col-lg-6 col-md-7 col-sm-12 layout-top-spacing">

                        <div class="bio layout-spacing ">
                            <div class="widget-content widget-content-area">
                                <h3 class="">Product Details</h3>
                                <div class="bio-skill-box">

                                    <div class="row">
                                        
                                        <div class="col-3 col-xl-3 col-lg-4 mb-xl-5 mb-5 "> 
                                            <div class="d-flex b-skills">
                                                <div class="">
                                                    <h5>Category Name</h5>
                                                    <h6>Name</h6>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-3 col-xl-3 col-lg-4 mb-xl-5 mb-5 "> 
                                            <div class="d-flex b-skills">
                                                <div class="">
                                                    <h5>Product Name</h5>
                                                    <h6>Name</h6>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-3 col-xl-3 col-lg-4 mb-xl-5 mb-5 "> 
                                            <div class="d-flex b-skills">
                                                <div class="">
                                                    <h5>Product Code</h5>
                                                    <h6>Code</h6>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-3 col-xl-3 col-lg-4 mb-xl-5 mb-5 "> 
                                            <div class="d-flex b-skills">
                                                <div class="">
                                                    <h5>Product Price</h5>
                                                    <h6>₹</h6>
                                                </div>
                                            </div>
                                        </div>


                                        <div class="col-12 col-xl-12 col-lg-12 mb-xl-0 mb-0 ">
                                            
                                            <div class="d-flex b-skills">
                                                <div>
                                                </div>
                                                <div class="">
                                                    <h5>Product Description</h5>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do et dolore magna aliqua.</p>
                                                </div>
                                            </div>

                                        </div>

                                        <div class="widget-content widget-content-area">
                                           <h3 class="">Product Image</h3>
                                
                                                <div class="row">
                                        
                                                    <div id="demo-test-gallery" class="demo-gallery" data-pswp-uid="1">

                                                        <a class="img-1" href="assets/img/lightbox-1.jpg')}}" data-size="1600x1068" data-med="assets/img/lightbox-1.jpg" data-med-size="1024x683" data-author="Samuel Rohl">
                                                            <img src="{{ asset('admin/assets/img/lightbox-1.jpg')}}" alt="image-gallery">
                                                            <figure>This is dummy caption. It has been placed here solely to demonstrate the look and feel of finished, typeset text.</figure>
                                                        </a>

                                                        <a class="img-2" href="assets/img/lightbox-8.jpg" data-size="1600x1068" data-med="assets/img/lightbox-8.jpeg" data-med-size="1024x683" data-author="Samuel Rohl">
                                                            <img src="{{ asset('admin/assets/img/lightbox-8.jpg')}}" alt="image-gallery">
                                                            <figure>This is dummy caption. It has been placed here solely to demonstrate the look and feel of finished, typeset text.</figure>
                                                        </a>

                                                        <a class="img-3" href="assets/img/lightbox-3.jpg" data-size="1600x1067" data-med="assets/img/lightbox-3.jpeg" data-med-size="1024x683" data-author="Michael Hull">
                                                            <img src="{{ asset('admin/assets/img/lightbox-3.jpg')}}" alt="image-gallery">
                                                            <figure>Dummy caption. It's Greek to you. Unless, of course, you're Greek, in which case, it really makes no sense.</figure>
                                                        </a>
                                    
                                                    </div>
                                        
                                                </div>

                                        </div>

                                        <button type="submit" class="btn btn-success mt-3" style="margin-left: 10px;">Approve</button>
                                        
                                        <button type="submit" class="btn btn-danger mt-3" style="margin-left: 10px;">Reject</button>

                                    </div>

                                </div>

                            </div>                                
                        </div>

                    </div>

                </div>
                </div>
        <div class="footer-wrapper">
                <div class="footer-section f-section-1">
                    <p class="">© 2023 Holapetz, Designed By <a target="_blank" href="https://thedaxads.com">DAXADS</a></p>
                </div>
                <div class="footer-section f-section-2">
                    <p class="">Coded with <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-heart"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path></svg></p>
                </div>
            </div>
        </div>
        <!--  END CONTENT AREA  -->

    </div>
  </div>
    <!-- END MAIN CONTAINER -->
    
    <!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
    <script src="{{ asset('admin/assets/js/libs/jquery-3.1.1.min.js')}}"></script>
    <script src="{{ asset('admin/bootstrap/js/popper.min.js')}}"></script>
    <script src="{{ asset('admin/bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{ asset('admin/assets/plugins/perfect-scrollbar/perfect-scrollbar.min.js')}}"></script>
    <script src="{{ asset('admin/assets/js/app.js')}}"></script>
    
    <script>')}}"
        $(document).ready(function() {
            App.init();
        });
    </script>
    <script src="assets/js/custom.js')}}"></script>
    <!-- END GLOBAL MANDATORY SCRIPTS -->

    <!-- BEGIN PAGE LEVEL SCRIPTS -->
    <script src="{{ asset('admin/assets/plugins/lightbox/photoswipe.min.js')}}"></script>
    <script src="{{ asset('admin/assets/plugins/lightbox/photoswipe-ui-default.min.js')}}"></script>
    <script src="{{ asset('admin/assets/plugins/lightbox/custom-photswipe.js')}}"></script>
    <!-- END PAGE LEVEL SCRIPTS -->
</body>

</html>