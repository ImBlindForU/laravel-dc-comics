@extends('layouts.app')

@section('title','tutti i fumetti')
    

@section('content')
    <section>
        <div class="container">
            <h2>Tutti i nostri fumetti</h2>
        </div>
    </section>
    <section>
        <div class="container mt-4">
            <div class="text-end">
                <a class="btn btn-primary" href="{{ route('Fumettis.create') }}">Inserisci un nuovo fumetto</a>
            </div>
            <table>
                <thead>
                    <tr>
                        <th scope="col">Title</th>
                        <th scope="col">Series</th>
                        <th scope="col">type</th>
                        <th scope="col">Price</th>

                    </tr>
                </thead>
                <tbody>
                    @foreach ($fumettos as $comics)
                        <tr>
                            <th scope="row">{{ $comics->title }}</th>
                            <td>{{ $comics->series }}</td>
                            <td>{{ $comics->type }}</td>
                            <td>{{ $comics->price }}</td>
                            <td><button><a href="{{ route('Fumettis.show', $comics->id)}}">Info </a> </button></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </section>
@endsection