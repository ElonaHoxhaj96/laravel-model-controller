{{-- questa view estende il file main.blade.php che è dentro la cartella view/layouts --}}
@extends('layouts.main')

@section('content')

<div class="container d-flex wrap">
  @foreach($movies as $movie)
    <div class="card mb-2 mt-2" style="width: 18rem;">
      <div class="card-header">
        <h3>Titolo: {{$movie->title}}</h3>
      </div>
      <ul class="list-group list-group-flush">
        <li class="list-group-item">ID: {{$movie->id}}</li>
        <li class="list-group-item">Titolo originale: {{$movie->original_title}}</li>
        <li class="list-group-item">Paese: {{$movie->nationality}}</li>
        <li class="list-group-item">Data: {{$movie->date}}</li>
        <li class="list-group-item">Voto: {{$movie->vote}}</li>
      </ul>
    </div>
  @endforeach    
</div>
@endsection


@section('titlePage')
    movie
@endsection
