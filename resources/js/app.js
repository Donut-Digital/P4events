require("./bootstrap");

import { createApp } from "vue";
import contact_us_form from "./components/forms/contact_us_form.vue";
import join_us_form from "./components/forms/join_us_form.vue";
import event_form from "./components/forms/event_form.vue";

import slider_block from "./components/blocks/slider_block.vue";
import article_filter_block from "./components/blocks/article_filter_block.vue";

import wishlist from "./components/wishlist/wishlist.vue";
import my_wishlist from "./components/wishlist/my_wishlist.vue";
import add_to_wishlist from "./components/wishlist/add_to_wishlist.vue";
import submit_wishlist from "./components/wishlist/submit_wishlist.vue";

import "../css/app.css";

import "./scripts/navigation_menu";
import "./scripts/products_slider";

const app = createApp({});

app.component("contact-us-form", contact_us_form);
app.component("join-us-form", join_us_form);
app.component("event-form", event_form);

app.component("slider-block", slider_block);
app.component("article-filter-block", article_filter_block);

app.component("wishlist", wishlist);
app.component("my-wishlist", my_wishlist);
app.component("add-to-wishlist", add_to_wishlist);
app.component("submit-wishlist", submit_wishlist);

app.mount("#app");
