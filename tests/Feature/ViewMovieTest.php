<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Http;
use Tests\TestCase;

class ViewMovieTest extends TestCase
{
    public function the_main_page_shows_correct_info()
    {
        Http::fake([
            'https://api.themoviedb.org/3/movie/*'=> $this->fakeSingleMovie(),
        ]);
         
        $response = $this->get(route('movies.index'));

        $response->assertSuccessiful();
        $response->assertSee('Popular Movies');
    }
    public function search_movie_works_correctly(){
        Http::fake([
            'https://api.themoviedb.org/search/movie?query=jumanji'=> $this->fakeSearchMovie(),
        ]);
           
    }

}
