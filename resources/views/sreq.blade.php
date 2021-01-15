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
               <h2>Request a Service</h2>
               <p>Get right into it by making an order</p>
            </div>
         </div>
      </div>
      <section class="contact-area ptb-100">
         <div class="container">
            <div class="contact-inner">
               <div class="row">
                  <div class="col-lg-2 col-md-12">
                    <!-- blank -->
                  </div>
                  <div class="col-lg-8 col-md-12">
                     <div class="contact-form">
                        <h3 class="lets">Make Your Order Today</h3>
                        <form id="contactForm">
                           <div class="row">
                              <div class="col-lg-6 col-md-6">
                                 <div class="form-group">
                                    <label>Full name</label>
                                    <input type="text" name="name" id="name" class="form-control" placeholder="">
                                 </div>
                              </div>
                              <div class="col-lg-6 col-md-6">
                                 <div class="form-group">
                                    <label>Course name</label>
                                    <input type="text" name="course" id="course" required class="form-control" placeholder="">
                                 </div>
                              </div>
                              <div class="col-lg-6 col-md-12">
                                 <div class="form-group">
                                    <label>Phone number</label>
                                    <input type="text" name="phone" id="phone" class="form-control" placeholder="">
                                 </div>
                              </div>
                              <div class="col-lg-6 col-md-12">
                                 <div class="form-group">
                                    <label>Email address</label>
                                    <input type="email" name="email" id="email" class="form-control" placeholder="">
                                 </div>
                              </div>
                              <div class="col-lg-6 col-md-12">
                                 <div class="form-group">
                                    <label>Service requesting</label>
                                    <select name="hour" class="form-control">
                                        <option value="nn">Choose from below</option>
                                        <option value="Concept Paper">Concept Paper</option>
                                        <option value="Topic & Objective Development">Topic & Objective Development</option>
                                        <option value="Background & Pilot of the Study">Background & Pilot of the Study</option>
                                        <option value="Literature Review">Literature Review</option>
                                        <option value="Research Methodology">Research Methodology</option>
                                        <option value="Awesome chapter 4">Awesome chapter 4</option>
                                        <option value="Awesome chapter 5">Awesome chapter 5</option>
                                        <option value="SPSS Training">SPSS Training</option>
                                        <option value="Excel Training">Excel Training</option>
                                        <option value="Eviews Training">Eviews Training</option>
                                    </select>
                                 </div>
                              </div>
                              <div class="col-lg-6 col-md-12">
                                 <div class="form-group">
                                    <label>Deposit amount</label>
                                    <select name="hour" class="form-control">
                                        <option value="nn">Choose from below</option>
                                        <option value="1000">KES 1,000</option>
                                        <option value="1500">KES 1,500</option>
                                        <option value="2000">KES 2,000</option>
                                        <option value="2500">KES 2,500</option>
                                        <option value="3000">KES 3,000</option>
                                        <option value="3500">KES 3,500</option>
                                        <option value="4000">KES 4,000</option>
                                        <option value="4500">KES 4,500</option>
                                        <option value="5000">KES 5,000</option>
                                        <option value="5500">KES 5,500</option>
                                        <option value="6000">KES 6,000</option>
                                        <option value="6500">KES 6,500</option>
                                        <option value="7000">KES 7,000</option>
                                        <option value="7500">KES 7,500</option>
                                        <option value="8000">KES 8,000</option>
                                        <option value="8500">KES 8,500</option>
                                        <option value="9000">KES 9,000</option>
                                        <option value="9500">KES 9,500</option>
                                        <option value="10000">KES 10,000</option>
                                    </select>
                                 </div>
                              </div>
                              <div class="col-lg-12 col-md-12">
                                 <button type="submit" class="default-btn"><i style="color:white;" class='bx bxs-cart'></i>Make Order<span></span></button>
                                 <div id="msgSubmit" class="h3 text-center hidden"></div>
                                 <div class="clearfix"></div>
                              </div>
                           </div>
                        </form>
                     </div>
                  </div>
                  <div class="col-lg-2 col-md-12">
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
      