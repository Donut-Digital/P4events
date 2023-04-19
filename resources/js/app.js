require('./bootstrap')

import { createApp } from 'vue'
import component from "./components/component.vue";
import '../css/app.css';

import './scripts/navigation_menu';
import './scripts/navigation_shrink';
import './scripts/contact_us_form';

const app = createApp({})

app.component('component', component)

app.mount('#app')


