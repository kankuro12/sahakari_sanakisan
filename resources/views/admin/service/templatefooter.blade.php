<h4 class="text-white mb-4">सेवाहरू</h4>
@foreach ($serviceTypes as $serviceType)
    <a class="btn btn-link" href="{{ route('service.types') }}">{{ $serviceType->name }}</a>
@endforeach
