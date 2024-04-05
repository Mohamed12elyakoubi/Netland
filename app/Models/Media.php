<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use App\Models\Actor;

class Media extends Model
{
    use HasFactory;

    protected $table = "media";

    public function actors() : BelongsToMany
    {
        return $this->belongsToMany(Actor::class);
    }
}
