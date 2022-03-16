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
		<swiper-slide class="bg-image-2 bg-cover flex-center">Slide 2</swiper-slide>
		<swiper-slide class="bg-image-3 bg-cover flex-center">Slide 3</swiper-slide>
	</Swiper>
</template>
<script setup>
import { ref } from "vue"
import { Swiper, SwiperSlide } from "swiper/vue"
import { Mousewheel } from "swiper"

const sliderIndex = ref(null)

function eventEnd(swiper){
	sliderIndex.value = swiper.realIndex
}
import "swiper/css"
</script>