<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'categories';

    protected $fillable = [
        'name',
        'alias',
        'description',
        'parent_id',
        'sort_order',
    ];

    public $timestamps = false;

    public function products()
    {
        return $this->hasMany(Product::class);
    }

    public function parent()
    {
        $this->belongsTo(Category::class, 'parent_id', 'id');
    }

    public function childrens()
    {
        $this->hasMany(Category::class, 'parent_id', 'id');
    }
}