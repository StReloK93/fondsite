<template>
    <section>
        <main class="relative">
            <img src="/images/services.jpg" class="w-full">
            <div class="flex-center bg-black bg-opacity-20 absolute top-0 left-0 w-full h-full">
                <h3 class="text-white text-5xl font-bold">
                    Xizmatlar
                </h3>
            </div>
        </main>
        <main class="container mx-auto mt-16 flex">
            <div class="w-3/4 pr-3">
                <aside class="shadow-sm px-4 pt-2 bg-white">
                    <div id="editor" class="viewer"></div>
                </aside>
            </div>
            <LastPosts/>
        </main>
    </section>
</template>
<script setup>
import {onUnmounted} from 'vue'
import LastPosts from '../components/lastPost.vue'

import EditorJS from '@editorjs/editorjs';
import List from '@editorjs/list'; 
import Header from '@editorjs/header'
import ImageTool from '@editorjs/image'
import Quote  from '@editorjs/quote'
import Delimiter  from '@editorjs/delimiter'
var pageInfo = null
var editor = null
async function getData(){
    pageInfo = await axios.get('/pages/services')
}


getData().then(() => {
    var data = pageInfo.data.description == "" ? "" : JSON.parse(pageInfo.data.description)
    editor = new EditorJS({
        holder: 'editor',
        readOnly: true,
        data: data,
        tools: {
            list: {
                class: List,
                inlineToolbar: true,
                config: {
                    defaultStyle: 'unordered'
                }
            },
            header: Header,
            delimiter: Delimiter,
            image: {
                class: ImageTool,
                config: {
                    endpoints: {
                        byFile: '/api/uploadimage', // Your backend file uploader endpoint
                    }
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