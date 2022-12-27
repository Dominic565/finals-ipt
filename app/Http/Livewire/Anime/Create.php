<?php

namespace App\Http\Livewire\Anime;

use Livewire\Component;
use App\Models\Anime;
use App\Models\Log;
use App\Events\UserLog;

class Create extends Component
{
    public $author, $email, $description, $episode, $year_released ;

    public function addAnime() {
        $this->validate([
            'author'                      =>         ['required', 'string', 'max:255'],
            'email'                      =>          ['required', 'string', 'max:255'],
            'description'                      =>         ['required', 'string', 'max:255'],
            'episode'                     =>          ['required', 'string', 'max:255'],
            'year_released'            =>          ['required', 'string', 'max:255'],
           
        ]);

        $anime = Anime::create([
            'author'                 =>      $this->author,
            'email'                 =>      $this->email,
            'description'                  =>      $this->description,
            'episode'                 =>      $this->episode,
            'year_released'        =>      $this->year_released,
            
        ]);
        $log_entry = 'Added a new anime'. $anime->author . 'with the ID' . $anime->id;
        event(new UserLog($log_entry));

        return redirect('/animes')->with('message', 'Added Successfully');
    }

    public function updated($propertyEmail) {
        $this->validateOnly($propertyEmail, [
            'email'         =>      ['required', 'string', 'max:255'],
        ]);
    }


    public function render()
    {
        return view('livewire.anime.create');
    }
}
