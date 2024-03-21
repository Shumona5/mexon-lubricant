@extends('frontend.master')
@section('content')

 <!-- TagLine start -->

 <marquee behavior="scroll" direction="left" style="background-color:black; color: #fff;height: 30px;">
      {{$settings->tag_line}}
    </marquee>
    <!-- TagLine End -->


    <!-- Video Start -->
    <section>
      <video loop autoplay muted plays-inline class="video" style="background-size: contain; width: 100%;">
        <source src="{{url('/frontend/image/Mexon Web Top Banner.mp4')}}" type="video/mp4">
      </video>
    </section>

    <!-- Why Mexon Lubricants -->
    <section class="mexon">
      <h1> <b style="font-family: 'Times New Roman', Times, serif;">Why Mexon Lubricants </b></h1>
      <p> There are lot of products in the market. You may do not know what is best for you. However, we guarantee that
        our product, packaging quality and handling of materials until it reaches to your hand are rather safe and best
        value for money. Therefore, we can offer the following advantages than others.
      </p>
      <div class="row">

        <div class="left-side">
          <p>
            » European standard product <br>
            » Heavy duty intact product packaging <br>
            » Competitive price <br>
            » Safe product handing <br>
            » Eco-friendly, less greenhouse effect <br>
            » Maximize oil drain interval <br>
            » Afters sales services </p>
        </div>
        <div class="right-side">
          <img src="{{url('frontend/image/why_mexon.jpg')}}" style="width: 350px; height: 250px;">
        </div>

      </div>

      <div class="row">
        <div class="mexon-col">
          <h6> <b> Quality Assurance</b> </h6>
          <p> We test our engine oils rigorously to ensure they meet and surpass industry requirements. To guarantee
            that your clients receive the best lubricants for their cars and gear, we place a premium on quality.
          </p>
        </div>
        <div class="mexon-col">
          <h6> Diverse Product Portfolio </h6>
          <p> We provide an extensive inventory of engine oils that are appropriate for a variety of applications,
            regardless of whether you work in the automotive or industrial sectors. Select from a variety of formulas
            and viscosities to satisfy certain needs.
          </p>
        </div>
        <div class="mexon-col">
          <h6> Reliable Supply Chain </h6>
          <p> We recognise the value of a reliable supply chain as your valued partner. Smooth operations and satisfied
            customers are made possible by our effective distribution network, which guarantees that distributors and
            retailers receive their orders on time.
          </p>
        </div>

      </div>

    </section>


    <!-- Slider Start -->
    <!-- Carousel -->
    <div id="demo" class="carousel slide" data-bs-ride="carousel">

      <!-- Indicators/dots -->
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
        <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
        <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
        <button type="button" data-bs-target="#demo" data-bs-slide-to="3"></button>
      </div>

      <!-- The slideshow/carousel -->
      <div class="carousel-inner">
        @foreach($sliders as $slider)
        <div class="carousel-item active">
          <img src="{{$slider->image}}" alt="Los Angeles" class="d-block"
            style="width:100%;height: 90%;">
        </div>
        @endforeach
        <!-- <div class="carousel-item">
          <img src="{{url('/frontend/image/Mexon-Home-Slide-2.jpg')}}" alt="Chicago" class="d-block"
            style="width:100%;height: 90%;">
        </div> -->
        <!-- <div class="carousel-item">
          <img src="{{url('/frontend/image/Mexon-Home-Slide-3.jpg')}}" alt="New York" class="d-block"
            style="width:100%;height: 90%;">
        </div> -->
        <!-- <div class="carousel-item">
          <img src="{{url('/frontend/image/Mexon-Home-Slide-4.jpg')}}" alt="New York" class="d-block"
            style="width:100%;height: 0%;">
        </div> -->
      </div>

      <!-- Left and right controls/icons -->
      <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
        <span class="carousel-control-prev-icon"></span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
        <span class="carousel-control-next-icon"></span>
      </button>
    </div>

    <!-- Slider End -->

    <!-- Our Service -->
    <section class="service" id="service">
      <h1>Our Service</h1>
      <p> {{$settings->about_us}} </p>
    </section>

    <!-- End Service -->

    <section class="cta">
      <img src="{{url('/frontend/image/home2.jpg')}}" alt="" style="width: 100%">

    </section>

    <section class="distribution">
      <img src="{{url('/frontend/image/p_distribution.jpg')}}" alt="" style="width: 100%;">

    </section>

    <section class="products-index">
      <img class="product_section_image" src="{{url('/frontend/image/products.jpg')}}" alt="products">

    </section>

    <section>
      <div class="engine-oil">
        <h1> Automotive Engine Oil </h1>
        <p> Mexon lubricants contain various substances that consist of base oils enhanced with various additives,
          particularly anti-wear additives, detergents, dispersal, and, for multi-grade oils, viscosity index improves.
          Which helps internal combustion engines. The main function of motor oil is to reduce friction and wear on
          moving parts and to clean the engine from sludge (one of the functions of dispersal) and varnish (detergents).
          It also neutralizes acids that originate from fuel and from oxidation of the lubricant (detergents), Mexon
          lubricants contain the perfect viscosity which improves sealing of piston rings, and cools the engine by
          carrying heat away from moving parts.</p>
        <br>
        <h1>Industrial Engine Oil</h1>
        <p> As a industrial machinery which is much bigger, stronger and heaver which goes upto high level of heat and
          keeping that in consider Mexon Lubricants gives extra concentration on industrial engine oil so the lubricant
          can maintain its viscosity and its quality on highest Level.</p>
      </div>
    </section>
    <!-- Multiple Image Slide Start-->
    <section class="auto-slide">
      <h1 style="color: darkblue; font-weight: 800;"> Promotional Item</h1>
    <div class="image-slide" style="background-color: rgb(245, 241, 236);">
      <div class="slide-track">
        <div class="slide-img">
          <img src="{{url('/frontend/image/motorbike6.png')}}" alt="" >
        </div>
        <div class="slide-img">
          <img src="{{url('/frontend/image/motorbike2.png')}}" alt="" >
        </div>
        <div class="slide-img">
          <img src="{{url('/frontend/image/motorbike3.png')}}" alt="" >
        </div>
        <div class="slide-img">
          <img src="{{url('/frontend/image/motorbike5.png')}}" alt="" >
        </div>
        <!-- Doubled -->
        <div class="slide-img">
          <img src="{{url('/frontend/image/motorbike6.png')}}" alt="" >
        </div>
        <div class="slide-img">
          <img src="{{url('/frontend/image/motorbike2.png')}}" alt="" >
        </div>
        <div class="slide-img">
          <img src="{{url('/frontend/image/motorbike3.png')}}" alt="" >
        </div>
        <div class="slide-img">
          <img src="{{url('/frontend/image/motorbike5.png')}}" alt="" >
        </div>
        
      </div>

    </div>

   

    </section>
    <!-- Multiple Image Slide End-->

    <section class="">
      <img src="{{url('/frontend/image/business_promotion.jpg')}}" alt="" style="width: 100%;">

    </section>

    <!-- Business Promotion -->

    <section class="mexon">

      <div class="business_promotion" id="business_promotion">
        <h1> Business Promotion </h1>
        <ul> Mexon Lubricants</ul>
        <p style="color:darkslategray"> Your Trusted Partner in Automotive and Industrial Lubricants!</p>
        <p>Mexon Lubricants is an expert in offering premium engine oils for use in industrial and automotive settings.
          We serve retailers and distributors with a dedication to quality, making sure they have access to premium
          lubricants that maintain engines operating smoothly and effectively.</p>

        <ul> Our Products:</ul>
        <p> Experience our wide selection of industrial and automotive engine oils, created to satisfy the various
          demands of modern engines. Our products, which range from dependable traditional alternatives to
          high-performance synthetic lubricants, are designed to provide maximum protection, improve fuel efficiency,
          and extend engine life</p>

        <ul> Partnership Opportunities:</ul>
        <p> Long-term collaborations are something we at Mexon Lubricants firmly believe in. For retailers and
          distributors, we provide appealing collaboration possibilities, along with marketing assistance and
          promotional products to help you drive</p>

        <ul> Get In Touch:</ul>
        <p> Are you prepared to use high-quality industrial and automotive engine oils to grow your business? Get in
          touch with us right now to talk about product questions, cooperation possibilities, or any other
          business-related issues. Let’s work together to propel excellence in lubrication and fuel success!</p>
        <p style="color: slateblue;"> <b><i> “Beside maintaining the high quality of products we also maintain the high
              quality of relationship with our customer and our valuable business partners (retailers and Distributors)
              <br>
              Our Products comes with lots attractive gifts and promotional packages (travel, Tour, vacation and many
              more) depends on buying and selling of our products.” </b> </i></p>
        <li>Condition applies.</li>
      </div>
    </section>

@endsection 
