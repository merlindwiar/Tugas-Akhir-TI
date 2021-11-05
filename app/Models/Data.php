<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use DateTimeInterface;

class Data extends Model
{
    use HasFactory;
    protected $guarded = [];

    protected $table = "data";
    protected $primarykey = "id";
    protected $fillable = [
        'id','NTU', 'status_kekeruhan','kadar_ph','status_ph',
    ];
    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('H:i:s');
    }
}
