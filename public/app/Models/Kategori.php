<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Ramsey\Uuid\Uuid;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;
use Laravel\Scout\Searchable;
use Laravel\Scout\Attributes\SearchUsingPrefix;
use Laravel\Scout\Builder;

class Kategori extends Model
{
    use HasFactory, HasSlug, Searchable;
    use \Staudenmeir\EloquentEagerLimit\HasEagerLimit;

    protected $fillable = [
        'uuid',
        'name',
        'slug',
        'description',
        'faq'
    ];

    protected static function boot()
    {
        parent::boot();
        static::creating(function ($q) {
            return $q->uuid = Uuid::uuid4();
        });
    }

    /**
     * Get the options for generating the slug.
     */
    public function getSlugOptions(): SlugOptions
    {
        return SlugOptions::create()
            ->generateSlugsFrom('name')
            ->saveSlugsTo('slug');
    }

    public function buku()
    {
        return $this->belongsToMany(Buku::class, 'buku_kategori', 'kategori_id', 'buku_id');
    }

    public function buku_limit()
    {
        return $this->belongsToMany(Buku::class, 'buku_kategori', 'kategori_id', 'buku_id')->limit(4);
    }

    /**
     * Get the indexable data array for the model.
     *
     * @return array
     */
    #[SearchUsingPrefix(['name'])]

    public function toSearchableArray()
    {
        return [
            'name' => $this->name,
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
}
