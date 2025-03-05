<!-- About Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="row g-4 align-items-center mb-4">
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                <img class="img-fluid rounded" src="{{ asset($curdata['img']) }}">
            </div>
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
                <p class="d-inline-block border rounded text-primary fw-semi-bold py-1 px-3">
                    हाम्रो बारेमा</p>
                <h1 class="display-5 mb-4">{{ $curdata['title'] }}</h1>
                <p class="mb-4">{{ $curdata['desc'] }}</p>
                <div class="border rounded p-4">
                    <nav>
                        <div class="nav nav-tabs mb-3" id="nav-tab" role="tablist">
                            <button class="nav-link fw-semi-bold active" id="nav-story-tab" data-bs-toggle="tab"
                                data-bs-target="#nav-story" type="button" role="tab" aria-controls="nav-story"
                                aria-selected="true">
                                कथा</button>
                            <button class="nav-link fw-semi-bold" id="nav-mission-tab" data-bs-toggle="tab"
                                data-bs-target="#nav-mission" type="button" role="tab" aria-controls="nav-mission"
                                aria-selected="false">मिशन</button>
                            <button class="nav-link fw-semi-bold" id="nav-vision-tab" data-bs-toggle="tab"
                                data-bs-target="#nav-vision" type="button" role="tab" aria-controls="nav-vision"
                                aria-selected="false">दृष्टि</button>
                        </div>
                    </nav>
                    <div class="tab-content" id="nav-tabContent">
                        <div class="tab-pane fade show active" id="nav-story" role="tabpanel"
                            aria-labelledby="nav-story-tab">
                            {!! $curdata['story'] ?? '' !!}
                        </div>
                        <div class="tab-pane fade" id="nav-mission" role="tabpanel" aria-labelledby="nav-mission-tab">
                            {!! $curdata['mission'] ?? '' !!}
                        </div>
                        <div class="tab-pane fade" id="nav-vision" role="tabpanel" aria-labelledby="nav-vision-tab">
                            {!! $curdata['vision'] ?? '' !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- About End -->
