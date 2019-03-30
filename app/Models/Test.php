<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Test extends Model
{
    use SoftDeletes;    //使用软删除
    protected $table = 't_test_info';
    public $timestamps = true;
    protected $dates = ['deleted_at'];  //软删除
}
