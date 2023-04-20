<a class="home-news" href="{{route('page',['id'=>$n->id])}}">
    <div class="image mb-2">
        <img class="h-100" src="{{ asset($n->image) }}" alt="">
    </div>
    <h5 class="single-line mb-1">
        {{ $n->title }}
    </h5>
    <div class="two-line">
        {{ $n->short_desc }}
    </div>

</a>
