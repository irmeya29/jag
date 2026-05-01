<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ProjectTask extends Model
{
    protected $fillable = ['client_project_id', 'title', 'status', 'planned_at', 'completed_at', 'notes'];

    protected function casts(): array
    {
        return ['planned_at' => 'date', 'completed_at' => 'date'];
    }

    public function project(): BelongsTo
    {
        return $this->belongsTo(ClientProject::class, 'client_project_id');
    }
}
