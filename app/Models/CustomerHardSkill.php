<?php

namespace App\Models;

use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\CustomerHardSkill
 *
 * @property int $id
 * @property int $customer_id
 * @property string $name
 * @property string|null $description
 * @property-read Customer|null $customer
 * @method static Builder|CustomerHardSkill newModelQuery()
 * @method static Builder|CustomerHardSkill newQuery()
 * @method static Builder|CustomerHardSkill query()
 * @method static Builder|CustomerHardSkill whereCustomerId($value)
 * @method static Builder|CustomerHardSkill whereDescription($value)
 * @method static Builder|CustomerHardSkill whereId($value)
 * @method static Builder|CustomerHardSkill whereName($value)
 * @mixin Eloquent
 */
class CustomerHardSkill extends Model
{
    use HasFactory;
    protected $table = 'hard_skills';
    public $timestamps = false;
    protected $guarded = ['id'];

    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }
}
