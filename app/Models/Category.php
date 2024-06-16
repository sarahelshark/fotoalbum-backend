<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Category extends Model
{
    use HasFactory;
    /**
     * Get all of the Photos for the Category
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function Photos(): HasMany
    {
        return $this->hasMany(Photo::class);
    }
}
