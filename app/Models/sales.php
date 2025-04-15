<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\customers;
use App\Models\User;

class sales extends Model
{
    use HasFactory;
    protected $table = 'sales';

    protected $fillable = [
        'sale_date',
        'total_price',
        'total_pay',
        'total_return',
        'customer_id',
        'staff_id',
        'poin',
        'total_poin',
        
    ];

    public function customer()
    {
        return $this->belongsTo(customers::class);
    }

    public function staff()
    {
        return $this->belongsTo(User::class);
    }

}
