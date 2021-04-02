<?php

namespace App\Http\Controllers;

use App\Models\zo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\ZoController;

class ZoController extends Controller
{
//
function index()
{
$data = Array();
$dbconn = pg_connect("host=89.174.178.194 port=5432 dbname=hcelblag user=hcelb password=homvendo123");
$qry = 'select * from zo_date_realizaci limit 500';

$result = pg_query($dbconn, $qry);
$results = pg_fetch_all($result);
foreach ($results as $rs)
{
$zo['zo'] = $rs['numer_serii'];
$zo['data'] = $rs['tel_datazam'];

array_push($data,$zo);
}

// return view('zw',['data'=>$data]);
return $data;
}
}