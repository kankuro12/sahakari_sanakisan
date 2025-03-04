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
<p class="mb-2" class="d-flex"><i class="fa fa-map-marker me-3"></i> <span
        style="word-wrap: break-word">{{ $data->addr }}</span></p>
<p class="mb-2" class="d-flex"><i class="fa fa-phone me-3"></i> <span
        style="word-wrap: break-word">{{ $data->phone }}</span></p>
<p class="mb-2" class="d-flex"><i class="fa fa-envelope me-3"></i> <span
        style="word-wrap: break-word">{{ $data->email }}</span></p>
