@extends('layouts.app')

@section('title', 'modifica')
    
@section('content')
        <div class="container">
            <h2>Modifica fumetto: {{ $comics->title }}</h2>

            <label for="title">Titolo</label>
            <input value="{{ $comics->title }}" type="text" class="form-control" id="title" name="title">
            <label for="thumb">Immagine</label>
            <input value="{{$comics->thumb}}" type="text" class="form-control" id="thumb" name="thumb">
            <label for="series">serie</label>
            <input value="{{$comics->series}}" type="text" class="form-control" id="series" name="series">
            <label for="type">tipo</label>
            <input value="{{$comics->type}}" type="text" class="form-control" id="type" name="type">
            <label for="price">prezzo</label>
            <input value="{{$comics->price}}" type="text" class="form-control" id="price" name="price">
            <label for="sale_date">data di vendita</label>
            <input value="{{$comics->date_sale}}" type="text" class="form-control" id="sale_date" name="sale_date">
            <label for="description">descizione</label>
            <textarea type="text" class="form-control" id="description" name="description">{{$comics->description}}</textarea>

            <button class="btn btn-success" type="submit">Salva</button>
        </div>
@endsection