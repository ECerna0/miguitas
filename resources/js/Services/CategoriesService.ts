import axios from "axios";

let base_url = '/admin/cat';
export default {
    CreateNewCategory(payload: any) {
        return axios.post(base_url, payload);
    },
    UpdateCategory(payload: any) {
        return axios.update(base_url + '/' + payload.id, payload);
    },
    GetCategories() {
        return axios.get(base_url + '/all')
    },
}
