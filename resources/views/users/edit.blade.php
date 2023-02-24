@extends('layout')
@section('content')

   <div class="card" style="margin:20px;">
       <div class="card-header">Edit user</div>
       <div class="card-body">

           <form action="{{ url('user/' .$users->id) }}" method="post">
               {!! csrf_field() !!}
               @method("PATCH")
               <input type="hidden" name="id" id="id" value="{{$user->id}}" id="id"/>
               <label>Nome</label></br>
               <input type="text" name="name" id="name" value="{{$user->name}}" class="form-control"></br>
               <label>Email</label></br>
               <input type="text" name="email" id="email" value="{{$user->email}}" class="form-control"></br>
               <label>Senha</label></br>
               <input type="text" name="password" id="password" class="form-control"></br>
               <div class="form-check">
                <input class="form-check-input" type="checkbox" {{$user->is_admin ? 'checked' : '' }} value="{{$user->is_admin}}" id="flexCheckDefault">
                <label class="form-check-label" for="flexCheckDefault">
                  Administrador
                </label>
              </div></br>
               <input type="submit" value="Save" class="btn btn-success"></br>
           </form>

       </div>
   </div>

@stop
