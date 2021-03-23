<html>
<head>
<!-- ... -->
<meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link href="/tailwind.css" rel="stylesheet">

<h1 style: text-align: center; > PAYMENTS - ZW </h1>
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
<td>COUNTIF - positions still to pay</td>
</tr>


@foreach($data as $data)
<tr>
<td>{{ $data['test1'] }}</td>
<td>{{ $data['data'] }}</td>
<td>{{ $data['ORDER NO']}}</td>
<td>{{ $data['SERIA'] }}</td>
<td>{{ $data['KOD KLIENTA'] }}</td>
<td>{{ $data['MODEL'] }}</td>
<td>{{ $data['MATERIAL'] }}</td>
<td>{{ $data['PROFORMA NR'] }}</td>
<td>{{ $data['PROFORMA'] }}</td>
<td>{{ $data['STATUS HISTORY'] }}</td>
<td>{{ $data['DELIVERY PAYMENT AFTER PROFORM'] }}</td>
<td>{{ $data['ORDER VALUE [PLN]'] }}</td>
<td>{{ $data['Value proforma PLN'] }}</td>
<td>{{ $data['Value proforma Euro'] }}</td>
<td>{{ $data['ZO 1'] }}</td>
<td>{{ $data['ZO 2'] }}</td>
<td>{{ $data['PROD DATE ZO 1'] }}</td>
<td>{{ $data['PROD DATE ZO 2'] }}</td>
<td>{{ $data['PAYMENT DATE PROFORMA'] }}</td>
<td>{{ $data['OPEN INVOCE'] }}</td>
<td>{{ $data['Proforma'] }}</td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
</tr>

@endforeach
</table>
</body>
</html>