@extends('layouts.main')

@section('content')
	<div class="movie-info border-b border-gray-800">
		<div class="container mx-auto items-center px-4 py-16 flex flex-col md:flex-row">
			<img src="{{'https://image.tmdb.org/t/p/w500/'.$movie['poster_path'] }}" alt="movie" class="w-64 mt-1 md:w-96">

			<div class=" md:ml-24">
					<h2 class="text-4xl  font-semibold">{{$movie['title']}}</h2>
						<div class="flex items-center flex-wrap text-gray-400">
							<svg xmlns="http://www.w3.org/2000/svg" class="h-5 fill-current text-yellow-400 w-5" viewBox="0 0 20 20" fill="currentColor">
							<path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
							</svg>
							<span class="ml-1">{{$movie['vote_average'] * 10 .'%'}}</span>
							<span class="mx-2">|</span>
							<span>{{\carbon\carbon::parse($movie['release_date'])->format('M d, Y')}}</span>
							<span class="mx-2">|</span>
							<span>
									@foreach($movie['genres'] as $genre)
									{{$genre['name']}} @if(!$loop->last),@endif
								
								@endforeach

							</span>							
						</div>
						<p class="text-gray-200 mt-8">
						 		{{$movie['overview']}}
						</p>
						<div class="mt-12">
							<h4 class="text-white font-semibold">Featured crew</h4>
							<div class="flex mt-4">
								<div class="mr-4">
										@foreach($movie['credits']['crew'] as $crew)
											@if($loop->index < 2)
												<div class="ml-8">
													<div>{{$crew['name']}}</div>
													<text-sm class="text-gray-400">{{$crew['job']}}</text-sm>
											    </div>
												@else 
													@break
											@endif	
										@endforeach
								</div>
							</div>
						</div>
				<div x-data="{isOpen: false}">
						<!-- Check if the movie has results -->
						@if(count($movie['videos']['results']) > 0)
							<div class="mt-12">
						 	<button
							 	@click="isOpen = true"
							  href="http://youtube.com/watch?v=" class="flex inline-flex items-center text-gray-900 bg-yellow-400 rounded font-semibold px-5 py-4 hover:bg-yellow-600 transition ease-in-out duration-150">
							 <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.752 11.168l-3.197-2.132A1 1 0 0010 9.87v4.263a1 1 0 001.555.832l3.197-2.132a1 1 0 000-1.664z" />
  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
</svg>  					 	<span>Play Trailer</span>
							 </button>
						</div>
						@endif

						<div	style="background-color:rgba(0, 0, 0, .5);" 
							x-show.transition.opacity="isOpen"
						class="fixed top-0 left-0 w-full h-full flex items-center shadow-lg overflow-y-auto">
							<div class="container mx-auto overflow-y-auto lg:px-32 rounded-lg">
								<div class="bg-gray-900 rounded">
									<div class="flex pr-4 pt-2 justify-end">
										<button @click="isOpen=false" class="text-3xl leading-none hover:text-gray-300">
												&times;
										</button>
									
									</div>
									<div class="modal-body px-8 py-8">
										<div style="padding-top:56.25%"
										 class="responsive-container overflow-hidden relative">
											<iframe height="315" 
											src="https://www.youtube.com/embed/{{$movie['videos']['results'][0]['key']}}" 
											style="border:0;" 
											allow="autoplay; encrypted-media"
											 allowfullscreen 
											 width="560"
											  frameborder=""
											  class="responsive-iframe top-0 left-0 absolute w-full h-full">
											</iframe>
										
										</div>
									
									</div>
								</div>
							
							</div>
						
						</div>
			


			</div>
		
		</div>
	
	</div>
	<!-- End of Movie-details -->

	<!-- cast begins -->
	<div class="movie-cast border-gray-800 border-b">
			<div class="container mx-auto py-16 px-5">
				<h2 class="text-4xl font-semibold">Cast</h2>
				<div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-16">
					@foreach($movie['credits']['cast'] as $cast)
				    @if($loop->index < 5)
					<div class="mt-8">
						<a href="#">
								<img src="{{'https://image.tmdb.org/t/p/w500/'.$cast['profile_path'] }}" alt="actor1" class="hover:opacity-75 transition ease-in-out duration-150">
						</a>
					    <div class="mt-2">
								<a href="#" class="text-lg mt-2 hover:text-gray-400">{{$cast['name']}}</a>
						<div class="text-sm text-gray-400">
							{{$cast['character']}}
						</div>
					
						</div>
					</div>
					@endif
					@endforeach
				
			</div>
			</div>
	</div>

	<!-- Movie Images begins -->
	<div class="movie-images" x-data="{isOpen : false, image: ''}" >
			<div class="container mx-auto py-16 px-5">
				<h2 class="text-4xl font-semibold">Images</h2>
				<div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-16">
					@foreach($movie['images']['backdrops'] as $image)
				    @if($loop->index < 9)
					<div class="mt-8">
						<a
						 @click.prevent=
						 "isOpen=true
						  image='{{'https://image.tmdb.org/t/p/original/'.$image['file_path'] }}'
						 "
						 href="#">
								<img src="{{'https://image.tmdb.org/t/p/w500/'.$image['file_path'] }}" alt="image1" class="hover:opacity-75 transition ease-in-out duration-150">
						</a>
					</div>
					@else 
					   @break
					@endif
					@endforeach
				
			</div>
	<div style="background-color:rgba(0, 0, 0, .5);" 
							x-show="isOpen"
						class="fixed top-0 left-0 w-full h-full flex items-center shadow-lg overflow-y-auto">
							<div class="container mx-auto overflow-y-auto lg:px-32 rounded-lg">
								<div class="bg-gray-900 rounded">
									<div class="flex pr-4 pt-2 justify-end">
										<button 
										@click="isOpen=false"
										@keydown.escape.window="isOpen=false"
										class="text-3xl leading-none hover:text-gray-300">
												&times;
										</button>
									
									</div>
									<div class="modal-body px-8 py-8">
										<img :src="image" alt="poster">
									</div>
								</div>
							
							</div>
						
						</div>
			


			</div>
	</div>
@endsection