<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GAccount extends Model
{
    protected $connection = 'sqlsrv';
    protected $table = "Account";
    public $timestamps = false;

}
