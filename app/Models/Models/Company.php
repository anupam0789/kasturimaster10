<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;
    protected $table = 'mm_companymaster';
    protected $primaryKey = '_CMid';
    public $timestamps = false;
    protected $fillable = [
        '_CMDomain',
        '_CMdatabase',
        '_CMrcode',
        '_CMname',
        '_CMemail',
        '_CMmobile',
        '_CMcountrycode',
        '_CMcompanyName',
        '_CMstrength',
        '_CMRole',
        '_CMreferredBy',
        '_CMwebsite',
        '_CMstatus',
        '_CMcurrencyCode',
        '_CPlanId',
        '_CPlanData'
    ];
}
