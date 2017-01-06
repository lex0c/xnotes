@extends('layouts.webapp')

@section('content')
    @if(true)
    <div class="container">
        <div class="row">
            <div class="col-md-8">

            @foreach($notes as $note)

                @php
                    unset($createdAt);
                    unset($updatedAt);
                    {{-- Concatenates an 'as' between date and time --}}             
                    $createdAt = explode(' ', $note->created_at);
                    $createdAt = $createdAt[0] . ' as ' . $createdAt[1];
                    $updatedAt = explode(' ', $note->updated_at);
                    $updatedAt = $updatedAt[0] . ' as ' . $updatedAt[1];
                @endphp

               <div class="panel panel-{{ 'primary' }}">
                   <div class="panel-heading clearfix">
                       <p class="left">Criado em {{ $createdAt }}</p>
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
                                <img title="Lorempixel Image" class="media-object" src="http://lorempixel.com/64/64/abstract/" alt="Imagens aleatórias sem significado."/>
                            </div>
                            <div class="media-body">
                                <h4 class="media-heading"><b>{{ $note->title }}</b></h4>
                                {{ $note->content }}
                            </div>
                        </div>
                    </div>
                    <div class="panel-footer clearfix">
                        
                        @foreach($categories as $category)
                            <a href="#" class="nolink"><span class="label label-info">{{ $category->name }}</span></a>
                        @endforeach
                        <p class="right litle-text">Editado {{ $updatedAt }}</p>
                    </div>
                </div>
            @endforeach

            </div>
            <div class="col-md-4">
                
                <div class="panel panel-default">
                    <div class="panel-body">
                        
                        <div class="list-group">
                            <a href="#" class="list-group-item active">
                                <span class="badge">{{ $notes_total }}</span>
                                Todos
                            </a>
                            @foreach($categories as $category)
                                <a href="#" class="list-group-item">
                                    <span class="badge">{{ $notes_categories_total or '2' }}</span>
                                    {{ $category->name }}
                                </a>
                            @endforeach
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