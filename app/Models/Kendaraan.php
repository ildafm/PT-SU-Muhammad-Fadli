<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Kendaraan extends Model
{
    //

    protected $fillable = ['nomor_polisi', 'merek', 'kategori_id', 'deskripsi'];

    public function kategori(): BelongsTo
    {
        return $this->belongsTo(KategoriKendaraan::class);
    }
}
