<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    public $timestamps = false;
    
    protected $table = "customers";

    protected $fillable = ['company','department','name','ruby','phone','email'];

    public function items(){
        return $this->belongsToMany(InquiryItem::class, 'customer_items');
    }
    
}
