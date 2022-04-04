<template>
    <section>
        <main v-if="pageInfo" :style="{ backgroundImage: `url(/images/${pageInfo.img})`}" class="h-custom bg-cover bg-center">
            <div class="h-full w-full flex-center bg-black bg-opacity-20">
                <h3 class="text-white text-5xl font-bold">
                    {{pageInfo.title}}
                </h3>
            </div>
        </main>
        <main class="container mx-auto mt-16 flex">
            <div class="w-3/4 pr-3">
                <aside class="shadow-sm px-4 pt-2 bg-white">
                    <div v-if="pageInfo" class="flex justify-between mb-2">
                        <span class="text-gray-600 px-2 py-1">
                           Yaratildi  {{pageInfo.created}} <i class="fal fa-calendar-alt text-blue-600"></i>
                        </span>
                        <span class="text-gray-600 px-2 py-1">
                           Yangilandi {{pageInfo.updated}} <i class="fal fa-calendar-alt text-blue-600"></i>
                        </span>
                    </div>
                    <div v-if="pageInfo">
                        <img  :src="'/images/'+pageInfo.img" class="w-full">
                        <h3 class="text-2xl font-medium mt-3 mb-1 tracking-wide">
                            {{pageInfo.title}}
                        </h3>
                    </div>
                    <div id="editor" class="viewer">

                    </div>
                </aside>
            </div>
            <LastPosts/>
        </main>
    </section>
</template>
<script setup>
import {onUnmounted, ref } from 'vue'
import LastPosts from '../components/lastPost.vue'


import {useRoute} from 'vue-router'
import EditorJS from '@editorjs/editorjs';
import List from '@editorjs/list'; 
import Header from '@editorjs/header'
import ImageTool from '@editorjs/image'
import Quote  from '@editorjs/quote'
import Delimiter  from '@editorjs/delimiter'
const pageInfo = ref(null)
var editor = null

const route = useRoute()
async function getData(){
    const {data}= await axios.get(`/postget/${route.params.id}`)
    pageInfo.value = data
}


getData().then(() => {
    var data = pageInfo.value.description == "" ? "" : JSON.parse(pageInfo.value.description)
    editor = new EditorJS({
        holder: 'editor',
        readOnly: true,
        data: data,
        tools: {
            list: {
                class: List,
                inlineToolbar: true,
                config: {defaultStyle: 'unordered'}
            },
            header: Header,
            delimiter: Delimiter,
            image: {
                class: ImageTool,
                config: {
                    endpoints: { byFile: '/api/uploadimage'}
                }
            },
            quote: Quote 
        }
    });
})

onUnmounted(() => {
    editor.destroy();
})
</script>