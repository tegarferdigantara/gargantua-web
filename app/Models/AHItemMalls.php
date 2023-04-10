<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AHItemMalls extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    protected $connection = 'sqlsrv2';

    protected $table = "AHItemMalls";
}
