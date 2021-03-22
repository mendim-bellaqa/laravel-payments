<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\ZwController;
use App\Models\zw;

class ZwController extends Controller
{
   //
   function index()
   {

       $data= DB::select('select * from zw', array(1));
       return view('zw',['data'=>$data]);
   }
}