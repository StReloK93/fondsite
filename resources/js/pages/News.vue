<template>
    <section>
        <main class="relative">
            <img src="/images/contacts.jpg" class="w-full">
            <div class="flex-center bg-black bg-opacity-20 absolute top-0 left-0 w-full h-full">
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
                <main class="pagination flex">
                    <div v-for="link in pagination.links" :key="link">
                        <button @click="getData(link.url)" v-if="link.label == 'pagination.previous'" :class="{'bg-gray-200 cursor-not-allowed': link.url == null}" class="px-3 py-1 bg-white mx-2 shadow-sm">
                            <i class="fal fa-chevron-left"></i>
                        </button>
                        <button @click="getData(link.url)" v-else-if="link.label == 'pagination.next'" :class="{'bg-gray-200 cursor-not-allowed': link.url == null}" class="px-3 py-1 bg-white mx-2 shadow-sm">
                            <i class="fal fa-chevron-right"></i>
                        </button>
                        <button v-else  @click="getData(link.url)" class="px-3 py-1 bg-white mx-2 shadow-sm" :class="{'bg-blue-500 text-white': link.active}">
                            {{link.label}}
                        </button>

                    </div>
                </main>
            </div>
            <LastPosts/>
        </main>
    </section>
</template>
<script setup>
import { ref } from 'vue'
import LastPosts from '../components/lastPost.vue'


const allPosts = ref({})
const pagination = ref({})
async function getData(url = '/post/all'){
   if(url == null) return 
   const {data} = await axios.get(url)
   pagination.value = data
   data.data.forEach((post,index) => {
      var description = JSON.parse(post.description)
      var block = description.blocks
      const text = block.find((text) => text.type == 'paragraph')

      
      if(text != undefined)  data.data[index].desc = text.data.text.substr(0, 50) + ' ...';
      else data.data[index].desc = ""

   });

   allPosts.value = data.data
}

getData()
</script>