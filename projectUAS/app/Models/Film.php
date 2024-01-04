<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Film extends Model
{
    use HasFactory,HasUuids;
    public function detail()
    {
        return $this->belongsTo(DetailFilm::class);
    }

    public function jadwal()
    {
        return $this->belongsTo(Jadwal::class);
    }

}
