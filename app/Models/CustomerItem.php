<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CustomerItem extends Model
{
    protected $table = "customers_items";

    protected $fillable = ['content', 'customer_id', 'item_id'];
    
    /**
     * Casting to variable
     */
    protected $casts = [
        'customer_id' => 'integer',
        'item_id'     => 'integer'
    ];
}
