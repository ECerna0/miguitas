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
                "dark-pink": "#FF69B4",
                blue: "#6e83be",
                "light-blue": "#93affd",
                "blue-selected": "#41507a",
                "pink-selected": "#e296e2",
                "dark-blue": "#254183",
                green: "#5ca49b",
                gray: "#8f8f8f",
                "light-gray": "#e9efff",
                "light-blue-2": "#6E83BE",
                peach: "#e8cad2",
                "dark-blue-selected": "#84a0e3",
                "green-selected": "#34756b",
                "light-blue-2-selected": "#236baf",
            },
        },
    },

    plugins: [forms, require("flowbite/plugin")],
    //     dark mode class
    darkMode: "class",
};
