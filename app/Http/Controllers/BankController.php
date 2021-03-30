<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\BankController;
use App\Models\bank;

class BankController extends Controller
{
//
function index()
{
$data = Array();
$dbconn = pg_connect("host=89.174.178.194 port=5432 dbname=hcelblag user=hcelb password=homvendo123");
$qry = 'select * from clients_bank';
$result = pg_query($dbconn, $qry);
$results = pg_fetch_all($result);
foreach ($results as $rs)
{
$bank['client_name'] = $rs['client_name'];
$bank['k_k_idklienta'] = $rs['k_k_idklienta'];
$bank['k_k_kredytdni NO'] = $rs['k_k_kredytdni'];
$bank['m1k_k_value984'] = $rs['m1k_k_value984'];

array_push($data,$bank);

}

return $data;
}
}