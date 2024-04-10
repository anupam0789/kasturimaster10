<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PlanEventGroup extends Model
{
    use HasFactory;
    protected $table = 'plan_event_groups';
    protected $primaryKey = 'id';
    public $timestamps = false;
    protected $fillable = [
        'id',
        'name',
        'description',
        'status',
        'created_at',
        'update_at',
    ];
}
