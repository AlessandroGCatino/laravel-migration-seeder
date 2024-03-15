@extends('layouts.basic')

@section('title', 'Benvenuto | Home')


@section('content')

<h1 class="text-center">Treni di oggi</h1>
<h2 class="text-danger text-center">Red Trains are cancelled, we're sorry for the inconvenient</h2>
<br>
<div class="container d-flex justify-content-between  flex-wrap gap-5">

    @foreach ($trains as $departure)
    
    <div class="card col-5 text-center <?= ($departure["cancelled"]) ? "bg-danger" : "bg-success" ?>">
        <div class="card-body">
            <h3 class="text-center">{{$departure["company"]}}</h3>
            <h5 class="card-title">{{$departure["startStation"]}} -> {{$departure["endStation"]}} <small>ID:{{$departure["trainCode"]}}</small></h5>
            <p class="card-text">{{$departure["hourDeparture"]}} -> {{$departure["hourArrive"]}}</p>
        </div>
    </div>
    
        
    @endforeach
</div>
    
@endsection
