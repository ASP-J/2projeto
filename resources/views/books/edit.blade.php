@extends('layout')
@section('content')

   <div class="card" style="margin:20px;">
       <div class="card-header">Edit Book</div>
       <div class="card-body">
           books
           <form action="{{ url('book/' .$books->id) }}" method="post">
               {!! csrf_field() !!}
               @method("PATCH")
               <input type="hidden" name="id" id="id" value="{{$books->id}}" id="id"/>
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
