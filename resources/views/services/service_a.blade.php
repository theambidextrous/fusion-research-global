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
        <h2>Concept Paper</h2>
    </div>
    </div>
</div>
<div class="service-details ptb-100">
    <div class="container">
    <!-- <div class="service-details-image">
        <img src="{{ asset('assets/img/marketing-agency/services-img1.jpg') }}" alt="image">
    </div> -->
    <div class="service-details-content">
        <h3>What is a concept paper and why is it important?</h3>
        
        <p>Every research project is born from a simple idea. A gap in the literature or a problem that need to be solved. A concept paper enables in putting thoughts and ideas into paper for consideration for research. It is from the concept paper that one develops the research proposal which can either be business or academic oriented. Most students, and especially the postgraduate students who have a mandatory requirement of undertaking research, usually goes direct to the research proposal.
        <img style="float: right;" src="{{ asset('assets/img/marketing-agency/services-img1.jpg') }}" alt="image">
        </p>
        <p>Some quotas also have professed the school of thought that a concept paper and research proposal is the same. Although they may seem similar, they are different in the process. The concept paper aim is to capture the thoughts and ideas while the research proposal captures the ideas in a structured manner for approval to research. Therefore, in order to write a simple concept paper, the following steps are applicable:</p>

        <h4>Title:</h4>

        <p>The first place to start is developing a title. It is not a mandatory to start with the title but it is a good idea because it keeps within the bounds of what you want to research. Alternatively, if you have the problem already, you can work around it to come up with interesting title.</p>
        <p>The title should be as brief as possible and to the point such that by a glance one would know exactly the paper’s intention. More importantly, the title should show the main study variables or objectives. Example: <i>“Leveraging on Mobile Payment Methods to gain Competitive Advantage by local based businesses”</i></p>
        <p>From this title, mobile payment methods will form the independent variable that will influence the dependent variable (Competitive advantage).</p>

        <h4>Introduction:</h4>
        
        <p>An introduction is like the board room of the concept paper as it determines a lot on the concept and why the research is important or whether it is viable in the first place. In introduction, the main idea is to state your understanding on the relationship between the two variables (Is there already a relationship or a link between the two variables).</p>
        <p>The best way to do this is by giving a brief on let say, mobile payment methods will contribute to competitive advantage or company opportunities. But first, you must define the concept of mobile payment methods (what it is and the highlight some example).</p>

        <h4>Need for the Study:</h4>

        <p>Who dies if the concept is not implemented? This area justifies the importance or the need of conducting the study. What has been happening in the industry or company that needs to be improved or radically changed? </p>
        <p>This section should address the pertinent societal need. The need of the study should have concrete evidence in the sense that the source of the need must be documented and verifiable. It is also important to look at what other scholars have done on the concept previously, and whether this is enough to answer the questions intended for the study.</p>

        <h4>Background:</h4>
        
        <p>This section shows that some research has been conducted on the area of interest, however there still exit a gap that needs to filled. The section highlights several studies that have been undertaken on the topical area summarizing their conclusive evidence and relevance to the study area.</p> 
        <p>This section can be structured using funnel approach that is worldview, regional, and local perspective. For a shorter-version concept paper this may not count however it is imperative to show whether there are studies done on this area, whether the studies a limited in terms of context, or geographical context and what are the gaps. Did the authors achieve what they set out to achieve? What need to be done to solve this gap?</p>

        <h4>Research Problem:</h4>

        This section seeks to ask, what is currently happening that is off? When developing this section these are some of the important questions that you need to ask yourself:
        <ul>
            <li>What is the statement about an area of concern?</li>
            <li>What condition needs to be improved?</li>
            <li>What is the difficulty that needs to be eliminated?</li>
            <li>What is the troubling question that exists in scholarly literature, in theory, or in practice that points to the need for meaningful understanding and deliberate investigation?</li>
        </ul>
        <p>Answer to any of these questions will lead to a good problem statement, but you need a structure of how to develop it;  And the first place to start is to highlight the importance of the topic being studied. This should orient the significance of the study and the research objectives/hypothesis/questions that will follow.</p>
        <p>Then discuss the problem by placing it in the context that defines the parameters of what is to be researched.</p> 
        <p>Answer the overarching question, so what? After you highlight and articulate the problem, what need to be done? This should convey the study importance or benefits. In other words, this paragraph should say the study is not trivial.</p> 
        
        <h4>Research Questions & Hypothesis:</h4>

        <p>These are the broad and specific objectives the research seeks to answer. It should be stated starting with the words “To” and linked to the general and the specific area where the study is to be undertaken. Both the general and the specific objectives must be regularized to conform with the topic of the concept. For Example;</p>
        <br>
        <i>The main objective of this research is to determine the influence of mobile payment methods on competitive advantage of food processing industry in (Kenya or any other country or state). The study will be guided by the following specific objectives:</i>
        <br>
        <ol>
            <li><i>To determine the influence of perceived risks on the use of mobile payment methods to gain competitive advantage by local based businesses.</i></li>
            <li><i>To determine the influence of M-Payment characteristics (mobility,reachability, convenience, and compatibility) on the use of mobile payment methods to gain competitive advantage by local based businesses.</i></li>
            <li><i>To assess the influence of personal innovativeness on use of mobile payment methods to gain competitive advantage by local based businesses</i></li>
            <li><i>Research hypothesis or questions are derived from the research objectives.</i></li>
        </ol>

        <h4>Research Methodology:</h4>
        
        <p>Research methodology section highlights how the concept objectives will be achieved once they reach the research level. It specifically shows the research design, sources of data, target population, sampling design, data collection and analysis methods.</p>
        
        <h4>Research Timeline:</h4>
        
        <p>Though this is not important, it is good to show your expected timelines, your research milestones and what your budget. This gives the research a touch of credibility. </p>
        
        <h4>References:</h4>

        <p>The final bit is to provide references. Referencing can be done using APA, Harvard, Turabian,Chicago, and MLA formats depending on the school or course work.</p>

        <div class="service-details-info">
            <div class="single-info-box">
                <h4>Client <br>orders</h4>
                <span>64+</span>
            </div>
            <div class="single-info-box">
                <h4>Completed Concept papers</h4>
                <span>100+</span>
            </div>
            <div class="single-info-box">
                <h4>Referals <br>received</h4>
                <span>50+</span>
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
            <h5 class="modal-title text-center" id="exampleModalLongTitle">Get a Customized Concept Paper in 3days</h5>
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
                        <option selected value="Concept Paper">Concept Paper</option>
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
      