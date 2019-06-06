@extends('master')
@section('content')

<section>
<h1>Peliculas del genero: {{$elGenero->name}}</h1>
 <ul>
        @foreach ($movies as $movie)
        <li>
        <a href="/movies/{{$movie -> id}}">
                {{$movie->title}}
            </a>
        </li>
        @endforeach
    </ul> 
</section>
<div class="btn btn_info"><a href="/genres"> volver </a></div>
@endsection