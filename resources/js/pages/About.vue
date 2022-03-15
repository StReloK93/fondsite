<template>
    <section style="height: 6000px" class="bg-gray-100">
        <main  :style="{ backgroundImage: 'url(/images/1.jpg)'}" class="h-96 bg-cover bg-center -mt-24 -mx-16">
            <div class="h-full w-full flex-center bg-black bg-opacity-20">
                <h3 class="text-white text-5xl font-bold">
                    Biz haqimizda
                </h3>
            </div>
        </main>
        <main class="container mx-auto mt-16 flex">
            <div class="w-3/4 pr-3">
                <aside class="shadow p-4 border border-gray-50 bg-white">
                    <div class="flex justify-between">
                        <span class="bg-gray-600 text-gray-200 px-2 py-1 shadow">
                           Yaratildi  20.11.2022 <i class="fal fa-calendar-alt"></i>
                        </span>
                        <span class="bg-gray-600 text-gray-200 px-2 py-1 shadow">
                           Yangilandi 20.11.2022 <i class="fal fa-calendar-alt"></i>
                        </span>
                    </div>
                    <h3 class="my-4 text-2xl font-bold">
                        Biz haqimizda
                    </h3>
                    <img src="/images/1.jpg" class="my-4">
                    <p class="text-xl">
                        <!--  -->
                    </p>
                </aside>
            </div>
            <div class="w-1/4 pl-3">
                <aside class="shadow p-4 border border-gray-50 bg-white">
                    asd
                </aside>
            </div>
        </main>
    </section>
</template>
<script setup>
import {ref} from 'vue'
const textarea = ref('')

</script>