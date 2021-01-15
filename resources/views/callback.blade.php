@extends('layouts.main')

@section('meta')
    @include('commons.meta')
@endsection


@section('nav')
    @include('commons.nav')
@endsection

@section('slider')

<style>
.page-title-area {
    background-color: #065d94!important;
    padding-top: 20px!important;
    padding-bottom: 20px!important;
}
.lets{
    font-size: 26px!important;
    text-align: center;
}
</style>
      <div class="page-title-area">
         <div class="container">
            <div class="page-title-content">
               <h2>Request a Call Back</h2>
               <p>Let us know when we can call you</p>
            </div>
         </div>
      </div>
      <section class="contact-area ptb-100">
         <div class="container">
            <div class="contact-inner">
               <div class="row">
                  <div class="col-lg-3 col-md-12">
                    <!-- blank -->
                  </div>
                  <div class="col-lg-6 col-md-12">
                     <div class="contact-form">
                        <h3 class="lets">Let us know when we can call you</h3>
                        <form id="contactForm">
                           <div class="row">
                              <div class="col-lg-12 col-md-6">
                                 <div class="form-group">
                                    <input type="text" name="name" id="name" class="form-control" placeholder="Please enter your full name">
                                 </div>
                              </div>
                              <div class="col-lg-12 col-md-6">
                                 <div class="form-group">
                                    <input type="text" name="phone_number" id="phone_number" required class="form-control" placeholder="Please enter a phone number we can call">
                                 </div>
                              </div>
                              <div class="col-lg-12 col-md-12">
                                 <div class="form-group">
                                    <input type="text" name="alt_phone" id="alt_phone" class="form-control" placeholder="Please enter alternative phone">
                                 </div>
                              </div>
                              <div class="col-lg-12 col-md-12">
                                 <div class="form-group">
                                    <select name="hour" class="form-control">
                                        <option>Tell us what time we can call you</option>
                                        <option value="Anytime">Any time</option>
                                        <option value="Morning">Morning hours</option>
                                        <option value="Afternoon">Afternoon hours</option>
                                    </select>
                                 </div>
                              </div>
                              <div class="col-lg-12 col-md-12">
                                 <button type="submit" class="default-btn"><i style="color:white;" class='bx bxs-phone-incoming'></i>Request Call<span></span></button>
                                 <div id="msgSubmit" class="h3 text-center hidden"></div>
                                 <div class="clearfix"></div>
                              </div>
                           </div>
                        </form>
                     </div>
                  </div>
                  <div class="col-lg-3 col-md-12">
                    <!-- blank -->
                  </div>
               </div>
               <div class="contact-info">
                  <div class="contact-info-content">
                     <h3>Need help?</h3>
                     <h2> Call
                        <a href="#"> {{ Config::get('app.phone') }}</a>
                     </h2>
                     <ul class="social">
                        <li><a href="#" target="_blank"><i class="bx bxl-twitter"></i></a></li>
                        <li><a href="#" target="_blank"><i class="bx bxl-youtube"></i></a></li>
                        <li><a href="#" target="_blank"><i class='bx bxl-facebook'></i></a></li>
                        <li><a href="#" target="_blank"><i class="bx bxl-linkedin"></i></a></li>
                        <li><a href="#" target="_blank"><i class="bx bxl-instagram"></i></a></li>
                     </ul>
                  </div>
               </div>
            </div>
         </div>
      </section>
@endsection

@section('footer')
    @include('commons.footer')
@endsection
      

@section('scripts')
    @include('commons.scripts')
@endsection