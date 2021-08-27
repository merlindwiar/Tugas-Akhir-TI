<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RataDataKeruh extends Model
{
    use HasFactory;

    protected $fillable = [
        'id','status_kekeruhan','NTU'
    ];
}
