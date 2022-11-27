<script setup>
import { ref } from "vue";
import { Link } from "@inertiajs/inertia-vue3";

const showingNavigationDropdown = ref(false);

const SOCIALS = [
  "facebook.png",
  "tiktok.png",
  "youtube.png",
  "instagram.png",
  "twitter.png",
];
</script>

<template>
  <div>
    <div class="h-16 flex justify-center bg-primary-base">
      <div class="container flex justify-between items-center">
        <img src="/images/logo-white.png" alt="" />
        <div class="flex text-white">
          <Link class="py-1 px-7 font-semibold">Home</Link>
          <Link class="py-1 px-7 font-semibold">Article</Link>
          <Link class="py-1 px-7 font-semibold bg-red-600 rounded-xl"
            >Sign Up</Link
          >
        </div>
      </div>
    </div>
    <slot />
    <div
      class="h-14 flex justify-center bg-primary-base text-white font-semibold"
    >
      <div class="container flex justify-between items-center">
        <div class="flex">
          <a v-for="social in SOCIALS" :key="social" href="#" target="__blank">
            <img
              :src="`images/${social}`"
              :alt="social"
              class="h-10 w-10 mr-3"
            />
          </a>
        </div>
        <div>Copyright 2022@NOVA</div>
      </div>
    </div>
  </div>
</template>
