<?php namespace Finder\Form;

use Laracasts\Validation\FormValidator;

class InputForm extends FormValidator {


    protected $rules = [
        'phrase'    => 'required'
    ];
} 