<?php namespace October\Test\Components;

use Initbiz\PowerComponents\Classes\FormComponentBase;

class UserUpdate extends FormComponentBase
{

    public function componentDetails()
    {
        return [
            'name'        => 'UserUpdate Component',
            'description' => 'Component rendering update form for User'
        ];
    }
}
