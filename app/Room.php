<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    protected $table = 'roomlists';
    protected $primaryKey = 'roomID';
    public $timestamps = true;
}
