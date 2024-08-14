<script>
import Footer from "@/Components/frontend/Footer/Footer.vue";
import Navbar from "../Components/frontend/Navbar/Navbar.vue";

export default {
    name: "UserLayout",
    components: {
        Navbar,
        Footer,
    },
};
</script>

<template>
    <header>
        <Navbar />
    </header>
    <main>
        <slot></slot>
    </main>
    <Footer />
</template>

<style scoped>
main {
    margin: 0;
    padding: 0;
}
</style>
