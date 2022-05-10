<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CustomerLanguage extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $guarded = ['id'];

    public function customer()
    {
        return $this->hasOne(Customer::class);
    }

    public function language()
    {
        return $this->hasOne(Language::class);
    }
}
