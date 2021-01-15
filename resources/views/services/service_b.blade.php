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
        <h2>Topic & Objective Development</h2>
    </div>
    </div>
</div>
<div class="service-details ptb-100">
    <div class="container">
    <!-- <div class="service-details-image">
        <img src="{{ asset('assets/img/marketing-agency/services-img1.jpg') }}" alt="image">
    </div> -->
    <div class="service-details-content">
        <h3>Topic & Objective Development</h3>
        
        <p>Research topic selection or development might sound the easiest thing to do when doing a research but it can be a confusing task at times. And that’s because your research topic should reflect a number of things, such as the concept of the study, study variable and sometimes study area. You don’t want to limit your topic or make it very narrow and at the same time, the research topic should be focused and sharp. Research topic should be developed meticulously and in a chronological order.
        <img style="float: right;" src="{{ asset('assets/img/marketing-agency/services-img2.jpg') }}" alt="image">
        </p>
        <h4>So where do you start?</h4>
        <p>The first place to start is by selecting the ideas that interest you. This is research and it will take good amount of your time going forward, so you must select an area you are keenly interested in. How, the ideas should have enough focus to be doable but not very narrow or you are going to lack enough information to work with. Do a write up of several ideas that are exciting. </p>

        <h4>Define your topic:</h4>

        <p>After a write up, the next step is synthesizing or defining your topic. If the topic is too general, you will never know what to focus on or what even the problem is because of so much information. But if it is also too narrow you run the risk of losing your hair due to lack of information.</p>
        <p>The best place to start is forming a general topic and then focusing it to a specific area. Assuming you are doing a master’s in business administration (MBA) finance option. There are so many areas to focus on. </p>
        <p>Now let’s say you work or intend to work in Capital markets authority. Your general topic can be around the performance of financial intermediaries under capital markets authority or developments going on in capital markets. </p>
        <p>The next step is to focus your study to let’s say determining the factors influencing the performance of derivatives market.</p>
        <p>Your research topic should be narrow enough so that you can cover the assigned pages or words in your degree requirements. The can narrow or expand the topic by adding or eliminating the:</p>
        <ul>
            <li>Time period (Years, decade or century)</li>
            <li>Specific population (Adults, species, nationality, sector or industry).</li>
            <li>Geographic (global, county, state, region and country).</li>
        </ul>

        <h4>Research Objectives:</h4>

        <p>Research objectives summarize the accomplishments that you set to achieve. Research objectives should be achievable, that is, you should design your study such that no matter what your results and findings are, they will add new information to the current literature and help advance the field.</p>

        <p>Research objectives should be <b>specific, measurable, achievable, realistic and time bound (smart)</b>. </p>

        <h4>How should your objectives be stated?</h4>

        <p>Your objectives should be stated using action verbs that are specific enough to be measured, for example: to compare, to calculate, to assess, to determine, to verify, to calculate, to describe, to explain, etc. Avoid the use of vague non-active verbs such as: to appreciate, to understand, to believe, to study, etc., because it is difficult to evaluate whether they have been achieved.<br>
        For instance, a master of business and administration study research topic can be like <i>“Accelerators of Futures Market Depth in Kenya”</i></p>

        <p>From the research topic, the research objectives could be:</p>
        <ol>
            <li>To determine the influence of liquidity of the underlying cash market on futures market depth.</li>
            <li>To establish the effect of investor education on the futures market depth.</li>
            <li>To examine the influence of volatility of the underlying cash market on futures market depth.</li>
        </ol>

        <div class="service-details-info">
            <div class="single-info-box">
                <h4>Client <br>orders</h4>
                <span>30+</span>
            </div>
            <div class="single-info-box">
                <h4>Derived Topics <br> so far</h4>
                <span>100+</span>
            </div>
            <div class="single-info-box">
                <h4>Referals <br>received</h4>
                <span>21+</span>
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
            <h5 class="modal-title text-center" id="exampleModalLongTitle">Get Customized Research Topic and objectives in 2days</h5>
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
                        <option selected value="Topic & Objective Development">Topic & Objective Development</option>
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
      