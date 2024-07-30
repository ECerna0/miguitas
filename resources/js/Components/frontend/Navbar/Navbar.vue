<script>
import InputSearchNavbar from "@/Components/frontend/Navbar/InputSearchNavbar.vue";
import NavbarLogo from "@/Components/frontend/Navbar/NavbarLogo.vue";
import NavbarLinks from "@/Components/frontend/Navbar/NavbarLinks.vue";

export default {
    name: "Navbar",
    components: {
        InputSearchNavbar,
        NavbarLogo,
        NavbarLinks,
    },
};
</script>

<template>
    <nav class="bg-white p-4 text-violet-500">
        <div class="flex justify-between items-center">
            <NavbarLogo />
            <div class="mx-10">
                <div class="flex justify-end gap-4">
                    <InputSearchNavbar />
                    <div class="flex justify-end items-center gap-4">
                        <a href="" class="group">
                            <svg
                                class="group-hover:fill-blue w-7 h-7 stroke-blue"
                                viewBox="0 0 39 36"
                                fill="none"
                                xmlns="http://www.w3.org/2000/svg"
                            >
                                <path
                                    class="svg-header-fixer"
                                    d="M28.8382 1C22.5832 1 19.5 7.18178 19.5 7.18178C19.5 7.18178 16.4168 1 10.1618 1C5.07848 1 1.05301 5.26351 1.00098 10.351C0.895006 20.9112 9.35734 28.4211 18.6329 34.7323C18.8886 34.9067 19.1907 35 19.5 35C19.8093 35 20.1115 34.9067 20.3671 34.7323C29.6417 28.4211 38.104 20.9112 37.999 10.351C37.947 5.26351 33.9215 1 28.8382 1Z"
                                    stroke="var(--blue)"
                                    stroke-width="2"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                />
                            </svg>
                        </a>
                        <a href="" class="group">
                            <svg
                                class="group-hover:fill-blue w-7 h-7 stroke-blue"
                                viewBox="0 0 41 36"
                                fill="none"
                                xmlns="http://www.w3.org/2000/svg"
                            >
                                <path
                                    class="svg-header-fixer"
                                    d="M13.3441 34.9463C14.1963 34.9463 14.8871 34.2555 14.8871 33.4033C14.8871 32.5511 14.1963 31.8603 13.3441 31.8603C12.4919 31.8603 11.8011 32.5511 11.8011 33.4033C11.8011 34.2555 12.4919 34.9463 13.3441 34.9463Z"
                                    stroke="var(--blue)"
                                    stroke-width="2"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                />
                                <path
                                    class="svg-header-fixer"
                                    d="M34.9464 34.9463C35.7985 34.9463 36.4894 34.2555 36.4894 33.4033C36.4894 32.5511 35.7985 31.8603 34.9464 31.8603C34.0942 31.8603 33.4033 32.5511 33.4033 33.4033C33.4033 34.2555 34.0942 34.9463 34.9464 34.9463Z"
                                    stroke="var(--blue)"
                                    stroke-width="2"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                />
                                <path
                                    d="M1 1H7.17206L11.8011 27.2313H36.4894"
                                    stroke="var(--blue)"
                                    stroke-width="2"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                />
                                <path
                                    class="svg-header-fixer"
                                    d="M11.7959 21.0592H35.8113C35.9896 21.0593 36.1622 20.9976 36.3 20.8845C36.4378 20.7715 36.5323 20.6141 36.5672 20.4391L39.34 6.55197C39.3625 6.43999 39.3596 6.32442 39.332 6.21363C39.3045 6.10282 39.2525 5.99955 39.1802 5.91127C39.1079 5.82296 39.017 5.75185 38.9139 5.70305C38.8107 5.65424 38.6983 5.62896 38.5841 5.62905H8.71507"
                                    stroke="var(--blue)"
                                    stroke-width="2"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                />
                            </svg>
                        </a>
                        <a href="" class="group">
                            <svg
                                class="group-hover:fill-blue w-7 h-7 stroke-blue"
                                viewBox="0 0 34 36"
                                fill="none"
                                xmlns="http://www.w3.org/2000/svg"
                            >
                                <path
                                    class="svg-header-fixer"
                                    d="M23.9544 8.84607C23.631 13.1671 20.3233 16.6921 16.6921 16.6921C13.0609 16.6921 9.74749 13.168 9.42976 8.84607C9.09964 4.35093 12.3182 1 16.6921 1C21.066 1 24.2847 4.43265 23.9544 8.84607Z"
                                    stroke="var(--blue)"
                                    stroke-width="2"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                />
                                <path
                                    class="svg-header-fixer"
                                    d="M16.6917 21.9231C9.58151 21.9231 2.36503 25.8462 1.02962 33.251C0.868619 34.1435 1.37369 35 2.30783 35H31.0757C32.0106 35 32.5157 34.1435 32.3548 33.251C31.0184 25.8462 23.802 21.9231 16.6917 21.9231Z"
                                    stroke="var(--blue)"
                                    stroke-width="2"
                                    stroke-miterlimit="10"
                                />
                            </svg>
                        </a>
                    </div>
                </div>
                <NavbarLinks />
            </div>
        </div>
    </nav>
</template>
