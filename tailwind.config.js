import defaultTheme from "tailwindcss/defaultTheme";
import forms from "@tailwindcss/forms";

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
        "./storage/framework/views/*.php",
        "./resources/views/**/*.blade.php",
        "./resources/js/**/*.vue",
        "node_modules/flowbite-vue/**/*.{js,jsx,ts,tsx,vue}",
        "node_modules/flowbite/**/*.{js,jsx,ts,tsx}",
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ["Figtree", ...defaultTheme.fontFamily.sans],
                din_b: ["din-b", ...defaultTheme.fontFamily.sans],
                din_i: ["din-i", ...defaultTheme.fontFamily.sans],
                din_r: ["din-r", ...defaultTheme.fontFamily.sans],
                dine_b: ["dine-b", ...defaultTheme.fontFamily.sans],
                dine_i: ["dine-i", ...defaultTheme.fontFamily.sans],
                dine_r: ["dine-r", ...defaultTheme.fontFamily.sans],
                dinc_b: ["dinc-b", ...defaultTheme.fontFamily.sans],
                dinc_r: ["dinc-r", ...defaultTheme.fontFamily.sans],
                pluto_m: ["pluto-m", ...defaultTheme.fontFamily.sans],
                pluto_r: ["pluto-r", ...defaultTheme.fontFamily.sans],
            },
            colors: {
                pink: "#ffc9fa",
                darkPink: "#FF69B4",
                blue: "#6e83be",
                lBlue: "#93affd",
                blueSelected: "#41507a",
                pinkSelected: "#e296e2",
                darkBlue: "#254183",
                green: "#5ca49b",
                gray: "#8f8f8f",
                lightGray: "#e9efff",
                lightBlue: "#93AFFD",
                lightBlue2: "#6E83BE",
                peach: "#e8cad2",
                darkBlueSelected: "#84a0e3",
                pinkSelected: "#e296e2",
                greenSelected: "#34756b",
                lightBlue2Selected: "#236baf",
            },
        },
    },

    plugins: [forms, require("flowbite/plugin")],
    //     dark mode class
    darkMode: "class",
};
