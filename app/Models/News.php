<?php

namespace App\Models;

use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Carbon;

/**
 * 
 *
 * @property int $id
 * @property string $link
 * @property string $author
 * @property string $title
 * @property string $content
 * @property Carbon $publish_at
 * @property int $category_id
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property-read \App\Models\NewsCategory $category
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
 * @method static Builder<static>|News whereTitle($value)
 * @method static Builder<static>|News whereUpdatedAt($value)
 * @mixin Eloquent
 */
class News extends Model
{
    protected function casts(): array
    {
        return [
            'publish_at' => 'datetime',
        ];
    }

    public function category(): BelongsTo
    {
        return $this->belongsTo(NewsCategory::class);
    }
}
