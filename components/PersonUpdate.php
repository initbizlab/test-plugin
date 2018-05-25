<?php namespace October\Test\Components;

use Initbiz\PowerComponents\Classes\FormComponentBase;

class PersonUpdate extends FormComponentBase
{

    public function componentDetails()
    {
        return [
            'name'        => 'PersonUpdate Component',
            'description' => 'Component rendering update form for Person'
        ];
    }
}
