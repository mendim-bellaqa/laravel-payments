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
    $zo = Array();
    $dbconn = pg_connect("host=89.174.178.194 port=5432 dbname=hcelblag user=hcelb password=homvendo123");
    $qry = 'select * from zo_date_realizaci';
    $result = pg_query($dbconn, $qry);
    $results = pg_fetch_all($result);
    foreach ($results as $rs)
{
    $zo['ZO'] = $rs['numer_serii'];
    $zo['DATA'] = $rs['tel_datazam'];

array_push($zo,$zo);

}
    return $zo;
}
}