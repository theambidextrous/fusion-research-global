<style>
    .digital-agency-banner-content {
        max-width: 600px;
    }
    .digital-agency-banner-content h1 {
        font-size: 50px;
        font-weight: 700;
    }
</style>
<section class="digital-agency-banner">
    <div class="container">
        <div class="digital-agency-banner-content">
            <h1 class="wow fadeInUp">Region's Leading <br><span>Research & Analytics</span> <br>company</h1>
            <p class="wow fadeInUp">At {{ Config::get('app.name') }}, we value our customers'priorities and we work very hard to make sure that you get what you want, not only done well but also on time. </p>
            <a href="{{ route('sreq') }}" class="default-btn wow fadeInUp">
                <i class="bx bxs-cart-alt"></i>Request Service<span></span>
            </a>
        </div>
    </div>
</section>