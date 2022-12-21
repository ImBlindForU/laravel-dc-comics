@extends('layouts.app')

@section('title','metti un nuovo fumetto')
    
@section('content')
    <section>
        <div class="container">
            <h2>crea un NUOVO fumetto</h2>
            <form action="{{route('Fumettis.store')}}" method="POST">
                @csrf
                <label for="title">Titolo</label>
                <input type="text" class="form-control" id="title" name="title">
                <label for="thumb">Immagine</label>
                <input type="text" class="form-control" id="thumb" name="thumb">
                <label for="series">serie</label>
                <input type="text" class="form-control" id="series" name="series">
                <label for="type">tipo</label>
                <input type="text" class="form-control" id="type" name="type">
                <label for="price">prezzo</label>
                <input type="text" class="form-control" id="price" name="price">
                <label for="sale_date">data di vendita</label>
                <input type="text" class="form-control" id="sale_date" name="sale_date">
                <label for="description">descizione</label>
                <textarea type="text" class="form-control" id="description" name="description"></textarea>

                <button class="btn btn-success" type="submit">Salva</button>
            </form>
        </div>
    </section>
@endsection