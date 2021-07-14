<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    use HasFactory;

    protected $fillable = [
        'movie_name',
        'description',
        'director',
        'counrty',
        'rating',
        'status'
    ];

    public function container() {
        return $this->belongsTo('App\Models\Movie');
    }
}
