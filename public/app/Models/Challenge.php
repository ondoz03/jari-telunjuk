<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Challenge extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_want_read_id',
        'start_date',
        'end_date',
        'page_start',
        'page_end',
        'is_status'
    ];


    public function user_want_read()
    {
        return $this->belongsTo(UserWantRead::class);
    }
}
