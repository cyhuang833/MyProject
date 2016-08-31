<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    public $table = 'user';
    public $timestamps = false;
    protected $fillable = array(
        'userName',
        'userAccount',
        'branch',
        'branchCode',
        'loginTime',
        );
}
