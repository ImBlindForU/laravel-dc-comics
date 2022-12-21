@extends('layouts.app')

@section('title',$comics->title)
    
@section('content')
    <section>   
        <div class="container">
            <h2>{{$comics->title}}</h2>
            <div class="mt-4">
                <img src="{{ $comics->thumb }}" alt="">
            </div>
            <dl>
                <dt>Tipo</dt>
                <dd>{{ $comics->type }}</dd>
                <dt>Serie</dt>
                <dd>{{ $comics->series }}</dd>
                <dt>Prezzo/dt>
                <dd>{{ $comics->price }}</dd>
                <dt>Descizione</dt>
                <dd>{{ $comics->description }}</dd>
            </dl>
        </div>
    </section>
@endsection