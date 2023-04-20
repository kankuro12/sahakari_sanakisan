@php
    $data = getSetting('contact') ?? ((object)([
            'map' => '',
            'email' => '',
            'phone' => '',
            'addr' => '',
            'others' => [],

        ]));
@endphp
<p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>{{$data->addr}}</p>
<p class="mb-2"><i class="fa fa-phone-alt me-3"></i>{{$data->phone}} </p>
<p class="mb-2"><i class="fa fa-envelope me-3"></i>{{$data->email}}</p>

