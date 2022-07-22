<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class InformationEtcModel extends Model
{
    protected $table = 'information_table';
    protected $primaryKey = 'id';
    public $incrementing = true;
    protected $keyType = 'int';
    public $timestamps = false;
}
