<?php

namespace App\Models;
use App\Models\Kekeruhan;
use App\Models\Ph;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alat extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function kekeruhan(){
        return $this->hasMany(Kekeruhan::class);
    }

    public function ph(){
        return $this->hasMany(Ph::class);
    }
}
