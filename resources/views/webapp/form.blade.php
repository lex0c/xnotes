@extends('layouts.webapp')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <form method="post" action="{{ route('notes.store') }}">
                    <fieldset>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                <label for="note-title">Titulo</label>
                                <input type="text" class="form-control" name="note-title" id="note-title" placeholder="De um titulo para a nota"/>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="cat">Categoria</label>
                                    <select name="category" id="cat" class="form-control">
                                        <option value="">Selecione</option>
                                        @foreach($categories as $category)
                                            <option value="{{ $category->name }}">{{ $category->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="desc">Conteúdo</label>
                            <textarea name="content" class="form-control" rows="10" id="desc" placeholder="Descreva sua nota aqui..."></textarea>
                        </div>

                        {!! csrf_field() !!}
                        <button type="submit" class="btn btn-primary btn-lg btn-block center-block">Criar</button>
                        <button type="submit" class="btn btn-danger btn-lg btn-block center-block">Cancelar</button>
                    </fieldset>
                </form>
            </div>
            <div class="col-md-12">
                
            </div>
        </div>
    </div>
@endsection