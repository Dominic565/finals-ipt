<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Anime extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function scopeSearch($query, $terms){
        collect(explode(" ", $terms))
            ->filter()
            ->each(function ($term) use ($query){
                $term='%' . $term . '%';

                $query->where('author','like',$term)
                    ->orWhere('email', 'like', $term);
            });

    }
}
