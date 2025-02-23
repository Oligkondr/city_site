<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * 
 *
 * @property int $id
 * @property string $link
 * @property string $author
 * @property string $title
 * @property string $content
 * @property \Illuminate\Support\Carbon $publish_at
 * @property int $category_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\NewsCategory|null $category
 * @method static \Illuminate\Database\Eloquent\Builder<static>|News newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|News newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|News query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|News whereAuthor($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|News whereCategoryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|News whereContent($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|News whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|News whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|News whereLink($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|News wherePublishAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|News whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|News whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class News extends Model
{
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
}
