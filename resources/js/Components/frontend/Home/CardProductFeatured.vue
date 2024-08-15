<template>
    <div
        class="relative bg-light-gray after:bg-pink rounded-sm w-96 featured-card-container"
    >
        <div class="flex flex-col p-2 rounded-sm featured-card-body">
            <div class="m-8 h-max featured-card-img">
                <img
                    src="https://via.placeholder.com/200"
                    alt="Imagen del producto"
                    class="w-full h-60 object-cover"
                />
            </div>
            <div
                class="flex justify-between items-center mx-8 featured-card-actions"
            >
                <a href="" class="group">
                    <svg
                        width="35"
                        height="35"
                        viewBox="0 0 180 163"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                        class="group-hover:fill-blue w-7 h-7 stroke-blue"
                    >
                        <path
                            d="M73.1955 156.506C77.8134 156.506 81.557 152.762 81.557 148.144C81.557 143.526 77.8134 139.783 73.1955 139.783C68.5775 139.783 64.834 143.526 64.834 148.144C64.834 152.762 68.5775 156.506 73.1955 156.506Z"
                            stroke=""
                            stroke-width="12"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                        />
                        <path
                            d="M140.087 156.506C144.705 156.506 148.449 152.762 148.449 148.144C148.449 143.526 144.705 139.783 140.087 139.783C135.469 139.783 131.726 143.526 131.726 148.144C131.726 152.762 135.469 156.506 140.087 156.506Z"
                            stroke=""
                            stroke-width="12"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                        />
                        <path
                            d="M6.30371 5.99902H35.5689C35.5689 5.99902 39.0217 21.2874 41.2341 31.0835C45.6547 50.6576 51.7262 77.5416 55.2883 93.3139C57.0103 100.938 63.7804 106.337 71.5969 106.337H143.396C151.234 106.337 158.02 100.893 159.72 93.2419L173.533 31.0835"
                            stroke=""
                            stroke-width="12"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                        />
                        <path
                            d="M173.534 31.0835H43.9307"
                            stroke=""
                            stroke-width="12"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                        />
                    </svg>
                </a>
                <button class="group">
                    <svg
                        class="group-hover:fill-blue w-7 h-7 stroke-blue"
                        width="37"
                        height="34"
                        viewBox="0 0 39 36"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                    >
                        <path
                            d="M28.8382 1C22.5832 1 19.5 7.18178 19.5 7.18178C19.5 7.18178 16.4168 1 10.1618 1C5.07848 1 1.05301 5.26351 1.00098 10.351C0.895006 20.9112 9.35734 28.4211 18.6329 34.7323C18.8886 34.9067 19.1907 35 19.5 35C19.8093 35 20.1115 34.9067 20.3671 34.7323C29.6417 28.4211 38.104 20.9112 37.999 10.351C37.947 5.26351 33.9215 1 28.8382 1Z"
                            stroke=""
                            stroke-width="2"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                        />
                    </svg>
                </button>
            </div>
            <div class="mt-4 mb-20">
                <div class="mt-2 text-center featured-card-title">
                    <h1 class="font-bold font-pluto_m text-2xl text-blue">
                        Cake Corazón FurryLove
                    </h1>
                </div>
                <div
                    class="mt-4 font-dine_r text-center text-gray text-xl featured-card-prices"
                >
                    <p>$9.50 – $20.00</p>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: "CardProduct",
};
</script>

<style scoped>
/* Estilo para el contenedor de las cards*/
.featured-card-container {
    clip-path: polygon(0% 0%, 100% 0%, 100% 80%, 79% 100%, 0% 100%);
}
/* Estilo para establecer el doblez en la esquina inferior derecha */
.featured-card-container::after {
    content: "";
    position: absolute;
    bottom: 0;
    right: 0;
    width: 30%;
    height: 20%;
    clip-path: polygon(40% 20%, 100% 0, 30% 100%);
}
</style>
