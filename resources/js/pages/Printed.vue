<template>
    <section>
        <main  :style="{ backgroundImage: 'url(/images/3.jpg)'}" class="h-custom bg-cover bg-center">
            <div class="h-full w-full flex-center bg-black bg-opacity-20">
                <h3 class="text-white text-5xl font-bold">
                    Matbuot xizmati
                </h3>
            </div>
        </main>
        <main class="container mx-auto mt-16 flex">
            <div class="w-3/4 pr-3">
                <aside class="shadow-sm px-4 pt-2 bg-white">
                    <!-- <div class="flex justify-between mb-2">
                        <span class="bg-gray-600 text-gray-200 px-2 py-1 shadow">
                           Yaratildi  20.11.2022 <i class="fal fa-calendar-alt"></i>
                        </span>
                        <span class="bg-gray-600 text-gray-200 px-2 py-1 shadow">
                           Yangilandi 20.11.2022 <i class="fal fa-calendar-alt"></i>
                        </span>
                    </div> -->
                    <div id="editor" class="viewer">

                    </div>
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
    pageInfo = await axios.get('/pages/printed')
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
        },
        onChange: (api, event) => {
            editor.save().then((outputData) => {
                axios.post('/pages/printed', {description: outputData}).then((res) => {
                    console.log(res.data);
                })
            })
        }
    });
})

onUnmounted(() => {
    editor.destroy();
})
</script>