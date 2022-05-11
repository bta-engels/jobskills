<?php

namespace App\Models;

use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\CustomerLanguage
 *
 * @property int $id
 * @property int $customer_id
 * @property int $language_id
 * @property int $level
 * @method static Builder|CustomerLanguage newModelQuery()
 * @method static Builder|CustomerLanguage newQuery()
 * @method static Builder|CustomerLanguage query()
 * @method static Builder|CustomerLanguage whereCustomerId($value)
 * @method static Builder|CustomerLanguage whereId($value)
 * @method static Builder|CustomerLanguage whereLanguageId($value)
 * @method static Builder|CustomerLanguage whereLevel($value)
 * @mixin Eloquent
 */
class CustomerLanguage extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $guarded = ['id'];

    public function language()
    {
        return $this->belongsTo(Language::class);
    }

}
