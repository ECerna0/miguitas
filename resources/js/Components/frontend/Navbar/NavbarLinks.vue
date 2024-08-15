<script setup>
import NavbarLink from "@/Components/frontend/Navbar/NavbarLink.vue";
import WhatsAppIcon from "@Icons/WhatsAppIcon.vue";

const links = [
    { href: route("home"), text: "Inicio" },
    { href: route("shop.index"), text: "Tienda" },
    { href: "/faq", text: "Preguntas frecuentes" },
    { href: "/about", text: "Conócenos" },
    { href: "/blog", text: "Blog" },
    { href: "/gallery", text: "Galería" },
    { href: "/contact", text: "Contactarnos" },
];
</script>
<template>
    <ul class="flex justify-center items-center gap-10 pt-4">
        <li v-for="link in links" :key="link.href">
            <NavbarLink :href="link.href" :text="link.text" />
        </li>
        <li>
            <a href="" class="group">
                <WhatsAppIcon
                    class="group-hover:fill-blue-selected w-10 h-10 fill-blue"
                />
            </a>
        </li>
    </ul>
</template>
