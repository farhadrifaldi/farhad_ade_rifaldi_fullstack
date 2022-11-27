<script setup>
import { onMounted, ref } from "vue";

defineProps(["modelValue"]);

defineEmits(["update:modelValue"]);

const input = ref(null);

onMounted(() => {
  if (input.value.hasAttribute("autofocus")) {
    input.value.focus();
  }
});

defineExpose({ focus: () => input.value.focus() });
</script>

<template>
  <input
    class="
      block
      w-full
      text-sm text-gray-900
      border border-gray-300
      rounded-md
      cursor-pointer
      bg-gray-50
      focus:outline-none
      py-1
    "
    id="file_input"
    type="file"
    @input="$emit('update:modelValue', $event.target.files[0])"
    ref="input"
  />
</template>
