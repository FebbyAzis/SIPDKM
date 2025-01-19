<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\Imunisasi;
use App\Models\Vitamin;
use App\Models\Penimbangan;

class PosyanduBalita extends Model
{
    use HasFactory;

    protected $table = 'data_bayi_balita';

    public function imunisasi(): HasMany
    {
        return $this->hasMany(Imunisasi::class);
    }

    public function vitamin(): HasMany
    {
        return $this->hasMany(Vitamin::class);
    }

    public function penimbangan(): HasMany
    {
        return $this->hasMany(Penimbangan::class);
    }
}
