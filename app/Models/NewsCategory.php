<?php

namespace App\Models;

use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Carbon;

/**
 * 
 *
 * @property int $id
 * @property string $name
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\News> $news
 * @property-read int|null $news_count
 * @method static Builder<static>|NewsCategory newModelQuery()
 * @method static Builder<static>|NewsCategory newQuery()
 * @method static Builder<static>|NewsCategory query()
 * @method static Builder<static>|NewsCategory whereCreatedAt($value)
 * @method static Builder<static>|NewsCategory whereId($value)
 * @method static Builder<static>|NewsCategory whereName($value)
 * @method static Builder<static>|NewsCategory whereUpdatedAt($value)
 * @mixin Eloquent
 */
class NewsCategory extends Model
{
    public function news(): HasMany
    {
        return $this->hasMany(News::class);
    }
}
