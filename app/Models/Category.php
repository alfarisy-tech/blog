<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;


class Category extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'image',
        'slug'
    ];
    public function posts()
    {
        return $this->hasMany(Post::class);
    }
    protected function image(): Attribute
    {
        return Attribute::make(
            get: fn ($image) => asset('/storage/categories/' . $image),
        );
    }
}
