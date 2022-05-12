<?php

namespace App\Models;

use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

/**
 * App\Models\CustomerProject
 *
 * @property int $id
 * @property int $customer_id
 * @property string $name
 * @property string|null $description
 * @property Carbon $from
 * @property Carbon $until
 * @property-read Customer|null $customer
 * @method static Builder|CustomerProject newModelQuery()
 * @method static Builder|CustomerProject newQuery()
 * @method static Builder|CustomerProject query()
 * @method static Builder|CustomerProject whereCustomerId($value)
 * @method static Builder|CustomerProject whereDescription($value)
 * @method static Builder|CustomerProject whereFrom($value)
 * @method static Builder|CustomerProject whereId($value)
 * @method static Builder|CustomerProject whereName($value)
 * @method static Builder|CustomerProject whereUntil($value)
 * @mixin Eloquent
 */
class CustomerProject extends Model
{
    use HasFactory;
    protected $table = 'projects';
    public $timestamps = false;
    protected $guarded = ['id'];

    protected $dates = ['from', 'until'];
    protected $casts = [
        'from'  => 'date:Y-m-d',
        'until'  => 'date:Y-m-d',
    ];

    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }
}
