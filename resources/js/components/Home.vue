<template>
  <div>

   <div class="xl px-24 py-10 text-gray-700 dark:text-gray-500 transition ease-in-out">

   <div class="mt-1 mb-4 flex  items-center justify-between "></div>	


  <button  class="w-24 bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 w-24
        px-4 rounded" @click="print">PRINT ALL DATAS</button>

       <button class="w-24 bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 w-24
                       px-4 rounded" onclick="window.print()">PRINT CURRENT VIEW</button>

     <p class="md:text-center text-4xl ...">PAYMENTS REPORT</p>

    </div>
    
      <div class="object-center content-center">
          <div class="object-center content-center">
                  <input placeholder="FILTER BY KOD KLIENTA"
                  class="ml-2 shadow  appearance-none border rounded-md py-2 px-3 text-gray-700 leading-tight 
                focus:outline-none focus:shadow-outline border-gray-300"
                  type="text"
                  v-model="search"
                  />
          </div>
      </div>       

   <div class="flex flex-col py-4" id="print">
        
<table class="xl rounded-t-lg m-5 table-fixed  bg-gray-200 text-gray-800">
        
            <tr class="w-12 border-separate border-4 border-gray-300 ">
              
                <th class="px-1 py-1 sticky top-0 px-2 py-1 w-24 text-black-900 bg-gray-200 "></th>
                <th class="px-1 py-1 sticky top-0 px-2 py-1 w-24 text-black-900 bg-gray-200 b "></th>
                <th class="px-1 py-1 sticky top-0 px-2 py-1 w-24 text-black-900 bg-gray-200  "> </th>
                

                <th class="px-1 py-1 sticky top-0 px-2 py-1 w-24 text-black-900 bg-gray-200  "> </th>
                <th class="px-1 py-1 sticky top-0 px-2 py-1 w-24 text-black-900 bg-gray-200  "> </th>
                <th class="px-1 py-1 sticky top-0 px-2 py-1 w-24 text-black-900 bg-gray-200  "> </th>
                <th class="px-1 py-1 sticky top-0 px-2 py-1 w-24 text-black-900 bg-gray-200 w-2/5  "> </th>
                <th class="px-1 py-1 sticky top-0 px-2 py-1 w-24 text-black-900 border-4 border-gray-300 bg-yellow-500 "> WORK DAYS FROM MATERIAL ARRIVAL TO DATA REALIZACJI:</th>
                <th class="px-1 py-1 sticky top-0 px-2 py-1 w-24 text-black-900 border-4 border-gray-300 bg-yellow-500 "> 6</th>
                <th class="px-1 py-1 sticky top-0 px-2 py-1 w-24 text-black-900 bg-gray-200 "> </th>
                <th class="px-1 py-1 sticky top-0 px-2 py-1 w-24 text-black-900 bg-gray-200 "> </th>
                <th class="px-1 py-1 sticky top-0 px-2 py-1 w-24 text-black-900 bg-gray-200 "> </th>
                <th class="px-1 py-1 sticky top-0 px-2 py-1 w-24 text-black-900 border-4 border-gray-300 bg-yellow-500 "> KURS:</th>
                <th class="px-1 py-1 sticky top-0 px-2 py-1 w-24 text-black-900 border-4 border-gray-300 bg-yellow-500 "> 4.5</th>
                <th class="px-1 py-1 sticky top-0 px-2 py-1 w-24 text-black-900 bg-gray-200 "> </th>
                <th class="px-1 py-1 sticky top-0 px-2 py-1 w-24 text-black-900 bg-gray-200  "> </th>
                <th class="px-1 py-1 sticky top-0 px-2 py-1 w-24 text-black-900 bg-gray-200  "> </th>
                <th class="px-1 py-1 sticky top-0 px-2 py-1 w-24 text-black-900 border-4 border-gray-300 bg-yellow-200 "> DATE:</th>
                <th class="px-1 py-1 sticky top-0 px-2 py-1 w-24 text-black-900 border-4 border-gray-300 bg-yellow-200 "> 08/04/2021</th>
                <th class="px-1 py-1 sticky top-0 px-2 py-1 w-24 text-black-900 border-4 border-gray-300 bg-yellow-200  "> TOTAL:</th>
                <th class="px-1 py-1 sticky top-0 px-2 py-1 w-24 text-black-900 border-4 border-gray-300 bg-yellow-200  "> 123.965</th>
                <th class="px-1 py-1 sticky top-0 px-2 py-1 w-24 text-black-900 bg-gray-200 b "> </th>
                <th class="px-1 py-1 sticky top-0 px-2 py-1 w-24 text-black-900 bg-gray-200 b "> </th>
                <th class="px-1 py-1 sticky top-0 px-2 py-1 w-24 text-black-900 border-4 border-gray-300 bg-yellow-500 b "> 0</th>
                <th class="px-1 py-1 sticky top-0 px-2 py-1 w-24 text-black-900 border-4 border-gray-300 bg-purple-400  "> 0</th>
                <th class="px-1 py-1 sticky top-0 px-2 py-1 w-24 text-black-900 border-4 border-gray-300 bg-green-200  "> 0</th>
		      	</tr>

         <tr class="border-separate border-4 border-gray-300 ">

                <th class="px-2 py-2 sticky top-0 px-4 py-2 text-black-900 bg-yellow-200 border-collapse border-4 border-gray-300 ">L.P</th>
                <th class="px-2 py-2 sticky top-0 px-4 py-2  text-black-900 bg-yellow-200 border-collapse border-4 border-gray-300 ">BUYING SUPPLIER KATEGORY (PIORYTET)</th>
                <th class="px-2 py-2 sticky top-0 px-4 py-2  text-black-900 bg-yellow-200 border-collapse border-4 border-gray-300 "> ORDER NO</th>
                <th class="px-2 py-2 sticky top-0 px-4 py-2  text-black-900 bg-yellow-200 border-collapse border-4 border-gray-300 "> SERIA</th>
                <th class="px-2 py-2 sticky top-0 px-4 py-2  text-black-900 bg-yellow-200 border-collapse border-4 border-gray-300 "> KOD KLIENTA</th>
                <th class="text-center px-2 py-2 sticky top-0 px-4 py-2  text-black-900 bg-yellow-200 border-collapse border-4 border-gray-300 "> MODEL</th>
                <th class="text-center px-2 py-2 sticky top-0 px-4 py-2  text-black-900 bg-yellow-200 border-collapse border-4 border-gray-300 w-2/5"> MATERIAL</th>
                <th class="px-2 py-2 sticky top-0 px-4 py-2  text-black-900 bg-yellow-200 border-collapse border-4 border-gray-300 "> PROFORMA NR</th>
                <th class="px-2 py-2 sticky top-0 px-4 py-2  text-black-900 bg-yellow-200 border-collapse border-4 border-gray-300 "> PROFORMA</th>
                <th class="px-2 py-2 sticky top-0 px-4 py-2  text-black-900 bg-yellow-200 border-collapse border-4 border-gray-300 "> STATUS HISTORY</th>
                <th class="px-2 py-2 sticky top-0 px-4 py-2  text-black-900 bg-yellow-200 border-collapse border-4 border-gray-300 "> DELIVERY PAYMENT AFTER PROFORMA</th>
                <th class="px-2 py-2 sticky top-0 px-4 py-2  text-black-900 bg-yellow-200 border-collapse border-4 border-gray-300 "> ORDER VALUE [PLN]</th>
                <th class="px-2 py-2 sticky top-0 px-4 py-2  text-black-900 bg-yellow-200 border-collapse border-4 border-gray-300 "> VALUE PROFORMA PLN</th>
                <th class="px-2 py-2 sticky top-0 px-4 py-2  text-black-900 bg-yellow-200 border-collapse border-4 border-gray-300 "> VALUE PROFORMA EURO</th>
                <th class="px-2 py-2 sticky top-0 px-4 py-2  text-black-900 bg-yellow-200 border-collapse border-4 border-gray-300 "> ZO 1</th>
                <th class="px-2 py-2 sticky top-0 px-4 py-2  text-black-900 bg-yellow-200 border-collapse border-4 border-gray-300 "> ZO 2</th>
                <th class="px-2 py-2 sticky top-0 px-4 py-2  text-black-900 bg-blue-300 border-collapse border-4 border-gray-300"> PROD DATE ZO 1</th>
                <th class="px-2 py-2 sticky top-0 px-4 py-2  text-black-900 bg-blue-300 border-collapse border-4 border-gray-300"> PROD DATE ZO 2</th>
                <th class="px-2 py-2 sticky top-0 px-4 py-2  text-black-900 bg-green-300 border-collapse border-4 border-gray-300"> PAYMENT DATE PROFORMA</th>
                <th class="px-2 py-2 sticky top-0 px-4 py-2  text-black-900 bg-green-300 border-collapse border-4 border-gray-300"> OPEN INVOCE</th>
                <th class="px-2 py-2 sticky top-0 px-4 py-2  text-black-900 bg-green-300 border-collapse border-4 border-gray-300"> PROFORMA</th>
                <th class="px-2 py-2 sticky top-0 px-4 py-2  text-black-900 bg-green-300 border-collapse border-4 border-gray-300"> VALUE 3 DAYS BEFORE PUNCTUAL</th>
                <th class="px-2 py-2 sticky top-0 px-4 py-2  text-black-900 bg-green-300 border-collapse border-4 border-gray-300"> VALUE 3 DAYS BEFORE INTERNAL PAYMENT DATE</th>
                <th class="px-2 py-2 sticky top-0 px-4 py-2  text-black-900 bg-yellow-500 border-collapse border-4 border-gray-300"> POSITIONS TO PAY</th>
                <th class="px-2 py-2 sticky top-0 px-4 py-2  text-black-900 bg-purple-400 border-collapse border-4 border-gray-300">  POSITIONS PAYED</th>
                <th class="px-2 py-2 sticky top-0 px-4 py-2  text-black-900 bg-green-200 border-collapse border-4 border-gray-300"> POSITIONS STILL TO PAY</th>   
      </tr>
<tr>
        <td colspan="26" class="w-full px-1 py-1 top-0 px-2 py-1 w-24 border-4 border-gray-300 px-2 py-2 top-0 px-4 py-2 text-center bg-blue-300 text-white font-extrabold text-xl">1) Proforma - (sorted by payment date according to leadtime of suplier  and realiscij date  HC)</td>
</tr>
        <tbody v-for="(data, index) in filterZw" :key="index.id">
        <tr class="bg-gray-100 border-b border-gray-200">
          
                <td class="px-4 py-3 border-collapse border-4 border-gray-300">{{++index}}</td>
                <td class="px-4 py-3 border-collapse border-4 w-2 border-gray-300">{{ data['data'] }}</td>
                <td class="px-4 py-3 border-collapse border-4 w-7 border-gray-300">{{ data['ORDER NO']}}</td>
                <td class="px-4 py-3 border-collapse border-4 w-7 border-gray-300">{{ data['SERIA'] }}</td>
                <td class="px-4 py-3 border-collapse border-4 w-7 border-gray-300">{{ data['ktr_k_kod'] }}</td>
                <td class="px-4 py-3 border-collapse border-4 w-7 border-gray-300">{{ data['MODEL'] }}</td>
                <td class="px-4 py-3 border-collapse border-4 w-7 border-gray-300 w-3/4">{{ data['MATERIAL'] }}</td>
                <td class="px-4 py-3 border-collapse border-4 w-7 border-gray-300">{{ data['PROFORMA NR'] }}</td>
                <td class="px-4 py-3 border-collapse border-4 w-7 border-gray-300">{{ data['m1tre0_k_value916'] }}</td>
                <td class="px-4 py-3 border-collapse border-4 w-7 border-gray-300">{{ data['STATUS HISTORY'] }}</td>
                <td class="px-4 py-3 border-collapse border-4 w-7 border-gray-300">{{ data['DELIVERY PAYMENT AFTER PROFORM'] }}</td>
                <td class="px-4 py-3 border-collapse border-4 w-7 border-gray-300">{{ data['ORDER VALUE [PLN]'] }}</td>
                <td class="px-4 py-3 border-collapse border-4 w-7 border-gray-300">{{ data['Value proforma PLN'] }}</td>
                <td class="px-4 py-3 border-collapse border-4 w-7 border-gray-300">{{ data['Value proforma Euro'] }}</td>
                <td class="px-4 py-3 border-collapse border-4 w-7 border-gray-300">{{ data['ZO 1'] }}</td>
                <td class="px-4 py-3 border-collapse border-4 w-7 border-gray-300">{{ data['ZO 2'] }}</td>
                <td class="px-4 py-3 border-collapse border-4 w-7 border-gray-300">{{ data['PROD DATE ZO 1'] }}</td>
                <td class="px-4 py-3 border-collapse border-4 w-7 border-gray-300">{{ data['PROD DATE ZO 2'] }}</td>
                <td class="px-4 py-3 border-collapse border-4 w-7 border-gray-300">{{ data['PAYMENT DATE PROFORMA'] }}</td>
                <td class="px-4 py-3 border-collapse border-4 w-7 border-gray-300">{{ data['OPEN INVOCE'] }}</td>
                <td class="px-4 py-3 border-collapse border-4 w-7 border-gray-300">{{ data['m1tre0_k_value916'] }}</td>
                <td class="px-4 py-3 border-collapse border-4 w-7 border-gray-300"></td>
                <td class="px-4 py-3 border-collapse border-4 w-7 border-gray-300"></td>
                <td class="px-4 py-3 border-collapse border-4 w-7 border-gray-300"></td>
                <td class="px-4 py-3 border-collapse border-4 w-7 border-gray-300"></td>
                <td class="px-4 py-3 border-collapse border-4 w-7 border-gray-300"></td>
                 
			</tr>
		</tbody>
</table>


<!-- <table class="xl rounded-t-lg m-5 table-fixed  bg-gray-200 text-gray-800">
         <tr class="border-separate border-4 border-gray-300 ">
            <th class="px-2 py-2 sticky top-0 px-4 py-2  text-black-900 bg-yellow-200 border-collapse border-4 border-gray-300 ">value_3_days_before_internal_payment_date</th>
      </tr>
    <tr>
          <td colspan="26" class="sticky w-full px-1 py-1 top-0 px-2 py-1 w-24 border-4 border-gray-300 px-2 py-2 top-0 px-4 py-2 text-center bg-blue-300 text-white font-extrabold text-xl">1) Proforma - (sorted by payment date according to leadtime of suplier  and realiscij date  HC)</td>
    </tr>
        <tbody v-for="(data, index) in filterZw" :key="index.id">
        <tr class="bg-gray-100 border-b border-gray-200">
          <td class="px-4 py-3 border-collapse border-4 w-2 border-gray-300">{{ data['value_3_days_before_internal_payment_date'] }}</td>
			</tr>
		</tbody>
</table> -->

<!-- <table class="xl rounded-t-lg m-5 table-fixed bg-gray-200 text-gray-800">
        
         <tr class="border-separate border-4 border-gray-300 ">

                <th class="invisible px-2 py-2 sticky top-0 px-4 py-2 text-black-900 bg-yellow-200 border-collapse border-4 border-gray-300 ">L.P</th>
                <th class="invisible px-2 py-2 sticky top-0 px-4 py-2  text-black-900 bg-yellow-200 border-collapse border-4 border-gray-300 ">BUYING SUPPLIER KATEGORY (PIORYTET)</th>
                <th class="invisible px-2 py-2 sticky top-0 px-4 py-2  text-black-900 bg-yellow-200 border-collapse border-4 border-gray-300 "> ORDER NO</th>
                <th class="invisible px-2 py-2 sticky top-0 px-4 py-2  text-black-900 bg-yellow-200 border-collapse border-4 border-gray-300 "> SERIA</th>
                <th class="invisible px-2 py-2 sticky top-0 px-4 py-2  text-black-900 bg-yellow-200 border-collapse border-4 border-gray-300 "> KOD KLIENTA</th>
                <th class="invisible text-center px-2 py-2 sticky top-0 px-4 py-2  text-black-900 bg-yellow-200 border-collapse border-4 border-gray-300 "> MODEL</th>
                <th class="invisible text-center px-2 py-2 sticky top-0 px-4 py-2  text-black-900 bg-yellow-200 border-collapse border-4 border-gray-300 "> MATERIAL</th>
                <th class="invisible px-2 py-2 sticky top-0 px-4 py-2  text-black-900 bg-yellow-200 border-collapse border-4 border-gray-300 "> PROFORMA NR</th>
                <th class="invisible px-2 py-2 sticky top-0 px-4 py-2  text-black-900 bg-yellow-200 border-collapse border-4 border-gray-300 "> PROFORMA</th>
                <th class="invisible px-2 py-2 sticky top-0 px-4 py-2  text-black-900 bg-yellow-200 border-collapse border-4 border-gray-300 "> STATUS HISTORY</th>
                <th class="invisible px-2 py-2 sticky top-0 px-4 py-2  text-black-900 bg-yellow-200 border-collapse border-4 border-gray-300 "> DELIVERY PAYMENT AFTER PROFORMA</th>
                <th class="invisible px-2 py-2 sticky top-0 px-4 py-2  text-black-900 bg-yellow-200 border-collapse border-4 border-gray-300 "> ORDER VALUE [PLN]</th>
                <th class="invisible px-2 py-2 sticky top-0 px-4 py-2  text-black-900 bg-yellow-200 border-collapse border-4 border-gray-300 "> VALUE PROFORMA PLN</th>
                <th class="invisible px-2 py-2 sticky top-0 px-4 py-2  text-black-900 bg-yellow-200 border-collapse border-4 border-gray-300 "> VALUE PROFORMA EURO</th>
                <th class="invisible px-2 py-2 sticky top-0 px-4 py-2  text-black-900 bg-yellow-200 border-collapse border-4 border-gray-300 "> ZO 1</th>
                <th class="invisible px-2 py-2 sticky top-0 px-4 py-2  text-black-900 bg-yellow-200 border-collapse border-4 border-gray-300 "> ZO 2</th>
                <th class="invisible px-2 py-2 sticky top-0 px-4 py-2  text-black-900 bg-blue-300 border-collapse border-4 border-gray-300"> PROD DATE ZO 1</th>
                <th class="invisible px-2 py-2 sticky top-0 px-4 py-2  text-black-900 bg-blue-300 border-collapse border-4 border-gray-300"> PROD DATE ZO 2</th>
                <th class="invisible px-2 py-2 sticky top-0 px-4 py-2  text-black-900 bg-green-300 border-collapse border-4 border-gray-300"> PAYMENT DATE PROFORMA</th>
                <th class="invisible px-2 py-2 sticky top-0 px-4 py-2  text-black-900 bg-green-300 border-collapse border-4 border-gray-300"> OPEN INVOCE</th>
                <th class="invisible px-2 py-2 sticky top-0 px-4 py-2  text-black-900 bg-green-300 border-collapse border-4 border-gray-300"> PROFORMA</th>
                <th class="invisible px-2 py-2 sticky top-0 px-4 py-2  text-black-900 bg-green-300 border-collapse border-4 border-gray-300"> VALUE 3 DAYS BEFORE PUNCTUAL</th>
                <th class="invisible px-2 py-2 sticky top-0 px-4 py-2  text-black-900 bg-green-300 border-collapse border-4 border-gray-300"> VALUE 3 DAYS BEFORE INTERNAL PAYMENT DATE</th>
                <th class="invisible px-2 py-2 sticky top-0 px-4 py-2  text-black-900 bg-yellow-500 border-collapse border-4 border-gray-300"> POSITIONS TO PAY</th>
                <th class="invisible px-2 py-2 sticky top-0 px-4 py-2  text-black-900 bg-purple-400 border-collapse border-4 border-gray-300">  POSITIONS PAYED</th>
                <th class="invisible px-2 py-2 sticky top-0 px-4 py-2  text-black-900 bg-green-200 border-collapse border-4 border-gray-300"> POSITIONS STILL TO PAY</th>   
      
      </tr>

  <tr>

        <td colspan="26" class="sticky w-full px-1 py-1 top-0 px-2 py-1 w-24 border-4 border-gray-300 px-2 py-2 top-0 px-4 py-2 text-center bg-blue-300 text-white font-extrabold text-xl">2) due within 3 days or older WITH ZW - (based on official payment term and  sorted alhabetically by KOD Klienta)</td>

</tr>


          <tbody v-for="(data, index) in filterZw" :key="index.id">
			
        <tr class="bg-gray-100 border-b border-gray-200">
          
                <td class="px-4 py-3 border-collapse border-4 border-gray-300">{{++index}}</td>
                <td class="px-4 py-3 border-collapse border-4 w-2 border-gray-300">{{ data['data'] }}</td>
                <td class="px-4 py-3 border-collapse border-4 w-7 border-gray-300">{{ data['ORDER NO']}}</td>
                <td class="px-4 py-3 border-collapse border-4 w-7 border-gray-300">{{ data['SERIA'] }}</td>
                <td class="px-4 py-3 border-collapse border-4 w-7 border-gray-300">{{ data['KOD KLIENTA'] }}</td>
                <td class="px-4 py-3 border-collapse border-4 w-7 border-gray-300">{{ data['MODEL'] }}</td>
                <td class="px-4 py-3 border-collapse border-4 w-7 border-gray-300">{{ data['MATERIAL'] }}</td>
                <td class="px-4 py-3 border-collapse border-4 w-7 border-gray-300">{{ data['PROFORMA NR'] }}</td>
                <td class="px-4 py-3 border-collapse border-4 w-7 border-gray-300">{{ data['PROFORMA'] }}</td>
                <td class="px-4 py-3 border-collapse border-4 w-7 border-gray-300">{{ data['STATUS HISTORY'] }}</td>
                <td class="px-4 py-3 border-collapse border-4 w-7 border-gray-300">{{ data['DELIVERY PAYMENT AFTER PROFORM'] }}</td>
                <td class="px-4 py-3 border-collapse border-4 w-7 border-gray-300">{{ data['ORDER VALUE [PLN]'] }}</td>
                <td class="px-4 py-3 border-collapse border-4 w-7 border-gray-300">{{ data['Value proforma PLN'] }}</td>
                <td class="px-4 py-3 border-collapse border-4 w-7 border-gray-300">{{ data['Value proforma Euro'] }}</td>
                <td class="px-4 py-3 border-collapse border-4 w-7 border-gray-300">{{ data['ZO 1'] }}</td>
                <td class="px-4 py-3 border-collapse border-4 w-7 border-gray-300">{{ data['ZO 2'] }}</td>
                <td class="px-4 py-3 border-collapse border-4 w-7 border-gray-300">{{ data['PROD DATE ZO 1'] }}</td>
                <td class="px-4 py-3 border-collapse border-4 w-7 border-gray-300">{{ data['PROD DATE ZO 2'] }}</td>
                <td class="px-4 py-3 border-collapse border-4 w-7 border-gray-300">{{ data['PAYMENT DATE PROFORMA'] }}</td>
                <td class="px-4 py-3 border-collapse border-4 w-7 border-gray-300">{{ data['OPEN INVOCE'] }}</td>
                <td class="px-4 py-3 border-collapse border-4 w-7 border-gray-300">{{ data['Proforma'] }}</td>
                <td class="px-4 py-3 border-collapse border-4 w-7 border-gray-300"></td>
                <td class="px-4 py-3 border-collapse border-4 w-7 border-gray-300"></td>
                <td class="px-4 py-3 border-collapse border-4 w-7 border-gray-300"></td>
                <td class="px-4 py-3 border-collapse border-4 w-7 border-gray-300"></td>
                <td class="px-4 py-3 border-collapse border-4 w-7 border-gray-300"></td>
			</tr>



		</tbody>
</table>

<table class="xl rounded-t-lg m-5 table-fixed bg-gray-200 text-gray-800">
        
         <tr class="border-separate border-4 border-gray-300 ">

                <th class="invisible px-2 py-2 sticky top-0 px-4 py-2 text-black-900 bg-yellow-200 border-collapse border-4 border-gray-300 ">L.P</th>
                <th class="invisible px-2 py-2 sticky top-0 px-4 py-2  text-black-900 bg-yellow-200 border-collapse border-4 border-gray-300 ">BUYING SUPPLIER KATEGORY (PIORYTET)</th>
                <th class="invisible px-2 py-2 sticky top-0 px-4 py-2  text-black-900 bg-yellow-200 border-collapse border-4 border-gray-300 "> ORDER NO</th>
                <th class="invisible px-2 py-2 sticky top-0 px-4 py-2  text-black-900 bg-yellow-200 border-collapse border-4 border-gray-300 "> SERIA</th>
                <th class="invisible px-2 py-2 sticky top-0 px-4 py-2  text-black-900 bg-yellow-200 border-collapse border-4 border-gray-300 "> KOD KLIENTA</th>
                <th class="invisible text-center px-2 py-2 sticky top-0 px-4 py-2  text-black-900 bg-yellow-200 border-collapse border-4 border-gray-300 "> MODEL</th>
                <th class="invisible text-center px-2 py-2 sticky top-0 px-4 py-2  text-black-900 bg-yellow-200 border-collapse border-4 border-gray-300 "> MATERIAL</th>
                <th class="invisible px-2 py-2 sticky top-0 px-4 py-2  text-black-900 bg-yellow-200 border-collapse border-4 border-gray-300 "> PROFORMA NR</th>
                <th class="invisible px-2 py-2 sticky top-0 px-4 py-2  text-black-900 bg-yellow-200 border-collapse border-4 border-gray-300 "> PROFORMA</th>
                <th class="invisible px-2 py-2 sticky top-0 px-4 py-2  text-black-900 bg-yellow-200 border-collapse border-4 border-gray-300 "> STATUS HISTORY</th>
                <th class="invisible px-2 py-2 sticky top-0 px-4 py-2  text-black-900 bg-yellow-200 border-collapse border-4 border-gray-300 "> DELIVERY PAYMENT AFTER PROFORMA</th>
                <th class="invisible px-2 py-2 sticky top-0 px-4 py-2  text-black-900 bg-yellow-200 border-collapse border-4 border-gray-300 "> ORDER VALUE [PLN]</th>
                <th class="invisible px-2 py-2 sticky top-0 px-4 py-2  text-black-900 bg-yellow-200 border-collapse border-4 border-gray-300 "> VALUE PROFORMA PLN</th>
                <th class="invisible px-2 py-2 sticky top-0 px-4 py-2  text-black-900 bg-yellow-200 border-collapse border-4 border-gray-300 "> VALUE PROFORMA EURO</th>
                <th class="invisible px-2 py-2 sticky top-0 px-4 py-2  text-black-900 bg-yellow-200 border-collapse border-4 border-gray-300 "> ZO 1</th>
                <th class="invisible px-2 py-2 sticky top-0 px-4 py-2  text-black-900 bg-yellow-200 border-collapse border-4 border-gray-300 "> ZO 2</th>
                <th class="invisible px-2 py-2 sticky top-0 px-4 py-2  text-black-900 bg-blue-300 border-collapse border-4 border-gray-300"> PROD DATE ZO 1</th>
                <th class="invisible px-2 py-2 sticky top-0 px-4 py-2  text-black-900 bg-blue-300 border-collapse border-4 border-gray-300"> PROD DATE ZO 2</th>
                <th class="invisible px-2 py-2 sticky top-0 px-4 py-2  text-black-900 bg-green-300 border-collapse border-4 border-gray-300"> PAYMENT DATE PROFORMA</th>
                <th class="invisible px-2 py-2 sticky top-0 px-4 py-2  text-black-900 bg-green-300 border-collapse border-4 border-gray-300"> OPEN INVOCE</th>
                <th class="invisible px-2 py-2 sticky top-0 px-4 py-2  text-black-900 bg-green-300 border-collapse border-4 border-gray-300"> PROFORMA</th>
                <th class="invisible px-2 py-2 sticky top-0 px-4 py-2  text-black-900 bg-green-300 border-collapse border-4 border-gray-300"> VALUE 3 DAYS BEFORE PUNCTUAL</th>
                <th class="invisible px-2 py-2 sticky top-0 px-4 py-2  text-black-900 bg-green-300 border-collapse border-4 border-gray-300"> VALUE 3 DAYS BEFORE INTERNAL PAYMENT DATE</th>
                <th class="invisible px-2 py-2 sticky top-0 px-4 py-2  text-black-900 bg-yellow-500 border-collapse border-4 border-gray-300"> POSITIONS TO PAY</th>
                <th class="invisible px-2 py-2 sticky top-0 px-4 py-2  text-black-900 bg-purple-400 border-collapse border-4 border-gray-300">  POSITIONS PAYED</th>
                <th class="invisible px-2 py-2 sticky top-0 px-4 py-2  text-black-900 bg-green-200 border-collapse border-4 border-gray-300"> POSITIONS STILL TO PAY</th>   
      
      </tr>

  <tr>

        <td colspan="26" class="sticky w-full px-1 py-1 top-0 px-2 py-1 w-24 border-4 border-gray-300 px-2 py-2 top-0 px-4 py-2 text-center bg-blue-300 text-white font-extrabold text-xl">3) due within 3 days or older without ZW - (based on official payment term and  sorted alhabetically by KOD Klienta)</td>

</tr>


          <tbody v-for="(data, index) in filterZw" :key="index.id">
			
        <tr class="bg-gray-100 border-b border-gray-200">
          
                <td class="px-4 py-3 border-collapse border-4 border-gray-300">{{++index}}</td>
                <td class="px-4 py-3 border-collapse border-4 w-2 border-gray-300">{{ data['data'] }}</td>
                <td class="px-4 py-3 border-collapse border-4 w-7 border-gray-300">{{ data['ORDER NO']}}</td>
                <td class="px-4 py-3 border-collapse border-4 w-7 border-gray-300">{{ data['SERIA'] }}</td>
                <td class="px-4 py-3 border-collapse border-4 w-7 border-gray-300">{{ data['KOD KLIENTA'] }}</td>
                <td class="px-4 py-3 border-collapse border-4 w-7 border-gray-300">{{ data['MODEL'] }}</td>
                <td class="px-4 py-3 border-collapse border-4 w-7 border-gray-300">{{ data['MATERIAL'] }}</td>
                <td class="px-4 py-3 border-collapse border-4 w-7 border-gray-300">{{ data['PROFORMA NR'] }}</td>
                <td class="px-4 py-3 border-collapse border-4 w-7 border-gray-300">{{ data['PROFORMA'] }}</td>
                <td class="px-4 py-3 border-collapse border-4 w-7 border-gray-300">{{ data['STATUS HISTORY'] }}</td>
                <td class="px-4 py-3 border-collapse border-4 w-7 border-gray-300">{{ data['DELIVERY PAYMENT AFTER PROFORM'] }}</td>
                <td class="px-4 py-3 border-collapse border-4 w-7 border-gray-300">{{ data['ORDER VALUE [PLN]'] }}</td>
                <td class="px-4 py-3 border-collapse border-4 w-7 border-gray-300">{{ data['Value proforma PLN'] }}</td>
                <td class="px-4 py-3 border-collapse border-4 w-7 border-gray-300">{{ data['Value proforma Euro'] }}</td>
                <td class="px-4 py-3 border-collapse border-4 w-7 border-gray-300">{{ data['ZO 1'] }}</td>
                <td class="px-4 py-3 border-collapse border-4 w-7 border-gray-300">{{ data['ZO 2'] }}</td>
                <td class="px-4 py-3 border-collapse border-4 w-7 border-gray-300">{{ data['PROD DATE ZO 1'] }}</td>
                <td class="px-4 py-3 border-collapse border-4 w-7 border-gray-300">{{ data['PROD DATE ZO 2'] }}</td>
                <td class="px-4 py-3 border-collapse border-4 w-7 border-gray-300">{{ data['PAYMENT DATE PROFORMA'] }}</td>
                <td class="px-4 py-3 border-collapse border-4 w-7 border-gray-300">{{ data['OPEN INVOCE'] }}</td>
                <td class="px-4 py-3 border-collapse border-4 w-7 border-gray-300">{{ data['Proforma'] }}</td>
                <td class="px-4 py-3 border-collapse border-4 w-7 border-gray-300"></td>
                <td class="px-4 py-3 border-collapse border-4 w-7 border-gray-300"></td>
                <td class="px-4 py-3 border-collapse border-4 w-7 border-gray-300"></td>
                <td class="px-4 py-3 border-collapse border-4 w-7 border-gray-300"></td>
                <td class="px-4 py-3 border-collapse border-4 w-7 border-gray-300"></td>
			</tr>
      
		</tbody>
</table>

<table class="xl rounded-t-lg m-5 table-fixed bg-gray-200 text-gray-800">
        
         <tr class="border-separate border-4 border-gray-300 ">

                <th class="invisible px-2 py-2 sticky top-0 px-4 py-2 text-black-900 bg-yellow-200 border-collapse border-4 border-gray-300 ">L.P</th>
                <th class="invisible px-2 py-2 sticky top-0 px-4 py-2  text-black-900 bg-yellow-200 border-collapse border-4 border-gray-300 ">BUYING SUPPLIER KATEGORY (PIORYTET)</th>
                <th class="invisible px-2 py-2 sticky top-0 px-4 py-2  text-black-900 bg-yellow-200 border-collapse border-4 border-gray-300 "> ORDER NO</th>
                <th class="invisible px-2 py-2 sticky top-0 px-4 py-2  text-black-900 bg-yellow-200 border-collapse border-4 border-gray-300 "> SERIA</th>
                <th class="invisible px-2 py-2 sticky top-0 px-4 py-2  text-black-900 bg-yellow-200 border-collapse border-4 border-gray-300 "> KOD KLIENTA</th>
                <th class="invisible text-center px-2 py-2 sticky top-0 px-4 py-2  text-black-900 bg-yellow-200 border-collapse border-4 border-gray-300 "> MODEL</th>
                <th class="invisible text-center px-2 py-2 sticky top-0 px-4 py-2  text-black-900 bg-yellow-200 border-collapse border-4 border-gray-300 "> MATERIAL</th>
                <th class="invisible px-2 py-2 sticky top-0 px-4 py-2  text-black-900 bg-yellow-200 border-collapse border-4 border-gray-300 "> PROFORMA NR</th>
                <th class="invisible px-2 py-2 sticky top-0 px-4 py-2  text-black-900 bg-yellow-200 border-collapse border-4 border-gray-300 "> PROFORMA</th>
                <th class="invisible px-2 py-2 sticky top-0 px-4 py-2  text-black-900 bg-yellow-200 border-collapse border-4 border-gray-300 "> STATUS HISTORY</th>
                <th class="invisible px-2 py-2 sticky top-0 px-4 py-2  text-black-900 bg-yellow-200 border-collapse border-4 border-gray-300 "> DELIVERY PAYMENT AFTER PROFORMA</th>
                <th class="invisible px-2 py-2 sticky top-0 px-4 py-2  text-black-900 bg-yellow-200 border-collapse border-4 border-gray-300 "> ORDER VALUE [PLN]</th>
                <th class="invisible px-2 py-2 sticky top-0 px-4 py-2  text-black-900 bg-yellow-200 border-collapse border-4 border-gray-300 "> VALUE PROFORMA PLN</th>
                <th class="invisible px-2 py-2 sticky top-0 px-4 py-2  text-black-900 bg-yellow-200 border-collapse border-4 border-gray-300 "> VALUE PROFORMA EURO</th>
                <th class="invisible px-2 py-2 sticky top-0 px-4 py-2  text-black-900 bg-yellow-200 border-collapse border-4 border-gray-300 "> ZO 1</th>
                <th class="invisible px-2 py-2 sticky top-0 px-4 py-2  text-black-900 bg-yellow-200 border-collapse border-4 border-gray-300 "> ZO 2</th>
                <th class="invisible px-2 py-2 sticky top-0 px-4 py-2  text-black-900 bg-blue-300 border-collapse border-4 border-gray-300"> PROD DATE ZO 1</th>
                <th class="invisible px-2 py-2 sticky top-0 px-4 py-2  text-black-900 bg-blue-300 border-collapse border-4 border-gray-300"> PROD DATE ZO 2</th>
                <th class="invisible px-2 py-2 sticky top-0 px-4 py-2  text-black-900 bg-green-300 border-collapse border-4 border-gray-300"> PAYMENT DATE PROFORMA</th>
                <th class="invisible px-2 py-2 sticky top-0 px-4 py-2  text-black-900 bg-green-300 border-collapse border-4 border-gray-300"> OPEN INVOCE</th>
                <th class="invisible px-2 py-2 sticky top-0 px-4 py-2  text-black-900 bg-green-300 border-collapse border-4 border-gray-300"> PROFORMA</th>
                <th class="invisible px-2 py-2 sticky top-0 px-4 py-2  text-black-900 bg-green-300 border-collapse border-4 border-gray-300"> VALUE 3 DAYS BEFORE PUNCTUAL</th>
                <th class="invisible px-2 py-2 sticky top-0 px-4 py-2  text-black-900 bg-green-300 border-collapse border-4 border-gray-300"> VALUE 3 DAYS BEFORE INTERNAL PAYMENT DATE</th>
                <th class="invisible px-2 py-2 sticky top-0 px-4 py-2  text-black-900 bg-yellow-500 border-collapse border-4 border-gray-300"> POSITIONS TO PAY</th>
                <th class="invisible px-2 py-2 sticky top-0 px-4 py-2  text-black-900 bg-purple-400 border-collapse border-4 border-gray-300">  POSITIONS PAYED</th>
                <th class="invisible px-2 py-2 sticky top-0 px-4 py-2  text-black-900 bg-green-200 border-collapse border-4 border-gray-300"> POSITIONS STILL TO PAY</th>   
      
      </tr>

  <tr>

        <td colspan="26" class="sticky w-full px-1 py-1 top-0 px-2 py-1 w-24 border-4 border-gray-300 px-2 py-2 top-0 px-4 py-2 text-center bg-blue-300 text-white font-extrabold text-xl">4) NOT to pay by due date -  (to pay by comment in Vendo "agreemen/ugroda"  with and without ZO due or not due) </td>

</tr>


          <tbody v-for="(data, index) in filterZw" :key="index.id">
			
        <tr class="bg-gray-100 border-b border-gray-200">
          
                <td class="px-4 py-3 border-collapse border-4 border-gray-300">{{++index}}</td>
                <td class="px-4 py-3 border-collapse border-4 w-2 border-gray-300">{{ data['data'] }}</td>
                <td class="px-4 py-3 border-collapse border-4 w-7 border-gray-300">{{ data['ORDER NO']}}</td>
                <td class="px-4 py-3 border-collapse border-4 w-7 border-gray-300">{{ data['SERIA'] }}</td>
                <td class="px-4 py-3 border-collapse border-4 w-7 border-gray-300">{{ data['KOD KLIENTA'] }}</td>
                <td class="px-4 py-3 border-collapse border-4 w-7 border-gray-300">{{ data['MODEL'] }}</td>
                <td class="px-4 py-3 border-collapse border-4 w-7 border-gray-300">{{ data['MATERIAL'] }}</td>
                <td class="px-4 py-3 border-collapse border-4 w-7 border-gray-300">{{ data['PROFORMA NR'] }}</td>
                <td class="px-4 py-3 border-collapse border-4 w-7 border-gray-300">{{ data['PROFORMA'] }}</td>
                <td class="px-4 py-3 border-collapse border-4 w-7 border-gray-300">{{ data['STATUS HISTORY'] }}</td>
                <td class="px-4 py-3 border-collapse border-4 w-7 border-gray-300">{{ data['DELIVERY PAYMENT AFTER PROFORM'] }}</td>
                <td class="px-4 py-3 border-collapse border-4 w-7 border-gray-300">{{ data['ORDER VALUE [PLN]'] }}</td>
                <td class="px-4 py-3 border-collapse border-4 w-7 border-gray-300">{{ data['Value proforma PLN'] }}</td>
                <td class="px-4 py-3 border-collapse border-4 w-7 border-gray-300">{{ data['Value proforma Euro'] }}</td>
                <td class="px-4 py-3 border-collapse border-4 w-7 border-gray-300">{{ data['ZO 1'] }}</td>
                <td class="px-4 py-3 border-collapse border-4 w-7 border-gray-300">{{ data['ZO 2'] }}</td>
                <td class="px-4 py-3 border-collapse border-4 w-7 border-gray-300">{{ data['PROD DATE ZO 1'] }}</td>
                <td class="px-4 py-3 border-collapse border-4 w-7 border-gray-300">{{ data['PROD DATE ZO 2'] }}</td>
                <td class="px-4 py-3 border-collapse border-4 w-7 border-gray-300">{{ data['PAYMENT DATE PROFORMA'] }}</td>
                <td class="px-4 py-3 border-collapse border-4 w-7 border-gray-300">{{ data['OPEN INVOCE'] }}</td>
                <td class="px-4 py-3 border-collapse border-4 w-7 border-gray-300">{{ data['Proforma'] }}</td>
                <td class="px-4 py-3 border-collapse border-4 w-7 border-gray-300"></td>
                <td class="px-4 py-3 border-collapse border-4 w-7 border-gray-300"></td>
                <td class="px-4 py-3 border-collapse border-4 w-7 border-gray-300"></td>
                <td class="px-4 py-3 border-collapse border-4 w-7 border-gray-300"></td>
                <td class="px-4 py-3 border-collapse border-4 w-7 border-gray-300"></td>
			</tr>



		</tbody>
</table>

<table class="xl rounded-t-lg m-5 table-fixed bg-gray-200 text-gray-800">
        
         <tr class="border-separate border-4 border-gray-300 ">

                <th class="invisible px-2 py-2 sticky top-0 px-4 py-2 text-black-900 bg-yellow-200 border-collapse border-4 border-gray-300 ">L.P</th>
                <th class="invisible px-2 py-2 sticky top-0 px-4 py-2  text-black-900 bg-yellow-200 border-collapse border-4 border-gray-300 ">BUYING SUPPLIER KATEGORY (PIORYTET)</th>
                <th class="invisible px-2 py-2 sticky top-0 px-4 py-2  text-black-900 bg-yellow-200 border-collapse border-4 border-gray-300 "> ORDER NO</th>
                <th class="invisible px-2 py-2 sticky top-0 px-4 py-2  text-black-900 bg-yellow-200 border-collapse border-4 border-gray-300 "> SERIA</th>
                <th class="invisible px-2 py-2 sticky top-0 px-4 py-2  text-black-900 bg-yellow-200 border-collapse border-4 border-gray-300 "> KOD KLIENTA</th>
                <th class="invisible text-center px-2 py-2 sticky top-0 px-4 py-2  text-black-900 bg-yellow-200 border-collapse border-4 border-gray-300 "> MODEL</th>
                <th class="invisible text-center px-2 py-2 sticky top-0 px-4 py-2  text-black-900 bg-yellow-200 border-collapse border-4 border-gray-300 "> MATERIAL</th>
                <th class="invisible px-2 py-2 sticky top-0 px-4 py-2  text-black-900 bg-yellow-200 border-collapse border-4 border-gray-300 "> PROFORMA NR</th>
                <th class="invisible px-2 py-2 sticky top-0 px-4 py-2  text-black-900 bg-yellow-200 border-collapse border-4 border-gray-300 "> PROFORMA</th>
                <th class="invisible px-2 py-2 sticky top-0 px-4 py-2  text-black-900 bg-yellow-200 border-collapse border-4 border-gray-300 "> STATUS HISTORY</th>
                <th class="invisible px-2 py-2 sticky top-0 px-4 py-2  text-black-900 bg-yellow-200 border-collapse border-4 border-gray-300 "> DELIVERY PAYMENT AFTER PROFORMA</th>
                <th class="invisible px-2 py-2 sticky top-0 px-4 py-2  text-black-900 bg-yellow-200 border-collapse border-4 border-gray-300 "> ORDER VALUE [PLN]</th>
                <th class="invisible px-2 py-2 sticky top-0 px-4 py-2  text-black-900 bg-yellow-200 border-collapse border-4 border-gray-300 "> VALUE PROFORMA PLN</th>
                <th class="invisible px-2 py-2 sticky top-0 px-4 py-2  text-black-900 bg-yellow-200 border-collapse border-4 border-gray-300 "> VALUE PROFORMA EURO</th>
                <th class="invisible px-2 py-2 sticky top-0 px-4 py-2  text-black-900 bg-yellow-200 border-collapse border-4 border-gray-300 "> ZO 1</th>
                <th class="invisible px-2 py-2 sticky top-0 px-4 py-2  text-black-900 bg-yellow-200 border-collapse border-4 border-gray-300 "> ZO 2</th>
                <th class="invisible px-2 py-2 sticky top-0 px-4 py-2  text-black-900 bg-blue-300 border-collapse border-4 border-gray-300"> PROD DATE ZO 1</th>
                <th class="invisible px-2 py-2 sticky top-0 px-4 py-2  text-black-900 bg-blue-300 border-collapse border-4 border-gray-300"> PROD DATE ZO 2</th>
                <th class="invisible px-2 py-2 sticky top-0 px-4 py-2  text-black-900 bg-green-300 border-collapse border-4 border-gray-300"> PAYMENT DATE PROFORMA</th>
                <th class="invisible px-2 py-2 sticky top-0 px-4 py-2  text-black-900 bg-green-300 border-collapse border-4 border-gray-300"> OPEN INVOCE</th>
                <th class="invisible px-2 py-2 sticky top-0 px-4 py-2  text-black-900 bg-green-300 border-collapse border-4 border-gray-300"> PROFORMA</th>
                <th class="invisible px-2 py-2 sticky top-0 px-4 py-2  text-black-900 bg-green-300 border-collapse border-4 border-gray-300"> VALUE 3 DAYS BEFORE PUNCTUAL</th>
                <th class="invisible px-2 py-2 sticky top-0 px-4 py-2  text-black-900 bg-green-300 border-collapse border-4 border-gray-300"> VALUE 3 DAYS BEFORE INTERNAL PAYMENT DATE</th>
                <th class="invisible px-2 py-2 sticky top-0 px-4 py-2  text-black-900 bg-yellow-500 border-collapse border-4 border-gray-300"> POSITIONS TO PAY</th>
                <th class="invisible px-2 py-2 sticky top-0 px-4 py-2  text-black-900 bg-purple-400 border-collapse border-4 border-gray-300">  POSITIONS PAYED</th>
                <th class="invisible px-2 py-2 sticky top-0 px-4 py-2  text-black-900 bg-green-200 border-collapse border-4 border-gray-300"> POSITIONS STILL TO PAY</th>   
      
      </tr>

  <tr>

        <td colspan="26" class="sticky w-full px-1 py-1 top-0 px-2 py-1 w-24 border-4 border-gray-300 px-2 py-2 top-0 px-4 py-2 text-center bg-blue-300 text-white font-extrabold text-xl">5) manually added to list</td>

</tr>


          <tbody v-for="(data, index) in filterZw" :key="index.id">
			
        <tr class="bg-gray-100 border-b border-gray-200">
          
                <td class="px-4 py-3 border-collapse border-4 border-gray-300">{{++index}}</td>
                <td class="px-4 py-3 border-collapse border-4 w-2 border-gray-300">{{ data['data'] }}</td>
                <td class="px-4 py-3 border-collapse border-4 w-7 border-gray-300">{{ data['ORDER NO']}}</td>
                <td class="px-4 py-3 border-collapse border-4 w-7 border-gray-300">{{ data['SERIA'] }}</td>
                <td class="px-4 py-3 border-collapse border-4 w-7 border-gray-300">{{ data['KOD KLIENTA'] }}</td>
                <td class="px-4 py-3 border-collapse border-4 w-7 border-gray-300">{{ data['MODEL'] }}</td>
                <td class="px-4 py-3 border-collapse border-4 w-7 border-gray-300">{{ data['MATERIAL'] }}</td>
                <td class="px-4 py-3 border-collapse border-4 w-7 border-gray-300">{{ data['PROFORMA NR'] }}</td>
                <td class="px-4 py-3 border-collapse border-4 w-7 border-gray-300">{{ data['PROFORMA'] }}</td>
                <td class="px-4 py-3 border-collapse border-4 w-7 border-gray-300">{{ data['STATUS HISTORY'] }}</td>
                <td class="px-4 py-3 border-collapse border-4 w-7 border-gray-300">{{ data['DELIVERY PAYMENT AFTER PROFORM'] }}</td>
                <td class="px-4 py-3 border-collapse border-4 w-7 border-gray-300">{{ data['ORDER VALUE [PLN]'] }}</td>
                <td class="px-4 py-3 border-collapse border-4 w-7 border-gray-300">{{ data['Value proforma PLN'] }}</td>
                <td class="px-4 py-3 border-collapse border-4 w-7 border-gray-300">{{ data['Value proforma Euro'] }}</td>
                <td class="px-4 py-3 border-collapse border-4 w-7 border-gray-300">{{ data['ZO 1'] }}</td>
                <td class="px-4 py-3 border-collapse border-4 w-7 border-gray-300">{{ data['ZO 2'] }}</td>
                <td class="px-4 py-3 border-collapse border-4 w-7 border-gray-300">{{ data['PROD DATE ZO 1'] }}</td>
                <td class="px-4 py-3 border-collapse border-4 w-7 border-gray-300">{{ data['PROD DATE ZO 2'] }}</td>
                <td class="px-4 py-3 border-collapse border-4 w-7 border-gray-300">{{ data['PAYMENT DATE PROFORMA'] }}</td>
                <td class="px-4 py-3 border-collapse border-4 w-7 border-gray-300">{{ data['OPEN INVOCE'] }}</td>
                <td class="px-4 py-3 border-collapse border-4 w-7 border-gray-300">{{ data['Proforma'] }}</td>
                <td class="px-4 py-3 border-collapse border-4 w-7 border-gray-300"></td>
                <td class="px-4 py-3 border-collapse border-4 w-7 border-gray-300"></td>
                <td class="px-4 py-3 border-collapse border-4 w-7 border-gray-300"></td>
                <td class="px-4 py-3 border-collapse border-4 w-7 border-gray-300"></td>
                <td class="px-4 py-3 border-collapse border-4 w-7 border-gray-300"></td>
			</tr>

		</tbody>
</table> -->

</div>
</div>

</template>
  <script>
  import axios from "axios";
  export default {
  data() {
          return {
              data:[],
              search: "",
          }
      },
        created() 
    {
            this.getZw();
    },

  computed:{
      filterZw: function () 
      {
        return this.data.filter(data => 
        {
          return data.ktr_k_kod.toString().toLowerCase().match(this.search);
         
        });
      },
    },

  methods:{
      getZw() 
      {

        axios.get('api/get-zw')
          .then((response) => {
                      
            this.data = response.data;
          });
      },
      print() {
            this.$htmlToPaper("print");
    },
    }
  }
  </script>

<style>


</style>