<div class="container-xxl">
    <div class="container">
        <div class="row d-flex justify-content-end">
            <div class="col-md-4">
                <input type="text" id="searchInput" placeholder="Search downloads..." class="form-control mb-4">
            </div>
        </div>
        <div class="row" id="pdfContainer" style="column-gap: 20px">
            @foreach ($pdfgalleries as $item)
                <div class="col-md-3 shadow p-4">
                    <a href="{{ asset($item->pdf) }}" download>
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
        <div class="pagination mt-3"></div>
    </div>
</div>
