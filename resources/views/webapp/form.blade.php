@extends('layouts.webapp')

@section('content')
    @if((isset($errors)) && (count($errors) > 0))
        @foreach($errors->all() as $error)
            <script>
                toastr.error('{{ $error }}', 'Dados incorretos!');
            </script>
        @endforeach
    @endif
    <div class="container">
        <div class="row">
            <div class="col-md-12">

                @if(isset($note) && (!isset($del)))
                    <form method="post" action="{{ route('notes.update', $note->id) }}">
                    {!! method_field('PUT') !!}
                @elseif((isset($del)) && ($del == true))
                     <form method="post" action="{{ route('notes.destroy', $note->id) }}">
                     {!! method_field('DELETE') !!}
                @else
                    <form method="post" action="{{ route('notes.store') }}">
                @endif

                    <fieldset>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                <label for="title">Titulo</label>
                                <input type="text" class="form-control" name="title" id="title" placeholder="De um titulo para a sua nota" value="{{ $note->title or old('title') }}" @if((isset($del)) && ($del == true)) readonly @endif/>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-group">
                                    <label for="category">Categoria</label>
                                    <select name="category_id" id="category" class="form-control" @if((isset($del)) && ($del == true)) disabled @endif>
                                        <option value="">Selecione</option>
                                        <optgroup label="Suas Categorias">
                                        @foreach($categories as $category)
                                            <option value="{{ $category->id }}" @if((isset($note) && $note->category_id == $category->id) || (old('category_id') == $category->id)) selected @endif>{{ $category->name }}</option>
                                        @endforeach
                                        </optgroup>
                                        <optgroup label="Opções">
                                            <option value="">Criar Categoria</option>
                                        </optgroup>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-group">
                                    <label for="color">Cor do Modal</label>
                                    <select name="color" id="color" class="form-control" @if((isset($del)) && ($del == true)) disabled @endif>
                                        @foreach($colors as $color => $hexa)
                                            <option value="{{ $color }}" @if((isset($note) && $note->color == $color) || (old('color') == $color)) selected @endif>{{ $hexa }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-group">
                                    <label for="access">Acesso</label>
                                    <select name="access" id="access" class="form-control" @if((isset($del)) && ($del == true)) disabled @endif>
                                        @foreach($access as $value => $name)
                                            <option value="{{ $value }}" @if((isset($note) && $note->access == $value) || (old('access') == $value)) selected @endif>{{ $name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="content">Conteúdo</label>
                            <textarea name="content" class="form-control" rows="10" id="content" placeholder="Descreva sobre a nota aqui..." @if((isset($del)) && ($del == true)) readonly @endif>{{ $note->content or old('content') }}</textarea>
                        </div>

                        {!! csrf_field() !!}
                        @if((!isset($del)))
                            <button type="submit" class="btn btn-primary btn-lg btn-block center-block">
                                @if(!isset($note)) Criar @else Salvar @endif
                            </button>
                        @elseif((isset($del)) && ($del == true))
                            <button type="submit" class="btn btn-primary btn-lg btn-block center-block">
                                Deletar
                            </button>
                        @endif
                        <a href="{{ route('notes.index') }}" class="btn btn-danger btn-lg btn-block center-block">
                            Cancelar
                        </a>
                    </fieldset>
                </form>
            </div>
            <div class="col-md-12">

            </div>
        </div>
    </div>
@endsection