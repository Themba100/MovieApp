<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	    <link rel ="stylesheet" href="{{mix('css/app.css')}}">
	<title>Movie App</title>
</head>
<body class="font-sans bg-gray-900 text-white">
	<nav class="border-b border-gray-800">
		<div class="container mx-auto flex flex-col md:flex-row items-center justify-between px-4 py-6">
				<ul class="flex flex-col md:flex-row items-center ">
				
				<li>
					<a href="#">
					<svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-32" fill="none" viewBox="0 0 24 24" stroke="currentColor">
  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 4v16M17 4v16M3 8h4m10 0h4M3 12h18M3 16h4m10 0h4M4 20h16a1 1 0 001-1V5a1 1 0 00-1-1H4a1 1 0 00-1 1v14a1 1 0 001 1z" />

</svg>

					</a>
				</li>
				<li class="md:ml-16">
					<a href="/" class="hover:text-gray-300 mt-3 md:mt-0">Movies</a>
				</li>
				<li class="md:ml-16">
					<a href="#" class="hover:text-gray-300 mt-3 md:mt-0">TV Shows</a>
				</li>
				<li class="md:ml-16">
					<a href="#" class="hover:text-gray-300 mt-3 md:mt-0">Actors</a>
				</li>
				</ul>
				<div class="flex flex-col md:flex-row items-center">
					<div class="relative mt-3 md:mt-0">
						<input type="text" class="bg-gray-800 text-sm rounded-full w-64 pl-8 px-4 py-1 focus:outline-none focus:shadow-outline" placeholder="Search">
						<div class="absolute top-0">
						<svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-4 mt-1 ml-2" viewBox="0 0 20 20" fill="currentColor">
  <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd" />
</svg>
						</div>

					</div>
					<div class="md:ml-4 mt-3 md:mt-0">
						<img src="/img/avatar.jpg" alt="avatar" class="rounded-full w-8 h-8 ">
					</div>
				</div>
		</div>
	</nav>
	@yield('content')
</body>
</html>