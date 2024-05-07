@extends('frontend.master')
@section('content')



<section class="location">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2175.981065404135!2d24.181937076957766!3d56.949125673550476!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x46eece128a5a28ff%3A0x4a2e07e0702922cd!2sMexon%20Lubricants!5e0!3m2!1sen!2sbd!4v1708587639747!5m2!1sen!2sbd" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</section>

<section class="contacts-details-area grey-bg2" id="contact-us">
    <div class="container">
        <div style="justify-content: center;" class="row align-items-center">

            <div class="col-md-12">
                <div class="donar-information donation-form mb-30 pr-50 pl-50">

                    <div class="row">
                        <div class="col-md-4 col-sm-12">
                            <h2 class="text-uppercase my-heading text-color">
                                <span style="color: #fa693c;"> Contact Us </span>
                            </h2>
                            <div class="contact-info text-color">
                                <div class="single-contact-info my-4">
                                    <div class="contact-info-dec text-color">
                                        <h4>Mexon Lubricants</h4>
                                        <h6 class="secondary-text-color">2 Darzciema iela,</h6>
                                        <h6 class="secondary-text-color">Riga, Latvia.</h6>
                                    </div>
                                </div>

                                <div class="single-contact-info d-flex align-items-baseline">
                                    <div class="contact-icon pr-10">
                                        <i class="fa fa-map-marker"></i>
                                    </div>
                                    <div class="contact-info-dec ">
                                        <p class="text-color"> Asia Pacific Office<br>19/64 Soi:13,Sukhumvit Rd Wattana
                                            <br>Bangkok-10110 Thailand
                                        </p>
                                        <p></p>
                                    </div>
                                </div>

                                <div class="single-contact-info d-flex align-items-baseline">
                                    <div class="contact-icon pr-10">
                                        <i class="fa fa-envelope"></i>
                                    </div>
                                    <div class="contact-info-dec">
                                        <p> info@mexon.org 
                                            <a href="mailto:info@omoxoil.com" class="text-decoration-none text-color"></a>
                                        </p>
                                    </div>
                                </div>


                                <div class="single-contact-info d-flex align-items-baseline">
                                    <div class="contact-icon pr-10">
                                        <i class="fa fa-map-marker"></i>
                                    </div>
                                    <div class="contact-info-dec ">
                                        <p class="text-color"> Europe Office<br> Darzciema iela 2 Riga, LV-1035
                                            <br> Latvia
                                        </p>
                                        <p></p>
                                    </div>
                                </div>
                                <div class="single-contact-info d-flex align-items-baseline">
                                    <div class="contact-icon pr-10">
                                        <i class="fa fa-phone"></i>
                                    </div>
                                    <div class="contact-info-dec">
                                        <p class="text-color">+371 2 8810000</p>
                                    </div>
                                </div>

                                <div class="single-contact-info d-flex align-items-baseline">
                                    <div class="contact-icon pr-10">
                                        <i class="fa fa-clock-o"></i>
                                    </div>
                                    <div class="contact-info-dec ">
                                        <p class="text-color"> Mon-Fri, 10:00-17:00</p>

                                    </div>
                                </div>

                                <!-- <div class="single-contact-info d-flex align-items-baseline">
    <div class="contact-icon pr-10">
    <i class="fa fa-envelope"></i>
    </div>
    <div class="contact-info-dec">
    <p> fgdg
    <a href="mailto:info@omoxoil.com"
    class="text-decoration-none text-color"></a>
    </p>
    </div>
    </div> -->

                            </div>
                        </div>
                        <div class="col-md-8 col-sm-12">
                            <h2 class="text-uppercase my-heading mb-35">
                                <span style="color: #fa693c;"> Feel Free To </span> Write Us
                            </h2>
                            <div class="main-contact-area">
                                <form action="{{route('contactUs.store')}}" method="POST">
                                @csrf 
                                    <div style="margin-bottom: 7px;" class="row">
                                        <div class="col-md-6 col-sm-12 input-area mb-10">
                                            <input type="text" class="form-control" placeholder="Your name" style=" font-size: 18px;" name="name">
                                        </div>
                                        <div class="col-md-6 col-sm-12 input-area mb-10">
                                            <input type="text" class="form-control" placeholder="Email Address" style="font-size: 18px; color:#00315a;" name="email">
                                        </div>
                                        <div class="col-md-6 col-sm-12 input-area mb-10">
                                            <input type="text" class="form-control" placeholder="Your Location/ City" style="color:#00315a; font-size: 18px;" name="location">
                                        </div>
                                        <div class="col-md-6 col-sm-12 input-area mb-10">
                                            <input type="text" class="form-control" placeholder="Engine type" style=" font-size: 18px;" name="type">
                                        </div>
                                        <div class="col-md-6 col-sm-12 input-area mb-10">
                                            <input type="text" class="form-control" placeholder="Engine Model" style=" font-size: 18px;" name="model">
                                        </div>

                                        <div class="col-md-6 col-sm-12 input-area mb-10">
                                            <input type="text" class="form-control" placeholder="Is there any official warranty?" style=" font-size: 18px;" name="warranty">
                                        </div>
                                        <div class="col-md-6 col-sm-12 input-area mb-10">
                                            <input type="text" class="form-control" placeholder="Subject" style=" font-size: 18px;" name="subject">
                                        </div>
                                        <div class="input-area mb-10 col-sm-12">
                                            <textarea name="message" id="messsage" cols="30" rows="10" placeholder="Since you bought or leased your automobile, about how many miles has it been driven?" style="color: rgb(1, 1, 34); font-size: 18px;background-color:#eeebeb"></textarea>
                                        </div>

                                        <!-- <div class=" col-md-6 col-sm-12 input-area mb-10">
    <input type="text" class="form-control" placeholder="Subject"
    id="subject" style=" color: #00315a; font-size: 18px;" />
    </div>
    </div> -->

                                        <!-- <div class="input-area mb-10 col-sm-12">
    <textarea name="message" id="messsage" cols="30" rows="10"
    placeholder="Message"
    style="color:#00315a; font-size: 18px;"></textarea>
    </div> -->
                                        <div class="input-btn col-sm-4">
                                            <button class="theme_btn theme_btn_bg" style="">Send message
                                            </button>
                                        </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
</section>



@endsection