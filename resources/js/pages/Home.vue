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
	>
		<swiper-slide class="bg-image-1 bg-cover pt-72 px-16 text-white" v-slot="{ isActive }">
			<main :class="{'max-h-40' : isActive}" class="overflow-hidden transition origin-left origin-top-left max-h-0">
				<h3 class="text-5xl uppercase text-yellow-custom font-bold">
					Bizning yutuqlarimiz
				</h3>
				<button class="px-8 shadow py-3 mt-10 bg-blue-500 font-medium hover:bg-blue-600">
					Batafsil
				</button>
			</main>
		</swiper-slide>
		<swiper-slide class="bg-image-2 bg-cover flex-center">Slide 2</swiper-slide>
		<swiper-slide class="bg-image-3 bg-cover flex-center">Slide 3</swiper-slide>
	</Swiper>
</template>
<script setup>
import { ref } from "vue"
import { Swiper, SwiperSlide, useSwiper } from "swiper/vue"
import { Mousewheel } from "swiper"
const swip = useSwiper()
console.log(swip)

import "swiper/css"
</script>