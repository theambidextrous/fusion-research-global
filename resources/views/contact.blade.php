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
</style>
      <div class="page-title-area">
         <div class="container">
            <div class="page-title-content">
               <h2>Contact Us</h2>
               <p>Drop us Message for any Query</p>
            </div>
         </div>
      </div>
      <section class="contact-area ptb-100">
         <div class="container">
            <div class="contact-inner">
               <div class="row">
                  <div class="col-lg-6 col-md-12">
                     <div class="contact-features-list">
                        <h3>Some great reasons to choose us</h3>
                        
                        <p>{{ Config::get('app.name') }} offers a range of academic services at affordable and competitive student price. We are keenly concerned about the success of the students and seek to eliminate all the bottlenecks that students in all academic levels face.</p>
                        
                        <p>Furthermore, we emphasize on delivering quality services as we value our reputation more than anything else. To achieve this, we ensure that our client concerns are handled by the best in the profession and that everything is double-checked for quality purposes.</p>

                        <ul>
                           <li><i class='bx bx-badge-check'></i> Competitive prices</li>
                           <li><i class='bx bx-badge-check'></i> Expert level quality work</li>
                           <li><i class='bx bx-badge-check'></i> Delivered on time</li>
                           <li><i class='bx bx-badge-check'></i> Guaranteed success</li>
                        </ul>
                     </div>
                  </div>
                  <div class="col-lg-6 col-md-12">
                     <div class="contact-form">
                        <h3>Let's Start Your Work Today</h3>
                        <form id="contactForm">
                           <div class="row">
                              <div class="col-lg-6 col-md-6">
                                 <div class="form-group">
                                    <input type="text" name="course" id="course" class="form-control" required data-error="Please enter your course name" placeholder="Your course">
                                    <div class="help-block with-errors"></div>
                                 </div>
                              </div>
                              <div class="col-lg-6 col-md-6">
                                 <div class="form-group">
                                    <input type="text" name="phone_number" id="phone_number" required data-error="Please enter your number" class="form-control" placeholder="Your Phone">
                                    <div class="help-block with-errors"></div>
                                 </div>
                              </div>
                              <div class="col-lg-12 col-md-12">
                                 <div class="form-group">
                                    <input type="email" name="email" id="email" class="form-control" required data-error="Please enter your email" placeholder="Your Email">
                                    <div class="help-block with-errors"></div>
                                 </div>
                              </div>
                              <div class="col-lg-12 col-md-12">
                                 <div class="form-group">
                                    <textarea name="message" class="form-control" id="message" cols="30" rows="6" required data-error="Write your message" placeholder="Small description of your requirement;Alternatively, you can email us below"></textarea>
                                    <div class="help-block with-errors"></div>
                                 </div>
                              </div>
                              <div class="col-lg-12 col-md-12">
                                 <button type="submit" class="default-btn"><i class='bx bxs-paper-plane'></i>Send Message<span></span></button>
                                 <div id="msgSubmit" class="h3 text-center hidden"></div>
                                 <div class="clearfix"></div>
                              </div>
                           </div>
                        </form>
                     </div>
                  </div>
               </div>
               <div class="contact-info">
                  <div class="contact-info-content">
                     <h3>Contact us by Phone Number or Email Address</h3>
                     <h2>
                        <a href="tel:+0881306298615">{{ Config::get('app.phone') }}</a>
                        <span>OR</span>
                        <a href=""><span class="__f_email__" data-cfemail="mailto:{{ Config::get('app.email') }}">{{ Config::get('app.email') }}</span></a>
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
      