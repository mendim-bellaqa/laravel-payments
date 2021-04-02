<template>

  <div>
   <div class="px-24 py-10 text-gray-700 dark:text-gray-500 transition duration-500 ease-in-out">
     <div class="mt-1 mb-4 flex  items-center justify-between "></div>	
					<input placeholder="Search"
				class="ml-2 shadow  appearance-none border rounded-md py-2 px-3 text-gray-700 leading-tight 
                focus:outline-none focus:shadow-outline border-gray-300"
				    type="text">
                <p class="text-center md:text-center text-3xl ...">Zobowiązania - REPORT</p>

                </div>

    <table class="rounded-t-lg m-5 w-5/6 border-collapse mx-auto bg-gray-200 text-gray-800">
                <tr class="text-center border-separate border-4 border-gray-300 ">
                    <th class="px-2 py-2 sticky top-0 px-4 py-2 text-black-900 bg-gray-200 border-collapse border-4 border-gray-300 ">L.p</th>
                    <th class="px-2 py-2 sticky top-0 px-4 py-2 text-black-900 bg-gray-200 border-collapse border-4 border-gray-300 ">DATA DOKUMENTU</th>
                    <th class="px-2 py-2 sticky top-0 px-4 py-2 text-black-900 bg-gray-200 border-collapse border-4 border-gray-300 ">DATA PLATNOSCI</th>
                    <th class="px-2 py-2 sticky top-0 px-4 py-2 text-black-900 bg-gray-200 border-collapse border-4 border-gray-300 ">KOD</th>
                    <th class="px-2 py-2 sticky top-0 px-4 py-2 text-black-900 bg-gray-200 border-collapse border-4 border-gray-300 ">NAZWA</th>
                    <th class="text-center px-2 py-2 sticky top-0 px-4 py-2 text-black-900 bg-gray-200 border-collapse border-4 border-gray-300 ">DNI PO TERMINIE</th>
                    <th class="text-center px-2 py-2 sticky top-0 px-4 py-2 text-black-900 bg-gray-200 border-collapse border-4 border-gray-300 ">POZOSTAŁO [PLN]</th>
                    <th class="text-center px-2 py-2 sticky top-0 px-4 py-2 text-black-900 bg-gray-200 border-collapse border-4 border-gray-300 ">AGREEMENT</th>
                    <th class="text-center px-2 py-2 sticky top-0 px-4 py-2 text-black-900 bg-gray-200 border-collapse border-4 border-gray-300 ">INTERNAL PAYMENT C DAYS</th>
                </tr>

		    <tbody v-for="(data, index) in data" :key="index.id">
  
            <tr class="bg-gray-100 border-b border-gray-200">

                <td class="px-4 py-3 border-collapse border-4 border-gray-300">{{++index}}</td>
                <td class="px-4 py-3 border-collapse border-4 border-gray-300 ">{{ data['rr_rr_datadokumentu'] }}</td>
                <td class="px-4 py-3 border-collapse border-4 border-gray-300 ">{{ data['rr_rr_dataplatnosci'] }}</td>
                <td class="px-4 py-3 border-collapse border-4 border-gray-300 ">{{ data['klrr_k_kod'] }}</td>
                <td class="px-4 py-3 border-collapse border-4 border-gray-300 ">{{ data['klrr_k_nazwa'] }}</td>
                <td class="text-center px-4 py-3 border-collapse border-4 border-gray-300 ">{{ data['rr_1205225012'] }}</td>
                <td class="text-center px-4 py-3 border-collapse border-4 border-gray-300 ">{{ data['rr_282851663'] }}</td>
                <td class="text-center px-4 py-3 border-collapse border-4 border-gray-300 ">{{ data['m1rr_k_value918'] }}</td>
                <td class="text-center px-4 py-3 border-collapse border-4 border-gray-300 ">{{ data['m1rr_k_value984'] }}</td>
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
           data: [],
        }
    },
    created() 
    {
        this.zbo();
    },
        methods:{
        zbo() 
        {

            axios.get('api/zbo')
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