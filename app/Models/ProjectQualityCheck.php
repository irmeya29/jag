<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ProjectQualityCheck extends Model
{
    protected $fillable = ['client_project_id', 'lot_reference', 'humidity', 'calibration', 'impurity_rate', 'certificate_path', 'checked_at', 'notes'];

    protected function casts(): array
    {
        return [
            'humidity' => 'decimal:2',
            'impurity_rate' => 'decimal:2',
            'checked_at' => 'date',
        ];
    }

    public function project(): BelongsTo
    {
        return $this->belongsTo(ClientProject::class, 'client_project_id');
    }
}
