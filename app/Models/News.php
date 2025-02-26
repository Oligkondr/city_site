<?php

namespace App\Models;

use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Storage;

/**
 *
 *
 * @property int $id
 * @property string $link
 * @property string $author
 * @property string $title
 * @property string $slug
 * @property string $content
 * @property Carbon $publish_at
 * @property int $category_id
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property-read \App\Models\NewsCategory|null $category
 * @property-read mixed $image_url
 * @method static Builder<static>|News newModelQuery()
 * @method static Builder<static>|News newQuery()
 * @method static Builder<static>|News query()
 * @method static Builder<static>|News whereAuthor($value)
 * @method static Builder<static>|News whereCategoryId($value)
 * @method static Builder<static>|News whereContent($value)
 * @method static Builder<static>|News whereCreatedAt($value)
 * @method static Builder<static>|News whereId($value)
 * @method static Builder<static>|News whereLink($value)
 * @method static Builder<static>|News wherePublishAt($value)
 * @method static Builder<static>|News whereSlug($value)
 * @method static Builder<static>|News whereTitle($value)
 * @method static Builder<static>|News whereUpdatedAt($value)
 * @mixin Eloquent
 */
class News extends Model
{
    protected $appends = [
        'image_url',
    ];

    public function getRouteKeyName(): string
    {
        return 'slug';
    }

    protected function casts(): array
    {
        return [
            'publish_at' => 'datetime',
        ];
    }

    public function category()
    {
        return $this->belongsTo(NewsCategory::class);
    }

    protected function imageUrl(): Attribute
    {
        $url = null;

        $file = "news/news_{$this->id}.jpg";

        if (Storage::exists($file)) {
            $url = Storage::url($file);
        }

        return Attribute::make(
            get: fn() => $url,
        );
    }
}
