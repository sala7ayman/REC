<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class servicephoto extends Model
{
    //
    public function services(){
    return $this ->belongsto(service::class);

    }
}
