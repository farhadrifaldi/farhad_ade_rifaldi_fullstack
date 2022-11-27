<script setup>
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
import { Head, Link, useForm } from "@inertiajs/inertia-vue3";
import PrimaryButton from "@/Components/PrimaryButton.vue";
import SecondaryButton from "@/Components/SecondaryButton.vue";

defineProps(["articles"]);

const deleteArticle = (id) => {
  const form = useForm({ id: id });
  form.delete(route("article.delete"));
};
</script>

<template>
  <Head title="Articles" />

  <AuthenticatedLayout>
    <template #header>
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        Articles
      </h2>
    </template>

    <div class="py-12">
      <Link :href="route('article.create')" :class="'mb-4'">
        <PrimaryButton>+ Add Article</PrimaryButton>
      </Link>

      <table
        class="table-aut w-full border border-grey-100 rounded-lg mt-8"
        v-if="articles.length > 0"
      >
        <thead>
          <tr class="text-left">
            <th class="border-b border-grey-100 p-4 pl-8 text-slate-500">ID</th>
            <th class="border-b border-grey-100 p-4 pl-8 text-slate-500">
              Title
            </th>
            <th class="border-b border-grey-100 p-4 pl-8 text-slate-500">
              Slug
            </th>
            <th class="border-b border-grey-100 p-4 pl-8 text-slate-500">
              Image
            </th>
            <th class="border-b border-grey-100 p-4 pl-8 text-slate-500">
              Action
            </th>
          </tr>
        </thead>
        <tbody>
          <tr v-for="article in articles" :key="article.id">
            <td class="border-b border-grey-100 p-4 pl-8 text-slate-500">
              {{ article.id }}
            </td>
            <td class="border-b border-grey-100 p-4 pl-8 text-slate-500">
              {{ article.title }}
            </td>
            <td class="border-b border-grey-100 p-4 pl-8 text-slate-500">
              {{ article.slug }}
            </td>
            <td class="border-b border-grey-100 p-4 pl-8 text-slate-500">
              <img
                :src="'/storage/' + article.image"
                :alt="article.image"
              />
            </td>
            <td class="border-b border-grey-100 p-4 pl-8 text-slate-500">
              <Link
                class="mr-4"
                :href="route('article.edit', { id: article.id })"
              >
                <SecondaryButton>Detail</SecondaryButton>
              </Link>
              <SecondaryButton @click="deleteArticle(article.id)"
                >Delete</SecondaryButton
              >
            </td>
          </tr>
        </tbody>
      </table>

      <p class="text-center font-bold text-2xl" v-if="articles.length < 1">
        No Data!
      </p>
    </div>
  </AuthenticatedLayout>
</template>
