<?php

namespace App\Models;

use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\CustomerFramework
 *
 * @property int $id
 * @property int $customer_id
 * @property int $framework_id
 * @property int $level
 * @property-read Customer|null $customer
 * @property-read Framework|null $framework
 * @method static Builder|CustomerFramework newModelQuery()
 * @method static Builder|CustomerFramework newQuery()
 * @method static Builder|CustomerFramework query()
 * @method static Builder|CustomerFramework whereCustomerId($value)
 * @method static Builder|CustomerFramework whereFrameworkId($value)
 * @method static Builder|CustomerFramework whereId($value)
 * @method static Builder|CustomerFramework whereLevel($value)
 * @mixin Eloquent
 */
class CustomerFramework extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $guarded = ['id'];

    public function framework()
    {
        return $this->belongsTo(Framework::class);
    }

    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }
}
