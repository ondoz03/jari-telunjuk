<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Ramsey\Uuid\Uuid;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;
use BinaryCats\Sku\HasSku;
use BinaryCats\Sku\Concerns\SkuOptions;
use Carbon\Carbon;
use Faker\Factory;
use Laravel\Scout\Searchable;
use Laravel\Scout\Attributes\SearchUsingPrefix;
use Laravel\Scout\Builder;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
use Str;

class Buku extends Model implements HasMedia
{
    use Searchable, HasFactory, InteractsWithMedia, HasSlug;

    protected $fillable = [
        'uuid',
        'judul',
        'slug',
        'penulis',
        'isbn'
    ];

    protected $appends = [
        'image'
    ];

    /**
     * Get the options for generating the slug.
     */
    public function getSlugOptions(): SlugOptions
    {
        return SlugOptions::create()
            ->generateSlugsFrom('judul')
            ->saveSlugsTo('slug');
        //            ->preventOverwrite();
    }
    /**
     * Get the options for generating the Sku.
     *
     * @return BinaryCats\Sku\SkuOptions
     */
    // public function skuOptions(): SkuOptions
    // {
    //     return SkuOptions::make()
    //         ->from('buku.judul')
    //         ->target('code')
    //         ->using('_')
    //         ->forceUnique(false)
    //         ->generateOnCreate(true)
    //         ->refreshOnUpdate(false);
    // }


    protected static function boot()
    {
        parent::boot();
        static::creating(function ($q) {
            $q->uuid = Uuid::uuid4();
        });
    }

    public function getPenulisAttribute()
    {
        $data = json_decode($this->attributes['penulis']);

        $penulis = [];
        foreach ($data as $key => $value) {
            $penulis[] = Str::replace('.', ' ',  $value);
        }


        $penulisString = implode(', ', $penulis);
        return $penulisString;
    }

    public function getPenulisArrayAttribute()
    {
        $data = json_decode($this->attributes['penulis']);

        $penulis = [];
        $index = 0;
        foreach ($data as $key => $value) {
            if (in_array($value, config('cons.list_gelar_short'))) {
                $penulis[($index - 1)]['text'] .= ' ' . $value;
                $penulis[($index - 1)]['key'] .= ' 0 ' . $value;
            } else {
                $penulis[$index]['text'] = $value;
                $penulis[$index]['key'] = $value;
                $index++;
            }
        }

        return $penulis;
    }

    public function detail_buku()
    {
        return $this->hasOne(DetailBuku::class);
    }

    public function getImageAttribute()
    {
        $media = $this->getMedia('book');
        if ($media->count() > 0) {
            $firstMedia = $media->first()->getFullUrl('thumb');
            // $name = $firstMedia->id . '/' . $firstMedia->file_name;
            // // $url = GeneralHelper::getFileUrl('buku/' . $name);
            // // $url = 'https://ik.imagekit.io/jo9x79wnz/' . $name;
            // $url = 'https://cdn.jaritelunjuk.com/' . 'book/conversions/' . $name;
            return $firstMedia;
        } else {
            return 'https://cdn.jaritelunjuk.com/web-asset/default-book.jpg';
        }
    }

    public function registerMediaConversions(Media $media = null): void
    {
        $this->addMediaConversion('thumb')
            ->performOnCollections('book')
            ->width(361)
            ->height(535);
    }

    public function getNewBookAttribute()
    {
        $newBookDate = $this->attributes['created_at'];
        if (Carbon::now()->between(Carbon::parse($newBookDate), Carbon::parse($newBookDate)->add(7, 'day'))) {
            return true;
        } else {
            return false;
        }
    }

    /**
     * Get the indexable data array for the model.
     *
     * @return array
     */
    #[SearchUsingPrefix(['judul'])]
    #[SearchUsingPrefix(['penulis'])]

    public function toSearchableArray()
    {
        return [
            'judul' => $this->judul,
            'penulis' => $this->penulis,

        ];
    }

    public function shouldBeSearchable()
    {
        return $this->isPublished();
    }

    public function getScoutModelsByIds(Builder $builder, array $ids)
    {
        $query = static::usesSoftDelete()
            ? $this->withTrashed() : $this->newQuery();

        if ($builder->queryCallback) {
            call_user_func($builder->queryCallback, $query); // here
        }

        return $query->whereIn(
            $this->getScoutKeyName(),
            $ids
        )->get();
    }

    public function kategori()
    {
        return $this->belongsToMany(Kategori::class, 'buku_kategori', 'buku_id', 'kategori_id');
    }

    public function user_want_read()
    {
        return $this->hasMany(UserWantRead::class);
    }

    public function reviews()
    {
        return $this->hasMany(Review::class);
    }

    public function getCountRatingAttribute()
    {
        if ($this->reviews()->count() > 0) {
            return round($this->reviews()->sum('star') / $this->reviews()->count(), 2);
        } else {
            return 0;
        }
    }

    public function getRatingAttribute()
    {
        $min_stars = 1;
        $max_stars = 5;
        $temp_stars = $this->reviews()->count() > 0 ? round($this->reviews()->sum('star') / $this->reviews()->count()) : 0;
        for ($i = $min_stars; $i <= $max_stars; $i++) {
            if ($temp_stars >= 1) {
                echo '<span class="fa fa-star checked"></span>';
                $temp_stars--;
            } else {
                echo '<span class="fa fa-star"></span>';
            }
        }
    }

    public function getReviewUserAttribute()
    {
        return $this->reviews()->where('user_id', auth()->user()->id)->first();
    }

    public function getReviewFiveAttribute()
    {
        if ($this->reviews()->where('star', 5)->count() > 0) {
            return round($this->reviews()->where('star', 5)->count() / $this->reviews()->count()) * 100;
        } else {
            return 0;
        }
    }

    public function getReviewFourAttribute()
    {
        if ($this->reviews()->where('star', 4)->count() > 0) {
            return round($this->reviews()->where('star', 4)->count() / $this->reviews()->count()) * 100;
        } else {
            return 0;
        }
    }

    public function getReviewThreeAttribute()
    {
        if ($this->reviews()->where('star', 3)->count() > 0) {
            return round($this->reviews()->where('star', 3)->count() / $this->reviews()->count()) * 100;
        } else {
            return 0;
        }
    }

    public function getReviewTwoAttribute()
    {
        if ($this->reviews()->where('star', 2)->count() > 0) {
            return round($this->reviews()->where('star', 2)->count() / $this->reviews()->count()) * 100;
        } else {
            return 0;
        }
    }

    public function getReviewOneAttribute()
    {
        if ($this->reviews()->where('star', 2)->count() > 0) {
            return round($this->reviews()->where('star', 2)->count() / $this->reviews()->count()) * 100;
        } else {
            return 0;
        }
    }
}
