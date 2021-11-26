<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $guarded = '';
    public function User()
    {
        $this->belongsTo(User::class);
    }
    public function OrderDetail()
    {
        return $this->belongsToMany(Orders::class);
    }
    public function ProductImg()
    {
        return $this->hasMany(ProductImg::class);
    }
}
