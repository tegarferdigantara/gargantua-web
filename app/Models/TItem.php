<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TItem extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    protected $connection = 'sqlsrv2';

    protected $table = "TItem";

    public $timestamps = false;
}
