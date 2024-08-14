<script setup>
import PhoneIcon from "@Icons/PhoneIcon.vue";
import AddressIcon from "@Icons/AddressIcon.vue";
import FooterLink from "@Frontend/Footer/FooterLink.vue";
import WhatsAppIcon from "@Icons/WhatsAppIcon.vue";
import MailIcon from "@Icons/MailIcon.vue";
import FacebookIcon from "@Icons/FacebookIcon.vue";
import XIcon from "@Icons/XIcon.vue";
import InstagramIcon from "@Icons/InstagramIcon.vue";
</script>

<template>
    <div class="flex gap-10 mt-10">
        <div class="flex flex-col gap-2 font-dine_r">
            <h2 class="font-bold text-lg text-pink uppercase">Inicio</h2>
            <ul class="flex flex-col gap-2 text-sm text-white">
                <li>
                    <FooterLink href="" text="Inicio" />
                </li>
                <li>
                    <FooterLink href="" text="Tienda" />
                </li>
                <li><FooterLink href="" text="Preguntas frecuentes FAQ" /></li>
                <li>
                    <FooterLink href="" text="Conócenos" />
                </li>
                <li>
                    <FooterLink href="" text="Blog" />
                </li>
                <li>
                    <FooterLink href="" text="Galería" />
                </li>
                <li>
                    <FooterLink href="" text="Contáctanos" />
                </li>
            </ul>
        </div>
        <div class="flex flex-col gap-2 font-dine_r">
            <h2 class="font-bold text-lg text-pink uppercase">
                Términos y condiciones
            </h2>
            <ul class="flex flex-col gap-2 w-64 text-sm text-white">
                <li>
                    <FooterLink href="" text="Condiciones de uso" />
                </li>
                <li>
                    <FooterLink href="" text="Política de privacidad" />
                </li>
                <li>
                    <FooterLink href="" text="Garantías y Cambios" />
                </li>
                <li>
                    <FooterLink
                        href=""
                        text="Política de Reversión de pagos y Derecho de retracto"
                    />
                </li>
                <li>
                    <FooterLink
                        href=""
                        text="Restricciones y Políticas de Promociones"
                    />
                </li>
                <li>
                    <FooterLink href="" text="Política de Cookies" />
                </li>
            </ul>
        </div>
        <div class="flex flex-col gap-2 w-80 font-pluto_m">
            <h2 class="font-bold text-lg text-pink uppercase">Contáctanos</h2>
            <ul class="flex flex-col gap-2 font-medium text-sm text-white">
                <li class="flex items-center gap-2">
                    <AddressIcon class="fill-white" />
                    Antiguo Cuscatlán, Col Cumbres de Cuscatlán, La Libertad, El
                    Salvador.
                </li>
                <li class="flex items-center gap-2">
                    <PhoneIcon class="fill-white" />
                    (503) 2243-4190
                </li>
                <li class="flex items-center gap-2">
                    <WhatsAppIcon class="fill-white" />
                    (503) 7910-1241
                </li>
                <li class="flex items-center gap-2">
                    <MailIcon class="fill-white" />
                    administracion@miguitassv.com
                </li>
            </ul>
        </div>
        <div class="ms-10">
            <div>
                <p class="font-bold font-dine_r text-white">
                    Sigamos en contacto
                </p>
                <div class="flex items-center gap-2 mt-2">
                    <a href="">
                        <FacebookIcon />
                    </a>
                    <a href="">
                        <XIcon />
                    </a>
                    <a href="">
                        <InstagramIcon />
                    </a>
                </div>
            </div>
            <div class="mt-16">
                <div class="flex items-center gap-4">
                    <img
                        src="/images/sello1.png"
                        class="w-28 h-28 object-cover"
                        alt="Sello 1"
                    />
                    <img
                        src="/images/sello2.png"
                        class="w-28 h-28 object-cover"
                        alt="Sello 2"
                    />
                </div>
            </div>
        </div>
    </div>
</template>
