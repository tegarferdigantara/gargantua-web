<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AHDonors extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    protected $connection = 'sqlsrv2';

    protected $table = "AHDonors";

    public $timestamps = false;
}
