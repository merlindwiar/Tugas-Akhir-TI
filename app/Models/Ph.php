<?php

namespace App\Models;
use App\Models\Alat;
use App\Models\Status_ph;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ph extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function alat()
    {
        return $this->belongsTo(Alat::class);
    }
    public function status_ph()
    {
        return $this->belongsTo(Status_ph::class);
    }
}
