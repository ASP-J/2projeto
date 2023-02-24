@extends('layout')
@section('content')

    <div class="card" style="margin:20px;">
        <div class="card-header">Book page</div>
        <div class="card-body">
            <div class="card-body">
                <h5 class="card-title">Título : {{ $books->tittle }}</h5>
                <p class="card-text">Autor : {{ $books->author }}</p>
                <p class="card-text">Descrição : {{ $books->description }}</p>
                <p class="card-text">Quantidade : {{ $books->quantity }}</p>
            </div>
            </hr>
        </div>
    </div>
