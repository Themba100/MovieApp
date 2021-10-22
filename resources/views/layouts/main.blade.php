<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel ="stylesheet" href="{{mix('css/app.css')}}">
	<livewire:styles />
	<title>Movie App</title>
   <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>


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
						<livewire:search-drop-down>
					</div>
					<div class="md:ml-4 mt-3 md:mt-0">
						<img src="/img/avatar.jpg" alt="avatar" class="rounded-full w-8 h-8 ">
					</div>
				</div>
		</div>
	</nav>
	
	@yield('content')
	<livewire:scripts />
</body>
</html>