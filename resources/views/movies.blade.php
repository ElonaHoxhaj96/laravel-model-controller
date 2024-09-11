{{-- questa view estende il file main.blade.php che è dentro la cartella view/layouts --}}
@extends('layouts.main')

@section('content')
<!-- <div class="container my-5">
    <h1>Film</h1>
    <table class="table">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Titolo</th>
      <th scope="col">Titolo originale</th>
      <th scope="col">Paese</th>
      <th scope="col">Data</th>
      <th scope="col">Voto/th>
    </tr>
  </thead>
  <tbody>
    @foreach($movies as $movie)
        <tr>
        <td>{{$movie->id}}</td>
        <td>{{$movie->title}}</td>
        <td>{{$movie->original_title}}</td>
        <td>{{$movie->nationality}}</td>
        <td>{{$movie->date}}</td>
        <td>{{$movie->vote}}</td>
        </tr>
    @endforeach
  </tbody>
</table> -->
<div class="container">
  @foreach($movies as $movie)
    <div class="card" style="width: 18rem;">
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
