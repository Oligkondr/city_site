<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * 
 *
 * @property int $id
 * @property string $name
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder<static>|NewsCategory newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|NewsCategory newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|NewsCategory query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|NewsCategory whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|NewsCategory whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|NewsCategory whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|NewsCategory whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class NewsCategory extends Model
{
    //
}
