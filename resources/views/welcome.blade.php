@extends('layouts.main')

@section('title', 'HDC Events')

@section('content')

@if(10>5)
    <p>Acondição é verdadeira</p>
@endif
@if($nome =="Adenilso")
    <p>O nome é  {{$nome}}</p>
@else
    <P>Nome não encontrado</p>
@endif

@for($i=0;$i< count($arr); $i++)
        
        @if($arr[$i]> 3)
            <p>{{$arr[$i]}} é maior que 3</p>
            
        @endif
@endfor
@php
    $nome = "Adenilson";
    echo $nome;
@endphp
{{--ESTE É UM COMENTARIO EM BLADE --}}
@foreach($nomes as $nome)

    <p>{{$loop->index}} -- {{$nome}}</p>
@endforeach
@endsection