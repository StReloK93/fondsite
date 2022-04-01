<template>
    <section>
        <h3 class="text-2xl text-gray-700 font-medium mb-4">
            Matbuot xizmati
        </h3>
        <div class="pb-10" id="editor">

        </div>
    </section>
</template>
<script setup>
import EditorJS from '@editorjs/editorjs';
import List from '@editorjs/list'; 
import Header from '@editorjs/header'
import ImageTool from '@editorjs/image'
import Quote  from '@editorjs/quote'
import Delimiter  from '@editorjs/delimiter'
var pageInfo = null

async function getData(){
    pageInfo = await axios.get('/pages/printed')
}

getData().then(() => {
    var data = pageInfo.data.description == "" ? "" : JSON.parse(pageInfo.data.description)
    const editor = new EditorJS({
        holder: 'editor',
        data: data,
        inlineToolbar: ['link', 'bold', 'italic'],
        tools: {
            list: {
                class: List,
                inlineToolbar: true,
                config: {
                    defaultStyle: 'unordered'
                }
            },
            header: Header,
            // Link,
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


    
</script>