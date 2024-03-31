<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Campus Street</title>

        <!-- Fonts -->
        <link rel="dns-prefetch" href="//fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=inter:200,300,400,500,700,800" rel="stylesheet">

        <!-- Scripts -->
        @vite(['resources/sass/app.scss', 'resources/js/app.js', 'resources/css/app.css'])

    </head>
    <body>

    <nav class="navbar bg-body-tertiary fixed-top d-block d-sm-none">
        <div class="container-fluid mobile-nav">
                <a class="navbar-brand" href="/">
                        <img src="{{asset('assets/Logo.png')}}" alt="">
                    </a>
            <i class="fa fa-search me-4"></i>
                    <i class="far fa-heart me-3"></i>
            <button class="navbar-toggler" type="button" style="border: none" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
            <i class="fa fa-bars"></i>
            </button>
            <div class="offcanvas offcanvas-end" style="width: 250px" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title" id="offcanvasNavbarLabel">
                        <img src="{{asset('assets/Logo.png')}}" alt="">
                    </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/">Home</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Account
                        </a>
                        <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="{{route('register')}}">Login</a></li>
                        <li><a class="dropdown-item" href="{{route('register')}}">Register</a></li>
                        </ul>
                    </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>


    <nav class="navbar navbar-expand-lg normal-navigation navbar-light d-none d-sm-block">
        <div class="container">
            <a class="navbar-brand" href="/">
                <img src="{{asset('assets/Logo.png')}}" alt="">
            </a>

            <!-- Search Form -->


            <form class="search-form d-flex">

            <input class="form-control me-2 search-input" type="search" placeholder="Search" aria-label="Search">
            <select class="form-select me-2" aria-label="Search Option">
                <option selected>All Categories</option>
                <option value="1">Classified</option>
                <option value="2">Real Estate</option>
                <option value="3">Cars & Vehicles</option>
            </select>
            <button class="btn mainColor" type="submit"><i class="fas fa-search"></i></button>
            </form>

            <!-- Icons -->

            <ul class="navbar-nav top-nav d-none d-sm-flex">
            <li class="nav-item">
                <a class="nav-link" href="#"><i class="far fa-heart"></i></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#"><i class="fas fa-plus-circle"></i></a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" id="userDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="far fa-user"></i>
                </a>
                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="userDropdown">
                <li><a class="dropdown-item" href="{{route('register')}}">Login</a></li>
                <li><a class="dropdown-item" href="{{route('register')}}">Register</a></li>
                </ul>
            </li>
            </ul>

        </div>
    </nav>

    <div class="nav-tab bg-body-tertiary normal-navigation d-flex justify-content-center d-none d-sm-none d-md-block">
        <ul class="nav nav-underline center-nav d-flex justify-content-center">
            <li class="nav-item dropdown">
                <a class="nav-link"  data-bs-toggle="dropdown"  href="#">Classified</a>
                     <div class="dropdown-content">
                        <div class="container">
                            <div class="row pt-2 pb-2">
                                <div class="col-md-5 category d-flex align-items-start" >
                                    <ul class="navbar-nav">
                                        <li class="nav-items"><a href="{{route('products')}}">See All Classified <i class="fa fa-angle-right float-right"></i></a></li>
                                        <li class="nav-items"><a href="{{route('products')}}">Mobile Devices <i class="fa fa-angle-right"></i></a></li>
                                        <li class="nav-items"><a href="{{route('products')}}">Cars <i class="fa fa-angle-right ms-3"></i></a></li>
                                        <li class="nav-items"><a href="{{route('products')}}">Computers & Laptops <i class="fa fa-angle-right ms-3"></i></a></li>
                                    </ul>
                                </div>
                                <div class="col-md-7 subcategory">
                                        <ul class="navbar-nav">
                                            <li class="nav-items"><a href="{{route('products')}}">See All Computers</a></li>
                                            <li class="nav-items"><a href="{{route('products')}}">Desktops </a></li>
                                            <li class="nav-items"><a href="{{route('products')}}">Laptops </a></li>
                                        </ul>
                                </div>
                            </div>
                        </div>
                    </div>
            </li>

            <li class="nav-item dropdown">
                <a class="nav-link" data-bs-toggle="dropdown" href="#">Cars & Vehicles</a>
                    <div class="dropdown-content">
                        <div class="container">
                            <div class="row pt-2 pb-2">
                                <div class="col-md-5 category d-flex align-items-start" >
                                    <ul class="navbar-nav">
                                        <li class="nav-items"><a href="{{route('products')}}">See All Classified <i class="fa fa-angle-right float-right"></i></a></li>
                                        <li class="nav-items"><a href="{{route('products')}}">Mobile Devices <i class="fa fa-angle-right"></i></a></li>
                                        <li class="nav-items"><a href="{{route('products')}}">Cars <i class="fa fa-angle-right ms-3"></i></a></li>
                                        <li class="nav-items"><a href="{{route('products')}}">Computers & Laptops <i class="fa fa-angle-right ms-3"></i></a></li>
                                    </ul>
                                </div>
                                <div class="col-md-7 subcategory">
                                        <ul class="navbar-nav">
                                            <li class="nav-items"><a href="{{route('products')}}">See All Computers</a></li>
                                            <li class="nav-items"><a href="{{route('products')}}">Desktops </a></li>
                                            <li class="nav-items"><a href="{{route('products')}}">Laptops </a></li>
                                        </ul>
                                </div>
                            </div>
                        </div>
                    </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link" data-bs-toggle="dropdown" href="#">Real Estate</a>
                    <div class="dropdown-content ">
                        <div class="container">
                            <div class="row pt-2 pb-2">
                                <div class="col-md-5 category d-flex align-items-start" >
                                    <ul class="navbar-nav">
                                        <li class="nav-items"><a href="{{route('products')}}">See All Classified <i class="fa fa-angle-right float-right"></i></a></li>
                                        <li class="nav-items"><a href="{{route('products')}}">Mobile Devices <i class="fa fa-angle-right"></i></a></li>
                                        <li class="nav-items"><a href="{{route('products')}}">Cars <i class="fa fa-angle-right ms-3"></i></a></li>
                                        <li class="nav-items"><a href="{{route('products')}}">Computers & Laptops <i class="fa fa-angle-right ms-3"></i></a></li>
                                    </ul>
                                </div>
                                <div class="col-md-7 subcategory">
                                        <ul class="navbar-nav">
                                            <li class="nav-items"><a href="{{route('products')}}">See All Computers</a></li>
                                            <li class="nav-items"><a href="{{route('products')}}">Desktops </a></li>
                                            <li class="nav-items"><a href="{{route('products')}}">Laptops </a></li>
                                        </ul>
                                </div>
                            </div>
                        </div>
                    </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link" data-bs-toggle="dropdown" href="#">Services</a>
                    <div class="dropdown-content">
                        <div class="container">
                            <div class="row pt-2 pb-2">
                                <div class="col-md-5 category d-flex align-items-start" >
                                    <ul class="navbar-nav">
                                        <li class="nav-items"><a href="{{route('products')}}">See All Classified <i class="fa fa-angle-right float-right"></i></a></li>
                                        <li class="nav-items"><a href="{{route('products')}}">Mobile Devices <i class="fa fa-angle-right"></i></a></li>
                                        <li class="nav-items"><a href="{{route('products')}}">Cars <i class="fa fa-angle-right ms-3"></i></a></li>
                                        <li class="nav-items"><a href="{{route('products')}}">Computers & Laptops <i class="fa fa-angle-right ms-3"></i></a></li>
                                    </ul>
                                </div>
                                <div class="col-md-7 subcategory">
                                        <ul class="navbar-nav">
                                            <li class="nav-items"><a href="{{route('products')}}">See All Computers</a></li>
                                            <li class="nav-items"><a href="{{route('products')}}">Desktops </a></li>
                                            <li class="nav-items"><a href="{{route('products')}}">Laptops </a></li>
                                        </ul>
                                </div>
                            </div>
                        </div>
                    </div>
            </li>
              <li class="nav-item dropdown">
                <a class="nav-link" data-bs-toggle="dropdown" href="#">Jobs</a>
                    <div class="dropdown-content">
                        <div class="container">
                            <div class="row pt-2 pb-2">
                                <div class="col-md-5 category d-flex align-items-start" >
                                    <ul class="navbar-nav">
                                        <li class="nav-items"><a href="{{route('products')}}">See All Classified <i class="fa fa-angle-right float-right"></i></a></li>
                                        <li class="nav-items"><a href="{{route('products')}}">Mobile Devices <i class="fa fa-angle-right"></i></a></li>
                                        <li class="nav-items"><a href="{{route('products')}}">Cars <i class="fa fa-angle-right ms-3"></i></a></li>
                                        <li class="nav-items"><a href="{{route('products')}}">Computers & Laptops <i class="fa fa-angle-right ms-3"></i></a></li>
                                    </ul>
                                </div>
                                <div class="col-md-7 subcategory">
                                        <ul class="navbar-nav">
                                            <li class="nav-items"><a href="{{route('products')}}">See All Computers</a></li>
                                            <li class="nav-items"><a href="{{route('products')}}">Desktops </a></li>
                                            <li class="nav-items"><a href="{{route('products')}}">Laptops </a></li>
                                        </ul>
                                </div>
                            </div>
                        </div>
                    </div>
            </li>
        </ul>
    </div>

    {{-- banner --}}
    <div id="banner">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 banner">
                    <h1 class="display-3 text-white">Are you a student?</h1>
                    <h3 class="text-white pb-4">Get deals that make your wallet smile</h3>
                    <a href="{{route('products')}}" class="mainColorAlt shop-now-btn">Shop Now</a>
                </div>
            </div>
        </div>
    </div>
    {{-- end banner --}}

    {{-- recently added --}}
    <div id="recently-added">
        <div class="container">
            <div class="row">
                <div class="col-12 content-recently mt-4 pb-4" style="background:white">
                    <div class="container">
                           <div class="top-text mt-2"><p>Recently Added</p>
                           <p class="text-right"><a href="{{route('products')}}" class="see-all">See All >>></a></p></div>
                        <div class="row recently-products d-flex flex-nowrap overflow-auto">
                            <div class="products">
                                <div class="card">
                                   <a href="{{route('products.single')}}">
                                     <img src="{{asset('products/old-white-house-garden.jpg')}}" class="card-img-top" alt="...">
                                   </a>
                                    <a href="{{route('products.single')}}" data-bs-toggle="tooltip" data-bs-placement="top" title="Add to wishlist"><i class="fa fa-heart icon"></i></a>
                                    <a href="{{route('products.single')}}" data-bs-toggle="tooltip" data-bs-placement="top" title="Share"><i class="fa fa-share icon-2"></i></a>
                                    <div class="card-body">
                                      <span class="price"><a href="{{route('products.single')}}">CAD 3,500.00</a></span>
                                      <p><a href="{{route('products.single')}}">Old white house garden</a></p>
                                    </div>
                                </div>
                            </div>

                            <div class="products">
                                <div class="card">
                                   <a href="{{route('products.single')}}">
                                     <img src="{{asset('products/old-white-house-garden.jpg')}}" class="card-img-top" alt="...">
                                   </a>
                                    <a href="{{route('products.single')}}" data-bs-toggle="tooltip" data-bs-placement="top" title="Add to wishlist"><i class="fa fa-heart icon"></i></a>
                                    <a href="{{route('products.single')}}" data-bs-toggle="tooltip" data-bs-placement="top" title="Share"><i class="fa fa-share icon-2"></i></a>
                                    <div class="card-body">
                                      <span class="price"><a href="{{route('products.single')}}">CAD 3,500.00</a></span>
                                      <p><a href="{{route('products.single')}}">Old white house garden</a></p>
                                    </div>
                                </div>
                            </div>

                            <div class="products">
                                <div class="card" >
                                   <a href="{{route('products.single')}}">
                                     <img src="{{asset('products/old-white-house-garden.jpg')}}" class="card-img-top" alt="...">
                                   </a>
                                    <a href="{{route('products.single')}}" data-bs-toggle="tooltip" data-bs-placement="top" title="Add to wishlist"><i class="fa fa-heart icon"></i></a>
                                    <a href="{{route('products.single')}}" data-bs-toggle="tooltip" data-bs-placement="top" title="Share"><i class="fa fa-share icon-2"></i></a>
                                    <div class="card-body">
                                      <span class="price"><a href="{{route('products.single')}}">CAD 3,500.00</a></span>
                                      <p><a href="{{route('products.single')}}">Old white house garden</a></p>
                                    </div>
                                </div>
                            </div>

                            <div class="products">
                                <div class="card">

                                   <a href="{{route('products.single')}}">
                                     <img src="{{asset('products/old-white-house-garden.jpg')}}" class="card-img-top" alt="...">
                                   </a>
                                    <a href="{{route('products.single')}}" data-bs-toggle="tooltip" data-bs-placement="top" title="Add to wishlist"><i class="fa fa-heart icon"></i></a>
                                    <a href="{{route('products.single')}}" data-bs-toggle="tooltip" data-bs-placement="top" title="Share"><i class="fa fa-share icon-2"></i></a>
                                    <div class="card-body">
                                      <span class="price"><a href="{{route('products.single')}}">CAD 3,500.00</a></span>
                                      <p><a href="{{route('products.single')}}">Old white house garden</a></p>
                                    </div>
                                </div>
                            </div>

                            <div class="products">
                                <div class="card">

                                   <a href="{{route('products.single')}}">
                                     <img src="{{asset('products/old-white-house-garden.jpg')}}" class="card-img-top" alt="...">
                                   </a>
                                    <a href="{{route('products.single')}}" data-bs-toggle="tooltip" data-bs-placement="top" title="Add to wishlist"><i class="fa fa-heart icon"></i></a>
                                    <a href="{{route('products.single')}}" data-bs-toggle="tooltip" data-bs-placement="top" title="Share"><i class="fa fa-share icon-2"></i></a>
                                    <div class="card-body">
                                      <span class="price"><a href="{{route('products.single')}}">CAD 3,500.00</a></span>
                                      <p><a href="{{route('products.single')}}">Old white house garden</a></p>
                                    </div>
                                </div>
                            </div>

                            <div class="products">
                                <div class="card">
                                   <a href="{{route('products.single')}}">
                                     <img src="{{asset('products/old-white-house-garden.jpg')}}" class="card-img-top" alt="...">
                                   </a>
                                    <a href="{{route('products.single')}}" data-bs-toggle="tooltip" data-bs-placement="top" title="Add to wishlist"><i class="fa fa-heart icon"></i></a>
                                    <a href="{{route('products.single')}}" data-bs-toggle="tooltip" data-bs-placement="top" title="Share"><i class="fa fa-share icon-2"></i></a>
                                    <div class="card-body">
                                      <span class="price"><a href="{{route('products.single')}}">CAD 3,500.00</a></span>
                                      <p><a href="{{route('products.single')}}">Old white house garden</a></p>
                                    </div>
                                </div>
                            </div>


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- end recently added --}}

    {{--  deals --}}
    <div id="deals" class="mt-4">
        <div class="container">
            <div class="row deal-content">
                <div class="col-md-2 d-none d-sm-block side-deal-background">
                    <h3 class="discount-first-text">Get</h3>
                    <h3 class="text-white mb-3">Discount</h3>
                    <a href="{{route('products.single')}}" class="discount-btn">Get Now</a>
                </div>
                <div class="col-md-10 ">
                    <div class="container">
                        <div class="row pt-3">
                            <div class="col-6 col-md-3 pb-3">
                                <div class="product">
                                    <div class="card">

                                    <a href="{{route('products.single')}}">
                                        <img src="{{asset('products/old-white-house-garden.jpg')}}" class="card-img-top" alt="...">
                                    </a>
                                        <a href="{{route('products.single')}}" data-bs-toggle="tooltip" data-bs-placement="top" title="Add to wishlist"><i class="fa fa-heart icon"></i></a>
                                        <a href="{{route('products.single')}}" data-bs-toggle="tooltip" data-bs-placement="top" title="Share"><i class="fa fa-share icon-2"></i></a>
                                        <div class="card-body">
                                        <span class="price"><a href="{{route('products.single')}}">CAD 3,500.00</a></span>
                                        <span class="badge float-end" style="color:#eb001b; background:#ffe3e3">-10%</span>
                                        <p><a href="{{route('products.single')}}">Old white house garden</a></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-md-3 pb-3">
                                <div class="product">
                                    <div class="card">

                                    <a href="{{route('products.single')}}">
                                        <img src="{{asset('products/old-white-house-garden.jpg')}}" class="card-img-top" alt="...">
                                    </a>
                                        <a href="{{route('products.single')}}" data-bs-toggle="tooltip" data-bs-placement="top" title="Add to wishlist"><i class="fa fa-heart icon"></i></a>
                                        <a href="{{route('products.single')}}" data-bs-toggle="tooltip" data-bs-placement="top" title="Share"><i class="fa fa-share icon-2"></i></a>
                                        <div class="card-body">
                                        <span class="price"><a href="{{route('products.single')}}">CAD 3,500.00</a></span>
                                        <span class="badge float-end"  style="color:#eb001b; background:#ffe3e3">-25%</span>
                                        <p><a href="{{route('products.single')}}">Old white house garden</a></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-md-3 pb-3">
                                <div class="product">
                                    <div class="card">

                                    <a href="{{route('products.single')}}">
                                        <img src="{{asset('products/old-white-house-garden.jpg')}}" class="card-img-top" alt="...">
                                    </a>
                                        <a href="{{route('products.single')}}" data-bs-toggle="tooltip" data-bs-placement="top" title="Add to wishlist"><i class="fa fa-heart icon"></i></a>
                                        <a href="{{route('products.single')}}" data-bs-toggle="tooltip" data-bs-placement="top" title="Share"><i class="fa fa-share icon-2"></i></a>
                                        <div class="card-body">
                                        <span class="price"><a href="{{route('products.single')}}">CAD 3,500.00</a></span>
                                         <span class="badge float-end" style="color:#eb001b; background:#ffe3e3">-10%</span>
                                        <p><a href="{{route('products.single')}}">Old white house garden</a></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-md-3 pb-3">
                                <div class="product">
                                    <div class="card">

                                    <a href="{{route('products.single')}}">
                                        <img src="{{asset('products/old-white-house-garden.jpg')}}" class="card-img-top" alt="...">
                                    </a>
                                        <a href="{{route('products.single')}}" data-bs-toggle="tooltip" data-bs-placement="top" title="Add to wishlist"><i class="fa fa-heart icon"></i></a>
                                        <a href="{{route('products.single')}}" data-bs-toggle="tooltip" data-bs-placement="top" title="Share"><i class="fa fa-share icon-2"></i></a>
                                        <div class="card-body">
                                        <span class="price"><a href="{{route('products.single')}}">CAD 3,500.00</a></span>
                                         <span class="badge float-end" style="color:#eb001b; background:#ffe3e3">-10%</span>
                                        <p><a href="{{route('products.single')}}">Old white house garden</a></p>
                                        </div>
                                    </div>
                                </div>
                            </div>



                            <div class="col-6 col-md-3 pb-3">
                                <div class="product">
                                    <div class="card">

                                    <a href="{{route('products.single')}}">
                                        <img src="{{asset('products/old-white-house-garden.jpg')}}" class="card-img-top" alt="...">
                                    </a>
                                        <a href="{{route('products.single')}}" data-bs-toggle="tooltip" data-bs-placement="top" title="Add to wishlist"><i class="fa fa-heart icon"></i></a>
                                        <a href="{{route('products.single')}}" data-bs-toggle="tooltip" data-bs-placement="top" title="Share"><i class="fa fa-share icon-2"></i></a>
                                        <div class="card-body">
                                        <span class="price"><a href="{{route('products.single')}}">CAD 3,500.00</a></span>
                                         <span class="badge float-end" style="color:#eb001b; background:#ffe3e3">-24%</span>
                                        <p><a href="{{route('products.single')}}">Old white house garden</a></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-md-3 pb-3">
                                <div class="product">
                                    <div class="card">

                                    <a href="{{route('products.single')}}">
                                        <img src="{{asset('products/old-white-house-garden.jpg')}}" class="card-img-top" alt="...">
                                    </a>
                                        <a href="{{route('products.single')}}" data-bs-toggle="tooltip" data-bs-placement="top" title="Add to wishlist"><i class="fa fa-heart icon"></i></a>
                                        <a href="{{route('products.single')}}" data-bs-toggle="tooltip" data-bs-placement="top" title="Share"><i class="fa fa-share icon-2"></i></a>
                                        <div class="card-body">
                                        <span class="price"><a href="{{route('products.single')}}">CAD 3,500.00</a></span>
                                         <span class="badge float-end" style="color:#eb001b; background:#ffe3e3">-10%</span>
                                        <p><a href="{{route('products.single')}}">Old white house garden</a></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-md-3 pb-3">
                                <div class="product">
                                    <div class="card">

                                    <a href="{{route('products.single')}}">
                                        <img src="{{asset('products/old-white-house-garden.jpg')}}" class="card-img-top" alt="...">
                                    </a>
                                        <a href="{{route('products.single')}}" data-bs-toggle="tooltip" data-bs-placement="top" title="Add to wishlist"><i class="fa fa-heart icon"></i></a>
                                        <a href="{{route('products.single')}}" data-bs-toggle="tooltip" data-bs-placement="top" title="Share"><i class="fa fa-share icon-2"></i></a>
                                        <div class="card-body">
                                        <span class="price"><a href="{{route('products.single')}}">CAD 3,500.00</a></span>
                                         <span class="badge float-end" style="color:#eb001b; background:#ffe3e3">-10%</span>
                                        <p><a href="{{route('products.single')}}">Old white house garden</a></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-md-3 pb-3">
                                <div class="product">
                                    <div class="card">

                                    <a href="{{route('products.single')}}">
                                        <img src="{{asset('products/old-white-house-garden.jpg')}}" class="card-img-top" alt="...">
                                    </a>
                                        <a href="{{route('products.single')}}" data-bs-toggle="tooltip" data-bs-placement="top" title="Add to wishlist"><i class="fa fa-heart icon"></i></a>
                                        <a href="{{route('products.single')}}" data-bs-toggle="tooltip" data-bs-placement="top" title="Share"><i class="fa fa-share icon-2"></i></a>
                                        <div class="card-body">
                                        <span class="price"><a href="{{route('products.single')}}">CAD 3,500.00</a></span>
                                         <span class="badge float-end" style="color:#eb001b; background:#ffe3e3">-15%</span>
                                        <p><a href="{{route('products.single')}}">Old white house garden</a></p>
                                        </div>
                                    </div>
                                </div>
                            </div>


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- end deals --}}


    {{-- banner2 --}}
        <div id="banner2" class="mt-4">
        <div class="container">
            <div class="row">
                <div class="col-12 banner2">
                    <h2 class="display-2">Coming Soon...</h2>
                    <h1 class="display-4 text-white">BunkMate</h1>
                    <h3 class="text-white ">Your roommate your decision...</h3>

                </div>
            </div>
        </div>
    </div>
    {{--end banner2--}}

        {{-- recently added --}}
    <div id="recently-added">
        <div class="container">
            <div class="row">
                <div class="col-12 content-recently mt-4 pb-4" style="background:white">
                    <div class="container">
                           <div class="top-text mt-2"><p>Recent Search</p></div>
                        <div class="row recently-products d-flex flex-nowrap overflow-auto">
                            <div class="products">
                                <div class="card">
                                   <a href="{{route('products.single')}}">
                                     <img src="{{asset('products/old-white-house-garden.jpg')}}" class="card-img-top" alt="...">
                                   </a>
                                    <a href="{{route('products.single')}}" data-bs-toggle="tooltip" data-bs-placement="top" title="Add to wishlist"><i class="fa fa-heart icon"></i></a>
                                    <a href="{{route('products.single')}}" data-bs-toggle="tooltip" data-bs-placement="top" title="Share"><i class="fa fa-share icon-2"></i></a>
                                    <div class="card-body">
                                      <span class="price"><a href="{{route('products.single')}}">CAD 3,500.00</a></span>
                                      <p><a href="{{route('products.single')}}">Old white house garden</a></p>
                                    </div>
                                </div>
                            </div>

                            <div class="products">
                                <div class="card">
                                   <a href="{{route('products.single')}}">
                                     <img src="{{asset('products/old-white-house-garden.jpg')}}" class="card-img-top" alt="...">
                                   </a>
                                    <a href="{{route('products.single')}}" data-bs-toggle="tooltip" data-bs-placement="top" title="Add to wishlist"><i class="fa fa-heart icon"></i></a>
                                    <a href="{{route('products.single')}}" data-bs-toggle="tooltip" data-bs-placement="top" title="Share"><i class="fa fa-share icon-2"></i></a>
                                    <div class="card-body">
                                      <span class="price"><a href="{{route('products.single')}}">CAD 3,500.00</a></span>
                                      <p><a href="{{route('products.single')}}">Old white house garden</a></p>
                                    </div>
                                </div>
                            </div>

                            <div class="products">
                                <div class="card" >
                                   <a href="{{route('products.single')}}">
                                     <img src="{{asset('products/old-white-house-garden.jpg')}}" class="card-img-top" alt="...">
                                   </a>
                                    <a href="{{route('products.single')}}" data-bs-toggle="tooltip" data-bs-placement="top" title="Add to wishlist"><i class="fa fa-heart icon"></i></a>
                                    <a href="{{route('products.single')}}" data-bs-toggle="tooltip" data-bs-placement="top" title="Share"><i class="fa fa-share icon-2"></i></a>
                                    <div class="card-body">
                                      <span class="price"><a href="{{route('products.single')}}">CAD 3,500.00</a></span>
                                      <p><a href="{{route('products.single')}}">Old white house garden</a></p>
                                    </div>
                                </div>
                            </div>

                            <div class="products">
                                <div class="card">

                                   <a href="{{route('products.single')}}">
                                     <img src="{{asset('products/old-white-house-garden.jpg')}}" class="card-img-top" alt="...">
                                   </a>
                                    <a href="{{route('products.single')}}" data-bs-toggle="tooltip" data-bs-placement="top" title="Add to wishlist"><i class="fa fa-heart icon"></i></a>
                                    <a href="{{route('products.single')}}" data-bs-toggle="tooltip" data-bs-placement="top" title="Share"><i class="fa fa-share icon-2"></i></a>
                                    <div class="card-body">
                                      <span class="price"><a href="{{route('products.single')}}">CAD 3,500.00</a></span>
                                      <p><a href="{{route('products.single')}}">Old white house garden</a></p>
                                    </div>
                                </div>
                            </div>

                            <div class="products">
                                <div class="card">

                                   <a href="{{route('products.single')}}">
                                     <img src="{{asset('products/old-white-house-garden.jpg')}}" class="card-img-top" alt="...">
                                   </a>
                                    <a href="{{route('products.single')}}" data-bs-toggle="tooltip" data-bs-placement="top" title="Add to wishlist"><i class="fa fa-heart icon"></i></a>
                                    <a href="{{route('products.single')}}" data-bs-toggle="tooltip" data-bs-placement="top" title="Share"><i class="fa fa-share icon-2"></i></a>
                                    <div class="card-body">
                                      <span class="price"><a href="{{route('products.single')}}">CAD 3,500.00</a></span>
                                      <p><a href="{{route('products.single')}}">Old white house garden</a></p>
                                    </div>
                                </div>
                            </div>

                            <div class="products">
                                <div class="card">
                                   <a href="{{route('products.single')}}">
                                     <img src="{{asset('products/old-white-house-garden.jpg')}}" class="card-img-top" alt="...">
                                   </a>
                                    <a href="{{route('products.single')}}" data-bs-toggle="tooltip" data-bs-placement="top" title="Add to wishlist"><i class="fa fa-heart icon"></i></a>
                                    <a href="{{route('products.single')}}" data-bs-toggle="tooltip" data-bs-placement="top" title="Share"><i class="fa fa-share icon-2"></i></a>
                                    <div class="card-body">
                                      <span class="price"><a href="{{route('products.single')}}">CAD 3,500.00</a></span>
                                      <p><a href="{{route('products.single')}}">Old white house garden</a></p>
                                    </div>
                                </div>
                            </div>


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- end recently added --}}

     {{-- subcribe --}}
        <div id="subscribe" class="mt-5">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 text-center subscribe">
                        <h3>Subscribe on our newsletter</h3>
                        <p>Get daily news on upcoming offers from many users all over canada</p>
                          <div class="row">
                            <div class="col-12 col-md-4 mx-auto">
                                <form class="d-flex sub">
                                    <div class="input-group me-2">
                                    <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                                    <input type="email" class="form-control" placeholder="Email">
                                    </div>
                                    <button type="submit" class="btn mainColor">Submit</button>
                                </form>
                            </div>
                          </div>
                    </div>
                </div>
            </div>
        </div>
      {{-- end subscribe --}}


     {{-- footer --}}
        <div id="footer" >
            <div class="container">
                <div class="row">
                   <div class="col-md-5">
                    <img src="{{asset('assets/Logo (1).png')}}" class="logo" alt="">
                    <p class="text-white mt-2">Street smart e-commerce, shop on the beat</p>
                    <a href="" style="text-decoration: none">   <img src="{{asset('assets/Icon-contact 6/social/facebook3.png')}}" alt=""></a>
                    <a href="" style="text-decoration: none">   <img src="{{asset('assets/Icon-contact 5/social/twitter3.png')}}" alt=""></a>
                         <a href="" style="text-decoration: none">   <img src="{{asset('assets/Icon-contact 2/social/linkedin3.png')}}" alt=""></a>
                              <a href="" style="text-decoration: none">   <img src="{{asset('assets/Icon-contact 3/social/instagram3.png')}}" alt=""></a>
                                   <a href="" style="text-decoration: none">   <img src="{{asset('assets/Icon-contact 4/social/youtube3.png')}}" alt=""></a>

                   </div>
                   <div class="col-md-2 mt-4 mt-sm-0 footer-account">
                    <h5>Account</h5>
                    <ul class="navbar-nav">
                        <li class="nav-item"><a href="{{route('login')}}">Login</a></li>
                        <li class="nav-item"><a href="{{route('register')}}">Register</a></li>
                        <li class="nav-item"><a href="">Wishlist</a></li>
                        <li class="nav-item"><a href="">Settings</a></li>
                    </ul>
                   </div>
                    <div class="col-md-2 mt-4 mt-sm-0 footer-information">
                    <h5>Information</h5>
                    <ul class="navbar-nav">
                        <li class="nav-item"><a href="">Contact Us</a></li>
                        <li class="nav-item"><a href="">FAQ</a></li>
                    </ul>
                    </div>
                    <div class="col-md-3 mt-4 mt-sm-0 footer-app">
                    <h5>Get App</h5>
                    <p>
                         <a href="" style="text-decoration: none">   <img src="{{asset('assets/Misc 2/market-button.png')}}" alt=""></a>
                    </p>
                    <p>
                         <a href="" style="text-decoration: none">   <img src="{{asset('assets/Misc/market-button.png')}}" alt=""></a>
                    </p>
                    </div>
                </div>
            </div>
        </div>
      {{-- end footer --}}

      <div id="copy-right">
        <div class="container">
            <p class="copy-right">&copy; Odinaka's Ecommerce</p>
        </div>
      </div>
    </body>
</html>
