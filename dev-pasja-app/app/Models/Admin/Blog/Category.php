<?php

namespace App\Models\Admin\Blog;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Category extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = ['name'];

    protected $table = 'blog_categories';

    public function parent(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    public function childs(): HasMany
    {
        return $this->hasMany(Category::class);
    }
}
