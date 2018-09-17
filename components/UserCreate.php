<?php namespace October\Test\Components;

use Initbiz\PowerComponents\Classes\FormComponentBase;

class UserCreate extends FormComponentBase
{

    public function componentDetails()
    {
        return [
            'name'        => 'UserCreate Component',
            'description' => 'Component rendering create form for User'
        ];
    }

}
