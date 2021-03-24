<template>

  <div>
   <div class="px-24 py-10 text-gray-700 dark:text-gray-500 transition duration-500 ease-in-out">
     <div class="mt-1 mb-4 flex  items-center justify-between "></div>	
							<input placeholder="Search"
								class="ml-2 shadow  appearance-none border rounded-md py-2 px-3 text-gray-700 leading-tight 
                focus:outline-none focus:shadow-outline border-gray-300"
								type="text"
								v-model="search">
                <p class="text-left md:text-center text-3xl ...">ZO and Data realizacia</p>
						</div>
 <table class="rounded-t-lg m-5 w-5/6 border-collapse mx-auto bg-gray-200 text-gray-800">
  <tr class="text-left border-separate border-4 border-gray-300 ">
                <th class="px-4 py-3 sticky top-0 px-6 py-3 text-black-900 bg-gray-200 border-collapse ">ZO</th>
                <th class="px-4 py-3 sticky top-0 px-6 py-3 text-black-900 bg-gray-200 border-collapse ">Data realizacia</th>
                </tr>

		<tbody v-for="data in data" :key="data.id">
  
            <tr class="bg-gray-100 border-b border-gray-200">
	
                <td class="px-4 py-3 border-collapse ">{{ zo['zo'] }}</td>
                <td class="px-4 py-3 border-collapse ">{{ zo['data'] }}</td>
                
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
                zo:[],
            }
        },
        created() 
        {
            this.zo();
        },
            methods:{
            zo() 
            {

                axios.get('api/zo')
                    .then((response) => {
                        console.log(response.zo);
                        this.zo = response.zo;
                    });
            },	
                
        }
    }
    </script>

<style>

</style>