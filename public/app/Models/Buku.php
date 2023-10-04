<?php

namespace App\Models;

use App\Helpers\GeneralHelper;
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


class Buku extends Model implements HasMedia
{
    use HasFactory, InteractsWithMedia, HasSlug, Searchable;


    protected $fillable = [
        'uuid',
        'judul',
        'slug',
        'penulis',
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

    public function detail_buku()
    {
        return $this->hasOne(DetailBuku::class);
    }

    public function getImageAttribute()
    {
        $media = $this->getMedia('default');
        if ($media->count() > 0) {
            $firstMedia = $media->first();
            $name = $firstMedia->id . '/' . $firstMedia->file_name;
            // $url = GeneralHelper::getFileUrl('buku/' . $name);
            $url = 'https://ik.imagekit.io/jo9x79wnz/' . $name;
            return $url;
        } else {
            return 'https://ui-avatars.com/api/?name=' . urlencode($this->attributes['judul']);
        }
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



    public function peminjamanitem()
    {
        return $this->hasMany(PeminjamanItem::class);
    }

    public function cart()
    {
        return $this->hasMany(Cart::class);
    }

    /**
     * Get the indexable data array for the model.
     *
     * @return array
     */
    #[SearchUsingPrefix(['judul'])]

    public function toSearchableArray()
    {
        return [
            'judul' => $this->judul,
        ];
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
        return $this->belongsToMany(Kategori::class);
    }
}
