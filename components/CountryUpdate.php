<?php namespace October\Test\Components;

use Initbiz\PowerComponents\Classes\FormComponentBase;

class CountryUpdate extends FormComponentBase
{

    public function componentDetails()
    {
        return [
            'name'        => 'CountryUpdate Component',
            'description' => 'Component rendering update form for Country'
        ];
    }
}
