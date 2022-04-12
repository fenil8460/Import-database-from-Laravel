<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Imports\DataImport;
use Maatwebsite\Excel\Facades\Excel;

class FileUploading extends Controller
{
    //
     /**
    * @return \Illuminate\Support\Collection
    */
    public function import() 
    {
        Excel::import(new DataImport,request()->file('file'));
             
        return back();
    }
}
