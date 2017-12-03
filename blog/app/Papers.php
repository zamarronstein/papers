<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Papers extends Model
{
    //
    protected $table = "papers";
    protected $fillable = ["titulo"];
}
