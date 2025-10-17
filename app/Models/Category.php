<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $table = 'categories';
    protected $fillable = [
        'name',
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
