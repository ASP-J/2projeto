@extends('layout')
@section('content')

    <div class="card" style="margin:20px;">
        <div class="card-header">user page</div>
        <div class="card-body">
            <div class="card-body">
                <h5 class="card-title">Nome : {{ $users->name }}</h5>
                <p class="card-text">Email : {{ $users->email }}</p>
                <p class="card-text">Senha : {{ $users->password }}</p>
                <p class="card-text">Administrador : {{ $users->is_admin }}</p>
            </div>
            </hr>
        </div>
    </div>
