<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Bb extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'content', 'price', 'category_id'];

    /**
     * Возвращает объект обратной связи
     * @param void
     * @return BelongsTo
     */
    public function user()
    {
        return $this->belongsTo(User::class)->withDefault(['name' => 'No name']);
    }

    public function category()
    {
        return $this->belongsTo(Category::class)->withDefault(['name' => 'No category']);
    }
}
