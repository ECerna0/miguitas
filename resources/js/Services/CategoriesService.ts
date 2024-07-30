import axios from "axios";

let base_url = '/admin/cat';
export default {
    CreateNewCategory(payload: any) {
        return axios.post(base_url, payload);
    },
    UpdateCategory(payload: any, id: number) {
        return axios.post(base_url + '/' + id, payload);
    },
    GetCategories() {
        return axios.get(base_url + '/all')
    },
    DeleteCategory(id) {
        return axios.delete(base_url + '/' + id)
    },
}
