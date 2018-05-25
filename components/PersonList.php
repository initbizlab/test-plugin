<?php namespace October\Test\Components;

use Initbiz\PowerComponents\Classes\ListComponentBase;

class PersonList extends ListComponentBase
{

    public function componentDetails()
    {
        return [
            'name'        => 'PersonList Component',
            'description' => 'Component rendering list of Person'
        ];
    }
    
}
