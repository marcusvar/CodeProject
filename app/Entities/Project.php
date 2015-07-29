<?php

namespace CodeProject\Entities;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $fillable = [
        'user_id',
        'owner_id',
        'name',
        'description',
        'progress',
        'uo_date'
    ];
}
