<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    protected $table = 'items';
    
    protected $fillable =['name','description'];

    public function customers(){
        return $this->belongsToMany(Customer::class, 'customer_items');
    }
    
}
