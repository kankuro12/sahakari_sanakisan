 <!-- Footer Start -->
 <div class="container-fluid bg-dark text-light footer mt-5 py-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container py-5">
        <div class="row g-5">
            <div class="col-lg-3 col-md-6">
                <h4 class="text-white mb-4">Our Office</h4>
                @includeIf('front.includes.footeraddr')

                @includeIf('front.includes.footersocial')
            </div>
            <div class="col-lg-3 col-md-6">
                @includeIf('front.includes.footerser')
            </div>
            <div class="col-lg-3 col-md-6">
                <h4 class="text-white mb-4">Quick Links</h4>
                <a class="btn btn-link" href="{{route('team.type')}}">Committees</a>
                <a class="btn btn-link" href="{{route('service.types')}}">Our Services</a>
                <a class="btn btn-link" href="{{route('page.type',['type'=>'about'])}}">About Us</a>
                <a class="btn btn-link" href="{{route('contact')}}">Contact Us</a>
                <a class="btn btn-link" href="{{route('faq')}}">FAQs</a>
            </div>
            <div class="col-lg-3 col-md-6">
                @includeIf('front.includes.footermap')
            </div>
        </div>
    </div>
</div>
<!-- Footer End -->
