<?php

namespace App\Models;

use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\CustomerEducation
 *
 * @property int $id
 * @property int $customer_id
 * @property string $name
 * @property string|null $description
 * @property string $from
 * @property string $until
 * @property-read Customer|null $customer
 * @method static Builder|CustomerEducation newModelQuery()
 * @method static Builder|CustomerEducation newQuery()
 * @method static Builder|CustomerEducation query()
 * @method static Builder|CustomerEducation whereCustomerId($value)
 * @method static Builder|CustomerEducation whereDescription($value)
 * @method static Builder|CustomerEducation whereFrom($value)
 * @method static Builder|CustomerEducation whereId($value)
 * @method static Builder|CustomerEducation whereName($value)
 * @method static Builder|CustomerEducation whereUntil($value)
 * @mixin Eloquent
 */
class CustomerEducation extends Model
{
    use HasFactory;

    protected $table = 'education';
    public $timestamps = false;
    protected $guarded = ['id'];

    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }


}
