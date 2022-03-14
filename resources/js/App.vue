<template>
<Header/>
<section class="h-full overflow-hidden">
	<router-view v-slot="{ Component }">
		<component class="h-full" :is="Component" />
	</router-view>
</section>
</template>
<script setup>

import Header from './components/Header.vue'  
</script>
<style src="./app.css"></style>