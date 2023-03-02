@extends('layout')
@section('content')

    <div class="card" style="margin:20px;">
        <div class="card-header">Loan page</div>
        <div class="card-body">
            <div class="card-body">
                <h5 class="card-title">Livro : {{ $loans->book->tittle }}</h5>
                <p class="card-text">Usuario : {{ $loans->user->name }}</p>

            </div>
            </hr>
        </div>
    </div>
