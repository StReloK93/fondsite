<template>
	<Header/>
	<section :class="{'h-full': $route.name == 'home'}">
		<router-view v-slot="{ Component }">
			<component class="h-full pt-24 px-16" :is="Component" />
		</router-view>
	</section>
	<Footer v-if="$route.name != 'home'"/>
</template>
<script setup>

addEventListener('scroll', function(event){
	
	if(window.scrollY > 100){
		store.state.scroll = true
	}
	else{
		store.state.scroll = false
	}
})
import Header from './components/Header.vue'  
import Footer from './components/Footer.vue'  
</script>
<style src="./app.css"></style>