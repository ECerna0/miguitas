<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categorie extends Model
{
    use HasFactory;

    public function products()
    {
        return $this->hasMany(Product::class, "categorie_id");
    }


    public function subcategories() {
        return $this->belongsTo(Categorie::class);
    }
    public function parent() {
        return $this->hasOne(Categorie::class);
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'image',
    ];
}
