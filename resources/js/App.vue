<template>
	<Header v-if="$route.meta.header"/>
	<router-view></router-view>
	<Footer v-if="$route.meta.footer"/>
</template>
<script setup>
addEventListener('scroll', () => {
	if(window.scrollY > 100) store.state.scroll = true
	else store.state.scroll = false
})
import Header from './components/Header.vue'  
import Footer from './components/Footer.vue'  
</script>
<style src="./app.css"></style>