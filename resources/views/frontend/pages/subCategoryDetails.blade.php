@extends('frontend.master')
@section('content')


<section class="cta">
    <img src="{{$category->image}}" alt="" style="width: 100%">
</section>

<section>
    @foreach ($category->subCategoryDetails as $data)
    <div>
        <div>
            <div class="motor-header">
                <h1> {{$data->title1}} </h1>
                <p style="font-size: 16px;">{!!$data->first_short_description!!}</p>
            </div>

            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <p style=" font-weight: 500; color: rgb(2, 109, 112);font-size: 16px;">{!!$data->first_long_description!!}</p>
                    </div>
                    <div class="col-md-4">
                        <img src="{{$data->first_image}}" alt="">
                    </div>
                </div>
            </div>
        </div>
         <br>
        <div>
            <div class="motor-header">
                <h1>{{$data->title2}}</h1>
                <p style="font-size: 16px;">{!!$data->second_short_description!!} </p>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-md-1"> </div>
                    <div class="col-md-7">
                        <p> {!!$data->second_long_description!!}</p>
                    </div>
                    <div class="col-md-4">
                        <img src="{{$data->second_image}}" alt="">
                    </div>
                </div>
            </div>
        </div>

        <br>

        <section class="container">
            <div class="pdf">
                <a href="{{$data->pdf}}" target="_blank"><img src="{{$data->pdf_image}}" alt=""></a>
            </div>
        </section>
        <br>
        <div>
            <img src="{{$data->image}}" alt="" style="width: 100%; background-position: center; 
                 background-size: cover">
        </div>
        <br>

    </div>
    @endforeach

    <!-- <div>
                <div class="motor-header">
                    <h1> Mexon SpeedX Plus</h1>
                    <p style="font-size: 16px;"> <b style="color: darkblue;">Application:</b>
                        Synthetic blended high quality multi-grade motorcycle engine oil recommended for both air and
                        liquid-cooled 4 stroke motorcycle engines with integral gearboxes and wet clutches. Applicable
                        for
                        both fuel injection and carburettor technology. Suitable for engines that require added heat
                        protection</p>

                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-md-1"> </div>
                        <div class="col-md-7">

                            <h6><b>Benefits:</b></h6>
                            <ul class="text-color" style="margin-bottom: 40px !important">
                                <li style="list-style-type: disc" class="mb-10">Reduce frictional properties eliminates
                                    wet
                                    clutch slipping.</li>
                                <li style="list-style-type: disc" class="mb-10">Faster heat dissipation result into
                                    longer
                                    engine life.</li>
                                <li style="list-style-type: disc" class="mb-10">Excellent shear stability provides
                                    highest
                                    wear protection.</li>
                                <li style="list-style-type: disc" class="mb-10">Reduces oil consumption through low
                                    volatility.</li>
                                <li style="list-style-type: disc" class="mb-10">Superior rust and corrosion protection.
                                </li>
                            </ul>

                            <p
                                style="font-size: 16px; font-family: Arial, Helvetica, sans-serif; color: rgb(78, 75, 75);">
                                <b>SAE 10W-30, API SL, JASO MA2 [Synthetic Blended] </b>
                            </p>
                            <p style="font-size: 16px; font-family: Arial, Helvetica, sans-serif;">Pack size: 1 Liter
                            </p>
                        </div>
                        <div class="col-md-4">
                            <img src="{{url('/frontend/image/motorbike5.png')}}" alt="" >
                        </div>
                    </div>
                </div>
            </div>

            
            <div>
                <div class="motor-header">
                    <h1> Mexon SpeedX Trim </h1>
                    <p style="font-size: 16px;"> <b style="color: darkblue;">Application:</b>
                        Synthetic blended motor oil designed for high performance air and water-cooled of modern
                        4-stroke
                        motorcycles such as sports type, big bikes & choppers. Recommended for both fuel injection and
                        carburettor technology. Also suitable for gearboxes in 2-stroke motorcycles. </p>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-md-1"></div>
                        <div class="col-md-7">

                            <h6><b>Benefits:</b></h6>
                            <ul class="text-color" style="margin-bottom: 40px !important">
                                <li style="list-style-type: disc" class="mb-10"> Improve acceleration response. </li>
                                <li style="list-style-type: disc" class="mb-10"> Outstanding engine cleanliness.</li>
                                <li style="list-style-type: disc" class="mb-10"> Excellent engine wear protection under
                                    high
                                    speed condition.</li>
                                <li style="list-style-type: disc" class="mb-10">Optimize friction control for smooth
                                    gear
                                    shifting. </li>
                                <li style="list-style-type: disc" class="mb-10"> Extended oil drain intervals. </li>
                            </ul>
                            <p
                                style="font-size: 16px; font-family: Arial, Helvetica, sans-serif; color: rgb(78, 75, 75);">
                                <b>SAE 20W-40, API SL, JASO MA2 [Synthetic Blended]</b>
                            </p>
                            <p style="font-size: 16px; font-family: Arial, Helvetica, sans-serif;">
                            Pack size: 1 Liter </p>
                        </div>
                        <div class="col-md-4">
                            <img src="{{url('/frontend/image/motorbike6.png')}}" alt="" >
                        </div>

                    </div>
                </div>
            </div>
            <br>
            <div>
                <img src="{{url('/frontend/image/motorbike7.jpg')}}" alt=""  style="width: 100%; background-position: center; 
                background-size: cover">
            </div>
            <br>


            <div>
                <div class="motor-header">
                    <h1> Mexon SpeedX Trim </h1>
                    <p style="font-size: 16px;"> <b style="color: darkblue;">Application:</b>
                        Synthetic blended motor oil designed for high performance air and water-cooled of modern
                        4-stroke
                        motorcycles such as sports type, big bikes & choppers. Recommended for both fuel injection and
                        carburettor technology. Also suitable for gearboxes in 2-stroke motorcycles. </p>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-md-1"></div>
                        <div class="col-md-7">

                            <h6><b>Benefits:</b></h6>
                            <ul class="text-color" style="margin-bottom: 40px !important">
                                <li style="list-style-type: disc" class="mb-10"> Improve acceleration response. </li>
                                <li style="list-style-type: disc" class="mb-10"> Outstanding engine cleanliness.</li>
                                <li style="list-style-type: disc" class="mb-10"> Excellent engine wear protection under
                                    high
                                    speed condition.</li>
                                <li style="list-style-type: disc" class="mb-10">Optimize friction control for smooth
                                    gear
                                    shifting. </li>
                                <li style="list-style-type: disc" class="mb-10"> Extended oil drain intervals. </li>
                            </ul>
                            <p
                                style="font-size: 16px; font-family: Arial, Helvetica, sans-serif; color: rgb(78, 75, 75);">
                                <b>SAE 20W-50, API SL, JASO MA2 [Synthetic Blended]</b>
                            </p>
                            <p style="font-size: 16px; font-family: Arial, Helvetica, sans-serif;">Pack size: 1 Liter |
                                600
                                ml </p>
                        </div>
                        <div class="col-md-4">
                            <img src="{{url('/frontend/image/motorbike7.png')}}" alt="" >
                        </div>

                    </div>
                </div>
            </div>


            <br>
            <div>
                <div class="motor-header">
                    <h1> Mexon SpeedX Trim</h1>
                    <p style="font-size: 16px;"> <b style="color: darkblue;">Application:</b>
                        Synthetic blended high quality multi-grade motorcycle engine oil recommended for both air and
                        liquid-cooled 4 stroke motorcycle engines with integral gearboxes and wet clutches. Applicable
                        for
                        both fuel injection and carburettor technology. Suitable for engines that require added heat
                        protection. </p>

                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-md-1"> </div>
                        <div class="col-md-7">

                            <h6> <b>Benefits:</b></h6>
                            <ul class="text-color" style="margin-bottom: 40px !important">
                                <li style="list-style-type: disc" class="mb-10"> Improve acceleration response. </li>
                                <li style="list-style-type: disc" class="mb-10"> Outstanding engine cleanliness.</li>
                                <li style="list-style-type: disc" class="mb-10"> Excellent engine wear protection under
                                    high
                                    speed condition.</li>
                                <li style="list-style-type: disc" class="mb-10"> Optimize friction control for smooth
                                    gear
                                    shifting.</li>
                                <li style="list-style-type: disc" class="mb-10"> Extended oil drain intervals. </li>

                            </ul>

                            <p
                                style="font-size: 16px; font-family: Arial, Helvetica, sans-serif; color: rgb(78, 75, 75);">
                                <b> SAE 10W-40, API SL, JASO MA2 [Synthetic Blended]</b>
                            </p>
                            <p style="font-size: 16px; font-family: Arial, Helvetica, sans-serif;">Pack size: 1 Liter
                            </p>
                        </div>
                        <div class="col-md-4">
                            <img src="{{url('/frontend/image/motorbike8.png')}}" alt="" >
                        </div>

                    </div>
                </div>
            </div>
            <br>
            <div>
                <img src="{{url('/frontend/image/motorbike9.jpg')}}" alt="" style="width: 100%; background-position: center; 
                background-size: cover">
            </div>



            <br>
            <div class="motor-header">
                <h1>Mexon SpeedX Trim</h1>
                <p style="font-size: 16px;"> <b style="color: darkblue;"> Application:</b>
                    Synthetic blended high quality multi-grade motorcycle engine oil recommended for both air and
                    liquid-cooled 4 stroke motorcycle engines with integral gearboxes and wet clutches. Applicable for
                    both fuel injection and carburettor technology. Suitable for engines that require added heat
                    protection. </p>

            </div>
            <div class="container">
                <div class="row">
                    <div class="col-md-1"> </div>
                    <div class="col-md-7">

                        <h6><b>Benefits:</b></h6>
                        <ul class="text-color" style="margin-bottom: 40px !important">
                            <li style="list-style-type: disc" class="mb-10"> Improve acceleration response. </li>
                            <li style="list-style-type: disc" class="mb-10"> Outstanding engine cleanliness.</li>
                            <li style="list-style-type: disc" class="mb-10"> Excellent engine wear protection under high
                                speed condition.</li>
                            <li style="list-style-type: disc" class="mb-10"> Optimize friction control for smooth gear
                                shifting.</li>
                            <li style="list-style-type: disc" class="mb-10"> Extended oil drain intervals. </li>

                        </ul>

                        <p style="font-size: 16px; font-family: Arial, Helvetica, sans-serif; color: rgb(78, 75, 75);">
                            <b>SAE 15W-50, API SL, JASO MA2 [Synthetic Blended] </b>
                        </p>
                        <p style="font-size: 16px; font-family: Arial, Helvetica, sans-serif;">Pack size: 1 Liter </p>
                    </div>
                    <div class="col-md-4">
                        <img src="{{url('/frontend/image/motorbike10.png')}}" alt="" >
                    </div>

                </div>
            </div>



            <br>
            <div class="motor-header">
                <h1> Mexon SpeedX Trim</h1>
                <p style="font-size: 16px;"><b style="color: darkblue;"> Application: </b>
                    Synthetic blended high quality multi-grade motorcycle engine oil recommended for both air and
                    liquid-cooled 4 stroke motorcycle engines with integral gearboxes and wet clutches. Applicable for
                    both fuel injection and carburettor technology. Suitable for engines that require added heat
                    protection. </p>

            </div>
            <div class="container">
                <div class="row">
                    <div class="col-md-1"> </div>
                    <div class="col-md-7">

                        <h6> <b>Benefits:</b></h6>
                        <ul class="text-color" style="margin-bottom: 40px !important">
                            <li style="list-style-type: disc" class="mb-10"> Improve acceleration response. </li>
                            <li style="list-style-type: disc" class="mb-10"> Outstanding engine cleanliness.</li>
                            <li style="list-style-type: disc" class="mb-10"> Excellent engine wear protection under high
                                speed condition.</li>
                            <li style="list-style-type: disc" class="mb-10"> Optimize friction control for smooth gear
                                shifting.</li>
                            <li style="list-style-type: disc" class="mb-10"> Extended oil drain intervals. </li>

                        </ul>

                        <p style="font-size: 16px; font-family: Arial, Helvetica, sans-serif; color: rgb(78, 75, 75);">
                            <b> SAE 20W-50, API SL, JASO MA2 2T [Synthetic Blended] </b>
                        </p>
                        <p style="font-size: 16px; font-family: Arial, Helvetica, sans-serif;">Pack size: 1 Liter | 600
                            ml</p>
                    </div>
                    <div class="col-md-4">
                        <img src="{{url('/frontend/image/motorbike11.png')}}" alt="" >
                    </div>

                </div>
            </div>

            <br>
            <div>
                <img src="{{url('/frontend/image/motorbike12.jpg')}}" alt="" style="width: 100%; background-position: center; 
                background-size: cover">
            </div> -->
</section>



@endsection