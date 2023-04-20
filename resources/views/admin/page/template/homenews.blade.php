@if ($news->count() > 0)
    <style>
        .home-news{
            display: block;
            color:black;
        }
        .home-news .image {
            height: 200px;
            background: #DFE2FA;
            display: flex;
            border-radius: 5px;
            align-items: center;
            justify-content: center;
            overflow: hidden;
        }
    </style>
    <div class="container">

        <h3 class="p-3">
            <div class="text-center text-md-start ">
                Latest News
            </div>
        </h3>
        <div>
            <div class="row">
                @foreach ($news as $n)
                    <div class="col-md-4 mb-4">
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
                    </div>
                @endforeach
            </div>
        </div>

        <div class="text-center mb-4">
            <a href="{{route('page.type',['type'=>'news'])}}" class="btn btn-primary">
                View All News
            </a>
        </div>
    </div>
@endif
