@extends('layouts.webapp')

@section('content')
    @if(true)
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                
               <p>Notas Aqui!</p>

            </div>
            <div class="col-md-4">
                
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h3 class="panel-title">Categorias</h3>
                    </div>
                    <div class="panel-body">
                        
                        <ul class="nav nav-pills nav-stacked">
                            <li role="presentation" class="active"><a href="#">Todos <span class="badge">16</span></a></li>
                            <li role="presentation"><a href="#">Social <span class="badge">6</span></a></li>
                            <li role="presentation"><a href="#">Útil <span class="badge">8</span></a></li>
                            <li role="presentation"><a href="#">Fitness <span class="badge">2</span></a></li>
                        </ul>

                    </div>
                </div>

            </div>
        </div>
    </div>
    @else
        <h1 class="empty">Sem Notas</h1>
    @endif

@endsection