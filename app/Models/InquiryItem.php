<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class InquiryItem extends Model
{
    protected $table = 'inquiry_items';
    
    protected $fillable =['name','description'];

    public function customers(){
        return $this->belongsToMany(Customer::class, 'customer_inquiry_items');
    }
    
}
