<template>
    <section>
        <main  :style="{ backgroundImage: 'url(/images/1.jpg)'}" class="h-custom bg-cover bg-center -mt-24 -mx-16">
            <div class="h-full w-full flex-center bg-black bg-opacity-20">
                <h3 class="text-white text-5xl font-bold">
                    Biz haqimizda
                </h3>
            </div>
        </main>
        <main class="container mx-auto mt-16 flex">
            <div class="w-3/4 pr-3">
                <aside class="shadow-sm p-4 bg-white">
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
                    <div id="editor">

                    </div>
                </aside>
            </div>
            <div class="w-1/4 pl-3">
                <aside class="shadow-sm p-4 bg-white">
                    <h3 class="mb-4 text-2xl font-bold text-gray-700">
                        So'ngi yangiliklar
                    </h3>
                    <main class="flex mb-4">
                        <div class="w-1/3">
                            <img src="/images/1.jpg" class="w-24 h-24 object-cover shadow-md">
                        </div>
                        <div class="w-2/3 flex justify-between flex-col">
                            <p class="text-gray-600 leading-tight">Lorem ipsum dolor, sit amet consectetur adipisicing elit. ipsum dolor, sit amet</p>
                            <span class="text-blue-800">
                                15.03.2022
                            </span>
                        </div>
                    </main>
                    <main class="flex mb-4">
                        <div class="w-1/3">
                            <img src="/images/1.jpg" class="w-24 h-24 object-cover shadow-md">
                        </div>
                        <div class="w-2/3 flex justify-between flex-col">
                            <p class="text-gray-600 leading-tight">Lorem ipsum dolor, sit amet consectetur adipisicing elit. ipsum dolor, sit amet</p>
                            <span class="text-blue-800">
                                15.03.2022
                            </span>
                        </div>
                    </main>
                    <main class="flex">
                        <div class="w-1/3">
                            <img src="/images/1.jpg" class="w-24 h-24 object-cover shadow-md">
                        </div>
                        <div class="w-2/3 flex justify-between flex-col">
                            <p class="text-gray-600 leading-tight">Lorem ipsum dolor, sit amet consectetur adipisicing elit. ipsum dolor, sit amet</p>
                            <span class="text-blue-800">
                                15.03.2022
                            </span>
                        </div>
                    </main>
                </aside>
            </div>
        </main>
    </section>
</template>
<script setup>
import {ref, onMounted} from 'vue'
import EditorJS from '@editorjs/editorjs';


onMounted(()=>{
    const editor = new EditorJS('editor');
})
</script>