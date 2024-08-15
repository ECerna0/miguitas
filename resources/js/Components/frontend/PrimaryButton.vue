<template>
    <button :class="classes" :disabled="isDisabled">
        <slot>{{ buttonText }}</slot>
    </button>
</template>

<script setup>
import { computed } from "vue";

const props = defineProps({
    buttonText: {
        type: String,
        default: "Button",
    },
    class: {
        type: String,
        default: "",
    },
    isDisabled: {
        type: Boolean,
        default: false,
    },
});

const classes = computed(() => {
    const baseClasses =
        "flex justify-center items-center px-6 pt-3 pb-2 rounded-full font-bold font-pluto_m text-xl uppercase transition-colors";
    const enabledClasses = "bg-blue hover:bg-blue-selected text-white";
    const disabledClasses = "bg-gray text-white cursor-not-allowed";
    return `${baseClasses} ${
        props.isDisabled ? disabledClasses : enabledClasses
    } ${props.class}`;
});
</script>
