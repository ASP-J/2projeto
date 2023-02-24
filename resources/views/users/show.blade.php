@extends('books.layout')
@section('content')

    <div class="card" style="margin:20px;">
        <div class="card-header">Book page</div>
        <div class="card-body">
            <div class="card-body">
                <h5 class="card-title">Tittle : {{ $books->tittle }}</h5>
                <p class="card-text">Address : {{ $books->author }}</p>
                <p class="card-text">Mobile : {{ $books->pessoa }}</p>
                <p class="card-text">Mobile : {{ $books->date }}</p>
            </div>
            </hr>
        </div>
    </div>
