@extends('layout')
@section('content')

    <div class="card" style="margin:20px;">
        <div class="card-header">Create New book</div>
        <div class="card-body">

            <form action="{{ url('books') }}" method="post">
                {!! csrf_field() !!}
                <label>Título</label></br>
                <input type="text" name="tittle" id="tittle" class="form-control"></br>
                <label>Autor</label></br>
                <input type="text" name="author" id="author" class="form-control"></br>
                <label>Descição</label></br>
                <input type="text" name="description" id="description" class="form-control"></br>
                <label>Quantidade</label></br>
                <input type="number" name="quantity" id="quantity" class="form-control"></br>
                <input type="submit" value="Save" class="btn btn-success"></br>
            </form>

        </div>
    </div>
@stop
