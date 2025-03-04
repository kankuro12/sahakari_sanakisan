@php
    $data =
        getSetting('contact') ??
        ((object) [
            'map' => '',
            'email' => '',
            'phone' => '',
            'addr' => '',
            'others' => [],
        ]);
@endphp
<p class="mb-2 d-flex" style="align-items: center; word-break: break-all;"><i class="fa fa-map-marker-alt me-3" ></i> <span class="text-wrap">{{ $data->addr }}</span></p>
<p class="mb-2 d-flex" style="align-items: center; word-break: break-all;"><i class="fa fa-phone-alt me-3" ></i> <span style="word-wrap: break-word">{{ $data->phone }}</span></p>
<p class="mb-2 d-flex" style="align-items: center; word-break: break-all;"><i class="fa fa-envelope me-3" ></i> <span class="text-wrap">{{ $data->email }}</span></p>
