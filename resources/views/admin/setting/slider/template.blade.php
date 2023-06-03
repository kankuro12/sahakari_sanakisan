 <!-- Carousel Start -->
 @if ($sliders->count()>0)
 <div class="container-fluid p-0 mb-5 wow fadeIn" data-wow-delay="0.1s">
    <div id="header-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
        <div class="carousel-inner">
            @foreach ($sliders as $key=>$slider)

                <div class="carousel-item {{$key==0?'active':''}}">
                    <img class="w-100 d-none d-md-block" src="{{asset($slider->image)}}" alt="Image">
                    <img class="w-100 d-block d-md-none" src="{{asset($slider->mobile_image)}}" alt="Image">
                    {{-- <div class="carousel-caption">
                        <div class="container">
                            <div class="row justify-content-start">
                                <div class="col-lg-8">
                                    <p class="d-inline-block border border-white rounded text-primary fw-semi-bold py-1 px-3 animated slideInDown">
                                        {!! $slider->title!!}
                                    </p>
                                    <h1 class="display-1 mb-4 animated slideInDown"> {{$slider->subtitle}} </h1>
                                    <a href="{{$slider->link}}" style="color: {{$slider->fg}};background:{{$slider->bg}}" class="btn btn-primary py-3 px-5 animated slideInDown">{{$slider->link_title}}</a>
                                </div>
                            </div>
                        </div>
                    </div> --}}
                </div>
            @endforeach

        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#header-carousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</div>
 @endif
<!-- Carousel End -->
