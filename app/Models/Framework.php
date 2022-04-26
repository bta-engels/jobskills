<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Framework
 *
 * @property int $id
 * @property string $name
 * @method static \Illuminate\Database\Eloquent\Builder|Framework newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Framework newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Framework query()
 * @method static \Illuminate\Database\Eloquent\Builder|Framework whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Framework whereName($value)
 * @mixin \Eloquent
 */
class Framework extends Model
{
    use HasFactory;
    public $timestamps = false;
}
