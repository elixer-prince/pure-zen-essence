<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * This is a product sold by the Pure Zen Essence business.
 */
class Product extends Model
{
    use HasFactory;

    protected $fillable = ["image", "title", "description", "sizes"];

    // Converts the JSON data (saved as a very large string) to an array
    protected $casts = [
        "sizes" => "array",
    ];
}
