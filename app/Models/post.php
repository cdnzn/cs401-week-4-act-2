<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Post extends Model
{

    use HasFactory;

    protected $fillable =  [
        'title',
        'slug',
        'content',
        'publication_date',
        'last_modified_date',
        'status',
        'featured_image_url',
        'views_count',
    ];
    public function user(): BelongsTo          
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function tags(): BelongsToMany
    {
        return $this->belongsToMany(Tag::class, 'post_tag');
    }

    public function categories(): BelongsToMany
    {
        return $this->belongsToMany(Category::class, 'post_category');
    }

    public function media(): HasMany
    {
        return $this->hasMany(Media::class);
    }

    public function comments(): HasMany
    {
        return $this->hasMany(Comment::class);
    }
}