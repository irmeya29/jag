<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ProjectCommercialization extends Model
{
    protected $fillable = ['client_project_id', 'harvest_status', 'outlet', 'sales_amount', 'cycle_balance'];

    protected function casts(): array
    {
        return ['sales_amount' => 'decimal:2'];
    }

    public function project(): BelongsTo
    {
        return $this->belongsTo(ClientProject::class, 'client_project_id');
    }
}
