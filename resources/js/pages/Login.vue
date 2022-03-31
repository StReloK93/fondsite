<template>
	<section class="flex flex-col h-full">
		<main class="flex items-center justify-center h-full fixed w-full top-0 left-0 z-50">
			<form class="w-1/2 shadow-2xl flex" @submit.prevent="$store.dispatch('login', form)">
				<section class="w-1/2 loginback"></section>
				<section class="p-8 w-1/2 bg-white">
					<h3 class="text-gray-900 text-2xl text-center">Accountga kirish</h3>
					<div>
						<label for="number" class="text-gray-400 text-xs">Telefon raqamingizni kiriting</label>
						<input id="number" type="text" v-model="form.phone" required class="w-full flex-1 py-1 border-b border-gray-200 focus:border-green-400 text-gray-600 placeholder-gray-400 outline-none"/>
					</div>
					<div>
						<label for="password" class="text-gray-400 text-xs">Parol</label>
						<input id="password" type="password" minlength="6" v-model="form.password" autocomplete="off" required class="w-full flex-1 py-1 border-b border-gray-200 focus:border-green-400 text-gray-600 placeholder-gray-400 outline-none"/>
					</div>
					<div class="flex text-sm justify-between mt-4">
						<button type="submit" class="bg-red-600 hover:bg-red-400 transition duration-150 shadow-xl w-5/12 text-white p-2">Kirish</button>
					</div>
				</section>
			</form>
		</main>
	</section>
</template>
<script setup>
import { ref } from "@vue/runtime-core"
const form = ref({
	phone: "",
	password: "",
})
</script>
<style scoped>
.loginback{
	background: url('/images/loginback.jpg') no-repeat;
	background-size: cover;
	background-position: center;
}
</style>