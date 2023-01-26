<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable =[
        'total',
        'VAT',
        'order_type'
    ];

    public function coffee()
    {
        return $this->belongsToMany(Coffee::class)->withPivot('qty', 'sub_total');
    }
}
