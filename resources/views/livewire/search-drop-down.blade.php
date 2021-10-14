<div>
    	<div class="relative mt-3 md:mt-0">
						<input wire:model="search".debounce.500ms type="text" class="bg-gray-800 text-sm rounded-full w-64 pl-8 px-4 py-1 focus:outline-none focus:shadow-outline" placeholder="Search">
						<div class="absolute top-0">
						<svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-4 mt-1 ml-2" viewBox="0 0 20 20" fill="currentColor">
  <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd" />
</svg>
						</div>
                        
                        <!-- loading spinner -->
                        <div wire:loading class="spinner top-0 mr-4 right-0 mt-3"></div>
                        <!-- displaying the search results if the search input is greater than or equal to 2 ie if there is any input  -->
                        @if(strlen($search >=2))
                        <div class="absolute bg-gray-800 text-sm rounded w-64 mt-4">
                            <ul>
                            <!-- checking if the are results from the search -->
                            @if($searchResults->count() > 0)
                            <!-- displaying the search results from the array to the view -->
                             @foreach($searchResults as $result)
                                <li class="border-b border-gray-700">
                                <!-- redirecting the user to the details page and retrieving the id of the movie -->
                                <a href="{{route('movies.show', $result['id'])}}" class=" flex items-center block hover:border-gray-700 px-3 py-3">
                                    <!-- checking if the results have a poster image -->
                                    @if($result['poster_path'])
                                    <!-- retrieving the image and the title from the api -->
                                    <img src="https://image.tmdb.org/t/p/w92/{{$result['poster_path']}}" class="w-8" alt="">
                                  @else
                                        <!-- defaulting the placeholder poster if the results do not have an image -->
                                        <img src="https://via.placeholder.com/56x75" alt="poster" class="w-8">
                                   @endif
                                   <span class="ml-4"> {{$result['title']}} </span>
                                    </a>
                                </li>
                                @endforeach

                                <!-- Displaying the message when there are no results for the search -->
                                @else
                                    <div class="px-3 py-3">No results for {{$search}}</div>
                            @endif
                            </ul>
                        
                        </div>
                        @endif

</div>
