<template>
    <svg
        :class="svgClass"
        viewBox="0 0 34 36"
        fill="none"
        xmlns="http://www.w3.org/2000/svg"
    >
        <path
            class="svg-header-fixer"
            d="M23.9544 8.84607C23.631 13.1671 20.3233 16.6921 16.6921 16.6921C13.0609 16.6921 9.74749 13.168 9.42976 8.84607C9.09964 4.35093 12.3182 1 16.6921 1C21.066 1 24.2847 4.43265 23.9544 8.84607Z"
            stroke="var(--blue)"
            stroke-width="2"
            stroke-linecap="round"
            stroke-linejoin="round"
        />
        <path
            class="svg-header-fixer"
            d="M16.6917 21.9231C9.58151 21.9231 2.36503 25.8462 1.02962 33.251C0.868619 34.1435 1.37369 35 2.30783 35H31.0757C32.0106 35 32.5157 34.1435 32.3548 33.251C31.0184 25.8462 23.802 21.9231 16.6917 21.9231Z"
            stroke="var(--blue)"
            stroke-width="2"
            stroke-miterlimit="10"
        />
    </svg>
</template>

<script setup>
defineProps({
    svgClass: String,
});
</script>
