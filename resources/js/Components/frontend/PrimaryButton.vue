<template>
    <button :class="classes" :disabled="isDisabled">
        <slot>{{ buttonText }}</slot>
    </button>
</template>

<script>
export default {
    name: "PrimaryButton",
    props: {
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
    },
    computed: {
        classes() {
            const baseClasses =
                "flex justify-center items-center px-6 pt-3 pb-2 rounded-full font-bold font-pluto_m text-xl uppercase transition-colors";
            const enabledClasses = "bg-blue hover:bg-blueSelected text-white";
            const disabledClasses = "bg-gray text-white cursor-not-allowed";
            return `${baseClasses} ${
                this.isDisabled ? disabledClasses : enabledClasses
            } ${this.additionalClasses}`;
        },
    },
};
</script>
