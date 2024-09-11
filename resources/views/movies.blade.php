{{-- questa view estende il file main.blade.php che è dentro la cartella view/layouts --}}
@extends('layouts.main')

@section('content')
<div class="container my-5">
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
</table>
    
</div>

@endsection


@section('titlePage')
    movie
@endsection
