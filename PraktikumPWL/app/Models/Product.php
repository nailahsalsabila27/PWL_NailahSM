<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Testing\Fluent\Concerns\Has;

class Product extends Model
{
    use HasFactory;

    /**
     * kolom yg blh diisi scr massal
     * sesuaikan dg field di migrasi td
     */
    protected $fillable = [
        'name',
        'sku',
        'description',
        'price',
        'stock',
        'image',
        'is_active',
        'is_featured'
    ];

    /**
     * casting tipe data (opsional tp disarankan)
     * agar laravel otomatis mengubah string dr DB mjd tipe data yg benar
     */

    protected $casts = [
        'is_active' => 'boolean',
        'is_featured' => 'boolean',
        'price' => 'integer',
        'stock' => 'integer',
    ];
}
