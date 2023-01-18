import './bootstrap';
import {createApp} from 'vue';

import router from "./plugins/router";
import vuetify from "./plugins/vuetify";

const BaseComponent = {

};

createApp(BaseComponent)
    .use(vuetify)
    .use(router)
    .mount("#app");
