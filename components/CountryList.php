<?php namespace October\Test\Components;

use Initbiz\PowerComponents\Classes\ListComponentBase;

class CountryList extends ListComponentBase
{

    public function componentDetails()
    {
        return [
            'name'        => 'CountryList Component',
            'description' => 'Component rendering list of Country'
        ];
    }
    
}
