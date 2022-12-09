<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class ProductCategory extends Model
{
    use HasFactory;

    protected $fillable = [
            'name',
            'description',
            'tags',
            'thumbnail',
        ];
    public function Products()
    {
        return $this->hasMany(Product::class, 'categories_id', 'id');
    }

    use HasFactory, SoftDeletes;
}

