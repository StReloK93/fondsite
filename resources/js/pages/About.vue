<template>
    <section>
        <main  :style="{ backgroundImage: 'url(/images/1.jpg)'}" class="h-custom bg-cover bg-center -mt-24 -mx-16">
            <div class="h-full w-full flex-center bg-black bg-opacity-20">
                <h3 class="text-white text-5xl font-bold">
                    Biz haqimizda
                </h3>
            </div>
        </main>
        <main class="container mx-auto mt-16 flex">
            <div class="w-3/4 pr-3">
                <aside class="shadow-sm p-4 bg-white">
                    <div class="flex justify-between">
                        <span class="bg-gray-600 text-gray-200 px-2 py-1 shadow">
                           Yaratildi  20.11.2022 <i class="fal fa-calendar-alt"></i>
                        </span>
                        <span class="bg-gray-600 text-gray-200 px-2 py-1 shadow">
                           Yangilandi 20.11.2022 <i class="fal fa-calendar-alt"></i>
                        </span>
                    </div>
                    <h3 class="my-4 text-2xl font-bold">
                        Biz haqimizda
                    </h3>
                    <img src="/images/1.jpg" class="my-4">
                    <div id="editor">

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
import {ref, onMounted} from 'vue'
import EditorJS from '@editorjs/editorjs';
import List from '@editorjs/list'; 
import Header from '@editorjs/header'
import Link from '@editorjs/link'
import ImageTool from '@editorjs/image'
import Quote  from '@editorjs/quote'
import Delimiter  from '@editorjs/delimiter'


onMounted(()=>{
    const editor = new EditorJS({
        holder: 'editor',
        readOnly: true,
        data: {
    "time" : 1647520304204,
    "blocks" : [
        {
            "id" : "zSr5TtbFaM",
            "type" : "header",
            "data" : {
                "text" : "Editor.js",
                "level" : 2
            }
        },
        {
            "id" : "CwTL2uX16f",
            "type" : "paragraph",
            "data" : {
                "text" : "Hey. Meet the new Editor. On this page you can see it in action — try to edit this text."
            }
        },
        {
            "id" : "WGvMxfQXNH",
            "type" : "header",
            "data" : {
                "text" : "Key features",
                "level" : 3
            }
        },
        {
            "id" : "MB4ZzqinfD",
            "type" : "list",
            "data" : {
                "style" : "unordered",
                "items" : [
                    "It is a block-styled editor",
                    "It returns clean data output in JSON",
                    "Designed to be extendable and pluggable with a simple API"
                ]
            }
        },
        {
            "id" : "hZPLeDTTWl",
            "type" : "header",
            "data" : {
                "text" : "What does it mean «block-styled editor»",
                "level" : 3
            }
        },
        {
            "id" : "U0WmhMFEkX",
            "type" : "paragraph",
            "data" : {
                "text" : "Workspace in classic editors is made of a single contenteditable element, used to create different HTML markups. Editor.js workspace consists of separate Blocks: paragraphs, headings, images, lists, quotes, etc. Each of them is an independent contenteditable element (or more complex structure) provided by Plugin and united by Editor's Core."
            }
        },
        {
            "id" : "O3jjuHR7nN",
            "type" : "paragraph",
            "data" : {
                "text" : "There are dozens of <a href=\"https://github.com/editor-js\">ready-to-use Blocks</a> and the <a href=\"https://editorjs.io/creating-a-block-tool\">simple API</a> for creation any Block you need. For example, you can implement Blocks for Tweets, Instagram posts, surveys and polls, CTA-buttons and even games."
            }
        },
        {
            "id" : "5l8uyT_Oty",
            "type" : "header",
            "data" : {
                "text" : "What does it mean clean data output",
                "level" : 3
            }
        },
        {
            "id" : "PRt2dHIodQ",
            "type" : "paragraph",
            "data" : {
                "text" : "Classic WYSIWYG-editors produce raw HTML-markup with both content data and content appearance. On the contrary, Editor.js output<a href=\"http://ruzzifer.site\">s JSON </a>object with data of each Block. You can see an example below"
            }
        },
        {
            "id" : "ukhUDcVH-B",
            "type" : "paragraph",
            "data" : {
                "text" : "Given data can be used as you want: render with HTML for<code class=\"inline-code\"> Web clients</code>, render natively for <code class=\"inline-code\">mobile apps</code>, create markup for <code class=\"inline-code\">Facebook Instant Articles</code> or <code class=\"inline-code\">Google AMP</code>, generate an <code class=\"inline-code\">audio version</code> and so on."
            }
        },
        {
            "id" : "JpYsTgXc0x",
            "type" : "paragraph",
            "data" : {
                "text" : "Clean data is useful to sanitize, validate and process on the backend."
            }
        },
        {
            "id" : "Do57NEq6Rf",
            "type" : "delimiter",
            "data" : {}
        },
        {
            "id" : "44GiOs55qP",
            "type" : "paragraph",
            "data" : {
                "text" : "We have been working on this project more than three years. Several large media projects help us to test and debug the Editor, to make it's core more stable. At the same time we significantly improved the API. Now, it can be used to create any plugin for any task. Hope you enjoy. 😏"
            }
        },
        {
            "id" : "KL9iNVmn7b",
            "type" : "image",
            "data" : {
                "file" : {
                    "url" : "https://codex.so/public/app/img/external/codex2x.png"
                },
                "caption" : "",
                "withBorder" : false,
                "stretched" : false,
                "withBackground" : false
            }
        }
    ],
    "version" : "2.23.1"
},
        tools: {
            list: {
                class: List,
                inlineToolbar: true,
                config: {
                    defaultStyle: 'unordered'
                }
            },
            header: Header,
            Link,
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
</script>