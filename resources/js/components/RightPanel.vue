<template>
   <section class="fixed top-0 right-0 w-96 z-50 h-full text-white transform custom-transition translate-x-full bg-gray-800 shadow bg-opacity-90 pb-6">
      <header class="pt-20 px-7 mt-2 flex flex-col justify-between h-full overflow-y-auto" id="element">
         <aside>
            <router-link to="/" class="w-full p-4 bg-gray-900 bg-opacity-90 block shadow-md  mb-4">
               Bosh sahifa
            </router-link>
            <router-link to="/about" class="w-full p-4 bg-gray-900 bg-opacity-90 block shadow-md  mb-4">
               Biz haqimizda
            </router-link>
            <router-link to="/" class="w-full p-4 bg-gray-900 bg-opacity-90 block shadow-md  mb-4">
               Yangiliklar
            </router-link>
            <router-link to="/" class="w-full p-4 bg-gray-900 bg-opacity-90 block shadow-md  mb-4">
               Xizmatlar
            </router-link>
            <router-link to="/" class="w-full p-4 bg-gray-900 bg-opacity-90 block shadow-md  mb-4">
               Aloqalar
            </router-link>
            <router-link to="/" class="w-full p-4 bg-gray-900 bg-opacity-90 block shadow-md  mb-4">
               Matbuot xizmati
            </router-link>
            <router-link to="/" class="w-full p-4 bg-gray-900 bg-opacity-90 block shadow-md  mb-4">
               Axborot xizmalari
            </router-link>
         </aside>
         <aside class="text-gray-300 mt-20">
            <div class="flex items-start mb-3">
               <i class="fas fa-home text-2xl pt-2"></i> 
               <p class="ml-3">
                  O'zbekiston Respublikasi, Navoiy viloyati, Navoiy sh., Navoiy ko'chasi 21-uy
               </p>
            </div>
            <div class="flex items-start mb-3">
               <i class="fas fa-phone text-2xl pt-2"></i>
               <p class="ml-3">
                  +(99879) 227-29-16 <br>
                  +(99879) 227-29-18
               </p>
            </div>

            <div class="flex items-start mb-3">
               <i class="fas fa-fax text-2xl pt-2"></i>
               <p class="ml-3">
                  +(99879) 227-82-13 
               </p>
            </div>
            <div class="flex items-start mb-3">
               <i class="fal fa-envelope text-2xl pt-2"></i>
               <p class="ml-4">
                  info@fondnkmk.uz
               </p>
            </div>

            <div class="mt-10 flex flex-wrap">
               <a href="http://www.gov.uz/uz/" target="_blank" class="w-1/3 mb-4">
                  <img src="/images/gov.gif">
               </a>
               <a href="http://www.uzinfocom.uz/" target="_blank" class="w-1/3 mb-4">
                  <img src="/images/dc.png">
               </a>
               <a href="http://www.lex.uz/" target="_blank" class="w-1/3 mb-4">
                  <img src="/images/lexuz.gif">
               </a>
               <a href="http://www.rudmet.ru/" target="_blank" class="w-1/3 mb-4">
                  <img src="/images/rudmet2.gif">
               </a>
               <a href="http://www.cert.uz/uzcertified/" target="_blank" class="w-1/3 mb-4">
                  <img src="/images/uz-certified.gif">
               </a>
               <a href="https://www.ngmk.uz/vestnik/" target="_blank" class="w-1/3 mb-4">
                  <img src="/images/gvuz_rus.gif">
               </a>
               <a href="http://my.gov.uz/" target="_blank" class="w-1/3 mb-4">
                  <img src="/images/mini_baner_2.png">
               </a>
               <a href="http://gis.uz/" target="_blank" class="w-1/3 mb-4">
                  <img src="/images/banner_gis_uz.png">
               </a>
            </div>
         </aside>
      </header>
   </section>
</template>
<script setup>
function MenuAnimate(){
   console.log('Console');
}
defineExpose({MenuAnimate})
</script>