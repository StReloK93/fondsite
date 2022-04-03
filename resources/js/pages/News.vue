<template>
    <section>
        <main  :style="{ backgroundImage: 'url(/images/contacts.jpg)'}" class="h-custom bg-cover bg-center">
            <div class="h-full w-full flex-center bg-black bg-opacity-20">
                <h3 class="text-white text-5xl font-bold">
                    Yangiliklar
                </h3>
            </div>
        </main>
        <main class="container mx-auto mt-16 flex">
            <div class="w-3/4 pr-3">
                <aside class="flex flex-wrap">
                    <div  v-for="post in allPosts" :key="post.id" class="w-1/4 px-2 mb-4">
                        <main class="bg-white overflow-hidden rounded shadow">
                            <img :src="'/images/'+post.img" alt="post" class="h-44 object-cover w-full">
                            <footer class="p-3 pt-2">
                                <h3 class="text-xl font-medium mb-1">
                                    {{post.title}}
                                </h3>
                                <p class="text-gray-500">
                                    {{post.desc}}
                                </p>
                                <div class="text-right mt-1 flex justify-between items-center">
                                    <span class="text-sm text-gray-400">
                                        <i class="fal fa-calendar-alt text-blue-600"></i> {{post.created}}
                                    </span>
                                    <router-link :to="{name: 'post' , params: {id: post.id}}" class="px-4 rounded-sm border border-indigo-600 text-indigo-600 font-medium shadow hover:bg-indigo-600 hover:text-white">
                                        Batafsil
                                    </router-link>
                                </div>

                            </footer>
                        </main>
                    </div>
                </aside>
            </div>
            <div class="w-1/4 pl-3">
                <aside class="shadow-sm p-4 bg-white rounded">
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
import { ref } from 'vue'

const allPosts = ref({})
async function getData(){
    const {data} = await axios.get('/post/all')
    

    data.data.forEach((post,index) => {
        var description = JSON.parse(post.description)
        var block = description.blocks
        const text = block.find((text) => text.type == 'paragraph')

       
        if(text != undefined)  data.data[index].desc = text.data.text.substr(0, 90) + ' ...';
        else data.data[index].desc = ""

    });

    allPosts.value = data.data
}

getData()
</script>