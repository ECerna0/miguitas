<template>
    <svg
        :class="svgClass"
        viewBox="0 0 41 36"
        fill="none"
        xmlns="http://www.w3.org/2000/svg"
    >
        <path
            class="svg-header-fixer"
            d="M13.3441 34.9463C14.1963 34.9463 14.8871 34.2555 14.8871 33.4033C14.8871 32.5511 14.1963 31.8603 13.3441 31.8603C12.4919 31.8603 11.8011 32.5511 11.8011 33.4033C11.8011 34.2555 12.4919 34.9463 13.3441 34.9463Z"
            stroke="var(--blue)"
            stroke-width="2"
            stroke-linecap="round"
            stroke-linejoin="round"
        />
        <path
            class="svg-header-fixer"
            d="M34.9464 34.9463C35.7985 34.9463 36.4894 34.2555 36.4894 33.4033C36.4894 32.5511 35.7985 31.8603 34.9464 31.8603C34.0942 31.8603 33.4033 32.5511 33.4033 33.4033C33.4033 34.2555 34.0942 34.9463 34.9464 34.9463Z"
            stroke="var(--blue)"
            stroke-width="2"
            stroke-linecap="round"
            stroke-linejoin="round"
        />
        <path
            d="M1 1H7.17206L11.8011 27.2313H36.4894"
            stroke="var(--blue)"
            stroke-width="2"
            stroke-linecap="round"
            stroke-linejoin="round"
        />
        <path
            class="svg-header-fixer"
            d="M11.7959 21.0592H35.8113C35.9896 21.0593 36.1622 20.9976 36.3 20.8845C36.4378 20.7715 36.5323 20.6141 36.5672 20.4391L39.34 6.55197C39.3625 6.43999 39.3596 6.32442 39.332 6.21363C39.3045 6.10282 39.2525 5.99955 39.1802 5.91127C39.1079 5.82296 39.017 5.75185 38.9139 5.70305C38.8107 5.65424 38.6983 5.62896 38.5841 5.62905H8.71507"
            stroke="var(--blue)"
            stroke-width="2"
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
