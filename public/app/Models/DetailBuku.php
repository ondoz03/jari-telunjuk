<?php

namespace App\Models;

use App\Helpers\GeneralHelper;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailBuku extends Model
{
    use HasFactory;

    protected $fillable = [
        'buku_id',
        'tgl_rilis',
        'bahasa',
        'penerbit',
        'negara',
        'jumlah_halaman',
        'description',
        'jumlah_buku',
        'kategori_id'

    ];

    public function buku()
    {
        return $this->belongsTo(Buku::class);
    }

    public function getDescriptionAttribute()
    {
        return GeneralHelper::replace_utf8($this->attributes['description']);
    }

    // public function kategori()
    // {
    //     return $this->belongsTo(Kategori::class);
    // }
}
