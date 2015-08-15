<?php

namespace CodeProject\Validators;

use Prettus\Validator\LaravelValidator;

class ProjectTaskValidator extends LaravelValidator
{
    protected $rules = [
        'project_id' => 'required|integer',
        'start_date'=> 'required',
        'due_date'=> 'required',
        'status'=> 'required|integer'
    ];
}