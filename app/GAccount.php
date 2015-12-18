<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GAccount extends Model
{
    protected $table = "Account";
    protected $primaryKey = 'acct_id';
    public $timestamps = false;

}
