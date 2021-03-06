<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'description', 'originalTitle', 'duration', 'year', 'image'];

    public function genres()
    {
        return $this->belongsToMany(Genre::class, 'movie_genre');
    }

    public function people()
    {
        return $this->belongsToMany(Person::class, 'movie_person');
    }

    public function moments()
    {
        return $this->hasMany(Moment::class);
    }
}
