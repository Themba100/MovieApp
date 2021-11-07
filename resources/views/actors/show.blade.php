@extends('layouts.main')

@section('content')
	<div class="movie-info border-b border-gray-800">
		<div class="container mx-auto items-center px-4 py-16 flex flex-col md:flex-row">
			<div class="flex-none">
			<img src="{{$actor['profile_path']}}" alt="movie" class="w-76">
			<ul class="flex gap-5 items-center mt-4">
				@if($social['facebook'])
				<li>
				<a href="{{$social['facebook']}}" title="Facebook">
					 <svg class="w-5 h-5 fill-current" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/></svg>
       
				</a>
				</li>
				@endif
				@if($social['twitter'])
				<li>
				<a href="{{$social['twitter']}}" title="Twitter">
					<svg class="w-5 h-5 fill-current" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z" /></svg>
        
				</a>
				</li>
				@endif

				@if($actor['homepage'])
				<li>
				<a href="{{$actor['homepage']}}" title="website">
					<svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
					<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
					</svg>			</a>
				</li>
				@endif
				
			
			</ul>
			</div>
			<div class=" md:ml-24">
					<h2 class="text-4xl  font-semibold">{{$actor['name']}}</h2>
						<div class="flex items-center flex-wrap text-gray-400">
							<svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 15.546c-.523 0-1.046.151-1.5.454a2.704 2.704 0 01-3 0 2.704 2.704 0 00-3 0 2.704 2.704 0 01-3 0 2.704 2.704 0 00-3 0 2.704 2.704 0 01-3 0 2.701 2.701 0 00-1.5-.454M9 6v2m3-2v2m3-2v2M9 3h.01M12 3h.01M15 3h.01M21 21v-7a2 2 0 00-2-2H5a2 2 0 00-2 2v7h18zm-3-9v-2a2 2 0 00-2-2H8a2 2 0 00-2 2v2h12z" />
</svg>
							<span class="ml-2">{{$actor['birthday']}} ({{$actor['age']}} years old) {{$actor['place_of_birth']}}</span>
							<span class="mx-2">|</span>
							<span>More Stuff</span>
							<span class="mx-2">|</span>
														
						</div>
						<p class="text-gray-200 mt-8">
						{{$actor['biography']}}
					</p>
						<div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-5 gap-8">
							@foreach($knownForMovies as $movie)
							<div class="mt-4">
								<a href="{{route('movies.show', $movie['id'])}}">
								<img src="{{$movie['poster_path']}}" alt="" class="hover:opacity-75 transition ease-in-out duration-150">
								</a>
								<a href="{{route('movies.show', $movie['id'])}}" class="text-sm text-gray-400 block leading-normal hover:text-white mt-1">
								{{$movie['title']}}
								</a>

							</div>
							@endforeach
							
						
						</div>
		


			</div>
		
		</div>
	
	</div>
	
	<!-- End of Movie-details -->

	<!-- cast begins -->
	<div class="credits border-gray-800 border-b">
			<div class="container mx-auto py-16 px-5">
				<h2 class="text-4xl font-semibold">Credits</h2>
				<ul class="list-disc leading-loose pl-5 mt-8">
				@foreach($credits as $credit)
					<li>{{$credit['release_year']}} &middot; <strong>{{$credit['title']}}</strong>as {{$credit['character']}}</li>
				@endforeach
				</ul>
			</div>
	</div>

	<!-- Movie Images begins -->
	
@endsection