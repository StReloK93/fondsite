<template>
   <aside class="flex flex-wrap">
      <div  v-for="post in allPosts" :key="post.id" class="w-1/4 px-2 mb-4">
         <main class="bg-white overflow-hidden rounded shadow">
               <img :src="'/images/'+post.img" alt="post" class="h-40 object-cover w-full">
               <footer class="p-3 pt-2">
                  <h3 class="text-xl font-medium mb-1">
                     {{post.title}}
                  </h3>
                  <p class="text-gray-500 leading-none">
                     {{post.desc}}
                  </p>
                  <div class="text-right mt-1 flex justify-between items-center">
                     <span class="text-sm text-gray-400">
                           <i class="fal fa-calendar-alt text-blue-600"></i> {{post.created}}
                     </span>
                     <footer>
                        <router-link :to="{name: 'postedit' , params: {id: post.id}}" class="text-indigo-600 hover:bg-gray-100 px-2 py-1">
                              <i class="fal fa-edit"></i>
                        </router-link>
                        <button @click="sweetAlert(post.id)" class="text-red-600 ml-2 hover:bg-gray-100 px-2 py-1">
                           <i class="fal fa-trash"></i>
                        </button>
                     </footer>
                  </div>
               </footer>
         </main>
      </div>
   </aside>
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

       
        if(text != undefined)  data.data[index].desc = text.data.text.substr(0, 50) + ' ...';
        else data.data[index].desc = ""

    });

    allPosts.value = data.data
}

getData()


function sweetAlert(id){
    Swal.fire({
        title: "Aniq o'chirmoqcimisiz?",
        text: "O'chirilgan malumotni tiklab bo'lmaydi!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonText: 'Ha <i class="fal ml-2 fa-check"></i>',
        cancelButtonText: 'yoq <i class="fal ml-2 fa-times"></i>',
        reverseButtons: true
    }).then(async (result) => {
        if (result.isConfirmed) {
           const result = await axios.get(`/postdelete/${id}`)
           if(result.status) getData()
        }
    })
}
</script>