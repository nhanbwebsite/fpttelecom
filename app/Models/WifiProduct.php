<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WifiProduct extends Model
{
    use HasFactory;
    protected $table = 'wifi_products';
    protected $fillable = [
        'name',
        'slug',
        'price',
        'description',
        'utility',
        'image',
        'updated_at',
        'created_at',
        'deleted_at',
        'deleted',
        'updated_by',
        'deleted_by',
        'created_by',
        'deleted'
    ];
}
