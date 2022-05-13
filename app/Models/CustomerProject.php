<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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

    public function customer ()
    {
        return $this->belongsTo(Customer::class);
    }
}
