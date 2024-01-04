<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Film extends Model
{
    use HasFactory,HasUuids;

    public function jadwal()
    {
        return $this->hasMany(Jadwal::class,"film_id");
    }
}
