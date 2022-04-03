<template>
    <section>
        <main  :style="{ backgroundImage: 'url(/images/contacts.jpg)'}" class="h-custom bg-cover bg-center">
            <div class="h-full w-full flex-center bg-black bg-opacity-20">
                <h3 class="text-white text-5xl font-bold">
                    Aloqalar
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
import {onUnmounted} from 'vue'
import EditorJS from '@editorjs/editorjs';
import List from '@editorjs/list'; 
import Header from '@editorjs/header'
import ImageTool from '@editorjs/image'
import Quote  from '@editorjs/quote'
import Delimiter  from '@editorjs/delimiter'
var pageInfo = null
var editor = null
async function getData(){
    pageInfo = await axios.get('/pages/contacts')
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
                axios.post('/pages/contacts', {description: outputData}).then((res) => {
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