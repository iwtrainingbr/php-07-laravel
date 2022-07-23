<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Attendance extends Model
{
    use HasFactory;

    protected $table = 'tb_attendance';

    protected $primaryKey = 'id';

    public $incrementing = true;

    protected $fillable = [
        'type',
        'begin_hour',
        'begin_end',
        'description',
        'price',
        'attendant',
        'customer',
    ];
}
