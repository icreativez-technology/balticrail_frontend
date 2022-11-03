import { createApp } from "vue";
import App from "./App.vue";
import router from "./router";
import axios from "axios";
import VueCarousel from 'vue-carousel';
import Toast from "vue-toastification";
import "vue-toastification/dist/index.css";
import "./assets/main.css";

axios.defaults.baseURL = "http://16.171.25.197/api/v1/balticrail/";
var token = localStorage.getItem("token");
if(token){
axios.defaults.headers.common = {'Authorization': `Bearer ${token}`} 
}

const app = createApp(App);

app.use(router);
app.use(VueCarousel);
app.use(Toast);

app.mount("#app");
