<template>
    <section class="image-2">
        <h3>
            About
        </h3>
    </section>
</template>
<script setup>
function nextPage() {
   router.push('/')
}

function oldPage() {
   router.push('/news')
}

defineExpose({ nextPage, oldPage});
</script>