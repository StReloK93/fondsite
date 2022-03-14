<template>
    <RightPanel ref="Panel" :class="{'translate-x-clear': menu}"/>
    <section class="fixed top-0 left-0 w-full px-16 py-6 flex justify-between items-center text-gray-200 z-50">
        <router-link to="/" class="font-bold text-white">
            Fond Logo
        </router-link>
        <main class="flex items-center">
            <button :class="{'mr-60': menu}" class="text-2xl cursor-pointer mr-10 custom-transition">
                <i class="fal fa-search"></i>
            </button>
            <span @click="menuOpen" class="text-3xl cursor-pointer custom-transition" :class="{'transform translate-x-8': menu}">
                <transition name="menu" mode="out-in">
                    <i v-if="menu == false" class="fal fa-bars"></i>
                    <i v-else class="fal fa-times"></i>
                </transition>
            </span>
        </main>
    </section>
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