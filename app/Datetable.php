<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Datetable extends Model
{
    protected $table = 'datetable';
    protected $primaryKey = 'datetableID';
    public $timestamps = true;
}
