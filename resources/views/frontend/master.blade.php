<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Mexon</title>
  <link rel="stylesheet" href="{{url('/frontend/css/style.css')}}">
  <link href="{{url('/frontend/css/slider-min.css')}}" rel="stylesheet">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="{{url('/frontend/css/animate.min.css')}}" />
  <!-- For Dropdown -->
  <link href="{{url('/frontend/css/bootstrap.min.css')}}" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">


  <!-- Favicon -->
  <link rel="apple-touch-icon" sizes="120x120" href="{{url('/frontend/image/favicon_io/apple-touch-icon.png')}}">
  <link rel="icon" type="image/png" sizes="32x32" href="{{url('/frontend/image/favicon_io/favicon-32x32.png')}}">
  <link rel="icon" type="image/png" sizes="16x16" href="{{url('/frontend/image/favicon_io/favicon-16x16.png')}}">
  <link rel="manifest" href="{{url('/frontend/image/favicon_io/site.webmanifest')}}">
  <link rel="mask-icon" href="{{url('/frontend/image/favicon_io/safari-pinned-tab.svg')}}" color="#5bbad5">
  <meta name="msapplication-TileColor" content="#da532c">
  <meta name="theme-color" content="#ffffff">

  <!-- Promotional Item -->
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.css"/>
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.css"/>
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.min.css" />
  <!-- Promotional Item End -->




  
</head>

<body>
  @include('frontend.fixed.header')
  <main>
    @yield('content')

  </main>
  <!-- Footer Start -->

  @include('frontend.fixed.footer')
  <!-- Footer End -->

  <!-- JavaScript For Toggle Menu -->
  <script>
    var navLinks = document.getElementById("navLinks");

    function showMenu() {
      navLinks.style.right = "0";

    }

    function hideMenu() {
      navLinks.style.right = "-200px";
    }
  </script>

  <!-- Slider -->
  <script src="{{url('/js/slider.js')}}"></script>

  <!-- For Scrolling -->
  <script src="{{url('/js/wow.min.js')}}"></script>
  <script>
    new WOW().init();
  </script>
  <!-- For Dropdown -->
  <script src="{{url('/js/bundle.min.js')}}" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  <script>
    let dropdowns = document.querySelectorAll('.dropdown-toggle')
    dropdowns.forEach((dd) => {
      dd.addEventListener('click', function(e) {
        var el = this.nextElementSibling
        el.style.display = el.style.display === 'block' ? 'none' : 'block'
      })
    })
  </script>

<!-- Promotional item start  -->

  <script type="text/javascript" src="https://code.jquery.com/jquery-1.11.0.min.js"></script>
  <script type="text/javascript" src="https://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"></script>
  <!-- Promotional item end  -->
  <script type="text/javascript">
    $(document).ready(function() {
      $(".demo").slick({
         infinite: true,
         slidesToShow: 3,
         slidesToScroll: 3,
         dots: true,
         autoplay: true,
         autoplaySpeed: 2000,
         arrows: true,
         prevArrow: '<button type="button" class="slick-prev"></button>',
        nextArrow: '<button type="button" class="slick-next"></button>',
        centerMode: true,
      });
    });
  </script>

</body>

</html>