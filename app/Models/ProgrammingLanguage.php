<?php

namespace App\Models;

use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\ProgrammingLanguage
 *
 * @property int $id
 * @property string $name
 * @method static Builder|ProgrammingLanguage newModelQuery()
 * @method static Builder|ProgrammingLanguage newQuery()
 * @method static Builder|ProgrammingLanguage query()
 * @method static Builder|ProgrammingLanguage whereId($value)
 * @method static Builder|ProgrammingLanguage whereName($value)
 * @mixin Eloquent
 */
class ProgrammingLanguage extends Model
{
    use HasFactory;
    public $timestamps = false;
}
