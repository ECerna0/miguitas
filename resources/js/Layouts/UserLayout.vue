<script>
import Navbar from "../Components/frontend/Navbar.vue";

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
    padding: 20px;
}
</style>
