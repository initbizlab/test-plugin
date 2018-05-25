<?php namespace October\Test\Components;

use Initbiz\PowerComponents\Classes\FormComponentBase;

class PersonPreview extends FormComponentBase
{

    public function componentDetails()
    {
        return [
            'name'        => 'PersonPreview Component',
            'description' => 'Component rendering preview form for Person'
        ];
    }
    
}
