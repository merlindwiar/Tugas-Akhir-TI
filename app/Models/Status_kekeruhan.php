<?php

namespace App\Models;
use App\Models\Kekeruhan;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Status_kekeruhan extends Model
{
    use HasFactory;
    public function kekeruhan(){
        return $this->hasMany(Kekeruhan::class);
    }
}
