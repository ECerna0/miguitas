<script setup lang="ts">
import HomeHeader from "@/Components/frontend/Home/HomeHeader.vue";
import UserLayout from "@/Layouts/UserLayout.vue";
import { Head, Link } from "@inertiajs/vue3";
</script>

<template>
    <UserLayout>
        <Head title="Inicio" />
        <HomeHeader />
    </UserLayout>
</template>

<style scoped></style>
