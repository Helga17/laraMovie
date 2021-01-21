<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    use HasFactory;

    protected $table = 'people';

    protected $fillable = [
        'first_name',
        'last_name',
        'birthday',
        'image'
    ];

    public function movies()
    {
        return $this->belongsToMany(Movie::class, 'movie_person');
    }
}

