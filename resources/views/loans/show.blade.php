@extends('layout')
@section('content')

    <div class="card" style="margin:20px;">
        <div class="card-header">Book page</div>
        <div class="card-body">
            <div class="card-body">
                <h5 class="card-title">Título : {{ $loans->book_id }}</h5>
                <p class="card-text">Autor : {{ $loans->user_id }}</p>

            </div>
            </hr>
        </div>
    </div>
