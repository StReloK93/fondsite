<template>
   <section class="pb-10">
      <h3 class="text-2xl font-medium mb-4">
         Post qo'shish
      </h3>
      <form @submit.prevent="publish" class="w-2/3">
         <div class="mb-2">
            <label for="titles" class="block text-gray-500 text-sm mb-2">Sarlavha</label>
            <input id="titles" type="text" v-model="title" class="bg-transparent border-b w-full" placeholder="Sarlavha" required>
         </div>
         <div class="mb-2 relative">
            <label for="images" class="block text-gray-500 text-sm mb-2 relative z-50 p-1">
               <img src='/images/default.jpg' ref="preview" class="w-full">
            </label>
            <input id="images" class="absolute top-5 left-5 z-0" type="file" @input="imgChange" ref="images"  required>
         </div>
         <div id="editor" class="redactor">

         </div>
         <div>
            <button class="bg-blue-600 text-white uppercase w-full py-2">
               Saqlash
            </button>
         </div>
      </form>
   </section>
</template>
<script setup>
import { ref } from 'vue'
import {useRoute} from 'vue-router'
const route = useRoute()
var editor = null
const images = ref('')
const preview = ref('')
const title = ref('')


import EditorJS from '@editorjs/editorjs';
import List from '@editorjs/list'; 
import Header from '@editorjs/header'
import ImageTool from '@editorjs/image'
import Quote  from '@editorjs/quote'
import Delimiter  from '@editorjs/delimiter'

function imgChange(){
   if(images.value.files[0] != undefined) preview.value.src = URL.createObjectURL(images.value.files[0])
   else preview.value.src = '/images/default.jpg'
   
}

async function postget(){
   const {data} = await axios.get(`/postget/${route.params.id}`)
   title.value = data.title
   preview.value.src = `/images/${data.img}`
   return data
}

postget().then((data) =>{
   editor = new EditorJS({
      holder: 'editor',
      data: JSON.parse(data.description),
      tools: {
         quote: Quote,
         header: Header,
         delimiter: Delimiter,
         list: {
               class: List,
               inlineToolbar: true,
               config: {
                  defaultStyle: 'unordered'
               }
         },
         image: {
               class: ImageTool,
               config: {
                  endpoints: {
                     byFile: '/api/uploadimage', // Your backend file uploader endpoint
                  }
               }
         },
      }
   });
})

async function publish(){
   const data = await editor.save()
   
   var formdata = new FormData()

   formdata.append('file' , images.value.files[0])
   formdata.append('title' , title.value)
   
   formdata.append('description' , JSON.stringify(data))

   const information = await axios.post(`/postedit/${route.params.id}`, formdata)
   console.log(information);
}
</script>