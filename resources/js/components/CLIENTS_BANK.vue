<template>
  <div>
   <div class="px-24 py-10 text-gray-700 dark:text-gray-500 transition duration-500 ease-in-out">
     <div class="mt-1 mb-4 flex  items-center justify-between "></div>	
     <p class="md:text-center text-4xl ...">CLIENT'S BANK</p>
    </div>

  <table class="md:container md:mx-auto rounded-t-lg m-5 table-fixed bg-gray-200 text-gray-800">

        <tr class="md:container md:mx-auto border-separate border-4 border-gray-300 ">
                    <th class="px-2 py-2 sticky top-0 px-4 py-2 text-black-900 bg-gray-200 border-collapse border-4 border-gray-300 ">L.p</th>
                    <th class="px-2 py-2 sticky top-0 px-4 py-2 text-black-900 bg-gray-200 border-collapse border-4 border-gray-300 ">CLIENTS NAME</th>
                    <th class="px-2 py-2 sticky top-0 px-4 py-2 text-black-900 bg-gray-200 border-collapse border-4 border-gray-300 ">ID KARTELA</th>
                    <th class="break-words px-2 py-2 sticky top-0 px-4 py-2 text-black-900 bg-gray-200 border-collapse border-4 border-gray-300 ">bank nr</th>
                    <th class="px-2 py-2 sticky top-0 px-4 py-2 text-black-900 bg-gray-200 border-collapse border-4 border-gray-300 ">bank opis</th>
                    <th class="px-2 py-2 sticky top-0 px-4 py-2 text-black-900 bg-gray-200 border-collapse border-4 border-gray-300 ">k_k_kredytdni</th>
                    <th class="px-2 py-2 sticky top-0 px-4 py-2 text-black-900 bg-gray-200 border-collapse border-4 border-gray-300 ">m1k_k_value984</th>
        </tr>
 
               <tbody v-for="(data, index) in data" :key="index.id">

        <tr class="md:container md:mx-auto bg-gray-100 border-b border-gray-200">
                    <td class="px-4 py-3 border-collapse border-4 w-2 border-gray-300">{{++index}}</td>
                    <td class="px-4 py-3 border-collapse border-4 w-2 border-gray-300">{{ data['client_name'] }}</td>
                    <td class="px-4 py-3 border-collapse border-4 w-2 border-gray-300">{{ data['k_k_idklienta'] }}</td>
                    <td class="break-words px-4 py-3 border-collapse border-4 w-2 border-gray-300">{{ data['br_br_nrkonta'] }}</td>
                    <td class="px-4 py-3 border-collapse border-4 w-2 border-gray-300">{{ data['br_br_opis'] }}</td>
                    <td class="px-4 py-3 border-collapse border-4 w-2 border-gray-300">{{ data['k_k_kredytdni'] }}</td>
                    <td class="px-4 py-3 border-collapse border-4 w-2 border-gray-300">{{ data['m1k_k_value984'] }}</td>
                   
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
        this.bank();
    },
        methods:{
        bank() 
        {

            axios.get('api/bank')
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

