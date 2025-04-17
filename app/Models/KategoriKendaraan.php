<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class KategoriKendaraan extends Model
{
    //
    public function kendaraans(): HasMany
    {
        return $this->hasMany(Kendaraan::class);
    }
}
