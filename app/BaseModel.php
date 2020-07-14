<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BaseModel extends Model
{
    // protected $dateFormat = 'Y-m-d H:i:s0';
    public function getDateFormat()
    {
        return 'Y-m-d H:i:s.u';
    }
}
