<div class="navbar-area bg-white p-relative">
    <div class="spacle-responsive-nav">
        <div class="container">
        <div class="spacle-responsive-menu">
            <div class="logo">
                <a href="#">
                <img src="{{ asset('assets/img/logo.png') }}" width="350px" alt="logo">
                </a>
            </div>
        </div>
        </div>
    </div>
    <div class="spacle-nav">
        <div class="container">
        <nav class="navbar navbar-expand-md navbar-light">
            <a class="navbar-brand" href="{{ route('index') }}">
            <img src="{{ asset('assets/img/logo.png') }}" width="350px" alt="logo">
            </a>
            <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a href="{{ route('index') }}" class="nav-link">Home</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('about') }}" class="nav-link">About us</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">Our services <i class='bx bx-chevron-down'></i></a>
                        <ul class="dropdown-menu mega-dropdown-menu">
                            <li class="nav-item">
                                <h3>Research</h3>
                                <a href="{{ route('service_a') }}" class="nav-link">Concept Paper</a>
                                <a href="{{ route('service_b') }}" class="nav-link">Topic & Objective Development</a>
                                <a href="{{ route('service_c') }}" class="nav-link">Background & Pilot of the Study</a>
                                <a href="{{ route('service_d') }}" class="nav-link">Literature Review</a>
                                <a href="{{ route('service_e') }}" class="nav-link">Research Methodology</a>
                                <a href="{{ route('plag') }}" class="nav-link">Plagiarism Management</a>
                            </li>
                            <li class="nav-item">
                                <h3>Analytics</h3>
                                <a href="{{ route('service_f') }}" class="nav-link">Awesome chapter 4</a>
                                <a href="{{ route('service_g') }}" class="nav-link">Awesome chapter 5</a>
                                <h3>Trainings</h3>
                                <a href="{{ route('training_a') }}" class="nav-link">SPSS Training</a>
                                <a href="{{ route('training_b') }}" class="nav-link">Excel Training</a>
                                <a href="{{ route('training_c') }}" class="nav-link">Eviews Training</a>
                            </li>
                        </ul>
                    </li>

                    <li class="nav-item">
                        <a href="{{ route('contact') }}" class="nav-link">Contact</a>
                    </li>

                    <li class="nav-item">
                        <a href="#" class="nav-link">Blog</a>
                    </li>
                </ul>
                <div class="others-options">
                    <a href="{{ route('callback') }}" class="default-btn mr-2">
                    <i class="bx bxs-phone-outgoing"></i>Request a call back<span></span>
                    </a>
                    <a href="{{ route('contact') }}" class="default-btn black-btn">
                    <i class="bx bx-log-in"></i>Inquire<span></span>
                    </a>
                </div>
            </div>
        </nav>
        </div>
    </div>
</div>