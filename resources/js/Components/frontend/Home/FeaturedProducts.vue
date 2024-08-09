<script>
import CardProduct from "@/Components/frontend/Home/CardProduct.vue";
import PrimaryButton from "@/Components/frontend/PrimaryButton.vue";

export default {
    name: "FeaturedProducts",
    components: {
        CardProduct,
        PrimaryButton,
    },
};
</script>

<template>
    <section class="p-8">
        <div class="text-center">
            <h2 class="font-pluto_m text-4xl text-lightBlue">
                Productos destacados
            </h2>
            <p class="mx-auto mt-2 w-1/2 font-dine_r font-medium text-gray">
                Nuestra mejor receta para tu peludo: Ingredientes naturales y
                frescos, cero químicos y elaboramos los productos en “small
                batches”. Puedes estar seguro de que, con Miguitas, obtienes
                calidad, beneficiando a tu mascota para que viva más y mejor.
            </p>
        </div>
        <div class="flex flex-wrap justify-center gap-8 mx-auto mt-8">
            <CardProduct />
            <CardProduct />
            <CardProduct />
        </div>
        <div class="flex justify-center mt-10">
            <PrimaryButton buttonText="Ver más" />
        </div>
    </section>
</template>
