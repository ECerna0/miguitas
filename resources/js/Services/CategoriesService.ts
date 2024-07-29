import axios from "axios";
let base_url= '/admin/cat';
export default {
    CreateNewCategory(payload: any) {
        return axios.post(base_url, payload);
    },
    GetReport() {
        return axios.get('/chart/report')
    },
}
