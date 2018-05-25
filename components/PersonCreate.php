<?php namespace October\Test\Components;

use Initbiz\PowerComponents\Classes\FormComponentBase;

class PersonCreate extends FormComponentBase
{

    public function componentDetails()
    {
        return [
            'name'        => 'PersonCreate Component',
            'description' => 'Component rendering create form for Person'
        ];
    }

}
