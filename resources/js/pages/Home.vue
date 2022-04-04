<template>
	<Swiper
		:modules="[Mousewheel]"
		:slides-per-view="1"
		:space-between="0"
		:direction="'vertical'"
		:loop="true"
		:effect="'creative'"
		:mousewheel="true"
		:speed="1000"
		@transitionEnd="eventEnd"
		class="h-screen"
	>
		<swiper-slide class="bg-image-1 bg-cover pt-72 px-16 text-white">
			<main :class="{'scale-y-100' : sliderIndex == 0}" class="overflow-hidden origin-top transform custom-transition scale-y-0">
				<h3 class="text-5xl uppercase text-yellow-custom font-bold">
					Biz haqimizda
				</h3>
				<router-link to="/about" class="inline-block px-8 shadow py-3 mt-10 bg-blue-500 font-medium hover:bg-blue-600">
					Batafsil
				</router-link>
			</main>
		</swiper-slide>
		<swiper-slide class="bg-image-2 bg-cover flex-center text-white">
			<main :class="{'scale-x-100 opacity-100' : sliderIndex == 1}" class="overflow-hidden origin-top transform custom-transition scale-x-50 opacity-0 border border-gray-400 p-4 inline-block shadow bg-white bg-opacity-30">
				<h3 class="text-3xl uppercase font-bold">
					NKMK jamg'armasi xizmatlari haqida
				</h3>
				<router-link to="/services" class="inline-block text-white px-8 shadow py-3 mt-10 bg-blue-500 font-medium hover:bg-blue-600">
					Batafsil
				</router-link>
			</main>
		</swiper-slide>
		<swiper-slide class="bg-image-3 bg-cover flex-center">
			<main :class="{'scale-100 opacity-100' : sliderIndex == 2}" class="overflow-hidden opacity-0 transform custom-transition scale-50 inline-block bg-black bg-opacity-50 px-8 py-12">
				<h3 class="text-5xl uppercase text-yellow-custom font-bold">
					Yangiliklar va voqealar
				</h3>
				<div v-if="posts" class="flex">
					<router-link :to="{name: 'post' , params: {id: post.id}}" v-for="post in posts" :key="post" class="w-1/3 text-center px-3 my-5 text-white text-xl font-medium hover:text-yellow-400">
						{{post.title}}
					</router-link>
				</div>
			</main>
		</swiper-slide>
	</Swiper>
</template>
<script setup>
import { ref } from "vue"
import { Swiper, SwiperSlide } from "swiper/vue"
import { Mousewheel } from "swiper"

const sliderIndex = ref(null)
const posts = ref(null)

function eventEnd(swiper){
	sliderIndex.value = swiper.realIndex
}

(async function getLastPosts(){
	const {data} = await axios.get('/postlast')
	posts.value = data
}())


import "swiper/css"
</script>