<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $primaryKey = 'product_no';
    public $incrementing = false;
    protected $keyType = 'string';

    use HasFactory;
    protected $fillable = [
        'product_no',
        'product_name',
        'unit_price',
        'product_image',
        'status',
        'category_id',
    ];

    public function category(){
        return $this->belongsTo(Category::class);
    }

}
