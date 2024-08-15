<template>
    <section :style="backgroundStyle" class="relative">
        <button
            class="bottom-56 left-60 absolute flex justify-center items-center bg-blue hover:bg-blue-selected px-4 pt-3 pb-2 rounded-full font-bold font-pluto_m text-2xl text-white uppercase transition-colors"
        >
            Compra ahora
        </button>
    </section>
</template>

<script>
export default {
    name: "backgroundStyle",
    data() {
        return {
            imageUrl: "/images/index.png",
        };
    },
    computed: {
        backgroundStyle() {
            return {
                backgroundImage: `url(${this.imageUrl})`,
                backgroundSize: "cover",
                backgroundPosition: "center",
                backgroundRepeat: "no-repeat",
                width: "100%",
                height: "100vh",
            };
        },
    },
};
</script>
