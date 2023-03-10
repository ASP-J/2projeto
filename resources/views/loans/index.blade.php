@extends('layout')
@section('content')
    <div class="container">
        <div class="row" style="margin:20px;">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h2>Emprestimos
                        </h2>
                    </div>
                    <div class="card-body">
                        <a href="{{ route('loans.create') }}" class="btn btn-success btn-sm" title="Add New loan">
                            Add New
                        </a>
                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Livro</th>
                                    <th>Usuario</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($loans as $item)

                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->book->tittle }}</td>
                                        <td>{{ $item->user->name }}</td>

                                        <td>
                                            <a href="{{ url('/loans/' . $item->id) }}" title="View Loan">
                                                <button class="btn btn-info btn-sm"><i class="fa fa-eye"
                                                                                       aria-hidden="true"></i> View
                                                </button>
                                            </a>
                                            <a href="{{ url('/loans/' . $item->id . '/edit') }}" title="Edit Loan">
                                                <button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o"
                                                                                          aria-hidden="true"></i> Edit
                                                </button>
                                            </a>

                                            <form method="POST" action="{{ url('/loans' . '/' . $item->id) }}"
                                                  accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger btn-sm" title="Delete loan"
                                                        onclick="return confirm(" Confirm delete?
                                                ")"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
