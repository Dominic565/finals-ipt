<?php

namespace App\Http\Livewire\Anime;
use App\Models\Anime;
use App\Events\UserLog;
use Livewire\Component;

class Edit extends Component
{
    public $animesId;
    public $author, $email, $description, $episode, $year_released;
    public function mount() {
        $this->author = $this->anime->author;
        $this->email = $this->anime->email;
        $this->description = $this->anime->description;
        $this->episode = $this->anime->episode;
        $this->year_released = $this->anime->year_released;
      
    }

    public function editAnime() {
        $this->validate([
            'author'            =>          ['required', 'string', 'max:255'],
            'email'                     =>          ['required', 'string', 'max:255'],
            'description'                      =>          ['required', 'string', 'max:255'],
            'episode'            =>          ['required', 'string', 'max:255'],
            'year_released'                     =>          ['required', 'string', 'max:255'],
            
        ]);

        $this->anime->update([
            'author'                      =>      $this->author,
            'email'                      =>      $this->email,
            'description'                      =>      $this->description,
            'episode'                     =>      $this->episode,
            'year_released'            =>      $this->year_released,
           
        ]);
        $log_entry = ''. $this->anime->author . 'Updated Succesfully';
        event(new UserLog($log_entry));

        return redirect('/dashboard')->with('message', 'Updated Successfully');
    }

    public function back() {
        return redirect('/dashboard');
    }
    public function getAnimeProperty() {
        return Anime::find($this->animesId);
    }

    public function render()
    {
        return view('livewire.anime.edit');
    }
}
