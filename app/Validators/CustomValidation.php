<?php

namespace App\Validators;

class CustomValidation{
    public function awesome($field, $value, $params){
        return $value == 'awesome';
    }
}