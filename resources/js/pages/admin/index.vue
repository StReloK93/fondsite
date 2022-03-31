<template>
   <section class="w-full h-screen flex overflow-hidden">
      <LeftPanel />
      <router-view class="flex-grow pt-4 px-32 h-full overflow-y-auto"></router-view>
   </section>
</template>
<script setup>
import LeftPanel from '../../components/admin/LeftPanel.vue'
</script>
