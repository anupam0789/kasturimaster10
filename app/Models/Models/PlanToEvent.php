<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PlanToEvent extends Model
{
    use HasFactory;
    protected $table = 'plan_to_events';
    protected $primaryKey = 'id';
    public $timestamps = false;
    protected $fillable = [
        'id',
        'plan_id',
        'event_id',
        'value',
    ];
}
