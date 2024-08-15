<script setup>
import CardProductFeatured from "@Frontend/Store/CardProductFeatured.vue";
</script>
<template>
    <div>
        <div class="text-center">
            <h1 class="font-bold font-pluto_m text-5xl text-blue uppercase">
                Productos destacados
            </h1>
        </div>
        <div class="flex justify-center items-center gap-4 mt-4">
            <CardProductFeatured />
            <CardProductFeatured />
            <CardProductFeatured />
        </div>
    </div>
</template>
