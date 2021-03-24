<template>
  <div>
   <div class="px-24 py-10 text-gray-700 dark:text-gray-500 transition duration-500 ease-in-out">
     <div class="mt-1 mb-4 flex  items-center justify-between "></div>	
							<input placeholder="Search"
								class="ml-2 shadow  appearance-none border rounded-md py-2 px-3 text-gray-700 leading-tight 
                focus:outline-none focus:shadow-outline border-gray-300"
								type="text"
								v-model="search">

                <p class="text-left md:text-center text-3xl ...">PAYMENTS REPORT</p>
                
						</div>
<table class="rounded-t-lg m-5 w-5/6 border-collapse mx-auto bg-gray-200 text-gray-800">
  <tr class="text-left border-separate border-4 border-gray-300 ">
                <th class="px-4 py-3 sticky top-0 px-6 py-3 text-black-900 bg-gray-200 border-collapse ">L.p</th>
                <th class="px-4 py-3 sticky top-0 px-6 py-3 text-black-900 bg-gray-200 border-collapse ">Buying Supplier Kategory (piorytet)</th>
                <th class="px-4 py-3 sticky top-0 px-6 py-3 text-black-900 bg-gray-200 border-collapse "> Buying Supplier Kategory (piorytet)</th>
                <th class="px-4 py-3 sticky top-0 px-6 py-3 text-black-900 bg-gray-200 border-collapse "> ORDER NO</th>
                <th class="px-4 py-3 sticky top-0 px-6 py-3 text-black-900 bg-gray-200 border-collapse "> SERIA</th>
                <th class="px-4 py-3 sticky top-0 px-6 py-3 text-black-900 bg-gray-200 border-collapse "> KOD KLIENTA</th>
                <th class="px-4 py-3 sticky top-0 px-6 py-3 text-black-900 bg-gray-200 border-collapse "> MODEL</th>
                <th class="px-4 py-3 sticky top-0 px-6 py-3 text-black-900 bg-gray-200 border-collapse "> MATERIAL</th>
                <th class="px-4 py-3 sticky top-0 px-6 py-3 text-black-900 bg-gray-200 border-collapse "> PROFORMA NR</th>
                <th class="px-4 py-3 sticky top-0 px-6 py-3 text-black-900 bg-gray-200 border-collapse "> PROFORMA</th>
                <th class="px-4 py-3 sticky top-0 px-6 py-3 text-black-900 bg-gray-200 border-collapse "> STATUS HISTORY</th>
                <th class="px-4 py-3 sticky top-0 px-6 py-3 text-black-900 bg-gray-200 border-collapse "> DELIVERY PAYMENT AFTER PROFORMA</th>
                <th class="px-4 py-3 sticky top-0 px-6 py-3 text-black-900 bg-gray-200 border-collapse "> ORDER VALUE [PLN]</th>
                <th class="px-4 py-3 sticky top-0 px-6 py-3 text-black-900 bg-gray-200 border-collapse "> Value proforma PLN</th>
                <th class="px-4 py-3 sticky top-0 px-6 py-3 text-black-900 bg-gray-200 border-collapse "> Value proforma Euro</th>
                <th class="px-4 py-3 sticky top-0 px-6 py-3 text-black-900 bg-gray-200 border-collapse "> ZO 1</th>
                <th class="px-4 py-3 sticky top-0 px-6 py-3 text-black-900 bg-gray-200 border-collapse "> ZO 2</th>
                <th class="px-4 py-3 sticky top-0 px-6 py-3 text-black-900 bg-gray-200 border-collapse "> PROD DATE ZO 1</th>
                <th class="px-4 py-3 sticky top-0 px-6 py-3 text-black-900 bg-gray-200 border-collapse "> PROD DATE ZO 2</th>
                <th class="px-4 py-3 sticky top-0 px-6 py-3 text-black-900 bg-gray-200 border-collapse "> PAYMENT DATE PROFORMA</th>
                <th class="px-4 py-3 sticky top-0 px-6 py-3 text-black-900 bg-gray-200 border-collapse "> OPEN INVOCE</th>
                <th class="px-4 py-3 sticky top-0 px-6 py-3 text-black-900 bg-gray-200 border-collapse "> Proforma</th>
                <th class="px-4 py-3 sticky top-0 px-6 py-3 text-black-900 bg-gray-200 border-collapse "> Value 3 days before punctual</th>
                <th class="px-4 py-3 sticky top-0 px-6 py-3 text-black-900 bg-gray-200 border-collapse "> Value 3 days before internal payment date</th>
                <th class="px-4 py-3 sticky top-0 px-6 py-3 text-black-900 bg-gray-200 border-collapse "> COUNTIF - positions to pay</th>
                <th class="px-4 py-3 sticky top-0 px-6 py-3 text-black-900 bg-gray-200 border-collapse "> COUNTIF - positions payed</th>
                <th class="px-4 py-3 sticky top-0 px-6 py-3 text-black-900 bg-gray-200 border-collapse "> COUNTIF - positions still to pay</th>
			</tr>

		<tbody v-for="data in data" :key="data.id">
  
  
        <tr class="bg-gray-100 border-b border-gray-200">
				        <td class="px-4 py-3 border-collapse ">{{ data['test1'] }}</td>
                <td class="px-4 py-3 border-collapse ">{{ data['test1'] }}</td>
                <td class="px-4 py-3 border-collapse ">{{ data['data'] }}</td>
                <td class="px-4 py-3 border-collapse ">{{ data['ORDER NO']}}</td>
                <td class="px-4 py-3 border-collapse ">{{ data['SERIA'] }}</td>
                <td class="px-4 py-3 border-collapse ">{{ data['KOD KLIENTA'] }}</td>
                <td class="px-4 py-3 border-collapse ">{{ data['MODEL'] }}</td>
                <td class="px-4 py-3 border-collapse ">{{ data['MATERIAL'] }}</td>
                <td class="px-4 py-3 border-collapse ">{{ data['PROFORMA NR'] }}</td>
                <td class="px-4 py-3 border-collapse ">{{ data['PROFORMA'] }}</td>
                <td class="px-4 py-3 border-collapse ">{{ data['STATUS HISTORY'] }}</td>
                <td class="px-4 py-3 border-collapse ">{{ data['DELIVERY PAYMENT AFTER PROFORM'] }}</td>
                <td class="px-4 py-3 border-collapse ">{{ data['ORDER VALUE [PLN]'] }}</td>
                <td class="px-4 py-3 border-collapse ">{{ data['Value proforma PLN'] }}</td>
                <td class="px-4 py-3 border-collapse ">{{ data['Value proforma Euro'] }}</td>
                <td class="px-4 py-3 border-collapse ">{{ data['ZO 1'] }}</td>
                <td class="px-4 py-3 border-collapse ">{{ data['ZO 2'] }}</td>
                <td class="px-4 py-3 border-collapse ">{{ data['PROD DATE ZO 1'] }}</td>
                <td class="px-4 py-3 border-collapse ">{{ data['PROD DATE ZO 2'] }}</td>
                <td class="px-4 py-3 border-collapse ">{{ data['PAYMENT DATE PROFORMA'] }}</td>
                <td class="px-4 py-3 border-collapse ">{{ data['OPEN INVOCE'] }}</td>
                <td class="px-4 py-3 border-collapse ">{{ data['Proforma'] }}</td>
                <td class="px-4 py-3 border-collapse "></td>
                <td class="px-4 py-3 border-collapse "></td>
                <td class="px-4 py-3 border-collapse "></td>
                <td class="px-4 py-3 border-collapse "></td>
                <td class="px-4 py-3 border-collapse "></td>
			</tr>
		</tbody>
	</table>
</div>
</template>
<script>
import axios from "axios";
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
    	methods:{
		getZw() 
		{

			axios.get('api/get-zw')
				.then((response) => {
                    console.log(response.data);
					this.data = response.data;
				});
		},	
			
	}
}
</script>

<style>

</style>