@extends('layouts.main')

@section('content')
	<div class="container px-4  mx-auto pt-16">
			<div class="popular-movies">
			<h2 class="uppercase font-semibold text-lg text-yellow-400 tracking-wider">Popular movies</h2>
			<div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-16">
				
					<!-- looping through the popular movies -->
					@foreach($popularMovies as $movie)
						<!--rendering the movies in the component and passing parameters to the components  -->
						<x-movie-card :movie="$movie" :genres="$genres" />
				
					@endforeach
						
			</div>			
		<!-- End of popular Movies -->

		<!-- Now Playing Section -->
	<div class="now-playing-movies py-24">
			<h2 class="uppercase font-semibold text-lg text-yellow-400 tracking-wider">now playing</h2>
			<div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-16">
					<!-- looping through the now playing movies -->
					 @foreach($nowPlayingMovies as $movie)
						<!--rendering through the movies in the components and passing parameters to them   -->
						<x-movie-card :movie="$movie" :genres="$genres" />
				
					@endforeach 
			</div>
		</div>
	
	
	</div>
@endsection