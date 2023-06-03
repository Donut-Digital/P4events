<script setup>

import { ref } from "vue";

// values passed into the component
const props = defineProps(["categories","latest"]);

let active_filter = ref('');

function set_active_filter(filter)
{

  if(active_filter.value === filter)
  {
    active_filter.value = '';
  }
  else
  {
    active_filter.value = filter;
  }
}

</script>

<template>
  <div class="mx-auto w-full xl:max-w-screen-xl pt-4 px-4">
    <div class="flex gap-3">
      <div :class='{ "bg-dim-gray hover:bg-primary text-white text-2xl py-3 w-full text-center":true,
                    "bg-primary": active_filter === "categories" }'
      @click="set_active_filter('categories')">
        Categories
      </div>

      <div :class='{ "bg-dim-gray hover:bg-primary text-white text-2xl py-3 w-full text-center":true,
                    "bg-primary": active_filter === "latest" }'
       @click="set_active_filter('latest')">
        Recent Posts
      </div>
    </div>

    <div class="flex flex-wrap pt-3 gap-y-4" v-if="active_filter === 'categories'">
      <div class="w-1/2 lg:w-1/3" v-for="category in props.categories">
        <a :href="'/category/'+category.slug" class="block text-center bg-white-smoke hover:bg-primary text-davy-gray hover:text-white p-2 mx-2">{{ category.title }}</a>
      </div>
    </div>

    <div class="flex flex-wrap pt-3 gap-y-4" v-if="active_filter === 'latest'">
      <div class="w-1/2 lg:w-1/3" v-for="article in props.latest">
        <a :href="article.permalink" class="block text-center bg-white-smoke hover:bg-primary text-davy-gray hover:text-white p-2 mx-2">{{ article.title }}</a>
      </div>
    </div>

  </div>

</template>
