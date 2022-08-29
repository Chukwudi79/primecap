<!DOCTYPE html>
<html lang="en" data-textdirection="ltr">
  <head>
    @include('includes.head-links')
  </head>
  <body class=" 1-column undefined  page-animated svg-wrapper" data-menu-open="hover" data-menu="">
    <!-- Preloader | Comment below code if you don't want preloader-->
    @include('includes.preloader')
    <!--/ Preloader -->
    <!-- <nav class="vertical-social">
        <ul>
            <li><a href="#"><i class="fa fa-telegram" aria-hidden="true"></i></a></li>
            <li><a href="#"><i class="fa fa-medium" aria-hidden="true"></i></a></li>
            <li><a href="#"> <i class="fa fa-twitter" aria-hidden="true"></i></a></li>
            <li><a href="#"><i class="fa fa-github" aria-hidden="true"></i></a></li>
        </ul>
    </nav> -->
    <!-- /////////////////////////////////// HEADER /////////////////////////////////////-->

    <!-- Header Start-->
    @include('includes.topnav')
    <!-- /Header End-->

    <!-- //////////////////////////////////// CONTAINER ////////////////////////////////////-->
    @yield('content')
   
    <!-- //////////////////////////////////// FOOTER ////////////////////////////////////-->
   @include('includes.footer')
   
    @include('includes.signin')


    <!-- BEGIN VENDOR JS-->
    @include('includes.footer-links')
    <!-- END PAGE LEVEL JS-->
  </body>
</html>