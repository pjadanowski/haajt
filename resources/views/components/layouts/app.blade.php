<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>{{ $title ?? config('app.name') }}</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

        <link rel="stylesheet" href="/css/assets/bootstrap.min.css">
        <link rel="stylesheet" href="/css/assets/animate.css">
        <link rel="stylesheet" href="/css/assets/custom-animation.css">
        <link rel="stylesheet" href="/css/assets/slick.css">
        <link rel="stylesheet" href="/css/assets/nice-select.css">
        <link rel="stylesheet" href="/css/assets/flaticon.css">
        <link rel="stylesheet" href="/css/assets/swiper-bundle.css">
        <link rel="stylesheet" href="/css/assets/meanmenu.css">
        <link rel="stylesheet" href="/css/assets/font-awesome-pro.css">
        <link rel="stylesheet" href="/css/assets/magnific-popup.css">
        @vite(['resources/scss/main.scss', 'resources/js/app.js'])

    </head>

<body>

   <!-- back-to-top-start  -->
   <button class="scroll-top scroll-to-target" data-target="html">
       <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
           <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 15.75l7.5-7.5 7.5 7.5" />
       </svg>
   </button>
   <!-- back-to-top-end  -->
   <div class="mouseCursor cursor-outer"></div>
   <div class="mouseCursor cursor-inner"></div>

      <x-top-navigation />

      <div id="smooth-wrapper">
         <div id="smooth-content">

            <main class="fix">
                {{ $slot ?? '' }}
            </main>

            <x-footer />
         </div>
      </div>

   <!-- JS here -->
   <script src="/js/assets/jquery.js"></script>
   <script src="/js/assets/waypoints.js"></script>
   <script src="/js/assets/bootstrap.bundle.min.js"></script>
   <script src="/js/assets/slick.min.js"></script>
   <script src="/js/assets/magnific-popup.js"></script>
   <script src="/js/assets/counterup.js"></script>
   <script src="/js/assets/wow.js"></script>
   <script src="/js/assets/nice-select.js"></script>
   <script src="/js/assets/swiper-bundle.js"></script>
   <script src="/js/assets/meanmenu.js"></script>
   <script src="/js/assets/tilt.jquery.js"></script>
   <script src="/js/assets/isotope-pkgd.js"></script>
   <script src="/js/assets/imagesloaded-pkgd.js"></script>
   <script src="/js/assets/ajax-form.js"></script>
   <script src="/js/assets/gsap.min.js"></script>
   <script src="/js/assets/ScrollTrigger.min.js"></script>
   <script src="/js/assets/ScrollSmoother.min.js"></script>
   <script src="/js/assets/split-text.min.js"></script>
   <script src="/js/assets/parallax-scroll.js"></script>
{{--   <script src="/js/softec/main.js" data-navigate-track></script>--}}


</body>
</html>
