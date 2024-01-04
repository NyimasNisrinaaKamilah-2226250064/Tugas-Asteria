<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kota extends Model
{
    use HasFactory,HasUuids;
    public function bioskop()
    {
        return $this->hasMany(Bioskop::class,"kota_id");
    }
}
