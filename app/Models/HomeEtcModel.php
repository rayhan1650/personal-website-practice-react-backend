<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class HomeEtcModel extends Model
{
    protected $table = 'home_etc';
    protected $primaryKey = 'id';
    public $incrementing = true;
    protected $keyType = 'int';
    public $timestamps = false;
}
