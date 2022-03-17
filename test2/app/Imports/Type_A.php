<?php

namespace App\Imports;

use Akill\Xlsvalidate\Type;

class Type_A implements Type {

    public static function rule()
    {
        return [
                '0' => 'required',
                '1' => 'alpha_dash|max:2|nullable',
                '2' => 'nullable',
                '3' => 'required',
                '4' => 'required',
                '5' => 'nullable',
        ];
    }

    public static function customMessage()
    {
        return [
                '0.required' => 'Missing value in Field_A',
                '1.alpha_dash' => 'Field_B should not contain any space',
                '1.max' => 'Field_B should not contain any space',
                '2.required' => '',
                '3.required' => 'Missing value in Field_D',
                '4.required' => 'Missing value in Field_E',
                '5.required' => '',
        ];
    }
}