<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FlashOffer extends Model
{
    use HasFactory;

    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    protected $table = "flash_offers";

    protected $fillable = [
        "start_date",
        "end_date",
        "is_active",
        "is_showing",
        "product_id",
    ];
}