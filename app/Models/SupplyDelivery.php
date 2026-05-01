<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class SupplyDelivery extends Model
{
    protected $fillable = ['client_project_id', 'lot_reference', 'planned_at', 'delivered_at', 'volume', 'quality_status', 'reception_status', 'notes'];

    protected function casts(): array
    {
        return ['planned_at' => 'date', 'delivered_at' => 'date', 'volume' => 'decimal:2'];
    }

    public function project(): BelongsTo
    {
        return $this->belongsTo(ClientProject::class, 'client_project_id');
    }
}
