@extends('layout')
@section('content')

   <div class="card" style="margin:20px;">
       <div class="card-header">Edit Book</div>
       <div class="card-body">
           <form class="form-control" action="{{ route('loan.update', $loan->id) }}" method="post">
           @csrf
           @method('PUT')
            <div class="form-group mb-3">
                <label for="client">Cliente</label>
                <select name="user_id" id="client" class="form-select" aria-label="Selecione um usuario">
                    @foreach($users as $user)
                    <option value="{{$user->id}}">{{$user->name}}</option>
                    @endforeach
                  </select>
            </div>
            <div class="form-group mb-3">
                <label for="book">Livros</label>
                <select name="book_id" id="book" class="form-select" aria-label="Selecione um livro">
                    @foreach($books as $book)
                    <option value="{{$book->id}}">{{$book->tittle}}</option>
                    @endforeach
                  </select>
            </div>
            <button type="submit" class="btn btn-success"> Salvar </button>
        </form>

       </div>
   </div>

@stop
