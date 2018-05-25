<?php namespace October\Test\Components;

use Initbiz\PowerComponents\Classes\FormComponentBase;

class CountryCreate extends FormComponentBase
{

    public function componentDetails()
    {
        return [
            'name'        => 'CountryCreate Component',
            'description' => 'Component rendering create form for Country'
        ];
    }

}
