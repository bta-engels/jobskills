<?php

namespace App\Models;

use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Cv
 *
 * @property int $id
 * @property int $customer_id
 * @property string|null $link
 * @property-read Customer|null $customer
 * @method static Builder|Cv newModelQuery()
 * @method static Builder|Cv newQuery()
 * @method static Builder|Cv query()
 * @method static Builder|Cv whereCustomerId($value)
 * @method static Builder|Cv whereId($value)
 * @method static Builder|Cv whereLink($value)
 * @mixin Eloquent
 */
class Cv extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $guarded = ['id'];

    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }
}
