<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable;

class BaseModel extends Model implements Authenticatable
{
    // protected $dateFormat = 'Y-m-d H:i:s0';
    public function getDateFormat()
    {
        return 'Y-m-d H:i:s.u';
    }
}
