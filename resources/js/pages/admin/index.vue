<template>
   <section class="w-full h-screen flex">
      <LeftPanel />
      <router-view class="flex-grow"></router-view>
   </section>
</template>
<script setup>
import LeftPanel from '../../components/admin/LeftPanel.vue'
</script>
