@extends('layouts.dashboard')

@section('left-nav-buttons')
    <a title="Editar Perfil" class="btn btn-primary navbar-btn" href="#" role="button">Editar Perfil</a>
    <a title="Editar Marcadores" class="btn btn-warning navbar-btn" href="#" role="button">Editar Marcadores</a>
    <a title="Mensagens"  class="btn btn-success navbar-btn" role="button">Mensagens &nbsp; <span class="badge badge-info">0</span></a>
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">Listagem de Marcadores</div>
                    <div class="panel-body">
                        <table class="table table-striped table-hover table-responsive">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Nome</th>
                                    <th>Descrição</th>
                                    <th>Opções</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($categories as $category)
                                    <tr>
                                        <td>{{ $category->id }}</td>
                                        <td>{{ $category->name }}</td>
                                        <td>{{ $category->description }}</td>
                                        <td>
                                            <a href="{{ route('categories.edit', $category->id) }}"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a>
                                            &nbsp;
                                            <a href="{{ route('categories.show', $category->id) }}"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        {!! $categories->links() !!}
    </div>
@endsection