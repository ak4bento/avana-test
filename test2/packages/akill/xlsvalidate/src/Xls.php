<?php
namespace Akill\Xlsvalidate;

use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Validator;

class Xls {

    public $file;

    public $extension;

    public static function validateExtension($xls)
    {
        $file = $xls;
        $extension = $xls->getClientOriginalExtension();
       
        $validator = Validator::make(
        [
            'file'      => $file,
            'extension' => $extension,
        ],
        [
            'file'          => 'required',
            'extension'      => 'required|in:xlsx,xls',
        ]
        );
        
        if ($validator->fails()) {
            return $validator->validate();
        }

        return $file;
    }

    public static function validateFile($result, Type $type)
    {
        $message = [];
        $count = 0;
        $validate;

        foreach ($result[0] as $value) {
            $validate = Validator::make($value, $type->rule(), $type->customMessage());

            if ($validate->fails()) {
                $message[++$count] = $validate->errors();
            } else {
                $message[++$count] = 'Success';
            }
        }
        unset($message[1]);


        return $message;
    }
}