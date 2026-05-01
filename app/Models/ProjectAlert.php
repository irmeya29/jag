<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ProjectAlert extends Model
{
    protected $fillable = ['client_project_id', 'title', 'severity', 'message', 'recommendation', 'resolved_at'];

    protected function casts(): array
    {
        return ['resolved_at' => 'datetime'];
    }

    public function project(): BelongsTo
    {
        return $this->belongsTo(ClientProject::class, 'client_project_id');
    }

    public function scopeOpen(Builder $query): void
    {
        $query->whereNull('resolved_at');
    }
}
