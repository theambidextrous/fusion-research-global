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
.nbr{
    font-weight:400;
    padding:25px;
    font-size:34px;
    color:#025d94;
}
.hh2{
    color:#00bee6!important;
}
</style>
<div class="page-title-area">
    <div class="container">
    <div class="page-title-content">
        <h2>About Us</h2>
        <p>The {{ Config::get('app.name') }} Story</p>
    </div>
    </div>
</div>
<section class="about-area ptb-100">
    <div class="container">
    <div class="row align-items-center">
        <div class="col-lg-6 col-md-12">
            <div class="about-content">
                <!-- <span class="sub-title">How we are Founded</span> -->
                <h2 class="hh2">About {{ Config::get('app.name') }}</h2>
                <p>
                Fusion Research Global is an academic research, data collection, data analysis, and publication management consulting firm based in Nairobi. It is one of the fastest-growing academic consulting firms with sufficient experts from every academic field.</p> 
                
                <p>At Fusion Research Global, we cover both masters and doctoral degrees and guide our clients up to the final stage of publication. We assist clients in various types of research and deploy an array of various both quantitative and qualitative to the satisfaction of our clients.</p>
                
                <p>We are also invested in training clients who want to transfer data analysis skills to the workplace or for their personal career growth. 
                Rigorous quality control process is at the heart of what we do and this has earned us unparalleled reputation, referrals and good customer relationship over time.</p>                
            </div>
        </div>
        <div class="col-lg-6 col-md-12">
            <div class="about-image">
                <img src="{{asset('assets/img/marketing-agency/about-image.jpg')}}" alt="image">
            </div>
        </div>
    </div>
    </div>
</section>


<section class="about-area ptb-100" style="background:aliceblue;">
    <div class="container">
    <div class="row">
        
        <div class="col-lg-12 col-md-12">
            <!-- <span class="sub-title">Why us</span> -->
            <h2 class="hh2">Some great reasons to choose us</h2>
        </div>
        <div class="col-lg-6 col-md-12">
            <div class="about-content">
                <p><b class="nbr">→</b> Fusion Research Global offers a range of academic services at affordable and competitive student price. We are keenly concerned about the success of the students and seek to eliminate all the bottlenecks that students in all academic levels face.</p> 
                
                <p><b class="nbr">→</b> We emphasize on delivering quality services as we value our reputation more than anything else. To achieve this, we ensure that our client concerns are handled by the best in the profession and that everything is double-checked for quality purposes.</p>

                <p><b class="nbr">→</b> We save your time. Students especially in postgraduate levels always face struggle completing their Master’s or PhD thesis due to time limits and incessant corrections from supervisors. On average, a master’s research project can take months and even years to complete.</p>
            </div>
        </div>
        <div class="col-lg-6 col-md-12">
            <div class="about-content">                
                <p><b class="nbr">→</b> At Fusion Research Global we eliminate back and forth by offering quality research papers and working with short-time milestones, such as completing data collection and data analysis in a week.</p> 
                
                <p><b class="nbr">→</b> We save you a lot of time allowing you to achieve your course deadlines. For all your academic research needs, Fusion Research Global is the way to go.</p>
            </div>
        </div>
    </div>
    </div>
</section>


<section class="partner-area pt-70 pb-70 bg-f8fbfa">
    <div class="container">
    <div class="row align-items-center">
        <div class="col-lg-3 col-md-12">
            <div class="partner-title">
                <h3>Recommended by:</h3>
            </div>
        </div>
        <div class="col-lg-9 col-md-12">
            <div class="partner-slides owl-carousel owl-theme">
                <div class="single-partner-item">
                <a href="#">
                <img src="assets/img/partner-image/1.png" alt="image">
                </a>
                </div>
                <div class="single-partner-item">
                <a href="#">
                <img src="assets/img/partner-image/2.png" alt="image">
                </a>
                </div>
                <div class="single-partner-item">
                <a href="#">
                <img src="assets/img/partner-image/3.png" alt="image">
                </a>
                </div>
                <div class="single-partner-item">
                <a href="#">
                <img src="assets/img/partner-image/4.png" alt="image">
                </a>
                </div>
            </div>
        </div>
    </div>
    </div>
</section>

<section class="free-trial-area ptb-100 bg-f4f5fe">
    <div class="container">
    <div class="free-trial-content">
        <h2>We cover both masters and doctoral degrees and guide our clients up to the final stage of publication</h2>
        <p>Qualify yourself & recognize the value of your paper</p>
        <a href="{{ route('callback') }}" class="default-btn black-btn"><i class="bx bxs-phone-outgoing"></i> Request a Call Back <span></span></a>
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
      