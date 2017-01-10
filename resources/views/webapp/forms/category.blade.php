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
                @if(isset($category) && (!isset($del)))
                    <form method="post" action="{{ route('categories.update', $category->id) }}">
                    {!! method_field('PUT') !!}
                @elseif((isset($del)) && ($del == true))
                    <form method="post" action="{{ route('categories.destroy', $category->id) }}">
                    {!! method_field('DELETE') !!}
                @else
                    <form method="post" action="{{ route('categories.store') }}">
                @endif
                        <fieldset>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="name">Nome</label>
                                        <input type="text" class="form-control" name="name" id="name" placeholder="De um nome para a sua categoria" value="{{ $category->name or old('name') }}" @if((isset($del)) && ($del == true)) readonly @endif/>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="description">Descrição</label>
                                <textarea name="description" class="form-control" rows="10" id="description" placeholder="Descreva sobre a categoria aqui..." @if((isset($del)) && ($del == true)) readonly @endif>{{ $category->description or old('description') }}</textarea>
                            </div>

                            {!! csrf_field() !!}
                            @if((!isset($del)))
                                <button type="submit" class="btn btn-primary btn-lg btn-block center-block">
                                    @if(!isset($category)) Criar @else Salvar @endif
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
        </div>
    </div>
@endsection