<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Orders extends Model
{
    protected $guarded = '';
    public function User()
    {
        return $this->belongsTo(User::class);
    }
    public function OrderDetail()
    {
        return $this->belongsToMany(Product::class)->withPivot('active', 'created_by');
    }
}
