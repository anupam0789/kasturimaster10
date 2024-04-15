<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usermaster extends Model
{
    use HasFactory;
    protected $table = 'mm_usermaster';
    protected $primaryKey = ['_UMcompanyid', '_UMemail'];
    public $incrementing = false;
    public $timestamps = false;
    protected $fillable = [
        '_UMcompanyid',
        '_UMemail',
        '_UMpassword',
        '_UMtoken',
        '_CMstatus',
        '_CMcreatedOn',
    ];
}
