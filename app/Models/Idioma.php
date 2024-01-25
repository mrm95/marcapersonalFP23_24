<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Idioma extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre',
    ];

    public function users(): BelongsToMany
    {
        return $this->belongsToMany(User::class, 'users_idiomas');
    }
}
