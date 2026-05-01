<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    /** @use HasFactory<\Database\Factories\ProjectFactory> */
    use HasFactory;

    protected $fillable = [
        'title',
        'slug',
        'pole',
        'culture',
        'location',
        'surface_hectare',
        'service_type',
        'status',
        'summary',
        'cover_image',
    ];

    protected function casts(): array
    {
        return [
            'surface_hectare' => 'decimal:2',
        ];
    }
}
