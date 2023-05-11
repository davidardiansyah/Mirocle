<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Msensor extends Model
{
    use HasFactory;

    protected $table = 'sensor_realtime';
    protected $primaryKey = 'id';
    protected $fillable = ['jantung','durasi','oksigen','putaran','kalori'];
}
