<?php

namespace App\Http\Livewire;
use Illuminate\Support\Facades\Http;
use Livewire\Component;

class SearchDropDown extends Component
{
    public $search = '';

    public function render()
    {
        $searchResults = [];
            
            //searching when input characters is greater than 2 
            if(strlen($this->search >= 2)){  
                $searchResults = Http::withToken(config('services.tmdb.token'))
                ->get('https://api.themoviedb.org/3/search/movie?query='.$this->search)
                ->json()['results'];
                }

        // dump($searchResults);

        return view('livewire.search-drop-down',[
            
            // specifying the number of search results you need
            'searchResults' => collect($searchResults)->take(7),

        ]);
    }
}
