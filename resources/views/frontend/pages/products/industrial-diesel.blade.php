@extends('frontend.master')
@section('content')


    @foreach($industrialDiesel as $data)
    <section class="cta">
        <img src="{{$data->image}}" alt="" style="width: 100%">
    </section>

    <div>
            <div class="container" style="padding-top: 30px;">
                <div class="row">
                    <div class="col-md-8">
                        <p style=" font-weight: 600; color: rgb(2, 109, 112);font-size: 18px;">{{$data->title}}
                        </p>
                        <p class="benefits"
                            style="font-size: 16px;font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif">
                            {!!$data->short_description!!}
                        </p>
                        
                        <p
                            style="font-size: 16px; font-family: Arial, Helvetica, sans-serif; color: slategray; font-weight: 200px;">
                            {!!$data->long_description!!}
                        </p>
                    </div>
                    <div class="col-md-4">
                        <img src="{{$data->product_image}}" alt="" height="350px" width="350px">
                    </div>
                </div>
            </div>
        </div>
    @endforeach

        <!-- <br>
        <div>
            <img src="{{url('/frontend/image/Diesel3.jpg')}}" alt="" style="width: 100%; background-position: center; 
            background-size: cover">
        </div>
        <br>


        <div class="container" style="padding-top: 30px;">
            <div class="row">
                <div class="col-md-8">
                    <p style=" font-weight: 600; color: rgb(2, 109, 112);font-size: 18px;">SAE 20W-50, API CI-4/SL</p>
                    <p class="benefits"
                        style="font-size: 16px;font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif">
                        <b style="font-size: 18px;">Application:</b> <br>
                        Premium performance heavy-duty diesel engine oil. Recommended for superior protection of modern
                        diesel engines both on-highway and off-highway applications such as trucks, buses, trailers and
                        heavy equipment.</p>
                    <h6> <b> Benefits:</b></h6>
                    <ul class="text-color" style="margin-bottom: 40px !important">
                        <li style="list-style-type: disc" class="mb-10">Maintain engine cleanliness and prevent sludge.
                        </li>
                        <li style="list-style-type: disc" class="mb-10">Extend the engine life and provide excellent
                            lubrication.</li>
                        <li style="list-style-type: disc" class="mb-10">Provide wear protection even under continuous
                            severe working condition.</li>
                        <li style="list-style-type: disc" class="mb-10">Improve soot discrepancy properties, maintain
                            viscosity & prolong engine life.</li>

                    </ul>
                    <p
                        style="font-size: 16px; font-family: Arial, Helvetica, sans-serif; color: slategray; font-weight: 200px;">
                        <b>Pack size: 1, 5, 20, 205 Liter</b></p>
                </div>
                <div class="col-md-4">
                    <img src="{{url('/frontend/image/Mexon Drum 2024 D_1.png')}}" alt="" height="350px" width="350px">
                </div>

            </div>
        </div>


        <br>
        <div>
            <img src="{{url('/frontend/image/Diesel6.png')}}" alt="" height="150px" width="80%" style="display: block; margin-left: auto; margin-right: auto;">
        </div>
        <br>
        <div>
            <img src="{{url('/frontend/image/Diesel7.png')}}" alt="" style="width: 100%; background-position: center; 
            background-size: cover">
        </div>
        <br>


        <div class="container">
            <div class="row">
                <div class="col-md-8 ">
                    <p  style=" font-weight: 600; color: rgb(2, 109, 112);font-size: 18px;">SAE 40 | 50</p>
                    <p class="benefits"
                        style="font-size: 16px;font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif">
                        <b style="font-size: 18px;">Application:</b> <br>
                        Mexon DiXol is a high-performance diesel engine oil. Manufactured from high-quality base stock by blending with selected multiple additives of superior performance. It meets the specification of API CC/SC. The product provides outstanding lubrication for high-speed diesel engines under severe operating conditions.</p>
                    <h6> <b> Benefits:</b></h6>
                    <ul class="text-color" style="margin-bottom: 40px !important">
                        <li style="list-style-type: disc" class="mb-10">Outstanding detergent and discrepancy to prevent deposit.
                        </li>
                        <li style="list-style-type: disc" class="mb-10">Good anti-oxidation ability and thermal stability to reduce the generation of oxides and extend the life of use.</li>
                        <li style="list-style-type: disc" class="mb-10">Excellent lubricating property to reduce the friction and sediment under severe conditions.</li>
                        <li style="list-style-type: disc" class="mb-10">Specifically designed for diesel engines with environmental performance.</li>
                    </ul>
                    <p
                        style="font-size: 16px; font-family: Arial, Helvetica, sans-serif; color: slategray; font-weight: 200px;">
                        <b>Pack size: 20 | 205 Liters</b></p>
                </div>
                <div class="col-md-4" style="padding-top: 10px;">
                    <img src="{{url('/frontend/image/Mexon Drum 2024.png')}}" alt="" height="350px" width="350px">
                </div>
            </div>
        </div>


        <div>
            <img src="{{url('/frontend/images/Diesel9.jpg')}}" alt="" style="width: 100%; background-position: center; 
            background-size: cover">
        </div>
     -->
    
  
@endsection