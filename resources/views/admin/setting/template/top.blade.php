<style>
    .top-bar {
        background: white;
    }
</style>
<div class="top-bar row gx-0 align-items-center d-none d-lg-flex">
    <div class="col-lg-6 px-5 text-start">
        <small><i class="fa fa-map-marker-alt text-primary me-2"></i>{{ $curdata['address'] }}</small>
        <small class="ms-4"><i class="fa fa-clock text-primary me-2"></i>{{ $curdata['opening'] }}</small>
    </div>
    <div class="col-lg-6 px-5 text-end">
        <small>
            <a href="mailto:{{ $curdata['email'] }}">
                <i class="fa fa-envelope text-primary me-2"></i>{{ $curdata['email'] }}
            </a>
        </small>
        @php
            $phones = explode(',', $curdata['phone']);
        @endphp

        @foreach ($phones as $phone)
            @php $phone = trim($phone); @endphp
            <small class="ms-4">
                <a href="tel:{{ $phone }}">
                    <i class="fa fa-phone-alt text-primary me-2"></i>{{ $phone }}
                </a>
            </small>
        @endforeach


    </div>
</div>
