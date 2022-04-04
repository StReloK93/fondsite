<template>
   <div v-if="posts" class="w-1/4 pl-3">
         <aside class="shadow-sm p-4 bg-white">
            <h3 class="mb-4 text-2xl font-bold text-gray-700">
               So'ngi yangiliklar
            </h3>
            <main v-for="post in posts" :key="post" class="flex mb-4">
               <div class="w-1/3">
                     <img :src="'/images/'+post.img" class="w-24 h-24 object-cover shadow-md">
               </div>
               <div class="w-2/3 flex justify-between flex-col">
                     <aside>
                        <router-link :to="{name: 'post' , params: {id: post.id}}" class="text-gray-600 leading-tight font-medium hover:text-blue-700">{{post.title}}</router-link>
                        <p class="text-gray-400 text-sm">
                           {{post.desc}}
                        </p>
                     </aside>
                     <span class="text-blue-800">
                        {{post.created}}
                     </span>
               </div>
            </main>
         </aside>
   </div>
</template>
<script setup>
import { ref } from 'vue'


const posts = ref({})
async function getLastPosts(){
	const {data} = await axios.get('/postlast')
        data.forEach((post,index) => {
            var description = JSON.parse(post.description)
            var block = description.blocks
            const text = block.find((text) => text.type == 'paragraph')

            if(text != undefined)  data[index].desc = text.data.text.substr(0, 60) + ' ...';
            else data[index].desc = ""

        });

	posts.value = data
}
getLastPosts()
</script>
