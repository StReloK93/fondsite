<template>
   <section class="fixed top-0 right-0 w-96 z-50 h-full text-white transform custom-transition translate-x-full bg-gray-800 shadow bg-opacity-90">
      <main class="pt-20 px-7 mt-2">
         <router-link to="/" class="w-full p-4 bg-gray-900 bg-opacity-90 block shadow-md  mb-4">
            Link 1
         </router-link>
         <router-link to="/" class="w-full p-4 bg-gray-900 bg-opacity-90 block shadow-md  mb-4">
            Link 2
         </router-link>
         <router-link to="/" class="w-full p-4 bg-gray-900 bg-opacity-90 block shadow-md  mb-4">
            Link 3
         </router-link>
         <router-link to="/" class="w-full p-4 bg-gray-900 bg-opacity-90 block shadow-md  mb-4">
            Link 4
         </router-link>
         <router-link to="/" class="w-full p-4 bg-gray-900 bg-opacity-90 block shadow-md  mb-4">
            Link 5
         </router-link>
         <router-link to="/" class="w-full p-4 bg-gray-900 bg-opacity-90 block shadow-md  mb-4">
            Link 6
         </router-link>
      </main>
   </section>
</template>
<script setup>
function MenuAnimate(){
   console.log('Console');
}
defineExpose({MenuAnimate})
</script>
