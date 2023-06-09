@foreach ($teamTypes as $key=>$teamType)
<div class="mb-5 wow slideInLeft" data-wow-delay="{{($key*0.5)+0.1}}s">

    <div  >
        <h3 class=" text-center text-md-start mb-3">{{$teamType->name}}</h3>
    </div>
    <div class="row">
        @foreach ($teams->where('team_type_id',$teamType->id)  as $team)

            <div class="col-md-3 col-6 team-holder">
                <a href="{{route('team',['id'=>$team->id])}}" class="team h-100">
                    <div class="image">
                        <img src="{{asset($team->image)}}" alt="" class="w-100">
                    </div>
                    <div class="p-2">
                        <h6 class="name">{{$team->name}}</h6>
                        <p>{{$team->designation}}</p>
                    </div>
                </a>
            </div>
        @endforeach
    </div>
</div>
@endforeach
