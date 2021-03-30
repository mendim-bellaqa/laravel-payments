<?php

namespace App\Http\Controllers;

use App\Models\clients;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\ClientsController;

class ClientsController extends Controller
{
//
function index()
{
$data = Array();
$dbconn = pg_connect("host=89.174.178.194 port=5432 dbname=hcelblag user=hcelb password=homvendo123");
$qry = 'SELECT * from  cl_payments2';


$result = pg_query($dbconn, $qry);
$results = pg_fetch_all($result);
foreach ($results as $rs)
{
    $cl['Kod'] = $rs['k_144790059'];
    $cl['Nazwa'] = $rs['k_k_nazwa'];
    $cl['k_k_miejscowosc'] = $rs['k_k_miejscowosc'];
    $cl['k_k_ulica'] = $rs['k_k_ulica'];
    $cl['k_k_kodpocztowy'] = $rs['k_k_kodpocztowy'];
    $cl['k_k_nip'] = $rs['k_k_nip'];
    $cl['k_k_dostodb'] = $rs['k_k_dostodb'];
    $cl['k_k_zadluzenie'] = $rs['k_k_zadluzenie'];
    $cl['m1k_k_value889'] = $rs['m1k_k_value889'];
    $cl['m1k_k_value916'] = $rs['m1k_k_value916'];
    $cl['m1k_k_value918'] = $rs['m1k_k_value918'];
    $cl['m1k_k_value975'] = $rs['m1k_k_value975'];
    $cl['br_br_nrkonta'] = $rs['br_br_nrkonta'];
    $cl['br_br_opis'] = $rs['br_br_opis'];
    $cl['k_k_kredytdni'] = $rs['k_k_kredytdni'];
    $cl['internalpaymentcdays'] = $rs['internalpaymentcdays'];

array_push($data,$cl);

}


return $data;
}
}