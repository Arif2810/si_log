<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Data extends Model{

	protected $table = 'data';
    protected $primaryKey = 'id_data';
  	protected $guarded  = ['created_at', 'updated_at'];

  	public function machines(){

        return $this->belongsTo('App\Machine', 'id_mesin');
    }

    public function users(){

        return $this->belongsTo('App\User');
    }
}
