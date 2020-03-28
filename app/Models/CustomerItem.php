<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CustomerItem extends Model
{
    protected $table = "customers_inquiry_items";

    protected $fillable = ['content', 'customer_id', 'inquiry_item_id'];
    
    /**
     * Casting to variable
     */
    protected $casts = [
        'customer_id' => 'integer',
        'inquiry_item_id'     => 'integer'
    ];
}
