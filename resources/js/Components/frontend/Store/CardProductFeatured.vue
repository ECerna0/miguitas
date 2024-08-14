<script setup>
import HearIcon from "@Icons/HeartIcon.vue";
import MessageIcon from "@Icons/MessageIcon.vue";
import SendIcon from "@Icons/SendIcon.vue";
import CartIcon from "@Icons/CartIcon.vue";
import ArrowIcon from "@Icons/ArrowIcon.vue";
</script>

<template>
    <div class="border-2 border-dark-blue m-5 p-1.5 rounded-3xl w-[28%]">
        <!-- Header de la card -->
        <div class="flex flex-row gap-2 my-2 mr-5 ml-5">
            <!-- Icono o imagen del header -->
            <div
                class="border-[2px] my-[5px] border-light-blue rounded-full w-10 h-10"
            >
                <img src="" alt="" />
            </div>
            <!-- Informacion del header -->
            <div class="flex flex-col justify-center items-start">
                <!-- Título del header -->
                <h2
                    class="font-medium font-pluto_m text-[17px] text-light-blue-2"
                >
                    miguitaselsalvador
                </h2>
                <!-- Subtitulo del header -->
                <h2 class="font-normal font-pluto_m text-[17px] text-gray">
                    El Salvador
                </h2>
            </div>
        </div>
        <!-- Imágen de la card -->
        <div class="bg-light-blue mx-[25px] mb-[15px] rounded-lg h-[30vh]">
            <img src="" alt="" />
        </div>
        <!-- Botones de acción de la card -->
        <div class="flex justify-between items-center mx-[25px] mb-[5px]">
            <!-- Botones de interacción social -->
            <div class="flex items-center gap-[10px] my-2">
                <HearIcon
                    class="w-7 h-7 stroke-blue hover:fill-dark-blue-selected cursor-pointer"
                />
                <MessageIcon
                    class="w-7 h-7 stroke-blue hover:fill-dark-blue-selected cursor-pointer"
                />
                <SendIcon
                    class="w-7 h-7 stroke-blue hover:fill-dark-blue-selected cursor-pointer"
                />
            </div>
            <!-- Botón para el carrito -->
            <div class="flex justify-end cursor-pointer">
                <a href="carrito.html">
                    <CartIcon class="w-8 h-8 stroke-blue" />
                </a>
            </div>
        </div>
        <!-- Vistas del producto -->
        <div
            class="ml-[25px] font-medium font-pluto_m text-[17px] text-gray text-start"
        >
            <h2>13,345 view</h2>
        </div>
        <!-- Información del producto -->
        <div class="flex">
            <div class="flex flex-col w-[80%]">
                <!--  Nombre del producto -->
                <h1
                    class="mt-[10px] ml-[25px] font-pluto_r font-semibold text-light-blue-2 text-start text-xl"
                >
                    #Cake Corazón FurryLove
                </h1>
                <!-- Precio del producto -->
                <h1
                    class="mt-[10px] ml-[25px] font-dine_r font-dine-r font-medium text-[20px] text-gray text-start"
                >
                    $9.50 – $20.00
                </h1>
            </div>
            <!-- Botón para información extra del producto -->
            <div class="flex flex-col items-center mt-12 mb-4 h-[65px]">
                <div
                    class="flex justify-center items-center border-[5px] bg-pink border-blue rounded-full w-[65px] h-full cursor-pointer g-pink"
                >
                    <a href="product-info.html">
                        <ArrowIcon class="stroke-blue" />
                    </a>
                </div>
            </div>
        </div>
    </div>
</template>
