<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    // Table name (optional, but explicit is good)
    protected $table = 'books';

    /**
     * Mass assignable fields
     */
    protected $fillable = [
        'title',
        'description',
        'cover_image',
        'created_by',
    ];

    /**
     * Book → Chapters (future)
     */
    public function chapters()
    {
        return $this->hasMany(Chapter::class);
    }
}

