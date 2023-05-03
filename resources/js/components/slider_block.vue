<script setup>

import { ref } from "vue";
import { register } from 'swiper/element/bundle';

register();

// values passed into the component
const props = defineProps(['slides']);

let pagination =
  {
    el: '.swiper-pagination',
    clickable: true
}

let autoplay = false;
// {
//   delay: 4500,
//   disableOnInteraction: false,
// }

</script>

<template>
  <div>
    <swiper-container :pagination="pagination" :spaceBetween="30" :autoplay="autoplay">
      <swiper-slide v-for="slide in props.slides">
        <div class="flex flex-col lg:flex-row gap-4">
          <img class="lg:w-1/2" :src="slide.image.permalink">
          <div class="lg:w-1/2 flex flex-row text-center">
            <img class="w-10 lg:w-20 h-10 lg:h-20" :src="'/images/quote.png'">
            <div class="px-4">
              <p class="py-8">{{ slide.quote }}</p>
              <p class="text-lg">by {{ slide.quote_source }}</p>
            </div>
            <img class="w-10 lg:w-20 h-10 lg:h-20 self-end" :src="'/images/quote.png'">
          </div>
        </div>
      </swiper-slide>
    </swiper-container>
    <div class="swiper-pagination" />
  </div>

</template>

