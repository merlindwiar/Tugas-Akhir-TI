<?php

namespace App\Models;
use App\Models\Status_kekeruhan;
use App\Models\Alat;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kekeruhan extends Model
{
    // protected $table = 'kekeruhans';

    // protected $fillable = ['id_kekeruhan','NTU','id_status_kekeruhan','alat_id'];

    use HasFactory;
    protected $guarded = [];

    public function alat()
    {
        return $this->belongsTo(Alat::class);
    }
    public function status_kekeruhan()
    {
        return $this->belongsTo(Status_kekeruhan::class);
    }
}
