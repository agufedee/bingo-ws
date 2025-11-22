<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;


class Line extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
    ];

    /**
     * Una Línea tiene muchos números asignados.
     */
    public function lineNumbers(): HasMany
    {
        return $this->hasMany(LineNumber::class);
    }
}
