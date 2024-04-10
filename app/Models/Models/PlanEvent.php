<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PlanEvent extends Model
{
    use HasFactory;
    protected $table = 'plan_events';
    protected $primaryKey = 'id';
    public $timestamps = false;
    protected $fillable = [
        'id',
        'groupId',
        'name',
        'description',
        'status',
        'event',
        'created_at',
        'update_at',
    ];
}
