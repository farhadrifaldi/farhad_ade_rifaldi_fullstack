<script setup>
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
import InputError from "@/Components/InputError.vue";
import InputLabel from "@/Components/InputLabel.vue";
import PrimaryButton from "@/Components/PrimaryButton.vue";
import TextInput from "@/Components/TextInput.vue";
import UploadInput from "@/Components/UploadInput.vue";
import TextInputArea from "@/Components/TextInputArea.vue";
import { Head, Link, useForm } from "@inertiajs/inertia-vue3";
import { onMounted } from "vue";

const props = defineProps(["isEdit", "article"]);

const form = useForm({
  title: "",
  slug: "",
  image: null,
  content: "",
});

const submit = () => {
  const routeString = props.isEdit
    ? route("article.update", { id: props.article.id })
    : route("article.insert");
  form.post(routeString, {
    onFinish: () => form.reset("title", "slug", "content", "image"),
    forceFormData: true,
  });
};

onMounted(() => {
  if (props.isEdit) {
    form.title = props.article.title;
    form.slug = props.article.slug;
    form.content = props.article.content;
  }
});
</script>

<template>
  <Head title="Articles" />

  <AuthenticatedLayout>
    <template #header>
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        {{ isEdit ? "Edit Article" : "Insert Article" }}
      </h2>
    </template>

    <div class="py-12">
      <form @submit.prevent="submit">
        <div>
          <InputLabel for="title" value="Title" />

          <TextInput
            id="title"
            type="text"
            class="mt-1 block w-full"
            v-model="form.title"
            required
            autofocus
            autocomplete="title"
          />

          <InputError class="mt-2" :message="form.errors.username" />
        </div>

        <div class="mt-4">
          <InputLabel for="slug" value="Slug" />

          <TextInput
            id="slug"
            type="text"
            class="mt-1 block w-full"
            v-model="form.slug"
            required
            autocomplete="slug"
          />

          <InputError class="mt-2" :message="form.errors.slug" />
        </div>

        <div class="mt-4">
          <InputLabel for="image" value="Image" />

          <UploadInput
            id="image"
            class="mt-1 block w-full"
            v-model="form.image"
            required
            autocomplete="image"
          />

          <InputError class="mt-2" :message="form.errors.image" />
        </div>

        <div class="mt-4">
          <InputLabel for="content" value="Content" />

          <TextInputArea
            id="content"
            class="mt-1 block w-full"
            v-model="form.content"
            required
            autocomplete="content"
          />

          <InputError class="mt-2" :message="form.errors.content" />
        </div>

        <div class="mt-4">
          <PrimaryButton
            :class="{ 'opacity-25': form.processing }"
            :disabled="form.processing"
          >
            Submit
          </PrimaryButton>
        </div>
      </form>
    </div>
  </AuthenticatedLayout>
</template>
