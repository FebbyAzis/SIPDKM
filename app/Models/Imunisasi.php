<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\PosyanduBalita;

class Imunisasi extends Model
{
    use HasFactory;

    protected $table = 'imunisasi';

    public function data_bayi_balita(): BelongsTo
    {
        return $this->belongsTo(PosyanduBalita::class);
    }
}
