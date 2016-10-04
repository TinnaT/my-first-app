@extends('master')

@section('content')

	<h1>Queen Official Fan Club</h1>

	@foreach ($songs as $song)
        
		<!--<li> <a href="/larapack/public/songs/{{ $song->id) }}"> {{ $song->title }} </a></li> -->
                <li><a href="/larapack/public/songs/{{$song->id}}"> {{$song->title}} </a></li>
                
             
	@endforeach 
	
@stop