<script setup>
import DefaultLayout from "@/Layouts/DefaultLayout.vue";
import { Head, Link } from "@inertiajs/inertia-vue3";

defineProps(["articles"]);
</script>

<template>
  <Head title="Articles" />

  <DefaultLayout>
    <div class="bg-custom-white">
      <div class="container mx-auto px-4 py-6">
        <div
          class="
            shadow-xl
            py-10
            px-10
            rounded-xl
            flex flex-row flex-wrap-reverse
            items-center
          "
        >
          <div class="w-full md:w-1/2">
            <Link href="#" class="text-3xl font-bold mb-5">{{
              articles[0].title
            }}</Link>
            <p class="mt-5">{{ articles[0].content }}</p>
          </div>
          <div class="w-full md:w-1/2 mb-10">
            <img
              :src="`/storage/${articles[0].image}`"
              :alt="articles[0].title"
            />
          </div>
        </div>
        <div class="flex flex-row flex-wrap mt-20">
          <div
            class="basis-full md:basis-1/2 px-3 mb-16"
            v-for="i in articles.length - 1"
            :key="i"
          >
            <Link href="#" class="text-3xl font-bold mb-5">{{
              articles[i].title
            }}</Link>
            <p class="mt-5">{{ articles[i].content }}</p>
          </div>
        </div>
      </div>
    </div>
  </DefaultLayout>
</template>
