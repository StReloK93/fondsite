<template>
	<section class="flex flex-col h-full">
		<main class="flex-grow flex items-center justify-center">
			<form class="w-1/2 shadow-2xl flex" @submit.prevent="register">
				<section class="w-1/2 loginback"></section>
				<section class="p-8 w-1/2 bg-white">
					<h3 class="text-gray-900 text-2xl text-center mb-4">Ro'yhatdan o'tish</h3>
					<div>
						<label for="market" class="text-gray-600 text-xs">Do'kon nomi</label>
						<input id="market" placeholder="do'kon..." type="text" v-model="form.commerse" required class="w-full flex-1 py-1 border-b border-gray-200 focus:border-green-400 text-gray-600 placeholder-gray-400 outline-none"/>
					</div>
					<div>
						<label for="email" class="text-gray-600 text-xs">Telefon raqam</label>
						<input id="email" type="text" placeholder="telefon..." v-model="form.email" required class="w-full flex-1 py-1 border-b border-gray-200 focus:border-green-400 text-gray-600 placeholder-gray-400 outline-none"/>
					</div>
					<div>
						<label for="password" class="text-gray-600 text-xs">Parol</label>
						<input id="password" type="password"  minlength="6" v-model="form.password" autocomplete="off" required class="w-full flex-1 py-1 border-b border-gray-200 focus:border-green-400 text-gray-600 placeholder-gray-400 outline-none"/>
					</div>
					<div>
						<label for="password2" class="text-gray-600 text-xs">Parolni qaytadan tering</label>
						<input id="password2" type="password" minlength="6" v-model="form.password_confirmation" autocomplete="off" required class="w-full flex-1 py-1 border-b border-gray-200 focus:border-green-400 text-gray-600 placeholder-gray-400 outline-none"/>
					</div>
					<div class="text-right mb-4 text-xs mt-2">
						<router-link to="/login" class="hover:text-blue-500 text-blue-400">Ro'yhatdan o'tganmisiz?</router-link>
					</div>
					<div class="flex text-sm justify-between">
						<router-link to="/register" class="bg-gray-600 text-center hover:bg-gray-400 transition duration-150 shadow-xl w-full text-white p-2">Ro'yhatdan o'tish</router-link>
					</div>
				</section>
			</form>
		</main>
	</section>
</template>
<script setup>
import { ref } from "@vue/runtime-core"
const form = ref({
	commerse: "Ruzzifer",
	phone: 998936600960,
	password: "strelok",
	password_confirmation: ""
})

function register() {
	
}
</script>
<style scoped>
.loginback{
	background: url('/images/register.jpg') no-repeat;
	background-size: cover;
	background-position: center;
}
</style>