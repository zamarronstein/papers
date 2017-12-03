<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Papers extends Model
{
    //
    protected $table = "papers";
    protected $fillable = ["titulo", "link_investigacion"];

    public function createdBy()
    {
    	return $this->belongsTo('App\User', 'creado_por_id');
    }
}
