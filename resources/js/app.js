require('./bootstrap')

import { createApp } from 'vue'
import contact_us_form from "./components/contact_us_form.vue";
import '../css/app.css';

import './scripts/navigation_menu';
import './scripts/navigation_shrink';

const app = createApp({})

app.component('contact-us-form', contact_us_form)

app.mount('#app')


