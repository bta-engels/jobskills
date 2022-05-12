<?php

namespace App\Models;

use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\CustomerProgrammingLanguage
 *
 * @property int $id
 * @property int $customer_id
 * @property int $programming_language_id
 * @property int $level
 * @property-read Customer|null $customer
 * @property-read Language|null $language
 * @method static Builder|CustomerProgrammingLanguage newModelQuery()
 * @method static Builder|CustomerProgrammingLanguage newQuery()
 * @method static Builder|CustomerProgrammingLanguage query()
 * @method static Builder|CustomerProgrammingLanguage whereCustomerId($value)
 * @method static Builder|CustomerProgrammingLanguage whereId($value)
 * @method static Builder|CustomerProgrammingLanguage whereLevel($value)
 * @method static Builder|CustomerProgrammingLanguage whereProgrammingLanguageId($value)
 * @mixin Eloquent
 */
class CustomerProgrammingLanguage extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $guarded = ['id'];

    public function programmingLanguage()
    {
        return $this->belongsTo(ProgrammingLanguage::class);
    }

    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }
}
