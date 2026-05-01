<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class ClientProject extends Model
{
    use HasFactory;

    protected $fillable = [
        'client_id',
        'pole',
        'name',
        'company',
        'location',
        'surface_hectare',
        'cultures',
        'cycle',
        'status',
        'summary',
        'objective',
        'budget_planned',
        'budget_spent',
        'contracted_volume',
        'mobilized_volume',
        'delivered_volume',
        'delivery_window',
        'quality_status',
        'just_control_live_enabled',
    ];

    protected function casts(): array
    {
        return [
            'cultures' => 'array',
            'surface_hectare' => 'decimal:2',
            'budget_planned' => 'decimal:2',
            'budget_spent' => 'decimal:2',
            'contracted_volume' => 'decimal:2',
            'mobilized_volume' => 'decimal:2',
            'delivered_volume' => 'decimal:2',
            'just_control_live_enabled' => 'boolean',
        ];
    }

    public function client(): BelongsTo
    {
        return $this->belongsTo(User::class, 'client_id');
    }

    public function parcels(): HasMany
    {
        return $this->hasMany(ProjectParcel::class);
    }

    public function reports(): HasMany
    {
        return $this->hasMany(ProjectReport::class);
    }

    public function documents(): HasMany
    {
        return $this->hasMany(ProjectDocument::class);
    }

    public function expenses(): HasMany
    {
        return $this->hasMany(ProjectExpense::class);
    }

    public function alerts(): HasMany
    {
        return $this->hasMany(ProjectAlert::class);
    }

    public function deliveries(): HasMany
    {
        return $this->hasMany(SupplyDelivery::class);
    }

    public function tasks(): HasMany
    {
        return $this->hasMany(ProjectTask::class);
    }

    public function commercializations(): HasMany
    {
        return $this->hasMany(ProjectCommercialization::class);
    }

    public function qualityChecks(): HasMany
    {
        return $this->hasMany(ProjectQualityCheck::class);
    }

    public function scopeForPole(Builder $query, string $pole): void
    {
        $query->where('pole', $pole);
    }

    public function scopeActive(Builder $query): void
    {
        $query->whereNotIn('status', ['termine', 'archive']);
    }
}
