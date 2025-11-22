<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class LineNumber extends Model
{
    use HasFactory;

    protected $fillable = [
        'line_id',
        'number',
        'is_marked',
    ];

    protected $casts = [
        'is_marked' => 'boolean',
    ];

    /**
     * Un número de línea pertenece a una Línea.
     */
    public function line(): BelongsTo
    {
        return $this->belongsTo(Line::class);
    }
}
