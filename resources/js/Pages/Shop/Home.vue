<script setup lang="ts">
import Decorator from "@/Components/frontend/Home/Decorator.vue";
import FeaturedProducts from "@/Components/frontend/Home/FeaturedProducts.vue";
import HomeHeader from "@/Components/frontend/Home/HomeHeader.vue";
import LestCelebrate from "@/Components/frontend/Home/LestCelebrate.vue";
import PawtyPacks from "@/Components/frontend/Home/PawtyPacks.vue";
import UserLayout from "@/Layouts/UserLayout.vue";

import { Head, Link } from "@inertiajs/vue3";
</script>

<template>
    <UserLayout>
        <Head title="Inicio" />
        <HomeHeader />
        <FeaturedProducts />
        <Decorator />
        <PawtyPacks />
        <LestCelebrate />
    </UserLayout>
</template>

<style scoped></style>
