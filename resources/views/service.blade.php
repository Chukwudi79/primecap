@extends('layout.layout')
@section('title') services @endsection
@section('content')
    <!-- Navigation -->

    <nav class="navbar navbar-expand-lg navbar-dark bg-light top-nav">
            <div class="container">
                <a class="navbar-brand" href="{{ route('home') }}">
                    <img src="images/RenasentLogo.jpg" alt="logo"  style="width: 150px; height: 100px"/>
                </a>
                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse"
                        data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false"
                        aria-label="Toggle navigation">
                    <span class="fas fa-bars"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('home') }}">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('about') }}">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="{{ route('service') }}">Services</a>
                        </li>
                        
                        {{--
                        
                        <li class="nav-item dropdown">
                            <a class="nav-link" href="#" id="navbarDropdownBlog" data-toggle="dropdown" aria-haspopup="true"
                               aria-expanded="false">Online Banking <i class="fas fa-sort-down"></i></a>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownBlog">
                                <a class="dropdown-item" href="faq.html">Personal Banking</a>
                                <a class="dropdown-item" href="404.html">Business Banking</a>
                                <a class="dropdown-item" href="pricing.html">Digital Banking</a>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link" href="#" id="navbarDropdownPortfolio" data-toggle="dropdown"
                               aria-haspopup="true" aria-expanded="false">Portfolio <i class="fas fa-sort-down"></i></a>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownPortfolio">
                                <a class="dropdown-item" href="portfolio-3-col.html">3 Column Portfolio</a>
                                <a class="dropdown-item" href="portfolio-4-col.html">4 Column Portfolio</a>
                                <a class="dropdown-item" href="portfolio-item.html">Single Portfolio Item</a>
                            </div>
                        </li>
                        
                        --}}
                        <li class="nav-item dropdown">
                            <a class="nav-link" href="#" id="navbarDropdownBlog" data-toggle="dropdown" aria-haspopup="true"
                               aria-expanded="false">Online Banking<i class="fas fa-sort-down"></i></a>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownBlog">
                                <a class="dropdown-item" href="{{ route('userprofile') }}">Personal Account</a>
                                <a class="dropdown-item" href="{{ route('userprofile') }}">Business Account</a>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('contact') }}">Contact</a>
                        </li>
<li>

                        @if(auth()->id() == 1)
                            <li class="nav-item">
                                <a class="nav-link" href="{{route( 'dashboard') }}">Dashboard</a>
                            </li>

                            @endif
</li>

                            <li>
                        @if(auth()->id() == 1)
                                <li class="nav-item">
                                    <a class="nav-link" href="{{route( 'signup') }}">Register New User</a>
                                </li>
                                      @endif
                                      @auth
                                   <li class="nav-item">
                                    <a class="nav-link" href="{{route( 'logout') }}">Logout</a>
                                </li>
                             @endauth
                            </li>
                    </ul>
                </div>
            </div>
        </nav>

    <!-- full Title -->
    <div class="full-title">
        <div class="container">
            <!-- Page Heading/Breadcrumbs -->
            <h1 class="mt-4 mb-3">Services</h1>
            <div class="breadcrumb-main">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="index.html">Home</a>
                    </li>
                    <li class="breadcrumb-item active">Services</li>
                </ol>
            </div>
        </div>
    </div>

    <!-- Page Content -->
    <div class="container">
        <!-- Image Header -->
        <img class="img-fluid rounded mb-4" src="images/services-big.jpg" alt="" />
    </div>
    <div class="services-bar">
        <div class="container">
            <h1 class="py-4">Our Best Services </h1>
            <!-- Services Section -->
            <div class="row">
                <div class="col-lg-4 mb-4">
                    <div class="card h-100">
                        <div class="card-img">
                            <img class="img-fluid" src="images/services-img-01.jpg" alt="" />
                        </div>
                        <div class="card-body">
                            <h4 class="card-header"> Analytics </h4>
                            <p class="card-text">Renasent is using the automated process of translating large volumes of unstructured text into quantitative data to uncover insights, trends, and patterns.
                                Combined with data visualization tools, this technique enables which us to understand the story behind the numbers and make better decisions.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mb-4">
                    <div class="card h-100">
                        <div class="card-img">
                            <img class="img-fluid" src="images/services-img-02.jpg" alt="" />
                        </div>
                        <div class="card-body">
                            <h4 class="card-header"> Applications </h4>
                            <p class="card-text">Online applications are available for many of our products and services.
                                And for checking accounts and most credit cards, you'll get an instant decision within 2-3 minutes. 
                                We use the latest security technology to ensure your personal and financial information remains private and safe.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mb-4">
                    <div class="card h-100">
                        <div class="card-img">
                            <img class="img-fluid" src="images/services-img-03.jpg" alt="" />
                        </div>
                        <div class="card-body">
                            <h4 class="card-header"> Business Process </h4>
                            <p class="card-text">WE Build & Scale Future-Ready Operating Models With Our Human + Machine Intelligence. 
                                Drive Innovation, Create Better Experiences & Enable Smarter, Faster Business Decisions.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mb-4">
                    <div class="card h-100">
                        <div class="card-img">
                            <img class="img-fluid" src="images/services-img-04.jpg" alt="" />
                        </div>
                        <div class="card-body">
                            <h4 class="card-header"> Consulting </h4>
                            <p class="card-text">Renasent Consulting’s tested, proven, effective and efficient process connects banks and credit unions with vendors 
                                who can deliver on promises and be a foundation for your growth. ICI Consulting supports financial institutions with better 
                                core vendor decisions that lead to efficiency, ease, loyalty and real control over costs.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mb-4">
                    <div class="card h-100">
                        <div class="card-img">
                            <img class="img-fluid" src="images/services-img-05.jpg" alt="" />
                        </div>
                        <div class="card-body">
                            <h4 class="card-header"> Infrastructure </h4>
                            <p class="card-text">A wide range of structures have been used by Renasent to  provide global financial assistance to deploy infrastructure
                                    projects. These include national development banks, infrastructure funds and even sovereign wealth funds.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mb-4">
                    <div class="card h-100">
                        <div class="card-img">
                            <img class="img-fluid" src="images/services-img-06.jpg" alt="" />
                        </div>
                        <div class="card-body">
                            <h4 class="card-header"> Product Engineering </h4>
                            <p class="card-text">We adopted a modern technology and mathematical techniques to solve financial problems. </p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.row -->
        </div>
    </div>

    <div class="container">
        <!-- Our Customers -->
        <div class="customers-box">
            <h2>Our Customers</h2>
            <div class="row">
                <div class="col-lg-12">
                    <div id="customers-slider" class="owl-carousel">
                        <div class="mb-4">
                            <img class="img-fluid" src="images/logo_01.png" alt="" />
                        </div>
                        <div class="mb-4">
                            <img class="img-fluid" src="images/logo_02.png" alt="" />
                        </div>
                        <div class="mb-4">
                            <img class="img-fluid" src="images/logo_03.png" alt="" />
                        </div>
                        <div class="mb-4">
                            <img class="img-fluid" src="images/logo_04.png" alt="" />
                        </div>
                        <div class="mb-4">
                            <img class="img-fluid" src="images/logo_05.png" alt="" />
                        </div>
                        <div class="mb-4">
                            <img class="img-fluid" src="images/logo_06.png" alt="" />
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.row -->
        </div>
    </div>
    <!-- /.container -->


@endsection
