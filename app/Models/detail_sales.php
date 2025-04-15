<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\products;
use App\Models\Sales;

class detail_sales extends Model
{
    use HasFactory;

    protected $table = 'detail_sales';

    protected $fillable = [
        'product_id',
        'sale_id',
        'quantity',
        'sub_total',
    ];

    // tambahkan relation

    public function product()
    {
        return $this->belongsTo(products::class);
    }

    public function sale()
    {
        return $this->belongsTo(Sales::class);   
    }
}
