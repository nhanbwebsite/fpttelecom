<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;
    protected $table = 'clients';
    protected $fillable = [
        'name',
        'phone',
        'province_code',
        'commune_code',
        'address',
        'wifi_product_id',
        'updated_at',
        'created_at',
        'deleted_at',
        'deleted',
    ];

    public function product()
    {
        return $this->belongsTo(WifiProduct::class, 'wifi_product_id', 'id');
    }
    public function province()
    {
        return $this->belongsTo(Province::class, 'province_code', 'code');
    }
    public function commune()
    {
        return $this->belongsTo(Commune::class, 'commune_code', 'code');
    }
}
