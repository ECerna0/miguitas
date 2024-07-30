import {ref} from "vue";
import {defineStore} from "pinia";
import CategoriesService from "@/Services/CategoriesService";


export interface CategoriesType {
    id?: number,
    name?: string,
    image?: string,
    updated_at?: string,
    created_at?: string
}

export const useCategoriesService = defineStore("communicationsType", () => {
    const categoriesType = ref<CategoriesType>({} as CategoriesType);

    function saveCategory(payload: any) {
        return CategoriesService.CreateNewCategory(payload);
    }
    function updateCategory(payload: any, id: number) {
        return CategoriesService.UpdateCategory(payload, id);
    }

    function getCategories() {
        return CategoriesService.GetCategories();
    }

    return {
        saveCategory,
        getCategories,
        categoriesType,
        updateCategory
    };
});
