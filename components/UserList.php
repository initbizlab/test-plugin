<?php namespace October\Test\Components;

use Initbiz\PowerComponents\Classes\ListComponentBase;

class UserList extends ListComponentBase
{

    public function componentDetails()
    {
        return [
            'name'        => 'UserList Component',
            'description' => 'Component rendering list of User'
        ];
    }
    
}
