<template>
  <div class="h-screen flex">
    <!-- <p class="text-red-400 ">test</p> -->
    <Navbar />
    <main class="flex-1 bg-gray-200 dark:bg-gray-900 overflow-y-auto transition duration-500 ease-in-out">
        <!-- <main class= "flex-1 bg-purple-300 overflow-y-auto transition duration-500 ease-in-out	--tw-bg-opacity: 1;
        background-color: rgba(196, 181, 253, var(--tw-bg-opacity));"> -->
      <router-view></router-view>
    </main>
  </div>
</template>

<script>
import Navbar from '../components/partials/Navbar'
export default {
  components: {
    Navbar
  }
}
</script>

<style>

</style>