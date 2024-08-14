<script setup>
import UserLayout from "@/Layouts/UserLayout.vue";
import { Head, Link } from "@inertiajs/vue3";
import StoreHeader from "@Frontend/Store/StoreHeader.vue";
import Categories from "@Frontend/Store/Categories.vue";
import FeaturedProducts from "@Frontend/Store/FeaturedProducts.vue";
import InfoContainer from "@Frontend/Store/InfoContainer.vue";
</script>

<template>
    <UserLayout>
        <Head title="Tienda" />
        <StoreHeader />
        <Categories />
        <FeaturedProducts />
        <InfoContainer />
    </UserLayout>
</template>
