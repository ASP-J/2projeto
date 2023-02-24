@extends('books.layout')
@section('content')

    <div class="card" style="margin:20px;">
        <div class="card-header">Create New book</div>
        <div class="card-body">

            <form action="{{ url('book') }}" method="post">
                {!! csrf_field() !!}
                <label>Tittle</label></br>
                <input type="text" name="tittle" id="tittle" class="form-control"></br>
                <label>Author</label></br>
                <input type="text" name="author" id="author" class="form-control"></br>
                <label>Name</label></br>
                <input type="text" name="name" id="name" class="form-control"></br>
                <label>Date</label></br>
                <input type="date" name="date" id="date" class="form-control"></br>
                <input type="submit" value="Save" class="btn btn-success"></br>
            </form>

        </div>
    </div>
@stop
