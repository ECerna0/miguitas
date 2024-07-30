<template>
    <a
        :href="href"
        class="font-medium font-pluto_m text-blue hover:text-blueSelected uppercase"
    >
        {{ text }}
    </a>
</template>

<script>
export default {
    name: "NavbarLink",
    props: {
        href: {
            type: String,
            required: true,
        },
        text: {
            type: String,
            required: true,
        },
    },
};
</script>
