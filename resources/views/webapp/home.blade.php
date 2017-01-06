@extends('layouts.webapp')

@section('content')
    @if(true)
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                
               <div class="panel panel-primary">
                   <div class="panel-heading clearfix">
                       <p class="left">Criado em 2016-12-27 as 22:58</p>
                       <div class="btn-group right">
                           <button type="button" class="btn btn-default"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> Editar</button>
                           <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                               <span class="caret"></span>
                               <span class="sr-only">Toggle Dropdown</span>
                           </button>
                           <ul class="dropdown-menu">
                               <li><a href="#">Excluir</a></li>
                           </ul>
                       </div>
                    </div>
                    <div class="panel-body">                      
                        <div class="media">
                            <div class="media-left">
                                <a href="#">
                                    <img class="media-object" src="http://lorempixel.com/64/64/abstract/" alt="lorempixel">
                                </a>
                            </div>
                            <div class="media-body">
                                <h4 class="media-heading">Media heading</h4>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc vitae lorem at nibh egestas sagittis et et nulla. Integer ac tempus felis.
                            </div>
                        </div>
                    </div>
                    <div class="panel-footer clearfix">
                        <a href="#" class="nolink"><span class="label label-info">Útil</span></a>
                        <a href="#" class="nolink"><span class="label label-info">Hoje</span></a>
                        <a href="#" class="nolink"><span class="label label-info">Faculdade</span></a>
                        <a href="#" class="nolink"><span class="label label-info">Comprar</span></a>
                        <p class="right litle-text">Editado 2016-12-27 as 22:58</p>
                    </div>
                </div>

            </div>
            <div class="col-md-4">
                
                <div class="panel panel-default">
                    <div class="panel-body">
                        
                        <div class="list-group">
                            <a href="#" class="list-group-item active">
                                <span class="badge">20</span>
                                Geral
                            </a>
                            <a href="#" class="list-group-item">
                                <span class="badge">10</span>
                                Social
                            </a>
                            <a href="#" class="list-group-item">
                                <span class="badge">8</span>
                                Útil
                            </a>
                            <a href="#" class="list-group-item">
                                <span class="badge">2</span>
                                Fitness
                            </a>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>
    @else
        <h1 class="empty">Sem Notas</h1>
    @endif

@endsection