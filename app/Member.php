<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
        protected $table = 'users';
        protected $primaryKey = 'id';
        public $timestamps = true;
}
