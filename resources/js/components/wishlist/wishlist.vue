<script setup>

import { ref } from "vue";
import {wishlist_store} from "../../stores/wishlist_store";

let wishlist = ref(JSON.parse(localStorage.getItem('wishlist')));

let sortedWishlist = function() {
  return wishlist.value.sort((a, b) => {
    if (a.title > b.title) return 1;
    else return -1;
  });
}

function RemoveProductFromWishlist(product)
{
  wishlist.value.filter(function(wishlist_product,i)
  {
    if (product === wishlist_product.id){ wishlist.value.splice(i,1) }
  });

  localStorage.setItem('wishlist', JSON.stringify(wishlist.value));
  wishlist_store.count = wishlist.length;
}

function UpdateProductOnWishlist(product,event)
{
  wishlist.value.filter(function(wishlist_product,i)
  {
    if (product.id === wishlist_product.id){ wishlist.value.splice(i,1); }
  });

  wishlist.value.push(
    {
      id:product.id,
      permalink:product.permalink,
      title:product.title,
      img:product.img,
      alt:product.alt,
      description:product.description,
      quantity:event.target.value
    });

  localStorage.setItem('wishlist', JSON.stringify(wishlist.value));
}

</script>

<template>
  <h3 class="mb-2 px-5 py-3 text-white bg-dim-gray">My Wishlist</h3>

  <div class="flex flex-col py-4">
    <div v-for="(item,index) in sortedWishlist()" class="mx-4 flex flex-row justify-between py-6" :class="{ 'border-b' :index !== wishlist.length - 1 }">
      <img :src="item.img" :alt="item.alt" class="w-32 object-contain pr-4" loading="lazy">
      <a :href="item.permalink" class="my-auto h-max w-22 sm:w-44 shrink-0">
        <h4 class="hover:text-primary hover:cursor-pointer">{{ item.title }}</h4>
      </a>

      <div class="md:my-auto md:px-6 hidden md:block">
        <p class="line-clamp-2" v-html="item.description">

        </p>
      </div>

      <div class="my-auto flex h-fit w-20 md:w-24 shrink-0 flex-row bg-support">
        <select id="quantity" @change="UpdateProductOnWishlist(item,$event)"
                class="block w-full appearance-none px-4 py-4 text-xl text-gray-900 outline-none bg-support h-[60px]" :value="item.quantity">
          <option selected value="0">Quantity</option>
          <option value="1">1</option>
          <option value="2">2</option>
          <option value="3">3</option>
          <option value="4">4</option>
          <option value="5">5</option>
          <option value="6">6</option>
          <option value="7">7</option>
          <option value="8">8</option>
          <option value="9">9</option>
          <option value="10">10</option>
        </select>
        <i class="my-auto pr-4 pb-2 text-xl fa-solid fa-sort-down text-primary"></i>
      </div>


      <i @click="RemoveProductFromWishlist(item.id)" class="my-auto h-max pl-4 md:px-6 text-xl fa-solid fa-trash hover:text-primary hover:cursor-pointer"></i>
    </div>

  </div>

  <div class="flex flex-col lg:flex-row justify-between">
      <span class="order-last lg:order-first text-center lg:text-left m-auto lg:m-0 w-full sm:w-2/3 lg:w-2/5 text-davy-gray pr-2">
        Once you send your wishlist over to one of specialist planners, we will contact you shortly with a quote.
      </span>

    <a href="/wish-list/send" class="flex text-center m-auto lg:m-0 w-full sm:w-2/3 lg:w-2/5 flex-row justify-center px-5 py-4 text-white bg-primary hover:bg-dim-gray">
      <span class="pr-4 text-center">Send my wishlist to our specialist planner</span> <i class="my-auto fa-solid fa-list"></i>
    </a>
  </div>

</template>
