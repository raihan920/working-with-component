<!DOCTYPE html>
<html lang="en">

<head>
   <!--
    Basic Page Needs
    ==================================================
    -->
   <meta charset="utf-8">
   <title>  Logicraft HTML5 Template</title>
   <!--
    Mobile Specific Metas
    ==================================================
    -->
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
   <!--
    CSS
    ==================================================
    -->
   <!-- Bootstrap-->
   <link rel="stylesheet" href="{{ asset("css/bootstrap.min.css") }}">
   <!-- Animation-->
   <link rel="stylesheet" href="{{ asset("css/animate.css") }}">
   <!-- Morris CSS -->
   <link rel="stylesheet" href="{{ asset("css/morris.css") }}">
   <!-- FontAwesome-->
   <link rel="stylesheet" href="{{ asset("css/font-awesome.min.css") }}">
   <!-- Icon font-->
   <link rel="stylesheet" href="{{ asset("css/icon-font.css") }}">
   <!-- Owl Carousel-->
   <link href="https://fonts.googleapis.com/css?family=Fira+Sans:400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

   <link rel="stylesheet" href="{{ asset("css/owl.carousel.min.css") }}">
   <!-- Owl Theme -->
   <link rel="stylesheet" href="{{ asset("css/owl.theme.default.min.css") }}">
   <!-- Colorbox-->
   <link rel="stylesheet" href="{{ asset("css/colorbox.css") }}">
   <!-- Template styles-->
   <link rel="stylesheet" href="{{ asset("css/style.css") }}">
   <!-- Responsive styles-->
   <link rel="stylesheet" href="{{ asset("css/responsive.css") }}">
    {{-- customized css --}}
    <link rel="stylesheet" href="{{ asset("css/custom-style.css") }}">
   <!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file.-->
   <!--if lt IE 9
    script(src='js/html5shiv.js')
    script(src='js/respond.min.js')
    -->
</head>

<body>
   <div class="body-inner">
      <div class="site-top-2">
         <header class="header nav-down" id="header-2">
            <x-mycomponents.header></x-mycomponents.header>
         </header>
         <!-- Header end-->
      </div>

      <x-mycomponents.carousel></x-mycomponents.carousel>
      <!-- Carousel end-->

      <section id="ts-features-light" class="ts-features-light">
         <div class="container">
            <div class="row feature-light-row">
               <x-mycomponents.ts-feature></x-mycomponents.ts-feature>
            </div>
         </div>
      </section>
      <!-- ts-feature light end -->

      <section  class="ts-service-area service-area-pattern" id="ts-service-area" >
        <div class="service-area-bg">
         <div class="container">
           <x-mycomponents.why-logi></x-mycomponents.why-logi>
         </div>
         <!-- Container end-->
        </div>
      </section>
      <!-- Service Section end-->

      <section class="ts-services solid-bg" id="ts-services">
         <div class="container">
            <x-mycomponents.our-services></x-mycomponents.our-services>
         </div>
         <!-- Container end-->
      </section>
      <!-- Service end-->

      <section class="testimonial-area" id="testimonial-area">
         <div class="container">
            <div class="row">
               <x-mycomponents.quote-area></x-mycomponents.quote-area>
            </div>
            <!-- Content row end-->
         </div>
         <!-- Container end-->
      </section>
      <!-- Quote area end-->

      <section id="ts-facts-area" class="ts-facts-area-bg bg-overlay">
         <div class="container">
            <div class="row ">
               <x-mycomponents.facts-area></x-mycomponents.facts-area>
            </div>
            <!-- Row end-->
         </div>
         <!-- Container 2 end-->
      </section>
      <!-- Facts Area End -->

      <section class="news" id="news">
         <div class="container">
            <x-mycomponents.news></x-mycomponents.news>
         </div>
         <!-- Container end-->
      </section>
      <!-- News end-->

      <section class="quote-area solid-bg" id="quote-area">
         <div class="container">
            <x-mycomponents.quote></x-mycomponents.quote>
         </div>
         <!-- Container end-->
      </section>
      <!-- Quote area end-->


      <section class="clients-area " id="clients-area">
         <div class="container">
            <x-mycomponents.partners></x-mycomponents.partners>
            <!-- Content row end-->
         </div>
         <!-- Container end-->
      </section>
      <!-- Partners end-->

      <section id="call-to-action" class="call-to-action-bg ">
         <div class="container">
            <x-mycomponents.call-to-action></x-mycomponents.call-to-action>
         </div>
      </section>
      <!-- Call to action end -->

      <!-- Footer start-->
      <footer class="footer" id="footer">
        <x-mycomponents.footer></x-mycomponents.footer>
      </footer>
      <!-- Footer end-->

      <div class="back-to-top affix" id="back-to-top" data-spy="affix" data-offset-top="10">
         <button class="btn btn-primary" title="Back to Top"><i class="fa fa-angle-double-up"></i>
            <!-- icon end-->
         </button>
         <!-- button end-->
      </div>
      <!-- End Back to Top-->

      <!--
      Javascript Files
      ==================================================
      -->
      <!-- initialize jQuery Library-->
      <script type="text/javascript" src="{{ asset('js/jquery.js') }}"></script>


      <!-- Bootstrap jQuery-->
      <script type="text/javascript" src="{{ asset('js/bootstrap.min.js') }}"></script>
      <!-- Owl Carousel-->
      <script type="text/javascript" src="{{ asset('js/owl.carousel.min.js') }}"></script>
      <!-- Counter-->
      <script type="text/javascript" src="{{ asset('js/jquery.counterup.min.js') }}"></script>
      <!-- Waypoints-->
      <script type="text/javascript" src="{{ asset('js/waypoints.min.js') }}"></script>
      <!-- Color box-->
      <script type="text/javascript" src="{{ asset('js/jquery.colorbox.js') }}"></script>


      <!-- Template custom-->
      <script type="text/javascript" src="{{ asset('js/custom.js') }}"></script>
   </div>
   <!--Body Inner end-->
</body>

</html>
