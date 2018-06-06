<?php namespace October\Test\Components;

use Initbiz\PowerComponents\Classes\FormComponentBase;
use October\Test\Models\Phone;

class PersonCreate extends FormComponentBase
{
    public function componentDetails()
    {
        return [
            'name'        => 'PersonCreate Component',
            'description' => 'Component rendering create form for Person'
        ];
    }

    public function formExtendModel($model)
    {
        /*
         * Init proxy field model if we are creating the model
         * and the context is proxy fields.
         */
        if (!$model->phone) {
            $model->phone = new Phone;
        }

        return $model;
    }
}
