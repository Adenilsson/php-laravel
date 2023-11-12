<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index(){
        $nome = "Adenilson";
    $idade = 43;
    $arr =[1,2,3,4,5];
    $nome=["Adenilson", "Deila", "Chris", "Miguel"];
    return view('welcome', 
    [
        'nome'=>$nome,
        'idade'=>$idade,
        'profissao'=>"Programador",
        'arr'=>$arr,
        'nomes'=>$nome

    ]);
    }
}
