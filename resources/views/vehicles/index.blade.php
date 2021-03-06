@extends('spark::layouts.app')

@section('content')
<home :user="user" inline-template>
    <div class="container">
        <!-- Application Dashboard -->
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">My Vehicles</div>

                    <div class="panel-body">
                        @if ($vehicles)
                          <ol>
                            @foreach ($vehicles as $vehicle)
                              <li><a href="/vehicles/{{ $vehicle->id }}/edit">{{ $vehicle->nickname }}</a></li>
                            @endforeach
                          </ol>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</home>
@endsection
