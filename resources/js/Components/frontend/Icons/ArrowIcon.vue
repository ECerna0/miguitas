<template>
    <svg
        width="45"
        height="45"
        viewBox="0 0 226 380"
        fill="none"
        xmlns="http://www.w3.org/2000/svg"
        :class="svgClass"
    >
        <path
            d="M46 46L172.322 172.322C182.085 182.085 182.085 197.915 172.322 207.678L46 334"
            stroke=""
            stroke-width="45"
            stroke-linecap="round"
            stroke-linejoin="round"
        />
    </svg>
</template>
<script setup>
defineProps({
    svgClass: String,
});
</script>
