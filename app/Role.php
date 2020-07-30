<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    public $table = "user_roles";
    public $timestamps = false;
}
