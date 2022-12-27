<?php

namespace App\Http\Livewire\Anime;

use Livewire\Component;
use App\Models\Anime;
use Livewire\WithPagination;

class Index extends Component
{
    public $search, $year_released = 'all', $episode= 'all';
    use withPagination;
    protected $paginationTheme ="bootstrap";
    public function loadAnimes() {
        $query = Anime::orderBy('author')
               ->search($this->search);

        if($this->year_released != 'all') {
            $query->where('year_released', $this->year_released);
        }
        if($this->episode != 'all'){
            $query->where('episode', $this->episode);
        }

        $animes = $query->paginate(2);

        return compact('animes');
    }

    public function render()
    {
        return view('livewire.anime.index', $this->loadAnimes());
    }
}
