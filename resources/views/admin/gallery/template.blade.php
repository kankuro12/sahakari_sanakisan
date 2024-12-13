<style>
    .singlegallery {
        position: relative;
        width: 100%;
        height: 200px;
        display: flex;
        justify-content: center;
        align-items: center;
        background-color: #f0f0f0;
        overflow: hidden;
    }

    .singlegallery img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        display: block;
    }

    .singlegallery .overlay {
        position: absolute;
        bottom: 0;
        width: 100%;
        background: rgba(0, 0, 0, 0.5);
        color: white;
        text-align: center;
        padding: 5px 0;
    }
</style>
<div class="row">
    @foreach ($galleries as $gallery)
        <a class="col-md-3 col-6" href="{{ route('gallery', ['id' => $gallery->id]) }}">
            <div class="singlegallery">
                <img src="{{ asset($gallery->icon) }}" alt="">
                <div class="overlay">
                    {{ $gallery->name }}
                </div>
            </div>
            <h5>
                <p class="mt-2 mb-0">{{ $gallery->name }}</p>
            </h5>
        </a>
    @endforeach
</div>
