<?php

namespace App\Models;
use App\Models\Alat;
use App\Models\Status_ph;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use DateTimeInterface;
use Carbon\Carbon;



class Ph extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $table = "phs";
    protected $primarykey = "id";
    protected $fillable = [
        'id','kadar_ph','alat_id','status_ph_id','status_ph','created_at',
    ];

    public function alat()
    {
        return $this->belongsTo(Alat::class);
    }
    public function status_ph()
    {
        return $this->belongsTo(Status_ph::class);
    }
    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('H:i:s');
    }
//     public function getCreatedAtAttribute()
// {
//     return \Carbon\Carbon::parse($this->attributes['created_at'])
//        ->format('H:i:s');
// }

public function getCreatedAtAttribute($value){
    $date = Carbon::parse($value);
    return $date->format('Y-m-d H:i');
}
public function getUpdatedAtAttribute($value){
    $date = Carbon::parse($value);
    return $date->format('Y-m-d H:i');
}
}
