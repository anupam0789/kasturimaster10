<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;
    protected $primaryKey = 'id';
    protected $fillable = [
        'firstname',
        'lastname',
        'email',
        'domain',
        'company',
        'mobile',
        'address1',
        'address2',
        'city',
        'state',
        'country',
        'postcode',
        'updated_at',
        'created_at',
    ];

    // public function companyMaster()
    // {
    //     return $this->hasMany(Companymaster::class, '_CMid');
    // }
}
