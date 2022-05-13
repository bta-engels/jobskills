<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CustomerHardskill extends Model
{
    use HasFactory;
    protected $table = 'hard_skills';
    public $timestamps = false;
    protected $guarded = ['id'];

    public function customer ()
    {
        return $this->belongsTo(Customer::class);
    }
}
