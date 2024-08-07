<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produit extends Model
{
    use HasFactory;


    /**
     * Get the post that owns the comment.
     */
    public function categorie(): BelongsTo
    {
        return $this->belongsTo(Categorie::class);
    }
}
