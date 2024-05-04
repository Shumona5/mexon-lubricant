@extends('frontend.master')
@section('content')
    

    @if ($checkParent->productTypeDetails)
    <section>
      <div class="auto">
          <img src="{{ url('/frontend/image/auto.jpg') }}" alt="Snow" style="width:100%;">
          <div class="top-left">{{ $checkParent->productTypeDetails->title1 }}</div>

      </div>
  </section>
        <section class="auto-page">
            <h1 style="padding-top: 20px;"> <b> Auto</b> <b style="color: #fa693c;">Products </b></h1>

            {!! $checkParent->productTypeDetails->long_description !!}
        </section>

        <section class="lead_sec1 bg4">
            <div class="container">
                <hgroup class="text-center" style="margin-bottom: 0;">
                    <h2 class="heading2">Sub<br /><strong>Products</strong></h2>
                </hgroup>
                <div class="row subProList v0">
                    @foreach ($checkParent->subProductTypesDetails as $data)
                        <article class="col-lg-3 col-md-4 col-sm-6">
                            <div class="col-content">
                                <span class="col_icon">
                                    <!-- <i class="fa fa-motorcycle"></i> -->
                                    <img src="{{ url('/frontend/image/motorcycle.jpg') }}" alt=""
                                        style="width: 100px;" class="zoom">
                                </span>
                                <h3>
                                    <a href="{{ route('products.motorbike') }}" class=" ">
                                        <span class="text">Motorbike Engine Oil</span>
                                        <!-- <span class="ioc"><i class="theme_icon rightArrow2"></i></span> -->
                                    </a>
                                </h3>
                                </a>
                            </div>
                        </article>
                    @endforeach
                    <!-- <article class="col-lg-3 col-md-4 col-sm-6">
                <div class="col-content">
                  <span class="col_icon">
                    <i class="fa fa-cog"></i>
                        
                  </span>
                  <h3>
                    <a href="{{ route('products.gasoline') }}" class=" ">
                      <span class="text">Gasoline Engine Oil</span>
                      
                    </a>
                  </h3>
                </div>
              </article> -->
                    <!-- <article class="col-lg-3 col-md-4 col-sm-6">
                <div class="col-content">
                  <span class="col_icon">
                      <i class="fa fa-gears"></i>
                  </span>
                  <h3>
                    <a href="{{ route('products.diesel') }}" class=" ">
                      <span class="text">Diesel Engine</span>
                      
                    </a>
                  </h3>
                </div>
              </article>  -->

                    <!-- <article class="col-lg-3 col-md-4 col-sm-6">
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
              </article> -->
                    <!-- <article class="col-lg-3 col-md-4 col-sm-6">
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
          </article> -->
                    <!-- <article class="col-lg-3 col-md-4 col-sm-6">
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
          </article> -->

                    <!-- <article class="col-lg-3 col-md-4 col-sm-6">
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
          </article> -->

                    <!-- <article class="col-lg-3 col-md-4 col-sm-6">
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
          </article> -->
                </div>
                <!-- loadmodule mod_menu,Auto Categories -->
            </div>
        </section>

        @else 
        <p>No data found under this category.</p>
    @endif
@endsection
