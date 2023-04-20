<div class="top-section">
    <h3 class="py-3">Board Members</h3>
    <div class="notice-wapper">
        <div class="row">

            @foreach ($mainTeams as $team)

            <div class="col-md-6 mb-3">
                <div class="card">
                    <img src="{{asset($team->image)}}"
                        alt="" class="w-100">
                    <div class="p-2">
                        <b>
                            {{$team->name}}
                        </b> <br>
                        {{$team->designation}}
                    </div>
                </div>
            </div>
            @endforeach

        </div>
    </div>
</div>
