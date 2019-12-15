<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Machine extends Model{

    protected $primaryKey = 'id_mesin';
  	protected $guarded  = ['created_at', 'updated_at'];
}
