<script setup>

import {onMounted, ref} from "vue";
import { wishlist_store } from '../../stores/wishlist_store.js';

// values passed into the component
const props = defineProps(["product"]);
const product = JSON.parse(props.product);

const quantity = ref('0');
const quantity_validated = ref(true);
const validation_label = ref('Add to my wishlist');

function addProductToWishlist()
{
  if(quantity.value === '0')
  {
    quantity_validated.value = false;
    return;
  }

  quantity_validated.value = true;

  let wishlist = JSON.parse(localStorage.getItem('wishlist')) ?? [];

  wishlist.filter(function(wishlist_product,i)
  {
    if (product.id === wishlist_product.id){ wishlist.splice(i,1) }
  });

  wishlist.push(
      {
        id:product.id,
        permalink:product.permalink,
        title:product.title,
        img:product.featured_image.permalink,
        description:product.product_description,
        quantity:quantity.value
      });

  localStorage.setItem('wishlist', JSON.stringify(wishlist));
  wishlist_store.count = wishlist.length;

  validation_label.value = 'Wishlist updated';
  setTimeout(function() { validation_label.value = 'Update in my wishlist'; }, 3000);

}

</script>

<template>
  <div class="h-fit flex flex-row bg-support" :class='{ "border-2 border-primary":!quantity_validated }'>
    <select v-model="quantity" id="quantity" class="bg-support text-gray-900 text-xl h-[60px] block w-full px-8 py-4 appearance-none outline-none">
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
    <i class="fa-solid fa-sort-down text-xl text-primary my-auto px-5 pb-2"></i>
  </div>
  <button @click="addProductToWishlist()" class="w-full my-auto flex flex-row justify-between mt-4 text-white bg-primary py-4 px-[18px] hover:bg-dim-gray">
    <span class="pl-4">{{ validation_label }}</span> <i class="my-auto fa-solid fa-list"></i>
  </button>
  <p class="pt-2">Add this item to your wishlist to receive a quote back from one of our specialist event planners.</p>
</template>
