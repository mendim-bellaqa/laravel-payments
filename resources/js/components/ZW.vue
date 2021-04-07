<template>
  <div>

   <div class="xl px-24 py-10 text-gray-700 dark:text-gray-500 transition ease-in-out">

   <div class="mt-1 mb-4 flex  items-center justify-between "></div>

     <p class="md:text-center text-4xl ...">ZW REPORT</p>

    </div>
    

        
<table class="xl rounded-t-lg m-5 table-fixed  bg-gray-200 text-gray-800">

         <tr class="border-separate border-4 border-gray-300 ">

                <th class="px-2 py-2 sticky top-0 px-4 py-2  text-black-900  border-collapse border-4 border-gray-300 ">L.P</th>
                <th class="px-2 py-2 sticky top-0 px-4 py-2  text-black-900  border-collapse border-4 border-gray-300 ">BUYING SUPPLIER KATEGORY (PIORYTET)</th>
                <th class="px-2 py-2 sticky top-0 px-4 py-2  text-black-900  border-collapse border-4 border-gray-300 "> ORDER NO</th>
                <th class="px-2 py-2 sticky top-0 px-4 py-2  text-black-900  border-collapse border-4 border-gray-300 "> SERIA</th>
                <th class="px-2 py-2 sticky top-0 px-4 py-2  text-black-900  border-collapse border-4 border-gray-300 "> KOD KLIENTA</th>
                <th class="px-2 py-2 sticky top-0 px-4 py-2  text-black-900  border-collapse border-4 border-gray-300 "> MODEL</th>
                <th class="px-2 py-2 sticky top-0 px-4 py-2  text-black-900  border-collapse border-4 border-gray-300 w-2/5"> MATERIAL</th>
                <th class="px-2 py-2 sticky top-0 px-4 py-2  text-black-900  border-collapse border-4 border-gray-300 "> PROFORMA NR</th>
                <th class="px-2 py-2 sticky top-0 px-4 py-2  text-black-900  border-collapse border-4 border-gray-300 "> PROFORMA</th>
                <th class="px-2 py-2 sticky top-0 px-4 py-2  text-black-900  border-collapse border-4 border-gray-300 "> STATUS HISTORY</th>
                <th class="px-2 py-2 sticky top-0 px-4 py-2  text-black-900  border-collapse border-4 border-gray-300 "> DELIVERY PAYMENT AFTER PROFORMA</th>
                <th class="px-2 py-2 sticky top-0 px-4 py-2  text-black-900  border-collapse border-4 border-gray-300 "> ORDER VALUE [PLN]</th>
                <th class="px-2 py-2 sticky top-0 px-4 py-2  text-black-900  border-collapse border-4 border-gray-300 "> VALUE PROFORMA PLN</th>
                <th class="px-2 py-2 sticky top-0 px-4 py-2  text-black-900  border-collapse border-4 border-gray-300 "> VALUE PROFORMA EURO</th>
                <th class="px-2 py-2 sticky top-0 px-4 py-2  text-black-900  border-collapse border-4 border-gray-300 "> ZO 1</th>
                <th class="px-2 py-2 sticky top-0 px-4 py-2  text-black-900  border-collapse border-4 border-gray-300 "> ZO 2</th>
                <th class="px-2 py-2 sticky top-0 px-4 py-2  text-black-900  border-collapse border-4 border-gray-300"> PROD DATE ZO 1</th>
                <th class="px-2 py-2 sticky top-0 px-4 py-2  text-black-900  border-collapse border-4 border-gray-300"> PROD DATE ZO 2</th>
                <th class="px-2 py-2 sticky top-0 px-4 py-2  text-black-900  border-collapse border-4 border-gray-300"> PAYMENT DATE PROFORMA</th>
                <th class="px-2 py-2 sticky top-0 px-4 py-2  text-black-900  border-collapse border-4 border-gray-300"> OPEN INVOCE</th>
                <th class="px-2 py-2 sticky top-0 px-4 py-2  text-black-900  border-collapse border-4 border-gray-300"> PROFORMA</th>
  
      </tr>


        <tbody v-for="(data, index) in filterZw" :key="index.id">
			
        <tr class="bg-gray-100 border-b border-gray-200">
          
                <td class="px-4 py-3 border-collapse border-4 border-gray-300">{{++index}}</td>
                <td class="px-4 py-3 border-collapse border-4 w-2 border-gray-300">{{ data['data'] }}</td>
                <td class="px-4 py-3 border-collapse border-4 w-7 border-gray-300">{{ data['ORDER NO']}}</td>
                <td class="px-4 py-3 border-collapse border-4 w-7 border-gray-300">{{ data['SERIA'] }}</td>
                <td class="px-4 py-3 border-collapse border-4 w-7 border-gray-300">{{ data['ktr_k_kod'] }}</td>
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

        axios.get('api/zw')
          .then((response) => {
                      
            this.data = response.data;
          });
      },

    }
  }
  </script>

<style>


</style>