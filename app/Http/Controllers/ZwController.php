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
$data = Array();
$dbconn = pg_connect("host=89.174.178.194 port=5432 dbname=hcelblag user=hcelb password=homvendo123");
$qry = 'select * from ZW limit 5';
$result = pg_query($dbconn, $qry);
$results = pg_fetch_all($result);
foreach ($results as $rs)
{
$zw['test1'] = $rs['tr_tr_rodzaj'];
$zw['data'] = $rs['m1tre0_k_value971'];
$zw['ORDER NO'] = $rs['tr_1971859888'];
$zw['SERIA'] = $rs['zltr_1307032275'];
$zw['KOD KLIENTA'] = $rs['ktr_k_kod'];
$zw['MODEL'] = $rs['m831tr_tr_value911'];
$zw['MATERIAL'] = $rs['tr_tr_opis'];
$zw['PROFORMA NR'] = $rs['m831tr_tr_value912'];
$zw['PROFORMA'] = $rs['tr_1971859888'];
$zw['STATUS HISTORY'] = $rs['hsttr_sh_opis'];
$zw['DELIVERY PAYMENT AFTER PROFORM'] = $rs['m1tre0_k_value975'];
$zw['ORDER VALUE [PLN]'] = $rs['tr_73104138'];
$zw['Value proforma PLN'] = $rs['m831tr_tr_value969'];
$zw['Value proforma Euro'] = $rs['m831tr_tr_value973'];
$zw['ZO 1'] = $rs['m831tr_tr_value912'];
$zw['ZO 2'] = $rs['m831tr_tr_value912'];
$zw['PROD DATE ZO 1'] = $rs['m831tr_767507672'];
$zw['PROD DATE ZO 2'] = $rs['m831tr_767507672']; //to check
$zw['PAYMENT DATE PROFORMA'] = $rs['tr_tr_datasprzedaz'];
$zw['OPEN INVOCE'] = $rs['tr_tr_rodzaj']; //to check
$zw['Proforma'] = $rs['tr_73104138']; //to check


array_push($data,$zw);

}

// return view('zw',['data'=>$data]);
return $data;
}
}