<script>
import Navbar from "../Components/frontend/Navbar/Navbar.vue";

export default {
    name: "UserLayout",
    components: {
        Navbar,
    },
};
</script>

<template>
    <div>
        <Navbar />
        <main>
            <slot></slot>
        </main>
    </div>
</template>

<style scoped>
main {
    margin: 0;
    padding: 0;
}
</style>
