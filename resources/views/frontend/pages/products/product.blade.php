@extends('frontend.master')
@section('content')

<section>
  <div class="solution">
    <img src=" {{$mexonProduct->image}}" alt="" style="width: 100%; height: 520px;">

  </div>
  <span class="top-left1"> {{$mexonProduct->title1}} </span>
</section>

<section>
  <p class="products-p">  {{$mexonProduct->title2}} </p>
</section>

<div>
  @foreach($products as $key=>$product)
  @if($key%2==0)
  <!-- left side design -->
  <section class="lead_sec1 fullbg flexStretch over_effect" style="background-image: url('/frontend/image/auto.jpg');">
    <div class="container flex-contain product_intro">
      <div class="row">
        <div class="col-md-5">
          <div class="inner">
            <h2 style="color: #ffffff;">{{$product->subtitle_name}}</h2>
            <p style="color: #ffffff;">{!!$product->description!!}</p>
            <a href="{{route('products.auto')}}" class="btn1 btn1-mini btn-color">Read more</a>
          </div>
        </div>
      </div>
    </div>
  </section>
@else
  <!-- right side design -->
  <section class="lead_sec1 fullbg flexStretch over_effect" style="background-image: url('/frontend/image/industry.jpg');">
    <div class="container flex-contain product_intro">
      <div class="row">
        <div class="col-md-7"> </div>
        <div class="col-md-5 ">
          <div class="inner right">
            <h2 style="color: #ffffff;">{{$product->subtitle_name}}</h2>
            <p style="color: #ffffff;"> {!!$product->description!!} </p>
            <a href="{{route('products.industrial')}}" class="btn1 btn1-mini btn-color">Read more</a>
          </div>
        </div>
      </div>
    </div>
  </section>
  @endif
@endforeach
  <!-- <section class="lead_sec1 fullbg flexStretch over_effect" style="background-image: url('/frontend/image/Marine.jpg');">
    <div class="container flex-contain product_intro">
      <div class="row">
        <div class="col-md-5">
          <div class="inner">
            <h2 style="color: #ffffff;">Marine and Offshore</h2>
            <p style="color: #ffffff;"><strong>Mexon</strong> marine lubricants speaks to the exceptionally best and
              most recent in lubricant innovation. Particularly created to meet the requests of dispatch
              administrators, it guarantees that all oils are at the cutting edge of innovation to offer the most
              excellent world course items accessible. </p>
            <a href="" class="btn1 btn1-mini btn-color">Read
              more</a>
          </div>
        </div>
      </div>
    </div>
  </section> -->

  <!-- <section class="lead_sec1 fullbg flexStretch over_effect" style="background-image: url('/frontend/image/Special.jpg');">
    <div class="container flex-contain product_intro">
      <div class="row">
        <div class="col-md-7"> </div>
        <div class="col-md-5">
          <div class="inner right" style="box-shadow: -10px -10px 0 rgb(255 255 255 / 50%);">
            <h2 style="color: #ffffff;">Speciality Grades</h2>
            <p style="color: #ffffff;"> <b>Mexon </b> offers one of the foremost comprehensive speciality grades of greases within the industry. Specialty grades of engine oil are formulations specifically engineered to meet the demands of high-performance engines, specialized applications, or extreme operating conditions. </p>
            <a href="" class="btn1 btn1-mini btn-color">Read
              more</a>
          </div>
        </div>
      </div>
    </div>
  </section> -->
</div>

@endsection