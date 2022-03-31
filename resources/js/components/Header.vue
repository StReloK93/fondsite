<template>
    <main class="fixed flex top-0 left-0 justify-between w-full items-start h-20 z-50">
        <section :class="{ 'bg-blue-500 py-6': $store.state.scroll}" class="px-12 py-5 flex-grow  custom-transition flex justify-between items-center text-gray-200 z-50">
            <router-link to="/" class="font-bold  flex items-center">
                <img src="/logo.png" class="w-10"> 
                <span class="text-gray-200 ml-3 text-xl">
                    NKMK Jamg'armasi DM
                </span>
            </router-link>
            <main class="flex items-center">
                <router-link v-if="$store.state.user" to="/admin" class="w-full px-4 mr-3 bg-opacity-90 block text-green-600">
                Admin Panel <i class="fal fa-user-cog ml-3"></i>
                </router-link>
                <button @click="$store.dispatch('logout')" class="text-2xl cursor-pointer mr-10">
                    <i class="fal fa-search"></i>
                </button>
                <span @click="menuOpen" class="text-3xl cursor-pointer">
                    <transition name="menu" mode="out-in">
                        <i v-if="menu == false" class="fal fa-bars"></i>
                        <i v-else class="fal fa-times"></i>
                    </transition>
                </span>
            </main>
        </section>
        <RightPanel ref="Panel" :class="{'w-96': menu}"/>
    </main>
</template>
<script setup>
import { ref } from 'vue'

const menu = ref(false)
const Panel = ref(null)
function menuOpen(){
    menu.value = !menu.value
    Panel.value.MenuAnimate()
}
import RightPanel from './RightPanel.vue'
</script>