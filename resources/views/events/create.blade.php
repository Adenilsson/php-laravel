@extends('layouts.main')

@section('title', 'Criar Evento')

@section('content')

<div id="event-create-container" class="col-md-6 offset-md-3">
    <h1>Crie o seu Evento</h1>
   
    <form action="/events" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="image">Imagem do Evento:</label>
            <input type="file" id="image" name="image" class="from-control-file">
          </div>
        <div class="form-grup">
            <label for="title">Evento:</label>
            <input type="text" class="form-control" id="title" name="title" placeholder="Nome do Evento">
        </div>
        <div class="form-grup">
            <label for="title">Cidade:</label>
            <input type="text" class="form-control" id="city" name="city" placeholder="Local do Evento">
        </div>
        <div class="form-grup">
            <label for="title">O Evento é privado?</label>
            <select name="private" id="private" class="form-control">
                <option value="0">Não</option>
                <option value="1">Sim</option>
            </select>
        </div>
        <div class="form-grup">
            <label for="title">Descrição:</label>
            <textarea name="description" id="description"  class="form-control" placeholder="O que vai acontecer no evento?"></textarea>
        </div>
        <div class="form-grup">
            <label for="title">Adcione items de infraestrutura:</label>
            <div class="form-group">
                <input type="checkbox" name="item[]" value="Cadeiras">Cadeiras
            </div>
            <div class="form-group">
                <input type="checkbox" name="item[]" value="Palco">Pauco
            </div>
            <div class="form-group">
                <input type="checkbox" name="item[]" value="Cerveja grátis">Cerveja grátis
            </div>
            <div class="form-group">
                <input type="checkbox" name="item[]" value="Open Food">Open Food
            </div>
            <div class="form-group">
                <input type="checkbox" name="item[]" value="Brindes">Brindes
            </div>
        </div>
        <input type="submit" class="btn btn-primary" id="btn-submit" value="Criar Evento">
    </form>

</div>

@endsection