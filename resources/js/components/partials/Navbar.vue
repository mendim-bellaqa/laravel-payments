<template>
    <nav
			class="w-60 bg-gray-500 purple:bg-gray-800 select-none overflow-y-auto
			transition duration-500 ease-in-out">
			<div class="flex flex-col items-center ">
				<router-link to="/">
				<button class="focus:outline-none">
					<!-- <img class="my-10"  src="images/logo.png" alt="logo" width="200" height="100"> -->
				</button>
				</router-link>
			</div>
		<ul class="text-sm">
			<li
				class="pl-8 py-2 font-semibold text-white dark:text-gray-400
				hover:bg-gray-500 dark-hover:bg-pink-500 mb-2 transition
				duration-500 ease-in-out">
				<router-link to="/" >
				<button
				class="focus:text-gray-500 dark-focus:text-gray-400
				focus:outline-none w-full transition duration-500 ease-in-out">
					<span class="flex items-center">
						<i class="fas fa-users"></i>
						<span class="ml-4 capitalize" >PAYMENTS - REPORT</span>
					</span>
				</button>
				</router-link>
			</li>
			<li
				class="pl-9 py-2 font-semibold text-white dark:text-gray-400
				hover:bg-gray-500 dark-hover:bg-pink-500 mb-2 transition
				duration-500 ease-in-out">
				<router-link to="/zw" >
				<button
				class="focus:text-gray-500 dark-focus:text-gray-400
				focus:outline-none w-full transition duration-500 ease-in-out">
					<span class="flex items-center">
						<i class="far fa-file-excel"></i>
						<span class="ml-4 capitalize" >ZW - FROM VENDO</span>
					</span>
				</button>
				</router-link>
			</li>
			<li
				class="pl-9 py-2 font-semibold text-white dark:text-gray-400
				hover:bg-gray-500 dark-hover:bg-pink-500 mb-2 transition
				duration-500 ease-in-out">
				<router-link to="/plus-import" >
				<button
				class="focus:text-gray-500 dark-focus:text-gray-400
				focus:outline-none w-full transition duration-500 ease-in-out">
					<span class="flex items-center">
						<i class="far fa-file-excel"></i>
						<span class="ml-4 capitalize" >OVERDUE TABLE 1</span>
					</span>
				</button>
				</router-link>
			</li>
			<li
				class="pl-8 py-2 font-semibold text-white dark:text-pink-400
				 hover:bg-gray-500 mb-2 transition
				duration-500 ease-in-out">
				<router-link to='/performance'>
					<button
						class="focus:text-gray-500 dark-focus:text-pink-400
						focus:outline-none w-full transition duration-500 ease-in-out"> 
						<span class="flex items-center">
							<i class="fas fa-laptop-code"></i>
							<span class="ml-4 capitalize">OVERDUE TABLE 2</span>
						</span>
					</button>
				</router-link>
			</li>
			
		</ul>
    </nav>
</template>

<script>

</script>

<style>

</style>