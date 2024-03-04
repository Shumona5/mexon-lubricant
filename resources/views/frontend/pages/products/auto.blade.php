@extends('frontend.master')
@section('content')


    <section>
        <div class="auto">
            <img src="{{url('/frontend/image/auto.jpg')}}" alt="Snow" style="width:100%;">
            <div class="top-left">AUTO</div>
           
          </div>
    </section>
    <section class="auto-page">
      <h1> <b> Auto</b> <b style="color: #fa693c;">Products </b></h1>
    
      <p>
          Specific fluids known as automotive lubricants are used in engines and other mechanical systems of cars to lessen wear and friction between moving parts. They are necessary to keep vehicle parts operating effectively, performing well, and lasting a long time.
        </p>
        <p>
          Advanced Formulations: Mexon Lubricants leverage cutting-edge technology and years of research to formulate lubricants that go beyond industry standards. Our products are engineered to provide superior protection, ensuring your engine operates at its best, even under demanding conditions.

          Performance-Driven: Whether you're a daily commuter, an off-road enthusiast, or a performance car enthusiast, Mexon Lubricants has the right product for you. Our lubricants are designed to deliver exceptional performance, enhanced fuel efficiency, and maximum engine protection across diverse driving scenarios.
        </p>
        <p>Comprehensive Product Range:

          Engine Oils: Tailored viscosity grades, including semi-synthetic and full synthetic options, to suit various engine types.
          Transmission Fluids: Ensuring smooth gear shifts and optimal transmission performance.
          Coolant Products: Effective heat dissipation for engine cooling.
          Greases and Lubricating Oils: Preserving the longevity of critical components.
          Environmental Responsibility: Mexon Lubricants is committed to sustainability. Our lubricants are formulated with a focus on environmental impact, meeting or exceeding industry standards for eco-friendly solutions.
          
          User-Friendly Packaging: Mexon Lubricants are available in user-friendly packaging, making oil changes and maintenance hassle-free for DIY enthusiasts and professional mechanics alike
          Mexon Lubricants goes beyond being a product – it's a commitment to your vehicle's well-being. By choosing Mexon, you're not just investing in lubricants; you're investing in the longevity, reliability, and efficiency of your vehicle.
          
          Give your engine the care it deserves. Choose Mexon Lubricants for a smoother, more efficient, and powerful ride. Your journey deserves the best, and Mexon Lubricants delivers excellence at every turn.
          When it comes to ensuring the longevity and optimal performance of your vehicle, choosing the right lubricants is paramount. Mexon Lubricants stands out as a trusted name in the automotive industry, offering a comprehensive range of high-quality lubrication solutions tailored to meet the unique needs of your engine.
        </p>

       
    </section>

    <section class="lead_sec1 bg4">
      <div class="container">
        <hgroup class="text-center" style="margin-bottom: 0;">
          <h2 class="heading2">Sub<br /><strong>Products</strong></h2>
        </hgroup>
        <div class="row subProList v0">
          <article class="col-lg-3 col-md-4 col-sm-6">
            <div class="col-content">
              <span class="col_icon">
                <i class="fa fa-motorcycle"></i>
              </span>
              <h3>
                <a href="{{route('products.motorbike')}}" class=" ">
                  <span class="text">Motorbike Engine Oil</span>
                  <!-- <span class="ioc"><i class="theme_icon rightArrow2"></i></span> -->
                </a>
              </h3>
              </a>
            </div>
          </article>
          <article class="col-lg-3 col-md-4 col-sm-6">
            <div class="col-content">
              <span class="col_icon">
                <i class="fa fa-cog"></i>
                    
              </span>
              <h3>
                <a href="{{route('products.gasoline')}}" class=" ">
                  <span class="text">Gasoline Engine Oil</span>
                  
                </a>
              </h3>
            </div>
          </article>
          <article class="col-lg-3 col-md-4 col-sm-6">
            <div class="col-content">
              <span class="col_icon">
                  <i class="fa fa-gears"></i>
              </span>
              <h3>
                <a href="{{route('products.diesel')}}" class=" ">
                  <span class="text">Diesel Engine</span>
                  
                </a>
              </h3>
            </div>
          </article> 
          
           <article class="col-lg-3 col-md-4 col-sm-6">
            <div class="col-content">
              <span class="col_icon">
                  <i class="fa fa-wrench"></i>
              </span>
              <h3>
                <a href="" class="">
                  <span class="text">Engine Oils</span>
                
                </a>
              </h3>

            </div>
          </article>
         <article class="col-lg-3 col-md-4 col-sm-6">
            <div class="col-content">
              <span class="col_icon">
                  <i class="fa fa-wrench"></i>
              </span>
              <h3>
                <a href="" class=" ">
                  <span class="text">Transmission Oils</span>
                 
                </a>
              </h3>
            </div>
          </article> 
           <article class="col-lg-3 col-md-4 col-sm-6">
            <div class="col-content">
              <span class="col_icon">
                  <i class="fa fa-gears"></i>
              </span>
              <h3>
                <a href="" class=" ">
                  <span class="text">Brake Oils</span>
                  
                </a>
              </h3>
            </div>
          </article>

          <article class="col-lg-3 col-md-4 col-sm-6">
            <div class="col-content">
              <span class="col_icon">
                  <i class="fa fa-gear"></i>
              </span>
              <h3>
                <a href="" class=" ">
                  <span class="text">Coolant </span>
                 
                </a>
              </h3>
            </div>
          </article>

          <article class="col-lg-3 col-md-4 col-sm-6"> 
             <div class="col-content">
              <span class="col_icon">
                  <i class="fa fa-gears"></i>
              </span>
              <h3>
                <a href="" class=" ">
                  <span class="text">Grease </span>
                  
                </a>
              </h3>
            </div>
          </article>
        </div> 
        <!-- loadmodule mod_menu,Auto Categories -->
      </div>
    </section>
    
 
@endsection