<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Drugs extends Model
{
    use HasFactory;

    protected $fillable = [
        'generic_name',
        'buying_price',
        'selling_price',
        'stock_quantity',
        'drug_category'
    ];
}
