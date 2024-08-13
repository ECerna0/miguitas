<template>
    <a
        :href="href"
        class="font-medium font-pluto_m text-blue hover:text-blueSelected uppercase"
    >
        {{ text }}
    </a>
</template>

<script setup>
defineProps({
    href: String,
    text: String,
});
</script>
