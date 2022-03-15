<template>
<Header/>
<section class="h-full">
	<router-view v-slot="{ Component }">
		<component class="h-full pt-24 px-16" :is="Component" />
	</router-view>
</section>
</template>
<script setup>

import Header from './components/Header.vue'  
</script>
<style src="./app.css"></style>