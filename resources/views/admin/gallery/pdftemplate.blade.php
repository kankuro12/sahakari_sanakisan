<div class="container-xxl">
    <div class="container">
        <div class="row" style="column-gap: 20px">
            @foreach ($pdfgalleries as $item)
                <div class="col-md-3 shadow p-4">
                    <a href="{{asset($item->pdf)}}" download>
                        <i class="fa-solid fa-download"></i>
                    </a>
                    <h4 class="name mt-2">
                        {{ $item->title }}
                    </h4>
                    <p class="desc mb-2">
                        {{ $item->date }}
                    </p>
                </div>
            @endforeach

        </div>
    </div>
</div>
