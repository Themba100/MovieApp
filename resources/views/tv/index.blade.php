@extends('layouts.main')

@section('content')
	<div class="container px-4  mx-auto pt-16">
			<div class="popular-movies">
			<h2 class="uppercase font-semibold text-lg text-yellow-400 tracking-wider">Popular Tv Shows</h2>
			<div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-16">
					@foreach($populartvShows as $tvshow)
						<x-tv-card :tvshow="$tvshow" />
					@endforeach
			</div>			
		<!-- End of popular tv shows -->

		<!-- Top Rated Tv Show -->
	<div class="now-playing-movies py-24">
			<h2 class="uppercase font-semibold text-lg text-yellow-400 tracking-wider">Top Rated Shows</h2>
			<div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-16">
					@foreach($topRatedtvShows as $tvshow)
						<x-tv-card :tvshow="$tvshow" />
					@endforeach
			</div>
		</div>
	</div>
@endsection