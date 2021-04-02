<template>
  <div>
   <div class="px-24 py-10 text-gray-700 dark:text-gray-500 transition duration-500 ease-in-out">
     <div class="mt-1 mb-4 flex  items-center justify-between "></div>	
     <p class="md:text-center text-4xl ...">CLIENTS REPORT</p>
    </div>

  <table class="rounded-t-lg m-5 table-fixed bg-gray-200 text-gray-800">

  <tr class="border-separate border-4 border-gray-300 ">
                    <th class="px-2 py-2 sticky top-0 px-4 py-2 text-black-900 bg-gray-200 border-collapse border-4 border-gray-300 ">L.P</th>
                    <th class="px-2 py-2 sticky top-0 px-4 py-2 text-black-900 bg-gray-200 border-collapse border-4 border-gray-300 ">KOD</th>
                    <th class="px-2 py-2 sticky top-0 px-4 py-2 text-black-900 bg-gray-200 border-collapse border-4 border-gray-300 ">NAZWA</th>
                    <th class="px-2 py-2 sticky top-0 px-4 py-2 text-black-900 bg-gray-200 border-collapse border-4 border-gray-300 ">MIEJSCOWOSC</th>
                    <th class="px-2 py-2 sticky top-0 px-4 py-2 text-black-900 bg-gray-200 border-collapse border-4 border-gray-300 ">ADRES</th>
                    <th class="px-2 py-2 sticky top-0 px-4 py-2 text-black-900 bg-gray-200 border-collapse border-4 border-gray-300 ">KOD POCZTOVY</th>
                    <th class="px-2 py-2 sticky top-0 px-4 py-2 text-black-900 bg-gray-200 border-collapse border-4 border-gray-300 ">NIP</th>
                    <th class="px-2 py-2 sticky top-0 px-4 py-2 text-black-900 bg-gray-200 border-collapse border-4 border-gray-300 ">NR KONTO</th>
                    <th class="px-2 py-2 sticky top-0 px-4 py-2 text-black-900 bg-gray-200 border-collapse border-4 border-gray-300 ">BANK NAME</th>
                    <th class="px-2 py-2 sticky top-0 px-4 py-2 text-black-900 bg-gray-200 border-collapse border-4 border-gray-300 ">PROVIDE / RECIPENT</th>
                    <th class="px-2 py-2 sticky top-0 px-4 py-2 text-black-900 bg-gray-200 border-collapse border-4 border-gray-300 ">ZADŁUŻENIE</th>
                    <th class="px-2 py-2 sticky top-0 px-4 py-2 text-black-900 bg-gray-200 border-collapse border-4 border-gray-300 ">UWAGI O POROZUMIENIU</th>
                    <th class="px-2 py-2 sticky top-0 px-4 py-2 text-black-900 bg-gray-200 border-collapse border-4 border-gray-300 ">KATEGORY (PRIORYTET) </th>
                    <th class="px-2 py-2 sticky top-0 px-4 py-2 text-black-900 bg-gray-200 border-collapse border-4 border-gray-300 ">AGREEMENT</th>
                    <th class="px-2 py-2 sticky top-0 px-4 py-2 text-black-900 bg-gray-200 border-collapse border-4 border-gray-300 ">DELIVERY PAYMENT AFTER PROFORMA</th>
                    <th class="px-2 py-2 sticky top-0 px-4 py-2 text-black-900 bg-gray-200 border-collapse border-4 border-gray-300 ">OKRES SPŁATY W DNIACH</th>
                    <th class="px-2 py-2 sticky top-0 px-4 py-2 text-black-900 bg-gray-200 border-collapse border-4 border-gray-300 ">INTERNAL PAYMENT C DAY</th>
    </tr>


        <tbody v-for="(data, index) in data" :key="index.id">

        <tr class="bg-gray-100 border-b border-gray-200">
                    <td class="px-4 py-3 border-collapse border-4 w-2 border-gray-300">{{++index}}</td>
                    <td class="px-4 py-3 border-collapse border-4 w-2 border-gray-300">{{ data['Kod'] }}</td>
                    <td class="px-4 py-3 border-collapse border-4 w-2 border-gray-300">{{ data['Nazwa'] }}</td>
                    <td class="px-4 py-3 border-collapse border-4 w-2 border-gray-300">{{ data['k_k_miejscowosc'] }}</td>
                    <td class="px-4 py-3 border-collapse border-4 w-2 border-gray-300">{{ data['k_k_ulica'] }}</td>
                    <td class="px-4 py-3 border-collapse border-4 w-2 border-gray-300">{{ data['k_k_kodpocztowy'] }}</td>
                    <td class="px-4 py-3 border-collapse border-4 w-2 border-gray-300">{{ data['k_k_nip'] }}</td>
                    <td class="px-4 py-3 border-collapse border-4 w-2 border-gray-300">{{ data['br_br_nrkonta'] }}</td>
                    <td class="px-4 py-3 border-collapse border-4 w-2 border-gray-300">{{ data['br_br_opis'] }}</td>
                    <td class="px-4 py-3 border-collapse border-4 w-2 border-gray-300">{{ data['k_k_dostodb'] }}</td>
                    <td class="px-4 py-3 border-collapse border-4 w-2 border-gray-300">{{ data['k_k_zadluzenie'] }}</td>
                    <td class="px-4 py-3 border-collapse border-4 w-2 border-gray-300">{{ data['m1k_k_value889'] }}</td>
                    <td class="px-4 py-3 border-collapse border-4 w-2 border-gray-300">{{ data['m1k_k_value916'] }}</td>
                    <td class="px-4 py-3 border-collapse border-4 w-2 border-gray-300">{{ data['m1k_k_value918'] }}</td>
                    <td class="px-4 py-3 border-collapse border-4 w-2 border-gray-300">{{ data['m1k_k_value975'] }}</td>
                    <td class="px-4 py-3 border-collapse border-4 w-2 border-gray-300">{{ data['k_k_kredytdni'] }}</td>
                    <td class="px-4 py-3 border-collapse border-4 w-2 border-gray-300">{{ data['internalpaymentcdays'] }}</td>

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
        this.clients();
    },
        methods:{
        clients() 
        {

            axios.get('api/clients')
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

