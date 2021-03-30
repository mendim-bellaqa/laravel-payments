<template>
  <div>
   <div class="px-24 py-10 text-gray-700 dark:text-gray-500 transition duration-500 ease-in-out">
     <div class="mt-1 mb-4 flex  items-center justify-between "></div>	
     <p class="md:text-center text-4xl ...">PAYMENTS REPORT</p>

    </div>

    <div class="flex justify-center py-4 font-semibold border mt-10">
					<div class="align-middle inline-block overflow-hidden">
						<div  class="mx-auto container mb-8">
							<input placeholder="FILTER BY KOD KLIENTA"
								class="ml-2 shadow appearance-none border rounded-md py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline border-gray-300"
								type="text"
								v-model="search">
						</div>
      </div>

      </div>
<table class="rounded-t-lg m-5 table-fixed bg-gray-200 text-gray-800">
        
        <tr class="w-12 border-separate border-4 border-gray-300 ">
                <th class="px-1 py-1 sticky top-0 px-2 py-1 w-24 text-black-900 bg-gray-200 "></th>
                <th class="px-1 py-1 sticky top-0 px-2 py-1 w-24 text-black-900 bg-gray-200 b "></th>
                <th class="px-1 py-1 sticky top-0 px-2 py-1 w-24 text-black-900 bg-gray-200  "> </th>
                <th class="px-1 py-1 sticky top-0 px-2 py-1 w-24 text-black-900 bg-gray-200  "> </th>
                <th class="px-1 py-1 sticky top-0 px-2 py-1 w-24 text-black-900 bg-gray-200  "> </th>
                <th class="px-1 py-1 sticky top-0 px-2 py-1 w-24 text-black-900 bg-gray-200  "> </th>
                <th class="px-1 py-1 sticky top-0 px-2 py-1 w-24 text-black-900 bg-gray-200  "> </th>
                <th class="px-1 py-1 sticky top-0 px-2 py-1 w-24 text-black-900 bg-gray-200 "> </th>
                <th class="px-1 py-1 sticky top-0 px-2 py-1 w-24 text-black-900 border-4 border-gray-300 bg-yellow-500 "> WORK DAYS from material arrival to data realizacji:</th>
                <th class="px-1 py-1 sticky top-0 px-2 py-1 w-24 text-black-900 border-4 border-gray-300 bg-yellow-500 "> 6</th>
                <th class="px-1 py-1 sticky top-0 px-2 py-1 w-24 text-black-900 bg-gray-200 "> </th>
                <th class="px-1 py-1 sticky top-0 px-2 py-1 w-24 text-black-900 bg-gray-200 "> </th>
                <th class="px-1 py-1 sticky top-0 px-2 py-1 w-24 text-black-900 bg-gray-200 "> </th>
                <th class="px-1 py-1 sticky top-0 px-2 py-1 w-24 text-black-900 border-4 border-gray-300 bg-yellow-500 "> KURS:</th>
                <th class="px-1 py-1 sticky top-0 px-2 py-1 w-24 text-black-900 border-4 border-gray-300 bg-yellow-500 "> 4.5</th>
                <th class="px-1 py-1 sticky top-0 px-2 py-1 w-24 text-black-900 bg-gray-200  "> </th>
                <th class="px-1 py-1 sticky top-0 px-2 py-1 w-24 text-black-900 bg-gray-200  "> </th>
                <th class="px-1 py-1 sticky top-0 px-2 py-1 w-24 text-black-900 bg-gray-200  "> </th>
                <th class="px-1 py-1 sticky top-0 px-2 py-1 w-24 text-black-900 border-4 border-gray-300 bg-yellow-200 "> DATE:</th>
                <th class="px-1 py-1 sticky top-0 px-2 py-1 w-24 text-black-900 border-4 border-gray-300 bg-yellow-200 "> 3/25/2021</th>
                <th class="px-1 py-1 sticky top-0 px-2 py-1 w-24 text-black-900 border-4 border-gray-300 bg-yellow-200  "> TOTAL:</th>
                <th class="px-1 py-1 sticky top-0 px-2 py-1 w-24 text-black-900 border-4 border-gray-300 bg-yellow-200  "> 1077869.965</th>
                <th class="px-1 py-1 sticky top-0 px-2 py-1 w-24 text-black-900 bg-gray-200 b "> </th>
                <th class="px-1 py-1 sticky top-0 px-2 py-1 w-24 text-black-900 border-4 border-gray-300 bg-yellow-500 b "> 0</th>
                <th class="px-1 py-1 sticky top-0 px-2 py-1 w-24 text-black-900 border-4 border-gray-300 bg-purple-400  "> 0</th>
                <th class="px-1 py-1 sticky top-0 px-2 py-1 w-24 text-black-900 border-4 border-gray-300 bg-green-200  "> 0</th>
		    	</tr>

  <tr class="border-separate border-4 border-gray-300 ">
                <th class="px-2 py-2 sticky top-0 px-4 py-2 text-black-900 bg-yellow-200 border-collapse border-4 border-gray-300 ">L.p</th>
                <th class="px-2 py-2 sticky top-0 px-4 py-2  text-black-900 bg-yellow-200 border-collapse border-4 border-gray-300 ">Buying Supplier Kategory (piorytet)</th>
                <th class="px-2 py-2 sticky top-0 px-4 py-2  text-black-900 bg-yellow-200 border-collapse border-4 border-gray-300 "> ORDER NO</th>
                <th class="px-2 py-2 sticky top-0 px-4 py-2  text-black-900 bg-yellow-200 border-collapse border-4 border-gray-300 "> SERIA</th>
                <th class="px-2 py-2 sticky top-0 px-4 py-2  text-black-900 bg-yellow-200 border-collapse border-4 border-gray-300 "> KOD KLIENTA</th>
                <th class="px-2 py-2 sticky top-0 px-4 py-2  text-black-900 bg-yellow-200 border-collapse border-4 border-gray-300 "> MODEL</th>
                <th class="px-2 py-2 sticky top-0 px-4 py-2  text-black-900 bg-yellow-200 border-collapse border-4 border-gray-300 "> MATERIAL</th>
                <th class="px-2 py-2 sticky top-0 px-4 py-2  text-black-900 bg-yellow-200 border-collapse border-4 border-gray-300 "> PROFORMA NR</th>
                <th class="px-2 py-2 sticky top-0 px-4 py-2  text-black-900 bg-yellow-200 border-collapse border-4 border-gray-300 "> PROFORMA</th>
                <th class="px-2 py-2 sticky top-0 px-4 py-2  text-black-900 bg-yellow-200 border-collapse border-4 border-gray-300 "> STATUS HISTORY</th>
                <th class="px-2 py-2 sticky top-0 px-4 py-2  text-black-900 bg-yellow-200 border-collapse border-4 border-gray-300 "> DELIVERY PAYMENT AFTER PROFORMA</th>
                <th class="px-2 py-2 sticky top-0 px-4 py-2  text-black-900 bg-yellow-200 border-collapse border-4 border-gray-300 "> ORDER VALUE [PLN]</th>
                <th class="px-2 py-2 sticky top-0 px-4 py-2  text-black-900 bg-yellow-200 border-collapse border-4 border-gray-300 "> Value proforma PLN</th>
                <th class="px-2 py-2 sticky top-0 px-4 py-2  text-black-900 bg-yellow-200 border-collapse border-4 border-gray-300 "> Value proforma Euro</th>
                <th class="px-2 py-2 sticky top-0 px-4 py-2  text-black-900 bg-yellow-200 border-collapse border-4 border-gray-300 "> ZO 1</th>
                <th class="px-2 py-2 sticky top-0 px-4 py-2  text-black-900 bg-yellow-200 border-collapse border-4 border-gray-300 "> ZO 2</th>
                <th class="px-2 py-2 sticky top-0 px-4 py-2  text-black-900 bg-blue-300 border-collapse border-4 border-gray-300"> PROD DATE ZO 1</th>
                <th class="px-2 py-2 sticky top-0 px-4 py-2  text-black-900 bg-blue-300 border-collapse border-4 border-gray-300"> PROD DATE ZO 2</th>
                <th class="px-2 py-2 sticky top-0 px-4 py-2  text-black-900 bg-green-300 border-collapse border-4 border-gray-300"> PAYMENT DATE PROFORMA</th>
                <th class="px-2 py-2 sticky top-0 px-4 py-2  text-black-900 bg-green-300 border-collapse border-4 border-gray-300"> OPEN INVOCE</th>
                <th class="px-2 py-2 sticky top-0 px-4 py-2  text-black-900 bg-green-300 border-collapse border-4 border-gray-300"> Proforma</th>
                <th class="px-2 py-2 sticky top-0 px-4 py-2  text-black-900 bg-green-300 border-collapse border-4 border-gray-300"> Value 3 days before punctual</th>
                <th class="px-2 py-2 sticky top-0 px-4 py-2  text-black-900 bg-green-300 border-collapse border-4 border-gray-300"> Value 3 days before internal payment date</th>
                <th class="px-2 py-2 sticky top-0 px-4 py-2  text-black-900 bg-yellow-500 border-collapse border-4 border-gray-300"> positions to pay</th>
                <th class="px-2 py-2 sticky top-0 px-4 py-2  text-black-900 bg-purple-400 border-collapse border-4 border-gray-300">  positions payed</th>
                <th class="px-2 py-2 sticky top-0 px-4 py-2  text-black-900 bg-green-200 border-collapse border-4 border-gray-300"> positions still to pay</th>
			</tr>

        <!-- <table class="rounded-t-lg m-5 w-5/6 border-collapse  bg-gray-200 text-black-800">
        <tr class="border-separate w-full border-4 border-gray-300 ">
        <tr class="w-full text-center py-4">
        <th class="w-full text-center pr-2 px-8 "> 1) Proforma - (sorted by payment date according to leadtime of suplier  and realiscij date  HC)</th>
        </tr>
        
        </table> -->
        <!-- <table class="w-full text-center ...">
        <div class="w-full text-center ...">1) Proforma - (sorted by payment date according to leadtime of suplier  and realiscij date  HC)</div>
        </table> -->

		    <tbody v-for="(data, index) in filterZw" :key="index.id">
			
        <tr class="bg-gray-100 border-b border-gray-200">
                <td class="px-4 py-3 border-collapse border-4 border-gray-300">{{++index}}</td>
                <!-- <td class="px-4 py-3 border-collapse border-4 w-7 border-gray-300">{{ data['test1'] }}</td> -->
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
</div>
</template>
<script>
import axios from "axios";
import { AgGridVue } from "ag-grid-vue";
export default {
data() {
        return {
            data:[],
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
				return data['KOD KLIENTA'].toString().toLowerCase().match(this.search);
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

	}
}
</script>


// <script>
//     import { AgGridVue } from "ag-grid-vue";

//     export default {
//         name: 'App',
//         data() {
//             return {
//                 columnDefs: null,
//                 rowData: null
//             }
//         },
//         components: {
//             AgGridVue
//         },
//         beforeMount() {
//             this.columnDefs = [
//                 { field: 'make' },
//                 { field: 'model' },
//                 { field: 'price' }
//             ];

//             this.rowData = [
//                 { make: 'Toyota', model: 'Celica', price: 35000 },
//                 { make: 'Ford', model: 'Mondeo', price: 32000 },
//                 { make: 'Porsche', model: 'Boxter', price: 72000 }
//             ];
//         }
//     }
// </script>

<style>


</style>