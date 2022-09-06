<?php

namespace App\Models\Items;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Items extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = ["name", "price", "category_id"];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
