<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContactLead extends Model
{
    use HasFactory;

    protected $fillable = [
        'profile_type',
        'name',
        'company',
        'job_title',
        'email',
        'phone',
        'land_location',
        'land_size_hectare',
        'has_borehole',
        'requested_product',
        'annual_volume',
        'message',
    ];

    protected function casts(): array
    {
        return [
            'has_borehole' => 'boolean',
            'land_size_hectare' => 'decimal:2',
            'annual_volume' => 'decimal:2',
        ];
    }
}