<template>

    <AuthenticatedAdminLayout>
        <Head title="Categorías"></Head>
        <div class="dark:bg-black py-4 px-4 shadow-sm flex flex-col items-start border-y dark:border-zinc-900">
            <h1 class="text-2xl dark:text-blue-400 font-secondary text-secondary font-bold">
                Administrar categorías
            </h1>
            <p class="text-sm text-gray-400">
                Administra las categorías de tu tienda
            </p>
        </div>
        <div class="bg-gray-50 dark:bg-black p-4">
            <div class="mx-auto w-full">
                <div class="bg-white dark:bg-black relative shadow-md rounded-lg dark:border dark:border-zinc-900 ">
                    <div class="p-4 border-b dark:border-zinc-900 border-gray-200">
                        <h2 class="dark:text-gray-200 text-base font-semibold text-gray-700">
                            Lista de categorías
                        </h2>
                    </div>
                    <div
                        class="flex flex-col md:flex-row items-center justify-between space-y-3 md:space-y-0 md:space-x-4 p-4">
                        <div class="w-full md:w-1/2">
                            <div class="relative w-full">
                                <div class="absolute inset-y-0 start-0 flex items-center ps-3.5 pointer-events-none">
            <span class="text-gray-500 dark:text-gray-400 font-medium">
                <svg class="w-5 h-5 text-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24"
                     height="24" color="#000000" fill="none">
            <path d="M17.5 17.5L22 22" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                  stroke-linejoin="round"></path>
            <path
                d="M20 11C20 6.02944 15.9706 2 11 2C6.02944 2 2 6.02944 2 11C2 15.9706 6.02944 20 11 20C15.9706 20 20 15.9706 20 11Z"
                stroke="currentColor" stroke-width="1.5" stroke-linejoin="round"></path>
        </svg>
            </span>
                                </div>
                                <input v-model="params.search" type="text" name="inputSearch" id="inputSearch"
                                       placeholder="Buscar"
                                       @input="filterAction()"
                                       class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded focus:ring-4 focus:ring-blue-200 focus:border-blue-500 block w-full p-2.5 dark:bg-zinc-950 dark:border-zinc-800 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-950 dark:focus:ring-opacity-60 dark:focus:border-blue-500   ps-10"
                                       data-form="#formSearchCategorie" data-table="#tableCategorie">
                            </div>

                        </div>
                        <div
                            class="w-full md:w-auto flex flex-col md:flex-row space-y-2 md:space-y-0 items-stretch md:items-center justify-end md:space-x-3 flex-shrink-0">
                            <button type="button" @click="drawer.show()"
                                    class="bg-black text-white hover:bg-zinc-900 dark:bg-white dark:text-black dark:hover:bg-zinc-200 font-medium rounded flex items-center gap-2 transition-colors text-sm px-3.5 py-2.5 "
                                    data-drawer-target="drawer-right-example" data-drawer-show="drawer-right-example"
                                    data-drawer-placement="right" aria-controls="drawer-right-example">
                                <svg class="w-5 h-5 text-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                     width="24" height="24" color="#000000" fill="none">
                                    <path d="M12 8V16M16 12L8 12" stroke="currentColor" stroke-width="1.5"
                                          stroke-linecap="round" stroke-linejoin="round"></path>
                                    <path
                                        d="M22 12C22 6.47715 17.5228 2 12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22C17.5228 22 22 17.5228 22 12Z"
                                        stroke="currentColor" stroke-width="1.5"></path>
                                </svg>
                                Nueva categoría
                            </button>
                            <div class="flex items-center space-x-3 w-full md:w-auto">
                                <button type="button" id="filterDropdownButton" data-dropdown-toggle="filterDropdown"
                                        class="border-2 text-zinc-600 hover:bg-zinc-100 border-zinc-300 dark:border-zinc-800 dark:text-white dark:hover:bg-zinc-900  font-medium rounded flex items-center gap-2 transition-colors text-sm px-3.5 py-2.5 ">
                                    <svg class="w-5 h-5 text-current" xmlns="http://www.w3.org/2000/svg"
                                         viewBox="0 0 24 24" width="24" height="24" color="#000000" fill="none">
                                        <path
                                            d="M8.85746 12.5061C6.36901 10.6456 4.59564 8.59915 3.62734 7.44867C3.3276 7.09253 3.22938 6.8319 3.17033 6.3728C2.96811 4.8008 2.86701 4.0148 3.32795 3.5074C3.7889 3 4.60404 3 6.23433 3H17.7657C19.396 3 20.2111 3 20.672 3.5074C21.133 4.0148 21.0319 4.8008 20.8297 6.37281C20.7706 6.83191 20.6724 7.09254 20.3726 7.44867C19.403 8.60062 17.6261 10.6507 15.1326 12.5135C14.907 12.6821 14.7583 12.9567 14.7307 13.2614C14.4837 15.992 14.2559 17.4876 14.1141 18.2442C13.8853 19.4657 12.1532 20.2006 11.226 20.8563C10.6741 21.2466 10.0043 20.782 9.93278 20.1778C9.79643 19.0261 9.53961 16.6864 9.25927 13.2614C9.23409 12.9539 9.08486 12.6761 8.85746 12.5061Z"
                                            stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                            stroke-linejoin="round"></path>
                                    </svg>
                                    Filtros
                                </button>
                                <div id="filterDropdown"
                                     class="z-10 w-48 p-3 bg-white rounded-lg shadow dark:bg-zinc-950 hidden"
                                     data-popper-placement="bottom"
                                     style="position: absolute; inset: 0px auto auto 0px; margin: 0px; transform: translate3d(1262px, 293px, 0px);">
                                    <form
                                          id="formSearchCategorieCheck">
                                        <input type="hidden" name="_token"
                                               value="pmWQ5HbLkUUec7TMrr637gShdzRAH18Tmsa4LBl2" autocomplete="off">
                                        <h6 class="mb-3 text-sm font-medium text-gray-900 dark:text-white">
                                            Categorías:
                                        </h6>
                                        <ul class="space-y-2 text-sm" aria-labelledby="filterDropdownButton">
                                            <li class="flex items-center">
                                                <input id="no_subcategories" name="filter[]" type="checkbox"
                                                       value="no_subcategories"
                                                       class="w-4 h-4 bg-gray-100 border-gray-300 rounded text-primary-600 focus:ring-primary-500 dark:focus:ring-primary-600 dark:ring-offset-gray-700 focus:ring-2 dark:bg-white dark:border-gray-500">
                                                <label for="no_subcategories"
                                                       class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-100">
                                                    Sin subcategorías
                                                </label>
                                            </li>
                                            <li class="flex items-center">
                                                <input id="has_subcategories" name="filter[]" type="checkbox"
                                                       value="has_subcategories"
                                                       class="w-4 h-4 bg-gray-100 border-gray-300 rounded text-primary-600 focus:ring-primary-500 dark:focus:ring-primary-600 dark:ring-offset-gray-700 focus:ring-2 dark:bg-white dark:border-gray-500">
                                                <label for="fitbit"
                                                       class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-100">
                                                    Con subcategorías
                                                </label>
                                            </li>
                                        </ul>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <vue3-datatable class="w-full text-sm text-left text-gray-500 dark:text-gray-400 bg-"
                                        :rows="rows" :columns="cols" :loading="loading" :totalRows="total_rows"
                                        :isServerMode="true"
                                        :pageSize="params.pagesize" :search="params.search">
                            <template #subcategories="data">
                                <div v-if="data.value.subcategories===null">
                                    No posee subcategorías
                                </div>
                                <div v-else>
                                    <span v-for="subcat in data.value.subcategories"
                                          :key="subcat.id">{{ subcat.name }}</span>
                                </div>
                            </template>
                            <template #image="data">
                                <img :src="'/storage/'+data.value.image" alt="" srcset="" style="max-width: 300px">
                            </template>
                            <template #actions="data">
                                <div class="flex gap-2">
                                    <button type="button"
                                            class="border-2 border-green-500 text-green-500 hover:text-white hover:bg-green-500 dark:bg-green-800 dark:hover:bg-green-900 dark:text-white font-medium rounded flex items-center gap-2 transition-colors text-sm p-2 editCategorie">
                                        <svg class="w-5 h-5 text-current" xmlns="http://www.w3.org/2000/svg"
                                             viewBox="0 0 24 24" width="24" height="24" color="#000000" fill="none">
                                            <path
                                                d="M16.2141 4.98239L17.6158 3.58063C18.39 2.80646 19.6452 2.80646 20.4194 3.58063C21.1935 4.3548 21.1935 5.60998 20.4194 6.38415L19.0176 7.78591M16.2141 4.98239L10.9802 10.2163C9.93493 11.2616 9.41226 11.7842 9.05637 12.4211C8.70047 13.058 8.3424 14.5619 8 16C9.43809 15.6576 10.942 15.2995 11.5789 14.9436C12.2158 14.5877 12.7384 14.0651 13.7837 13.0198L19.0176 7.78591M16.2141 4.98239L19.0176 7.78591"
                                                stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                                stroke-linejoin="round"></path>
                                            <path
                                                d="M21 12C21 16.2426 21 18.364 19.682 19.682C18.364 21 16.2426 21 12 21C7.75736 21 5.63604 21 4.31802 19.682C3 18.364 3 16.2426 3 12C3 7.75736 3 5.63604 4.31802 4.31802C5.63604 3 7.75736 3 12 3"
                                                stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path>
                                        </svg>

                                    </button>
                                    <button type="button" data-form="formDeleteCategorie"
                                            class="border-2 border-red-500 text-red-500 hover:text-white hover:bg-red-500 dark:bg-red-800 dark:hover:bg-red-900 dark:text-white  font-medium rounded flex items-center gap-2 transition-colors text-sm p-2 buttonDelete">
                                        <svg class="w-5 h-5 text-current" xmlns="http://www.w3.org/2000/svg"
                                             viewBox="0 0 24 24" width="24" height="24" color="#000000" fill="none">
                                            <path
                                                d="M19.5 5.5L18.8803 15.5251C18.7219 18.0864 18.6428 19.3671 18.0008 20.2879C17.6833 20.7431 17.2747 21.1273 16.8007 21.416C15.8421 22 14.559 22 11.9927 22C9.42312 22 8.1383 22 7.17905 21.4149C6.7048 21.1257 6.296 20.7408 5.97868 20.2848C5.33688 19.3626 5.25945 18.0801 5.10461 15.5152L4.5 5.5"
                                                stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path>
                                            <path
                                                d="M3 5.5H21M16.0557 5.5L15.3731 4.09173C14.9196 3.15626 14.6928 2.68852 14.3017 2.39681C14.215 2.3321 14.1231 2.27454 14.027 2.2247C13.5939 2 13.0741 2 12.0345 2C10.9688 2 10.436 2 9.99568 2.23412C9.8981 2.28601 9.80498 2.3459 9.71729 2.41317C9.32164 2.7167 9.10063 3.20155 8.65861 4.17126L8.05292 5.5"
                                                stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path>
                                            <path d="M9.5 16.5L9.5 10.5" stroke="currentColor" stroke-width="1.5"
                                                  stroke-linecap="round"></path>
                                            <path d="M14.5 16.5L14.5 10.5" stroke="currentColor" stroke-width="1.5"
                                                  stroke-linecap="round"></path>
                                        </svg>
                                    </button>
                                </div>
                            </template>
                        </vue3-datatable>
                    </div>

                </div>
            </div>
        </div>
        <!-- drawer component -->

        <div id="drawer-right-example"
             class="fixed top-0 right-0 z-40 h-screen p-4 overflow-y-auto transition-transform translate-x-full bg-white  w-[500px] dark:bg-gray-800"
             tabindex="-1" aria-labelledby="drawer-right-label">
            <h5 id="drawer-right-example-label"
                class="inline-flex items-center mb-4 text-base font-semibold text-gray-500 dark:text-gray-400">
                Nueva categoría
            </h5>
            <button type="button"
                    @click="drawer.hide()"
                    data-drawer-hide="drawer-right-example" aria-controls="drawer-right-example"
                    class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 absolute top-2.5 end-2.5 inline-flex items-center justify-center dark:hover:bg-zinc-900 dark:hover:text-white close-drawer-right-example">
                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                     viewBox="0 0 14 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                          d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"></path>
                </svg>
                <span class="sr-only">Close menu</span>
            </button>
            <div>
                <Form @submit="onSubmit" class="flex flex-col gap-4"
                      :validation-schema="schemaForm">
                    <div class="flex gap-4">
                        <div class="flex-1">
                            <div class="w-full">
                                <label for="typeCategorie"
                                       class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                    Tipo de categoría
                                </label>
                                <select v-model="form.category_type" id="countries_disabled"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                    <option selected value="principal">Principal</option>
                                    <option value="secondary">Secundaria</option>
                                </select>
                            </div>
                        </div>
                        <div v-if="form.category_type==='secondary'" class="flex-[2]">
                            <div class="w-full" id="categorieParentSelect">
                                <div class="w-full">
                                    <label for="categorieParent"
                                           class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                        Categoría padre
                                    </label>
                                    <select v-model="form.parent_id"
                                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                        <option v-for="cat in $page.props.categories" :key="cat.id" selected
                                                :value="cat.id">{{ cat.name }}
                                        </option>
                                    </select>
                                </div>
                                <error-message name="parent_id"  v-slot="{ message }">
                                    <small class="text-red-600">{{message}}</small>
                                </error-message>
                            </div>
                        </div>
                    </div>
                    <div class="w-full">
                        <label for="name_categorie"
                               class="block mb-2 text-sm font-medium text-gray-900 dark:text-white ">
                            Nombre
                        </label>

                        <div class="relative w-full">
                            <div class="absolute inset-y-0 start-0 flex items-center ps-3.5 pointer-events-none">
            <span class="text-gray-500 dark:text-gray-400 font-medium">
                <svg class="w-5 h-5 text-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24"
                     height="24" color="#000000" fill="none">
            <path
                d="M4 17.9808V9.70753C4 6.07416 4 4.25748 5.17157 3.12874C6.34315 2 8.22876 2 12 2C15.7712 2 17.6569 2 18.8284 3.12874C20 4.25748 20 6.07416 20 9.70753V17.9808C20 20.2867 20 21.4396 19.2272 21.8523C17.7305 22.6514 14.9232 19.9852 13.59 19.1824C12.8168 18.7168 12.4302 18.484 12 18.484C11.5698 18.484 11.1832 18.7168 10.41 19.1824C9.0768 19.9852 6.26947 22.6514 4.77285 21.8523C4 21.4396 4 20.2867 4 17.9808Z"
                stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
            <path d="M4 7H20" stroke="currentColor" stroke-width="1.5"></path>
        </svg>
            </span>
                            </div>
                            <Field v-model="form.name" type="text" name="name" id="name_categorie"
                                   placeholder="Ingresa el nombre de la categoría" value=""
                                   class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded focus:ring-4 focus:ring-blue-200 focus:border-blue-500 block w-full p-2.5 dark:bg-zinc-950 dark:border-zinc-800 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-950 dark:focus:ring-opacity-60 dark:focus:border-blue-500 ps-10"/>
                        </div>
                        <error-message name="name" v-slot="{ message }">
                            <small class="text-red-600">Error: Nombre es requerido</small>
                        </error-message>
                        <small v-if="catNameExists" class="text-red-600">Nombre de categoría existente</small>
                    </div>
                    <div>
                        <label for="image" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                            Imagen
                        </label>
                        <div class="flex items-center justify-center w-full">
                            <label for="imageCategorie"
                                   class="flex flex-col items-center justify-center w-full h-80 border-2 border-gray-300 border-dashed rounded-lg cursor-pointer bg-gray-50 dark:hover:bg-bray-800 dark:bg-transparent hover:bg-gray-100 dark:border-gray-600 dark:hover:border-gray-500 dark:hover:bg-zinc-950 ">
                                <div v-if="form.image==null" class="flex flex-col items-center justify-center pt-5 pb-6">
                                    <svg class="w-12 h-12 text-gray-400 dark:text-gray-500"
                                         xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"
                                         color="#000000" fill="none">
                                        <path
                                            d="M17.4776 9.01106C17.485 9.01102 17.4925 9.01101 17.5 9.01101C19.9853 9.01101 22 11.0294 22 13.5193C22 15.8398 20.25 17.7508 18 18M17.4776 9.01106C17.4924 8.84606 17.5 8.67896 17.5 8.51009C17.5 5.46695 15.0376 3 12 3C9.12324 3 6.76233 5.21267 6.52042 8.03192M17.4776 9.01106C17.3753 10.1476 16.9286 11.1846 16.2428 12.0165M6.52042 8.03192C3.98398 8.27373 2 10.4139 2 13.0183C2 15.4417 3.71776 17.4632 6 17.9273M6.52042 8.03192C6.67826 8.01687 6.83823 8.00917 7 8.00917C8.12582 8.00917 9.16474 8.38194 10.0005 9.01101"
                                            stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                            stroke-linejoin="round"></path>
                                        <path
                                            d="M12 13L12 21M12 13C11.2998 13 9.99153 14.9943 9.5 15.5M12 13C12.7002 13 14.0085 14.9943 14.5 15.5"
                                            stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                            stroke-linejoin="round"></path>
                                    </svg>
                                    <p class="mb-2 text-sm text-gray-500 dark:text-gray-400"><span
                                        class="font-semibold">Clic para agregar </span> o desliza la imagen</p>
                                    <p class="text-xs text-gray-500 dark:text-gray-400">PNG, JPG, WEBP</p>
                                </div>
                                <img v-else :src="tempUri" alt="Preview Image" id="previewImage"
                                     class="w-56 h-64 object-cover m-10">
                                <Field id="imageCategorie" type="file" class="hidden" @change="createImagePreview"
                                       name="image"/>
                            </label>

                        </div>
                        <error-message name="image" v-slot="{ message }">
                        <small class="text-red-600">Error: Imagén es requerido</small>
                    </error-message>
                    </div>
                    <div class="flex items-center justify-center gap-2">
                        <button type="submit"
                                class="bg-black text-white hover:bg-zinc-900 dark:bg-white dark:text-black dark:hover:bg-zinc-200 font-medium rounded flex items-center gap-2 transition-colors text-sm px-3.5 py-2.5 ">
                            <svg class="w-5 h-5 text-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                 width="24" height="24" color="#000000" fill="none">
                                <path d="M12 8V16M16 12L8 12" stroke="currentColor" stroke-width="1.5"
                                      stroke-linecap="round" stroke-linejoin="round"></path>
                                <path
                                    d="M22 12C22 6.47715 17.5228 2 12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22C17.5228 22 22 17.5228 22 12Z"
                                    stroke="currentColor" stroke-width="1.5"></path>
                            </svg>
                            Agregar categoría
                        </button>
                        <button type="button"
                                @click="drawer.hide()"
                                data-drawer-hide="drawer-right-example" aria-controls="drawer-right-example"
                                class="border-2 text-zinc-600 hover:bg-zinc-100 border-zinc-300 dark:border-zinc-800 dark:text-white dark:hover:bg-zinc-900  font-medium rounded flex items-center gap-2 transition-colors text-sm px-3.5 py-2.5 close-drawer-right-example">
                            Cancelar
                        </button>
                    </div>
                </Form>
            </div>
        </div>
    </AuthenticatedAdminLayout>
</template>
<script setup lang="ts">
import {Head, usePage} from "@inertiajs/vue3";
import {computed, onMounted, reactive, ref} from 'vue';
import Vue3Datatable from '@bhplugin/vue3-datatable';
import {Form, Field, ErrorMessage} from 'vee-validate';
import * as yup from 'yup';
import '@bhplugin/vue3-datatable/dist/style.css';
import AuthenticatedAdminLayout from "@/Layouts/AuthenticatedAdminLayout.vue";
import {initFlowbite} from "flowbite";
import {Drawer} from 'flowbite';
import {useCategoriesService} from "@/Store/Category";

const loading: any = ref(true);
const total_rows = ref(0);
// set the drawer menu element
const $targetEl = ref();
const drawer = ref();
const options = {
    placement: 'right',
    backdrop: true,
    bodyScrolling: false,
    edge: false,
    edgeOffset: '',
    backdropClasses:
        'bg-gray-900/50 dark:bg-gray-900/80 fixed inset-0 z-30',
    onHide: () => {
        console.log('drawer is hidden');
    },
    onShow: () => {
        console.log('drawer is shown');
    },
    onToggle: () => {
        console.log('drawer has been toggled');
    },
};
const params = reactive({
    current_page: 1,
    pagesize: 10,
    search: '',
    column_filters: [],
});
const rows: any = ref(null);
const page = usePage()
const store = useCategoriesService()
// form init
const form = ref({
    name: null,
    parent_id: page.props.categories[0]?.id,
    category_type: 'principal',
    image: null
})
const fileImage = ref<File|null>()
const tempUri= ref(null)
const schemaForm = computed(() => {
    if (form.value.category_type === 'secondary') {
        return yup.object({
            name: yup.string().required(),
            image: yup.mixed().optional(),
            // parent_id: yup.mixed().required('Categoría principal es requerida')
        })
    } else {
        return yup.object({
            name: yup.string().required(),
            image: yup.mixed().required(),
        })
    }
})
const cols =
    ref([
        {field: 'image', title: 'Imagen'},
        // {field: 'id', title: 'ID', isUnique: true, type: 'number'},
        {field: 'name', title: 'Nombre'},
        {field: 'subcategories', title: 'Subcategoría'},
        {field: 'actions', title: 'Acciones'},
    ]) || [];

onMounted(() => {
    getCategories();
    initFlowbite()
    initCreateDrawer()
});
const initCreateDrawer = () => {
    $targetEl.value = document.getElementById('drawer-right-example');
    drawer.value = new Drawer($targetEl.value, options)
}
const filteredData = computed(() => {
    if (!params.search) {
        return page.props.categories;
    }
    return page.props.categories.filter(row => {
        return Object.values(row).some(value =>
            String(value).toLowerCase().includes(params.search.toLowerCase())
        );
    });
});
const getCategories = async () => {
    try {
        loading.value = true;
        const data = filteredData.value
        rows.value = data;
        total_rows.value = data?.length
    } catch {
    }

    loading.value = false;
};
const onSubmit = async () => {
    if(catNameExists.value){
        return
    }
    try{
        // create new form data
        let formData = new FormData();
        formData.append('name', form.value.name)
        formData.append('parent_id', form.value.parent_id)
        formData.append('image', form.value.image)
        formData.append('category_type', form.value.category_type)
        let {data} = await store.saveCategory(formData)
        console.log(data)
    }catch (e) {

    }
}
const filterAction = () => {
    getCategories();
}
const createImagePreview=(e:any)=>{
   form.value.image= e.target.files[0]
    tempUri.value=URL.createObjectURL(form.value.image)
}
const catNameExists= computed (()=>{
    let cats = page.props.categories
    let exist =false
    console.log(cats)
    cats.map((e)=>{
        if(form.value.name ===e.name && e.parent_id===null && form.value.category_type!=='secondary'){
            exist=true
        }
    })
    return exist
})
</script>
