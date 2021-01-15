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
        <h2>Research Methodology</h2>
    </div>
    </div>
</div>
<div class="service-details ptb-100">
    <div class="container">
    <!-- <div class="service-details-image">
        <img src="{{ asset('assets/img/marketing-agency/services-img1.jpg') }}" alt="image">
    </div> -->
    <div class="service-details-content">
        <h3>Research Methodology</h3>
        
        <p>A philosophical argument leads a researcher into picking the research design. To enable the researcher to decide which approach to adopt and why. Strategies and methods will differ with different researchers.</p> 
        
        <p>There are really only two major ways of ‘looking at the world.</p> 
        <ol>
            <li>Quantitative paradigm - One view regards the world as largely objective and measurable in terms of the use of numbers. 
            </li>
            <li>Qualitative paradigm - The other view suggests that the world is largely subjective (open to several interpretations) and non- measurable. </li>
        </ol>
        <img style="float: right;width:650px;" src="{{ asset('assets/img/marketing-agency/services-img7.jpg') }}" alt="image">
        </p>

        <h4>Types of Philosophies</h4>

        <p><b>Methodology</b> - the understanding of how reality affects the way we gain knowledge of reality and eventually how we conduct research about reality.</p>
        <p><b>Ontology</b> - is concerned with the nature of reality. To a greater extent than epistemological considerations, this raises questions of the assumption’s researchers have about the way the world operates and the commitment held to particular views.</p>
        <p><b>Epistemology</b> - concerns what constitutes acceptable knowledge in a field of study. The key epistemological question is whether the approach to the study of the social world, including that of management and business, can be the same as the approach to studying the natural sciences. </p>

        <h4>Types of Epistemology</h4>
        
        <p><b>Realism</b> - relates to scientific enquiry with the perspective that what the senses show us as reality is the truth: that objects have an existing independence of the human mind. Thus, the critical realist’s position is that our knowledge of reality is a result of social conditioning.</p> 
        
        <p><b>Interpretivism</b> - advocates that it is necessary for the researcher to understand differences between humans in our role as social actors. This emphasizes the difference between conducting research among people rather than objects such as trucks and computers.
        </p> 

        <p><b>Pragmatism</b> - argues that the most important determinant of the research philosophy adopted is the research question. Pragmatism notes that mixed methods, (both qualitative and quantitative) are possible, and possibly highly appropriate, within one study.</p>

        <p><b>Positivism</b> - adopts the philosophical stance of the natural scientist, that is by working with an observable social reality and that the end product of such research can be law-like generalizations similar to those produced by the physical and natural scientists. In positivism the role of the researcher is limited to data collection and interpretation in an objective way. In these types of studies research findings are usually observable and quantifiable and depend on quantifiable observations that lead to statistical analyses. Positivism is from logically structured empirical review while phenomenological approach gives attention to qualitative approach through understanding of how a particular phenomenon is perceived.</p>
        
        <h4>Research Design</h4>
        <p>Research design is the plan and a mechanism used for the collection, measurement and analysis of the data. A plan for a study, providing the overall framework for collecting data. That is, a plan for selecting subjects, research sites, and data collection procedures to answer the research question(s). The choice of the design is based on the design's benefits that are relevant in achievement of the study's aims.</p>

        <h4>Types of Research Designs</h4>


        <p><b>Action Research Design</b> - The essentials of action research design follow a characteristic cycle whereby initially an exploratory stance is adopted, where an understanding of a problem is developed and plans are made for some form of interventionary strategy. Then the intervention is carried out (the "action" in Action Research) during which time, pertinent observations are collected in various forms. The new interventional strategies are carried out, and this cyclic process repeats, continuing until a sufficient understanding of (or a valid implementation solution for) the problem is achieved. The protocol is iterative or cyclical in nature and is intended to foster deeper understanding of a given situation, starting with conceptualizing and particularizing the problem and moving through several interventions and evaluations.</p> 
        <p><b>Case Study Design</b> - A case study is an in-depth study of a particular research problem rather than a sweeping statistical survey or comprehensive comparative inquiry. It is often used to narrow down a very broad field of research into one or a few easily researchable examples. The case study research design is also useful for testing whether a specific theory and model actually applies to phenomena in the real world. It is a useful design when not much is known about an issue or phenomenon.</p> 
        <p><b>Causal Design</b> - Causality studies may be thought of as understanding a phenomenon in terms of conditional statements in the form, “If X, then Y.” This type of research is used to measure what impact a specific change will have on existing norms and assumptions. Most social scientists seek causal explanations that reflect tests of hypotheses. Causal effect (nomothetic perspective) occurs when variation in one phenomenon, an independent variable, leads to or results, on average, in variation in another phenomenon, the dependent variable.</p> 


        <p>Conditions necessary for determining causality:</p>
        <ul>
            <li>Empirical association -- a valid conclusion is based on finding an association between the independent variable and the dependent variable.</li> 
            <li>Appropriate time order -- to conclude that causation was involved, one must see that cases were exposed to variation in the independent variable before variation in the dependent variable.</li> 
            <li>Non-spuriousness -- a relationship between two variables that is not due to variation in a third variable</li>
        </ul>

        <p><b>Cohort Design</b> - Often used in the medical sciences, but also found in the applied social sciences, a cohort study generally refers to a study conducted over a period of time involving members of a population which the subject or representative member comes from, and who are united by some commonality or similarity. Using a quantitative framework, a cohort study makes note of statistical occurrence within a specialized subgroup, united by same or similar characteristics that are relevant to the research problem being investigated, rather than studying statistical occurrence within the general population. Using a qualitative framework, cohort studies generally gather data using methods of observation. Cohorts can be either "open" or "closed</p>
        <p><b>Cross-Sectional Design</b> - Cross-sectional research designs have three distinctive features: no time dimension; a reliance on existing differences rather than change following intervention; and, groups are selected based on existing differences rather than random allocation. The cross-sectional design can only measure differences between or from among a variety of people, subjects, or phenomena rather than a process of change. As such, researchers using this design can only employ a relatively passive approach to making causal inferences based on findings</p>
        <p><b>Descriptive Design</b> - Descriptive research designs help provide answers to the questions of who, what, when, where, and how associated with a particular research problem; a descriptive study cannot conclusively ascertain answers to why. Descriptive research is used to obtain information concerning the current status of the phenomena and to describe "what exists" with respect to variables or conditions in a situation</p>
        <p><b>Experimental Design</b> - A blueprint of the procedure that enables the researcher to maintain control over all factors that may affect the result of an experiment. In doing this, the researcher attempts to determine or predict what may occur. Experimental research is often used where there is time priority in a causal relationship (cause precedes effect), there is consistency in a causal relationship (a cause will always lead to the same effect), and the magnitude of the correlation is great. The classic experimental design specifies an experimental group and a control group. The independent variable is administered to the experimental group and not to the control group, and both groups are measured on the same dependent variable. Subsequent experimental designs have used more groups and more measurements over longer periods. True experiments must have control randomization, and manipulation</p>
        <p><b>Exploratory Design</b> - An exploratory design is conducted about a research problem when there are few or no earlier studies to refer to or rely upon to predict an outcome. The focus is on gaining insights and familiarity for later investigation or undertaken when research problems are in a preliminary stage of investigation. Exploratory designs are often used to establish an understanding of how best to proceed in studying an issue or what methodology would effectively apply to gathering information about the issue.</p>


        <p>The goals of exploratory research are intended to produce the following possible insights:</p>
        <ul>
            <li>Familiarity with basic details, settings, and concerns.</li> 
            <li>Well-grounded picture of the situation being developed.</li> 
            <li>Generation of new ideas and assumptions.</li> 
            <li>Development of tentative theories or hypotheses.</li> 
            <li>Determination about whether a study is feasible in the future.</li> 
            <li>Issues get refined for more systematic investigation and formulation of new research questions.</li> 
            <li>Direction for future research and techniques get developed.</li> 
        </ul>

        <p><b>Historical Design</b> - The purpose of a historical research design is to collect, verify, and synthesize evidence from the past to establish facts that defend or refute a hypothesis. It uses secondary sources and a variety of primary documentary evidence, such as, diaries, official records, reports, archives, and non-textual information [maps, pictures, audio and visual recordings]. The limitation is that the sources must be both authentic and valid</p>

        <p><b>Longitudinal Design</b> - A longitudinal study follows the same sample over time and makes repeated observations. For example, with longitudinal surveys, the same group of people is interviewed at regular intervals, enabling researchers to track changes over time and to relate them to variables that might explain why the changes occur. Longitudinal research designs describe patterns of change and help establish the direction and magnitude of causal relationships. Measurements are taken on each variable over two or more distinct time periods. This allows the researcher to measure change in variables over time. It is a type of observational study sometimes referred to as a panel study.</p>

        <p><b>Meta-Analysis Design</b> - Meta-analysis is an analytical methodology designed to systematically evaluate and summarize the results from a number of individual studies, thereby, increasing the overall sample size and the ability of the researcher to study effects of interest. The purpose is to not simply summarize existing knowledge, but to develop a new understanding of a research problem using synoptic reasoning. The main objectives of metanalysis include analyzing differences in the results among studies and increasing the precision by which effects are estimated. A well-designed meta-analysis depends upon strict adherence to the criteria used for selecting studies and the availability of information in each study to properly analyze their findings. Lack of information can severely limit the type of analyses and conclusions that can be reached. In addition, the more dissimilarity there is in the results among individual studies [heterogeneity], the more difficult it is to justify interpretations that govern a valid synopsis of results.</p>

        <p>A meta-analysis needs to fulfill the following requirements to ensure the validity of your findings:</p> 

        <ul>
            <li>Clearly defined description of objectives, including precise definitions of the variables and outcomes that are being evaluated; </li>
            <li>A well-reasoned and well-documented justification for identification and selection of the studies;</li>
            <li>Assessment and explicit acknowledgment of any researcher bias in the identification and selection of those studies;</li>
            <li>Description and evaluation of the degree of heterogeneity among the sample size of studies reviewed; and</li>
            <li>Justification of the techniques used to evaluate the studies.</li>
        </ul>

        <p><b>Observational Design</b> - This type of research design draws a conclusion by comparing subjects against a control group, in cases where the researcher has no control over the experiment. There are two general types of observational designs. In direct observations, people know that you are watching them. Unobtrusive measures involve any method for studying behavior where individuals do not know they are being observed. An observational study allows a useful insight into a phenomenon and avoids the ethical and practical difficulties of setting up a large and project cumbersome research.</p>
        
        <h4>Target Population</h4>

        <p>For study to be credible, data are to be collected from the respondents. It is not possible to collect data from every one of the populations. Population is a very large number of persons or objects or items which is not feasible to manage. A population is a group of individuals, persons, objects, or items from which samples are taken for measurement. For research purpose a part of the population is to be selected.</p>

        <h4>Sample and Sampling Techniques</h4>

        <p>Sampling is the process in which a representative part of a population for the purpose of determining parameters or characteristics of the whole population is selected. This is called a sample. It is easier to contact a smaller part of the population for data collection. It can be done within a limited time, efforts and with minimum cost.</p>

        <h4>Types of Sampling </h4>

        <p><b>Convenience Sampling (ease of access)</b> - Convenience sampling defined as a group of individuals believed to be representative of the population from which it is selected, but chosen because it is close at hand rather than being randomly selected. </p>

        <ul>
            <li>Selection of the sample is at the convenience of the researcher Biased e.g. when you simply ask any patient in your clinic who is willing to participate.</li>
        </ul>

        
        <p><b>Theoretical Sample </b>- The process of data collection for generating theory whereby the analyst jointly collects, codes, and analyzes his data and decides what data to collect next and where to find them, in order to develop the theory as it emerges” (Glaser and Strauss, 1967). The sampling process is entirely controlled by the emerging theory</p> 
        
        <p><b>Purposive Sampling (judgmental)</b> - The researcher attempts to obtain sample that appears to him/her to be representative of the population.</p> 
        
        <p><b>Snowball Sampling (friend of friend)</b> - You initially contact a few potential respondents and then ask them whether they know of anybody with the same characteristics that you are looking for in your research. For example, if you wanted to interview a sample of vegetarians / cyclists / people with a particular disability / people who support a particular political party etc</p>. 
        
        <p><b>Extreme or Deviant Case</b> - Learning from highly unusual manifestations of the phenomenon of interest, such as outstanding success/notable failures, top of the class/dropouts, exotic events, crises. To obtain information on unusual cases, which can be especially ‘problematic’ or especially ‘good’.</p> 
        
        <p><b>Intensity</b> - Information-rich cases that manifest the phenomenon intensely, but not extremely, such as good students/poor students, above average/below average.</p> 
        
        <p><b>Maximum Variation</b> - Purposefully picking a wide range of variation on dimensions of interest...documents unique or diverse variations that have emerged in adapting to different conditions. Identifies important common patterns that cut across variations. To obtain information about the significance of various circumstances for processes and outcome (e.g. three to four cases that are very different on one dimension: e.g. largest, median and smallest size; government, aided, not-for-profit and commercial funding patterns; city, town and rural area).</p> 
        
        <p><b>Homogeneous</b> - Focuses, reduces variation, simplifies analysis, facilitates group interviewing.</p> 
        
        <p><b>Typical Case</b> - Illustrates or highlights what is typical, normal, average. The case is specifically selected because it is not in any way atypical, extreme, deviant or intensely unusual. This strategy is often used when the units of analysis are large, as for example in studies of villages in developing countries. Selecting a typical village allows the research to illustrate the general process that occurs. This strategy is particularly useful if the research report will predominantly be read by people who are unfamiliar with the area of research.</p> 
        
        <p><b>Stratified Purposeful</b> - Illustrates characteristics of particular subgroups of interest; facilitates comparisons. The technique is a kind of ‘statistically non representative stratified sampling’ because, while it is similar to its quantitative counterpart, it must not be seen as a sampling strategy that allows statistical generalization to the large population.</p> 
        
        <p><b>Critical Case</b> - Permits logical generalization and maximum application of information to other cases because if it's true of this once case it's likely to be true of all other cases.  To test a hypothesis by choosing the case that permits logical deductions of the type, “If this is valid for this case, then it should apply to all cases.” Or “If it is not valid for this case, it is unlikely to be valid for any other cases”.</p> 
        
        <p><b>Key Informant Sample</b> - Key informants, as a result of their personal skills, or position within a society, are able to provide more information and a deeper insight into what is going on around them. Characteristics of an "ideal" key informant:</p> 

        <ul>
            <li>Role in community</li>
            <li>Knowledge</li>
            <li>Willingness</li>
            <li>Communicability</li> 
            <li>Unbiased</li>
        </ul>

        <p><b>Criterion</b> - All cases that meet a set of criteria are selected. In criterion sampling it is important to select the criteria carefully, so as to define cases that will provide detailed and rich data relevant to the particular research problem. For example, all former clients of an intensive care unit who return to intensive care with the same complaint within three weeks may constitute a sample for in-depth, qualitative study. These criteria would facilitate a study of the effectiveness of after-care programs attached to intensive care units. </p>

        <h4>Opportunistic</h4>

        <p>New opportunities to recruit participants or to gain access to a new site may develop after the fieldwork has begun. A researcher studying heart attacks may, for example, meet a cardiologist while interviewing one of his or her patients. The cardiologist may suggest how the researcher can contact other cardiologists who would be willing to refer clients to the researcher.</p>

        <p><b>Random Purposeful</b> - (Not feasible to small sample size) Adds credibility to sample when potential purposeful sample is larger than one can handle. Reduces judgment within a purposeful category - bias. (Not for generalizations or representativeness)</p> 
        
        <p><b>Volunteer Sampling</b> - Samples are often drawn through advertising, requesting people to volunteer to participate in the study. This can be particularly useful when potential participants are dispersed throughout the community or difficult to contact directly. However, volunteer samples are typically biased in particular ways. For example, a volunteer sample of people living with HIV/AIDS will systematically be biased to exclude people who are denying or ignoring their HIV status.</p> 


        <h3>Piloting</h3>
        <h4>Reliability </h4>

        <p>To determine the internal consistency of each question. Reliability tests can be carried out using the:</p>

        
        <p><b>Cohen’s kappa Coefficient</b> interpreted as follows: values ≤ 0 as indicating no agreement and 0.01–0.20 as none to slight, 0.21–0.40 as fair, 0.41– 0.60 as moderate, 0.61–0.80 as substantial, and 0.81–1.00 as almost perfect agreement (Berk & Campbell, 1976; Valiquette, Lesage, Cyr & Toupin, 1994).</p>
        
        <p><b>Cronbach’s Alpha Coefficient</b> valued from 0 to 1, where the higher the value, the better the alpha. 0.7 is the minimum rated value for the alpha.</p> 
        
        <h4>Validity </h4>

        
        <p><b>Content validity</b> - a logical process where connections between the test items and the job-related tasks are established through expert judgment)</p> 
        
        <p><b>Face validity</b> - determined by a review of the items anyone examines and other stakeholders developing an informed opinion as to whether or not the test is measuring what it is supposed to measure</p>
        
        <p><b>Construct validity</b> - involves statistical tests to be interpreted as a measure of some attribute or quality which is not operationally defined. It can be tested by use of Factor analysis was conducted using KMO (Kaiser-Meyer-Olkin) with KMO Value/Degree of Common Variance as follows:</p>

        <i>0.00 to 0.49 unacceptable.</i><br>
        <i>0.50 to 0.59 miserable.</i><br>
        <i>0.60 to 0.69 mediocre.</i><br>
        <i>0.70 to 0.79 middling.</i><br>
        <i>0.80 to 0.89 meritorious.</i><br>
        <i>0.90 to 1.00 marvellous</i><br>

        <br>
        <p>Factor analysis involves the following processes:</p>

        
        <p><b>Communalities</b> - According to Kaiser (1974), factor-loading values that are greater than 0.4 should be accepted and values below 0.5 should lead to collection of more data to help researcher to determine the values to include.</p>
        
        <p><b>Total Variance Explained</b> - A factor analysis is run using the principal component analysis to generate a number of factors from all the statements of the questionnaire.</p> 
        
        <p><b>Unrotated Factor Loadings</b> – provides a listing of all the possible factor loadings to be Rotated.</p>
        
        <p><b>Rotated Factor Loadings</b> - Rotated factor loadings are generated using the varimax rotation method to ensure that the factors are orthogonal (that the factors were not correlated to each other).</p> 


        <!-- The issue of validity begs the question of  -->


        <div class="service-details-info">
            <div class="single-info-box">
                <h4>Client <br>orders</h4>
                <span>500+</span>
            </div>
            <div class="single-info-box">
                <h4>Research Methodologies <br> Done</h4>
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
      