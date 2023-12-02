<?php

namespace App\Models;

use http\Env\Request;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    // Обратная связь один ко многим (от FK к PK)
    public function category() {
        return $this->belongsTo(Category::class);
    }
    protected $fillable = ['name', 'price', 'quantity', 'description', 'category_id'];
}
