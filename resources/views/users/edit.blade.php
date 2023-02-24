@extends('layout')
@section('content')

   <div class="card" style="margin:20px;">
       <div class="card-header">Edit user</div>
       <div class="card-body">

           <form action="{{ url('user/' .$users->id) }}" method="post">
               {!! csrf_field() !!}
               @method("PATCH")
               <input type="hidden" name="id" id="id" value="{{$users->id}}" id="id"/>
               <label>Nome</label></br>
               <input type="text" name="name" id="name" class="form-control"></br>
               <label>Email</label></br>
               <input type="text" name="email" id="email" class="form-control"></br>
               <label>Senha</label></br>
               <input type="text" name="password" id="password" class="form-control"></br>
               <label>Administrador</label></br>
               <input type="number" name="is_admin" id="is_admin" class="form-control"></br>
               <input type="submit" value="Save" class="btn btn-success"></br>
           </form>

       </div>
   </div>

@stop
