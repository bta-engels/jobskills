<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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
