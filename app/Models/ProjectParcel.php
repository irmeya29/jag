<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ProjectParcel extends Model
{
    protected $fillable = ['client_project_id', 'name', 'surface_hectare', 'culture', 'status', 'notes', 'photo_path'];

    protected function casts(): array
    {
        return ['surface_hectare' => 'decimal:2'];
    }

    public function project(): BelongsTo
    {
        return $this->belongsTo(ClientProject::class, 'client_project_id');
    }
}
