@extends('master.master')

@section('content')
    <div id="content" class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <h1>Sprechstunden</h1>
                <div class="panel-group" role="tablist">

                    @foreach($officehours as $officehour)
                        <div class="panel panel-default">
                            <div class="panel-heading" role="button"
                                 data-toggle="collapse"
                                 data-target="#collapse_{{ $officehour->id }}" id="officehour_{{$officehour->id}}">
                                <h4 class="panel-title"><a>Sprechstunde
                                        am {{date('d. F Y', strtotime($officehour->begin))}}</a><i
                                            class="indicator glyphicon glyphicon-chevron-down  pull-right"></i>
                                </h4>
                            </div>
                            @if($officehour->appointments->count() > 0)
                                <div id="collapse_{{ $officehour->id }}" class="panel-collapse collapse"
                                     role="tabpanel">
                                    <ul class="panel-body">
                                        @foreach($officehour->appointments as $appointment)
                                            <li class="list-group-item">{{$appointment->occasion}}<br>{{ date('G:i', strtotime($appointment->begin)) }} - {{ $appointment->getEnd()->format('G:i') }} Uhr</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @else
                                <div id="collapse_{{ $officehour->id }}" class="panel-collapse collapse"
                                     role="tabpanel">
                                    <p class="panel-body">Noch keine Termine</p>
                                </div>
                            @endif
                        </div>
                    @endforeach

                </div>
            </div>
        </div>
    </div>
@endsection