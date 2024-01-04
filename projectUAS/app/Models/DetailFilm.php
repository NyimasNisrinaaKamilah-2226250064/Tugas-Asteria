<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailFilm extends Model
{
    use HasFactory,HasUuids;

    public function film(){
        return $this->belongsTo(Film::class);
    }

}
