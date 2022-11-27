<script setup>
import { ref } from "vue";
import { Link } from "@inertiajs/inertia-vue3";
import { Bars3Icon } from "@heroicons/vue/24/outline";
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
        <div class="text-white hidden md:flex">
          <Link class="py-1 px-7 font-semibold">Home</Link>
          <Link class="py-1 px-7 font-semibold">Article</Link>
          <Link class="py-1 px-7 font-semibold bg-red-600 rounded-xl"
            >Sign Up</Link
          >
        </div>
        <Bars3Icon
          class="text-white h-10 w-10 md:hidden"
          @click="showingNavigationDropdown = !showingNavigationDropdown"
        />
      </div>
      <div
        :class="`text-white
        md:hidden
        absolute
        w-full
        bg-primary-base
        top-16 ${showingNavigationDropdown ? 'block' : 'hidden'}`"
      >
        <ul>
          <li class="py-3 border-b-2 border-primary-lighter">
            <Link class="py-1 px-7 font-semibold">Home</Link>
          </li>
          <li class="py-3 border-b-2 border-primary-lighter">
            <Link class="py-1 px-7 font-semibold">Article</Link>
          </li>
          <li class="py-3 border-b-2 border-primary-lighter">
            <Link class="py-1 px-7 font-semibold">Sign Up</Link>
          </li>
        </ul>
      </div>
    </div>
    <slot />
    <div
      class="py-4 flex justify-center bg-primary-base text-white font-semibold"
    >
      <div class="container md:flex justify-between items-center">
        <div class="flex justify-center md:justify-start mb-2">
          <a v-for="social in SOCIALS" :key="social" href="#" target="__blank">
            <img
              :src="`images/${social}`"
              :alt="social"
              class="h-5 w-5 md:h-10 md:w-10 mr-3"
            />
          </a>
        </div>
        <div class="text-center md:text-left">Copyright 2022@NOVA</div>
      </div>
    </div>
  </div>
</template>
