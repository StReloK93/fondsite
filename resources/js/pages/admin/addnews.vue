<template>
   <section class="pb-10">
      <h3 class="text-2xl font-medium mb-4">
         Post qo'shish
      </h3>
      <form @submit.prevent="publish" class="w-1/2">
         <div class="mb-2">
            <label for="titles" class="block text-gray-500 text-sm mb-2">Sarlavha</label>
            <input id="titles" type="text" v-model="title" class="bg-transparent border-b w-full" placeholder="Sarlavha" required>
         </div>
         <div class="mb-2 relative">
            <label for="images" class="block text-gray-500 text-sm mb-2 relative z-50">
               <img src='/images/default.jpg' ref="preview" >
            </label>
            <input id="images" class="absolute top-0 left-0 z-0" type="file" @input="imgChange" ref="images"  required>
         </div>
         <div id="editor">

         </div>
         <div>
            <button class="bg-blue-600 text-white uppercase w-full py-1">
               Qo'shish
            </button>
         </div>
      </form>
   </section>
</template>
<script setup>
import { ref , onMounted } from 'vue'
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
async function publish(){
   const data = await editor.save()
   
   var formdata = new FormData()

   formdata.append('file' , images.value.files[0])
   formdata.append('title' , title.value)
   
   formdata.append('description' , JSON.stringify(data))

   const information = await axios.post('/post/add', formdata)
}

onMounted(() => {
   editor = new EditorJS({
      holder: 'editor',
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
</script>