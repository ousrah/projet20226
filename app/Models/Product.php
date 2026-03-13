<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Product extends Model
{
   use HasFactory;
 // protected $table = 'products';
/**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'name',
        'description',
        'stock',
        'price',
        'is_active'
    ];

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);

    }
}
