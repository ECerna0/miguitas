<script setup>
import InputSearchNavbar from "@Frontend/Navbar/InputSearchNavbar.vue";
import Logo from "@Frontend/Logo.vue";
import NavbarLinks from "@Frontend/Navbar/NavbarLinks.vue";
import HeartIcon from "@Icons/HeartIcon.vue";
import CartIcon from "@Icons/CartIcon.vue";
import UserIcon from "@Icons/UserIcon.vue";
</script>

<template>
    <nav class="bg-white p-4 text-violet-500">
        <div class="flex justify-between items-center">
            <Logo />
            <div class="mx-10">
                <div class="flex justify-end gap-4">
                    <InputSearchNavbar />
                    <div class="flex justify-end items-center gap-4">
                        <a href="" class="group">
                            <HeartIcon
                                class="group-hover:fill-blue w-7 h-7 stroke-blue"
                            />
                        </a>
                        <a href="" class="group">
                            <CartIcon
                                class="group-hover:fill-blue w-7 h-7 stroke-blue"
                            />
                        </a>
                        <a href="" class="group">
                            <UserIcon
                                class="group-hover:fill-blue w-7 h-7 stroke-blue"
                            />
                        </a>
                    </div>
                </div>
                <NavbarLinks />
            </div>
        </div>
    </nav>
</template>
