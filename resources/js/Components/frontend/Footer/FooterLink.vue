<template>
    <a
        :href="href"
        class="hover:text-pink-selected transition-colors duration-100"
    >
        {{ text }}
    </a>
</template>

<script setup>
defineProps({
    text: {
        type: String,
        required: true,
    },
    href: {
        type: String,
        required: true,
    },
});
</script>
