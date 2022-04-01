<template>
   <div>
      News
   </div>
</template>
<script setup>
async function getData(){
   const {data} = await axios.get('/post/all')
   console.log(data);
}

getData()
</script>