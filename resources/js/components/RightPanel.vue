<template>
   <section class="w-0 overflow-hidden z-50 h-screen text-white transform custom-transition bg-gray-800 shadow bg-opacity-90 pb-6">
      <header class="pt-7 px-7 flex flex-col justify-between h-full overflow-y-auto w-96" id="element">
         <aside>
            <router-link to="/" class="w-full p-4 bg-gray-900 bg-opacity-90 block shadow-md  mb-4">
               Bosh sahifa
            </router-link>
            <router-link to="/about" class="w-full p-4 bg-gray-900 bg-opacity-90 block shadow-md  mb-4">
               Biz haqimizda
            </router-link>
            <router-link to="/services" class="w-full p-4 bg-gray-900 bg-opacity-90 block shadow-md  mb-4">
               Xizmatlar
            </router-link>
            <router-link to="/information" class="w-full p-4 bg-gray-900 bg-opacity-90 block shadow-md  mb-4">
               Axborot xizmatlari
            </router-link>
            <router-link to="/printed" class="w-full p-4 bg-gray-900 bg-opacity-90 block shadow-md  mb-4">
               Matbuot xizmati
            </router-link>
            <router-link to="/news" class="w-full p-4 bg-gray-900 bg-opacity-90 block shadow-md  mb-4">
               Yangiliklar
            </router-link>
            <router-link to="/contacts" class="w-full p-4 bg-gray-900 bg-opacity-90 block shadow-md  mb-4">
               Aloqalar
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
                  <img class="w-24" src="/images/gov.gif">
               </a>
               <a href="http://www.uzinfocom.uz/" target="_blank" class="w-1/3 mb-4">
                  <img class="w-24" src="/images/dc.png">
               </a>
               <a href="http://www.lex.uz/" target="_blank" class="w-1/3 mb-4">
                  <img class="w-24" src="/images/lexuz.gif">
               </a>
               <a href="http://www.rudmet.ru/" target="_blank" class="w-1/3 mb-4">
                  <img class="w-24" src="/images/rudmet2.gif">
               </a>
               <a href="http://www.cert.uz/uzcertified/" target="_blank" class="w-1/3 mb-4">
                  <img class="w-24" src="/images/uz-certified.gif">
               </a>
               <a href="https://www.ngmk.uz/vestnik/" target="_blank" class="w-1/3 mb-4">
                  <img class="w-24" src="/images/gvuz_rus.gif">
               </a>
               <a href="http://my.gov.uz/" target="_blank" class="w-1/3 mb-4">
                  <img class="w-24" src="/images/mini_baner_2.png">
               </a>
               <a href="http://gis.uz/" target="_blank" class="w-1/3 mb-4">
                  <img class="w-24" src="/images/banner_gis_uz.png">
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