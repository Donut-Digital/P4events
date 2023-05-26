<script setup>
  import { wishlist_store } from '../../stores/wishlist_store.js';
</script>

<template>
  <a href="/wish-list" class="block h-max my-auto text-white bg-primary p-4 hover:bg-dim-gray">
    My Wishlist
    <span v-if="wishlist_store.count > 0">
      ({{wishlist_store.count}})
    </span>
    <i class="pl-2 fa-solid fa-list"></i>
  </a>
</template>
