<?php

namespace App\Models;
use App\Models\Kekeruhan;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Status_kekeruhan extends Model
{
    use HasFactory;

    // protected $table = 'status_kekeruhans';

    protected $fillable = ['id_status_kekeruhan','jenis_kekeruhan','min_kekeruhan','max_kekeruhan'];

    public function kekeruhan(){
        return $this->hasMany(Kekeruhan::class);
    }
}
