<script setup>
import { register } from "swiper/element/bundle";
register();

// values passed into the component
const props = defineProps(["slides"]);

let pagination = {
  el: ".swiper-pagination",
  clickable: true,
};

let autoplay = {
  delay: 4500,
  disableOnInteraction: false,
};
</script>

<template>
  <div>
    <swiper-container
      :pagination="pagination"
      :spaceBetween="30"
      :autoplay="autoplay"
    >
      <swiper-slide v-for="slide in props.slides">
        <div class="flex flex-col gap-4 lg:flex-row">
          <img class="lg:w-1/2 h-[350px] object-cover" :src="slide.image.permalink" :alt="slide.image.alt" loading="lazy" />
          <div class="flex flex-row text-center lg:w-1/2">
            <img
                class="h-10 w-10 min-w-fit lg:h-20 lg:w-20"
                :src="'/images/quote.png'"
                alt="quote"
                loading="lazy"
            />
            <div class="px-4">
              <p class="py-8">{{ slide.quote }}</p>
              <p class="text-lg">by {{ slide.quote_source }}</p>
            </div>
            <img
              class="h-10 w-10 min-w-fit self-end lg:h-20 lg:w-20"
              :src="'/images/quote.png'"
              alt="quote"
              loading="lazy"
            />
          </div>
        </div>
      </swiper-slide>
    </swiper-container>
    <div class="swiper-pagination" />
  </div>
</template>
