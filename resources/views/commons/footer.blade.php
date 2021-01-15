<style>
.single-footer-widget .social li a {
    background-color: #ffffff;
}
</style>
<footer class="footer-area">
    <div class="container">
    <div class="row">
        <div class="col-lg-4 col-md-6 col-sm-6">
            <div class="single-footer-widget">
                <div class="logo">
                <h1 style="color:#fff;font-size: 1.75rem;">{{ Config::get('app.name') }}</h1>
                </div>
                <p>
                We are an academic research, data collection, data analysis, and publication management consulting firm based in Nairobi.
                </p>
            </div>
        </div>
        <div class="col-lg-2 col-md-6 col-sm-6">
            <div class="single-footer-widget">
                <h3>Company</h3>
                <ul class="services-list">
                    <li><a href="{{ route('about') }}">About Us</a></li>
                    <li><a href="{{ route('contact') }}">Contact Us</a></li>
                    <li><a href="#">Blog</a></li>
                </ul>
            </div>
        </div>
        <div class="col-lg-2 col-md-6 col-sm-6">
            <div class="single-footer-widget">
                <h3>Support</h3>
                <ul class="support-list">
                    <li><a href="#">FAQ's</a></li>
                    <li><a href="#">Privacy Policy</a></li>
                    <li><a href="#">Terms & Conditions</a></li>
                </ul>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-6">
            <div class="single-footer-widget">
                <h3>Contact Info</h3>
                <ul class="footer-contact-info">
                <li>Location: 
                <a href="#" target="_blank">{{ Config::get('app.address') }} </a></li>
                <li>Email: <a href="mailto:{{ Config::get('app.email') }}"><span class="" data-cfemail="{{ Config::get('app.email') }}">{{ Config::get('app.email') }}</span></a></li>
                <li>Phone: <a href="tel:+321754754">{{ Config::get('app.phone') }}</a></li>
                </ul>
                <ul class="social">
                <li><a href="#" target="_blank"><i class="bx bxl-facebook"></i></a></li>
                <li><a href="#" target="_blank"><i class="bx bxl-twitter"></i></a></li>
                <li><a href="#" target="_blank"><i class="bx bxl-linkedin"></i></a></li>
                <li><a href="#" target="_blank"><i class="bx bxl-instagram"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="copyright-area">
        <p>Copyright © {{ date('Y') }} {{ Config::get('app.name') }}</p>
    </div>
    </div>
</footer>