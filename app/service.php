<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class service extends Model
{
    //
    public function servicesphoto(){
    return $this ->hasmany(servicephoto ::class);

    }
}
