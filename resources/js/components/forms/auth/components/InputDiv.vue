<script setup>
import { watch, ref } from "vue";

const props = defineProps(["name", "label", "errors"]);
const emit = defineEmits(["inputValue"]);

let inputValue = ref("");

watch(inputValue, (newValue) => {
  if (newValue.length !== 0) {
    emit("inputValue", newValue.toLocaleLowerCase());
  }
});
</script>
<template>
  <div class="flex flex-col">
    <label :for="name" class="font-semibold text-[18px]">{{ label }}</label>
    <input
      :type="name === 'password' ? 'password' : 'text'"
      :name="name"
      class="w-full h-11.25 rounded-md pl-2.5 border border-(--light-gray-color)"
      v-model="inputValue"
      autocomplete="on"
    />
    <span v-if="errors" class="text-red-500 text-sm">{{ errors }}</span>
  </div>
</template>
