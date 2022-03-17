<?php

namespace App\Http\Controllers;

use App\Exports\Export;
use App\Imports\Import;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\Validator;
use Akill\Xlsvalidate\Xls;
use App\Imports\Type_A;
use App\Imports\Type_B;

class RunController extends Controller
{
    public function runningTypeA()
    {
        $xls = new Xls;
        
        $file = $xls->validateExtension(request()->file('fileA'));
   
        $result = Excel::toArray(new Import, $file);

        $validate = $xls->validateFile($result, new Type_A);

        return back()->with('dataA', json_decode(json_encode($validate), true));
    }

    public function runningTypeB()
    {
        $xls = new Xls;
        
        $file = $xls->validateExtension(request()->file('fileB'));
   
        $result = Excel::toArray(new Import, $file);

        $validate = $xls->validateFile($result, new Type_B);

        return back()->with('dataB', json_decode(json_encode($validate), true));
    }
}
