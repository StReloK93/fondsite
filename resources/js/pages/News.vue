<template>
   <section class="image-3">
      <h3>Yangiliklar</h3>
   </section>
</template>
<script setup>
import { defineExpose } from "vue";
function nextPage() {
   router.push('/about')
}


function oldPage() {
   router.push('/')
}
defineExpose({ nextPage , oldPage})
</script>
