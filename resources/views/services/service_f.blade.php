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
    .subscribe-content form .input-newsletter {
        background-color: #00bee6!important;
        border: solid 2px #065d94!important;
    }
    .lets{
        font-size: 26px!important;
        text-align: center;
    }
</style>

<div class="page-title-area">
    <div class="container">
    <div class="page-title-content">
        <h2>Awesome Chapter 4</h2>
    </div>
    </div>
</div>
<div class="service-details ptb-100">
    <div class="container">
    <!-- <div class="service-details-image">
        <img src="{{ asset('assets/img/marketing-agency/services-img1.jpg') }}" alt="image">
    </div> -->
    <div class="service-details-content">
        <h3>Awesome Chapter 4</h3>
        
        <p>A philosophical argument leads a researcher into picking the research design. To enable the researcher to decide which approach to adopt and why. Strategies and methods will differ with different researchers.</p> 
        
        <p>There are really only two major ways of ‘looking at the world.</p> 
        <ol>
            <li>Quantitative paradigm - One view regards the world as largely objective and measurable in terms of the use of numbers. 
            </li>
            <li>Qualitative paradigm - The other view suggests that the world is largely subjective (open to several interpretations) and non- measurable. </li>
        </ol>
        <img style="float: right;width:650px;" src="{{ asset('assets/img/marketing-agency/services-img6.jpg') }}" alt="image">
        </p>

        <h4>Types of Philosophies</h4>

        <p><b>Methodology</b> - the understanding of how reality affects the way we gain knowledge of reality and eventually how we conduct research about reality.</p>
        <p><b>Ontology</b> - is concerned with the nature of reality. To a greater extent than epistemological considerations, this raises questions of the assumption’s researchers have about the way the world operates and the commitment held to particular views.</p>
        <p><b>Epistemology</b> - concerns what constitutes acceptable knowledge in a field of study. The key epistemological question is whether the approach to the study of the social world, including that of management and business, can be the same as the approach to studying the natural sciences. </p>

        <!-- The issue of validity begs the question of  -->


        <div class="service-details-info">
            <div class="single-info-box">
                <h4>Client <br>orders</h4>
                <span>500+</span>
            </div>
            <div class="single-info-box">
                <h4>Awesome chapter  <br> Done</h4>
                <span>500+</span>
            </div>
            <div class="single-info-box">
                <h4>Referals <br>received</h4>
                <span>200+</span>
            </div>
            <div class="single-info-box">
                <h4>Share</h4>
                <ul class="social">
                <li>
                    <a target="_blank" href="#">
                    <i class='bx bxl-linkedin'></i>
                    </a>
                </li>
                <li>
                    <a target="_blank" href="#">
                    <i class='bx bxl-twitter'></i>
                    </a>
                </li>
                <li>
                    <a target="_blank" href="#">
                    <i class='bx bxl-facebook'></i>
                    </a>
                </li>
                <li>
                    <a target="_blank" href="#">
                    <i class='bx bxl-instagram'></i>
                    </a>
                </li>
                </ul>
            </div>
            <div class="single-info-box">
                <a class="default-btn" href="{{ route('sreq') }}">Make Your Order Today</a>
            </div>
        </div>
    </div>
    </div>
</div>
<section class="subscribe-area bg-f4f5fe">
    <div class="container">
    <div class="subscribe-content">
        <h2>We always try to offer the best academic help to you as possible</h2>
        <form class="newsletter-form" data-toggle="validator">
            <div class="row align-items-center">
                <div class="col-lg-8 col-md-8">
                <input type="text" class="input-newsletter" placeholder="Enter your phone number" name="phone" required autocomplete="off">
                </div>
                <div class="col-lg-4 col-md-4">
                <button onclick="gotoCallBack()"><i class="bx bxs-help-circle"></i> Ask for help</button>
                </div>
                <div class="col-lg-12 col-md-12">
                <div id="validator-newsletter" class="form-result"></div>
                </div>
            </div>
        </form>
        <div class="shape14"><img src="{{ asset('assets/img/shape/13.png') }}" alt="image"></div>
        <div class="shape15"><img src="{{ asset('assets/img/shape/14.png') }}" alt="image"></div>
        <div class="shape16"><img src="{{ asset('assets/img/shape/15.png') }}" alt="image"></div>
        <div class="shape17"><img src="{{ asset('assets/img/shape/16.png') }}" alt="image"></div>
        <div class="shape18"><img src="{{ asset('assets/img/shape/17.png') }}" alt="image"></div>
    </div>
    </div>
</section>



<section class="our-loving-clients ptb-100 bg-f4f5fe">
    <div class="container">
    <div class="section-title">
    </div>
    <div class="clients-logo-list align-items-center">
        
    </div>
    </div>
</section>  


@endsection

@section('footer')
    @include('commons.footer')
@endsection


@section('scripts')
    @include('commons.scripts')
    <script>
        gotoCallBack = function(){
        window.location.href ="{{ route('callback') }}"
        }
        isLeaving = function()
        {
            $('#ex/ampleModalCenter').modal('show');
        }
        $(document).bind("mouseleave", function(e) {
            if (e.pageY - $(window).scrollTop() <= 1) {  
                $('#exampleModalCenter').modal('show');
            }
        });
    </script>

    <!-- Modal -->
    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title text-center" id="exampleModalLongTitle">Let us offer you Research Methodology help.</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
        <form id="contactForm">
            <div class="row">
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
                <div class="col-lg-12 col-md-12">
                    <div class="form-group">
                    <label>Email address</label>
                    <input type="email" name="email" id="email" class="form-control" placeholder="">
                    </div>
                </div>
                <div class="col-lg-12 col-md-12">
                    <div class="form-group">
                    <label>Service requesting</label>
                    <select name="hour" class="form-control">
                        <option value="nn">Choose from below</option>
                        <option value="Concept Paper">Concept Paper</option>
                        <option value="Topic & Objective Development">Topic & Objective Development</option>
                        <option value="Background & Pilot of the Study">Background & Pilot of the Study</option>
                        <option value="Literature Review">Literature Review</option>
                        <option selected value="Research Methodology">Research Methodology</option>
                        <option value="Awesome chapter 4">Awesome chapter 4</option>
                        <option value="Awesome chapter 5">Awesome chapter 5</option>
                        <option value="SPSS Training">SPSS Training</option>
                        <option value="Excel Training">Excel Training</option>
                        <option value="Eviews Training">Eviews Training</option>
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
        <!-- <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Save changes</button>
        </div> -->
        </div>
    </div>
    </div>
@endsection
      