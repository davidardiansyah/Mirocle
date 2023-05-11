<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Msensor extends Model
{
    use HasFactory;

    protected $table = 'sensor_data';
    protected $primaryKey = 'id';
    protected $fillable = ['detak_jantung','durasi','oksigen','putaran','kalori'];
}
