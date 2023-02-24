@extends('books.layout')
@section('content')

   <div class="card" style="margin:20px;">
       <div class="card-header">Edit Book</div>
       <div class="card-body">
           books
           <form action="{{ url('book/' .$books->id) }}" method="post">
               {!! csrf_field() !!}
               @method("PATCH")
               <input type="hidden" name="id" id="id" value="{{$books->id}}" id="id"/>
               <label>Tittle</label></br>
               <input type="text" name="tittle" id="tittle" class="form-control"></br>
               <label>Author</label></br>
               <input type="text" name="author" id="author" class="form-control"></br>
               <label>Name</label></br>
               <input type="text" name="name" id="name" class="form-control"></br>
               <label>Date</label></br>
               <input type="date" name="date" id="date" class="form-control"></br>
               <input type="submit" value="Update" class="btn btn-success"></br>
           </form>

       </div>
   </div>

@stop
