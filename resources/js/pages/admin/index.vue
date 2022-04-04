<template>
   <section class="w-full h-screen flex overflow-hidden">
      <LeftPanel />
      <router-view class="w-full flex-grow pt-4 px-28 h-full overflow-y-auto admin"></router-view>
   </section>
</template>
<script setup>
import LeftPanel from '../../components/admin/LeftPanel.vue'
</script>