<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rsroom extends Model
{
    protected $table = 'rsrooms';
    protected $primaryKey = 'roomID';
    public $timestamps = true;
}
