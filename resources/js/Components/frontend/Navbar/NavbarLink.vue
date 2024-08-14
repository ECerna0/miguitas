<template>
    <a
        :href="href"
        class="font-medium font-pluto_m text-blue hover:text-blue-selected uppercase"
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
