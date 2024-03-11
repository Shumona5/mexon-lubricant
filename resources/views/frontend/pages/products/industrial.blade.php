@extends('frontend.master')
@section('content')


    <section>
        <div class="industrial">
            <img src="{{url('/frontend/image/industry.jpg')}}" alt="Snow" style="width:100%;">
            <div class="top-left">INDUSTRIAL</div>
           
          </div>
    </section>
    <section class="industrial-page">
        <h1 style="padding-top: 20px;"> <b> Industrial</b> <b style="color: #fa693c;">Products </b></h1>
    
        <p>
            In the realm of industrial machinery, where efficiency and reliability are paramount, the choice of engine oils plays a pivotal role in maintaining optimal performance and longevity. Industrial engine oils are specially formulated to withstand the rigors of heavy-duty applications, offering superior lubrication, thermal stability, and protection against wear and corrosion.
          </p>
          <p>
            Industrial engines often operate under extreme temperatures and heavy loads. Engine oils designed for industrial use exhibit exceptional thermal stability, ensuring consistent performance even in demanding environments.
          </p>
          <p>
            Industrial engine oils incorporate advanced additive packages tailored to address specific challenges encountered in industrial settings. These additives enhance lubricity, prevent deposits, and minimize wear, thereby extending the service life of critical engine components.
          </p>
          <p>
            Maintaining proper viscosity is essential for optimal engine performance. Industrial engine oils are engineered to maintain consistent viscosity across a wide range of operating conditions, ensuring smooth operation and efficient power transfer.
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
                <i class="fa fa-wrench"></i>
              </span>
              <h3>
                <a href="{{route('product.diesel')}}" class=" ">
                  <span class="text">Diesel Engine</span>
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
                <a href="{{route('products.grease')}}" class=" ">
                  <span class="text">Grease</span>
                  
                </a>
              </h3>
            </div>
          </article>
          <article class="col-lg-3 col-md-4 col-sm-6">
            <div class="col-content">
              <span class="col_icon">
                  <i class=""></i>
              </span>
              <h3>
                <a href="" class=" ">
                  <span class="text"></span>
                  
                </a>
              </h3>
            </div>
          </article> 
          
           <article class="col-lg-3 col-md-4 col-sm-6">
            <div class="col-content">
              <span class="col_icon">
                  <i class=""></i>
              </span>
              <h3>
                <a href="" class="">
                  <span class="text"></span>
                
                </a>
              </h3>

            </div>
          </article>
        

          

         
        </div> 
        <!-- loadmodule mod_menu,Auto Categories -->
      </div>
    </section>
    
  
 
    
 
@endsection