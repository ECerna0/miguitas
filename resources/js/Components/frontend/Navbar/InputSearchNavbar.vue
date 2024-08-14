<script setup>
import { ref } from "vue";
import SearchIcon from "@Icons/SearchIcon.vue";

const searchInput = ref(null);

const handleSearch = () => {
    console.log(searchInput.value.value);
};
</script>

<template>
    <div
        class="flex flex-[2] border-2 border-blue rounded-full overflow-hidden"
    >
        <input
            type="text"
            class="border-none h-10 ps-6 focus:outline-none focus:border-none focus:ring-0 w-full font-dine_r"
            ref="searchInput"
            @input="handleSearch"
        />
        <button
            class="flex justify-center items-center border-s-2 bg-pink hover:bg-pinkSelected border-blue w-14 h-10 ms-auto"
        >
            <SearchIcon class="stroke-darkBlue" />
        </button>
    </div>
</template>
