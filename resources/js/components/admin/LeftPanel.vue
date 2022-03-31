<template>
   <div class="w-80 h-full shadow relative flex flex-col px-6 py-4 justify-between bg-white">
      <main class="flex flex-col">
         <router-link to="/" class="bg-gray-100 text-center py-2 block mb-6 uppercase">
            Bosh sahifa <i class="fas fa-home ml-3 text-green-600"></i>
         </router-link>
         <router-link to="/admin" class="hover:bg-gray-50 py-1 mb-2 px-2">
            Yangiliklar
         </router-link>
         <router-link to="/admin/about" class="hover:bg-gray-50 py-1 mb-2 px-2">
            Biz haqimizda
         </router-link>
         <router-link to="/admin/services" class="hover:bg-gray-50 py-1 mb-2 px-2">
            Xizmatlar
         </router-link>
         <router-link to="/admin/information" class="hover:bg-gray-50 py-1 mb-2 px-2">
            Axborot xizmatlari
         </router-link>
         <router-link to="/admin/printed" class="hover:bg-gray-50 py-1 mb-2 px-2">
            Matbuot xizmati
         </router-link>
         <router-link to="/admin/contacts" class="hover:bg-gray-50 py-1 mb-2 px-2">
            Aloqalar
         </router-link>
      </main>
      <main>
         <button @click="$store.dispatch('logout')" class="text-white flex items-center w-full py-2 justify-center bg-red-500 font-medium hover:bg-red-700">
            Chiqish <i class="fal fa-sign-out-alt ml-4 relative" style="top: 2px"></i>
         </button>
      </main>
   </div>
</template>
<script>
export default {
   
}
</script>
<style>
   
</style>