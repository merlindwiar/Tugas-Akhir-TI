<?php

namespace App\Models;
use App\Models\Status_kekeruhan;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kekeruhan extends Model
{
    use HasFactory;
    public function Status_kekeruhan()
    {
        return $this->belongsTo(Status_kekeruhan::class);
    }
}
