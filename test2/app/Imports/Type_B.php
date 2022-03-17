<?php

namespace App\Imports;

use Akill\Xlsvalidate\Type;

class Type_B implements Type {

    public static function rule()
    {
        return [
                '0' => 'required',
                '1' => 'alpha_dash|max:2|nullable',
        ];
    }

    public static function customMessage()
    {
        return [
                '0.required' => 'Missing value in Field_A',
                '1.alpha_dash' => 'Field_B should not contain any space',
                '1.max' => 'Field_B should not contain any space',
        ];
    }
}