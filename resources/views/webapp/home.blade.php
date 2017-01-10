@extends('layouts.webapp')

@section('content')
    @if(count($notes) > 0)
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

               <div class="panel panel-{{ $note->color or 'primary' }}">
                   <div class="panel-heading clearfix">
                       <p class="left">Criado em {{ $createdAt }} </p>
                       <div class="btn-group right">
                           <a title="Editar" class="btn btn-default" href="{{ route('notes.edit', $note->id) }}" role="button"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> Editar</a>
                           <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                               <span class="caret"></span>
                               <span class="sr-only">Toggle Dropdown</span>
                           </button>
                           <ul class="dropdown-menu">
                               <li><a href="{{route('notes.show', $note->id)}}">Excluir</a></li>
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
                        
                        {{--@for($i = 0; $i < count($categories); $i++)--}}
                            <span class="label label-primary">#{{ $user_obj->find($note->user_id)->name }}</span>
                            <span class="label label-default">#{{ $category_obj->find($note_obj->find($note->id)->category_id)->name }}</span>
                            <span class="label label-warning">#{{ $note->access }}</span>
                        {{--@endfor--}}
                        <p class="right litle-text">Editado {{ $updatedAt }}</p>
                    </div>
                </div>
            @endforeach
                {!! $notes->links() !!}
            </div>
            <div class="col-md-4">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h3 class="panel-title">Informações</h3>
                    </div>
                    <div class="panel-body">
                        <a href="#" class="list-group-item">
                            <span class="badge">{{ $notes_total }}</span>
                            Total de Notas
                        </a>
                    </div>
                </div>

                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h3 class="panel-title">Marcadores</h3>
                    </div>
                    <div class="panel-body">
                        
                        <div class="list-group">
                            @foreach($categories as $category)
                                <a href="#" class="list-group-item">
                                    <span class="badge">{{ $category->created_at }}</span>
                                    {{ $category->name }}
                                </a>
                            @endforeach
                        </div>
                       <a class="right litle-text" href="#">Editar Marcadores</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @else
        <h1 class="empty">Sem Notas</h1>
    @endif

@endsection