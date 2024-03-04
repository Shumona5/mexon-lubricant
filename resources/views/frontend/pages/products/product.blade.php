@extends('frontend.master')
@section('content')

<section>
  <div class="solution">
    <img src="{{url('/frontend/image/products.png')}}" alt="" style="width: 100%; height: 520px;">

  </div>
  <span class="top-left"> Products & Services </span>
</section>

<section>
  <p class="products-p"> <b style="color:#f44336 ;">Our</b> Products </p>
</section>

<div>
  <section class="lead_sec1 fullbg flexStretch over_effect" style="background-image: url('/frontend/image/auto.jpg');">
    <div class="container flex-contain product_intro">
      <div class="row">
        <div class="col-md-5">
          <div class="inner">
            <h2 style="color: #ffffff;">Auto</h2>
            <p style="color: #ffffff;">Automotive engine oil plays a crucial role in the proper functioning and
              longevity of a vehicle's engine.
              Certainly no one is more knowledgeable in vehicle's engine like <b>Mexon </b>
              Because we only focus on lubricants as an independent manufacturer of lubricants.</p>
            <a href="{{route('products.auto')}}" class="btn1 btn1-mini btn-color">Read more</a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="lead_sec1 fullbg flexStretch over_effect" style="background-image: url('/frontend/image/industry.jpg');">
    <div class="container flex-contain product_intro">
      <div class="row">
        <div class="col-md-7"> </div>
        <div class="col-md-5 ">
          <div class="inner right">
            <h2 style="color: #ffffff;">Industrial</h2>
            <p style="color: #ffffff;"> <strong>Mexon</strong> maintains a focus on the requirements set forth by
              all Original Equipment Manufacturers (OEMs) in the industrial sector to make sure that the lubricants
              satisfy the most recent criteria in the industry...
            </p>
            <a href="{{route('products.industrial')}}" class="btn1 btn1-mini btn-color">Read more</a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="lead_sec1 fullbg flexStretch over_effect" style="background-image: url('/frontend/image/Marine.jpg');">
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
  </section>

  <section class="lead_sec1 fullbg flexStretch over_effect" style="background-image: url('/frontend/image/Special.jpg');">
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
  </section>
</div>

@endsection