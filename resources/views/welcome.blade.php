@extends('layout')
@section('content')
    <div class="container">
        <div class="row" style="margin:20px;">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h2>SEXTA ETAPA: Segundo projeto de avaliação</h2>
                    </div>
                    <div class="card-body">
                        <a href="{{route('loan.index') }}" class="btn btn-success btn-sm" title="Add New Book">
                            Emprestimos
                        </a>
                        <a href="{{route('book.index') }}" class="btn btn-success btn-sm" title="Add New Book">
                            Livros
                        </a>
                        <a href="{{route('user.index') }}" class="btn btn-success btn-sm" title="Add New Book">
                            Usuario
                        </a>
                          
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
