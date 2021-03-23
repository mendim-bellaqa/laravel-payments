<template>
  <div>
	<table class="border-separate border border-green-800 ...">
		<thead class="bg-black flex text-white w-full">
			<tr class="flex w-full mb-4">
				<!-- <th class="p-4 w-1/4">One</th> -->
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
		</thead>
    <!-- Remove the nasty inline CSS fixed height on production and replace it with a CSS class — this is just for demonstration purposes! -->
		<tbody class="bg-grey-light flex border-collapse: separate; flex-col items-center justify-between overflow-y-scroll w-full" style="height: 50vh;" v-for="data in data" :key="data.id">
			<tr class="flex w-full mb-4 border-collapse: separate;">
				<!-- <td class="p-4 w-1/4">{{data.MODEL}}</td> -->
				<td class="p-4 w-1/4 border-t-2 border-2 md:border-t-4 ...">{{ data['test1'] }}</td>
                <td class="p-4 w-1/4 border-t-2 border-2 md:border-t-4 ">{{ data['data'] }}</td>
                <td class="p-4 w-1/4 border-t-2 border-2 md:border-t-4 ">{{ data['ORDER NO']}}</td>
                <td class="p-4 w-1/4 border-t-2 border-2 md:border-t-4 ">{{ data['SERIA'] }}</td>
                <td class="p-4 w-1/4 border-t-2 border-2 md:border-t-4 ">{{ data['KOD KLIENTA'] }}</td>
                <td class="p-4 w-1/4 border-t-2 border-2 md:border-t-4 ">{{ data['MODEL'] }}</td>
                <td class="p-4 w-1/4 border-t-2 border-2 md:border-t-4 ">{{ data['MATERIAL'] }}</td>
                <td class="p-4 w-1/4 border-t-2 border-2 md:border-t-4 ">{{ data['PROFORMA NR'] }}</td>
                <td class="p-4 w-1/4 border-t-2 border-2 md:border-t-4 ">{{ data['PROFORMA'] }}</td>
                <td class="p-4 w-1/4 border-t-2 border-2 md:border-t-4 ">{{ data['STATUS HISTORY'] }}</td>
                <td class="p-4 w-1/4 border-t-2 border-2 md:border-t-4 ">{{ data['DELIVERY PAYMENT AFTER PROFORM'] }}</td>
                <td class="p-4 w-1/4 border-t-2 border-2 md:border-t-4 ">{{ data['ORDER VALUE [PLN]'] }}</td>
                <td class="p-4 w-1/4 border-t-2 border-2 md:border-t-4 ">{{ data['Value proforma PLN'] }}</td>
                <td class="p-4 w-1/4 border-t-2 border-2 md:border-t-4 ">{{ data['Value proforma Euro'] }}</td>
                <td class="p-4 w-1/4 border-t-2 border-2 md:border-t-4 ">{{ data['ZO 1'] }}</td>
                <td class="p-4 w-1/4 border-t-2 border-2 md:border-t-4 ">{{ data['ZO 2'] }}</td>
                <td class="p-4 w-1/4 border-t-2 border-2 md:border-t-4 ">{{ data['PROD DATE ZO 1'] }}</td>
                <td class="p-4 w-1/4 border-t-2 border-2 md:border-t-4 ">{{ data['PROD DATE ZO 2'] }}</td>
                <td class="p-4 w-1/4 border-t-2 border-2 md:border-t-4 ">{{ data['PAYMENT DATE PROFORMA'] }}</td>
                <td class="p-4 w-1/4 border-t-2 border-2 md:border-t-4 ">{{ data['OPEN INVOCE'] }}</td>
                <td class="p-4 w-1/4 border-t-2 border-2 md:border-t-4 ">{{ data['Proforma'] }}</td>
                <td class="p-4 w-1/4 border-t-2 border-2 md:border-t-4 "></td>
                <td class="p-4 w-1/4 border-t-2 border-2 md:border-t-4 "></td>
                <td class="p-4 w-1/4 border-t-2 border-2 md:border-t-4 "></td>
                <td class="p-4 w-1/4 border-t-2 border-2 md:border-t-4 "></td>
                <td class="p-4 w-1/4 border-t-2 border-2 md:border-t-4 "></td>
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