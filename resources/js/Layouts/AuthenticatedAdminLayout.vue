<script setup lang="ts">
import {onMounted, ref} from 'vue';
import { initFlowbite } from 'flowbite'
import ApplicationLogo from '@/Components/ApplicationLogo.vue';
import Dropdown from '@/Components/Dropdown.vue';
import DropdownLink from '@/Components/DropdownLink.vue';
import NavLink from '@/Components/NavLink.vue';
import ResponsiveNavLink from '@/Components/ResponsiveNavLink.vue';
import { Link } from '@inertiajs/vue3';

const showingNavigationDropdown = ref(false);
onMounted(()=>{
    initFlowbite()
    //init dark mode
    // DARK MODE TOGGLE BUTTON
    var themeToggleDarkIcon = document.getElementById("theme-toggle-dark-icon");
    var themeToggleLightIcon = document.getElementById("theme-toggle-light-icon");
    if (
        localStorage.getItem("color-theme") === "dark" ||
        (!("color-theme" in localStorage) &&
            window.matchMedia("(prefers-color-scheme: dark)").matches)
    ) {
        themeToggleLightIcon?.classList.remove("hidden");
    } else {
        themeToggleDarkIcon?.classList.remove("hidden");
    }
})
const themeToggle = () =>{
    // DARK MODE TOGGLE BUTTON
    var themeToggleDarkIcon = document.getElementById("theme-toggle-dark-icon");
    var themeToggleLightIcon = document.getElementById("theme-toggle-light-icon");
    console.log('here')
    if (
        localStorage.getItem("color-theme") === "dark" ||
        (!("color-theme" in localStorage) &&
            window.matchMedia("(prefers-color-scheme: dark)").matches)
    ) {
        themeToggleLightIcon?.classList.remove("hidden");
    } else {
        themeToggleDarkIcon?.classList.remove("hidden");
    }

    var themeToggleBtn = document.getElementById("theme-toggle");

     if (localStorage.getItem("color-theme")) {
            if (localStorage.getItem("color-theme") === "light") {
                document.documentElement.classList.add("dark");
                localStorage.setItem("color-theme", "dark");

                themeToggleLightIcon?.classList.add("hidden");
            } else {
                document.documentElement.classList.remove("dark");
                localStorage.setItem("color-theme", "light");
                themeToggleDarkIcon?.classList.add("hidden");
            }
        } else {
            if (document.documentElement.classList.contains("dark")) {
                document.documentElement.classList.remove("dark");
                localStorage.setItem("color-theme", "light");
            } else {
                document.documentElement.classList.add("dark");
                localStorage.setItem("color-theme", "dark");
            }
        }
}
const openSideMenuBar= ref(false);
const toggleMenu=()=>{
    openSideMenuBar.value = !openSideMenuBar.value
}
</script>

<template>
    <div>
        <header>
            <nav class="fixed top-0 z-30 w-full bg-white border-b border-gray-200 dark:bg-black dark:border-zinc-900">
                <div class="py-3">
                    <div class="flex justify-between items-center">
                        <div class="flex items-center justify-start rtl:justify-end  md:min-w-72 ps-4">
                            <button data-drawer-target="sidebar-multi-level-sidebar"
                                    data-drawer-toggle="sidebar-multi-level-sidebar" aria-controls="sidebar-multi-level-sidebar"
                                    type="button"
                                    @click="toggleMenu()"
                                    data-drawer-backdrop="false"
                                    class="inline-flex items-center p-2 text-sm text-gray-500 rounded-lg xl:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-zinc-950 dark:focus:ring-gray-600">
                                <span class="sr-only">Open sidebar</span>
                                <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path clip-rule="evenodd" fill-rule="evenodd"
                                          d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z">
                                    </path>
                                </svg>
                            </button>
                            <a class="flex md:me-24">
                                <img class="h-8 me-3 w-8 object-cover rounded-full"
                                     alt="Entre Cheros logo" />
                                <span
                                    class="self-center text-xl font-semibold sm:text-2xl font-primary whitespace-nowrap dark:text-white">
                            {{ $inertia.page.props.appName }}
                        </span>
                            </a>
                        </div>
                        <div class="flex justify-end items-center px-4 w-auto md:w-full xl:justify-between">
                            <div class="text-gray-500 hidden xl:block">

                            </div>
                            <div class="flex items-center gap-2">
                                <div class="flex items-center justify-center">
                                    <button type="button" data-dropdown-toggle="dropdown-alerts"
                                            class="relative inline-flex items-center text-sm font-medium text-center text-white focus:outline-none p-2 rounded-lg hover:bg-gray-100 dark:hover:bg-zinc-950 focus:ring-4 focus:ring-gray-300 dark:focus:ring-zinc-800">
                                        <svg class="flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 group-hover:text-gray-900 dark:text-gray-400 dark:group-hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 5.365V3m0 2.365a5.338 5.338 0 0 1 5.133 5.368v1.8c0 2.386 1.867 2.982 1.867 4.175 0 .593 0 1.193-.538 1.193H5.538c-.538 0-.538-.6-.538-1.193 0-1.193 1.867-1.789 1.867-4.175v-1.8A5.338 5.338 0 0 1 12 5.365Zm-8.134 5.368a8.458 8.458 0 0 1 2.252-5.714m14.016 5.714a8.458 8.458 0 0 0-2.252-5.714M8.54 17.901a3.48 3.48 0 0 0 6.92 0H8.54Z"/>
                                        </svg>

                                        <span class="sr-only">Notifications</span>
                                        <div
                                            class="absolute inline-flex items-center justify-center w-6 h-6 text-xs font-bold text-white bg-red-500 border-2 border-white rounded-full -top-1 -end-1 dark:border-black">
                                            3
                                        </div>
                                    </button>
                                    <div class="z-50 hidden my-4 text-base list-none bg-white divide-y divide-gray-100 rounded shadow dark:bg-gray-700 dark:divide-gray-600 sm:w-80 w-full"
                                         id="dropdown-alerts">
                                <span class="block p-3 text-center text-gray-700 dark:text-gray-300">

                                    Notificaciones
                                </span>
                                        <ul role="none">
                                            <li>
                                                <a href="#"
                                                   class="flex items-start gap-4 px-4 py-3 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-600 dark:hover:text-white"
                                                   role="menuitem">
                                                    <img
                                                        class="w-10 h-10 rounded-full object-cover" alt="">
                                                    <div class="flex flex-col gap-2">
                                                        Nuevo ticket abierto
                                                        <span class="text-xs text-blue-500">Hace 2 minutos</span>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#"
                                                   class="flex items-start gap-4 px-4 py-3 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-600 dark:hover:text-white"
                                                   role="menuitem">
                                                    <img
                                                        class="w-10 h-10 rounded-full object-cover" alt="">
                                                    <div class="flex flex-col gap-2">
                                                        Nuevo ticket abierto
                                                        <span class="text-xs text-blue-500">Hace 2 minutos</span>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#"
                                                   class="flex items-start gap-4 px-4 py-3 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-600 dark:hover:text-white"
                                                   role="menuitem">
                                                    <img
                                                        class="w-10 h-10 rounded-full object-cover" alt="">
                                                    <div class="flex flex-col gap-2">
                                                        Nuevo ticket abierto
                                                        <span class="text-xs text-blue-500">Hace 2 minutos</span>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#"
                                                   class="flex p-3 gap-2 justify-center items-center text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-600 dark:hover:text-white border-t border-gray-100 dark:border-gray-600"
                                                   role="menuitem">
                                                    Ver todas
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="flex items-center justify-center">
                                     <button id="theme-toggle" type="button" @click="themeToggle()"
                                                class="p-2 rounded-lgtext-gray-500 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-700 focus:outline-none focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 rounded-lg text-sm p-2.5 mr-3">
                                            <svg id="theme-toggle-dark-icon" class="hidden w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                                                 xmlns="http://www.w3.org/2000/svg">
                                                <path d="M17.293 13.293A8 8 0 016.707 2.707a8.001 8.001 0 1010.586 10.586z"></path>
                                            </svg>
                                            <svg id="theme-toggle-light-icon" class="hidden w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                                                 xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M10 2a1 1 0 011 1v1a1 1 0 11-2 0V3a1 1 0 011-1zm4 8a4 4 0 11-8 0 4 4 0 018 0zm-.464 4.95l.707.707a1 1 0 001.414-1.414l-.707-.707a1 1 0 00-1.414 1.414zm2.12-10.607a1 1 0 010 1.414l-.706.707a1 1 0 11-1.414-1.414l.707-.707a1 1 0 011.414 0zM17 11a1 1 0 100-2h-1a1 1 0 100 2h1zm-7 4a1 1 0 011 1v1a1 1 0 11-2 0v-1a1 1 0 011-1zM5.05 6.464A1 1 0 106.465 5.05l-.708-.707a1 1 0 00-1.414 1.414l.707.707zm1.414 8.486l-.707.707a1 1 0 01-1.414-1.414l.707-.707a1 1 0 011.414 1.414zM4 11a1 1 0 100-2H3a1 1 0 000 2h1z"
                                                    fill-rule="evenodd" clip-rule="evenodd"></path>
                                            </svg>
                                    </button>
                                </div>
                                <div class="ms-2">
                                    <button type="button"
                                            class="flex text-sm bg-gray-800 rounded-full focus:ring-4 focus:ring-gray-300 dark:focus:ring-zinc-800"
                                            aria-expanded="false" data-dropdown-toggle="dropdown-user">
                                        <span class="sr-only">Open user menu</span>
                                        <img class="w-8 h-8 rounded-full object-cover"
                                             alt="user photo">
                                    </button>
                                </div>
                                <div class="z-50 hidden my-4 text-base list-none bg-white divide-y divide-gray-100 rounded shadow dark:bg-zinc-950 dark:divide-zinc-900 overflow-hidden"
                                     id="dropdown-user">
                                    <div class="px-4 py-3" role="none">
                                        <p class="text-sm text-gray-900 dark:text-white" role="none">

                                        </p>
                                        <p class="text-sm font-bold text-blue-500 truncate" role="none">

                                        </p>
                                    </div>
                                    <ul role="none">
                                        <li>
                                            <a
                                               class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-zinc-900 dark:hover:text-white"
                                               role="menuitem">
                                                Dashboard</a>
                                        </li>
                                        <li>
                                            <a
                                                :href="route('profile.edit')"
                                                class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-zinc-900 dark:hover:text-white"
                                                role="menuitem">
                                                Perfil</a>
                                        </li>
                                        <li>
                                            <a href="#"
                                               class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-zinc-900 dark:hover:text-white"
                                               role="menuitem">Configuración</a>
                                        </li>
                                        <li>
                                            <a href="#"
                                               class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-zinc-900 dark:hover:text-white"
                                               role="menuitem">Ganancias</a>
                                        </li>
                                        <li class="border-t dark:border-zinc-900 border-gray-100">
                                            <DropdownLink :href="route('logout')" method="post" as="button">
                                               Cerrar sesión
                                            </DropdownLink>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
        </header>
        <aside id="sidebar-multi-level-sidebar"
               ref="sideMenu"
               class="pt-12 fixed top-0 left-0 z-20 h-screen transition-transform w-72 border border-zinc-200 dark:border-zinc-900"
               aria-label="Sidebar"
               :class="openSideMenuBar?'transform-none':'-translate-x-full xl:translate-x-0'"
        >
            <div class="h-full px-3 py-4 overflow-y-auto bg-gray-50 dark:bg-black mt-2">
                <ul class="space-y-2 font-medium">
                    <li>
                        <a
                           class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-zinc-950 group">
                            <svg class="flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 group-hover:text-gray-900 dark:text-gray-400 dark:group-hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.143 4H4.857A.857.857 0 0 0 4 4.857v4.286c0 .473.384.857.857.857h4.286A.857.857 0 0 0 10 9.143V4.857A.857.857 0 0 0 9.143 4Zm10 0h-4.286a.857.857 0 0 0-.857.857v4.286c0 .473.384.857.857.857h4.286A.857.857 0 0 0 20 9.143V4.857A.857.857 0 0 0 19.143 4Zm-10 10H4.857a.857.857 0 0 0-.857.857v4.286c0 .473.384.857.857.857h4.286a.857.857 0 0 0 .857-.857v-4.286A.857.857 0 0 0 9.143 14Zm10 0h-4.286a.857.857 0 0 0-.857.857v4.286c0 .473.384.857.857.857h4.286a.857.857 0 0 0 .857-.857v-4.286a.857.857 0 0 0-.857-.857Z"/>
                            </svg>
                            <span class="ms-3">Dashboard</span>
                        </a>
                    </li>
                    <li>
                        <button type="button"
                                class="flex items-center w-full p-2 text-base text-gray-900 transition duration-75 rounded-lg group dark:hover:bg-zinc-950 dark:text-white hover:bg-gray-100"
                                aria-controls="dropdown-example" data-collapse-toggle="dropdown-ecommerce">
                            <svg class="flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 group-hover:text-gray-900 dark:text-gray-400 dark:group-hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 4h1.5L9 16m0 0h8m-8 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm8 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm-8.5-3h9.25L19 7H7.312"/>
                            </svg>
                            <span class="flex-1 ms-3 text-left rtl:text-right whitespace-nowrap">E-commerce</span>
                            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
                            </svg>
                        </button>
                        <ul id="dropdown-ecommerce" class="hidden py-2 space-y-2">
                            <li>
                                <a
                                   class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-zinc-950">
                                    categories
                                </a>
                            </li>
                            <li>
                                <a
                                   class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-zinc-950">
                                    brands
                                </a>
                            </li>
                            <li>
                                <a
                                   class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-zinc-950">
                                    products
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <button type="button"
                                class="flex items-center w-full p-2 text-base text-gray-900 transition duration-75 rounded-lg group dark:hover:bg-zinc-950 dark:text-white hover:bg-gray-100"
                                aria-controls="dropdown-store" data-collapse-toggle="dropdown-store">
                            <svg class="flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 group-hover:text-gray-900 dark:text-gray-400 dark:group-hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 12c.263 0 .524-.06.767-.175a2 2 0 0 0 .65-.491c.186-.21.333-.46.433-.734.1-.274.15-.568.15-.864a2.4 2.4 0 0 0 .586 1.591c.375.422.884.659 1.414.659.53 0 1.04-.237 1.414-.659A2.4 2.4 0 0 0 12 9.736a2.4 2.4 0 0 0 .586 1.591c.375.422.884.659 1.414.659.53 0 1.04-.237 1.414-.659A2.4 2.4 0 0 0 16 9.736c0 .295.052.588.152.861s.248.521.434.73a2 2 0 0 0 .649.488 1.809 1.809 0 0 0 1.53 0 2.03 2.03 0 0 0 .65-.488c.185-.209.332-.457.433-.73.1-.273.152-.566.152-.861 0-.974-1.108-3.85-1.618-5.121A.983.983 0 0 0 17.466 4H6.456a.986.986 0 0 0-.93.645C5.045 5.962 4 8.905 4 9.736c.023.59.241 1.148.611 1.567.37.418.865.667 1.389.697Zm0 0c.328 0 .651-.091.94-.266A2.1 2.1 0 0 0 7.66 11h.681a2.1 2.1 0 0 0 .718.734c.29.175.613.266.942.266.328 0 .651-.091.94-.266.29-.174.537-.427.719-.734h.681a2.1 2.1 0 0 0 .719.734c.289.175.612.266.94.266.329 0 .652-.091.942-.266.29-.174.536-.427.718-.734h.681c.183.307.43.56.719.734.29.174.613.266.941.266a1.819 1.819 0 0 0 1.06-.351M6 12a1.766 1.766 0 0 1-1.163-.476M5 12v7a1 1 0 0 0 1 1h2v-5h3v5h7a1 1 0 0 0 1-1v-7m-5 3v2h2v-2h-2Z"/>
                            </svg>
                            <span class="flex-1 ms-3 text-left rtl:text-right whitespace-nowrap">
                      store
                    </span>
                            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
                            </svg>

                        </button>
                        <ul id="dropdown-store" class="hidden py-2 space-y-2">
                            <li>
                                <a
                                   class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-zinc-950">
                                    flash_offers
                                </a>
                            </li>
                            <li>
                                <a
                                   class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-zinc-950">
                                    popups
                                </a>
                            </li>
                            <li>
                                <a href="#"
                                   class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-zinc-950">
                                    Estrategia de ventas
                                </a>
                            </li>
                            <li>
                                <a href="#"
                                   class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-zinc-950">
                                    Administrar reseñas
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#"
                           class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-zinc-950 group">
                            <svg class="flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 group-hover:text-gray-900 dark:text-gray-400 dark:group-hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                <path fill-rule="evenodd" d="M4 4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V6a2 2 0 0 0-2-2H4Zm16 7H4v7h16v-7ZM5 8a1 1 0 0 1 1-1h.01a1 1 0 0 1 0 2H6a1 1 0 0 1-1-1Zm4-1a1 1 0 0 0 0 2h.01a1 1 0 0 0 0-2H9Zm2 1a1 1 0 0 1 1-1h.01a1 1 0 1 1 0 2H12a1 1 0 0 1-1-1Z" clip-rule="evenodd"/>
                            </svg>
                            <span class="flex-1 ms-3 whitespace-nowrap">Pedidos</span>
                        </a>
                    </li>
                    <li>

                </li>
                    <li>
                        <a href="#"
                           class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-zinc-950 group">
                            <svg class="flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 group-hover:text-gray-900 dark:text-gray-400 dark:group-hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 9h5m3 0h2M7 12h2m3 0h5M5 5h14a1 1 0 0 1 1 1v9a1 1 0 0 1-1 1h-6.616a1 1 0 0 0-.67.257l-2.88 2.592A.5.5 0 0 1 8 18.477V17a1 1 0 0 0-1-1H5a1 1 0 0 1-1-1V6a1 1 0 0 1 1-1Z"/>
                            </svg>
                            <span class="flex-1 ms-3 whitespace-nowrap">
                        Live chat
                    </span>
                            <span
                                class="inline-flex items-center justify-center w-3 h-3 p-3 ms-3 text-sm font-medium text-blue-100 bg-blue-700 rounded-full dark:bg-blue-900 dark:text-blue-300">3</span>
                        </a>
                    </li>
                    <li>
                        <a
                           class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-zinc-950 group">
                            <svg class="flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 group-hover:text-gray-900 dark:text-gray-400 dark:group-hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="square" stroke-linejoin="round" stroke-width="2" d="M10 19H5a1 1 0 0 1-1-1v-1a3 3 0 0 1 3-3h2m10 1a3 3 0 0 1-3 3m3-3a3 3 0 0 0-3-3m3 3h1m-4 3a3 3 0 0 1-3-3m3 3v1m-3-4a3 3 0 0 1 3-3m-3 3h-1m4-3v-1m-2.121 1.879-.707-.707m5.656 5.656-.707-.707m-4.242 0-.707.707m5.656-5.656-.707.707M12 8a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z"/>
                            </svg>
                            <span class="flex-1 ms-3 whitespace-nowrap">Usuarios</span>
                        </a>
                    </li>
                    <li>
                        <button type="button"
                                class="flex items-center w-full p-2 text-base text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-100 dark:text-white dark:hover:bg-zinc-950"
                                aria-controls="dropdown-customers" data-collapse-toggle="dropdown-customers">
                            <svg class="flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 group-hover:text-gray-900 dark:text-gray-400 dark:group-hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                <path fill-rule="evenodd" d="M8 4a4 4 0 1 0 0 8 4 4 0 0 0 0-8Zm-2 9a4 4 0 0 0-4 4v1a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2v-1a4 4 0 0 0-4-4H6Zm7.25-2.095c.478-.86.75-1.85.75-2.905a5.973 5.973 0 0 0-.75-2.906 4 4 0 1 1 0 5.811ZM15.466 20c.34-.588.535-1.271.535-2v-1a5.978 5.978 0 0 0-1.528-4H18a4 4 0 0 1 4 4v1a2 2 0 0 1-2 2h-4.535Z" clip-rule="evenodd"/>
                            </svg>

                            <span class="flex-1 ms-3 text-left rtl:text-right whitespace-nowrap">Clientes</span>
                            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
                            </svg>
                        </button>
                        <ul id="dropdown-customers" class="hidden py-2 space-y-2">
                            <li>
                                <a
                                   class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-zinc-950">
                                    Clientes registrados
                                </a>
                            </li>
                            <li>
                                <a href="#"
                                   class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-zinc-950">
                                    Tickets de soporte
                                </a>
                            </li>
                            <li>
                                <a href="#"
                                   class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-zinc-950">
                                    Suscripciones
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <button type="button"
                                class="flex items-center w-full p-2 text-base text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-100 dark:text-white dark:hover:bg-zinc-950"
                                aria-controls="dropdown-settings" data-collapse-toggle="dropdown-settings">
                            <svg class="flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 group-hover:text-gray-900 dark:text-gray-400 dark:group-hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                <path fill-rule="evenodd" d="M5 5a2 2 0 0 0-2 2v3a1 1 0 0 0 1 1h16a1 1 0 0 0 1-1V7a2 2 0 0 0-2-2H5Zm9 2a1 1 0 1 0 0 2h.01a1 1 0 1 0 0-2H14Zm3 0a1 1 0 1 0 0 2h.01a1 1 0 1 0 0-2H17ZM3 17v-3a1 1 0 0 1 1-1h16a1 1 0 0 1 1 1v3a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2Zm11-2a1 1 0 1 0 0 2h.01a1 1 0 1 0 0-2H14Zm3 0a1 1 0 1 0 0 2h.01a1 1 0 1 0 0-2H17Z" clip-rule="evenodd"/>
                            </svg>
                            <span class="flex-1 ms-3 text-left rtl:text-right whitespace-nowrap">
                        Configuración
                    </span>

                            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
                            </svg>
                        </button>
                        <ul id="dropdown-settings" class="hidden py-2 space-y-2">
                            <li>
                                <a
                                   class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-zinc-950">
                                    Ajustes generales
                                </a>
                            </li>
                            <li>
                                <a
                                   class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-zinc-950">
                                    Políticas
                                </a>
                            </li>
                            <li>
                                <a
                                   class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-zinc-950">
                                    Preguntas frecuentes
                                </a>
                            </li>
                            <li>
                                <a href="#"
                                   class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-zinc-950">
                                    Crear páginas
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </aside>
        <body class="font-secondary dark:bg-black">
        <div id="overlay" class="bg-gray-900/80 dark:bg-zinc-900/90 fixed inset-0 z-10 hidden"></div>
        <main class="bg-gray-50 dark:bg-gray-900 h-full">
            <div class="xl:ml-72 mt-16">
<!--                <div class="pt-4 px-4 xl:hidden">-->
<!--                    @include('layouts.__partials.breadcrumb')-->
<!--                </div>-->
                <!-- Page Heading -->
                <header class="bg-white dark:bg-gray-800 shadow" v-if="$slots.header">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        <slot name="header" />
                    </div>
                </header>

                <!-- Page Content -->
                <main>
                    <slot />
                </main>
            </div>
        </main>
        </body>
    </div>
</template>
