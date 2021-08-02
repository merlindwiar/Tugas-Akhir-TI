<?php

namespace App\Models;
use App\Models\Ph;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Status_ph extends Model
{
    use HasFactory;

    public function ph(){
        return $this->hasMany(Ph::class);
    }
}
