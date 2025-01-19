<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\PosyanduBalita;

class Penimbangan extends Model
{
    use HasFactory;

    protected $table = 'penimbangan';

    public function data_bayi_balita(): BelongsTo
    {
        return $this->belongsTo(PosyanduBalita::class);
    }
}
