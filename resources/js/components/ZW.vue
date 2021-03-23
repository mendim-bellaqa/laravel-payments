<template>
  <div>
	<table class="border-collapse: separate;">
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
    
			</tr>
		</thead>
    <!-- Remove the nasty inline CSS fixed height on production and replace it with a CSS class — this is just for demonstration purposes! -->
		<tbody class="bg-grey-light flex border-collapse: separate; flex-col items-center justify-between overflow-y-scroll w-full" style="height: 50vh;" v-for="data in data" :key="data.id">
			<tr class="flex w-full mb-4 border-collapse: separate;">
				<!-- <td class="p-4 w-1/4">{{data.MODEL}}</td> -->
				<td class="p-4 w-1/4">{{ data['test1'] }}</td>
                <td class="p-4 w-1/4">{{ data['data'] }}</td>
                <td class="p-4 w-1/4">{{ data['ORDER NO']}}</td>
                <td class="p-4 w-1/4">{{ data['SERIA'] }}</td>
                <td class="p-4 w-1/4">{{ data['KOD KLIENTA'] }}</td>
                <td class="p-4 w-1/4">{{ data['MODEL'] }}</td>
                <td class="p-4 w-1/4">{{ data['MATERIAL'] }}</td>
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