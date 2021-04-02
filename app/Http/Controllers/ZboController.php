<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\ZboController;
use App\Models\zbo;

class ZboController extends Controller
{
//
function index()
    {
    $data = Array();
    $dbconn = pg_connect("host=89.174.178.194 port=5432 dbname=hcelblag user=hcelb password=homvendo123");
    $qry = 'select * from zobowiazania';
    $result = pg_query($dbconn, $qry);
    $results = pg_fetch_all($result);
    foreach ($results as $rs)
    {
    $zbo['rr_rr_datadokumentu'] = $rs['rr_rr_datadokumentu'];
    $zbo['rr_rr_dataplatnosci'] = $rs['rr_rr_dataplatnosci'];
    $zbo['rr_1205225012'] = $rs['rr_1205225012'];
    $zbo['rr_282851663'] = $rs['rr_282851663'];
    $zbo['klrr_k_kod'] = $rs['klrr_k_kod'];
    $zbo['klrr_k_nazwa'] = $rs['klrr_k_nazwa'];
    $zbo['m1rr_k_value918'] = $rs['m1rr_k_value918'];
    $zbo['m1rr_k_value984'] = $rs['m1rr_k_value984'];

    array_push($data,$zbo);

    }

// return view('zw',['data'=>$data]);

return $data;
}
}