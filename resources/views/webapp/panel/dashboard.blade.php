@extends('layouts.dashboard')

@section('left-nav-buttons')
    <a title="Editar Perfil" class="btn btn-primary navbar-btn" href="#" role="button">Editar Perfil</a>
    <a title="Editar Marcadores" class="btn btn-warning navbar-btn" href="{{ route('categories.index') }}" role="button">Editar Marcadores</a>
    <a title="Mensagens"  class="btn btn-success navbar-btn" role="button">Mensagens &nbsp; <span class="badge badge-info">0</span></a>
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">

                <p>User Dashboard</p>

            </div>
        </div>
    </div>
@endsection