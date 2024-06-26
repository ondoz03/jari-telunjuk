<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Ramsey\Uuid\Uuid;

class Review extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'buku_id',
        'user_id',
        'star',
        'review'
    ];


    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function buku()
    {
        return $this->belongsTo(Buku::class)->with('detail_buku', 'kategori');
    }

    public function getRatingAttribute()
    {
        $min_stars = 1;
        $max_stars = 5;
        $temp_stars = $this->star;
        for ($i = $min_stars; $i <= $max_stars; $i++) {
            if ($temp_stars >= 1) {
                echo '<button id="star-btn" class="group [&>svg]:fill-yellow-500 text-yellow-500" onclick="addReview(' . $i . ')">
                <svg xmlns="http://www.w3.org/2000/svg"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke-width="1.5"
                    stroke="currentColor"
                    class="h-7 w-7 transition-all duration-100 ease-in">
                    <path stroke-linecap="round"
                        stroke-linejoin="round"
                        d="M11.48 3.499a.562.562 0 011.04 0l2.125 5.111a.563.563 0 00.475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 00-.182.557l1.285 5.385a.562.562 0 01-.84.61l-4.725-2.885a.563.563 0 00-.586 0L6.982 20.54a.562.562 0 01-.84-.61l1.285-5.386a.562.562 0 00-.182-.557l-4.204-3.602a.563.563 0 01.321-.988l5.518-.442a.563.563 0 00.475-.345L11.48 3.5z">
                    </path>
                </svg>
            </button>';
                $temp_stars--;
            } else {
                echo '<button id="star-btn" class="group text-stone-400" onclick="addReview(' . $i . ')">
                <svg xmlns="http://www.w3.org/2000/svg"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke-width="1.5"
                    stroke="currentColor"
                    class="h-7 w-7 transition-all duration-100 ease-in">
                    <path stroke-linecap="round"
                        stroke-linejoin="round"
                        d="M11.48 3.499a.562.562 0 011.04 0l2.125 5.111a.563.563 0 00.475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 00-.182.557l1.285 5.385a.562.562 0 01-.84.61l-4.725-2.885a.563.563 0 00-.586 0L6.982 20.54a.562.562 0 01-.84-.61l1.285-5.386a.562.562 0 00-.182-.557l-4.204-3.602a.563.563 0 01.321-.988l5.518-.442a.563.563 0 00.475-.345L11.48 3.5z">
                    </path>
                </svg>
            </button>';
            }
        }
    }

    public function getRatingReviewAttribute()
    {
        $min_stars = 1;
        $max_stars = 5;
        $temp_stars = $this->attributes['star'];
        for ($i = $min_stars; $i <= $max_stars; $i++) {
            if ($temp_stars >= 1) {
                echo '<span class="fa fa-star checked"></span>';
                $temp_stars--;
            } else {
                echo '<span class="fa fa-star"></span>';
            }
        }
    }
    public function review_like()
    {
        return $this->hasMany(ReviewLike::class);
    }
}
