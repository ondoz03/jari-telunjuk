<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserWantRead extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'buku_id',
        'status'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function buku()
    {
        return $this->belongsTo(Buku::class)->with('detail_buku', 'kategori');
    }
}
