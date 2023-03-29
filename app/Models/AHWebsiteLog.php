<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AHWebsiteLog extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    protected $table = "AHWebsiteLog";

    public $timestamps = false;

    protected function setNameActivityAttribute($value)
    {
        if ($value == 'Insert Points') {
            $this->attributes['name_activity'] = $value;
            $grade_name = $this->grade == 250 ? 'GM' : 'Player';
            $this->attributes['description'] = '[' . $this->user_id . '] ' . '[' . $grade_name . '] ' . '[' . $this->login_id . '] ' . 'have been ' . $value . ' with amount ' . $this->amount .  ' to login id = ' . $this->to_login_id .  ',' . ' at ' . now()->format('D, d F Y H:i:s');
        } elseif ($value == 'Change Password') {
            $this->attributes['name_activity'] = $value;
            $grade_name = $this->grade == 250 ? 'GM' : 'Player';
            $this->attributes['description'] = '[' . $this->user_id . '] ' . '[' . $grade_name . '] ' . '[' . $this->login_id . '] ' . 'have been ' . $value .  ',' . ' at ' . now()->format('D, d F Y H:i:s');
        }
    }
}
