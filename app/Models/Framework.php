<?php

namespace App\Models;

use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Framework
 *
 * @property int $id
 * @property string $name
 * @method static Builder|Framework newModelQuery()
 * @method static Builder|Framework newQuery()
 * @method static Builder|Framework query()
 * @method static Builder|Framework whereId($value)
 * @method static Builder|Framework whereName($value)
 * @mixin Eloquent
 */
class Framework extends Model
{
    use HasFactory;
    public $timestamps = false;
}
