<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $table = "customers";

    protected $fillable = ['company','department','name','furiguna','phone','email'];

    public function items(){
        return $this->belongsToMany(Item::class, 'customer_items');
    }
}
