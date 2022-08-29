@extends('layout.layouts')
@section('page-title')
    {{config('app.name')}} Landing Page
@endsection
@section('content')
<div class="content-wrapper">
        <div class="content-body">
            <main><!-- Header: 3D Animation -->
                <section class="head-area" id="head-area">
                <div id="particles-js"></div>
                <div class="head-content d-flex align-items-center">
                    <div class="container">
                        <div class="banner-wrapper">
                            <div class="row align-items-center">
                                <div class="col-lg-6 col-md-12">
                                    <div class="banner-content pt-5">
                                        <h1 class="best-template animated" data-animation="fadeInUpShorter" data-animation-delay="1.5s">{{config('app.name')}} is modern, <br class="d-none d-xl-block">clean and user freindly cryptocurrency trending platform.<br class="d-none d-xl-block"> </h1>
                                        <h3 class="d-block white animated" data-animation="fadeInUpShorter" data-animation-delay="1.6s">First decentralized marketing platform that allows <br class="d-none d-xl-block">merchants and affiliates.</h3>
                                        <div class="mt-5">
                                            <a href="#plans" class="btn btn-lg btn-gradient-purple btn-glow mr-4 mb-2 animated" data-animation="fadeInUpShorter" data-animation-delay="1.7s">Our Plans</a>
                                            <a href="#whitepaper" class="btn btn-lg btn-gradient-purple btn-glow mb-2 animated" data-animation="fadeInUpShorter" data-animation-delay="1.8s">Sign up</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-12 move-first">
                                    <div id="svg-animation">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 857 807" width="857" height="807" preserveAspectRatio="xMidYMid meet" style="width: 100%;height: 100%;">
                                            <g clip-path="url(#svg_animation_mask)">
                                                <!-- Step 1 -->
                                                

                                                <!-- base -->
                                                <g transform="matrix(1,0,0,1,-1.93,468.7)" opacity="1">
                                                    <image class="animated" data-animation="fadeInLeftShorter" data-animation-delay="1s" width="558px" height="339px" preserveAspectRatio="xMidYMid slice" xlink:href="theme-assets/images/svg/svg-animation/base.svg"></image>
                                                </g>                                    
                                                
                                                <!-- btc-base-shadow -->
                                                <g transform="matrix(1,0,0,1,60,580)" opacity="0.8">
                                                    <image class="animated" data-animation="fadeInUpShorter" data-animation-delay="2s" width="130px" height="130px" preserveAspectRatio="xMidYMid slice" xlink:href="theme-assets/images/svg/svg-animation/icon-base-shadow.svg"></image>
                                                </g>

                                                <!-- btc-base -->
                                                <g transform="matrix(1,0,0,1,60.8,560.9)" opacity="1">
                                                    <image class="animated" data-animation="fadeInUpShorter" data-animation-delay="1.9s" width="130px" height="130px" preserveAspectRatio="xMidYMid slice" xlink:href="theme-assets/images/svg/svg-animation/icon-base-btc.svg"></image>
                                                </g>

                                                <!-- eth-base-shadow -->
                                                <g transform="matrix(1,0,0,1,215,580)" opacity="0.8">
                                                    <image class="animated" data-animation="fadeInUpShorter" data-animation-delay="2s" width="90px" height="90px" preserveAspectRatio="xMidYMid slice" xlink:href="theme-assets/images/svg/svg-animation/icon-base-shadow.svg"></image>
                                                </g>

                                                <!-- eth-base -->
                                                <g transform="matrix(1,0,0,1,215,545)" opacity="1">
                                                    <image class="animated" data-animation="fadeInUpShorter" data-animation-delay="1.5s" width="90px" height="130px" preserveAspectRatio="xMidYMid slice" xlink:href="theme-assets/images/svg/svg-animation/icon-base-eth.svg"></image>
                                                </g>

                                                <!-- neo-base-shadow -->
                                                <g transform="matrix(1,0,0,1,238,670)" opacity="0.8">
                                                    <image class="animated" data-animation="fadeInUpShorter" data-animation-delay="2s" width="120px" height="120px" preserveAspectRatio="xMidYMid slice" xlink:href="theme-assets/images/svg/svg-animation/icon-base-shadow.svg"></image>
                                                </g>
                                                
                                                <!-- neo-base -->
                                                <g transform="matrix(1,0,0,1,240.8,660.9)" opacity="1">
                                                    <image class="animated" data-animation="fadeInUpShorter" data-animation-delay="1.7s" width="120px" height="120px" preserveAspectRatio="xMidYMid slice" xlink:href="theme-assets/images/svg/svg-animation/icon-base-neo.svg"></image>
                                                </g>
                                                
                                                <!-- btc -->
                                                <g transform="matrix(1,0,0,1,97,560)" opacity="1">
                                                    <image class="animated svg-elements-2" data-animation="fadeInUpShorter" data-animation-delay="2s" width="60px" height="60px" preserveAspectRatio="xMidYMid slice" xlink:href="theme-assets/images/svg/svg-animation/btc.svg"></image>
                                                </g>
                                                
                                                <!-- eth -->
                                                <g transform="matrix(1,0,0,1,230,550)" opacity="1">
                                                    <image class="animated svg-elements-1" data-animation="fadeInUpShorter" data-animation-delay="1.6s" width="60px" height="60px" preserveAspectRatio="xMidYMid slice" xlink:href="theme-assets/images/svg/svg-animation/eth.svg"></image>
                                                </g>
                                                
                                                <!-- neo -->
                                                <g transform="matrix(1,0,0,1,270 ,645)" opacity="1">
                                                    <image class="animated svg-elements-1" data-animation="fadeInUpShorter" data-animation-delay="1.8s" width="70px" height="70px" preserveAspectRatio="xMidYMid slice" xlink:href="theme-assets/images/svg/svg-animation/neo.svg"></image>
                                                </g>

                                                <!-- Step-2 -->

                                                <!-- base-shaodw -->
                                                <g transform="matrix(1,0,0,1,152.1,445.61)" opacity="0.8">
                                                    <image class="animated" data-animation="fadeInLeftShorter" data-animation-delay="1.4s" width="406px" height="274px" preserveAspectRatio="xMidYMid slice" xlink:href="theme-assets/images/svg/svg-animation/base-shadow.svg"></image>
                                                </g>
                                                <!-- base -->
                                                <g transform="matrix(1,0,0,1,151.07,301.7)" opacity="0.95">
                                                    <image class="animated" data-animation="fadeInLeftShorter" data-animation-delay="1.4s" width="558px" height="339px" preserveAspectRatio="xMidYMid slice" xlink:href="theme-assets/images/svg/svg-animation/base.svg"></image>
                                                </g>                                   

                                                <!-- logo-circle-path -->
                                                <g transform="matrix(1,0,0,1,428.5,403.5)" opacity="1">
                                                    <g opacity="1" transform="matrix(1.0196,0,0,0.9676,-49.875,71.125)">
                                                        <path class="animated" data-animation="path" data-animation-delay="1.4s" stroke-linecap="round" stroke-linejoin="miter" fill-opacity="0" stroke-miterlimit="4" stroke="rgb(99,125,221)" stroke-opacity="1" stroke-width="4" d=" M57.584999084472656,53.77799987792969 C41.18600082397461,60.93600082397461 21.354000091552734,65.125 0,65.125 C-56.362789154052734,65.125 -102.125,35.94248580932617 -102.125,0 C-102.125,-35.94248580932617 -56.362789154052734,-65.125 0,-65.125 C0,-65.125 0,-65.125 0,-65.125 C56.362789154052734,-65.125 102.125,-35.94248580932617 102.125,0 C102.125,22.325000762939453 84.47000122070312,42.04199981689453 57.584999084472656,53.77799987792969"></path>
                                                    </g>
                                                </g>

                                                <!-- neo-path -->
                                                <g transform="matrix(1,0,0,1,345,595)" opacity="1">
                                                    <g opacity="1" transform="matrix(1,0,0,1,0,0)">
                                                        <path class="animated" data-animation="path-reverse" data-animation-delay="1.4s" stroke-linecap="butt" stroke-linejoin="miter" stroke-dashoffset="20" fill="none" fill-opacity="0" stroke-miterlimit="4" stroke="rgb(99,125,221)" stroke-opacity="1" stroke-width="3" d="M0.26,101.431l65-45  c0,0,5.4-1.4,5-25l1-10c0,0-1.2-5.6,6-8l50-30c0,0,7.4-3.6,1-7l-65-38"></path>
                                                    </g>
                                                </g>
                                                
                                                <!-- eth-path -->
                                                <g transform="matrix(1,0,0,1,290,545)" opacity="1">
                                                    <g opacity="1" transform="matrix(1,0,0,1,0,0)">
                                                        <path class="animated" data-animation="path-reverse" data-animation-delay="1.4s" stroke-linecap="butt" stroke-linejoin="miter" fill-opacity="0" stroke-miterlimit="4" stroke="rgb(99,125,221)" stroke-opacity="1" stroke-width="3" d="M0.239,42.447l11-6  c0,0,5-1.2,4-25v-9c0,0-2-5.8,6-9l16-8"></path>
                                                    </g>
                                                </g>

                                                <!-- btc-path -->
                                                <g transform="matrix(1,0,0,1,175,430)" opacity="1">
                                                    <g opacity="1" transform="matrix(1,0,0,1,0,0)">
                                                        <path class="animated" data-animation="path" data-animation-delay="2.4s" stroke-linecap="butt" stroke-linejoin="miter" fill-opacity="0" stroke-miterlimit="4" stroke="rgb(99,125,221)" stroke-opacity="1" stroke-width="3" d="M101.68,24.545l-25-15  c0,0-6.14-6-14-1l-28,17c0,0-6.4,5.16-5-30v-20c0,0,0.8-5.6-4-5l-35,25c0,0-5.2,1.6-4,18v90c0,0-1.6,9.8,6,11l40,25c0,0,7,2.6,2,7  l-35,20"></path>
                                                    </g>
                                                </g>    
                                                <!-- logo-base -->
                                                <g transform="matrix(1,0,0,1,255,345)" opacity="0.5">
                                                    <image class="animated" data-animation="fadeInLeftShorter" data-animation-delay="1.4s" width="250px" height="260px" preserveAspectRatio="xMidYMid slice" xlink:href="theme-assets/images/svg/svg-animation/logo-base.svg"></image>
                                                </g>
                                                
                                                <!-- logo-shaodw -->
                                                <g transform="matrix(0.1385,0,0,0.1175,275,385)" opacity="0.65">
                                                    <image class="animated" data-animation="fadeInUpShorter" data-animation-delay="2.2s" width="1500px" height="1500px" preserveAspectRatio="xMidYMid slice" xlink:href="theme-assets/images/svg/svg-animation/logo-shadow.svg"></image>
                                                </g>
                                                <!-- logo -->
                                                <g transform="matrix(1,0,0,1,310,410)" opacity="1">
                                                    <image class="animated cic-logo" data-animation="fadeInUpShortest" data-animation-delay="2.4s"  width="130px" height="89px" preserveAspectRatio="xMidYMid slice" xlink:href="theme-assets/images/svg/svg-animation/logo.svg"></image>
                                                </g>

                                                <!-- Step 3 -->                                    
                                                <!-- base-shaodw -->
                                                <g transform="matrix(1,0,0,1,305.1,277.61)" opacity="0.8">
                                                    <image class="animated" data-animation="fadeInLeftShorter" data-animation-delay="1.8s" width="406px" height="274px" preserveAspectRatio="xMidYMid slice" xlink:href="theme-assets/images/svg/svg-animation/base-shadow.svg"></image>
                                                </g>

                                                <!-- base- -->
                                                <g transform="matrix(1,0,0,1,301.07,133.7)" opacity="0.95">
                                                    <image class="animated" data-animation="fadeInLeftShorter" data-animation-delay="1.8s" width="558px" height="339px" preserveAspectRatio="xMidYMid slice" xlink:href="theme-assets/images/svg/svg-animation/base.svg"></image>
                                                </g>
                                                
                                                <!-- car-path -->
                                                <g transform="matrix(1,0,0,1,320.5,330.5)" opacity="1">
                                                    <g opacity="1" transform="matrix(1,0,0,1,0,0)">
                                                        <path class="animated" data-animation="path" data-animation-delay="2.4s" stroke-linecap="butt" stroke-linejoin="miter" fill-opacity="0" stroke-miterlimit="4" stroke="rgb(99,125,221)" stroke-opacity="1" stroke-width="3" d="M32.208,82.43l-35-20  c0,0-6.714-2.571,1-7l26-15c0,0,4.857-1.143,8-8v-35c0,0,0.857-5.81,3-6l70-45"></path>
                                                    </g>
                                                </g>
                                                
                                                <!-- car-base-shadow -->
                                                <g transform="matrix(1,0,0,1,415,235)" opacity="0.8">
                                                    <image class="animated" data-animation="fadeInUpShorter" data-animation-delay="3s" width="100px" height="100px" preserveAspectRatio="xMidYMid slice" xlink:href="theme-assets/images/svg/svg-animation/icon-base-shadow.svg"></image>
                                                </g>
                                                <!-- car-base -->
                                                <g transform="matrix(1,0,0,1,408.62,240.74)" opacity="1">
                                                    <image class="animated" data-animation="fadeInUpShorter" data-animation-delay="2.1s" width="109px" height="68px" preserveAspectRatio="xMidYMid slice" xlink:href="theme-assets/images/svg/svg-animation/icon-base-car.svg"></image>
                                                </g>
                                                
                                                <!-- car -->
                                                <g transform="matrix(1,0,0,1,420.8799,200.27)" opacity="1">
                                                    <image class="animated svg-elements-1" data-animation="fadeInUpShorter" data-animation-delay="2.2s" width="80px" height="80px" preserveAspectRatio="xMidYMid slice" xlink:href="theme-assets/images/svg/svg-animation/car.svg"></image>
                                                </g>
                                                
                                                <!-- mobile-path -->
                                                <g transform="matrix(1,0,0,1,475,410)" opacity="1">
                                                    <g opacity="1" transform="matrix(1,0,0,1,0,0)">
                                                        <path class="animated" data-animation="path" data-animation-delay="2.4s" stroke-linecap="butt" stroke-linejoin="miter" fill-opacity="0" stroke-miterlimit="4" stroke="rgb(99,125,221)" stroke-opacity="1" stroke-width="3" d="M0.261,90.447l50,30  c0,0,4.15,5.17,14,0l12-6c0,0,6-2,5-8v-50c0,0-0.5-9,9-12l80-45c0,0,5.75-3.5,0-7l-32-16"></path>
                                                    </g>
                                                </g>
                                                
                                                <!-- mobile-base-shadow -->
                                                <g transform="matrix(1,0,0,1,565,300)" opacity="0.8">
                                                    <image class="animated" data-animation="fadeInUpShorter" data-animation-delay="3s" width="120px" height="120px" preserveAspectRatio="xMidYMid slice" xlink:href="theme-assets/images/svg/svg-animation/icon-base-shadow.svg"></image>
                                                </g>

                                                <!-- mobile-base -->
                                                <g transform="matrix(1,0,0,1,565,310)" opacity="1">
                                                    <image class="animated" data-animation="fadeInUpShorter" data-animation-delay="2.3s" width="122px" height="78px" preserveAspectRatio="xMidYMid slice" xlink:href="theme-assets/images/svg/svg-animation/icon-base-mobile.svg"></image>
                                                </g>
                                                
                                                <!-- mobile -->
                                                <g transform="matrix(1,0,0,1,600,280)" opacity="1">
                                                    <image class="animated svg-elements-1" data-animation="fadeInUpShorter" data-animation-delay="2.4s" width="51px" height="78px" preserveAspectRatio="xMidYMid slice" xlink:href="theme-assets/images/svg/svg-animation/mobile.svg"></image>
                                                </g>

                                                <!-- home-path -->
                                                <g transform="matrix(1,0,0,1,495,260)" opacity="1">
                                                    <g opacity="1" transform="matrix(1,0,0,1,0,0)">
                                                        <path class="animated" data-animation="path-reverse" data-animation-delay="1.4s" stroke-linecap="butt" stroke-linejoin="miter" fill-opacity="0" stroke-miterlimit="4" stroke="rgb(99,125,221)" stroke-opacity="1" stroke-width="3" d="M102.684,0v20  c0.666,7.167-9,11-9,11l-130,75c-11.25,4.5-9,13-9,13v50"></path>
                                                    </g>
                                                </g>                                    

                                                <!-- home-base-shadow -->
                                                <g transform="matrix(1,0,0,1,570,150)" opacity="0.8">
                                                    <image class="animated" data-animation="fadeInUpShorter" data-animation-delay="3s" width="200px" height="200px" preserveAspectRatio="xMidYMid slice" xlink:href="theme-assets/images/svg/svg-animation/icon-base-shadow.svg"></image>
                                                </g>
                                                <!-- home-base -->
                                                <g transform="matrix(1,0,0,1,570.8,140.9)" opacity="1">
                                                    <image class="animated" data-animation="fadeInUpShorter" data-animation-delay="2.4s" width="200px" height="150px" preserveAspectRatio="xMidYMid slice" xlink:href="theme-assets/images/svg/svg-animation/icon-base-home.svg"></image>
                                                </g>
                                                <!-- home -->
                                                    <g transform="matrix(1,0,0,1,600,90)" opacity="1">
                                                    <image class="animated svg-elements-2" data-animation="fadeInUpShorter" data-animation-delay="2.5s" class="svg-elements-2" width="140px" height="140px" preserveAspectRatio="xMidYMid slice" xlink:href="theme-assets/images/svg/svg-animation/home.svg"></image>
                                                </g>

                                                <!-- step-1-text -->
                                                <g transform="matrix(1,0,0,1,734,400)" opacity="0.8">
                                                    <image class="animated" data-animation="fadeInLeftShorter" data-animation-delay="2s" width="120px" height="26px" preserveAspectRatio="xMidYMid slice" xlink:href="theme-assets/images/svg/svg-animation/physical.svg"></image>
                                                </g>
                                                <!-- step-2-text -->
                                                <g transform="matrix(1,0,0,1,602,569)" opacity="0.8">
                                                    <image class="animated" data-animation="fadeInLeftShorter" data-animation-delay="1.6s" width="180px" height="24px" preserveAspectRatio="xMidYMid slice" xlink:href="theme-assets/images/svg/svg-animation/cic-blockchain.svg"></image>
                                                </g>
                                                <!-- step-3-text -->
                                                <g transform="matrix(1,0,0,1,432,745)" opacity="0.8">
                                                    <image class="animated" data-animation="fadeInLeftShorter" data-animation-delay="1.2s" width="80px" height="24px" preserveAspectRatio="xMidYMid slice" xlink:href="theme-assets/images/svg/svg-animation/digital.svg"></image>
                                                </g>
                                            </g>
                                            <defs>
                                                <clipPath id="svg_animation_mask">
                                                    <rect width="857" height="807" x="0" y="0"></rect>
                                                </clipPath>
                                            </defs>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                </section>
                <!--/ Header: 3D Animation -->
                <!-- About -->
                <section class="about section-padding" id="about">
                <div class="container">
                    <div class="heading text-center">
                        <div class="animated" data-animation="fadeInUpShorter" data-animation-delay="0.3s">
                            <h6 class="sub-title">About</h6>
                            <h2 class="title">{{config('app.name')}} Mission</h2>
                        </div>
                        <p class="content-desc animated" data-animation="fadeInUpShorter" data-animation-delay="0.4s">At {{config('app.name')}} Limited, our aim is to disrupt the cryptotrading industry by lowering the barrier
                            <br class="d-none d-xl-block">to creating algorithmic trading models.</p>
                    </div>
                    <div class="content-area">
                        <div class="row">
                            <div class="col-md-12 col-lg-6">
                                <h4 class="title animated" data-animation="fadeInUpShorter" data-animation-delay="0.5s">We built a platform for <br class="d-none d-xl-block"> The crypto trading Industry</h4>
                                <h6 class="pt-4 pb-2 animated" data-animation="fadeInUpShorter" data-animation-delay="0.6s">Cryptocurrency exchanges or digital currency exchanges (DCE) are businesses that allow customers to trade cryptocurrencies or digital currencies for other assets.</h6>
                                <p class="animated" data-animation="fadeInUpShorter" data-animation-delay="0.7s">Cryptocurrency exchanges or digital currency exchanges (DCE) are businesses that allow customers to trade cryptocurrencies or digital currencies for other assets</p>
                                <p class="animated" data-animation="fadeInUpShorter" data-animation-delay="0.8s">Creators of digital currencies are often independent of the DCEs that trade the currency.[6] In one type of system, digital currency providers (DCP), are businesses that keep and administer accounts.</p>
                            </div>
                            <div class="col-md-12 col-lg-6 animated" data-animation="fadeInUpShorter" data-animation-delay="0.7s">
                                <div class="position-relative what-is-crypto-img float-xl-right">
                                    <img class="img-fluid" src="theme-assets/images/what-is-crypto.png" alt="What is Crypto?">
                                    <div class="play-video text-center">
                                        <a href="#" class="play rounded-circle btn-gradient-purple btn-glow video-btn" data-toggle="modal" data-src="https://www.youtube.com/embed/UXAJu3zS4bU" data-target="#ico-modal"><i class="ti-control-play"></i></a>
                                        <span class="mt-2 d-none d-md-block">How it works</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                </section>
                <!--/ About -->
                
                <!-- Team -->
                <section id="plans" class="team section-padding ">
                <div class="container">
                    <div class="heading text-center">
                        <div class="animated" data-animation="fadeInUpShorter" data-animation-delay="0.3s">
                            <h6 class="sub-title">Investment</h6>
                            <h2 class="title">Plans</h2>
                        </div>
                        <p class="content-desc animated" data-animation="fadeInUpShorter" data-animation-delay="0.4s">A cryptocurrency (or crypto currency) is a digital asset designed to work as a medium
                            <br class="d-none d-xl-block">of exchange that uses cryptography to secure its transactions.</p>
                    </div>
                  
                    <div class="team-profile mt-5">
                        <div class="row mb-5">
                            @foreach ($data['plans'] as $plan)
                            <div class="col-sm-12 col-md-6 col-lg-4 mb-5 animated" data-animation="jello" data-animation-delay="0.8s">
                                <div class="d-flex team-member">
                                    <div class="team-img float-left mr-3" data-toggle="modal" data-target="#teamUser{{$plan->id}}">
                                        <!-- <img src="theme-assets/images/user-9.png" alt="team-profile-1" class="rounded-circle" width="128"> -->
                                        <img src="assets/img/{{$plan->media_url}}" alt="team-profile-1" class="rounded-circle" width="128">
                                    </div>
                                    <div class="profile align-self-center">
                                        <div class="name">{{$plan->type}}</div>
                                        <div class="role">{{$plan->percent}}</div>
                                        <div class="role">Minimum Deposit <span class=myCurrency>$</span>{{$plan->min_deposit}}</div>
                                        <div class="role">Maximum Deposit <span class=myCurrency>$</span>{{$plan->max_deposit}}</div>
                                    </div>
                                </div>
                            </div>
                                
                            @endforeach
                           
                        </div>
                    </div>
                </div>
                </section>
                <!--/ Team -->

                <!-- FAQ -->
                <section id="faq" class="faq section-padding">
                <div class="container">
                    <div class="heading text-center">
                        <div class="animated" data-animation="fadeInUpShorter" data-animation-delay="0.3s">
                            <h6 class="sub-title">question</h6>
                            <h2 class="title">FAQ</h2>
                        </div>
                        <p class="content-desc animated" data-animation="fadeInUpShorter" data-animation-delay="0.4s">Originally the term "FAQ" referred to the Frequently Asked Question itself, and the
                            <br class="d-none d-xl-block">compilation of questions and answers was known as a "FAQ list" or some similar expression.</p>
                    </div>
                    <div class="row">
                        <div class="col">
                            <nav>
                                <div class="nav nav-pills nav-underline mb-5 animated" data-animation="fadeInUpShorter" data-animation-delay="0.5s" id="myTab" role="tablist">
                                    <a href="#general" class="nav-item nav-link active" id="general-tab" data-toggle="tab" aria-controls="general" aria-selected="true" role="tab">General</a>
                                    <a href="#ico" class="nav-item nav-link" id="ico-tab" data-toggle="tab" aria-controls="ico" aria-selected="false" role="tab">Blockchain</a>
                                    <a href="#client" class="nav-item nav-link" id="client-tab" data-toggle="tab" aria-controls="client" aria-selected="false" role="tab">Client</a>
                                </div>
                            </nav>
                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade show active" id="general" role="tabpanel" aria-labelledby="general-tab">
                                    <div id="general-accordion" class="collapse-icon accordion-icon-rotate">
                                        <div class="card animated" data-animation="fadeInUpShorter" data-animation-delay="0.1s">
                                            <div class="card-header" id="headingOne">
                                                <h5 class="mb-0">
                                                <a class="btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                    <span class="icon"></span>
                                                    What does your company do?
                                                </a>
                                                </h5>
                                            </div>
                                            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#general-accordion">
                                                <div class="card-body">
                                                The main activity of {{config('app.name')}} is earning money on cryptocurrency trading. We trade Bitcoin and altcoins on the most popular exchanges such as Bitfinex, Bittrex, Poloniex and Bitstamp. Our activities also include Bitcoin & Altcoin mining. Our company is operating several mining farms that are located in Northern Ireland and Scotland.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card animated" data-animation="fadeInUpShorter" data-animation-delay="0.2s">
                                            <div class="card-header" id="headingTwo">
                                                <h5 class="mb-0">
                                                <a class="btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                    <span class="icon"></span>
                                                    What are the benefits of using Bitcoin?
                                                </a>
                                                </h5>
                                            </div>
                                            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#general-accordion">
                                                <div class="card-body">
                                                Contemporary technology development raises the popularity of using electronic currency. Bitcoins have four useful qualities: they are hard to earn, decentralized from any government control, easy to transfer, and they are secured by the blockchain. Bitcoin is a faster and cheaper way of settlements in comparison with credit cards. Payments made with Bitcoins are the final ones and the risk of fraud is nearly non-existent. As Fred Wilson put it, I compare [Bitcoin] to the Internet. The Internet was a new way to transmit data. Bitcoin's a new way to transmit money.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card animated" data-animation="fadeInUpShorter" data-animation-delay="0.3s">
                                            <div class="card-header" id="headingThree">
                                                <h5 class="mb-0">
                                                <a class="btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                    <span class="icon"></span>
                                                    What is Cryptocurrency mining?
                                                </a>
                                                </h5>
                                            </div>
                                            <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#general-accordion">
                                                <div class="card-body">
                                                Cryptocurrency mining is a process by which new coins are introduced into the existing circulating supply, as well as a process used to secure the network the coin operates on. The people who mine a coin, are known as miners. Instead of having a central authority that controls and secures the money supply, this control and security is spread out across the network that miners help to maintain.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="ico" role="tabpanel" aria-labelledby="ico-tab">
                                    <div id="ico-accordion" class="collapse-icon accordion-icon-rotate">
                                        <div class="card">
                                            <div class="card-header" id="icoHeadingOne">
                                                <h5 class="mb-0">
                                                <a class="btn-link" data-toggle="collapse" data-target="#icoCollapseOne" aria-expanded="true" aria-controls="icoCollapseOne">
                                                    <span class="icon"></span>
                                                    What is a Blockchain Technology?
                                                </a>
                                                </h5>
                                            </div>
                                            <div id="icoCollapseOne" class="collapse show" aria-labelledby="icoHeadingOne" data-parent="#ico-accordion">
                                                <div class="card-body">
                                                Blockchain technology is a growing list of records, called blocks, which are linked using cryptography. Each block contains a cryptographic hash of the previous block, a timestamp, and transaction data. Or, to put it another way, blockchain is a digital ledger in which transactions made in bitcoin or another cryptocurrency are recorded chronologically and publicly. By allowing digital information to be distributed but not copied, blockchain technology created the backbone of a new type of internet. Originally devised for the digital currency Bitcoin, the tech community is now finding other potential uses for the technology.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="card-header" id="icoHeadingTwo">
                                                <h5 class="mb-0">
                                                <a class="btn-link collapsed" data-toggle="collapse" data-target="#icoCollapseTwo" aria-expanded="false" aria-controls="icoCollapseTwo">
                                                    <span class="icon"></span>
                                                    What does confirmation of the bitcoin system mean?
                                                </a>
                                                </h5>
                                            </div>
                                            <div id="icoCollapseTwo" class="collapse" aria-labelledby="icoHeadingTwo" data-parent="#ico-accordion">
                                                <div class="card-body">
                                                All transactions are confirmed by the bitcoin system. For a deal to be valid, a certain amount of time is required, usually from 3 to 6 confirmations by the system itself. This is the automatic process of the bitcoin system. A confirmation means that there is a consensus on the network that the bitcoins, for example, you received haven't been sent to anyone else and are considered your property.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="card-header" id="icoHeadingThree">
                                                <h5 class="mb-0">
                                                <a class="btn-link collapsed" data-toggle="collapse" data-target="#icoCollapseThree" aria-expanded="false" aria-controls="icoCollapseThree">
                                                    <span class="icon"></span>
                                                    Where is your mining farms located?
                                                </a>
                                                </h5>
                                            </div>
                                            <div id="icoCollapseThree" class="collapse" aria-labelledby="icoHeadingThree" data-parent="#ico-accordion">
                                                <div class="card-body">
                                                As we have mentioned, our mining farms are located in Northern Ireland and Scotland. But for security reasons, we do not disclose the exact location of our mining farms.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                               
                                <div class="tab-pane fade" id="client" role="tabpanel" aria-labelledby="client-tab">
                                    <div id="client-accordion" class="collapse-icon accordion-icon-rotate">
                                        <div class="card">
                                            <div class="card-header" id="clientHeadingOne">
                                                <h5 class="mb-0">
                                                <a class="btn-link" data-toggle="collapse" data-target="#clientCollapseOne" aria-expanded="true" aria-controls="clientCollapseOne">
                                                    <span class="icon"></span>
                                                    Who can participate in your program?
                                                </a>
                                                </h5>
                                            </div>
                                            <div id="clientCollapseOne" class="collapse show" aria-labelledby="clientHeadingOne" data-parent="#client-accordion">
                                                <div class="card-body">
                                                Any individual or corporation from any country may open an account with us. But do remember the minimum age for registration is 18 years!
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="card-header" id="clientHeadingTwo">
                                                <h5 class="mb-0">
                                                <a class="btn-link collapsed" data-toggle="collapse" data-target="#clientCollapseTwo" aria-expanded="false" aria-controls="clientCollapseTwo">
                                                    <span class="icon"></span>
                                                    How can I earn profit on the site: {{config('app.name')}}.com?
                                                </a>
                                                </h5>
                                            </div>
                                            <div id="clientCollapseTwo" class="collapse" aria-labelledby="clientHeadingTwo" data-parent="#client-accordion">
                                                <div class="card-body">
                                                Users have the opportunity to earn profit by two ways: by opening a deposit according to the chosen investment proposal or by receiving benefits for inviting new participants.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="card-header" id="clientHeadingThree">
                                                <h5 class="mb-0">
                                                <a class="btn-link collapsed" data-toggle="collapse" data-target="#clientCollapseThree" aria-expanded="false" aria-controls="clientCollapseThree">
                                                    <span class="icon"></span>
                                                    How to become a client of the {{config('app.name')}}.com company?
                                                </a>
                                                </h5>
                                            </div>
                                            <div id="clientCollapseThree" class="collapse" aria-labelledby="clientHeadingThree" data-parent="#client-accordion">
                                                <div class="card-body">
                                                In order to become a client, you must undergo a simple registration procedure on our site. Before the registration, we recommend you to read 'Terms of use', and you will automatically accept all provisions of this document after your finishing the registration. After registering and verifying your account, you can start investing with us.
                                                </div>
                                            </div>
                                        </div>

                                        <div class="card">
                                            <div class="card-header" id="clientHeadingThree">
                                                <h5 class="mb-0">
                                                <a class="btn-link collapsed" data-toggle="collapse" data-target="#clientCollapseThree" aria-expanded="false" aria-controls="clientCollapseThree">
                                                    <span class="icon"></span>
                                                    Will any user be able to understand how the Company's website works?
                                                </a>
                                                </h5>
                                            </div>
                                            <div id="clientCollapseThree" class="collapse" aria-labelledby="clientHeadingThree" data-parent="#client-accordion">
                                                <div class="card-body">
                                                Our company has developed a comprehensive interface understandable nearly to any user. Moreover, in case of any questions, users can contact our support service. Our specialists are always ready to help.
                                                </div>
                                            </div>
                                        </div>

                                        <div class="card">
                                            <div class="card-header" id="clientHeading4">
                                                <h5 class="mb-0">
                                                <a class="btn-link collapsed" data-toggle="collapse" data-target="#clientCollapse4" aria-expanded="false" aria-controls="clientCollapse4">
                                                    <span class="icon"></span>
                                                    What payment methods do you accept?
                                                </a>
                                                </h5>
                                            </div>
                                            <div id="clientCollapse4" class="collapse" aria-labelledby="clientHeading4" data-parent="#client-accordion">
                                                <div class="card-body">
                                                Currently we accept BitCoin as a means of payment method.
                                                </div>
                                            </div>
                                        </div>

                                        <div class="card">
                                            <div class="card-header" id="clientHeading5">
                                                <h5 class="mb-0">
                                                <a class="btn-link collapsed" data-toggle="collapse" data-target="#clientCollapse5" aria-expanded="false" aria-controls="clientCollapse5">
                                                    <span class="icon"></span>
                                                    What is the basis of profit charging?
                                                </a>
                                                </h5>
                                            </div>
                                            <div id="clientCollapse5" class="collapse" aria-labelledby="clientHeading5" data-parent="#client-accordion">
                                                <div class="card-body">
                                                Profit will be charged on your personal account according to the investment plan that was chosen.
                                                </div>
                                            </div>
                                        </div>

                                        <div class="card">
                                            <div class="card-header" id="clientHeading6">
                                                <h5 class="mb-0">
                                                <a class="btn-link collapsed" data-toggle="collapse" data-target="#clientCollapse6" aria-expanded="false" aria-controls="clientCollapse6">
                                                    <span class="icon"></span>
                                                    Are there any restrictions on investing?
                                                </a>
                                                </h5>
                                            </div>
                                            <div id="clientCollapse6" class="collapse" aria-labelledby="clientHeading6" data-parent="#client-accordion">
                                                <div class="card-body">
                                                Investments are accepted in strict accordance with investment proposals. The minimum amount is <span class=myCurrency>$</span>1 and the maximum amount cannot exceed <span class=myCurrency>$</span>50,000.
                                                </div>
                                            </div>
                                        </div>

                                        <div class="card">
                                            <div class="card-header" id="clientHeading7">
                                                <h5 class="mb-0">
                                                <a class="btn-link collapsed" data-toggle="collapse" data-target="#clientCollapse7" aria-expanded="false" aria-controls="clientCollapse7">
                                                    <span class="icon"></span>
                                                    When will deposit made in bitcoin-currency go to the System?
                                                </a>
                                                </h5>
                                            </div>
                                            <div id="clientCollapse7" class="collapse" aria-labelledby="clientHeading7" data-parent="#client-accordion">
                                                <div class="card-body">
                                                Deposit in bitcoin is usually credited within 15 minutes (with 3 confirmations). Sometimes delay of up to 24 hours is possible.
                                                </div>
                                            </div>
                                        </div>

                                        <div class="card">
                                            <div class="card-header" id="clientHeading8">
                                                <h5 class="mb-0">
                                                <a class="btn-link collapsed" data-toggle="collapse" data-target="#clientCollapse8" aria-expanded="false" aria-controls="clientCollapse8">
                                                    <span class="icon"></span>
                                                    When will I see my first profit?
                                                </a>
                                                </h5>
                                            </div>
                                            <div id="clientCollapse8" class="collapse" aria-labelledby="clientHeading8" data-parent="#client-accordion">
                                                <div class="card-body">
                                                The profit will be accrued hourly or after 1 and 3 days.
                                                </div>
                                            </div>
                                        </div>

                                        <div class="card">
                                            <div class="card-header" id="clientHeading9>
                                                <h5 class="mb-0">
                                                <a class="btn-link collapsed" data-toggle="collapse" data-target="#clientCollapse9" aria-expanded="false" aria-controls="clientCollapse9">
                                                    <span class="icon"></span>
                                                    How to receive money?
                                                </a>
                                                </h5>
                                            </div>
                                            <div id="clientCollapse9" class="collapse" aria-labelledby="clientHeading9 data-parent="#client-accordion">
                                                <div class="card-body">
                                                First, create a request for withdrawal of funds to your wallet. To do that, you should log into your personal account, click on the 'Withdraw' section, fill in the form and click 'Request'. Now just wait for the money that was requested during the withdrawal at your electronic wallet.
                                                </div>
                                            </div>
                                        </div>

                                        <div class="card">
                                            <div class="card-header" id="clientHeading10">
                                                <h5 class="mb-0">
                                                <a class="btn-link collapsed" data-toggle="collapse" data-target="#clientCollapse10" aria-expanded="false" aria-controls="clientCollapse10">
                                                    <span class="icon"></span>
                                                    Once I have created a withdrawal request, how long will it take the system to process it?
                                                </a>
                                                </h5>
                                            </div>
                                            <div id="clientCollapse10" class="collapse" aria-labelledby="clientHeading10" data-parent="#client-accordion">
                                                <div class="card-body">
                                                All withdrawals are processed instant.
                                                </div>
                                            </div>
                                        </div>

                                        <div class="card">
                                            <div class="card-header" id="clientHeadingThree">
                                                <h5 class="mb-0">
                                                <a class="btn-link collapsed" data-toggle="collapse" data-target="#clientCollapseThree" aria-expanded="false" aria-controls="clientCollapseThree">
                                                    <span class="icon"></span>
                                                    What is the partnership program?
                                                </a>
                                                </h5>
                                            </div>
                                            <div id="clientCollapseThree" class="collapse" aria-labelledby="clientHeadingThree" data-parent="#client-accordion">
                                                <div class="card-body">
                                                The partner program is a set of technical solutions and financial capabilities that have been created for active investors who are ready to participate in the development of our company and receive a worthy reward for it.
                                                </div>
                                            </div>
                                        </div>

                                        <div class="card">
                                            <div class="card-header" id="clientHeading11">
                                                <h5 class="mb-0">
                                                <a class="btn-link collapsed" data-toggle="collapse" data-target="#clientCollapse11" aria-expanded="false" aria-controls="clientCollapseThree">
                                                    <span class="icon"></span>
                                                    How does the Referral Program work?
                                                </a>
                                                </h5>
                                            </div>
                                            <div id="clientCollapse11" class="collapse" aria-labelledby="clientHeading11" data-parent="#client-accordion">
                                                <div class="card-body">
                                                The point of the partnership program is to attract as many clients as possible. You provide a referral link to potential clients, and they use it to enter the site. If they register and make a deposit, you'll receive a bonus. You can get a referral link in your investor area. A referral link can be distributed personally or via the internet through forums, sites, blogs and in other ways. The only restriction of the crowncapital.ltd administration is prohibition of direct mass mailing containing referral link (so-called spam). The more clients you attract, the more they deposit, the more bonuses you will receive.
                                                </div>
                                            </div>
                                        </div>

                                        <div class="card">
                                            <div class="card-header" id="clientHeading12">
                                                <h5 class="mb-0">
                                                <a class="btn-link collapsed" data-toggle="collapse" data-target="#clientCollapse12" aria-expanded="false" aria-controls="clientCollapse12">
                                                    <span class="icon"></span>
                                                    How much money can I earn additionally by using the Referral Program?
                                                </a>
                                                </h5>
                                            </div>
                                            <div id="clientCollapse12" class="collapse" aria-labelledby="clientHeading12" data-parent="#client-accordion">
                                                <div class="card-body">
                                                As a member, you instantly receive a bonus of 4% of each deposit made by the attracted customer and 1% second level.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
                </section>
                <!--/ FAQ -->
                <!-- Contact -->
                <section id="contact" class="contact section-padding">
                <div class="container">
                    <div class="heading text-center">
                        <div class="animated" data-animation="fadeInUpShorter" data-animation-delay="0.3s">
                            <h6 class="sub-title">JOIN US</h6>
                            <h2 class="title">Contact</h2>
                        </div>
                        <p class="content-desc animated" data-animation="fadeInUpShorter" data-animation-delay="0.4s">Have questions? We’re happy to help.</p>
                    </div>
                    <div class="row">
                        <div class="col-xl-8 col-md-12 mx-auto">
                            <ul class="list-unstyled contact-info pb-5 mb-5">
                                <li class="animated" data-animation="fadeInUpShorter" data-animation-delay="0.5s">
                                    <i class="ti-headphone"></i>
                                    <span class="ml-1">{{config('app.contact')}}</span>
                                </li>
                                <li class="animated" data-animation="fadeInUpShorter" data-animation-delay="0.6s">
                                    <i class="ti-email"></i>
                                    <span class="ml-1">info{{'@'}}{{strtolower(config('app.name'))}}.com</span>
                                </li>
                                <!-- <li class="animated" data-animation="fadeInUpShorter" data-animation-delay="0.7s">
                                    <i class="ti-comment-alt"></i>
                                    <span class="ml-1">Join us on Telegram</span>
                                </li> -->
                            </ul>
                            <form action="#" method="post" accept-charset="utf-8" class="text-center">
                                <input type="text" class="form-control animated" data-animation="fadeInUpShorter" data-animation-delay="0.8s" name="name" placeholder="Your Name">
                                <input type="text" class="form-control animated" data-animation="fadeInUpShorter" data-animation-delay="0.9s" name="mail" placeholder="Your Mail">
                                <input type="text" class="form-control animated" data-animation="fadeInUpShorter" data-animation-delay="1.0s" name="message" placeholder="Your Massage">
                                <button type="submit" class="btn btn-lg btn-gradient-purple btn-glow animated" data-animation="fadeInUpShorter" data-animation-delay="1.1s">Send Message</button>
                            </form>
                        </div>
                    </div>
                </div>
                </section>
                <!--/ Contact -->
                <!-- Exchange Listing Area -->
                <section class="exchange-listing" id="exchange-listing">
                <div class="container-fluid bg-color">
                    <div class="container">
                        <div class="row listing list-unstyled">
                            <div class="col d-none d-lg-block text-center animated" data-animation="fadeInUpShorter" data-animation-delay="0.2s">
                                <img src="theme-assets/images/icon-arrow.png" alt="icon-arrow">
                                <p class="mt-1">Exchange listing
                                    <br>to be announced</p>
                            </div>
                            <div class="col text-center animated" data-animation="fadeInUpShorter" data-animation-delay="0.3s">
                                <h2>4.3/5</h2>
                                <img src="theme-assets/images/ico-track.png" alt="ico-track">
                            </div>
                            <div class="col text-center animated" data-animation="fadeInUpShorter" data-animation-delay="0.4s">
                                <h2>4.8/5</h2>
                                <img src="theme-assets/images/ico-bench.png" alt="ico-bench">
                            </div>
                            <div class="col text-center animated" data-animation="fadeInUpShorter" data-animation-delay="0.5s">
                                <h2>3.9/5</h2>
                                <img src="theme-assets/images/ico-ranker.png" alt="ico-ranker">
                            </div>
                            <div class="col text-center animated" data-animation="fadeInUpShorter" data-animation-delay="0.6s">
                                <h2>4.1/5</h2>
                                <img src="theme-assets/images/ico-bazaar.png" alt="ico-bazaar">
                            </div>
                        </div>
                    </div>
                </div>
                </section>
                <!--/ Exchange Listing Area -->
                <!-- ICO Video Modal -->
                <div class="modal ico-modal fade" id="ico-modal" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <div class="modal-body p-0">
                            <div class="embed-responsive embed-responsive-16by9">
                                <iframe class="embed-responsive-item" id="video"></iframe>
                            </div>
                        </div>
                    </div>
                </div>
                </div>
                <!-- Dev Team Modal Pop-ups -->
                <!-- Team user popup - {{$plan->id}} -->
                @foreach ($data['plans'] as $plan)
                <div class="modal team-modal fade" id="teamUser{{$plan->id}}" tabindex="-1" role="dialog" aria-labelledby="teamUser9Title" aria-hidden="true">
                    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            <div class="modal-body">
                                <div class="row p-4">
                                    <div class="col-12 col-md-5">
                                        <img class="img-fluid rounded" src="assets/img/{{$plan->media_url}}" alt="Logan S. Perez">
                                    </div>
                                    <div class="col-12 col-md-7 mt-sm-3">
                                        <h5 id="teamUser9Title">{{$plan->type}}</h5>
                                        <small class="text-muted mb-0 ">{{$plan->percent}}</small>
                                        <div class="social-profile">
                                            <a href="#" title="Linkedin" class="font-medium grey-accent2 mr-2"><i class="ti-linkedin"></i></a>
                                            <a href="#" title="Twitter" class="font-medium grey-accent2 mr-2"><i class="ti-twitter-alt"></i></a>
                                            <a href="#" title="Github" class="font-medium grey-accent2"><i class="ti-github"></i></a>
                                        </div>
                                        <div class="my-4">
                                            <p>Experienced algorithmic crypto trader and a machine learning evangelist.</p>
                                            <p>I’m focusing on the logic behind the combination of analysis tools, neural networks and genetic algorithms for optimization. Always wanted to have a trading bot with more features but never had the time to build a solution beyond basic python technical analysis tracker.</p>
                                        </div>
                                        <h6 class="mb-0"><small class="text-uppercase">Percentage</small> <small class="float-right">{{$plan->percent}}</small></h6>
                                        <div class="progress box-shadow-1 mb-4">
                                            <div class="progress-bar progress-orange" role="progressbar" style="width: {{$plan->percent}};" aria-valuenow="{{substr($plan->percent, 0, -1)}}" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
               

                </div>
                </div>
                </div>
            </main>
        </div>
    </div>
@endsection