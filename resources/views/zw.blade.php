
<html>
<head>
<h1 style: text-align: center;  > PAYMENTS - ZW </h1>
<title>PAYMENTS - ZW</title>
</head>
<style>
    h1 {  
    text-align: center;  
} 
table {
  border-collapse: collapse;
}
</style>
<body>
<table border = "1">
<tr>
<td>L.p</td>
<td>Buying Supplier Kategory (piorytet)</td>
<td>ORDER NO</td>
<td>SERIA</td>
<td>KOD KLIENTA</td>
<td>MODEL</td>
<td>MATERIAL</td>
<td>PROFORMA NR</td>
<td>PROFORMA</td>
<td>STATUS HISTORY</td>
<td>DELIVERY PAYMENT AFTER PROFORMA</td>
<td>ORDER VALUE [PLN]</td>
<td>Value proforma PLN</td>
<td>Value proforma Euro</td>
<td>ZO 1</td>
<td>ZO 2</td>
<td>PROD DATE ZO 1</td>
<td>PROD DATE ZO 2</td>
<td>PAYMENT DATE PROFORMA</td>
<td>OPEN INVOCE</td>
<td>Proforma</td>
<td>Value 3 days before punctual</td>
<td>Value 3 days before internal payment date</td>
<td>COUNTIF - positions to pay</td>
<td>COUNTIF - positions payed</td>
<td>COUNTIF -  positions still to pay</td>
</tr>



@foreach($data as $data)
<tr>
    <td>{{$data->LP}}</td>
    <td>{{$data->Buying_Supplier_Kategory}}</td>
    <td>{{$data->ORDER_NO}}</td>
    <td>{{$data->SERIA}}</td>
    <td>{{$data->KOD_KLIENTA}}</td>
    <td>{{$data->MODEL}}</td>
    <td>{{$data->MATERIAL}}</td>
    <td>{{$data->PROFORMA_NR}}</td>
    <td>{{$data->STATUS_HISTORY}}</td>
    <td>{{$data->DELIVERY_PAYMENT_AFTER_PROFORMA}}</td>
    <td>{{$data->ORDER_VALUE_PLN}}</td>
    <td>{{$data->Value_proforma_PLN}}</td>
    <td>{{$data->Value_proforma_Euro}}</td>
    <td>{{$data->ZO_1}}</td>
    <td>{{$data->ZO_2}}</td>
    <td>{{$data->PROD_DATE_ZO_1}}</td>
    <td>{{$data->PROD_DATE_ZO_2}}</td>
    <td>{{$data->PAYMENT_DATE_PROFORMA}}</td>
    <td>{{$data->OPEN_INVOCE}}</td>
    <td>{{$data->PROFORMA}}</td>
    <td>{{$data->Value_3_days_before_punctual}}</td>
    <td>{{$data->Value_3_days_before_internal_payment_date}}</td>
    <td>{{$data->PROFORMA}}</td>
    <td>{{$data->PROFORMA}}</td>
    <td>{{$data->PROFORMA}}</td>
    <td>{{$data->PROFORMA}}</td>
</tr>

@endforeach
</table>
</body>
</html>