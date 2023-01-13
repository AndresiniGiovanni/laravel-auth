<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Str;

class Project extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'slug', 'content', 'cover_image', 'user_id', 'type_id'];

    public static function generateSlug($title)
    {
        return Str::slug($title, '-');
    }
    /**
     * Summary of user
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function type(): belongsTo
    {
        return $this->belongsTo(Type::class);
    }
}
