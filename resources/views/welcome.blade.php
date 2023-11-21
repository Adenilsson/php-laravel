@extends('layouts.main')

@section('title', 'HDC Events')

@section('content')
<div id="search-container" class="col-md-12">
   
    <h1 class="banner-title">Busque um Evento</h1>
    <form action="">
        <input type="text" id="search" name="search" class="form-control" placeholder="Procurar...">
    </for>
</div>
<div id="events-container" class="row">
    <h2>Próximos Eventos</h2>
    <p class="subtitle"> Veja os eventos dos próximos dias</p>
    <div id="cards-container" class="row">
        @foreach($events as $event)
        <div class="card col-md-3">
            <img src="img/OIP.jpg" alt="{{$event->title}}">
            <div class="card-body">
                <p class="card-date">10-09-2023</p>
                <h5 class="card-title">{{$event->title}}</h5>
                <p class="card-participants">x Participantes</p>
                <a href="#" class="btn btn-primary">Saber Mais</a>


            </div>
        </div>
        
        @endforeach
    </div>
</div>

@endsection