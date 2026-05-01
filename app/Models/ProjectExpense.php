<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ProjectExpense extends Model
{
    protected $fillable = ['client_project_id', 'label', 'category', 'amount', 'spent_at', 'proof_path'];

    protected function casts(): array
    {
        return ['amount' => 'decimal:2', 'spent_at' => 'date'];
    }

    public function project(): BelongsTo
    {
        return $this->belongsTo(ClientProject::class, 'client_project_id');
    }
}
