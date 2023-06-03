<div class="row">
    @foreach ($galleries as $gallery)
        <a class="col-md-3 col-6 " href="{{route('gallery',['id'=>$gallery->id])}}">
            <div class="singlegallery">

                <img class="w-100" src="{{asset($gallery->icon)}}" alt="">
                <div class="overlay">
                    {{$gallery->name}}
                </div>
            </div>
            <h5>
                <p class="mt-2 mb-0">{{$gallery->name}}</p>
            </h5>
        </a>
    @endforeach
</div>
