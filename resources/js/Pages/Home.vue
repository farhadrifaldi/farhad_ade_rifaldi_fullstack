<script setup>
import DefaultLayout from "@/Layouts/DefaultLayout.vue";
import { Head } from "@inertiajs/inertia-vue3";
import { StarIcon } from "@heroicons/vue/20/solid";
import { StarIcon as OutlineStar } from "@heroicons/vue/24/outline";
const WORKS = [
  {
    title: "Create Account",
    image: "/images/01.png",
    description:
      "There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration.",
  },
  {
    title: "Make a Content",
    image: "/images/02.png",
    description:
      "There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration.",
  },
  {
    title: "Publish It",
    image: "/images/03-1.png",
    description:
      "There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration.",
  },
];

const CARDS_CONTENT = [
  {
    image: "/images/glass.jpg",
    title: "Creative Design",
    description:
      "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quas, distinctio!",
  },
  {
    image: "/images/pencil.png",
    title: "Just Write It",
    description:
      "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quas, distinctio!",
  },
  {
    image: "/images/layout.png",
    title: "Responsive Layout",
    description:
      "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quas, distinctio!",
  },
  {
    image: "/images/ribbon.png",
    title: "Award System",
    description:
      "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quas, distinctio!",
  },
];

const TESTIMONIES = [
  {
    name: "Michael L. Douglas",
    content:
      "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis earum delectus distinctio quidem possimus! Quidem, nulla alias! Itaque laudantium corporis dolorum aut voluptates voluptatum amet rerum.",
    rating: 5,
    image: "/images/67 1.jpg",
  },
  {
    name: "Michael L. Douglas",
    content:
      "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis earum delectus distinctio quidem possimus! Quidem, nulla alias! Itaque laudantium corporis dolorum aut voluptates voluptatum amet rerum.",
    rating: 3,
    image: "/images/60 1.jpg",
  },
  {
    name: "Michael L. Douglas",
    content:
      "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis earum delectus distinctio quidem possimus! Quidem, nulla alias! Itaque laudantium corporis dolorum aut voluptates voluptatum amet rerum.",
    rating: 4,
    image: "/images/67 1-1.jpg",
  },
];
</script>

<template>
  <Head title="Dashboard" />

  <DefaultLayout>
    <div
      class="
        w-full
        bg-gradient-to-r
        from-primary-base
        via-[#505bc7]
        to-primary-lighter
        py-32
        text-white
        flex
        justify-center
      "
    >
      <div class="container flex flex-row flex-wrap">
        <div class="basis-1/3 flex items-center">
          <div>
            <p class="text-6xl font-bold mb-4">
              Nova Content Management System
            </p>
            <p>
              It is a long established fact that a reader will be distracted by
              the readable content of a page when looking at its layout.
            </p>
          </div>
        </div>
        <div class="basis-2/3">
          <img src="/images/illustration-1.png" alt="illus-1" class="mx-auto" />
        </div>
        <div class="basis-full mt-28 mb-6">
          <p class="text-2xl font-bold">How its work</p>
        </div>
        <div
          v-for="work in WORKS"
          class="basis-1/3 bg-no-repeat pt-4 px-2"
          :key="work.title"
          :style="`background-image: url('${work.image}')`"
        >
          <p class="font-bold mb-2">{{ work.title }}</p>
          <p>{{ work.description }}</p>
          <hr class="border-yellow-500 border-2 w-2/3 mt-4" />
        </div>
      </div>
    </div>
    <div
      class="bg-no-repeat h-96 -mt-2 bg-custom-white"
      style="
        background-image: url('/images/bg-home.png');
        background-size: 100%;
      "
    >
      <div class="flex flex-row">
        <div
          v-for="card in CARDS_CONTENT"
          :key="card.title"
          class="basis-1/3 py-4 px-10"
        >
          <div class="bg-white rounded-md text-center py-10 drop-shadow-lg">
            <img :src="card.image" :alt="card.title" class="mx-auto mb-4" />
            <p class="font-bold mb-5">{{ card.title }}</p>
            <p class="">{{ card.description }}</p>
          </div>
        </div>
      </div>
    </div>
    <div class="bg-custom-white">
      <div class="container flex mx-auto px-8 mb-5">
        <div class="w-1/2">
          <img
            src="/images/ececee06-8c52-4513-9355-3e0ea29e8ea5 1 (1).png"
            alt="96b69ed3-d637-48df-bb57-1ce1c111c626 1.png"
          />
        </div>
        <div class="w-1/2 flex items-center">
          <div>
            <p class="text-3xl font-bold mb-4">
              Easy To Use On All Your device
            </p>
            <p>
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis
              earum delectus distinctio quidem possimus! Quidem, nulla alias!
              Itaque laudantium corporis dolorum.
              <br />
              <br />
              Aut voluptates voluptatum amet rerum, vero consequatur, accusamus
              perspiciatis voluptatibus eum.
            </p>
          </div>
        </div>
      </div>
      <div class="container flex mx-auto px-8 mb-5">
        <div class="w-1/2 flex items-center">
          <div>
            <p class="text-3xl font-bold mb-4">
              Manage All Content With Creativity
            </p>
            <p>
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis
              earum delectus distinctio quidem possimus! Quidem, nulla alias!
              Itaque laudantium corporis dolorum.
              <br />
              <br />
              Aut voluptates voluptatum amet rerum, vero consequatur, accusamus
              perspiciatis voluptatibus eum.
            </p>
          </div>
        </div>
        <div class="w-1/2">
          <img
            src="/images/96b69ed3-d637-48df-bb57-1ce1c111c626 1.png"
            alt="96b69ed3-d637-48df-bb57-1ce1c111c626 1.png"
          />
        </div>
      </div>
      <div class="container flex mx-auto px-8 mb-5">
        <div class="w-1/2">
          <img
            src="/images/793b60c6-6939-4938-9eea-67dbf61e1e9c 1.png"
            alt="793b60c6-6939-4938-9eea-67dbf61e1e9c 1.png"
          />
        </div>
        <div class="w-1/2 flex items-center">
          <div>
            <p class="text-3xl font-bold mb-4">
              The Best Content Management System
            </p>
            <p>
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis
              earum delectus distinctio quidem possimus! Quidem, nulla alias!
              Itaque laudantium corporis dolorum.
              <br />
              <br />
              Aut voluptates voluptatum amet rerum, vero consequatur, accusamus
              perspiciatis voluptatibus eum.
            </p>
          </div>
        </div>
      </div>
    </div>
    <div class="bg-primary-light px-4 py-8">
      <p class="text-3xl text-white font-bold">Client Testimony</p>
      <div class="flex flex-row">
        <div
          v-for="testimony in TESTIMONIES"
          :key="testimony.title"
          class="basis-1/3 py-4 px-2"
        >
          <div class="bg-white rounded-md text-center py-5 drop-shadow-lg px-4">
            <div class="flex mb-4">
              <img :src="testimony.image" :alt="testimony.image" />
              <div class="ml-3">
                <p class="font-bold">{{ testimony.name }}</p>
                <div class="flex">
                  <StarIcon
                    class="text-yellow-500 w-5 h-5"
                    v-for="i in testimony.rating"
                    :key="i"
                  />
                  <OutlineStar
                    class="w-5 h-5 text-gray-400"
                    v-for="i in 5 - testimony.rating"
                    :key="i"
                  />
                </div>
              </div>
            </div>
            <p class="">{{ testimony.content }}</p>
          </div>
        </div>
      </div>
    </div>
  </DefaultLayout>
</template>
